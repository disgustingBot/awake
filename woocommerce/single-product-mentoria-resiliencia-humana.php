<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>

  <section class="hero hero_opaque">
    <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
    <h1 class="hero_title alt"><?php the_title(); ?></h1>
    <h2 class="hero_txt font_size_6"><?php echo the_content() ?></h2>
    <svg class="hero_arrow_down" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
      <use xlink:href="#arrow_down"></use>
    </svg>
    <div class="redDot header_activator"></div>
  </section>

  <section class="col_2_block">
    <div class="gertha_deco alt2"></div>

    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_1', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_2', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_3', true); ?></p>
    </div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_4', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_5', true); ?></p>
    </div>
    <p class="block_title font_size_3"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_titulo_inferior', true); ?></p>
  </section>


<?php } ?>
<?php get_footer(); ?>
