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

  <section class="col_2_block">
    <div class="gertha_deco alt2"></div>

    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_1', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_2', true); ?></p>
    </div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_3', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_4', true); ?></p>
    </div>
    <p class="block_title font_size_3" style="color: <?php echo $category_color; ?>"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_titulo_inferior', true); ?></p>
  </section>

  <section class="showcase6">
    <h3 class="showcase_title font_size_3 simple_title" style=" color: <?php echo $category_color; ?> ">Ofrecemos</h3>
    <div class="showcase6_container">
      <div class="hosi" style=" color: white; background: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/lock.svg'; ?>
        <p class="hosi_txt font_size_6" style="color:white">
          DISCRECIÓN<br>
          Y PRIVACIDAD
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>; background: #f4f4f4;">
        <?php include get_template_directory().'/assets/clock.svg'; ?>
        <p class="hosi_txt font_size_6" style=" color: <?php echo $category_color; ?> ">
          RAPIDEZ Y<br>
          EFECTIVIDAD
        </p>
      </div>

      <div class="hosi" style=" background: <?php echo $category_color; ?>; color: white;">
        <?php include get_template_directory().'/assets/develop_thoughts.svg'; ?>
        <p class="hosi_txt font_size_6" style="color:white">
          SIN SUFRIR NI<br>
          ECHARLO DE MENOS
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>; background: #f4f4f4">
        <?php include get_template_directory().'/assets/building.svg'; ?>
        <p class="hosi_txt font_size_6" style=" color: <?php echo $category_color; ?>!important ">
          SIN NECESIDAD<br>
          INGRESO CENTRO DE<br>
          DESINTOXICACIÓN
        </p>
      </div>

      <div class="hosi wide_hosi" style=" background: <?php echo $category_color; ?>;color: white; ">
        <?php include get_template_directory().'/assets/key_attitude.svg'; ?>
        <p class="hosi_txt font_size_6" style="color: white;">
          RECUPERAR<br>
          TU VIDA Y SENTIRTE<br>
          LIBRE Y FELIZ
        </p>
      </div>

    </div>
  </section>

  <section class="separanda alt separanda_backgrounded">
    <h4 class="separanda_title alt font_size_3" style="color: <?php echo $category_color; ?>">¿Qué incluyen las sesiones?</h4>

    <div class="separanda_subtitle_container">
      <h6 class="separanda_subtitle font_size_5" style="color: <?php echo $category_color; ?>">Primera fase – Libérate</h6>
      <div class="separanda_deco" style="background: <?php echo $category_color; ?>"></div>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/videoconference.svg'; ?>
      <p class="separanda_text font_size_5"  style="color: #706862">
        Orientación<br>
        presencial o<br>
        videoconferencia
      </p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/eye.svg'; ?>
      <p class="separanda_text font_size_5"  style="color: #706862">
        Deberes:<br>
        Una/dos<br>
        semanas
      </p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/old_clock.svg'; ?>
      <p class="separanda_text font_size_5"  style="color: #706862">
        Jornada<br>
        “Libérate”<br>
        6-7 horas
      </p>
    </div>
    <div class="separanda_subtitle_container">
      <h6 class="separanda_subtitle font_size_5" style="color: <?php echo $category_color; ?>">Segunda Fase – Redirige tu vida</h6>
      <div class="separanda_deco" style="background: <?php echo $category_color; ?>"></div>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/farm.svg'; ?>
      <p class="separanda_text font_size_5"  style="color: #706862">
        Curso<br>
        Residencial<br>
        3 días
      </p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/calendar.svg'; ?>
      <p class="separanda_text font_size_5"  style="color: #706862">
        formación<br>
        a distancia<br>
        8 semanas
      </p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/magazine.svg'; ?>
      <p class="separanda_text font_size_5"  style="color: #706862">
        Documentación<br>
        de apoyo
      </p>
    </div>
  </section>

  <section class="col_2_block">
    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_1', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_2', true); ?></p>
    </div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_3', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_4', true); ?></p>
    </div>
  </section>



      <section class="copa">
        <img class="copa_img" src="<?php echo get_post_meta($post->ID, 'C_imagen_modulo_compra', true); ?>" alt="">
        <?php include 'variable_product_interaction.php'; ?>

      </section>

    <?php } ?>

    <banner class="banner_1" style=" background: <?php echo $category_color; ?> ">
      <h4 class="banner_title font_size_3"><?php echo get_post_meta(get_the_ID(), 'D_titulo_banner', true); ?></h4>
      <a href="<?php echo get_post_meta(get_the_ID(), 'D_link_boton_banner', true); ?>" class="btn white_btn font_size_6" style=" background: <?php echo $category_color; ?> "><?php echo get_post_meta(get_the_ID(), 'D_texto_boton_banner', true); ?></a>
    </banner>


    <?php include 'related_posts.php' ?>



  <?php get_footer(); ?>
