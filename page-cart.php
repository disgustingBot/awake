<?php get_header(); ?>


<!-- colocar aqui el bloque del encabezado -->


<?php while(have_posts()){the_post(); ?>
    <section class="main">
      <h1><?php _e('Tu Carrito', 'awake') ?></h1>
        <?php the_content(); ?>
    </section>
<?php } ?>


<?php get_footer(); ?>
