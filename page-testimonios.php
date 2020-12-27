<?php get_header(); ?>

<section class="hero hero_opaque">
  <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
  <h1 class="hero_title"><?php echo the_content() ?></h1>
  <svg class="hero_arrow_down" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
    <use xlink:href="#arrow_down"></use>
  </svg>
  <div class="redDot header_activator"></div>
</section>

<section class="col_1_block alt">
  <h4 class="block_title font_size_2"><?php echo get_post_meta(get_the_ID(), 'A_titulo', true); ?></h4>
  <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_texto_1', true); ?></p>
  <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_texto_2', true); ?></p>
  <img class="col_1_img" src="<?php echo get_post_meta(get_the_ID(), 'B_firma_img', true); ?>" alt="Firmas de Geoffrey y Rhea" >
</section>

<section class="tesim_container backgrounded Carousel">

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
        <div class="tesim_txt font_size_5"><?php the_content(); ?></div>
        <p class="tesim_author font_size_5"><?php the_title(); ?></p>
      </quote>
      <?php $i=$i+1; } wp_reset_query(); ?>
    </div>


    <button class="prenex prenex_prev row2col1 dark" id="prevButton"></button>
    <button class="prenex prenex_next row2col1 dark" id="nextButton"></button>
  </section>

  <section class="col_testimonials_container" data-card="col_testimonial_card" data-cycle="testimonio">

    <?php
    $args = array(
      'post_type'=>'testimonial',
      'posts_per_page' => 6,
    );
    $testimonials=new WP_Query($args);
    wp_localize_script( 'main', 'testimonio', array(
      'query'=>json_encode($testimonials->query_vars),
    ) );
    while($testimonials->have_posts()){$testimonials->the_post();?>
      <?php col_testimonial_card(); ?>
    <?php } wp_reset_query(); ?>
    <?php echo ajax_paginator_2($testimonials); ?>

    <!-- <div class="pagination_2">
      <p class="pagination_numbers">
        <span class="pagination_2_deco font_size_5">─</span>
        <span class="pagination_2_number font_size_5">1</span>
        <span class="pagination_2_deco font_size_5">·</span>
        <span class="pagination_2_number font_size_5">2</span>
        <span class="pagination_2_deco font_size_5">·</span>
        <span class="pagination_2_number font_size_5">3</span>
        <span class="pagination_2_deco font_size_5">·</span>
        <span class="pagination_2_number font_size_5">4</span>
        <span class="pagination_2_deco font_size_5">·</span>
        <span class="pagination_2_number font_size_5">5</span>
        <span class="pagination_2_deco font_size_5">></span>
      </p>
    </div> -->

  </section>
  <section class="comment_form">
    <input class="main_form_input" type="text" placeholder="Nombre">
    <input class="main_form_input" type="email" placeholder="E-mail">
    <textarea class="main_form_input main_textarea" placeholder="Escríbenos tu testimonio"></textarea>
    <div class="form_acceptance_container font_size_8">
      <input id="terms_acceptance" type="checkbox">
      <label for="terms_acceptance">He leído y acepto la política de privacidad.</label>
    </div>
    <input class="btn main_form_btn" type="submit" value="Enviar testimonio">
  </section>

  <section class="full_page_media_container">
    <video class="full_page_media" controls="true" alt="Video explicativo">
      <source type="video/mp4" src="<?php echo get_post_meta($post->ID, 'E_bloque_1_video', true); ?>">
    </video>
  </section>


<?php get_footer(); ?>
