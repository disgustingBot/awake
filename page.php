<?php get_header(); ?>


<!-- colocar aqui el bloque del encabezado -->
<!-- <h1>page.php</h1> -->


<?php while(have_posts()){the_post(); ?>
    <section class="post_main page_template">
        <?php the_content(); ?>
    </section>
<?php } ?>


<?php get_footer(); ?>
