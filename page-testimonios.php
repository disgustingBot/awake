<?php get_header(); ?>

<?php include get_stylesheet_directory() . '/bloque_testimonios.php'; ?>

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
    while($testimonials->have_posts()){$testimonials->the_post();
      col_testimonial_card();
    } wp_reset_query();
    echo ajax_paginator_2($testimonials);
    ?>

  </section>
  <section class="comment_form_comment">
    <form class="comment_form" action="">
      <input class="main_form_input font_size_8" type="text" placeholder="Nombre*" required>
      <input class="main_form_input font_size_8" type="email" placeholder="E-mail*" required>
      <textarea class="main_form_input font_size_8 main_form_textarea" placeholder="Escríbenos tu testimonio*" required></textarea>
      <div class="form_acceptance_container font_size_8">
        <input id="terms_acceptance" type="checkbox" required>
        <label class="font_size_8" for="terms_acceptance">He leído y acepto la política de privacidad.</label>
      </div>
      <input class="btn main_form_btn font_size_8" type="submit" value="Enviar testimonio">

    </form>
  </section>

  <section class="full_page_media_container">
    <video class="full_page_media" controls="true" alt="Video explicativo">
      <source type="video/mp4" src="<?php echo get_img_url_by_slug(get_post_meta($post->ID, 'E_bloque_1_video', true)); ?>">
    </video>
  </section>


<?php get_footer(); ?>
