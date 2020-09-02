<?php get_header(); ?>



<?php while(have_posts()){the_post(); ?>
    
    <section class="hero">
        <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <h1 class="hero_title"><?php the_title(); ?></h1>
        <div class="redDot header_activator"></div>
    </section>



    <section class="showcase4">
        <h3 class="showcase_title">Descubre nuestros Programas de Resiliencia</h3>

        <?php
        $args = array(
            'post_type'=>'programa',
            'posts_per_page' => 4,
        );
        $miembros=new WP_Query($args);
        while($miembros->have_posts()){$miembros->the_post();?>
            <?php simpla_card(); ?>
        <?php } wp_reset_query(); ?>
        
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

















    <section class="main">
        <?php the_content(); ?>
    </section>
<?php } ?>


<?php get_footer(); ?>