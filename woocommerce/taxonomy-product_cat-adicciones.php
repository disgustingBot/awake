<?php get_header(); ?>


<section class="hero hero_opaque">

  <img class="hero_img" loading="lazy" src="<?php echo get_img_url_by_slug(get_term_meta( get_queried_object()->term_id, 'lt_meta_image_atf', true )); ?>" alt="">
  <h1 class="hero_title rowcol1"><?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_title', true ); ?></h1>

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

        <h3 class="showcase_title alt simple_title font_size_2">Descubre nuestros programas<br>para liberarte de las adicciones </h3>

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
            <h3 class="showcase_title font_size_4 simple_title" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">Enseñanzas que te permitirán...</h3>


            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/adiction_free.svg'; ?>
                <p class="hosi_txt font_size_7">
                  Liberarte de tu adicción.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/incorporate_perceptions.svg'; ?>
                <p class="hosi_txt font_size_7">
                  Incorporar las percepciones
                  <br>
                  adecuadas para liberarte sin sufrir.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/empower_yourself.svg'; ?>
                <p class="hosi_txt font_size_7">
                    Empoderarte.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/develop_thoughts.svg'; ?>
                <p class="hosi_txt font_size_7">
                  Desarrollar una relación
                  <br>
                  más sana con tus pensamientos.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/reconnect_yourself.svg'; ?>
                <p class="hosi_txt font_size_7">
                  Re-conectar contigo mismo,
                  <br>
                  con tu familia y el entorno que te rodea.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/manage_stress.svg'; ?>
                <p class="hosi_txt font_size_7">
                  Aprender a gestionar mejor
                  <br>
                  el estrés y la ansiedad.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/healthy_feelings.svg'; ?>
                <p class="hosi_txt font_size_7">
                  Tener una relación
                  <br>
                  más sana con tus sentimientos.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/redirect_life.svg'; ?>
                <p class="hosi_txt font_size_7">
                  Te permite redirigir tu vida
                  <br>
                  y sentirte libre y feliz.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/key_attitude.svg'; ?>
                <p class="hosi_txt font_size_7">
                  Incorporar las actitudes adecuadas
                  <br>
                  para liberarte sin echarlo de menos.
                </p>
            </div>
        </section>


        <?php
        include get_stylesheet_directory() . '/bloque_testimonios.php';
        get_testimonios_block(['dejar-de-fumar', 'dejar-el-alcohol']);
        ?>


<?php get_footer(); ?>
