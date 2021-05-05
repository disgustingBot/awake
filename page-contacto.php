
  <?php get_header(); ?>

<div class="container_1366">
  <section class="titled_form">
    <hgroup class="block_title_container">
      <h1 class="block_title font_size_2 brownblack_txt"><?php echo get_post_meta(get_the_ID(), 'A_contacto_titulo', true)?></h1>
      <h2 class="block_title font_size_2 brownblack_txt"><?php echo get_post_meta(get_the_ID(), 'A_contacto_subtitulo', true)?></h2>
    </hgroup>
    <form class="main_form" action="<?= esc_url( admin_url('admin-post.php') ); ?>" method="POST" id="cmForm">
      <input type="hidden" name="action"   value="tp_form_handler">
      <input type="hidden" name="link"     value="<?= home_url( $wp->request ); ?>">
      <input type="text"   name="a00"      value="" placeholder="jeje" hidden>

      <input class="main_form_input font_size_8" type="text" placeholder="Nombre*" required>
      <input class="main_form_input font_size_8" type="text" placeholder="Apellidos">
      <input class="main_form_input font_size_8" type="email" placeholder="Email*" required>
      <input class="main_form_input font_size_8" type="tel" placeholder="Telf">
      <input class="main_form_input col_2_form_input font_size_8" type="text" placeholder="Nombre Empresa*" required>
      <!-- <select class="main_form_input font_size_8" name="" id="" required> -->
      <?php
      $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1,
        'tax_query' => array(
          array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms'=> array('programas', 'empresas'),
          ),
        ),
      );
      $programas = new WP_Query($args);
      $options = array();

      if ($programas -> have_posts()) {
        while ($programas -> have_posts()) {$programas -> the_post();
          global $post;
          // $options[$post->post_name] = $post->post_title;
          $options[] = array(
            'slug' => $post->post_name,
            'name' => $post->post_title,
            'value' => $post->post_title,
          );
        }  wp_reset_query();
      }
      // var_dump($options);
      $config = array(
        'label' => 'Que programa te interesa?',
        'class' => 'selectBoxProgramas',
        'empty' => 'Vaciar',
      );

      selectBox($config, $options);
      // selectBox('Que programa te interesa?', $options, 'Vaciar', 'Programas');
      ?>
      <!-- </select> -->
      <textarea class="main_form_input font_size_8 main_form_textarea" name="" id="" placeholder="Escríbenos*"></textarea>
      <input class="token" type="hidden" name="token" value="">
      <!-- <input class="main_form_btn btn" type="submit" value="Enviar"> -->
      <div class="btn main_form_btn" onclick="send_contact_mail()" value="Submit">Enviar</div>
    </form>
  </section>
  <div class="col_2_media">
    <div class="col_2_media_caption">
      <p class="col_2_media_txt font_size_7"><strong><?php echo get_post_meta(get_the_ID(), 'B_texto_contacto_titulo', true)?></strong></p>
      <p class="col_2_media_txt font_size_7"><?php echo get_post_meta(get_the_ID(), 'C_direccion_1', true)?></p>
      <p class="col_2_media_txt font_size_7"><?php echo get_post_meta(get_the_ID(), 'C_direccion_2', true)?></p>
      <p class="col_2_media_txt font_size_7"><?php echo get_post_meta(get_the_ID(), 'D_email', true)?></p>
      <p class="col_2_media_txt font_size_7"><?php echo get_post_meta(get_the_ID(), 'E_telefono', true)?></p>
      <br>
      <p class="col_2_media_txt font_size_7"><strong><?php echo get_post_meta(get_the_ID(), 'F_indicaciones_titulo', true)?></strong></p>
      <p class="col_2_media_txt font_size_7"><?php echo get_post_meta(get_the_ID(), 'G_indicacion_1', true)?></p>
      <p class="col_2_media_txt font_size_7"><?php echo get_post_meta(get_the_ID(), 'G_indicacion_2', true)?></p>
      <p class="col_2_media_txt font_size_7"><?php echo get_post_meta(get_the_ID(), 'G_indicacion_3', true)?></p>
    </div>
    <div class="col_2_media_media greyscale_filter">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7755.661921295585!2d-4.109051477591369!3d43.270473408479674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDE2JzA5LjUiTiA0wrAwNicxOC4xIlc!5e0!3m2!1ses!2ses!4v1607171086162!5m2!1ses!2ses" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
</div>


<?php get_footer(); ?>
