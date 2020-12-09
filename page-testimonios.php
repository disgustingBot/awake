<?php get_header(); ?>

<section class="hero hero_opaque">
  <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
  <h1 class="hero_title"><?php echo the_content() ?></h1>
  <svg class="hero_arrow_down" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
    <use xlink:href="#arrow_down"></use>
  </svg>
  <div class="redDot header_activator"></div>
</section>

<section class="col_1_block alt">
  <h4 class="block_title font_size_2"><?php echo get_post_meta(get_the_ID(), 'A_titulo', true); ?></h4>
  <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_texto_1', true); ?></p>
  <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_texto_2', true); ?></p>
  <img class="col_1_img" src="<?php echo get_post_meta(get_the_ID(), 'B_firma_img', true); ?>" alt="Firmas de Geoffrey y Rhea" >
</section>

<section class="tesim_container backgrounded Carousel">

  <div class="tesim_cont Element row2col1">
    <?php
    $i = 0;
    $args = array(
      'post_type'=>'testimonial',
    );
    $testimonials=new WP_Query($args);
    while($testimonials->have_posts()){$testimonials->the_post();?>
      <?php if ( !($i & 1) AND $i ) { ?>
      </div>
      <div class="tesim_cont Element row2col1">
      <?php } ?>
      <quote class="tesim">
        <svg class="tesim_icon" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 38 34">
          <use xlink:href="#quote_icon"></use>
        </svg>
        <div class="tesim_txt font_size_5"><?php the_content(); ?></div>
        <p class="tesim_author font_size_5"><?php the_title(); ?></p>
      </quote>
      <?php $i=$i+1; } wp_reset_query(); ?>
    </div>


    <button class="prenex prenex_prev row2col1 dark" id="prevButton"></button>
    <button class="prenex prenex_next row2col1 dark" id="nextButton"></button>
  </section>

  <section class="col_testimonials_container">
    <div class="col_testimonial">
      <p class="col_testimonial_title font_size_5">ISABEL GUERRA</p>
      <p class="col_testimonial_content font_size_5">
        Hola amigos,
        <br>
        <br>
        Hoy estaba mirando vuestra página para recomendarla a un amigo que quiere de una vez dejar de fumar. He recordado el mes de Diciembre del 2000 cuando en una sesión en un hotel de Barcelona dejé de fumar con vosotros. Hace ya 18 años!!!! Nunca mas he vuelto a fumar, nunca mas he tenido ganas de hacerlo. Querría volver a daros las gracias por eso. Fue el dinero mejor invertido de mi vida. Cuando alguien me pregunta siempre les digo lo mismo….A mi me funcionó. Porque no lo pruebas…?? Repito innitas gracias!!!
      </p>
    </div>
    <div class="col_testimonial">
      <p class="col_testimonial_title font_size_5">BEATRIZ HERNÁNDEZ</p>
      <p class="col_testimonial_content font_size_5">Hola Rhea, ¿cómo estás? Hoy cumplo 1 mes sin fumar y te estoy tan + agradecida por haberme impulsado a tomar mi “DECISIÓN 5 ESTRELLAS”….. Eres una persona muy importante para mi y no solo por haberme ayudado a dejar de fumar, pasé unos días fantásticos en familia. Gracias Geoffrey por hacerme ver la vida con otra perspectiva, con inteligencia, curiosidad abierta y sentido del humor. Os llevo siempre en mis pensamientos y espero veros prontito. Un besito enorme.</p>
    </div>
    <div class="col_testimonial noborder">
      <p class="col_testimonial_title font_size_5">JAVIER</p>
      <p class="col_testimonial_content font_size_5">Yo tengo una duda, hace tiempo que quiero dejar de fumar entre otras cosas por salud ya que sufri unas trombosis hace un año sin contar el gasto economico (tengo 3 hijos y mi mujer en paro) pero no lo consigo todo lo que me rodea me produce extres, mi mujer es fumadora y no se ha planteado quitarse ni estando embarazada ni en la lactancia cosa que me hubiera servido de gran apoyo. Algun consejo?? No quiero sustitutivos ni pastillas tipo champi ni nada pero es muy dificil y eso que he visto el video varias veces.</p>
    </div>
    <div class="pagination_2">
      <p class="pagination_numbers">
        <span class="pagination_2_deco font_size_5">─</span>
        <span class="pagination_2_number font_size_5">1</span>
        <span class="pagination_2_deco font_size_5">·</span>
        <span class="pagination_2_number font_size_5">2</span>
        <span class="pagination_2_deco font_size_5">·</span>
        <span class="pagination_2_number font_size_5">3</span>
        <span class="pagination_2_deco font_size_5">·</span>
        <span class="pagination_2_number font_size_5">4</span>
        <span class="pagination_2_deco font_size_5">·</span>
        <span class="pagination_2_number font_size_5">5</span>
        <span class="pagination_2_deco font_size_5">></span>
      </p>
    </div>
  </section>
  <section class="comment_form">
    <input class="main_form_input" type="text" placeholder="Nombre">
    <input class="main_form_input" type="email" placeholder="E-mail">
    <textarea class="main_form_input main_textarea" placeholder="Escríbenos tu testimonio"></textarea>
    <div class="form_acceptance_container font_size_8">
      <input id="terms_acceptance" type="checkbox">
      <label for="terms_acceptance">He leído y acepto la política de privacidad.</label>
    </div>
    <input class="btn main_form_btn" type="submit" value="Enviar testimonio">
  </section>

  <section class="full_page_media_container">
    <video class="full_page_media" controls="true" alt="Video explicativo">
      <source type="video/mp4" src="<?php echo get_post_meta($post->ID, 'E_bloque_1_video', true); ?>">
    </video>
  </section>


<?php get_footer(); ?>
