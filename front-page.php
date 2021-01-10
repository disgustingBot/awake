<?php get_header(); ?>


<!-- <h1>Font Size 1: <?php //var_dump((int)get_option( 'font_size_1_number', '' )); ?></h1> -->
<!-- <h1>Color 1: <?php echo get_option( 'primary_color', '' ); ?></h1> -->
<!-- <h1>Font Size 2: <?php echo get_option( 'font_size_2_number', '' ); ?></h1> -->

<section class="mega Carousel">

  <?php
  $args = array(
    'post_type'=>'banner',
  );
  $banners=new WP_Query($args);
  while($banners->have_posts()){$banners->the_post();?>
    <div class="hero Element">
      <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
      <h3 class="hero_title font_size_1"><?php the_title(); ?></h3>
    </div>
  <?php } wp_reset_query(); ?>


  <button class="prenex prenex_prev rowcol1" id="prevButton"></button>
  <button class="prenex prenex_next rowcol1" id="nextButton"></button>
  <svg class="mega_arrow_down rowcol1" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
    <use xlink:href="#arrow_down"></use>
  </svg>
</section>




<section class="gertha lateral_m">
  <div class="gertha_deco"></div>
  <h2 class="gertha_title font_size_2"><?php echo get_post_meta($post->ID, 'A_bloque_1_titulo', true); ?></h2>
  <div class="gertha_caption">
    <p class="gertha_txt font_size_6"><?php echo get_post_meta($post->ID, 'B_bloque_1_texto_1', true); ?></p>
    <p class="gertha_txt font_size_6"><?php echo get_post_meta($post->ID, 'C_bloque_1_texto_2', true); ?></p>
    <p class="gertha_txt font_size_6"><?php echo get_post_meta($post->ID, 'D_bloque_1_texto_3', true); ?></p>
    <svg class="gertha_signature" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 512 200">
      <use xlink:href="#signature"></use>
    </svg>
  </div>

  <video class="gertha_img" controls="true" alt="Thanks Taryn! Great video. This is your Instagram: https://www.instagram.com/peanutbuttervisuals/">
    <source type="video/mp4" src="<?php echo get_img_url_by_slug(get_post_meta($post->ID, 'E_bloque_1_video', true)); ?>">
  </video>
</section>




<section class="showcase4">
  <h3 class="showcase_title showcase_title_front_page font_size_3">¿En qué podemos ayudarte?</h3>


  <?php
  $IDbyNAME = get_term_by('name', 'programas', 'product_cat');
  $product_cat_ID = $IDbyNAME->term_id;
  $args = array(
    'hierarchical' => 1,
    'show_option_none' => '',
    'hide_empty' => 0,
    'parent' => $product_cat_ID,
    'taxonomy' => 'product_cat',
    'orderby' => 'meta_value_num',
    'meta_key'=> 'lt_meta_order',
  );
  $subcats = get_categories($args);
  foreach ($subcats as $sc) {
    $link = get_term_link( $sc->slug, $sc->taxonomy );
    // if($sc->slug == 'longevity'){$link = '#';}
    if(get_term_meta( $sc->term_id, 'lt_meta_link', true )){
      // echo 'LOUDLY TEST YOUR THINGS';
      $link = get_term_meta( $sc->term_id, 'lt_meta_link', true );
    }
    $thumbnail_id = get_term_meta( $sc->term_id, 'thumbnail_id', true );
    $image = wp_get_attachment_url( $thumbnail_id );
    $color = get_term_meta( $sc->term_id, 'lt_meta_color', true );
    $arguments = array(
      'title' => $sc->name,
      'link'  => $link,
      'image' => $image,
      'color' => $color,
      'excerpt' => false,
    );
    simpla_card($arguments);
  } ?>
</section>





<section class="mega Carousel">

  <?php

  $args = array(
    'post_type'=>'product',
    'posts_per_page'=>4,
    'product_tag' => 'banner',
  );
  $blogPosts=new WP_Query($args); ?>

  <?php while($blogPosts->have_posts()){$blogPosts->the_post(); ?>
    <?php global $product; ?>
    <div class="hero Element">
    <div class="hero_img_filter" style="background-image:linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('<?php echo get_post_meta($post->ID, 'imagen_portada', true); ?>');">

    </div>


    <img class="hero_icon" loading="lazy" src="<?php echo get_img_url_by_slug(get_post_meta($post->ID, 'icono', true)); ?>" alt="">

    <div>
      <a href="<?php echo get_permalink(); ?>">
        <h1 class="hero_title font_size_2">
          <?php the_title(); ?>
        </h1>
      </a>
      <a class="hero_link font_size_7" href="<?php echo get_permalink(); ?>">PRÓXIMAS FECHAS</a>
    </div>
    <div class="hero_txt font_size_7"><?php the_excerpt(); ?></div>
  </div>
<?php } wp_reset_query(); ?>

<button class="prenex prenex_prev rowcol1" id="prevButton"></button>
<button class="prenex prenex_next rowcol1" id="nextButton"></button>
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
        <div class="tesim_txt font_size_6"><?php the_content(); ?></div>
        <p class="tesim_author font_size_6"><?php the_title(); ?></p>
      </quote>
      <?php $i=$i+1; } wp_reset_query(); ?>
    </div>


    <button class="prenex prenex_prev row2col1 dark" id="prevButton"></button>
    <button class="prenex prenex_next row2col1 dark" id="nextButton"></button>
    <a href="" class="testim_link">VER MÁS TESTIMONIOS</a>
  </section>





  <?php while(have_posts()){the_post(); ?>
    <section class="main">
      <?php the_content(); ?>
    </section>
  <?php } ?>

  <?php get_footer(); ?>
