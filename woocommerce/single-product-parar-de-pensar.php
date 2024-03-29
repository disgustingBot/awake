<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>

  <?php

  $product_category = get_the_terms( $post->ID, 'product_cat' );
  foreach ($product_category as $category) {
    if ($category->slug != 'programas') {
      $category_color = get_term_meta( $category->term_id, 'lt_meta_color', true );
    }
  }

  ?>

  <section class="hero hero_opaque">
    <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
    <h1 class="hero_title alt"><?php the_title(); ?></h1>
    <h2 class="hero_txt font_size_7"><?php echo the_content() ?></h2>
    <svg class="hero_arrow_down" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
      <use xlink:href="#arrow_down"></use>
    </svg>
    <div class="redDot header_activator"></div>
  </section>

  <section class="gertha alt lateral_m">
    <div class="gertha_deco alt"></div>
    <div class="gertha_caption">
      <p class="gertha_txt alt font_size_6"><?php echo get_post_meta($post->ID, 'C_texto_descriptivo_1', true); ?></p>
      <p class="gertha_txt alt font_size_6"><?php echo get_post_meta($post->ID, 'D_texto_descriptivo_2', true); ?></p>
    </div>
    <div class="gertha_img">
      <?php echo get_post_meta($post->ID, 'E_iframe_video', true); ?>
    </div>
  </section>

    <section class="separanda">
      <div class="separanda_item separanda_big" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/retirement.svg'; ?>
        <p class="separanda_text font_size_6">Retiro de <br> <?php echo get_post_meta($post->ID, 'F_días_de_retiro', true); ?></p>
      </div>
      <div class="separanda_item separanda_big separanda_plus" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/plus.svg'; ?>
      </div>
      <div class="separanda_item separanda_big" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/distance_training.svg'; ?>
        <p class="separanda_text separanda_big font_size_6"><strong>8 semanas de</strong><br>formación a distancia</p>
      </div>
    </section>
    <section class="showcase2">
      <div class="galu">
          <img class="galu_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'G_imagen_galeria_1', true)); ?>" alt="">
          <img class="galu_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'G_imagen_galeria_2', true)); ?>" alt="">
          <img class="galu_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'G_imagen_galeria_3', true)); ?>" alt="">
          <img class="galu_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'G_imagen_galeria_4', true)); ?>" alt="">
          <img class="galu_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'G_imagen_galeria_5', true)); ?>" alt="">
          <img class="galu_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'G_imagen_galeria_6', true)); ?>" alt="">
          <img class="galu_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'G_imagen_galeria_7', true)); ?>" alt="">
          <img class="galu_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'G_imagen_galeria_8', true)); ?>" alt="">
      </div>
      <div class="pista">
        <h5 class="pista_title font_size_5">Programa Orientativo</h5>

        <?php $i = 1;
        while(true){
          if(get_post_meta(get_the_ID(), 'G_programa_'.$i.'_text', true)){ ?>
            <div class="pista_group">
              <p class="pista_txt pista_time font_size_7"><?php echo get_post_meta(get_the_ID(), 'G_programa_'.$i.'_time', true); ?></p>
              <p class="pista_txt pista_text font_size_7"><strong><?php echo get_post_meta(get_the_ID(), 'G_programa_'.$i.'_text', true); ?></strong></p>
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
      <h3 class="block_title font_size_4" style=" color: <?php echo $category_color; ?> "><?php echo get_post_meta(get_the_ID(), 'H_segunda_descripcion_titulo', true); ?></h3>
      <div class="col_2_block_col">
        <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'I_segunda_descripcion_texto_1', true); ?></p>
        <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'I_segunda_descripcion_texto_2', true); ?></p>
      </div>
      <div class="col_2_block_col">
        <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'I_segunda_descripcion_texto_3', true); ?></p>
        <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'I_segunda_descripcion_texto_4', true); ?></p>
      </div>
    </section>



    <section class="showcase3">
      <h3 class="showcase_title font_size_4 simple_title" style=" color: <?php echo $category_color; ?> ">Herramientas que te servirán para...</h3>


      <div class="hosi hosi_secondary_color" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/shield.svg'; ?>
        <p class="hosi_txt font_size_7">Reducir estrés y ansiedad.</p>
      </div>

      <div class="hosi hosi_secondary_color" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/emotional_intelligence.svg'; ?>
        <p class="hosi_txt font_size_7">
          Aumentar la inteligencia emocional.
        </p>
      </div>

      <div class="hosi hosi_secondary_color" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/sleepy_moon.svg'; ?>
        <p class="hosi_txt font_size_7">
          Crear un sueño más profundo y reparador.
        </p>
      </div>

      <div class="hosi hosi_secondary_color" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/map_compose.svg'; ?>
        <p class="hosi_txt font_size_7">
          Ver “the big picture” para poder apreciar mejor los detalles.
        </p>
      </div>

      <div class="hosi hosi_secondary_color" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/listening_ear.svg'; ?>
        <p class="hosi_txt font_size_7">
          Mejorar la escucha activa, la concentración y creatividad.
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/perceptive_brain.svg'; ?>
        <p class="hosi_txt font_size_7">
          Crear una percepción flexible para mejorar la respuesta ante diferentes situaciones.
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/opportunity.svg'; ?>
        <p class="hosi_txt font_size_7">
          Afrontar el cambio y aprovechar las oportunidades que nos brinda.
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/relationship.svg'; ?>
        <p class="hosi_txt font_size_7">
          Mejorar las relaciones interpersonales.
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/happy_brain.svg'; ?>
        <p class="hosi_txt font_size_7">
          Hacernos más resistentes a la depresión.
        </p>
      </div>
    </section>

    <?php
    include get_stylesheet_directory() . '/bloque_testimonios.php';
    get_testimonios_block(['resiliencia']);
    ?>


    <section class="copa alt">

      <!-- <img class="copa_img" src="<?php echo get_img_url_by_slug(get_post_meta($post->ID, 'J_imagen_modulo_compra', true)); ?>" alt=""> -->

      <aside class="copa_description" style="border-color: <?php echo $category_color; ?>">
        <h4 class="copa_description_title" style="color: <?php echo $category_color; ?>">Modalidades:</h4>
        <?php $i = 1;
        while(get_post_meta(get_the_ID(), 'X_modalidad_'.$i.'_titulo', true)){ ?>
          <div class="copa_description_row">
            <h5 class="copa_description_subtitle"><?= get_post_meta(get_the_ID(), 'X_modalidad_'.$i.'_titulo', true); ?></h5>
            <p class="copa_description_text">
              <strong>¿Qué incluye?</strong>
            </p>
            <ul class="copa_description_list">
              <?php $j = 1;
              while(get_post_meta(get_the_ID(), 'X_modalidad_'.$i.'_item_'.$j, true)){ ?>
                <li class="copa_description_list_item"><?= get_post_meta(get_the_ID(), 'X_modalidad_'.$i.'_item_'.$j, true); ?></li>
              <?php $j=$j+1; } ?>
            </ul>
            <p class="copa_description_price"><?= get_post_meta(get_the_ID(), 'X_modalidad_'.$i.'_precio', true); ?></p>
          </div>
        <?php $i=$i+1; } ?>
      </aside>
      <?php include 'variable_product_interaction.php'; ?>

    </section>

  <?php } ?>


        <section class="col_4_block">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
          );
          $tag = get_post_meta(get_the_ID(), 'related_posts_tag', true);
          if ( $tag ) {
            $my_title = 'Puede interesarte';
            $args['tag'] = $tag;
          } else {
            $my_title = 'Últimas entradas';
          }
          ?>
          <h4 class="block_title font_size_3" style="color: <?php echo $category_color; ?>"><?php _e($my_title, 'awake') ?></h4>
          <?php // echo get_post_meta(get_the_ID(), 'related_posts_tag', true); ?>
          <?php
          $related = new WP_Query( $args );
        ?>
        <?php while ( $related->have_posts() ) : $related->the_post(); ?>

          <?php sqare_card(); ?>

        <?php endwhile; wp_reset_query(); ?>

        <a  class="block_link font_size_7" href="<?php echo get_site_url() ?>/blog">VER MÁS NOTICIAS</a>
      </section>




<?php get_footer(); ?>
