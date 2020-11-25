<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>

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
    <p class="block_title font_size_3"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_titulo_inferior', true); ?></p>
  </section>

  <section class="showcase6">
    <h3 class="showcase_title font_size_3 simple_title">Dirigido a cualquier persona que quiera cuidar<br>de su mente, desarrollar habilidades, actitudes y<br>percepciones individuales para lidiar con:</h3>
    <div class="showcase6_container">
      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/destructive_guy.svg'; ?>
        <p class="hosi_txt font_size_6">
          CONDUCTAS<br>DESTRUCTIVAS
        </p>
      </div>
      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/hard_emotions.svg'; ?>
        <p class="hosi_txt font_size_6">
          EMOCIONES<br>DIFÍCILES
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/learn_forgiveness.svg'; ?>
        <p class="hosi_txt font_size_6">
          APRENDER<br>A PERDONAR
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/trauma.svg'; ?>
        <p class="hosi_txt font_size_6">
          TRAUMAS Y<br>ABUSO
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/negative_stress.svg'; ?>
        <p class="hosi_txt font_size_6">
          ESTRÉS<br>NEGATIVO
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/couple_problems.svg'; ?>
        <p class="hosi_txt font_size_6">
          DIFICULTADES<br>DE PAREJA
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/panic_attack.svg'; ?>
        <p class="hosi_txt font_size_6">
          ATAQUES<br>DE PÁNICO
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/adictions.svg'; ?>
        <p class="hosi_txt font_size_6">
          ADICCIONES<br>ALCOHOL, DROGAS
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/insomnio.svg'; ?>
        <p class="hosi_txt font_size_6">
          INSOMNIO
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/anxiety.svg'; ?>
        <p class="hosi_txt font_size_6">
          DEPRESIÓN<br>ANSIEDAD
        </p>
      </div>
    </div>
  </section>


<?php } ?>
<?php get_footer(); ?>
