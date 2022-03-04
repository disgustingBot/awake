
<div class="copa_interaction_container Variable_product_interaction">
  <h5 class="copa_title font_size_4" style="font-family: 'Lora', serif;"><?php the_title(); ?></h5>

  <?php

    $post_id = get_the_ID();
    if ($post_id == 19162) {
        echo '<p class="copa_title font_size_4" style="font-family: Lora, serif; margin-bottom: 0px!important">Próximas fechas:</p>';
    }
   ?>

  <?php
  $is_out_of_stock = false;
  if( !$product->is_on_backorder() AND !$product->is_in_stock() ){ $is_out_of_stock = true; }

  wp_register_script( 'variations', get_stylesheet_directory_uri() . '/js/variations.js', array('jquery'), 1.0, true );
  if ( $product->is_type( 'variable' ) AND !$is_out_of_stock ) {

    $variations = $product->get_available_variations();

    // THIS BLOCK DEFINES THE ARRAY: "$myAttributes"
    // WE WILL USE THIS ARRAY LATER

    // send my variation data to JS
    wp_localize_script( 'variations', 'variations', array('data' => json_encode( $variations )) );


    $myAttributes = array();

    foreach ($variations as $variation) {
      foreach ($variation['attributes'] as $key => $value) {
        if ( ! array_key_exists ( $key, $myAttributes ) ) {
          $myAttributes[$key] = array($value => array($variation['variation_id']));
        } else {
          $myAttributes[$key][$value][] = $variation['variation_id'];
        }
      }
    }
    if(count($myAttributes)==0){
      echo '<p class="font_size_7">No hay opciones disponibles, regresa luego</p>';
    }
    $first = true;
    foreach ($myAttributes as $key => $value) {


      $slug = preg_replace("/attribute_/i", "", $key);
      $name = ucfirst($slug);
      echo "<div class='copa_select_blob'>";
      echo "<p class='hedi_label font_size_6' style='background:$category_color;'>$name</p>";

      $options = [];
      foreach ($value as $i => $var) {
        if ($i != '-') {
          $options[] = array(
            'slug' => sanitize_title($i),
            'name' => $i,
            'value' => $i,
            'data' => array(
              'ids' => implode(", ", $var),
              'key' => $key,
            ),
          );
        }
      }
      $config = array(
        'label' => 'Seleccionar',
        'class' => 'copa_select_container',
        'empty' => 'Vaciar',
        'slug'  => sanitize_title($name)
      );

      selectBox($config, $options);
      echo "</div>";
    }
  } ?>


  <!-- <p class="copa_price">475,00€</p> -->
  <?php $price = ( $product->is_type( 'variable' ) ) ? "-" : $product->get_price_html(); ?>
  <p class="copa_price" id="singleSidePrice" style="color:<?= $category_color; ?>"><?= $price ?></p>

  <div class="cuantos Cuantos">
    <button class="cuantosBtn cuantosMins">-</button>
    <input class="cuantosQnt cuantosQantity CuantosQantity_<?= get_the_ID() ?>" type="text" value="1" min="1">
    <button class="cuantosBtn cuantosPlus">+</button>
  </div>

  <button
    class="btn Add_to_cart"
    style="background:<?= $category_color; ?>"
    id="myAddToCart"
    data-product-id="<?php echo get_the_id(); ?>"
    data-product-type="<?php echo $product->get_type(); ?>"
    <?php if ( !$product->is_type( 'variable' ) ) { ?>
      data-variation-id="<?php echo get_the_id(); ?>"
    <?php } ?>
    data-quantity="1"
    data-variation-description=""
    data-buy="later"
    <?php if($product->is_on_backorder()){ ?>
        data-preorder="true"
    <?php } else { ?>
        data-preorder="false"
    <?php } ?>
    <?php if( $is_out_of_stock ){ echo 'disabled'; } ?>
  >
  <?php
  if ( $product->is_type( 'variable' ) ) {
    if( $is_out_of_stock ){
      _e('Sin cupo', 'awake');
    } else {
      _e('Selecciona una Fecha', 'awake');
    }
  } else {
    if( $is_out_of_stock ){
      _e('sin stock', 'awake');
    } else {
      _e('Añadir al carrito', 'awake');
    }
  }
  ?>
  </button>

  <?= ( $product->is_type( 'variable' ) ) ? '<p class="copa_variation_string" id="Variation_string"></p>' : ''; ?>

  <p class="copa_mas">Más información <a style=" color: <?php echo $category_color; ?> " class="copa_mas_link" href="<?php echo get_site_url() . '/contacto'; ?>">CLICA AQUÍ</a></p>
</div>

<?php
wp_localize_script( 'variations', 'redirect', array('to' => site_url() . '/cart') );
wp_enqueue_script( 'variations' );
?>
