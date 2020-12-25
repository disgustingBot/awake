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
    <h3 class="showcase_title font_size_3 simple_title" style="color: <?php echo $category_color; ?>">Dirigido a cualquier persona que quiera cuidar<br>de su mente, desarrollar habilidades, actitudes y<br>percepciones individuales para lidiar con:</h3>
    <div class="showcase6_container">
      <div class="hosi" style="color: white; background: #C0CED3;">
        <?php include get_template_directory().'/assets/destructive_guy.svg'; ?>
        <p class="hosi_txt font_size_6">
          CONDUCTAS<br>DESTRUCTIVAS
        </p>
      </div>
      <div class="hosi" style="color: <?php echo $category_color; ?>; background: #F3F3F3;">
        <?php include get_template_directory().'/assets/hard_emotions.svg'; ?>
        <p class="hosi_txt font_size_6">
          EMOCIONES<br>DIFÍCILES
        </p>
      </div>

      <div class="hosi" style="color: white; background: #C0CED3;">
        <?php include get_template_directory().'/assets/learn_forgiveness.svg'; ?>
        <p class="hosi_txt font_size_6">
          APRENDER<br>A PERDONAR
        </p>
      </div>

      <div class="hosi" style="color: <?php echo $category_color; ?>; background: #F3F3F3;">
        <?php include get_template_directory().'/assets/trauma.svg'; ?>
        <p class="hosi_txt font_size_6">
          TRAUMAS Y<br>ABUSO
        </p>
      </div>

      <div class="hosi" style="color: white; background: #C0CED3;">
        <?php include get_template_directory().'/assets/negative_stress.svg'; ?>
        <p class="hosi_txt font_size_6">
          ESTRÉS<br>NEGATIVO
        </p>
      </div>

      <div class="hosi" style="color: <?php echo $category_color; ?>; background: #F3F3F3;">
        <?php include get_template_directory().'/assets/couple_problems.svg'; ?>
        <p class="hosi_txt font_size_6">
          DIFICULTADES<br>DE PAREJA
        </p>
      </div>

      <div class="hosi" style="color: white; background: #C0CED3;">
        <?php include get_template_directory().'/assets/panic_attack.svg'; ?>
        <p class="hosi_txt font_size_6">
          ATAQUES<br>DE PÁNICO
        </p>
      </div>

      <div class="hosi" style="color: <?php echo $category_color; ?>; background: #F3F3F3;">
        <?php include get_template_directory().'/assets/adictions.svg'; ?>
        <p class="hosi_txt font_size_6">
          ADICCIONES<br>ALCOHOL, DROGAS
        </p>
      </div>

      <div class="hosi" style="color: white; background: #C0CED3;">
        <?php include get_template_directory().'/assets/insomnio.svg'; ?>
        <p class="hosi_txt font_size_6">
          INSOMNIO
        </p>
      </div>

      <div class="hosi" style="color: <?php echo $category_color; ?>; background: #F3F3F3;">
        <?php include get_template_directory().'/assets/anxiety.svg'; ?>
        <p class="hosi_txt font_size_6">
          DEPRESIÓN<br>ANSIEDAD
        </p>
      </div>
    </div>
  </section>

  <section class="col_2_block">
    <h3 class="block_title font_size_3" style="color: <?php echo $category_color; ?>"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_titulo', true); ?></h3>
    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_1', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_2', true); ?></p>
    </div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_3', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_4', true); ?></p>
    </div>
  </section>

  <section class="separanda_backgrounded">
    <div class="separanda separanda_backgrounded">
      <h4 class="separanda_title font_size_3" style="color: <?php echo $category_color; ?>">¿Que incluye el programa?</h4>
      <div class="separanda_item" style="color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/distance_training.svg'; ?>
        <p class="separanda_text font_size_4">5 sesiones por<br>video-llamada</p>
      </div>
      <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/plus.svg'; ?>
      </div>
      <div class="separanda_item" style="color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/meditate.svg'; ?>
        <p class="separanda_text font_size_4">Material<br>didáctico</p>
      </div>
      <div class="separanda_item alt separanda_plus separanda_hidden_plus" style="color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/plus.svg'; ?>
      </div>
      <div class="separanda_item" style="color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/screen_people.svg'; ?>
        <p class="separanda_text font_size_4">Video<br>y audio</p>
      </div>
      <div class="separanda_item alt separanda_plus" style="color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/plus.svg'; ?>
      </div>
      <div class="separanda_item" style="color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/screen_tools.svg'; ?>
        <p class="separanda_text font_size_4">Bibliografía
        </p>
      </div>
    </div>
  </section>



  <section class="copa">
    <img class="copa_img" src="<?php echo get_post_meta(get_the_ID(), 'C_imagen_modulo_compra', true); ?>" alt="">
    <?php include 'variable_product_interaction.php'; ?>

  </section>

<?php } ?>
<?php include 'related_posts.php' ?>



<?php get_footer(); ?>
