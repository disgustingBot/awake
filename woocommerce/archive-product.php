<?php get_header(); ?>



<section class="phil phil_2" data-cycle-container="filters">
  <!-- <select class="phil_select phil_input font_size_7" name="" id="">
    <option value="">Categorias</option>
  </select> -->
  <?php subterms_from_parent_term('programas', 'product_cat', 'filters'); ?>
  <?php // woocommerce_subcats_from_parentcat('programas'); ?>

  <div class="phil_search_container">
    <input class="phil_search phil_input" type="text" placeholder="Buscador" name="" value="">
    <svg class="select_box_icon search_icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M25.821 24.4551L19.2705 17.9046C19.1538 17.7878 19.0014 17.7269 18.8389 17.7269H18.3159C20.0576 15.843 21.124 13.3294 21.124 10.562C21.124 4.7275 16.3965 0 10.562 0C4.7275 0 0 4.7275 0 10.562C0 16.3965 4.7275 21.124 10.562 21.124C13.3294 21.124 15.843 20.0576 17.7269 18.321V18.8389C17.7269 19.0014 17.7929 19.1538 17.9046 19.2705L24.4551 25.821C24.6937 26.0597 25.0796 26.0597 25.3183 25.821L25.821 25.3183C26.0597 25.0796 26.0597 24.6937 25.821 24.4551ZM10.562 19.499C5.62121 19.499 1.62492 15.5028 1.62492 10.562C1.62492 5.62121 5.62121 1.62492 10.562 1.62492C15.5028 1.62492 19.499 5.62121 19.499 10.562C19.499 15.5028 15.5028 19.499 10.562 19.499Z" fill="currentColor"/>
    </svg>
  </div>

  <a class="cart_butt" href="<?php echo get_site_url() . '/cart'; ?>">
    <span class="cart_butt_number"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    <svg class="cart_butt_icon" viewBox="0 0 80 68" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g id="cart">
        <path d="M2.01898 4.05195H16.4797L23.0544 39.7749C23.2614 40.987 23.8654 42.1126 24.6764 42.9264C25.7808 44.0346 27.2994 44.658 28.9215 44.658H70.8024C72.6316 44.658 73.736 42.8225 73.8395 41.4026L79.9137 15.4286C79.9137 15.3247 80.0172 15.1169 80.0172 14.9264C80.0172 13.6104 79.1027 12.0866 76.9801 12.0866H31.5617C30.4573 12.0866 29.5427 13.0043 29.5427 14.1126C29.5427 15.2208 30.4573 16.1385 31.5617 16.1385H75.5651L69.8878 40.5022H28.9215C28.4211 40.5022 27.9034 40.2944 27.61 39.8961C27.2994 39.5844 27.1096 39.29 27.1096 38.8745L20.2243 1.62771C20.0345 0.709957 19.2235 0 18.2053 0H2.01898C0.914581 0 0 0.917749 0 2.02597C0 3.1342 0.914581 4.05195 2.01898 4.05195Z" fill="currentColor"/>
        <path d="M64.0207 50.7532C59.3615 50.7532 55.6342 54.6147 55.6342 59.3766C55.6342 64.1385 59.3788 68 64.0207 68C68.6626 68 72.4072 64.1385 72.4072 59.3766C72.4072 54.6147 68.6799 50.7532 64.0207 50.7532ZM64.0207 63.948C61.6911 63.948 59.6721 61.9221 59.6721 59.3766C59.6721 56.8312 61.6911 54.8052 64.0207 54.8052C66.3503 54.8052 68.3693 56.8312 68.3693 59.3766C68.3693 61.9221 66.4538 63.948 64.0207 63.948Z" fill="currentColor"/>
        <path d="M24.3831 59.3766C24.3831 64.1385 28.1277 68 32.7696 68C37.4115 68 41.1561 64.1385 41.1561 59.3766C41.1561 54.6147 37.308 50.7532 32.6661 50.7532C28.0241 50.7532 24.3831 54.5974 24.3831 59.3766ZM37.0146 59.3766C37.0146 61.9221 35.0992 63.948 32.6661 63.948C30.2329 63.948 28.3175 61.9221 28.3175 59.3766C28.3175 56.8312 30.3365 54.8052 32.6661 54.8052C34.9957 54.8052 37.0146 56.8312 37.0146 59.3766Z" fill="currentColor"/>
      </g>
    </svg>
  </a>
</section>


<section class="hedi_container" data-card="hedi_card" data-cycle="filters">
  <?php
  while(have_posts()){the_post();

    $product_category = get_the_terms( $post->ID, 'product_cat' )[0];
    $category_color = get_term_meta( $product_category->term_id, 'lt_meta_color', true );
    $args = array(
      'color' => $category_color
    );
    hedi_card($args);
  }
  ?>
  <?php echo ajax_paginator_2($wp_query); ?>
</section>



<?php get_footer(); ?>
