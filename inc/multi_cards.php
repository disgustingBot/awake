<?php
function sqare_card () {
    if(!isset($args['title']  )){ $args['title']   = get_the_title(); }
    if(!isset($args['link']   )){ $args['link']    = get_the_permalink(); }
    if(!isset($args['image']  )){ $args['image']   = get_the_post_thumbnail_url(); }
    if(!isset($args['excerpt'])){ $args['excerpt'] = get_the_excerpt(); }
    if(!isset($args['color']  )){
      if (get_post_meta(get_the_ID(), 'color', true)){
        $args['color']   = get_post_meta(get_the_ID(), 'color', true);
      } else {
        $args['color']   = get_random_color();
      }
    }
    ?>

    <div class="sqare">
        <?php if($args['image'] != false){ ?>
            <a class="sqare_amg" href="<?php echo $args['link']; ?>">
                <img class="sqare_img" loading="lazy" src="<?php echo $args['image']; ?>" alt="">
            </a>
        <?php } ?>
        <h4 class="sqare_title font_size_6"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p class="sqare_author font_size_8">by <?php the_author(); ?></p>
        <div class="sqare_deco" style="color:<?php echo get_post_meta(get_the_ID(), 'color', true); ?>"></div>
        <p class="sqare_date font_size_7" style="color:<?php echo get_post_meta(get_the_ID(), 'color', true); ?>"><?php the_time( 'F Y' ); ?></p>
        <p class="sqare_exerpt font_size_7"><?php echo excerpt(200); ?></p>
        <a class="sqare_link font_size_8" href="<?php the_permalink(); ?>">&mdash; Leer más</a>
    </div>

<?php }







function simpla_card ($args = array()) {
    if(!isset($args['title']  )){ $args['title']   = get_the_title(); }
    if(!isset($args['link']   )){ $args['link']    = get_the_permalink(); }
    if(!isset($args['image']) || $args['image'] == ''){ $args['image']   = get_the_post_thumbnail_url(); }
    if(!isset($args['excerpt'])){ $args['excerpt'] = get_the_excerpt(); }
    if(!isset($args['color']  )){ $args['color']   = get_post_meta(get_the_ID(), 'color', true); }
    if(!isset($args['order']  )){ $args['order']   = get_post_meta(get_the_ID(), 'order', true); }
    ?>

    <a class="simpla" href="<?php echo $args['link']; ?>" style="order: <?php echo $args['order']; ?>">
            <div class="simpla_amg" style="background:<?php echo $args['color']; ?>">
              <?php if($args['image'] != false){ ?>
                <img class="simpla_img" loading="lazy" src="<?php echo $args['image']; ?>" alt="">
              <?php } ?>
            </div>
        <?php if($args['title'] != false){ ?>
            <p class="simpla_title font_size_7 row2col1"><?php echo $args['title']; ?></p>
        <?php } ?>
        <?php if($args['color'] != false){ ?>
            <div class="simpla_deco" style="color:<?php echo $args['color']; ?>"></div>
        <?php } ?>
        <?php if($args['excerpt'] != false){ ?>
            <div class="simpla_txt font_size_7"><?php echo $args['excerpt']; ?></div>
        <?php } ?>
    </a>

<?php }






function col_testimonial_card ($args = array()) {
  if(!isset($args['title']  )){ $args['title']   = get_the_title(); }
  if(!isset($args['content'])){ $args['content'] = get_the_content(); }
  ?>
  <div class="col_testimonial">
    <p class="col_testimonial_title font_size_7"><?php echo $args['title']; ?></p>
    <div class="col_testimonial_card_line"></div>
    <div class="col_testimonial_content font_size_7">
      <?php echo $args['content']; ?>
    </div>
  </div>
<?php
}






