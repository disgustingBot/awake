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
    </div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_3', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_4', true); ?></p>
    </div>
    <p class="block_title font_size_3"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_titulo_inferior', true); ?></p>
  </section>
  <section class="col_1_block">
    <h4 class="block_title font_size_3"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_titulo', true); ?></h4>
    <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_1', true); ?></p>
    <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_2', true); ?></p>
    <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_3', true); ?></p>
  </section>

  <section class="showcase2">
    <div class="gali">
      <img class="gali_img" src="https://picsum.photos/300" alt="">
      <img class="gali_img" src="https://picsum.photos/301" alt="">
      <img class="gali_img" src="https://picsum.photos/302" alt="">
      <img class="gali_img" src="https://picsum.photos/303" alt="">
    </div>
    <div class="pista">
      <h5 class="pista_title font_size_2">Programa</h5>

      <?php $i = 1;
      while(true){
        if(get_post_meta(get_the_ID(), 'C_programa_'.$i.'_text', true)){ ?>
          <div class="pista_group">
            <p class="pista_txt pista_time font_size_5"><?php echo get_post_meta(get_the_ID(), 'C_programa_'.$i.'_text', true); ?></p>
            <p class="pista_txt pista_text font_size_5"><?php echo get_post_meta(get_the_ID(), 'C_programa_'.$i.'_title', true); ?></p>
          </div>
          <?php
          $i=$i+1;
        } else { break; }
      } ?>
    </div>
  </section>
  <section class="separanda">
    <div class="separanda_item">
      <?php include get_template_directory().'/assets/distance_training.svg'; ?>
      <p class="separanda_text font_size_4">2 clases lectivas<br>durante 12 semanas</p>
    </div>
    <div class="separanda_item alt separanda_plus">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item">
      <?php include get_template_directory().'/assets/meditate.svg'; ?>
      <p class="separanda_text font_size_4">Meditaciones guiadas<br>(video – audio)</p>
    </div>
    <div class="separanda_item alt separanda_plus separanda_hidden_plus">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item">
      <?php include get_template_directory().'/assets/screen_people.svg'; ?>
      <p class="separanda_text font_size_4">40 horas lectivas por<br>videoconferencia en grupo</p>
    </div>
    <div class="separanda_item alt separanda_plus">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item">
      <?php include get_template_directory().'/assets/screen_tools.svg'; ?>
      <p class="separanda_text font_size_4">Reflexiones, escritos<br>y Bibliografía
</p>
    </div>
  </section>

<?php } ?>
<?php get_footer(); ?>
