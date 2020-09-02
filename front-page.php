<?php get_header(); ?>

<section class="mega Carousel">

    <?php
    $args = array(
        'post_type'=>'banner',
    );
    $banners=new WP_Query($args);
    while($banners->have_posts()){$banners->the_post();?>
        <div class="hero Element">
            <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
            <h1 class="hero_title"><?php the_title(); ?></h1>
        </div>
    <?php } wp_reset_query(); ?>

    <div class="redDot header_activator test"></div>

    <button class="prenex prenex_prev rowcol1" id="prevButton"></button>
    <button class="prenex prenex_next rowcol1" id="nextButton"></button>
</section>




<section class="gertha lateral_m">
    <div class="gertha_deco"></div>
    <h3 class="gertha_title">
        Vivir despierto<br>
        es facil... si sabes cómo!
    </h3>
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




<section class="grid_1_2_4 lateral_m">
    <h3 class="grid_title">¿En qué podemos ayudarte?</h3>

    <div class="simpla">
        <img class="simpla_img" loading="lazy" src="https://picsum.photos/200" alt="">
        <h6 class="simpla_title row2col1">Resiliencia</h6>
        <div class="simpla_deco row2col1"></div>
    </div>

    <div class="simpla">
        <img class="simpla_img" loading="lazy" src="https://picsum.photos/199" alt="">
        <h6 class="simpla_title row2col1">Libérate</h6>
        <div class="simpla_deco row2col1"></div>
    </div>

    <div class="simpla">
        <img class="simpla_img" loading="lazy" src="https://picsum.photos/201" alt="">
        <h6 class="simpla_title row2col1">Nutricion</h6>
        <div class="simpla_deco row2col1"></div>
    </div>

    <div class="simpla">
        <img class="simpla_img" loading="lazy" src="https://picsum.photos/202" alt="">
        <h6 class="simpla_title row2col1">Longevity</h6>
        <div class="simpla_deco row2col1"></div>
    </div>
</section>





<section class="mega Carousel">

    <?php
    $args = array(
        'post_type'=>'product',
        'posts_per_page'=>4,
    );
    $blogPosts=new WP_Query($args); ?>

    <?php while($blogPosts->have_posts()){$blogPosts->the_post(); ?>
    <?php global $product; ?>

        <div class="hero Element">
            <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="Product Image">
            <!-- <a class="hero_img" href="<?php echo get_permalink(); ?>">
            </a> -->
            <img class="hero_icon" loading="lazy" src="https://picsum.photos/80" alt="">

            <a href="<?php echo get_permalink(); ?>">
            <h1 class="hero_title">
                    <?php the_title(); ?>
                </h1>
            </a>
            <a class="hero_link" href="">Próximas fechas</a>
            <p class="hero_txt">
                Resiliencia, meditación y mindfulness para redirigir tu vida<br>
                retiro 3 dias + 8 semanas de formacion a distancia
            </p>
        </div>
    <?php } wp_reset_query(); ?>
    <div class="redDot header_activator test"></div>

    <button class="prenex prenex_prev rowcol1" id="prevButton"></button>
    <button class="prenex prenex_next rowcol1" id="nextButton"></button>
</section>



<section class="tesim_container Carousel">
    <h3 class="">¿En qué podemos ayudarte?</h3>

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
                <p class="tesim_icon">"</p>
                <div class="tesim_txt"><?php the_content(); ?></div>
                <p class="tesim_author"><?php the_title(); ?></p>
            </quote>
        <?php $i=$i+1; } wp_reset_query(); ?>
    </div>


    <button class="prenex prenex_prev row2col1" id="prevButton"></button>
    <button class="prenex prenex_next row2col1" id="nextButton"></button>
</section>




<?php while(have_posts()){the_post(); ?>
    <section class="main">
        <?php the_content(); ?>
    </section>
<?php } ?>

<?php get_footer(); ?>
