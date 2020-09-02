<?php get_header(); ?>



<?php while(have_posts()){the_post(); ?>
    
    <section class="hero">
        <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <h1 class="hero_title"><?php the_title(); ?></h1>
        <div class="redDot header_activator"></div>
    </section>


    <section class="mivi">
        <div class="mivi_intro">
            <h2 class="mivi_title">Unos Valores: Una Visión</h2>
            <p class="mivi_excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sodales sem eget convallis congue. Duis dapibus efficitur tempor. Aenean posuere urna eget risus dignissim, vel pellentesque elit lobortis. Ut tristique, lectus non congue mollis, mauris ante interdum augue, vitae varius diam justo eget nisl.</p>
            <p class="mivi_excerpt">Nam facilisis efficitur ante, non porttitor odio iaculis at. Nam egestas ante in lacus suscipit fringilla. Fusce sit amet ex viverra erat eleifend egestas. Pellentesque ultrices, urna vel rhoncus sodales, eros velit interdum ipsum, a laoreet justo augue quis purus. Proin ac sem dolor.</p>
        </div>
        <div class="mivi_why">
            <h3 class="mivi_select option1" onclick="altClassFromSelector('option2', '.mivi_why')">¿Por qué 'es fácil...<br>si sabes cómo!'?</h3>
            <p class="mivi_explain option1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sodales sem eget convallis congue. Duis dapibus efficitur tempor. Aenean posuere urna eget risus dignissim, vel pellentesque elit lobortis. Ut tristique, lectus non congue mollis, mauris ante interdum augue, vitae varius diam justo eget nisl. Nam facilisis efficitur ante, non porttitor odio iaculis at. Nam egestas ante in lacus suscipit fringilla. Fusce sit amet ex viverra erat eleifend egestas. Pellentesque ultrices, urna vel rhoncus sodales, eros velit interdum ipsum, a laoreet justo augue quis purus. Proin ac sem dolor.</p>
            <h3 class="mivi_select option2" onclick="altClassFromSelector('option2', '.mivi_why')">¿Por qué<br>'Vivir Despierto'?</h3>
            <p class="mivi_explain option2">In sodales orci at ligula fermentum varius. Pellentesque viverra diam risus, et ultricies sem sodales nec. Aliquam a pretium nisi. Duis vitae congue elit. Maecenas congue sapien volutpat sem sollicitudin ullamcorper. Proin sit amet sem sem. Quisque tempus cursus nunc, quis faucibus augue mattis at. Sed in egestas eros, id mattis est. Etiam bibendum in sem et sodales. Donec lectus lectus, sagittis pharetra sagittis at, ultrices et dui. Integer ac sem nunc. Sed fermentum ante eget ligula iaculis, non eleifend lectus euismod. Praesent interdum sollicitudin dapibus.</p>
        </div>
        <div class="mivi_icons Carousel">
            
            <div class="mivi_slide Element rowcol1">
                <?php
                $i = 0;
                $args = array(
                    'post_type'=>'empresa',
                );
                $testimonials=new WP_Query($args);
                while($testimonials->have_posts()){$testimonials->the_post();?>
                    <?php if ( ($i % 4 == 0) AND $i ) { ?>
                        </div>
                        <div class="mivi_slide Element rowcol1">
                    <?php } ?>
                    <img class="mivi_icon" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
                <?php $i=$i+1; } wp_reset_query(); ?>
            </div>
            <button class="prenex prenex_prev rowcol1" id="prevButton"></button>
            <button class="prenex prenex_next rowcol1" id="nextButton"></button>
        </div>
    </section>


    <section class="showcase5">
        <h3 class="showcase_title">Descubre al equipo</h3>

        <?php
        $args = array(
            'post_type'=>'miembro',
        );
        $miembros=new WP_Query($args);
        while($miembros->have_posts()){$miembros->the_post();?>
            <div class="simpla">
                <img class="simpla_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
                <h6 class="simpla_title row2col1"><?php the_title(); ?></h6>
                <div class="simpla_deco row2col1"></div>
                <div class="simpla_txt"><?php the_excerpt(); ?></div>
            </div>
        <?php } wp_reset_query(); ?>
        
    </section>


    <section class="barda">
        <h5 class="barda_title">Finca las Bardas</h5>
        <img class="barda_media" src="https://picsum.photos/600/400" alt="">
        <p class="barda_quote">“Un lugar que invita a relajarte y recargarte de la energía de la naturaleza.”</p>
        <p class="barda_txt">
            Te damos la bienvenida a nuestro hogar en el
            norte de Cantabria, localizado en un pueblo
            llamado Cóo, de apenas 300 habitantes donde
            tus vecinos serán los campos verdes, nuestros
            caballos y perros Haku, Yogi, algún que otro
            animal salvaje e infinita fauna silvestre. Un lugar
            que invita a relajarte y recargarte de la energía
            de la naturaleza.
            Finca las bardas es una finca construida con
            piedra y madera respetando la arquitectura
            tradicional de Cantabria. Las habitaciones
            ofrecen tranquilidad y vistas preciosas al mar
            de campos verdes y al pueblo de Cóo.
            Los cántabros tienen pasión por su tierra y la
            preservan con orgullo. Es común en el pueblo
            ver a los agricultores utilizando métodos
            tradicionales. Esta tierra nos regala kilómetros
            de costa natural, playas y acantilados, los Picos
            de Europa en el fondo, y el mar y la naturaleza
            siempre presente para disfrutar.
            Estamos muy ilusionados de compartir un
            trocito de esta tierra que orgullosos, podemos
            llamar nuestro hogar.
        </p>
    </section>

    <section class="gala">
        <?php
        for ($i=1; $i < 12; $i++) {
            if(get_post_meta(get_the_ID(), 'gallery_image_'.$i, true)){ ?>
                <img class="gala_img" src="<?php echo get_post_meta(get_the_ID(), 'gallery_image_'.$i, true); ?>" alt="">
            <?php }
        }
        ?>
    </section>



    <section class="main">
        <?php the_content(); ?>
    </section>
<?php } ?>


<?php get_footer(); ?>