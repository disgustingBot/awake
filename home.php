<?php get_header(); ?>

<section class="phil">
  <p class="phil_caption">Descubre nuestros posts semanales sobre resiliencia humana, meditacion y mindfulness, adiccion y trauma, nutricion y un estilo de vida saludable.</p>
  <select class="phil_select" name="" id=""></select>
  <p class="phil_search">Buscador</p>
</section>


<section class="sqare_cont" id="ajax_archive">
  <?php while(have_posts()){the_post(); ?>
    <?php sqare_card(); ?>
  <?php } ?>
  <?php echo ajax_paginator(get_pagenum_link()); ?>
</section>



<?php get_footer(); ?>