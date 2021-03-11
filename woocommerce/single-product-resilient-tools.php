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
    <div class="gertha_deco alt2"></div>

    <div class="col_2_block_col">
      <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_1', true); ?></p>
      <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_2', true); ?></p>
    </div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_3', true); ?></p>
      <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_4', true); ?></p>
    </div>
    <p class="block_title font_size_4" style="color: <?php echo $category_color; ?>"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_titulo_inferior', true); ?></p>
  </section>

  <section class="col_1_block">
    <h4 class="block_title font_size_4" style="color: <?php echo $category_color; ?>"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_titulo', true); ?></h4>
    <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_1', true); ?></p>
    <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_2', true); ?></p>
    <p class="block_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_3', true); ?></p>
  </section>

  <section class="showcase2">
    <div class="gale">
      <img class="gale_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'C_imagen_galeria_1', true)); ?>" alt="">
      <img class="gale_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'C_imagen_galeria_2', true)); ?>" alt="">
      <img class="gale_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'C_imagen_galeria_3', true)); ?>" alt="">
    </div>
    <div class="pista">
      <h5 class="pista_title font_size_5">Programa</h5>

      <?php $i = 1;
      while(true){
        if(get_post_meta(get_the_ID(), 'C_programa_'.$i.'_text', true)){ ?>
          <div class="pista_group">
            <p class="pista_txt pista_time font_size_7"><?php echo get_post_meta(get_the_ID(), 'C_programa_'.$i.'_text', true); ?></p>
            <p class="pista_txt pista_text font_size_7"><strong><?php echo get_post_meta(get_the_ID(), 'C_programa_'.$i.'_title', true); ?></strong></p>
          </div>
          <?php
          $i=$i+1;
        } else { break; }
      } ?>
    </div>
  </section>
  <section class="separanda">
    <h4 class="separanda_title font_size_4" style="color: <?php echo $category_color; ?>">¿Que incluye el programa?</h4>
    <div class="separanda_item" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/distance_training.svg'; ?>
      <p class="separanda_text font_size_6">2 clases lectivas<br>durante 12 semanas</p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/meditate.svg'; ?>
      <p class="separanda_text font_size_6">Meditaciones guiadas<br>(video – audio)</p>
    </div>
    <div class="separanda_item alt separanda_plus separanda_hidden_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/screen_people.svg'; ?>
      <p class="separanda_text font_size_6">40 horas lectivas por<br>videoconferencia en grupo</p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/screen_tools.svg'; ?>
      <p class="separanda_text font_size_6">Reflexiones, escritos<br>y Bibliografía
      </p>
    </div>
  </section>


  <section class="copa">
    <img class="copa_img" src="<?php echo get_img_url_by_slug(get_post_meta($post->ID, 'D_imagen_modulo_compra', true)); ?>" alt="">

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
