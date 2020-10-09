<?php get_header(); ?>


<?php while(have_posts()){the_post(); ?>

    <section class="hero">
        <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <div class="redDot header_activator"></div>
        <svg class="mega_arrow_down rowcol1" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
          <use xlink:href="#arrow_down"></use>
        </svg>
    </section>

    <?php
    $i=1;
    while (get_post_meta($post->ID, $i . '_image', true) OR get_post_meta($post->ID, $i . '_text', true) OR get_post_meta($post->ID, $i . '_subtitle', true)) {
      $img_alt = false;
      if(!get_post_meta($post->ID, $i . '_text', true) AND !get_post_meta($post->ID, $i . '_subtitle', true)){$img_alt = ' tory_img_lonely';}?>
      <section class="tory tory_<?php echo $i; ?>">
        <?php if($i == 1){ ?>
          <h1 class="tory_title"><?php the_title(); ?></h1>
          <h3 class="tory_highlight" style="color:<?php echo get_post_meta($post->ID, 'color', true); ?>"><?php echo get_post_meta($post->ID, $i . '_highlight', true); ?></h3>
          <p class="tory_root"><?php echo get_post_meta($post->ID, $i . '_root', true); ?></p>
        <?php } ?>
        <img class="tory_img tory_img_<?php echo $i . $img_alt; ?>" src="<?php echo get_post_meta($post->ID, $i . '_image', true); ?>" alt="">
        <?php if(!$img_alt) { ?>
          <h5 class="tory_subtitle tory_subtitle_<?php echo $i; ?>"><?php echo get_post_meta($post->ID, $i . '_subtitle', true); ?></h5>
          <p class="tory_text tory_text_<?php echo $i; ?>"><?php echo get_post_meta($post->ID, $i . '_text', true); ?></p>
        <?php } ?>
      </section>
    <?php $i=$i+1;} ?>

    <section class="main">
        <?php the_content(); ?>
    </section>
<?php } ?>


<?php get_footer(); ?>
