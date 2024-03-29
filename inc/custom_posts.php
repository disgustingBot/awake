<?php
// Built by www.lattedev.com
function lt_new_custom_post($name, $icon = '', $taxonomies = array() ){
	$last_letter = substr($name, -1);
	if( in_array( $last_letter, array('a','e','i','o','u') ) ){
		$name_pl    = $name.'s';
	} else {
		$name_pl    = $name.'es';
	}
	$name_M     = ucfirst($name);
	$name_M_pl  = ucfirst($name_pl);

    /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
	$labels = array(
		'name'               => _x( $name_M_pl, 'post type general name', 'lt-domain' ),
		'singular_name'      => _x( $name_M, 'post type singular name', 'lt-domain' ),
		'menu_name'          => _x( $name_M_pl, 'admin menu', 'lt-domain' ),
		'add_new'            => _x( 'Añadir nuevo', $name, 'lt-domain' ),
		'add_new_item'       => __( 'Añadir nuevo ' . $name, 'lt-domain' ),
		'new_item'           => __( 'Nuevo ' . $name, 'lt-domain' ),
		'edit_item'          => __( 'Editar ' . $name, 'lt-domain' ),
		'view_item'          => __( 'Ver ' . $name, 'lt-domain' ),
		'all_items'          => __( 'Todos les ' . $name_pl, 'lt-domain' ),
		'search_items'       => __( 'Buscar ' . $name_pl, 'lt-domain' ),
		'not_found'          => __( 'No hay ' . $name_pl, 'lt-domain' ),
		'not_found_in_trash' => __( 'Ningun ' . $name . ' en la papelera.', 'lt-domain' )
	);

    /* Configuro el comportamiento y funcionalidades del nuevo custom post type */
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Desctripción.', 'lt-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_nav_menus'  => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => $name ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'taxonomies'         => $taxonomies,
		'menu_icon'          => $icon,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions', 'custom-fields' )
	);
	register_post_type( $name, $args );

	foreach ($taxonomies as $key => $tax_name) {
		$last_letter = substr($tax_name, -1);
		if( in_array( $last_letter, array('a','e','i','o','u') ) ){
			$tax_name_pl    = $tax_name.'s';
		} else {
			$tax_name_pl    = $tax_name.'es';
		}
		$tax_name_M     = ucfirst($tax_name);
		$tax_name_M_pl  = ucfirst($tax_name_pl);
		# code...
		/* Configuramos las etiquetas que mostraremos en el escritorio de WordPress */
		$labels = array(
			'name'             => _x( $tax_name_M_pl, 'taxonomy general name', 'lt-domain' ),
			'singular_name'    => _x( $tax_name_M, 'taxonomy singular name', 'lt-domain' ),
			'search_items'     => __( 'Buscar por ' . $tax_name, 'lt-domain' ),
			'all_items'        => __( 'Todos les ' . $tax_name_pl, 'lt-domain' ),
			'parent_item'      => __( $tax_name_M . ' padre', 'lt-domain' ),
			'parent_item_colon'=> __( $tax_name_M . ' padre:', 'lt-domain' ),
			'edit_item'        => __( 'Editar ' . $tax_name, 'lt-domain' ),
			'update_item'      => __( 'Actualizar ' . $tax_name_pl, 'lt-domain' ),
			'add_new_item'     => __( 'Añadir nuevo ' . $tax_name, 'lt-domain' ),
			'new_item_name'    => __( 'Nombre del nuevo ' . $tax_name, 'lt-domain' ),
		);

		/* Registramos la taxonomía y la configuramos como jerárquica (al estilo de las categorías) */
		register_taxonomy( $tax_name, array( $name ), array(
			'labels'             => $labels,
			'public'             => true,
			'hierarchical'       => true,
			'show_ui'            => true,
			'query_var'          => true,
			'show_in_nav_menus'  => true,
			'show_admin_column'  => true,
			'show_in_rest'       => true, // Needed for tax to appear in Gutenberg editor.
			'rewrite'            => array( 'slug' => $tax_name ),
		));
	}
}

