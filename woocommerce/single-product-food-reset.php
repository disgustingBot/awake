<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>

  <?php
  $product_category = get_the_terms( $post->ID, 'product_cat' )[0];
  $category_color = get_term_meta( $product_category->term_id, 'lt_meta_color', true );
  ?>

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
    <p class="block_title font_size_3" style="color: <?php echo $category_color; ?>"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_titulo_inferior', true); ?></p>
  </section>

  <section class="showcase6">
    <h3 class="showcase_title font_size_3 simple_title" style=" color: <?php echo $category_color; ?> ">Ofrecemos</h3>
    <div class="showcase6_container">
      <div class="hosi" style=" color: white; background: <?php echo $category_color; ?> ">
        <?php include get_template_directory().'/assets/satisfaction.svg'; ?>
        <p class="hosi_txt font_size_6" style="color:white">
          OBJETIVOS<br>
          reales y<br>
          personalizados
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>; background: #f4f4f4;">
        <?php include get_template_directory().'/assets/redirect_life.svg'; ?>
        <p class="hosi_txt font_size_6" style=" color: <?php echo $category_color; ?> ">
          TRAZAR UN PLAN<br>
          para llegar de<br>
          manera eciente
        </p>
      </div>

      <div class="hosi" style=" background: <?php echo $category_color; ?>; color: white;">
        <?php include get_template_directory().'/assets/eye.svg'; ?>
        <p class="hosi_txt font_size_6" style="color:white">
          SEGUIMIENTO<br>
          y control<br>
          cada semana
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>; background: #f4f4f4">
        <?php include get_template_directory().'/assets/stats_up.svg'; ?>
        <p class="hosi_txt font_size_6" style=" color: <?php echo $category_color; ?>!important ">
          PASO A PASO<br>
          de forma<br>
          progresiva
        </p>
      </div>

      <div class="hosi wide_hosi" style=" background: <?php echo $category_color; ?>;color: white; ">
        <?php include get_template_directory().'/assets/food.svg'; ?>
        <p class="hosi_txt font_size_6" style="color: white;">
          CREATIVDAD<br>
          disfrutando<br>
          del proceso
        </p>
      </div>

    </div>
  </section>

  <section class="showcase2">
    <div class="galo">
      <img class="galo_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'B_imagen_galeria_1', true)); ?>" alt="">
      <img class="galo_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'B_imagen_galeria_2', true)); ?>" alt="">
      <img class="galo_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'B_imagen_galeria_3', true)); ?>" alt="">
      <img class="galo_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'B_imagen_galeria_4', true)); ?>" alt="">
      <img class="galo_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'B_imagen_galeria_5', true)); ?>" alt="">
    </div>
    <div class="pista">
      <h5 class="pista_title alt">¿Qué aprenderás?</h5>

      <?php $i = 1;
      while(true){
        if(get_post_meta(get_the_ID(), 'B_programa_texto_'.$i, true)){ ?>
          <div class="pista_group">
            <p class="pista_txt alt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_programa_texto_'.$i, true); ?></p>
          </div>
          <?php
          $i=$i+1;
        } else { break; }
      } ?>
    </div>
  </section>

  <section class="col_2_block">
    <h3 class="block_title font_size_3" style="color: <?php echo $category_color; ?>"><?php echo get_post_meta(get_the_ID(), 'C_segunda_descripcion_titulo', true); ?></h3>
    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'C_segunda_descripcion_texto_1', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'C_segunda_descripcion_texto_2', true); ?></p>
    </div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'C_segunda_descripcion_texto_3', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'C_segunda_descripcion_texto_4', true); ?></p>
    </div>
  </section>

  <section class="separanda alt separanda_backgrounded">
    <h4 class="separanda_title font_size_3" style="color: <?php echo $category_color; ?>">¿Qué incluye el programa?</h4>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/messages.svg'; ?>
      <p class="separanda_text font_size_4" style="color: #706862">
        4 consultas<br>
        individualizadas
      </p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/video_info.svg'; ?>
      <p class="separanda_text font_size_4" style="color: #706862">
        Material<br>
        didáctico
      </p>
    </div>
    <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item alt" style="color: <?php echo $category_color; ?>">
      <?php include get_template_directory().'/assets/weekly_news.svg'; ?>
      <p class="separanda_text font_size_4" style="color: #706862">
        Acompañamiento<br>
        (12 semanas)
      </p>
    </div>
  </section>
  <section class="copa">

    <img class="copa_img" src="<?php echo get_img_url_by_slug(get_post_meta( $post->ID, 'D_imagen_modulo_compra', true )); ?>" alt="">
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
