<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>
    <?php global $woocommerce, $product, $post;$is_out_of_stock = false; ?>
    <?php if( !$product->is_on_backorder() AND !$product->is_in_stock() ){ $is_out_of_stock = true; } ?>

    <section class="hero">
        <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <h1 class="hero_title"><?php the_title(); ?></h1>
        <div class="redDot header_activator"></div>
    </section>

    <section class="gertha lateral_m">
        <div class="gertha_deco"></div>
        <div class="gertha_caption">
            <p class="gertha_txt"> Te presentamos un programa experiencial para sobrevivir y prosperar en tiempos de cambio e incertidumbre. Diseñado especialmente para ayudarnos a desconectar de nuestras vidas llenas de distracciones y recargarnos de tiempo, espacio y de herramientas para cuidar y desarrollar nuestra resiliencia humana.
            <br>
            <br>
            La Resiliencia aplicada a humanos se entiende como la capacidad para “rebotar” de experiencias difíciles y de salir fortalecidos, tras pasar por una experiencia traumática o un periodo de estrés y ansiedad, por ejemplo. Cuando incorporamos actitudes y prácticas de resiliencia en nuestras vidas, se nos abren las puertas para vivir el presente con una mente más sana y un corazón más feliz.</p>

        </div>
        <img class="gertha_img" loading="lazy" src="https://picsum.photos/400/280" alt="">
    </section>



    <div class="separanda">
        <div class="separanda_item">
          <?php include get_template_directory() . '/assets/retirement.svg'; ?>
          <p class="separanda_text">Retiro<br>de 3 días</p>
        </div>
        <div class="separanda_item">
          <?php include get_template_directory() . '/assets/plus.svg'; ?>
        </div>
        <div class="separanda_item">
          <?php include get_template_directory() . '/assets/distance_training.svg'; ?>
          <p class="separanda_text">8 semanas de<br>formación a distancia</p>
        </div>


    </div>



    <section class="showcase2">
        <div class="gali">
            <img class="gali_img" src="https://picsum.photos/300" alt="">
            <img class="gali_img" src="https://picsum.photos/301" alt="">
            <img class="gali_img" src="https://picsum.photos/302" alt="">
            <img class="gali_img" src="https://picsum.photos/303" alt="">
        </div>
        <div class="pista">
            <h5 class="pista_title">Programa Orientativo</h5>

            <?php $i = 1;
            while(true){
                if(get_post_meta(get_the_ID(), 'programa_'.$i.'_text', true)){ ?>
                    <div class="pista_group">
                        <p class="pista_txt pista_time"><?php echo get_post_meta(get_the_ID(), 'programa_'.$i.'_time', true); ?></p>
                        <p class="pista_txt pista_text"><?php echo get_post_meta(get_the_ID(), 'programa_'.$i.'_text', true); ?></p>
                    </div>
                    <?php
                    $i=$i+1;
                } else { break; }
            } ?>

            <div class="pista_deco"></div>
            <p class="pista_caption">El retiro consta de unas 20 horas formativas, dejando el sábado por la tarde libre. (No se sirve cena la noche del sábado).
            </p>
        </div>
    </section>

    <section class="main">
        <?php the_content(); ?>
    </section>

    <section class="chiri">
        <img class="chiri_img" src="https://picsum.photos/300" alt="">
        <p class="chiri_txt">Naturaleza</p>
        <img class="chiri_img" src="https://picsum.photos/301" alt="">
        <p class="chiri_txt">Movimiento</p>
        <img class="chiri_img" src="https://picsum.photos/302" alt="">
        <p class="chiri_txt">MINDFULNESS & MEDITACIÓN</p>
        <img class="chiri_img" src="https://picsum.photos/303" alt="">
        <p class="chiri_txt">COCINA CREATIVA</p>
        <img class="chiri_img" src="https://picsum.photos/304" alt="">
        <p class="chiri_txt">RESILIENCIA EMOCIONAL</p>
    </section>


    <section class="copa">
        <img class="copa_img" src="https://picsum.photos/400" alt="">
        <div class="copa_interaction_container">
          <h6 class="copa_title">Retiro en Cantabria 3 días<br><?php the_title(); ?></h6>
          <p class="copa_label">FECHAS</p>

          <div class="copa_select_container">
            <select class="copa_select" name="" id="">
              <option value="">Elige una opcion</option>
            </select>
            <svg class="copa_select_arrow" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
              <g id="arrow_select">
                <path d="M0 0h24v24H0V0z" fill="white"/>
                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" fill="currentColor"/>
              </g>
            </svg>
          </div>

          <?php
      			// $product = wc_get_product();
      			if ( $product->is_type( 'variable' ) AND !$is_out_of_stock ) {
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
              // var_dump($myAttributes);

              $first = true;
              foreach ($myAttributes as $key => $value) {
                $slug = preg_replace("/attribute_/i", "", $key);
                $name = ucfirst($slug);
                ?>

                <div class="SelectBox copa_select" tabindex="1" id="selectBox<?php echo $name; ?>">
                  <div class="selectBoxButton" onclick="altClassFromSelector('focus', '#selectBox<?php echo $slug; ?>')">
                    <!-- <p class="selectBoxPlaceholder"><?php // _e('elige una opcion', 'lt_domain'); ?></p> -->
                    <p class="selectBoxPlaceholder"><?php echo $name; ?></p>
                    <p class="selectBoxCurrent" id="selectBoxCurrent<?php echo $name; ?>"></p>
                  </div>
                  <div class="selectBoxList">
                    <label for="nul<?php echo $name; ?>" class="selectBoxOption">
                      <input
                        class="selectBoxInput"
                        id="nul<?php echo $name; ?>"
                        type="radio"
                        data-ids=""
                        name="filter_<?php echo $slug; ?>"
                        onclick="selectBoxControler('','#selectBox<?php echo $name; ?>','#selectBoxCurrent<?php echo $name; ?>')"
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
                          onclick="selectBoxControler('<?php echo $i; ?>', '#selectBox<?php echo $name; ?>', '#selectBoxCurrent<?php echo $name; ?>')"
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
          <p class="copa_price" id="singleSidePrice"><?php echo $product->get_price_html(); ?></p>

          <div class="cuantos Cuantos">
              <button class="cuantosBtn cuantosMins">-</button>
              <input class="cuantosQnt cuantosQantity" type="text" value="1" min="1">
              <button class="cuantosBtn cuantosPlus">+</button>
          </div>

          <button
              class="btn"
              id="myAddToCart"
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
              echo 'Añadir a la cesta';
          }
          ?>
          </button>

          <p class="copa_mas">Más información <a class="copa_mas_link" href="#">CLICA AQUÍ</a></p>
        </div>
    </section>



<?php } ?>

<?php get_footer(); ?>
