<?php get_header(); ?>


<section class="hero hero_opaque">
  <div class="hero_img" style="background:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>"></div>
  <h1 class="hero_title alt font_size_1"><?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_title', true ); ?></h1>
  <h2 class="hero_txt font_size_7"><?php echo category_description() ?></h2>
  <div class="redDot header_activator"></div>
  <svg class="hero_arrow_down" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
    <use xlink:href="#arrow_down"></use>
  </svg>
  <div class="redDot header_activator"></div>
</section>

<section class="col_2_block">
  <div class="block_title_deco">
    <h3 class="block_title font_size_3" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>"><?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_description_title', true ); ?></h3>
    <div class="flati_deco" style="background:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>"></div>
  </div>
  <div class="col_2_block_col">
    <p class="block_txt font_size_6">
      <strong>Nuestra misión es mejorar el bienestar de las empresas y de las personas trabajadoras a través de nuestros programas basados en evidencia científica y en 25 años de experiencia</strong>
      ayudando a mejorar tangiblemente la calidad de vida de las personas tanto a nivel individual como laboral.
    </p>
    <p class="block_txt font_size_6">
      <strong>Nuestro enfoque está basado en cambiar la percepción</strong>
      , los cambios profundos y duraderos solo pueden ocurrir cuando experimentamos un cambio de paradigma. Enseñamos a las personas a cambiar la relación que tiene con sus pensamientos y emociones, esto nos permite poder elegir nuestro comportamiento en vez de repetir los viejos comportamientos de siempre inconscientemente.
    </p>
  </div>
  <div class="col_2_block_col">
    <p class="block_txt font_size_6">
      El resultado tangible es tener un equipo de personas con mayor ecuanimidad, mayor poder de decisión, una mejor concentración y motivación, culminando en una mejora de relaciones, entre otros beneficios.
    </p>
    <p class="block_txt font_size_6">
      <strong>Nuestros programas presenciales de enseñanza son inocuos sin efectos secundarios negativos ya que se basan en el principio sencillo de que “el conocimiento es poder”
      </strong>
    </p>
  </div>
</section>

<section class="showcase4 colored_img">

  <h3 class="showcase_title alt simple_title font_size_3">Descubre nuestros Programas de Resiliencia</h3>

  <?php while (have_posts()){the_post();
    $arg = array(
      'color' => get_post_meta(get_the_ID(), 'A_color', true),
      'order' => get_post_meta(get_the_ID(), 'A_orden', true),
      'title' => get_post_meta(get_the_ID(), 'B_tarjeta_programas_titulo', true),
      'excerpt' => get_post_meta(get_the_ID(), 'B_tarjeta_programas_descripcion', true),
    );
    simpla_card($arg); ?>

  <?php } wp_reset_query(); ?>

</section>

<section class="showcase2 white_bg">
  <div class="sub_galu">
    <img class="sub_galu_img" src="http://despertar.host.trespiweb.com/wp-content/uploads/2021/02/img_empresa_1.jpg" alt="">
    <img class="sub_galu_img" src="http://despertar.host.trespiweb.com/wp-content/uploads/2021/02/img_empresa_2.jpg" alt="">
    <img class="sub_galu_img" src="http://despertar.host.trespiweb.com/wp-content/uploads/2021/02/img_empresa_3.jpg" alt="">
    <img class="sub_galu_img" src="http://despertar.host.trespiweb.com/wp-content/uploads/2021/02/img_empresa_4.jpg" alt="">
    <!-- <img class="galu_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'G_imagen_galeria_5', true)); ?>" alt=""> -->
    <!-- <img class="galu_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'G_imagen_galeria_6', true)); ?>" alt=""> -->
    <!-- <img class="galu_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'G_imagen_galeria_7', true)); ?>" alt=""> -->
    <!-- <img class="galu_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'G_imagen_galeria_8', true)); ?>" alt=""> -->
  </div>
  <div class="pista">
    <h5 class="pista_title font_size_5">¿Qué ofrecemos?</h5>


    <div class="pista_group alt">
      <p class="pista_time font_size_7"><strong>COBERTURA NACIONAL:</strong></p>
      <p class="pista_text font_size_7">Trabajamos en todo el territorio nacional en las instalaciones de su empresa.</p>
      <br>
      <p class="pista_time font_size_7"><strong>COMUNICACIÓN<br>Y ADAPTABILIDAD:</strong></p>
      <p class="pista_text font_size_7">Nuestro equipo se adapta a sus necesidades, encargándose de todo el proceso de comunicación, motivación, formación y seguimiento.</p>
      <br>
      <p class="pista_time font_size_7"><strong>SIN MEDICAMENTOS<br>SIN EFECTOS SECUNDARIOS</strong></p>
      <p class="pista_text font_size_7">No se necesitan sustitutos de nicotina, antidepresivos, ansiolíticos u otros medicamentos. </p>

    </div>

  </div>
