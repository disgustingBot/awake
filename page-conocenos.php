<?php get_header(); ?>



<?php // while(have_posts()){the_post(); ?>

    <section class="hero hero_opaque">
        <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <h1 class="hero_title rowcol1 font_size_1"><?php echo get_post_meta(get_the_ID(), 'A_titulo_principal', true)?></h1>
        <div class="redDot header_activator"></div>
        <svg class="mega_arrow_down rowcol1" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
          <use xlink:href="#arrow_down"></use>
        </svg>
    </section>

    <section class="mivi">
        <div class="mivi_intro">
            <h2 class="mivi_title font_size_2"><?php echo get_post_meta(get_the_ID(), 'B_titulo_seccion_2', true)?></h2>
            <p class="mivi_excerpt font_size_6"><?php echo get_post_meta(get_the_ID(), 'C_texto_1_seccion_2', true)?></p>
            <p class="mivi_excerpt font_size_6"><?php echo get_post_meta(get_the_ID(), 'D_texto_2_seccion_2', true)?></p>
        </div>
        <div class="mivi_why">
            <h3 class="mivi_select option1 font_size_6" onclick="altClassFromSelector('option2', '.mivi_why')"><?php echo get_post_meta(get_the_ID(), 'E_titulo_1_seccion_3', true)?></h3>
            <p class="mivi_explain option1 font_size_7"><?php echo get_post_meta(get_the_ID(), 'F_texto_1_seccion_3', true)?></p>

            <h3 class="mivi_select option2 font_size_6" onclick="altClassFromSelector('option2', '.mivi_why')"><?php echo get_post_meta(get_the_ID(), 'G_titulo_2_seccion_3', true)?></h3>
            <p class="mivi_explain option2 font_size_7"><?php echo get_post_meta(get_the_ID(), 'H_texto_2_seccion_3', true)?></p>
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

            <button class="prenex prenex_prev rowcol1" id="prevButton">
              <svg class="prenex_svg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M25.1 247.5l117.8-116c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L64.7 256l102.2 100.4c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L25 264.5c-4.6-4.7-4.6-12.3.1-17z"></path></svg>
            </button>
            <button class="prenex prenex_next rowcol1" id="nextButton">
              <svg class="prenex_svg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17z"></path></svg>
            </button>
        </div>
    </section>


    <section class="conocenos_team_cards">
        <h3 class="showcase_title font_size_3"><?php echo get_post_meta(get_the_ID(), 'I_titulo_seccion_4', true)?></h3>

        <!-- para hacer un cyclo paginable filtrable y/o buscable -->
        <!-- el cyclo debe estar contenido en una etiqueta que SOLO contenga el cyclo -->
        <!-- colocar en esa etiqueta data-card y data-cycle -->
        <!-- en los argumentos del cyclo va 'cycle' => lo mismo que el cycle de la etiqueta -->
        <!-- agregar la variable a JS con localyze script con el mismo nombre -->
        <!-- colocar la tarjeta en multicards y llamarla con una funcion -->
        <div class="showcase5" data-card="simpla_card" data-cycle="miembros">
          <!-- // cycle($args); -->

          <?php
          $args = array(
            'post_type'=>'miembro',
            'orderby' => 'meta_value_num',
            'meta_key'=> 'orden',
            'order' => 'ASC',
            'posts_per_page' => 5,
            'cycle' => 'miembros',
          );
          $miembros=new WP_Query($args);
          wp_localize_script( 'main', 'miembros', array('query'=>json_encode($miembros->query_vars),) );
          while($miembros->have_posts()){$miembros->the_post();?>

            <?php simpla_card(); ?>

          <?php } wp_reset_query(); ?>
          <?php echo ajax_paginator_2($miembros); ?>
        </div>

    </section>


    <section class="barda">
        <h5 class="barda_title font_size_2"><?php echo get_post_meta(get_the_ID(), 'J_titulo_seccion_5', true)?></h5>

          <video class="barda_media" controls="true" alt="Thanks Taryn! Great video. This is your Instagram: https://www.instagram.com/peanutbuttervisuals/">
            <source type="video/mp4" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'N_video_seccion_5', true)); ?>">
          </video>
        <!-- <img class="barda_media" src="<?php // echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'N_video_seccion_5', true))?>" alt=""> -->
        <p class="barda_quote font_size_4"><?php echo get_post_meta(get_the_ID(), 'K_texto_azul_seccion_5', true)?></p>
        <p class="barda_txt font_size_6"><?php echo get_post_meta(get_the_ID(), 'L_texto_seccion_5', true)?></p>
    </section>

    <section class="gala">
        <?php
        for ($i=1; $i < 12; $i++) {
            if(get_post_meta(get_the_ID(), 'M_gallery_image_'.$i, true)){ ?>
                <img class="gala_img" src="<?php echo get_img_url_by_slug(get_post_meta(get_the_ID(), 'M_gallery_image_'.$i, true)); ?>" alt="">
            <?php }
        }
        ?>
    </section>



    <section class="main">
        <?php the_content(); ?>
    </section>
<?php // } ?>


<?php get_footer(); ?>
