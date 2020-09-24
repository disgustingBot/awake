<?php get_header(); ?>



<?php while(have_posts()){the_post(); ?>

    <section class="hero">
        <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <h1 class="hero_title font_size_1 rowcol1"><?php echo get_post_meta(get_the_ID(), 'titulo_principal', true)?></h1>
        <div class="redDot header_activator"></div>
        <svg class="mega_arrow_down rowcol1" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
          <use xlink:href="#arrow_down"></use>
        </svg>
    </section>

    <section class="mivi">
        <div class="mivi_intro">
            <h2 class="mivi_title font_size_3">Unos Valores: Una Visión</h2>
            <p class="mivi_excerpt font_size_4">
              <strong>Vivir despierto – es fácil... ¡si sabes cómo!</strong>
              es un proyecto que nació hace 25 años de la mano de Geoffrey Molloy y Rhea Sivi,
              <strong> con el objetivo de mejorar la calidad de vida de las personas a través de sus programas para particulares y empresas. </strong>
            </p>
            <p class="mivi_excerpt font_size_4">Nuestra visión es contribuir a un cambio positivo en el mundo, inspirar a las personas a explorar la vida con curiosidad abierta, cariño y un toque de humor. A lo largo de 25 años hemos trabajado con miles de personas más de700 corporaciones han adoptado nuestros programas entre ellas. </p>
        </div>
        <div class="mivi_why">
            <h3 class="mivi_select option1" onclick="altClassFromSelector('option2', '.mivi_why')">¿Por qué 'es fácil...<br>si sabes cómo!'?</h3>
            <p class="mivi_explain option1 font_size_4">Cualquier problema es difícil de resolver si no entiendes el problema. Una vez lo entiendas puede volverse fácil solucionarlo.
              <br>
              <br>
              Da igual si estamos hablando de dejar de fumar, vivir sin alcohol, o cualquier droga, o si se trata de cambiar nuestros hábitos alimenticios o aprender herramientas para afrontar mejor el estrés, la ansiedad, la depresión – <strong>el conocimiento es poder.</strong></p>

            <h3 class="mivi_select option2" onclick="altClassFromSelector('option2', '.mivi_why')">¿Por qué<br>'Vivir Despierto'?</h3>
            <p class="mivi_explain option2 font_size_4">Vivimos en una sociedad en la que nuestros niveles de bienestar material son relativamente elevados. La mayoría de las enfermedades contagiosas mortales que han afectado a la humanidad durante gran parte de su existencia han sido eliminadas. Nuestras necesidades más básicas han sido cubiertas – tenemos mucho más que suficiente para comer, tenemos techo, seguridad física y agua potable. La mayoría de nosotros nunca hemos tenido que pelear por la supervivencia. Sin embargo, a pesar de todo esto, en nuestra sociedad existe un sentido generalizado de “sentirnos peor.”
            <br>
            <br>
            Vivimos a un paso cada vez más frenético en un mundo cada vez más fragmentado. Nuestra conexión con el mundo físico, nuestros amigos, familia, incluso con nosotros mismos se ha vuelto cada vez más ténue. Los niveles de adicción, ansiedad, depresión, estrés crónicos y enfermedades autoinfligidas por nuestro estilo de vida nunca han sido tan elevados y siguen creciendo. Muchas personas han llegado al punto de quiebre.
            <br>
            <br>
            En términos simples, ayudamos a las personas a que vivan despiertos y proporcionándoles nuevos mapas mentales y herramientas sencillas y efectivas para ayudarles a ver “el territorio” de una manera diferente y más útil – lo que en consecuencia, nos ayuda a tomar mejores decisiones y mejorar la calidad de nuestras vidas. </p>
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
            <button class="prenex prenex_prev rowcol1" id="prevButton"></button>
            <button class="prenex prenex_next rowcol1" id="nextButton"></button>
        </div>
    </section>


    <section class="showcase5">
        <h3 class="showcase_title font_size_2">Descubre al equipo</h3>

        <?php
        $args = array(
            'post_type'=>'miembro',
            'orderby' => 'meta_value_num',
            'meta_key'=> 'orden',
            'order' => 'ASC'
        );
        $miembros=new WP_Query($args);
        while($miembros->have_posts()){$miembros->the_post();?>

            <?php simpla_card(); ?>

        <?php } wp_reset_query(); ?>

    </section>


    <section class="barda">
        <h5 class="barda_title font_size_1">Finca las Bardas</h5>
        <img class="barda_media" src="https://picsum.photos/600/400" alt="">
        <p class="barda_quote font_size_3">“Un lugar que invita a relajarte y recargarte de la energía de la naturaleza.”</p>
        <p class="barda_txt font_size_4"> Te damos la bienvenida a nuestro hogar en el norte de Cantabria, localizado en un pueblo llamado Cóo, de apenas 300 habitantes donde tus vecinos serán los campos verdes, nuestros caballos y perros Haku, Yogi, algún que otro animal salvaje e infinita fauna silvestre. Un lugar que invita a relajarte y recargarte de la energía de la naturaleza.
        <br>
        <br>
        Finca las bardas es una finca construida con piedra y madera respetando la arquitectura tradicional de Cantabria. Las habitaciones ofrecen tranquilidad y vistas preciosas al mar de campos verdes y al pueblo de Cóo.
        <br>
        <br>
        Los cántabros tienen pasión por su tierra y la preservan con orgullo. Es común en el pueblo ver a los agricultores utilizando métodos tradicionales. Esta tierra nos regala kilómetros de costa natural, playas y acantilados, los Picos de Europa en el fondo, y el mar y la naturaleza siempre presente para disfrutar.
        <br>
        <br>
        Estamos muy ilusionados de compartir un trocito de esta tierra que orgullosos, podemos llamar nuestro hogar.
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
