<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>

    <?php

    $product_category = get_the_terms( $post->ID, 'product_cat' );
    foreach ($product_category as $category) {
      if ($category->slug != 'programas') {
        $category_color = get_term_meta( $category->term_id, 'lt_meta_color', true );
      }
    }

    ?>

  <section class="hero hero_opaque">
    <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
    <h1 class="hero_title alt font_size_1"><?php the_title(); ?></h1>
    <h2 class="hero_txt font_size_7"><?php echo the_content() ?></h2>
    <svg class="hero_arrow_down" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
      <use xlink:href="#arrow_down"></use>
    </svg>
    <div class="redDot header_activator"></div>
  </section>

  <section class="col_2_block">
    <div class="col_2_block_col">
      <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_1', true); ?></p>
      <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_2', true); ?></p>
    </div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_3', true); ?></p>
    </div>
  </section>

  <section class="showcase2">
    <div class="gali_2">

      <img class="gali_2_img" src="<?php echo get_img_url_by_slug(get_post_meta( get_the_ID(), 'B_imagen_galeria_1', true )); ?>" alt="">
      <img class="gali_2_img" src="<?php echo get_img_url_by_slug(get_post_meta( get_the_ID(), 'B_imagen_galeria_2', true )); ?>" alt="">
      <!-- <img class="gali_img" src="https://picsum.photos/302" alt=""> -->
    </div>
    <div class="pista">
      <h5 class="pista_title font_size_5">Sesiones</h5>

      <?php $i = 1;
      while(true){
        if(get_post_meta(get_the_ID(), 'B_programa_'.$i.'_text', true)){ ?>
          <div class="pista_group">
            <p class="pista_txt pista_text font_size_7"><strong><?php echo get_post_meta(get_the_ID(), 'B_programa_'.$i.'_day', true); ?></strong></p>
            <p class="pista_txt pista_text font_size_7"><strong><?php echo get_post_meta(get_the_ID(), 'B_programa_'.$i.'_time', true); ?></strong></p>
            <p class="pista_txt pista_time font_size_7"><?php echo get_post_meta(get_the_ID(), 'B_programa_'.$i.'_text', true); ?></p>
          </div>
          <?php
          $i=$i+1;
        } else { break; }
      } ?>
    </div>
  </section>

  <section class="separanda alt">
    <h4 class="separanda_title font_size_4" style="color: <?php echo $category_color; ?>">¿Qué incluyen las sesiones?</h4>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/meditate.svg'; ?>
      <p class="separanda_text font_size_6">
        Meditación
        <br>
        y Resiliencia
      </p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/stretch.svg'; ?>
      <p class="separanda_text font_size_6">
        Movimiento
        <br>
        y Yoga
      </p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/workshops.svg'; ?>
      <p class="separanda_text font_size_6">Talleres</p>
    </div>
  </section>



  <section class="copa">
    <aside class="copa_description" style="border-color: <?php echo $category_color; ?>">
      <div class="copa_description_row">
        <h4 class="copa_description_title" style="color: <?php echo $category_color; ?>">Modalidades:</h4>
        <h5 class="copa_description_subtitle">
        <?php echo get_post_meta(get_the_ID(), 'X_modalidad_1_titulo', true); ?>
        </h5>
        <p class="copa_description_text">
          <strong>¿Qué incluye?</strong>
        </p>
        <ul class="copa_description_list">
          <li class="copa_description_list_item"><?php echo get_post_meta(get_the_ID(), 'X_modalidad_1_item_1', true); ?></li>
          <li class="copa_description_list_item"><?php echo get_post_meta(get_the_ID(), 'X_modalidad_1_item_2', true); ?></li>
          <li class="copa_description_list_item"><?php echo get_post_meta(get_the_ID(), 'X_modalidad_1_item_3', true); ?></li>
        </ul>
        <p class="copa_description_price"><?php echo get_post_meta(get_the_ID(), 'X_modalidad_1_precio', true); ?></p>
      </div>
      <div class="copa_description_row">
        <h5 class="copa_description_subtitle"><?php echo get_post_meta(get_the_ID(), 'X_modalidad_2_titulo', true); ?></h5>
        <p class="copa_description_text">
          <strong>¿Qué incluye?</strong>
        </p>
        <ul class="copa_description_list">
          <li class="copa_description_list_item"><?php echo get_post_meta(get_the_ID(), 'X_modalidad_2_item_1', true); ?></li>
          <li class="copa_description_list_item"><?php echo get_post_meta(get_the_ID(), 'X_modalidad_2_item_2', true); ?></li>
        </ul>
        <p class="copa_description_price"><?php echo get_post_meta(get_the_ID(), 'X_modalidad_2_precio', true); ?></p>
      </div>
    </aside>

    <!-- <img class="copa_img" src="<?php echo get_img_url_by_slug(get_post_meta( get_the_ID(), 'D_imagen_modulo_compra', true )); ?>" alt=""> -->
    <?php include 'variable_product_interaction.php'; ?>

  </section>

<?php } ?>


      <section class="col_4_block">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 4,
        );
        $tag = get_post_meta(get_the_ID(), 'related_posts_tag', true);
        if ( $tag ) {
          $my_title = 'Puede interesarte';
          $args['tag'] = $tag;
        } else {
          $my_title = 'Últimas entradas';
        }
        ?>
        <h4 class="block_title font_size_3" style="color: <?php echo $category_color; ?>"><?php _e($my_title, 'awake') ?></h4>
        <?php // echo get_post_meta(get_the_ID(), 'related_posts_tag', true); ?>
        <?php
        $related = new WP_Query( $args );
      ?>
      <?php while ( $related->have_posts() ) : $related->the_post(); ?>

        <?php sqare_card(); ?>

      <?php endwhile; wp_reset_query(); ?>

      <a  class="block_link font_size_7" href="<?php echo get_site_url() ?>/blog">VER MÁS NOTICIAS</a>
    </section>




<?php get_footer(); ?>
