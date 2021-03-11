<?php get_header(); ?>


<section class="hero hero_opaque">
  <img class="hero_img" loading="lazy" src="<?php echo get_img_url_by_slug(get_term_meta( get_queried_object()->term_id, 'lt_meta_image_atf', true )); ?>" alt="">
  <h1 class="hero_title rowcol1 font_size_1"><?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_title', true ); ?></h1>

  <div class="redDot header_activator"></div>
  <svg class="mega_arrow_down rowcol1" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
    <use xlink:href="#arrow_down"></use>
  </svg>
</section>

<section class="flati">
      <img class="flati_icon" loading="lazy" src="<?php echo get_img_url_by_slug(get_term_meta( get_queried_object()->term_id, 'lt_meta_icon', true )); ?>" alt="">

    <!-- <img class="flati_icon" src="" alt=""> -->
    <div class="flati_deco" style="background:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>"></div>
    <h5 class="flati_title font_size_4" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>"><?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_description_title', true ); ?></h5>
    <p class="flati_txt font_size_6"><?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_description', true ); ?></p>
</section>




    <section class="showcase4 tall_img">

        <h3 class="showcase_title alt simple_title font_size_2">Descubre nuestros Programas de Resiliencia</h3>

        <?php
        while (have_posts()){the_post();
          $product_category = get_the_terms( get_the_ID(), 'product_cat' );

          $is_programa = false;
          $is_empresa = false;
          foreach ($product_category as $category) {
            $is_programa = $category->slug == 'programas' ? true : $is_programa;
            $is_empresa = $category->slug == 'empresas' ? true : $is_empresa;
          }
          
          if ($is_programa and !$is_empresa) {
            $arg = array(
              'image' => get_post_meta(get_the_ID(), 'tall_img', true),
            );
            simpla_card($arg);
          }
        } wp_reset_query();
        ?>

    </section>



        <section class="showcase3">
            <h3 class="showcase_title font_size_4 simple_title" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">Herramientas que te servirán para...</h3>


            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/shield.svg'; ?>
                <p class="hosi_txt font_size_7">Reducir estrés y ansiedad.</p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/emotional_intelligence.svg'; ?>
                <p class="hosi_txt font_size_7">
                    Aumentar la inteligencia emocional.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/sleepy_moon.svg'; ?>
                <p class="hosi_txt font_size_7">
                    Crear un sueño más profundo y reparador.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/map_compose.svg'; ?>
                <p class="hosi_txt font_size_7">
                    Ver “the big picture” para poder apreciar mejor los detalles.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/listening_ear.svg'; ?>
                <p class="hosi_txt font_size_7">
                    Mejorar la escucha activa, la concentración y creatividad.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/perceptive_brain.svg'; ?>
                <p class="hosi_txt font_size_7">
                    Crear una percepción flexible para mejorar la respuesta ante diferentes situaciones.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/opportunity.svg'; ?>
                <p class="hosi_txt font_size_7">
                    Afrontar el cambio y aprovechar las oportunidades que nos brinda.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/relationship.svg'; ?>
                <p class="hosi_txt font_size_7">
                    Mejorar las relaciones interpersonales.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/happy_brain.svg'; ?>
                <p class="hosi_txt font_size_7">
                    Hacernos más resistentes a la depresión.
                </p>
            </div>
        </section>



      <?php include get_stylesheet_directory() . '/bloque_testimonios.php'; ?>


<?php get_footer(); ?>
