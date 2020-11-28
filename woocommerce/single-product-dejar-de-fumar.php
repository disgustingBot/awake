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

  <section class="gertha alt lateral_m">
    <div class="gertha_deco alt"></div>
    <div class="gertha_caption">
      <p class="gertha_txt alt font_size_5" style=" color: <?php echo $category_color; ?> "><?php echo get_post_meta($post->ID, 'A_descripcion_texto_1', true); ?></p>
      <p class="gertha_txt alt font_size_5"><?php echo get_post_meta($post->ID, 'A_descripcion_texto_2', true); ?></p>
      <p class="gertha_txt alt font_size_5"><?php echo get_post_meta($post->ID, 'A_descripcion_texto_3', true); ?></p>
      <p class="gertha_txt alt font_size_5"><?php echo get_post_meta($post->ID, 'A_descripcion_texto_4', true); ?></p>
    </div>
    <video class="gertha_img" controls="true" alt="">
      <source type="video/mp4" src="<?php echo get_post_meta($post->ID, 'A_descripcion_url_video', true); ?>">
      </video>
      <h3 class="gertha_title font_size_4"><?php echo get_post_meta($post->ID, 'A_descripcion_titulo', true); ?></h3>
    </section>

    <section class="showcase6">
      <h3 class="showcase_title font_size_3 simple_title">Ofrecemos</h3>
      <div class="showcase6_container">
        <div class="hosi" style="color:#C0CED3">
          <p class="hosi_title">60-70%</p>
          <p class="hosi_txt font_size_6">
            EFECTIVIDAD:<br>
            de éxito después<br>
            de un año
          </p>
        </div>

        <div class="hosi" style="color:#C0CED3">
          <p class="hosi_title">6H</p>
          <p class="hosi_txt font_size_6">
            RAPIDEZ<br>
            En una sola<br>
            mañana o tarde
          </p>
        </div>

        <div class="hosi" style="color:#C0CED3">
          <?php include get_template_directory().'/assets/side_effect.svg'; ?>
          <p class="hosi_txt font_size_6">
            SIN EFECTOS<br>
            SECUNDARIOS:<br>
            sin medicamentos
          </p>
        </div>

        <div class="hosi" style="color:#C0CED3">
          <?php include get_template_directory().'/assets/satisfaction.svg'; ?>
          <p class="hosi_txt font_size_6">
            SATISFACCIÓN:<br>
            Convertirte en no<br>
            fumador y feliz de serlo
          </p>
        </div>

        <div class="hosi" style="color:#C0CED3">
          <?php include get_template_directory().'/assets/warranty.svg'; ?>
          <p class="hosi_txt font_size_6">
            GARANTÍA:<br>
            Devolucin <br>
            total del dinero
          </p>
        </div>

      </div>
    </section>

    <section class="separanda">
      <h4 class="separanda_title font_size_3">¿Que incluye el programa?</h4>
      <div class="separanda_item">
        <?php include get_template_directory().'/assets/classroom.svg'; ?>
        <p class="separanda_text font_size_4">1 sesión<br>de 6 horas</p>
      </div>
      <div class="separanda_item alt separanda_plus">
        <?php include get_template_directory().'/assets/plus.svg'; ?>
      </div>
      <div class="separanda_item">
        <?php include get_template_directory().'/assets/calendar.svg'; ?>
        <p class="separanda_text font_size_4">3 sesiones de<br>refuerzo de 3 horas</p>
      </div>
      <div class="separanda_item alt separanda_plus separanda_hidden_plus">
        <?php include get_template_directory().'/assets/plus.svg'; ?>
      </div>
      <div class="separanda_item">
        <?php include get_template_directory().'/assets/video_info.svg'; ?>
        <p class="separanda_text font_size_4">Información<br>adicional</p>
      </div>
      <div class="separanda_item alt separanda_plus">
        <?php include get_template_directory().'/assets/plus.svg'; ?>
      </div>
      <div class="separanda_item">
        <?php include get_template_directory().'/assets/weekly_news.svg'; ?>
        <p class="separanda_text font_size_4">Boletines<br>semanales</p>
      </div>
    </section>

    <section class="col_2_block">
      <div class="gertha_deco alt2"></div>

      <div class="col_2_block_col">
        <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_1', true); ?></p>
        <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_2', true); ?></p>
      </div>
      <div class="col_2_block_col">
        <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_3', true); ?></p>
        <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_4', true); ?></p>
      </div>
    </section>
    <section class="showcase3">
      <h3 class="showcase_title font_size_3 simple_title hosi_secondary_color">Conceptos que desarrollamos</h3>


      <div class="hosi hosi_secondary_color">
        <?php include get_template_directory().'/assets/myth_message.svg'; ?>
        <p class="hosi_txt font_size_5">Eliminamos mitos y malentendidos<br>asociados con el fumar y la nicotina</p>
      </div>

      <div class="hosi hosi_secondary_color">
        <?php include get_template_directory().'/assets/explore.svg'; ?>
        <p class="hosi_txt font_size_5">
          Exploramos los temores que<br>nos han llevado a aplazar la decisión
        </p>
      </div>

      <div class="hosi hosi_secondary_color">
        <?php include get_template_directory().'/assets/anxiety.svg'; ?>
        <p class="hosi_txt font_size_5">
          Explicamos qué es el mono físico<br>y cómo superarlo sin problema
        </p>
      </div>

      <div class="hosi hosi_secondary_color">
        <?php include get_template_directory().'/assets/develop_thoughts.svg'; ?>
        <p class="hosi_txt font_size_5">
          Aclaramos por qué hemos<br>creído que es un placer o una muletilla
        </p>
      </div>

      <div class="hosi hosi_secondary_color">
        <?php include get_template_directory().'/assets/listening_ear.svg'; ?>
        <p class="hosi_txt font_size_5">
          Mejorar la escucha activa, la concentración y creatividad.
        </p>
      </div>

      <div class="hosi hosi_secondary_color">
        <?php include get_template_directory().'/assets/perceptive_brain.svg'; ?>
        <p class="hosi_txt font_size_5">
          Crear una percepción flexible para mejorar la respuesta ante diferentes situaciones.
        </p>
      </div>

      <div class="hosi hosi_secondary_color">
        <?php include get_template_directory().'/assets/opportunity.svg'; ?>
        <p class="hosi_txt font_size_5">
          Afrontar el cambio y aprovechar las oportunidades que nos brinda.
        </p>
      </div>

      <div class="hosi hosi_secondary_color">
        <?php include get_template_directory().'/assets/relationship.svg'; ?>
        <p class="hosi_txt font_size_5">
          Mejorar las relaciones interpersonales.
        </p>
      </div>

      <div class="hosi hosi_secondary_color">
        <?php include get_template_directory().'/assets/happy_brain.svg'; ?>
        <p class="hosi_txt font_size_5">
          Hacernos más resistentes a la depresión.
        </p>
      </div>
    </section>


<?php } ?>

<?php get_footer(); ?>