// custom metadata for custom taxonomies
function lt_add_meta_fields_to_taxonomy( $taxonomy_slug , $meta_fields = array() ){
	// Edit taxonomy page extra fields
	add_action( $taxonomy_slug . '_edit_form_fields', function ($term) use( $taxonomy_slug, $meta_fields ) {
		//getting term ID
		$term_id = $term->term_id;
		foreach ( $meta_fields as $name => $labels ) { ?>
			<tr class="form-field">
				<th scope="row" valign="top"><label for="<?php echo $name ?>"><?php echo $labels['label']; ?></label></th>
				<td>
				<input type="text" name="<?php echo $name ?>" id="<?php echo $name ?>" value="<?php echo get_term_meta($term_id, $name, true); ?>">
					<p class="description"><?php echo $labels['description']; ?></p>
				</td>
			</tr>
		<?php }
	} );

	// Add new taxonomy page extra fields
	add_action( $taxonomy_slug . '_add_form_fields' , function () use($taxonomy_slug, $meta_fields) {
		// var_dump($meta_fields);
		foreach ( $meta_fields as $name => $labels ) { ?>
			<div class="form-field">
				<label for="<?php echo $name ?>"><?php echo _e($labels['label'], 'lt'); ?></label>
				<input type="text" name="<?php echo $name ?>" id="<?php echo $name ?>">
				<p class="description"><?php echo _e($labels['description'], 'lt'); ?></p>
			</div>
		<?php }
	} );

	// Save extra taxonomy fields callback function.
	add_action('edited_' . $taxonomy_slug , function ($term_id) use($meta_fields) {
		foreach ( $meta_fields as $name => $labels ) {
			update_term_meta($term_id, $name, filter_input(INPUT_POST, $name));
		}
	}, 10, 1);
	add_action('create_' . $taxonomy_slug , function ($term_id) use($meta_fields) {
		foreach ( $meta_fields as $name => $labels ) {
			update_term_meta($term_id, $name, filter_input(INPUT_POST, $name));
		}
	}, 10, 1);
}

add_action( 'init', 'lt_custom_posts' );
function lt_custom_posts() {
	lt_new_custom_post( 'testimonial', 'dashicons-format-quote', array('categoría'));
	lt_new_custom_post( 'banner',      'dashicons-images-alt2');
	lt_new_custom_post( 'miembro',     'dashicons-groups');
	lt_new_custom_post( 'empresa',     'dashicons-admin-site-alt3');
	// lt_new_custom_post( 'programa',    'dashicons-welcome-view-site');

	$lt_meta_title = array(
		'label'       => 'Titulo',
		'description' => 'Título de la portada de la categoría',
	);
	$lt_meta_image_atf = array(
		'label'       => 'IMG portada',
		'description' => 'Imagen de la portada de la categoría',
	);
	$lt_meta_icon = array(
		'label'       => 'Icono',
		'description' => 'Icono de la categoría',
	);
	$lt_meta_description_title = array(
		'label'       => 'Título descripción',
		'description' => 'Tíulo de la descripción',
	);
	$lt_meta_description = array(
		'label'       => 'Descripción',
		'description' => 'Descripción inicial de la categoría',
	);
	$lt_meta_order = array(
		'label'       => 'Orden',
		'description' => 'Orden de aparicion',
	);
	$lt_meta_color = array(
		'label'       => 'Color',
		'description' => 'Color de decoracion en formato hexadecimal Ejemplo: #FAFAFA"',
	);
	$lt_meta_link = array(
		'label'       => 'Link',
		'description' => 'Link a donde lleva al clickar su tarjeta (dejar en blanco para comportamiento normal)',
	);
	$lt_meta_titulo_2 = array(
		'label'       => 'Título 2',
		'description' => 'Segundo título de la categoría',
	);
	lt_add_meta_fields_to_taxonomy( $taxonomy_slug = 'product_cat', $meta_fields = array(
		'lt_meta_title'             => $lt_meta_title,
		'lt_meta_image_atf'         => $lt_meta_image_atf,
		'lt_meta_icon'              => $lt_meta_icon,
		'lt_meta_description_title' => $lt_meta_description_title,
		'lt_meta_description'       => $lt_meta_description,
		'lt_meta_order'             => $lt_meta_order,
		'lt_meta_color'             => $lt_meta_color,
		'lt_meta_link'              => $lt_meta_link,
		'lt_meta_titulo_2'          => $lt_meta_titulo_2,
	) );
}
