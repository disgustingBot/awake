
<?php function sqare_card () {
    if(!isset($args['title']  )){ $args['title']   = get_the_title(); }
    if(!isset($args['link']   )){ $args['link']    = get_the_permalink(); }
    if(!isset($args['image']  )){ $args['image']   = get_the_post_thumbnail_url(); }
    if(!isset($args['excerpt'])){ $args['excerpt'] = get_the_excerpt(); }
    if(!isset($args['color']  )){ $args['color']   = get_post_meta(get_the_ID(), 'color', true); }
    ?>

    <div class="sqare">
        <?php if($args['image'] != false){ ?>
            <a class="sqare_amg" href="<?php echo $args['link']; ?>">
                <img class="sqare_img" loading="lazy" src="<?php echo $args['image']; ?>" alt="">
            </a>
        <?php } ?>
        <h4 class="sqare_title font_size_4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p class="sqare_author font_size_6">by <?php the_author(); ?></p>
        <div class="sqare_deco" style="color:<?php echo get_post_meta(get_the_ID(), 'color', true); ?>"></div>
        <p class="sqare_date font_size_6" style="color:<?php echo get_post_meta(get_the_ID(), 'color', true); ?>"><?php the_time( 'F Y' ); ?></p>
        <p class="sqare_exerpt font_size_6"><?php echo excerpt(200); ?></p>
        <a class="sqare_link font_size_5" href="<?php the_permalink(); ?>">&mdash; Leer más</a>
    </div>

<?php } ?>






<?php function simpla_card ($args = array()) {
    if(!isset($args['title']  )){ $args['title']   = get_the_title(); }
    if(!isset($args['link']   )){ $args['link']    = get_the_permalink(); }
    if(!isset($args['image']  )){ $args['image']   = get_the_post_thumbnail_url(); }
    if(!isset($args['excerpt'])){ $args['excerpt'] = get_the_excerpt(); }
    if(!isset($args['color']  )){ $args['color']   = get_post_meta(get_the_ID(), 'color', true); }
    ?>

    <a class="simpla" href="<?php echo $args['link']; ?>">
        <?php if($args['image'] != false){ ?>
            <div class="simpla_amg">
                <img class="simpla_img" loading="lazy" src="<?php echo $args['image']; ?>" alt="">
            </div>
        <?php } ?>
        <?php if($args['title'] != false){ ?>
            <h6 class="simpla_title font_size_6 row2col1"><?php echo $args['title']; ?></h6>
        <?php } ?>
        <?php if($args['color'] != false){ ?>
            <div class="simpla_deco" style="color:<?php echo $args['color']; ?>"></div>
        <?php } ?>
        <?php if($args['excerpt'] != false){ ?>
            <div class="simpla_txt font_size_7"><?php echo $args['excerpt']; ?></div>
        <?php } ?>
    </a>

<?php } ?>



<?php function col_testimonial_card ($args = array()) {
    if(!isset($args['title']  )){ $args['title']   = get_the_title(); }
    if(!isset($args['content'])){ $args['content'] = get_the_content(); }
    ?>


          <div class="col_testimonial">
            <p class="col_testimonial_title font_size_5"><?php echo $args['title']; ?></p>
            <div class="col_testimonial_content font_size_5">
              <?php echo $args['content']; ?>
            </div>
          </div>

<?php } ?>









<?php function hedi_card ($args = array()) {
    if(!isset($args['title']  )){ $args['title']   = get_the_title(); }
    if(!isset($args['link']   )){ $args['link']    = get_the_permalink(); }
    if(!isset($args['image']  )){ $args['image']   = get_the_post_thumbnail_url(); }
    if(!isset($args['excerpt'])){ $args['excerpt'] = get_the_excerpt(); }
    if(!isset($args['color']  )){ $args['color']   = get_post_meta(get_the_ID(), 'color', true); }
    ?>
    <?php global $woocommerce, $product, $post;$is_out_of_stock = false; ?>
    <?php if( !$product->is_on_backorder() AND !$product->is_in_stock() ){ $is_out_of_stock = true; } ?>

    <div class="hedi">
        <?php if($args['image'] != false){ ?>
            <a class="hedi_amg rowcol1" href="<?php echo $args['link']; ?>">
                <img class="hedi_img" loading="lazy" src="<?php echo $args['image']; ?>" alt="">
            </a>
        <?php } ?>
        <?php if($args['title'] != false){ ?>
            <h6 class="hedi_title font_size_5 rowcol1">
              <a href="<?php echo $args['link']; ?>"><?php echo $args['title']; ?></a>
            </h6>
        <?php } ?>
        <?php if($args['color'] != false){ ?>
            <!-- <div class="hedi_deco" style="color:<?php echo $args['color']; ?>"></div> -->
        <?php } ?>
        <?php if($args['excerpt'] != false){ ?>
            <div class="hedi_txt font_size_7"><?php echo $args['excerpt']; ?></div>
        <?php } ?>
        <a class="hedi_enlace font_size_7" href="<?php echo $args['link']; ?>">Ver Programa</a>







        <div class="hedi_interaction_container Variable_product_interaction">
          <p class="hedi_label font_size_8">FECHAS</p>
          <!-- <div class="hedi_select_container">
            <select class="hedi_select font_size_8" name="" id="">
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
      			if ( $product->is_type( 'variable' ) AND !$is_out_of_stock ) {
              $variations = $product->get_available_variations();
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

              $first = true;
              foreach ($myAttributes as $key => $value) {
                $slug = preg_replace("/attribute_/i", "", $key);
                $name = ucfirst($slug);
                ?>

                <div class="SelectBox hedi_select" tabindex="1" id="selectBox<?php echo $slug; ?>">
                  <div class="selectBoxButton" onclick="altClassFromSelector('focus', '#selectBox<?php echo $slug; ?>')">
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



          <!-- <p class="hedi_price font_size_7">475,00€</p> -->
          <p class="hedi_price"><?php echo $product->get_price_html(); ?></p>

          <div class="cuantos Cuantos">
              <button class="cuantosBtn cuantosMins">-</button>
              <input class="cuantosQnt cuantosQantity" type="text" value="1" min="1">
              <button class="cuantosBtn cuantosPlus">+</button>
          </div>

          <!-- id="myAddToCart" -->
          <button
              class="btn font_size_8 My_add_to_cart_button"
              onclick="my_add_to_cart_function(this)"
              data-product-id="<?php echo get_the_id(); ?>"
              data-product-type="<?php echo $product->get_type(); ?>"
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
          if( $is_out_of_stock ){
              echo 'Sin cupo';
          } else {
              echo 'Selecciona una Fecha';
          }
          ?>
          </button>
        </div>







    </div>

<?php } ?>
