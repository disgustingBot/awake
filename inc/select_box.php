<?php
/*
=selectBox

This function generates a selectBox object

PARAMETROS:
$config => un vector que da configuraciones generales al select del tipo:
array(
	'label' => 'Select',
	'class' => 'my_class or_classes',
	'slug' => 'select',
	'empty' => 'Empty'
)
$options => un vector del tipo:
array(
	[0] => array(
		'slug' => 'option_0_slug'
		'name' => 'option_0_name'
		'selected' => True
	),
	[1] => array(
		'slug' => 'option_1_slug'
		'name' => 'option_1_name'
	)
)
$config['empty'] => el nombre visible de la opcion de vaciar el select
$config['slug'] => el nombre invisible del select (para CSS) se concatena a selectBox, ejemplo:
$config['slug'] = 'MiSelect' resulta en la clase -> 'selectBoxMiSelect'
*/
function selectBox($config, $options = array()){
	if(!isset($config['slug'])){ $config['slug'] = sanitize_title($config['label']); }
	// var_dump($options);

	$config_default = array(
		'label' => 'Select',
		'class' => 'my_class or_classes',
		'empty' => 'Empty',
		'slug'  => 'select',
	);

	// check for selected items on the option list
	$selected = array('name'=>'','selected'=>False);
	$selected = array_reduce($options,function($accu, $opt){
		if ($accu != False) return $accu;
		if (isset($opt['selected']) and $opt['selected'] == True) return $opt;
		return False;
	},False);

	// var_dump($selected);
	?>
	<div class="SelectBox <?php if ( isset($selected['selected']) AND $selected['selected'] ){echo 'alt';} ?> <?= $config['class']; ?>" tabindex="1" id="selectBox<?= $config['slug']; ?>">
		<div class="selectBoxButton" onclick="altClassFromSelector('focus', '#selectBox<?= $config['slug']; ?>')">
			<p class="selectBoxPlaceholder"><?= $config['label']; ?></p>
			<p class="selectBoxCurrent" id="selectBoxCurrent<?= $config['slug']; ?>"><?php if(isset($selected['name'])) echo $selected['name']; ?></p>
		</div>
		<div class="selectBoxList focus">
			<label for="nul_<?= $config['slug']; ?>" class="selectBoxOption" id="selectBoxOptionNul">
				<input
					class="selectBoxInput"
					id="nul_<?= $config['slug']; ?>"
					type="radio"
					name="<?= $config['slug']; ?>"
					onclick="selectBoxControler('','#selectBox<?= $config['slug']; ?>','#selectBoxCurrent<?= $config['slug']; ?>')"
					value="0"
					<?php if(!isset($_GET[$config['slug']])){ ?>
						checked
					<?php } ?>
				>
				<!-- <span class="checkmark"></span> -->
				<p class="colrOptP"><?= $config['empty']; ?></p>
			</label>


			<?php foreach ($options as $option) {
				if(!isset($option['value'])){$option['value'] = $option['slug'];}
				$option['name'] = preg_replace('/\s+/', ' ', trim($option['name'])); ?>

				<label for="<?= $config['slug']; ?>_<?= $option['slug']; ?>" class="selectBoxOption">
					<input
						class="selectBoxInput <?= $option['slug']; ?>"
						type="radio"
						id="<?= $config['slug']; ?>_<?= $option['slug']; ?>"
						name="<?= $config['slug']; ?>"
						onclick="selectBoxControler('<?= $option['name']; ?>', '#selectBox<?= $config['slug']; ?>', '#selectBoxCurrent<?= $config['slug']; ?>')"
						value="<?= $option['value']; ?>"
						<?php if(isset($option['selected']) && $option['selected'] == True){ ?>
							checked
						<?php } ?>
						<?php
						if (isset($option['data'])) {
							foreach ($option['data'] as $key => $value) {
								echo "data-$key='$value'";
							}
						}
						?>
					>
					<!-- <span class="checkmark"></span> -->
					<p class="colrOptP"><?= $option['name']; ?></p>
				</label>


			<?php } ?>
		</div>
	</div>
<?php }
