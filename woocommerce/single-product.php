<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>
    <?php global $woocommerce, $product, $post;$is_out_of_stock = false; ?>
    <?php if( !$product->is_on_backorder() AND !$product->is_in_stock() ){ $is_out_of_stock = true; } ?>

    <section class="hero">
        <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <h1 class="hero_title"><?php the_title(); ?></h1>
        <div class="redDot header_activator"></div>
    </section>

    <section class="gertha lateral_m">
        <div class="gertha_deco"></div>
        <div class="gertha_caption">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc hendrerit nibh id metus sagittis pharetra.
                Aenean lacinia enim eu eros interdum, vel accumsan dolor lobortis.
                Vestibulum lacus enim, sollicitudin in hendrerit eu, placerat ac nulla.
                Fusce iaculis justo tristique sem porta suscipit.
                Proin lobortis dictum luctus.
                Suspendisse convallis id tortor id aliquet.
                Donec congue laoreet venenatis.
                In convallis magna tellus, nec sollicitudin nisl scelerisque ut.
                Nulla semper, est ac egestas vestibulum, enim orci imperdiet turpis, ut dictum orci leo ac nisl.</p>
        </div>
        <img class="gertha_img" loading="lazy" src="https://picsum.photos/400/280" alt="">
    </section>


    
    <div class="separanda">
        <?php include get_template_directory() . '/assets/retirement.svg'; ?>
        <p class="separanda_text">Retiro<br>de 3 días</p>
        <?php include get_template_directory() . '/assets/plus.svg'; ?>
        <?php include get_template_directory() . '/assets/retirement.svg'; ?>
        <p class="separanda_text">8 semanas de<br>formación a distancia</p>
    </div>



    <section class="showcase2">
        <div class="gali">
            <img class="gali_img" src="http://localhost/awake/wp-content/uploads/2020/09/DSCF5365-2.jpg" alt="">
            <img class="gali_img" src="http://localhost/awake/wp-content/uploads/2020/09/retiro_dia1-12.jpg" alt="">
            <img class="gali_img" src="http://localhost/awake/wp-content/uploads/2020/09/retiro_paseo-45.jpg" alt="">
            <img class="gali_img" src="http://localhost/awake/wp-content/uploads/2020/09/retiro_dia1-5.jpg" alt="">
        </div>
        <div class="pista">
            <h5 class="pista_title">Programa Orientativo</h5>

            <?php $i = 1;
            while(true){
                if(get_post_meta(get_the_ID(), 'programa_'.$i.'_text', true)){ ?>
                    <div class="pista_group">
                        <p class="pista_txt"><?php echo get_post_meta(get_the_ID(), 'programa_'.$i.'_time', true); ?></p>
                        <p class="pista_txt"><?php echo get_post_meta(get_the_ID(), 'programa_'.$i.'_text', true); ?></p>
                    </div>
                    <?php
                    $i=$i+1;
                } else { break; }
            } ?>

            <div class="pista_deco"></div>
            <p class="pista_caption">
                El retiro consta de unas 20 horas formativas,
                dejando el sábado por la tarde libre.
                (No se sirve cena la noche del sábado).
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
        <h6 class="copa_title">Retiro en Cantabria 3 días<br><?php the_title(); ?></h6>
        <p class="copa_label">FECHAS</p>
        <select class="copa_select" name="" id="">
            <option value="">Elige una opcion</option>
        </select>
        <p class="copa_price">475,00€</p>
        
        <div class="cuantos Cuantos">
            <input class="cuantosQnt cuantosQantity" type="text" value="1" min="1">
            <button class="cuantosBtn cuantosMins">-</button>
            <button class="cuantosBtn cuantosPlus">+</button>
        </div>
        
        <button
            class="btn"
            id="myAddToCart"
            data-product-id="<?php echo get_the_id(); ?>"
            data-product-type="<?php echo $product->get_type(); ?>"
            data-quantity="1"
            data-variation-description=""
            data-buy="later"
            <?php if($product->is_on_backorder()){ ?>
                data-preorder="true"
            <?php } else { ?>
                data-preorder="false"
            <?php } ?>
            <?php if( $is_out_of_stock ){ echo 'disabled'; } ?>
            >
            <?php
            if( $is_out_of_stock ){
                echo 'OUT OF STOCK';
            } else {
                echo 'ADD TO CART';
            }
            ?>
        </button>

        <p class="copa_mas">Más información CLICA AQUÍ</p>
    </section>



<?php } ?>

<?php get_footer(); ?>