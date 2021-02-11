<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>

  <?php
  $product_category = get_the_terms( $post->ID, 'product_cat' )[0];
  $category_color = get_term_meta( $product_category->term_id, 'lt_meta_color', true );
  ?>

  <section class="hero">
    <div class="hero_img" style="background:<?php echo get_post_meta($post->ID, 'A_color', true); ?>"></div>
    <h1 class="hero_title alt font_size_1"><?php the_title(); ?></h1>
    <h2 class="hero_txt font_size_7"><?php echo get_post_meta($post->ID, 'C_descripcion_portada', true); ?></h2>
    <div class="redDot header_activator"></div>
    <svg class="hero_arrow_down" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
      <use xlink:href="#arrow_down"></use>
    </svg>
    <div class="redDot header_activator"></div>
  </section>


  <section class="col_2_block">
    <div class="gertha_deco alt2"></div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_6"><?php echo get_post_meta($post->ID, 'D_descripcion_texto_1', true); ?></p>
      <p class="block_txt font_size_6"><?php echo get_post_meta($post->ID, 'D_descripcion_texto_2', true); ?></p>
      <p class="block_txt font_size_6"><?php echo get_post_meta($post->ID, 'D_descripcion_texto_3', true); ?></p>
    </div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_6"><?php echo get_post_meta($post->ID, 'D_descripcion_texto_4', true); ?></p>
      <p class="block_txt font_size_6"><?php echo get_post_meta($post->ID, 'D_descripcion_texto_5', true); ?></p>
      <p class="block_txt font_size_6"><?php echo get_post_meta($post->ID, 'D_descripcion_texto_6', true); ?></p>
    </div>
    <h3 class="block_title font_size_3" style="color:<?php echo get_post_meta($post->ID, 'A_color', true); ?>"><?php echo get_post_meta($post->ID, 'D_descripcion_titulo', true); ?></h3>
  </section>

  <section class="showcase2">
    <div class="galu">
      <?php $i = 1;
      while(get_post_meta(get_the_ID(), 'E_imagen_programa_'.$i, true)) {
      ?>
      <img class="galu_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'E_imagen_programa_'.$i, true)); ?>" alt="">
      <?php
      $i +=1;
      } ?>
    </div>
    <div class="pista">
      <h5 class="pista_title font_size_5"><?php echo get_post_meta($post->ID, 'E_programa_titulo', true); ?></h5>

      <?php $i = 1;
      while(true){
        if(get_post_meta(get_the_ID(), 'E_programa_'.$i.'_text', true)){ ?>
          <div class="pista_group">
            <p class="pista_txt pista_time font_size_7"><?php echo get_post_meta(get_the_ID(), 'E_programa_'.$i.'_time', true); ?></p>
            <p class="pista_txt pista_text font_size_7"><strong><?php echo get_post_meta(get_the_ID(), 'E_programa_'.$i.'_text', true); ?></strong></p>
          </div>
          <?php
          $i=$i+1;
        } else { break; }
      } ?>
      <div class="pista_deco"></div>
      <p class="pista_caption">El retiro consta de unas 20 horas formativas, dejando el sábado por la tarde libre. (No se sirve cena la noche del sábado).
      </p>
    </div>
  </section>

    <section class="separanda_backgrounded">
      <div class="separanda separanda_backgrounded">
        <h4 class="separanda_title font_size_4" style=" color: <?php echo get_post_meta($post->ID, 'A_color', true); ?>">¿Que incluye el programa?</h4>
        <div class="separanda_item" style=" color: <?php echo get_post_meta($post->ID, 'A_color', true); ?>">
          <?php include get_template_directory().'/assets/strategy_map.svg'; ?>
          <p class="separanda_text font_size_5" style="color: #706862">
            Diseño
            <br>
            de la política
        </p>
        </div>
        <div class="separanda_item alt separanda_plus" style=" color: <?php echo get_post_meta($post->ID, 'A_color', true); ?>">
          <?php include get_template_directory().'/assets/plus.svg'; ?>
        </div>
        <div class="separanda_item" style=" color: <?php echo get_post_meta($post->ID, 'A_color', true); ?>">
          <?php include get_template_directory().'/assets/classroom.svg'; ?>
          <p class="separanda_text font_size_5" style="color: #706862">
            1 sesión
            <br>
            de 6 horas
          </p>
        </div>
        <div class="separanda_item alt separanda_plus separanda_hidden_plus" style=" color: <?php echo $category_color; ?>">
          <?php include get_template_directory().'/assets/plus.svg'; ?>
        </div>
        <div class="separanda_item" style=" color: <?php echo get_post_meta($post->ID, 'A_color', true); ?>">
          <?php include get_template_directory().'/assets/calendar.svg'; ?>
          <p class="separanda_text font_size_5" style="color: #706862">
            Sesiones
            <br>
            de refuerzo
          </p>
        </div>
        <div class="separanda_item alt separanda_plus" style=" color: <?php echo get_post_meta($post->ID, 'A_color', true); ?>">
          <?php include get_template_directory().'/assets/plus.svg'; ?>
        </div>
        <div class="separanda_item" style=" color:<?php echo get_post_meta($post->ID, 'A_color', true); ?>">
          <?php include get_template_directory().'/assets/weekly_news.svg'; ?>
          <p class="separanda_text font_size_5" style="color: #706862">Boletines<br>semanales</p>
        </div>
      </div>
    </section>

    <banner class="banner_1" style=" background: <?php echo get_post_meta($post->ID, 'A_color', true); ?>">
      <h4 class="banner_title font_size_2">
        <?php echo get_post_meta(get_the_ID(), 'E_banner_titulo', true); ?>
      </h4>
      <div class="double_cta_banner">
        <a href="<?php echo get_post_meta(get_the_ID(), 'E_banner_boton_1_link', true); ?>" class="btn white_btn font_size_7" style=" background: <?php echo get_post_meta($post->ID, 'A_color', true); ?>">
          <?php echo get_post_meta(get_the_ID(), 'E_banner_boton_1_texto', true); ?>
        </a>
        <a href="<?php echo get_post_meta(get_the_ID(), 'E_banner_boton_2_link', true); ?>" class="btn white_btn font_size_7" style=" background: <?php echo get_post_meta($post->ID, 'A_color', true); ?>">
          <?php echo get_post_meta(get_the_ID(), 'E_banner_boton_2_texto', true); ?>
        </a>
      </div>
    </banner>


  <?php  } ?>





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
          <h4 class="block_title font_size_4" style="color: <?php echo $category_color; ?>">Puede interesarte</h4>
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
