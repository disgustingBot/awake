<?php get_header(); ?>


<?php

// $term = get_term_by('slug', 'categorias', 'category');
// // $term = get_term(26, 'category');
// // var_dump($term);
//
//   $args = array(
//     'hierarchical' => 1,
//     'show_option_none' => '',
//     'hide_empty' => 0,
//     'parent' => $term->term_id,
//     'taxonomy' => 'category',
//   );
//   $subcats = get_categories($args);
//
//
//   var_dump($subcats);

 ?>
 <?php global $wp_query; ?>


 <!-- <section class="phil" data-cycle-container="test"> -->
 <section class="phil" data-cycle-container="filters">
  <p class="phil_caption font_size_6">Descubre nuestros posts semanales sobre resiliencia humana, meditacion y mindfulness, adiccion y trauma, nutricion y un estilo de vida saludable.</p>
  <?php subterms_from_parent_term('categorias', 'category', 'filters'); ?>
  <!-- <select class="phil_select phil_input font_size_7" name="" id="">
    <option value="">Categorias</option>
  </select> -->
  <?php
  $search_value = '';
  if (isset($_GET['filters'])) {
    $fil_pa_sea = json_decode( stripslashes($_GET['filters']), true );
    if(isset($fil_pa_sea['search'])){
      $search_value = $fil_pa_sea['search'];
    }
  }
  ?>
  <input class="phil_search phil_input font_size_7 Searcher" type="text" placeholder="Buscador" name="" value="<?php echo $search_value; ?>">
</section>


<section class="sqare_cont" data-card="sqare_card" data-cycle="filters">
  <?php while(have_posts()){the_post(); ?>
    <?php sqare_card(); ?>
  <?php } ?>
  <?php echo ajax_paginator_2($wp_query); ?>
</section>



<?php get_footer(); ?>
