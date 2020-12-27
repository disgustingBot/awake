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
      <p class="gertha_txt alt font_size_5"><?php echo get_post_meta($post->ID, 'A_descripcion_texto_1', true); ?></p>
      <p class="gertha_txt alt font_size_5"><?php echo get_post_meta($post->ID, 'A_descripcion_texto_2', true); ?></p>
      <p class="gertha_txt alt font_size_5"><?php echo get_post_meta($post->ID, 'A_descripcion_texto_3', true); ?></p>
      <p class="gertha_txt alt font_size_5"><?php echo get_post_meta($post->ID, 'A_descripcion_texto_4', true); ?></p>
    </div>
    <video class="gertha_img" controls="true" alt="">
      <source type="video/mp4" src="<?php echo get_post_meta($post->ID, 'A_descripcion_url_video', true); ?>">
      </video>
      <h3 class="gertha_title font_size_3" style=" color: <?php echo $category_color; ?> "><?php echo get_post_meta($post->ID, 'A_descripcion_titulo', true); ?></h3>
    </section>

    <section class="showcase6">
      <h3 class="showcase_title font_size_3 simple_title" style=" color: <?php echo $category_color; ?> ">Ofrecemos</h3>
      <div class="showcase6_container">
        <div class="hosi" style=" background: <?php echo $category_color; ?> ">
          <p class="hosi_title" style="color:white">60-70%</p>
          <p class="hosi_txt font_size_6" style="color:white">
            EFECTIVIDAD:<br>
            de éxito después<br>
            de un año
          </p>
        </div>

        <div class="hosi" style=" color: <?php echo $category_color; ?>; background: #f4f4f4;">
          <p class="hosi_title" style=" color: <?php echo $category_color; ?>;">6H</p>
          <p class="hosi_txt font_size_6" style=" color: <?php echo $category_color; ?> ">
            RAPIDEZ<br>
            En una sola<br>
            mañana o tarde
          </p>
        </div>

        <div class="hosi wide_hosi" style=" background: <?php echo $category_color; ?>; color: white;">
          <?php include get_template_directory().'/assets/side_effect.svg'; ?>
          <p class="hosi_txt font_size_6" style="color:white">
            SIN EFECTOS<br>
            SECUNDARIOS:<br>
            sin medicamentos
          </p>
        </div>

        <div class="hosi" style=" color: <?php echo $category_color; ?>; background: #f4f4f4">
          <?php include get_template_directory().'/assets/satisfaction.svg'; ?>
          <p class="hosi_txt font_size_6" style=" color: <?php echo $category_color; ?>!important ">
            SATISFACCIÓN:<br>
            Convertirte en no<br>
            fumador y feliz de serlo
          </p>
        </div>

        <div class="hosi" style=" background: <?php echo $category_color; ?>;color: white; ">
          <?php include get_template_directory().'/assets/warranty.svg'; ?>
          <p class="hosi_txt font_size_6" style="color: white;">
            GARANTÍA:<br>
            Devolucin <br>
            total del dinero
          </p>
        </div>

      </div>
    </section>

    <section class="separanda_backgrounded">
      <div class="separanda separanda_backgrounded">
        <h4 class="separanda_title font_size_3" style=" color: <?php echo $category_color; ?>">¿Que incluye el programa?</h4>
        <div class="separanda_item" style=" color: <?php echo $category_color; ?>">
          <?php include get_template_directory().'/assets/classroom.svg'; ?>
          <p class="separanda_text font_size_4" style="color: #706862">1 sesión<br>de 6 horas</p>
        </div>
        <div class="separanda_item alt separanda_plus" style=" color: <?php echo $category_color; ?>">
          <?php include get_template_directory().'/assets/plus.svg'; ?>
        </div>
        <div class="separanda_item" style=" color: <?php echo $category_color; ?>">
          <?php include get_template_directory().'/assets/calendar.svg'; ?>
          <p class="separanda_text font_size_4" style="color: #706862">3 sesiones de<br>refuerzo de 3 horas</p>
        </div>
        <div class="separanda_item alt separanda_plus separanda_hidden_plus" style=" color: <?php echo $category_color; ?>">
          <?php include get_template_directory().'/assets/plus.svg'; ?>
        </div>
        <div class="separanda_item" style=" color: <?php echo $category_color; ?>">
          <?php include get_template_directory().'/assets/video_info.svg'; ?>
          <p class="separanda_text font_size_4" style="color: #706862">Información<br>adicional</p>
        </div>
        <div class="separanda_item alt separanda_plus" style=" color: <?php echo $category_color; ?>">
          <?php include get_template_directory().'/assets/plus.svg'; ?>
        </div>
        <div class="separanda_item" style=" color: <?php echo $category_color; ?>">
          <?php include get_template_directory().'/assets/weekly_news.svg'; ?>
          <p class="separanda_text font_size_4" style="color: #706862">Boletines<br>semanales</p>
        </div>
      </div>
    </section>

    <section class="col_2_block">
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
      <h3 class="showcase_title font_size_3 simple_title" style=" color: <?php echo $category_color; ?>">Conceptos que desarrollamos</h3>


      <div class="hosi" style=" color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/myth_message.svg'; ?>
        <p class="hosi_txt font_size_5">Eliminamos mitos y malentendidos<br>asociados con el fumar y la nicotina</p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/explore.svg'; ?>
        <p class="hosi_txt font_size_5">
          Exploramos los temores que<br>nos han llevado a aplazar la decisión
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/anxiety.svg'; ?>
        <p class="hosi_txt font_size_5">
          Explicamos qué es el mono físico<br>y cómo superarlo sin problema
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/develop_thoughts.svg'; ?>
        <p class="hosi_txt font_size_5">
          Aclaramos por qué hemos<br>creído que es un placer o una muletilla
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/dream_drugs.svg'; ?>
        <p class="hosi_txt font_size_5">
          Profundizamos por qué asociamos fumar<br>a prácticamente todas las situaciones
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/nosmoking_map.svg'; ?>
        <p class="hosi_txt font_size_5">
          Explicamos cómo responder<br>cuando nos acordamos del fumar
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/healthy_feelings.svg'; ?>
        <p class="hosi_txt font_size_5">
          Facilitamos herramientas para afrontar<br>el estrés y otras emociones negativas
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/right_choice.svg'; ?>
        <p class="hosi_txt font_size_5">
          Descubrimos consejos<br>para evitar engordar
        </p>
      </div>

      <div class="hosi" style=" color: <?php echo $category_color; ?>">
        <?php include get_template_directory().'/assets/redirect_life.svg'; ?>
        <p class="hosi_txt font_size_5">
          Te ayudamos a tomar<br>la decisión de liberarte
        </p>
      </div>
    </section>



    <section class="copa">
      <img class="copa_img" src="<?php echo get_post_meta(get_the_ID(), 'C_imagen_modulo_compra', true); ?>" alt="">
      <?php include 'variable_product_interaction.php'; ?>

    </section>

  <?php } ?>

  <banner class="banner_1" style=" background: <?php echo $category_color; ?> ">
    <h4 class="banner_title font_size_3"><?php echo get_post_meta(get_the_ID(), 'D_titulo_banner', true); ?></h4>
    <a href="<?php echo get_post_meta(get_the_ID(), 'D_link_boton_banner', true); ?>" class="btn white_btn font_size_6" style=" background: <?php echo $category_color; ?> "><?php echo get_post_meta(get_the_ID(), 'D_texto_boton_banner', true); ?></a>
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
          <h4 class="block_title font_size_3" style="color: <?php echo $category_color; ?>"><?php _e($my_title, 'awake') ?></h4>
          <?php // echo get_post_meta(get_the_ID(), 'related_posts_tag', true); ?>
          <?php
          $related = new WP_Query( $args );
        ?>
        <?php while ( $related->have_posts() ) : $related->the_post(); ?>

          <?php sqare_card(); ?>

        <?php endwhile; wp_reset_query(); ?>

        <a  class="block_link font_size_7" href="<?php echo get_site_url() ?>/blog">VER MÁS NOTICIAS</a>
      </section>




<?php get_footer(); ?>
