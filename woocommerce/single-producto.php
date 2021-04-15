
  <section class="copa product_copa" style="margin-top:150px">
    <h1 class="copa_title font_size_2"><?php the_title(); ?></h1>
    <img class="copa_img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
    <?php include 'variable_product_interaction.php'; ?>
  </section>

  <section class="main">
    <?php the_content(); ?>
  </section>



<section class="col_3_block">
  <?php
  $args = array(
    'post_type' => 'product',
    'posts_per_page' => 3,
  );
  $tag = get_post_meta(get_the_ID(), 'related_posts_tag', true);
  if ( $tag ) {
    $my_title = 'Puede interesarte';
    $args['tag'] = $tag;
  } else {
    $my_title = 'Otros productos';
  }
  ?>
  <h4 class="block_title font_size_3" style="color: <?php echo $category_color; ?>"><?php _e($my_title, 'awake') ?></h4>
  <?php
  $related = new WP_Query( $args );
  while ( $related->have_posts() ) { $related->the_post();
    hedi_card();
  } wp_reset_query(); ?>
  <a  class="block_link font_size_7" href="<?php echo get_site_url() ?>/shop">VER MÁS PRODUCTOS</a>
</section>
