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

  <section class="gertha lateral_m">
    <div class="gertha_deco alt"></div>
    <div class="gertha_caption">
      <p class="gertha_txt alt font_size_6"><?php echo get_post_meta($post->ID, 'A_descripcion_texto_1', true); ?></p>
      <p class="gertha_txt alt font_size_6"><?php echo get_post_meta($post->ID, 'A_descripcion_texto_2', true); ?></p>
      <p class="gertha_txt alt font_size_6"><?php echo get_post_meta($post->ID, 'A_descripcion_texto_3', true); ?></p>
      <p class="gertha_txt alt font_size_6"><?php echo get_post_meta($post->ID, 'A_descripcion_texto_4', true); ?></p>
    </div>
    <div class="gertha_img">
      <?php echo get_post_meta($post->ID, 'A_iframe_video', true); ?>
    </div>
    <!-- <video class="gertha_img" controls="true" alt="">
      <source type="video/mp4" src="<?php echo get_img_url_by_slug(get_post_meta($post->ID, 'A_descripcion_url_video', true)); ?>">
    </video> -->
    <h3 class="gertha_title alt font_size_4" style=" color: <?php echo $category_color; ?> ">
      <?php echo get_post_meta($post->ID, 'A_descripcion_titulo', true); ?>
      <br>
      <a class="gertha_link" href="<?php echo get_post_meta($post->ID, 'A_descripcion_link', true); ?>" style=" color: #968778 "><?php echo get_post_meta($post->ID, 'A_descripcion_link_texto', true); ?></a>
    </h3>
  </section>

  <section class="showcase6">
    <h3 class="showcase_title font_size_4 simple_title" style=" color: <?php echo $category_color; ?> ">Ofrecemos</h3>
    <div class="showcase6_container">
      <div class="hosi" style=" color: white; background: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/lock.svg'; ?>
        <p class="hosi_txt font_size_7" style="color:white">
          DISCRECIÓN<br>
          Y PRIVACIDAD
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>; background: #f4f4f4;">
        <?php include get_template_directory().'/assets/clock.svg'; ?>
        <p class="hosi_txt font_size_7" style=" color: <?php echo $category_color; ?> ">
          RAPIDEZ Y<br>
          EFECTIVIDAD
        </p>
      </div>

      <div class="hosi" style=" background: <?php echo $category_color; ?>; color: white;">
        <?php include get_template_directory().'/assets/develop_thoughts.svg'; ?>
        <p class="hosi_txt font_size_7" style="color:white">
          SIN SUFRIR NI<br>
          ECHARLO DE MENOS
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>; background: #f4f4f4">
        <?php include get_template_directory().'/assets/building.svg'; ?>
        <p class="hosi_txt font_size_7" style=" color: <?php echo $category_color; ?>!important ">
          SIN NECESIDAD<br>
          INGRESO CENTRO DE<br>
          DESINTOXICACIÓN
        </p>
      </div>

      <div class="hosi wide_hosi" style=" background: <?php echo $category_color; ?>;color: white; ">
        <?php include get_template_directory().'/assets/key_attitude.svg'; ?>
        <p class="hosi_txt font_size_7" style="color: white;">
          RECUPERAR<br>
          TU VIDA Y SENTIRTE<br>
          LIBRE Y FELIZ
        </p>
      </div>

    </div>
  </section>

  <section class="separanda alt separanda_backgrounded">
    <h4 class="separanda_title alt font_size_4" style="color: <?php echo $category_color; ?>">¿Qué incluyen las sesiones?</h4>

    <div class="separanda_subtitle_container">
      <h6 class="separanda_subtitle font_size_6" style="color: <?php echo $category_color; ?>">Primera fase – Libérate</h6>
      <div class="separanda_deco" style="background: <?php echo $category_color; ?>"></div>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/videoconference.svg'; ?>
      <p class="separanda_text font_size_6"  style="color: #706862">
        <strong>Orientación</strong><br>
        presencial o<br>
        videoconferencia
      </p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/eye.svg'; ?>
      <p class="separanda_text font_size_6"  style="color: #706862">
        <strong>Deberes</strong>
        <br>
        Una/dos
        <br>
        semanas
      </p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/old_clock.svg'; ?>
      <p class="separanda_text font_size_6"  style="color: #706862">
        <strong>Jornada<br>
        “Vive sin alcohol”</strong><br>
        6-7 horas
      </p>
    </div>
    <div class="separanda_subtitle_container">
      <h6 class="separanda_subtitle font_size_6" style="color: <?php echo $category_color; ?>">Segunda Fase – Redirige tu vida</h6>
      <div class="separanda_deco" style="background: <?php echo $category_color; ?>"></div>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/farm.svg'; ?>
      <p class="separanda_text font_size_6"  style="color: #706862">
        <strong>Curso<br>
        Residencial</strong><br>
        3 días
      </p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/calendar.svg'; ?>
      <p class="separanda_text font_size_6"  style="color: #706862">
        <strong>Formación<br>
        a distancia</strong><br>
        8 semanas
      </p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/magazine.svg'; ?>
      <p class="separanda_text font_size_6"  style="color: #706862">
        <strong>Documentación<br>
        de apoyo y libro</strong>
      </p>
    </div>
  </section>

  <section class="col_2_block">
    <div class="col_2_block_col">
      <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'C_segunda_descripcion_texto_1', true); ?></p>
      <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'C_segunda_descripcion_texto_2', true); ?></p>
    </div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'C_segunda_descripcion_texto_3', true); ?></p>
    </div>
  </section>

  <?php
  include get_stylesheet_directory() . '/bloque_testimonios.php';
  get_testimonios_block(['dejar-el-alcohol']);
  ?>

  <section class="copa alt">
        <!-- <img class="copa_img" src="<?php echo get_img_url_by_slug(get_post_meta($post->ID, 'C_imagen_modulo_compra', true)); ?>" alt=""> -->

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

    <banner class="banner_1" style=" background: <?php echo $category_color; ?> ">
      <h4 class="banner_title font_size_4"><?= get_post_meta(get_the_ID(), 'D_banner_titulo', true); ?></h4>
      <a href="<?= get_post_meta(get_the_ID(), 'D_banner_boton_url', true); ?>" class="btn white_btn font_size_7" style=" background: <?php echo $category_color; ?> "><?= get_post_meta(get_the_ID(), 'D_banner_boton_texto', true); ?></a>
    </banner>

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
            <h4 class="block_title font_size_4" style="color: <?php echo $category_color; ?>"><?php _e($my_title, 'awake') ?></h4>
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
