
<div class="copa_interaction_container Variable_product_interaction">
  <h5 class="copa_title font_size_4"><?php the_title(); ?></h5>

      <?php
      $is_out_of_stock = false;
      if( !$product->is_on_backorder() AND !$product->is_in_stock() ){ $is_out_of_stock = true; }
      ?>
  <!-- <div class="copa_select_container">
    <select class="copa_select" name="" id="">
      <option value="">Elige una opcion</option>
    </select>
    <svg class="copa_select_arrow" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
      <g id="arrow_select">
        <path d="M0 0h24v24H0V0z" fill="white"/>
        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" fill="currentColor"/>
      </g>
    </svg>
  </div> -->

  <?php
    // $product = wc_get_product();
    if ( $product->is_type( 'variable' ) AND !$is_out_of_stock ) { ?>
      <p class="hedi_label font_size_8" style="background:<?= $category_color; ?>">FECHAS</p>

      <?php
      $variations = $product->get_available_variations();
      // echo count($variations);
      // var_dump($variations);

      // THIS BLOCK DEFINES THE ARRAY: "$myAttributes"
      // WE WILL USE THIS ARRAY LATER
      $myAttributes = array();
      foreach ($variations as $key => $value) {
        foreach ($value['attributes'] as $j => $var) {
          if ( ! array_key_exists ( $j, $myAttributes ) ) {
            $myAttributes[$j] = array($var => array($value['variation_id']));
          } else {
            $myAttributes[$j][$var][] = $value['variation_id'];
          }
        }
      }
      // var_dump($myAttributes);
      if(count($myAttributes)==0){
        echo '<p class="font_size_7">no hay fechas</p>';

      }
      // echo count($myAttributes);
      // var_dump($myAttributes);
      $first = true;
      foreach ($myAttributes as $key => $value) {
        $slug = preg_replace("/attribute_/i", "", $key);
        $name = ucfirst($slug);
        ?>

        <div class="SelectBox copa_select_container" tabindex="1" id="selectBox<?php echo $slug; ?>">
          <div class="selectBoxButton" onclick="altClassFromSelector('focus', '#selectBox<?php echo $slug; ?>')">
            <svg class="select_box_icon dropdown_icon" width="32" height="16" viewBox="0 0 32 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M31.7481 0.701755L31.2388 0.232817C30.9017 -0.0776058 30.3566 -0.0776058 30.0194 0.232817L16.004 13.1451L1.98145 0.232817C1.64434 -0.0776058 1.09921 -0.0776058 0.762097 0.232817L0.252837 0.701755C-0.0842789 1.01218 -0.0842789 1.51414 0.252837 1.82456L15.3872 15.7672C15.7243 16.0776 16.2694 16.0776 16.6065 15.7672L31.7409 1.82456C32.0852 1.51414 32.0852 1.01218 31.7481 0.701755Z" fill="currentColor"/>
            </svg>
            <p class="selectBoxPlaceholder font_size_8"><?php _e('elige una opcion', 'lt_domain'); ?></p>
            <!-- <p class="selectBoxPlaceholder"><?php echo $name; ?></p> -->
            <p class="selectBoxCurrent font_size_7" id="selectBoxCurrent<?php echo $name; ?>"></p>
          </div>
          <div class="selectBoxList">
            <label for="nul<?php echo $name; ?>" class="selectBoxOption">
              <input
                class="selectBoxInput"
                id="nul<?php echo $name; ?>"
                type="radio"
                data-ids=""
                name="filter_<?php echo $slug; ?>"
                onclick="selectBoxControler('','#selectBox<?php echo $slug; ?>','#selectBoxCurrent<?php echo $name; ?>')"
                value="0"
                checked
              >
              <!-- <span class="checkmark"></span> -->
              <p class="colrOptP"></p>
            </label>
            <?php foreach ($value as $i => $var) { ?>
              <!-- <p class="colrOptP"><?php // var_dump($var['attributes']); ?></p> -->
            <?php // foreach ($value['options'] as $key => $var) { ?>
              <label for="<?php echo $i; ?>" class="selectBoxOption<?php if(!$first){echo ' hidden';} ?>">
                <input
                  class="selectBoxInput"
                  id="<?php echo $i; ?>"
                  data-ids="<?php
                    foreach ($var as $j => $x) {
                      echo $x;
                      if($j<count($var)-1){ echo ', '; }
                    }
                  ?>"
                  type="radio"
                  name="filter_<?php echo $slug; ?>"
                  onclick="selectBoxControler('<?php echo $i; ?>', '#selectBox<?php echo $slug; ?>', '#selectBoxCurrent<?php echo $name; ?>')"
                  value="<?php echo $i; ?>"
                  <?php // if($_GET['filter_'.$term->slug]==$var->slug){echo "selected";} ?>
                >
                <!-- <span class="checkmark"></span> -->
                <!-- <p class="colrOptP"><?php // var_dump($var[0]); ?></p> -->
                <p class="colrOptP"><?php echo $i; ?></p>
              </label>
            <?php } ?>
          </div>
        </div>
      <?php $first = false; ?>
      <?php } ?>
    <?php } ?>




  <!-- <p class="copa_price">475,00€</p> -->
  <p class="copa_price" id="singleSidePrice" style="color:<?= $category_color; ?>"><?php echo $product->get_price_html(); ?></p>

  <div class="cuantos Cuantos">
      <button class="cuantosBtn cuantosMins">-</button>
      <input class="cuantosQnt cuantosQantity" type="text" value="1" min="1">
      <button class="cuantosBtn cuantosPlus">+</button>
  </div>

  <button
      class="btn My_add_to_cart_button"
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

  <p class="copa_mas">Más información <a class="copa_mas_link" href="<?php echo get_site_url() . '/contacto'; ?>">CLICA AQUÍ</a></p>
</div>
