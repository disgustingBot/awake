


<?php if (get_post_meta(get_the_ID(), 'related_posts_tag', true)) { ?>
  <section class="col_4_block">
    <h4 class="block_title font_size_3" style="color: <?php echo $category_color; ?>">Puede interesarte</h4>
    <?php // echo get_post_meta(get_the_ID(), 'related_posts_tag', true); ?>
    <?php
    $posts = new WP_Query( array(
      'post_type' => 'post',
      'posts_per_page' => 4,
      'tag' => get_post_meta(get_the_ID(), 'related_posts_tag', true),
    )
  );
  ?>
  <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

    <?php sqare_card(); ?>

  <?php endwhile; wp_reset_query(); ?>

  <a  class="block_link font_size_7" href="<?php echo get_site_url() ?>/blog">VER MÁS NOTICIAS</a>
</section>

<?php } ?>
