<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>

  <?php

  $product_category = get_the_terms( $post->ID, 'product_cat' );
  foreach ($product_category as $category) {
    if ($category->slug != 'programas') {
      $category_color = get_term_meta( $category->term_id, 'lt_meta_color', true );
    }
  }
  $color = get_post_meta($post->ID, 'color', true);
  ?>

  <section class="hero">
    <div class="hero_img" style="background:<?php echo $color; ?>"></div>
    <h1 class="hero_title alt"><?php the_title(); ?></h1>
    <h2 class="hero_txt font_size_7"><?php echo get_post_meta($post->ID, 'C_descripcion_portada', true); ?></h2>
    <div class="redDot header_activator"></div>
    <svg class="hero_arrow_down" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
      <use xlink:href="#arrow_down"></use>
    </svg>
    <div class="redDot header_activator"></div>
  </section>


  <section class="col_2_block">
    <div class="gertha_deco alt2"></div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_6"><?php echo get_post_meta($post->ID, 'D_descripcion_texto_1', true); ?></p>
      <p class="block_txt font_size_6"><?php echo get_post_meta($post->ID, 'D_descripcion_texto_2', true); ?></p>
      <p class="block_txt font_size_6"><?php echo get_post_meta($post->ID, 'D_descripcion_texto_3', true); ?></p>
    </div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_6"><?php echo get_post_meta($post->ID, 'D_descripcion_texto_4', true); ?></p>
      <p class="block_txt font_size_6"><?php echo get_post_meta($post->ID, 'D_descripcion_texto_5', true); ?></p>
      <p class="block_txt font_size_6"><?php echo get_post_meta($post->ID, 'D_descripcion_texto_6', true); ?></p>
    </div>
    <h3 class="block_title font_size_3" style="color:<?php echo $color; ?>;margin: auto;"><?php echo get_post_meta($post->ID, 'D_descripcion_titulo', true); ?></h3>
  </section>

  <section class="showcase6" style="padding-top:0">
    <h3 class="showcase_title font_size_4 simple_title" style="color: <?php echo $color; ?>"><?php echo get_post_meta($post->ID, 'D2_caracteristicas_programa_titulo', true); ?></h3>
    <div class="showcase6_container">
      <div class="hosi" style="color: white; background: <?php echo $color; ?>;">
        <p class="hosi_title" style="color:white">60-70%</p>
        <p class="hosi_txt font_size_7" style="color:white">
          <strong>EFECTIVIDAD:</strong><br>
          de éxito después<br>
          de un año
        </p>
      </div>
      <div class="hosi" style="color: <?php echo $color; ?>; background: #F3F3F3;">
        <p class="hosi_title" style="color:<?php echo $color; ?>">+26</p>
        <p class="hosi_txt font_size_7" style="color:inherit!important">
          <strong>AÑOS:</strong>
          <br>
          de experiencia y
          <br>
          700 empresas
        </p>
      </div>

      <div class="hosi smaller_svg" style="color: white; background: <?php echo $color; ?>;">
        <style>
        .hosi.smaller_svg svg {
          width: 60px;
        }
        </style>
        <?php include get_template_directory().'/assets/side_effect.svg'; ?>
        <p class="hosi_txt font_size_7" style="color:white">
          SIN EFECTOS
          <br>
          SECUNDARIOS:
          <br>
          sin medicamentos
        </p>
      </div>

      <div class="hosi" style="color: <?php echo $color; ?>; background: #F3F3F3;">
        <?php include get_template_directory().'/assets/satisfaction.svg'; ?>
        <p class="hosi_txt font_size_7" style="color:inherit!important">
          <strong>SATISFACCIÓN:</strong>
          <br>
          dejar de fumar por
          <br>
          convicción
        </p>
      </div>

      <div class="hosi" style="color: white; background: <?php echo $color; ?>;">
        <?php include get_template_directory().'/assets/prevent_diseases.svg'; ?>
        <p class="hosi_txt font_size_7" style="color:inherit!important">
          <strong>GARANTÍA:</strong>
          <br>
          devolución
          <br>
          del dinero al empleado
        </p>
      </div>

      <div class="hosi" style="color: <?php echo $color; ?>; background: #F3F3F3;">
        <p class="hosi_title" style="color:<?php echo $color; ?>">6H</p>
        <p class="hosi_txt font_size_7" style="color:inherit!important">
          <strong>RAPIDEZ:</strong>
          <br>
          en una sola
          <br>
          mañana o tarde
        </p>
      </div>

      <div class="hosi" style="color: white; background: <?php echo $color; ?>;">
        <?php include get_template_directory().'/assets/calendar_2.svg'; ?>
        <p class="hosi_txt font_size_7" style="color:inherit!important">
          SENCILLO:
          <br>
          fácil de lanzar e
          <br>
          implantar en empresa
        </p>
      </div>

      <div class="hosi" style="color: <?php echo $color; ?>; background: #F3F3F3;">
        <?php include get_template_directory().'/assets/relationship_thick.svg'; ?>
        <p class="hosi_txt font_size_7" style="color:inherit!important">
          <strong>ASESORAMIENTO</strong>
          <br>
          acompañamos
          <br>
          en todos los pasos
        </p>
      </div>

      <div class="hosi" style="color: white; background: <?php echo $color; ?>;">
        <?php include get_template_directory().'/assets/gears.svg'; ?>
        <p class="hosi_txt font_size_7" style="color:inherit!important">
          <strong>RENDIMIENTO:</strong>
          <br>
          mejora del rendimiento
          <br>
          de la empresa
        </p>
      </div>

      <div class="hosi" style="color: <?php echo $color; ?>; background: #F3F3F3;">
        <?php include get_template_directory().'/assets/stable_jobs.svg'; ?>
        <p class="hosi_txt font_size_7" style="color:inherit!important">
          <strong>ADAPTABILIDAD</strong>
          <br>
          programas adaptados
          <br>
          a necesidades
        </p>
      </div>
    </div>
    <p class="hosi_clarification block_title" style=" color: <?php echo $category_color; ?>"><strong>*Este porcentaje de éxito ha sido avalado externamente a lo largo de los últimos 26 años por servicios médicos y departamentos de recursos humanos de más de 700 empresas en españa.</strong></p>
  </section>

    <section class="separanda_backgrounded">
      <div class="separanda separanda_backgrounded">
        <h4 class="separanda_title font_size_4" style=" color: <?php echo $color; ?>">¿Que incluye el programa?</h4>
        <div class="separanda_item" style=" color: <?php echo $color; ?>">
          <?php include get_template_directory().'/assets/strategy_map.svg'; ?>
          <p class="separanda_text font_size_5" style="color: #706862">
            Diseño
            <br>
            de la política
        </p>
        </div>
        <div class="separanda_item alt separanda_plus" style=" color: <?php echo $color; ?>">
          <?php include get_template_directory().'/assets/plus.svg'; ?>
        </div>
        <div class="separanda_item" style=" color: <?php echo $color; ?>">
          <?php include get_template_directory().'/assets/classroom.svg'; ?>
          <p class="separanda_text font_size_5" style="color: #706862">
            1 sesión
            <br>
            de 6 horas
          </p>
        </div>
        <div class="separanda_item alt separanda_plus separanda_hidden_plus" style=" color: <?php echo $color; ?>">
          <?php include get_template_directory().'/assets/plus.svg'; ?>
        </div>
        <div class="separanda_item" style=" color: <?php echo $color; ?>">
          <?php include get_template_directory().'/assets/calendar.svg'; ?>
          <p class="separanda_text font_size_5" style="color: #706862">
            Sesiones
            <br>
            de refuerzo
          </p>
        </div>
        <div class="separanda_item alt separanda_plus" style=" color: <?php echo $color; ?>">
          <?php include get_template_directory().'/assets/plus.svg'; ?>
        </div>
        <div class="separanda_item" style=" color:<?php echo $color; ?>">
          <?php include get_template_directory().'/assets/weekly_news.svg'; ?>
          <p class="separanda_text font_size_5" style="color: #706862">Boletines<br>semanales</p>
        </div>
      </div>
    </section>

    <banner class="banner_1" style=" background: <?php echo $color; ?>">
      <h4 class="banner_title font_size_2">
        <?php echo get_post_meta(get_the_ID(), 'E_banner_titulo', true); ?>
      </h4>
      <div class="double_cta_banner">
        <a href="<?php echo get_post_meta(get_the_ID(), 'E_banner_boton_1_link', true); ?>" class="btn white_btn font_size_7" style=" background: <?php echo $color; ?>">
          <?php echo get_post_meta(get_the_ID(), 'E_banner_boton_1_texto', true); ?>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'E_banner_boton_2_link', true); ?>" class="btn white_btn font_size_7" style=" background: <?php echo $color; ?>">
          <?php echo get_post_meta(get_the_ID(), 'E_banner_boton_2_texto', true); ?>
        </a>
      </div>
    </banner>


  <?php  } ?>





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
          <h4 class="block_title font_size_4" style="color: <?php echo $category_color; ?>">Puede interesarte</h4>
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