function hedi_card ($args = array()) {
    if(!isset($args['title']  )){ $args['title']   = get_the_title(); }
    if(!isset($args['link']   )){ $args['link']    = get_the_permalink(); }
    if(!isset($args['image']  )){ $args['image']   = get_the_post_thumbnail_url(); }
    if(!isset($args['excerpt'])){ $args['excerpt'] = get_the_excerpt(); }
    if(!isset($args['color']  )){
      if (get_post_meta(get_the_ID(), 'color', true)){
        $args['color']   = get_post_meta(get_the_ID(), 'color', true);
      } else {
        $args['color']   = get_random_color();
      }
    }
    global $woocommerce, $product, $post;$is_out_of_stock = false;
    if( !$product->is_on_backorder() AND !$product->is_in_stock() ){ $is_out_of_stock = true; } ?>

    <div class="hedi">
      <a class="hedi_amg rowcol1" href="<?php echo $args['link']; ?>" style="background:<?php echo $args['color']; ?>">
        <?php if($args['image'] != false){ ?>
          <img class="hedi_img" loading="lazy" src="<?php echo $args['image']; ?>" alt="">
        <?php } ?>
      </a>
        <?php if($args['title'] != false){ ?>
            <h6 class="hedi_title font_size_6 rowcol1">
              <a href="<?php echo $args['link']; ?>"><?php echo $args['title']; ?></a>
            </h6>
        <?php } ?>
        <?php if($args['color'] != false){ ?>
            <!-- <div class="hedi_deco" style="color:<?php echo $args['color']; ?>"></div> -->
        <?php } ?>
        <?php if($args['excerpt'] != false){ ?>
            <div class="hedi_txt font_size_8"><?php echo $args['excerpt']; ?></div>
        <?php } ?>
        <a class="hedi_enlace font_size_8 btn" href="<?php echo $args['link']; ?>" style="background:<?php echo $args['color']; ?>">Ver más</a>







        <!-- <div class="hedi_interaction_container Variable_product_interaction">

          <?php
      			if ( $product->is_type( 'variable' ) AND !$is_out_of_stock ) { ?>
              <p class="hedi_label font_size_8">FECHAS</p>
              <?php
              $variations = $product->get_available_variations();
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
              if(count($myAttributes)==0){
                echo '<p class="font_size_7">no hay fechas</p>';
              }

              $first = true;
              foreach ($myAttributes as $key => $value) {
                $slug = preg_replace("/attribute_/i", "", $key) . '_' . get_the_ID();
                $name = ucfirst($slug);
                ?>

                <div class="SelectBox hedi_select" tabindex="1" id="selectBox<?php echo $slug; ?>">
                  <div class="selectBoxButton" onclick="altClassFromSelector('focus', '#selectBox<?php echo $slug; ?>')">
                    <svg class="select_box_icon dropdown_icon" width="32" height="16" viewBox="0 0 32 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M31.7481 0.701755L31.2388 0.232817C30.9017 -0.0776058 30.3566 -0.0776058 30.0194 0.232817L16.004 13.1451L1.98145 0.232817C1.64434 -0.0776058 1.09921 -0.0776058 0.762097 0.232817L0.252837 0.701755C-0.0842789 1.01218 -0.0842789 1.51414 0.252837 1.82456L15.3872 15.7672C15.7243 16.0776 16.2694 16.0776 16.6065 15.7672L31.7409 1.82456C32.0852 1.51414 32.0852 1.01218 31.7481 0.701755Z" fill="currentColor"/>
                    </svg>
                    <p class="selectBoxPlaceholder font_size_8"><?php _e('elige la fecha', 'lt_domain'); ?></p>
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
                      <p class="colrOptP"></p>
                    </label>
                    <?php foreach ($value as $i => $var) { ?>
                      <label for="<?php echo $i . '_' . get_the_ID(); ?>" class="selectBoxOption<?php if(!$first){echo ' hidden';} ?>">
                        <input
                          class="selectBoxInput"
                          id="<?php echo $i . '_' . get_the_ID(); ?>"
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
                        >
                        <p class="colrOptP"><?php echo $i; ?></p>
                      </label>
                    <?php } ?>
                  </div>
                </div>
              <?php $first = false; ?>
              <?php } ?>
            <?php } ?>



          <p class="hedi_price font_size_7">
            <?php
            if ($product->get_price_html()) {
              echo $product->get_price_html();
            } else {
              _e('no hay precio', 'awake');
            }
            ?>
          </p>

          <div class="cuantos Cuantos">
            <button class="cuantosBtn cuantosMins">-</button>
            <input class="cuantosQnt cuantosQantity CuantosQantity_<?= get_the_ID() ?>" type="text" value="1" min="1">
            <button class="cuantosBtn cuantosPlus">+</button>
          </div>

          <button
            class="btn hedi_btn font_size_8 My_add_to_cart_button"
            style="background:<?php echo $args['color']; ?>"
            onclick="my_add_to_cart_function(this)"
            data-product-id="<?php echo get_the_ID(); ?>"
            data-product-type="<?php echo $product->get_type(); ?>"
            <?php if ( !$product->is_type( 'variable' ) ) { ?>
              data-variation-id="<?php echo get_the_ID(); ?>"
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
        </div> -->
    </div>

<?php } ?>
