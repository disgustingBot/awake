<?php get_header(); ?>

<section>
  filters
  <div class="grid">
    <?php while(have_posts()){the_post(); ?>
      <?php the_title(); ?>
    <?php } ?>

  </div>
</section>



<?php get_footer(); ?>
