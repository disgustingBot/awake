<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>

  <?php
  $product_category = get_the_terms( $post->ID, 'product_cat' )[0];
  $category_color = get_term_meta( $product_category->term_id, 'lt_meta_color', true );
  ?>

  <section class="hero hero_opaque">
    <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
    <h1 class="hero_title alt"><?php the_title(); ?></h1>
    <h2 class="hero_txt font_size_6"><?php echo the_content() ?></h2>
    <svg class="hero_arrow_down" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
      <use xlink:href="#arrow_down"></use>
    </svg>
    <div class="redDot header_activator"></div>
  </section>

  <section class="gertha alt lateral_m">
    <div class="gertha_deco alt"></div>
    <div class="gertha_caption">
      <p class="gertha_txt alt font_size_5"><?php echo get_post_meta($post->ID, 'C_texto_descriptivo_1', true); ?></p>
      <p class="gertha_txt alt font_size_5"><?php echo get_post_meta($post->ID, 'D_texto_descriptivo_2', true); ?></p>
    </div>
    <video class="gertha_img" controls="true" alt="Thanks Taryn! Great video. This is your Instagram: https://www.instagram.com/peanutbuttervisuals/">
      <source type="video/mp4" src="<?php echo get_post_meta($post->ID, 'E_url_video_descripcion', true); ?>">
      </video>
    </section>

    <section class="separanda">
      <div class="separanda_item separanda_big" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/retirement.svg'; ?>
        <p class="separanda_text font_size_4">Retiro de <br> <?php echo get_post_meta($post->ID, 'F_días_de_retiro', true); ?></p>
      </div>
      <div class="separanda_item separanda_big separanda_plus" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/plus.svg'; ?>
      </div>
      <div class="separanda_item separanda_big" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/distance_training.svg'; ?>
        <p class="separanda_text separanda_big font_size_4"><strong>8 semanas de</strong><br>formación a distancia</p>
      </div>
    </section>
    <section class="showcase2">
      <div class="galu">
          <img class="galu_img" src="https://picsum.photos/300" alt="">
          <img class="galu_img" src="https://picsum.photos/301" alt="">
          <img class="galu_img" src="https://picsum.photos/302" alt="">
          <img class="galu_img" src="https://picsum.photos/303" alt="">
          <img class="galu_img" src="https://picsum.photos/304" alt="">
          <img class="galu_img" src="https://picsum.photos/305" alt="">
          <img class="galu_img" src="https://picsum.photos/306" alt="">
          <img class="galu_img" src="https://picsum.photos/307" alt="">
      </div>
      <div class="pista">
        <h5 class="pista_title">Programa Orientativo</h5>

        <?php $i = 1;
        while(true){
          if(get_post_meta(get_the_ID(), 'G_programa_'.$i.'_text', true)){ ?>
            <div class="pista_group">
              <p class="pista_txt pista_time font_size_6"><?php echo get_post_meta(get_the_ID(), 'G_programa_'.$i.'_time', true); ?></p>
              <p class="pista_txt pista_text font_size_6"><?php echo get_post_meta(get_the_ID(), 'G_programa_'.$i.'_text', true); ?></p>
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
    <section class="col_2_block">
      <h3 class="block_title font_size_3" style=" color: <?php echo $category_color; ?> "><?php echo get_post_meta(get_the_ID(), 'H_segunda_descripcion_titulo', true); ?></h3>
      <div class="col_2_block_col">
        <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'I_segunda_descripcion_texto_1', true); ?></p>
        <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'I_segunda_descripcion_texto_2', true); ?></p>
      </div>
      <div class="col_2_block_col">
        <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'I_segunda_descripcion_texto_3', true); ?></p>
        <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'I_segunda_descripcion_texto_4', true); ?></p>
      </div>
    </section>



    <section class="showcase3">
      <h3 class="showcase_title font_size_3 simple_title" style=" color: <?php echo $category_color; ?> ">Herramientas que te servirán para...</h3>


      <div class="hosi hosi_secondary_color" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/shield.svg'; ?>
        <p class="hosi_txt font_size_5">Reducir estrés y ansiedad.</p>
      </div>

      <div class="hosi hosi_secondary_color" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/emotional_intelligence.svg'; ?>
        <p class="hosi_txt font_size_5">
          Aumentar la inteligencia emocional.
        </p>
      </div>

      <div class="hosi hosi_secondary_color" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/sleepy_moon.svg'; ?>
        <p class="hosi_txt font_size_5">
          Crear un sueño más profundo y reparador.
        </p>
      </div>

      <div class="hosi hosi_secondary_color" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/map_compose.svg'; ?>
        <p class="hosi_txt font_size_5">
          Ver “the big picture” para poder apreciar mejor los detalles.
        </p>
      </div>

      <div class="hosi hosi_secondary_color" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/listening_ear.svg'; ?>
        <p class="hosi_txt font_size_5">
          Mejorar la escucha activa, la concentración y creatividad.
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/perceptive_brain.svg'; ?>
        <p class="hosi_txt font_size_5">
          Crear una percepción flexible para mejorar la respuesta ante diferentes situaciones.
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/opportunity.svg'; ?>
        <p class="hosi_txt font_size_5">
          Afrontar el cambio y aprovechar las oportunidades que nos brinda.
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/relationship.svg'; ?>
        <p class="hosi_txt font_size_5">
          Mejorar las relaciones interpersonales.
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/happy_brain.svg'; ?>
        <p class="hosi_txt font_size_5">
          Hacernos más resistentes a la depresión.
        </p>
      </div>
    </section>



    <section class="copa">
      <img class="copa_img" src="https://picsum.photos/400" alt="">
      <div class="copa_interaction_container">
        <h5 class="copa_title"><?php echo get_post_meta($post->ID, 'J_titulo_modulo_compra', true); ?></h5>
        <p class="copa_label" style=" background: <?php echo $category_color; ?> ">FECHAS</p>

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



          <p class="copa_price font_size_5" id="singleSidePrice" style=" border-top: <?php echo $category_color; ?> solid 3px; border-bottom: <?php echo $category_color; ?>  solid 3px"><?php echo $product->get_price_html(); ?></p>

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
          style=" background: <?php echo $category_color; ?> ">
          Añadir a la cesta
        </button>

        <p class="copa_mas">Más información <a class="copa_mas_link" href="#"  style="color: <?php echo $category_color; ?>">CLICA AQUÍ</a></p>
      </div>
    </section>

  <?php } ?>
  <section class="col_4_block">
    <h4 class="block_title font_size_3" style="color: <?php echo $category_color; ?>">Puede interesarte</h4>
    <?php
    $posts = new WP_Query( array(
      'post_type' => 'post',
      'posts_per_page' => 4
    )
  );
  ?>
  <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

    <?php sqare_card(); ?>

  <?php endwhile; wp_reset_query(); ?>

  <a  class="block_link font_size_7" href="<?php echo get_site_url() ?>/blog">VER MÁS NOTICIAS</a>
</section>



<?php get_footer(); ?>
