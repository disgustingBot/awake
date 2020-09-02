<?php

function sqare_card () { ?>


  <div class="sqare">
    <a class="sqare_amg" href="<?php the_permalink(); ?>">
      <img class="sqare_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
    </a>
    <h4 class="sqare_title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h4>

    <p class="sqare_author">by <?php the_author(); ?></p>

    <div class="sqare_deco"></div>

    <p class="sqare_date"><?php the_time( 'F Y' ); ?></p>

    <p class="sqare_exerpt"><?php echo excerpt(90); ?></p>

    <a class="sqare_link" href="<?php the_permalink(); ?>">Leer más</a>
  </div>

<?php } ?>