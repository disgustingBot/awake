<?php
get_header();

while(have_posts()){the_post();
  global $woocommerce, $product, $post;

  $product_category = get_the_terms( $post->ID, 'product_cat' );
  $is_programa = false;
  foreach ($product_category as $category) {
    if ($category->slug != 'programas') {
      $category_color = get_term_meta( $category->term_id, 'lt_meta_color', true );
    } else {
      $is_programa = true;
    }
  }
  
  if ($is_programa) {
    include get_template_directory() . '/woocommerce/single-programa.php';
  } else {
    include get_template_directory() . '/woocommerce/single-producto.php';
  }
}
get_footer();
