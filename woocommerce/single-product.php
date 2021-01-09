<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>
    <?php global $woocommerce, $product, $post;$is_out_of_stock = false; ?>
    <?php if( !$product->is_on_backorder() AND !$product->is_in_stock() ){ $is_out_of_stock = true; } ?>

    <section class="hero">
        <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <h1 class="hero_title font_size_1"><?php the_title(); ?></h1>
        <div class="redDot header_activator"></div>
    </section>

    <section class="gertha lateral_m">
        <div class="gertha_deco"></div>
        <div class="gertha_caption">
            <p class="gertha_txt"> Te presentamos un programa experiencial para sobrevivir y prosperar en tiempos de cambio e incertidumbre. Diseñado especialmente para ayudarnos a desconectar de nuestras vidas llenas de distracciones y recargarnos de tiempo, espacio y de herramientas para cuidar y desarrollar nuestra resiliencia humana.
            <br>
            <br>
            La Resiliencia aplicada a humanos se entiende como la capacidad para “rebotar” de experiencias difíciles y de salir fortalecidos, tras pasar por una experiencia traumática o un periodo de estrés y ansiedad, por ejemplo. Cuando incorporamos actitudes y prácticas de resiliencia en nuestras vidas, se nos abren las puertas para vivir el presente con una mente más sana y un corazón más feliz.</p>

        </div>
        <img class="gertha_img" loading="lazy" src="https://picsum.photos/400/280" alt="">
    </section>



    <div class="separanda">
        <div class="separanda_item">
          <?php include get_template_directory() . '/assets/retirement.svg'; ?>
          <p class="separanda_text">Retiro<br>de 3 días</p>
        </div>
        <div class="separanda_item">
          <?php include get_template_directory() . '/assets/plus.svg'; ?>
        </div>
        <div class="separanda_item">
          <?php include get_template_directory() . '/assets/distance_training.svg'; ?>
          <p class="separanda_text">8 semanas de<br>formación a distancia</p>
        </div>


    </div>

    <section class="showcase2">
        <div class="galu">
            <img class="galu_img" src="https://picsum.photos/300" alt="">
            <img class="galu_img" src="https://picsum.photos/301" alt="">
            <img class="galu_img" src="https://picsum.photos/302" alt="">
            <img class="galu_img" src="https://picsum.photos/303" alt="">
            <img class="galu_img" src="https://picsum.photos/304" alt="">
            <img class="galu_img" src="https://picsum.photos/305" alt="">
            <img class="galu_img" src="https://picsum.photos/306" alt="">
            <img class="galu_img" src="https://picsum.photos/307" alt="">
        </div>
        <div class="pista">
            <h5 class="pista_title">Programa Orientativo</h5>

            <?php $i = 1;
            while(true){
                if(get_post_meta(get_the_ID(), 'programa_'.$i.'_text', true)){ ?>
                    <div class="pista_group">
                        <p class="pista_txt pista_time"><?php echo get_post_meta(get_the_ID(), 'programa_'.$i.'_time', true); ?></p>
                        <p class="pista_txt pista_text"><?php echo get_post_meta(get_the_ID(), 'programa_'.$i.'_text', true); ?></p>
                    </div>
                    <?php
                    $i=$i+1;
                } else { break; }
            } ?>

            <div class="pista_deco"></div>
            <p class="pista_caption">El retiro consta de unas 20 horas formativas, dejando el sábado por la tarde libre. (No se sirve cena la noche del sábado).
            </p>
        </div>
    </section>

    <section class="main">
        <?php the_content(); ?>
    </section>

    <section class="chiri">
        <img class="chiri_img" src="https://picsum.photos/300" alt="">
        <p class="chiri_txt">Naturaleza</p>
        <img class="chiri_img" src="https://picsum.photos/301" alt="">
        <p class="chiri_txt">Movimiento</p>
        <img class="chiri_img" src="https://picsum.photos/302" alt="">
        <p class="chiri_txt">MINDFULNESS & MEDITACIÓN</p>
        <img class="chiri_img" src="https://picsum.photos/303" alt="">
        <p class="chiri_txt">COCINA CREATIVA</p>
        <img class="chiri_img" src="https://picsum.photos/304" alt="">
        <p class="chiri_txt">RESILIENCIA EMOCIONAL</p>
    </section>


    <section class="copa">
        <img class="copa_img" src="https://picsum.photos/400" alt="">
        <?php include 'variable_product_interaction.php'; ?>
    </section>

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


<?php } ?>

<?php get_footer(); ?>
