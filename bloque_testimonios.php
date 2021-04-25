
<section class="tesim_container Carousel">
  <h3 class="testim_title font_size_3">Testimonios</h3>

  <div class="tesim_cont Element row2col1">
    <?php
    $i = 0;
    $args = array(
      'post_type'=>'testimonial',
      'meta_query' => array(
        array(
          'key'     => 'featured',
          'value'   => 'yes',
          'compare' => 'LIKE',
        ),
      ),
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
        <div class="tesim_txt font_size_6"><?php the_content(); ?></div>
        <p class="tesim_author font_size_6"><?php the_title(); ?></p>
      </quote>
      <?php $i=$i+1; } wp_reset_query(); ?>
    </div>


      <button class="prenex prenex_prev row2col1" id="prevButton">
        <svg class="prenex_svg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M25.1 247.5l117.8-116c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L64.7 256l102.2 100.4c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L25 264.5c-4.6-4.7-4.6-12.3.1-17z"></path></svg>
      </button>
      <button class="prenex prenex_next row2col1" id="nextButton">
        <svg class="prenex_svg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17z"></path></svg>
      </button>
    <a href="<?php echo get_site_url() . '/contacto' ?>" class="testim_link">VER MÁS TESTIMONIOS</a>
  </section>
