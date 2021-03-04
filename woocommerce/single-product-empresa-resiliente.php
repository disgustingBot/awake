<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>

  <?php
  $product_category = get_the_terms( $post->ID, 'product_cat' )[0];
  $category_color = get_term_meta( $product_category->term_id, 'lt_meta_color', true );
  $color = get_post_meta($post->ID, 'color', true);
  ?>

  <section class="hero">
    <div class="hero_img" style="background:<?php echo $color; ?>"></div>
    <h1 class="hero_title alt font_size_1"><?php the_title(); ?></h1>
    <h2 class="hero_txt font_size_7"><?php echo get_post_meta($post->ID, 'C_descripcion_portada', true); ?></h2>
    <!-- <div class="redDot header_activator"></div> -->
    <svg class="hero_arrow_down" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
      <use xlink:href="#arrow_down"></use>
    </svg>
    <!-- <div class="redDot header_activator"></div> -->
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
    <h3 class="block_title font_size_3" style="color:<?php echo $color; ?>"><?php echo get_post_meta($post->ID, 'D_descripcion_titulo', true); ?></h3>
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
            <p class="pista_light_txt font_size_7"><?php echo get_post_meta(get_the_ID(), 'E_programa_'.$i.'_text', true); ?></p>
          </div>
          <?php
          $i=$i+1;
        } else { break; }
      } ?>
    </div>
  </section>


  <?php  } ?>

  <section class="showcase3">
      <h3 class="showcase_title font_size_4 simple_title" style="color:<?php echo $color; ?>">Herramientas que te servirán para...</h3>


      <div class="hosi" style="color:<?php echo $color; ?>">
          <?php include get_template_directory().'/assets/shield.svg'; ?>
          <p class="hosi_txt font_size_6">Reducir estrés y ansiedad.</p>
      </div>

      <div class="hosi" style="color:<?php echo $color; ?>">
          <?php include get_template_directory().'/assets/emotional_intelligence.svg'; ?>
          <p class="hosi_txt font_size_6">
              Aumentar la inteligencia emocional.
          </p>
      </div>

      <div class="hosi" style="color:<?php echo $color; ?>">
          <?php include get_template_directory().'/assets/sleepy_moon.svg'; ?>
          <p class="hosi_txt font_size_6">
              Mejorar la calidad del sueño
          </p>
      </div>

      <div class="hosi" style="color:<?php echo $color; ?>">
          <?php include get_template_directory().'/assets/desk.svg'; ?>
          <p class="hosi_txt font_size_6">
            Prevención accidentes, disminución de
            <br>
            las bajas y aumento de los presentimos
          </p>
      </div>

      <div class="hosi" style="color:<?php echo $color; ?>">
          <?php include get_template_directory().'/assets/listening_ear.svg'; ?>
          <p class="hosi_txt font_size_6">
            Mejorar la concentración,
            <br>
            la escucha activa y la creatividad
          </p>
      </div>
      <div class="hosi" style="color:<?php echo $color; ?>">
          <?php include get_template_directory().'/assets/happy_brain.svg'; ?>
          <p class="hosi_txt font_size_6">
            Aumentar la paz interior
            <br>
            y la ecuanimidad
          </p>
      </div>

      <div class="hosi" style="color:<?php echo $color; ?>">
          <?php include get_template_directory().'/assets/give_heart.svg'; ?>
          <p class="hosi_txt font_size_6">
            Aprender a vivir cómodamente
            <br>
            ante la adversidad y el cambio
          </p>
      </div>

      <div class="hosi" style="color:<?php echo $color; ?>">
          <?php include get_template_directory().'/assets/relationship.svg'; ?>
          <p class="hosi_txt font_size_6">
              Mejorar las relaciones
              <br>
              interpersonales.
          </p>
      </div>
      <div class="hosi" style="color:<?php echo $color; ?>">
          <?php include get_template_directory().'/assets/perceptive_brain.svg'; ?>
          <p class="hosi_txt font_size_6">
            Aumentar la resistencia
            <br>
            a la depresión
          </p>
      </div>
  </section>

  <banner class="banner_1" style=" background: <?php echo $color; ?>">
    <h4 class="banner_title font_size_2">
      <?php echo get_post_meta(get_the_ID(), 'F_banner_titulo', true); ?>
    </h4>
    <a href="<?php echo get_post_meta(get_the_ID(), 'F_banner_boton_1_link', true); ?>" class="btn white_btn font_size_7" style=" background: <?php echo $color; ?>">
      <?php echo get_post_meta(get_the_ID(), 'F_banner_boton_1_texto', true); ?>
    </a>
  </banner>


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
    <?php
    $related = new WP_Query( $args );
    while ( $related->have_posts() ) { $related->the_post();
      sqare_card();
    }; wp_reset_query();
    ?>

    <a  class="block_link font_size_7" href="<?php echo get_site_url() ?>/blog">VER MÁS NOTICIAS</a>
  </section>




<?php get_footer(); ?>
