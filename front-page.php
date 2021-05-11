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


  <button style="display:none;" class="prenex prenex_prev rowcol1" id="prevButton">
    <svg class="prenex_svg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M25.1 247.5l117.8-116c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L64.7 256l102.2 100.4c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L25 264.5c-4.6-4.7-4.6-12.3.1-17z"></path></svg>
  </button>
  <button style="display:none;" class="prenex prenex_next rowcol1" id="nextButton">
    <svg class="prenex_svg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17z"></path></svg>
  </button>
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
  <div class="gertha_img">
    <?php echo get_post_meta($post->ID, 'E_iframe_video', true); ?>
  </div>
</section>




<section class="showcase4">
  <h3 class="showcase_title showcase_title_front_page font_size_3">¿En qué podemos ayudarte?</h3>


  <?php
  $IDbyNAME = get_term_by('name', 'categorias', 'product_cat');
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
    <div class="hero_img_filter" style="background-image:linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('<?php echo get_img_url_by_slug(get_post_meta($post->ID, 'imagen_portada', true)); ?>');">

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

  <button class="prenex prenex_prev rowcol1" id="prevButton">
    <svg class="prenex_svg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M25.1 247.5l117.8-116c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L64.7 256l102.2 100.4c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L25 264.5c-4.6-4.7-4.6-12.3.1-17z"></path></svg>
  </button>
  <button class="prenex prenex_next rowcol1" id="nextButton">
    <svg class="prenex_svg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17z"></path></svg>
  </button>
</section>

<?php include get_stylesheet_directory() . '/bloque_testimonios.php'; ?>

  <?php while(have_posts()){the_post(); ?>
    <section class="main">
      <?php the_content(); ?>
    </section>
  <?php } ?>

  <?php get_footer(); ?>
