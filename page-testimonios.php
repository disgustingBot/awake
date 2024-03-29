<?php get_header(); ?>

<section class="hero hero_opaque">
  <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
  <h1 class="hero_title font_size_1"><?php echo the_content() ?></h1>
  <svg class="hero_arrow_down" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
    <use xlink:href="#arrow_down"></use>
  </svg>
  <div class="redDot header_activator"></div>
</section>

<section class="col_1_block alt">
  <h4 class="block_title font_size_4"><?php echo get_post_meta(get_the_ID(), 'A_titulo', true); ?></h4>
  <p class="block_txt font_size_7"><?php echo get_post_meta(get_the_ID(), 'A_texto_1', true); ?></p>
  <p class="block_txt font_size_7"><?php echo get_post_meta(get_the_ID(), 'A_texto_2', true); ?></p>
  <img class="col_1_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'B_firma_img', true)); ?>" alt="Firmas de Geoffrey y Rhea" >
</section>

  <div class="testim_page_container">
    <?php
    include get_stylesheet_directory() . '/bloque_testimonios.php';
    get_testimonios_block('adicciones');
    ?>
  </div>

  <section class="col_testimonials_container" data-card="col_testimonial_card" data-cycle="testimonio">

    <div class="testimonial_filter">
      <svg class="testimonial_filter_icon"width="284" height="195" viewBox="0 0 284 195" fill="none" xmlns="http://www.w3.org/2000/svg">
        <use xlink:href="#healthy_hands"></use>
      </svg>
      <div id="testimonios"  class="testimonial_filter_title_cont">
        <p class="testimonial_filter_title font_size_3">Vuestras palabras...</p>
        <div class="testimonial_filter_stripe"></div>
      </div>
      <div class="testimonial_keypad">
        <a href="<?php echo get_site_url() . '/testimonios/#testimonios' ; ?>" class="testimonial_keypad_btn <?= (!isset($_GET['cat'])) ?'active': '' ?> font_size_7">TODOS LOS TESTIMONIOS</a>
        <a href="<?php echo get_site_url() . '/testimonios/?cat=dejar-de-fumar#testimonios' ; ?>" class="testimonial_keypad_btn <?= (isset($_GET['cat']) and $_GET['cat'] == 'dejar-de-fumar') ?'active': '' ?> font_size_7">DEJAR DE FUMAR</a>
        <a href="<?php echo get_site_url() . '/testimonios/?cat=dejar-el-alcohol#testimonios' ; ?>" class="testimonial_keypad_btn <?= (isset($_GET['cat']) and $_GET['cat'] == 'dejar-el-alcohol') ?'active': '' ?> font_size_7">DEJAR EL ALCOHOL</a>
        <a href="<?php echo get_site_url() . '/testimonios/?cat=resiliencia#testimonios' ; ?>" class="testimonial_keypad_btn <?= (isset($_GET['cat']) and $_GET['cat'] == 'resiliencia') ?'active': '' ?> font_size_7">RESILIENCIA</a>
      </div>
    </div>

    <div class="nothin_to_see_here" data-card="col_testimonial_card" data-cycle="testimonio" style="display:grid">

      <?php
      $args = array(
        'post_type'=>'testimonial',
        'posts_per_page' => 6,
        'cycle' => 'testimonio',
      );
      if (isset($_GET['cat'])){
        $args['tax_query'] = [
          array(
            'taxonomy' => 'categoría',
            'field'    => 'slug',
            'terms'    => $_GET['cat'],
          )
        ];
      }
      $testimonials=new WP_Query($args);
      wp_localize_script( 'main', 'testimonio', array( 'query'=>json_encode($testimonials->query_vars), ) );
      while($testimonials->have_posts()){$testimonials->the_post();
        col_testimonial_card();
      } wp_reset_query();
      echo ajax_paginator_2($testimonials);
      ?>
    </div>

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
      <input class="btn main_form_btn font_size_7" type="submit" value="Enviar testimonio">

    </form>
  </section>

  <section class="full_page_media_container">
    <!-- <video class="full_page_media" controls="true" alt="Video explicativo">
      <?php // echo get_post_meta($post->ID, 'E_bloque_1_video', true); ?>
    </video> -->
      <?php echo get_post_meta($post->ID, 'E_bloque_1_video', true); ?>
  </section>


<?php get_footer(); ?>
