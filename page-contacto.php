<?php get_header(); ?>

<div class="container_1366">
  <section class="titled_form">
    <hgroup class="block_title_container">
      <h1 class="block_title"><?php echo get_post_meta(get_the_ID(), 'A_contacto_titulo', true)?></h1>
      <h2 class="block_title"><?php echo get_post_meta(get_the_ID(), 'A_contacto_subtitulo', true)?></h2>
    </hgroup>
    <form action="sendmail.php" class="main_form">
      <input class="main_form_input" type="text" placeholder="Nombre*">
      <input class="main_form_input" type="text" placeholder="Apellidos">
      <input class="main_form_input" type="email" placeholder="Email*">
      <input class="main_form_input" type="tel" placeholder="Telf">
      <textarea class="main_form_input main_textarea" name="" id="" placeholder="Escribenos*"></textarea>
      <input class="main_form_input" type="submit">
    </form>
  </section>
  <div class="gertha">
    <div class="gertha_caption gertha_bordered">
      <p class="gertha_grey_txt"><strong><?php echo get_post_meta(get_the_ID(), 'B_texto_contacto_titulo', true)?></strong></p>
      <p class="gertha_grey_txt"><?php echo get_post_meta(get_the_ID(), 'C_direccion_1', true)?></p>
      <p class="gertha_grey_txt"><?php echo get_post_meta(get_the_ID(), 'C_direccion_2', true)?></p>
      <p class="gertha_grey_txt"><?php echo get_post_meta(get_the_ID(), 'D_email', true)?></p>
      <p class="gertha_grey_txt"><?php echo get_post_meta(get_the_ID(), 'E_telefono', true)?></p>
      <br>
      <br>
      <p class="gertha_grey_txt"><strong><?php echo get_post_meta(get_the_ID(), 'F_indicaciones_titulo', true)?></strong></p>
      <p class="gertha_grey_txt"><?php echo get_post_meta(get_the_ID(), 'G_indicacion_1', true)?></p>
      <p class="gertha_grey_txt"><?php echo get_post_meta(get_the_ID(), 'G_indicacion_2', true)?></p>
      <p class="gertha_grey_txt"><?php echo get_post_meta(get_the_ID(), 'G_indicacion_3', true)?></p>
    </div>
    <div class="gertha_img greyscale_filter">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.1473436861675!2d-4.1070936851339!3d43.269288885189624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd491798c51c7703%3A0xfb8e4b4726c6f8b0!2sVivir%20Despierto%20-%20Es%20f%C3%A1cil...%20%C2%A1si%20sabes%20c%C3%B3mo*21!5e0!3m2!1ses!2ses!4v1607157067956!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
</div>


<?php get_footer(); ?>
