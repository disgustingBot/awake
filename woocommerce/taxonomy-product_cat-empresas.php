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


<?php get_footer(); ?>
