<?php get_header(); ?>


<section class="hero hero_opaque">
  <img class="hero_img" loading="lazy" src="<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_image_atf', true ); ?>" alt="">
  <h1 class="hero_title rowcol1 font_size_2"><?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_title', true ); ?></h1>

  <div class="redDot header_activator"></div>
  <svg class="mega_arrow_down rowcol1" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
    <use xlink:href="#arrow_down"></use>
  </svg>
</section>

<section class="flati">
      <img class="flati_icon" loading="lazy" src="<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_icon', true ); ?>" alt="">

    <!-- <img class="flati_icon" src="" alt=""> -->
    <div class="flati_deco" style="background:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>"></div>
    <h5 class="flati_title font_size_3" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>"><?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_description_title', true ); ?></h5>
    <p class="flati_txt font_size_5"><?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_description', true ); ?></p>
</section>




    <section class="showcase4 tall_img">

        <h3 class="showcase_title alt simple_title font_size_3">Descubre nuestros programas<br>para liberarte de las adicciones </h3>

        <?php while (have_posts()){the_post(); ?>

            <?php simpla_card(); ?>

        <?php } wp_reset_query(); ?>

    </section>



        <section class="showcase3">
            <h3 class="showcase_title font_size_3 simple_title" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">Enseñanzas que te permitirán...</h3>


            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/adiction_free.svg'; ?>
                <p class="hosi_txt font_size_5">
                  Liberarte de tu adicción.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/incorporate_perceptions.svg'; ?>
                <p class="hosi_txt font_size_5">
                  Incorporar las percepciones
                  <br>
                  adecuadas para liberarte sin sufrir.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/empower_yourself.svg'; ?>
                <p class="hosi_txt font_size_5">
                    Empoderarte.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/develop_thoughts.svg'; ?>
                <p class="hosi_txt font_size_5">
                  Desarrollar una relación
                  <br>
                  más sana con tus pensamientos.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/reconnect_yourself.svg'; ?>
                <p class="hosi_txt font_size_5">
                  Re-conectar contigo mismo,
                  <br>
                  con tu familia y el entorno que te rodea.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/manage_stress.svg'; ?>
                <p class="hosi_txt font_size_5">
                  Aprender a gestionar mejor
                  <br>
                  el estrés y la ansiedad.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/healthy_feelings.svg'; ?>
                <p class="hosi_txt font_size_5">
                  Tener una relación
                  <br>
                  más sana con tus sentimientos.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/redirect_life.svg'; ?>
                <p class="hosi_txt font_size_5">
                  Te permite redirigir tu vida
                  <br>
                  y sentirte libre y feliz.
                </p>
            </div>

            <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
                <?php include get_template_directory().'/assets/key_attitude.svg'; ?>
                <p class="hosi_txt font_size_5">
                  Incorporar las actitudes adecuadas
                  <br>
                  para liberarte sin echarlo de menos.
                </p>
            </div>
        </section>




    <section class="tesim_container Carousel">
      <h3 class="testim_title font_size_3">Testimonios</h3>

      <div class="tesim_cont Element row2col1">
        <?php
        $i = 0;
        $args = array(
          'post_type'=>'testimonial',
        );
        $testimonials=new WP_Query($args);
        while($testimonials->have_posts()){$testimonials->the_post();?>
          <?php if ( !($i & 1) AND $i ) { ?>
          </div>
          <div class="tesim_cont Element row2col1">
          <?php } ?>
          <quote class="tesim">
            <svg class="tesim_icon" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 38 34">
              <use xlink:href="#quote_icon"></use>
            </svg>
            <div class="tesim_txt"><?php the_content(); ?></div>
            <p class="tesim_author"><?php the_title(); ?></p>
          </quote>
          <?php $i=$i+1; } wp_reset_query(); ?>
        </div>


        <button class="prenex prenex_prev row2col1 dark" id="prevButton"></button>
        <button class="prenex prenex_next row2col1 dark" id="nextButton"></button>
        <a href="" class="testim_link">VER MÁS TESTIMONIOS</a>
      </section>

    <section class="main">
        <?php the_content(); ?>
    </section>


<?php get_footer(); ?>