</section>

<section class="showcase3">
  <h3 class="showcase_title font_size_4 simple_title" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">Nuestros programas para empresas constribuyen a...</h3>


  <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
    <?php include get_template_directory().'/assets/quit_overthinking_thick.svg'; ?>
    <p class="hosi_txt font_size_6">
      Reducir el estrés
      <br>
      innecesario y la ansiedad
    </p>
  </div>

  <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
    <?php include get_template_directory().'/assets/emotional_intelligence.svg'; ?>
    <p class="hosi_txt font_size_6">
      Aumentar la
      <br>
      inteligencia emocional
    </p>
  </div>

  <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
    <?php include get_template_directory().'/assets/gears.svg'; ?>
    <p class="hosi_txt font_size_6">
      El desarrollo
      <br>
      personal y lideradgo
    </p>
  </div>

  <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
    <?php include get_template_directory().'/assets/increase_focus.svg'; ?>
    <p class="hosi_txt font_size_6">
      Aumentar la concentración
      <br>
      y motivación
    </p>
  </div>

  <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
    <?php include get_template_directory().'/assets/improve_productivity.svg'; ?>
    <p class="hosi_txt font_size_6">
      Mejorar la productividad
      <br>
      y rentabilidad de la empresa
    </p>
  </div>

  <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
    <?php include get_template_directory().'/assets/prevent_diseases.svg'; ?>
    <p class="hosi_txt font_size_6">
      La prevención
      <br>
      de enfermedades
    </p>
  </div>

  <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
    <?php include get_template_directory().'/assets/calendar_2.svg'; ?>
    <p class="hosi_txt font_size_6">
      Reducir  el absentismo
      <br>
      Aumentar el  presentismo laboral
    </p>
  </div>

  <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
    <?php include get_template_directory().'/assets/relationship_thick.svg'; ?>
    <p class="hosi_txt font_size_6">
      Mejorar las relaciones,
      <br>
      la  energía y la vitalidad
    </p>
  </div>

  <div class="hosi" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
    <?php include get_template_directory().'/assets/stable_jobs.svg'; ?>
    <p class="hosi_txt font_size_6">
      Promover  una menor
      <br>
      rotación de personal
    </p>
  </div>
</section>

<section class="mivi white_bg alt">
  <div class="block_title_deco">
    <h4 class="block_title font_size_4" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">
      Contamos con la confianza de más
      <br>
      de 700 empresas y organizaciones que
      <br>
      han adoptado nuestros programas
    </h4>
    <div class="flati_deco" style="background:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>"></div>
  </div>
  <div class="mivi_icons Carousel">


    <div class="mivi_slide Element rowcol1">
      <?php
      $i = 0;
      $args = array(
        'post_type'=>'empresa',
      );
      $empresas=new WP_Query($args);
      while($empresas->have_posts()){$empresas->the_post();?>
        <?php if ( ($i % 4 == 0) AND $i ) { ?>
        </div>
        <div class="mivi_slide Element rowcol1">
        <?php } ?>
        <img class="mivi_icon" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <?php $i=$i+1; } wp_reset_query(); ?>
      </div>
      <button class="prenex prenex_prev rowcol1 dark" id="prevButton"></button>
      <button class="prenex prenex_next rowcol1 dark" id="nextButton"></button>
    </div>
  </section>

  <banner class="banner_1" style=" background: <?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?> ">
    <h4 class="banner_title font_size_4" style="color:white;">
      Programas de “Hábitos Saludables”, que encajan
      <br>
      como un guante, en sus Campañas de Promoción de la Salud
    </h4>
    <a href="#" class="btn white_btn font_size_7" style=" background: transparent ">CONTÁCTENOS</a>
  </banner>

  <section class="tesim_container Carousel">
    <h3 class="testim_title font_size_3">¿Qué dicen de nosotros?</h3>

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
          <div class="tesim_txt font_size_6"><?php the_content(); ?></div>
          <p class="tesim_author font_size_6"><?php the_title(); ?></p>
        </quote>
        <?php $i=$i+1; } wp_reset_query(); ?>
      </div>


      <button class="prenex prenex_prev row2col1 dark" id="prevButton"></button>
      <button class="prenex prenex_next row2col1 dark" id="nextButton"></button>
    </section>
    <section class="tripartito" style="border-top: <?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?> solid 2px;border-bottom:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?> solid 2px">
      <img class="tripartito_img" src="<?php echo get_template_directory_uri().'/assets/fundacion_tripartita.jpg' ?>" alt="">
      <h4 class="block_title font_size_6" style="color:<?php echo get_term_meta( get_queried_object()->term_id, 'lt_meta_color', true ); ?>">· FORMACIONES BONIFICADAS POR LA FUNDACIÓN TRIPARTITA (FUNDAE) ·</h4>
    </section>






  <?php get_footer(); ?>
