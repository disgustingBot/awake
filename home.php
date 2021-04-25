<?php

get_header();
global $wp_query;

?>


 <section class="phil" data-cycle-container="filters">
  <p class="phil_caption font_size_7">Descubre nuestros posts semanales sobre resiliencia humana, meditacion y mindfulness, adiccion y trauma, nutricion y un estilo de vida saludable.</p>
  <?php
  subterms_from_parent_term('categorias', 'category', 'filters');

  $search_value = '';
  if (isset($_GET['filters'])) {
    $fil_pa_sea = json_decode( stripslashes($_GET['filters']), true );
    if(isset($fil_pa_sea['search'])){
      $search_value = $fil_pa_sea['search'];
    }
  }
  ?>
  <div class="phil_search_container">
      <input class="phil_search phil_input font_size_7 Searcher" type="text" placeholder="Buscador" name="" value="<?php echo $search_value; ?>">
      <svg class="select_box_icon search_icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M25.821 24.4551L19.2705 17.9046C19.1538 17.7878 19.0014 17.7269 18.8389 17.7269H18.3159C20.0576 15.843 21.124 13.3294 21.124 10.562C21.124 4.7275 16.3965 0 10.562 0C4.7275 0 0 4.7275 0 10.562C0 16.3965 4.7275 21.124 10.562 21.124C13.3294 21.124 15.843 20.0576 17.7269 18.321V18.8389C17.7269 19.0014 17.7929 19.1538 17.9046 19.2705L24.4551 25.821C24.6937 26.0597 25.0796 26.0597 25.3183 25.821L25.821 25.3183C26.0597 25.0796 26.0597 24.6937 25.821 24.4551ZM10.562 19.499C5.62121 19.499 1.62492 15.5028 1.62492 10.562C1.62492 5.62121 5.62121 1.62492 10.562 1.62492C15.5028 1.62492 19.499 5.62121 19.499 10.562C19.499 15.5028 15.5028 19.499 10.562 19.499Z" fill="currentColor"/>
      </svg>
  </div>

</section>


<section class="sqare_cont" data-card="sqare_card" data-cycle="filters">
  <?php while(have_posts()){the_post(); ?>
    <?php sqare_card(); ?>
  <?php } ?>
  <?php echo ajax_paginator_2($wp_query); ?>
</section>



<?php get_footer(); ?>
