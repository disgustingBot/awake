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

  <div class="redDot header_activator"></div>

  <button class="prenex prenex_prev rowcol1" id="prevButton"></button>
  <button class="prenex prenex_next rowcol1" id="nextButton"></button>
  <svg class="mega_arrow_down rowcol1" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
    <use xlink:href="#arrow_down"></use>
  </svg>
</section>




<section class="gertha lateral_m">
  <div class="gertha_deco"></div>
  <h1 class="gertha_title font_size_1">
    Vivir despierto<br>
    es facil... ¡si sabes cómo!
  </h1>
  <div class="gertha_caption">
    <p class="gertha_txt">Aquí encontrarás herramientas, prácticas y percepciones que te ayudarán fortalecer tus “sistemas inmunológicos” emocionales, mentales y fisiológicos de una manera clara, creativa y con un toque de humor.</p>
    <p class="gertha_txt">Un espacio para desarrollar resiliencia humana, integrar prácticas de la redirigir tu vida, nutrirte desde la consciencia la creatividad y la sostenibilidad.</p>
    <p class="gertha_txt">25 años ayudando a mejorar la vida de las personas.</p>

    <svg class="gertha_signature" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 512 200">
      <use xlink:href="#signature"></use>
    </svg>
  </div>
  <img class="gertha_img" loading="lazy" src="https://picsum.photos/400/280" alt="">
</section>




<section class="showcase4">
  <h3 class="showcase_title">¿En qué podemos ayudarte?</h3>

  <div class="simpla">
    <img class="simpla_img" loading="lazy" src="https://picsum.photos/200" alt="">
    <h6 class="simpla_title row2col1">Resiliencia</h6>
    <div class="simpla_deco row2col1" style="background:#C0CED3"></div>
  </div>

  <div class="simpla">
    <img class="simpla_img" loading="lazy" src="https://picsum.photos/199" alt="">
    <h6 class="simpla_title row2col1">Libérate</h6>
    <div class="simpla_deco row2col1"style="background:#E9AD94"></div>
  </div>

  <div class="simpla">
    <img class="simpla_img" loading="lazy" src="https://picsum.photos/201" alt="">
    <h6 class="simpla_title row2col1">Nutricion</h6>
    <div class="simpla_deco row2col1" style="background:#EDC06D"></div>
  </div>

  <div class="simpla">
    <img class="simpla_img" loading="lazy" src="https://picsum.photos/202" alt="">
    <h6 class="simpla_title row2col1">Longevity</h6>
    <div class="simpla_deco row2col1" style="background:#98C9AC"></div>
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
    <div class="hero_img_filter" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">

    </div>
      <!-- <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="Product Image"> -->

      <!-- <a class="hero_img" href="<?php echo get_permalink(); ?>">
    </a> -->
    <img class="hero_icon" loading="lazy" src="<?php echo get_post_meta($post->ID, 'icono', true); ?>" alt="">


    <a href="<?php echo get_permalink(); ?>">
      <h1 class="hero_title">
        <?php the_title(); ?>
      </h1>
    </a>
    <a class="hero_link" href="<?php echo get_permalink(); ?>">Próximas fechas</a>
    <p class="hero_txt"><?php the_excerpt(); ?></p>
  </div>
<?php } wp_reset_query(); ?>
<div class="redDot header_activator"></div>

<button class="prenex prenex_prev rowcol1" id="prevButton"></button>
<button class="prenex prenex_next rowcol1" id="nextButton"></button>
</section>



<section class="tesim_container Carousel">
  <h3 class="testim_title">Testimonios</h3>

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
        <svg class="tesim_icon" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 38 34">
          <use xlink:href="#quote_icon"></use>
        </svg>
        <div class="tesim_txt"><?php the_content(); ?></div>
        <p class="tesim_author"><?php the_title(); ?></p>
      </quote>
      <?php $i=$i+1; } wp_reset_query(); ?>
    </div>


    <button class="prenex prenex_prev row2col1" id="prevButton"></button>
    <button class="prenex prenex_next row2col1" id="nextButton"></button>
    <a href="" class="testim_link">VER MÁS TESTIMONIOS</a>
  </section>

  <section class="fb_sells_personal_data">
    <?php echo do_shortcode('[instagram-feed]') ?>
  </section>




  <?php while(have_posts()){the_post(); ?>
    <section class="main">
      <?php the_content(); ?>
    </section>
  <?php } ?>

  <?php get_footer(); ?>
