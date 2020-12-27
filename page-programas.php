<?php get_header(); ?>






<section class="showcase4 margin_top_header">
  <h3 class="showcase_title showcase_title_front_page font_size_3"><?php the_title() ?></h3>


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






  <?php while(have_posts()){the_post(); ?>
    <section class="main">
      <?php the_content(); ?>
    </section>
  <?php } ?>

  <?php get_footer(); ?>
