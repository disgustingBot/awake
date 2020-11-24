<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>

  <section class="hero hero_opaque">
    <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
    <h1 class="hero_title alt"><?php the_title(); ?></h1>
    <h2 class="hero_txt font_size_6"><?php echo the_content() ?></h2>
    <svg class="hero_arrow_down" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
      <use xlink:href="#arrow_down"></use>
    </svg>
    <div class="redDot header_activator"></div>
  </section>

  <section class="gertha alt lateral_m">
    <div class="gertha_deco alt"></div>
    <div class="gertha_caption">
      <p class="gertha_txt alt font_size_5"><?php echo get_post_meta($post->ID, 'C_texto_descriptivo_1', true); ?></p>
      <p class="gertha_txt alt font_size_5"><?php echo get_post_meta($post->ID, 'D_texto_descriptivo_2', true); ?></p>
    </div>
    <video class="gertha_img" controls="true" alt="Thanks Taryn! Great video. This is your Instagram: https://www.instagram.com/peanutbuttervisuals/">
      <source type="video/mp4" src="<?php echo get_post_meta($post->ID, 'E_url_video_descripcion', true); ?>">
      </video>
    </section>

    <section class="separanda">
      <div class="separanda_item">
        <svg width="73" height="73" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0)">
            <path d="M36.4 11.85C39.7 11.85 42.38 14.53 42.38 17.83C42.38 21.13 39.7 23.81 36.4 23.81C33.1 23.81 30.42 21.13 30.42 17.83C30.42 14.53 33.1 11.85 36.4 11.85ZM28.62 17.83C28.62 22.12 32.11 25.61 36.4 25.61C40.69 25.61 44.18 22.12 44.18 17.83C44.18 13.54 40.69 10.05 36.4 10.05C32.11 10.05 28.62 13.54 28.62 17.83Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M37.3 5.64V1.4C37.3 0.9 36.9 0.5 36.4 0.5C35.9 0.5 35.5 0.9 35.5 1.4V5.63C35.5 6.13 35.9 6.53 36.4 6.53C36.89 6.54 37.3 6.13 37.3 5.64Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M29.04 3.11003C28.79 2.68003 28.24 2.53003 27.81 2.77003C27.38 3.02003 27.23 3.57003 27.47 4.00003L29.57 7.68003C29.74 7.97003 30.04 8.13003 30.35 8.13003C30.5 8.13003 30.65 8.09003 30.79 8.01003C31.22 7.77003 31.37 7.21003 31.13 6.78003L29.04 3.11003Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M26.37 10.84L22.73 8.67998C22.29 8.42998 21.74 8.56998 21.49 8.99998C21.24 9.42998 21.38 9.97998 21.81 10.23L25.45 12.39C25.59 12.48 25.75 12.52 25.91 12.52C26.22 12.52 26.52 12.36 26.68 12.08C26.94 11.65 26.79 11.09 26.37 10.84Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M19.97 16.65C19.48 16.65 19.08 17.04 19.07 17.54C19.06 18.04 19.46 18.45 19.96 18.45L24.19 18.52H24.21C24.7 18.52 25.1 18.13 25.11 17.63C25.12 17.13 24.72 16.72 24.23 16.72L20 16.65H19.97Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M25.27 22.9L21.56 24.94C21.12 25.18 20.96 25.73 21.2 26.16C21.36 26.46 21.67 26.63 21.99 26.63C22.14 26.63 22.28 26.6 22.42 26.52L26.13 24.48C26.57 24.24 26.73 23.69 26.49 23.26C26.26 22.82 25.71 22.66 25.27 22.9Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M27.32 32.59C27.47 32.68 27.63 32.72 27.79 32.72C28.09 32.72 28.39 32.57 28.56 32.29L30.78 28.68C31.04 28.26 30.91 27.7 30.48 27.44C30.06 27.18 29.5 27.31 29.24 27.74L27.02 31.35C26.76 31.77 26.9 32.33 27.32 32.59Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M35.0901 29.98L34.9501 34.21C34.9301 34.71 35.3201 35.12 35.8201 35.14C35.8301 35.14 35.8401 35.14 35.8501 35.14C36.3301 35.14 36.7301 34.76 36.7501 34.27L36.8901 30.04C36.9101 29.54 36.5201 29.13 36.0201 29.11C35.5401 29.06 35.1101 29.48 35.0901 29.98Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M41.66 27.82C41.22 28.05 41.05 28.6 41.28 29.04L43.25 32.79C43.41 33.1 43.72 33.27 44.05 33.27C44.19 33.27 44.33 33.24 44.47 33.17C44.91 32.94 45.08 32.39 44.85 31.95L42.88 28.2C42.64 27.76 42.1 27.59 41.66 27.82Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M45.91 23.9C45.64 24.32 45.77 24.88 46.18 25.14L49.75 27.42C49.9 27.52 50.07 27.56 50.23 27.56C50.53 27.56 50.82 27.41 50.99 27.14C51.26 26.72 51.13 26.17 50.72 25.9L47.15 23.62C46.74 23.36 46.18 23.48 45.91 23.9Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M47.6701 18.39C47.6501 18.89 48.0301 19.31 48.5201 19.33L52.7501 19.54C52.7701 19.54 52.7801 19.54 52.7901 19.54C53.2701 19.54 53.6601 19.17 53.6901 18.69C53.7101 18.19 53.3301 17.77 52.8401 17.75L48.6101 17.54C48.1401 17.51 47.7001 17.89 47.6701 18.39Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M50.65 9.61001L46.87 11.52C46.43 11.74 46.25 12.29 46.47 12.73C46.63 13.04 46.94 13.22 47.27 13.22C47.41 13.22 47.55 13.19 47.67 13.12L51.45 11.21C51.89 10.99 52.07 10.44 51.85 10C51.64 9.57001 51.09 9.39001 50.65 9.61001Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M45.96 3.37999C45.54 3.10999 44.99 3.21999 44.71 3.62999L42.37 7.15999C42.09 7.56999 42.21 8.12999 42.62 8.40999C42.77 8.50999 42.94 8.55999 43.12 8.55999C43.41 8.55999 43.7 8.41999 43.87 8.15999L46.21 4.62999C46.49 4.20999 46.38 3.64999 45.96 3.37999Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M71.6 72.21C71.83 72.21 72.06 72.12 72.24 71.95C72.59 71.6 72.59 71.03 72.24 70.68C68.35 66.79 64.24 63.4 60.04 60.42C63.87 59.06 67.83 57.87 71.82 56.88C72.3 56.76 72.6 56.27 72.48 55.79C72.36 55.31 71.87 55.01 71.39 55.13C66.91 56.24 62.48 57.59 58.21 59.15C55.94 57.62 53.65 56.21 51.36 54.91C57.93 52.43 64.79 50.49 71.78 49.13C72.27 49.04 72.59 48.56 72.49 48.08C72.39 47.59 71.92 47.27 71.43 47.37C63.83 48.84 56.39 51 49.3 53.77C46.69 52.36 44.08 51.09 41.5 49.94C53.54 44.96 64.51 42.73 71.73 41.73C72.22 41.66 72.57 41.21 72.5 40.72C72.43 40.23 71.98 39.88 71.49 39.95C63.85 41 52.05 43.42 39.22 48.95C36.22 47.69 33.28 46.6 30.45 45.66C51.82 35.69 71.46 34.75 71.66 34.74C72.16 34.72 72.54 34.3 72.52 33.8C72.5 33.3 72.08 32.9 71.58 32.94C71.37 32.95 50.33 33.95 27.95 44.85C13.03 40.21 1.68002 39.65 1.46002 39.64C0.950022 39.6 0.520022 40 0.500022 40.5C0.480022 41 0.860022 41.42 1.36002 41.44C1.77002 41.46 42.51 43.5 70.96 71.95C71.14 72.12 71.37 72.21 71.6 72.21Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M58.21 72.21C58.47 72.21 58.73 72.1 58.91 71.88C59.22 71.5 59.17 70.93 58.78 70.61C38.08 53.77 14.02 48.37 1.52002 46.64C1.03002 46.57 0.570018 46.92 0.510018 47.41C0.440018 47.9 0.790018 48.36 1.28002 48.42C13.59 50.12 37.28 55.44 57.64 72C57.8 72.14 58.01 72.21 58.21 72.21Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M43.09 72.21C43.39 72.21 43.67 72.07 43.85 71.8C44.12 71.38 44.0001 70.83 43.5801 70.56C28.2701 60.69 12.29 56.15 1.58005 54.07C1.09005 53.97 0.620048 54.29 0.520048 54.78C0.430048 55.27 0.750048 55.74 1.23005 55.83C11.79 57.88 27.54 62.35 42.6 72.07C42.75 72.16 42.92 72.21 43.09 72.21Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
            <path d="M1.61997 61.82C1.12997 61.7 0.649969 62 0.529969 62.48C0.409969 62.96 0.699969 63.45 1.18997 63.57C9.63997 65.66 17.7 68.56 25.16 72.19C25.29 72.25 25.42 72.28 25.55 72.28C25.88 72.28 26.2 72.09 26.36 71.78C26.58 71.33 26.39 70.79 25.94 70.58C18.37 66.88 10.19 63.94 1.61997 61.82Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
          </g>
          <defs>
            <clipPath id="clip0">
              <rect width="73" height="72.78" fill="white"></rect>
            </clipPath>
          </defs>
        </svg>
        <p class="separanda_text">Retiro<br>de <?php echo get_post_meta($post->ID, 'F_días_de_retiro', true); ?></p>
      </div>
      <div class="separanda_item">
        <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0)">
            <path d="M34.69 0.497803C33.93 0.497803 33.32 1.1078 33.32 1.8678V33.3278H1.87C1.11 33.3278 0.5 33.9378 0.5 34.6978C0.5 35.4578 1.11 36.0678 1.87 36.0678H33.33V67.5278C33.33 68.2878 33.94 68.8978 34.7 68.8978C35.46 68.8978 36.07 68.2878 36.07 67.5278V36.0678H67.53C68.29 36.0678 68.9 35.4578 68.9 34.6978C68.9 33.9378 68.29 33.3278 67.53 33.3278H36.06V1.8678C36.06 1.1078 35.45 0.497803 34.69 0.497803Z" fill="currentColor" stroke="currentColor" stroke-miterlimit="10"></path>
          </g>
          <defs>
            <clipPath id="clip0">
              <rect width="69.39" height="69.39" fill="white"></rect>
            </clipPath>
          </defs>
        </svg>
      </div>
      <div class="separanda_item">
        <svg width="90" height="71" viewBox="0 0 90 71" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="distance_training">
            <g clip-path="url(#clip0)">
              <path d="M83.78 0H5.95C2.7 0 0 2.7 0 5.95V55.68C0 58.92 2.7 61.63 5.95 61.63H37.73C37.41 64.12 36.43 67.04 32.97 67.04H28.65C27.79 67.04 27.03 67.8 27.03 68.66C27.03 69.52 27.79 70.28 28.65 70.28H61.08C61.94 70.28 62.7 69.52 62.7 68.66C62.7 67.8 61.94 67.04 61.08 67.04H56.76C53.3 67.04 52.22 64.12 52 61.63H83.78C87.02 61.63 89.73 58.93 89.73 55.68V5.95C89.73 2.7 87.02 0 83.78 0ZM5.95 3.24H83.79C85.3 3.24 86.49 4.43 86.49 5.94V50.8H3.24V5.95C3.24 4.43 4.43 3.24 5.95 3.24ZM50.48 67.02H39.24C40.21 65.61 40.75 63.78 40.97 61.61H48.75C48.97 63.78 49.51 65.62 50.48 67.02ZM83.78 58.38H5.95C4.44 58.38 3.25 57.19 3.25 55.68V54.06H86.49V55.68C86.48 57.19 85.29 58.38 83.78 58.38Z" fill="currentColor"></path>
              <path d="M15.13 37.3H36.75C37.61 37.3 38.37 36.54 38.37 35.68V18.38C38.37 17.52 37.61 16.76 36.75 16.76H15.13C14.27 16.76 13.51 17.52 13.51 18.38V35.68C13.51 36.54 14.27 37.3 15.13 37.3ZM16.76 20H35.14V34.05H16.76V20Z" fill="currentColor"></path>
              <path d="M44.86 20H74.59C75.45 20 76.21 19.24 76.21 18.38C76.21 17.52 75.45 16.76 74.59 16.76H44.86C44 16.76 43.24 17.52 43.24 18.38C43.24 19.24 44 20 44.86 20Z" fill="currentColor"></path>
              <path d="M44.86 28.65H63.78C64.64 28.65 65.4 27.89 65.4 27.03C65.4 26.17 64.64 25.41 63.78 25.41H44.86C44 25.41 43.24 26.17 43.24 27.03C43.24 27.89 44 28.65 44.86 28.65Z" fill="currentColor"></path>
              <path d="M44.86 37.3H69.18C70.04 37.3 70.8 36.54 70.8 35.68C70.8 34.82 70.04 34.06 69.18 34.06H44.86C44 34.06 43.24 34.82 43.24 35.68C43.24 36.54 44 37.3 44.86 37.3Z" fill="currentColor"></path>
            </g>
            <defs>
              <clipPath id="clip0">
                <rect width="89.73" height="70.27" fill="white"></rect>
              </clipPath>
            </defs>
          </g>
        </svg>
        <p class="separanda_text"><strong>8 semanas de</strong><br>formación a distancia</p>
      </div>
    </section>
    <section class="showcase2">
      <div class="gali">
        <img class="gali_img" src="https://picsum.photos/300" alt="">
        <img class="gali_img" src="https://picsum.photos/301" alt="">
        <img class="gali_img" src="https://picsum.photos/302" alt="">
        <img class="gali_img" src="https://picsum.photos/303" alt="">
      </div>
      <div class="pista">
        <h5 class="pista_title">Programa Orientativo</h5>

        <?php $i = 1;
        while(true){
          if(get_post_meta(get_the_ID(), 'G_programa_'.$i.'_text', true)){ ?>
            <div class="pista_group">
              <p class="pista_txt pista_time font_size_6"><?php echo get_post_meta(get_the_ID(), 'G_programa_'.$i.'_time', true); ?></p>
              <p class="pista_txt pista_text font_size_6"><?php echo get_post_meta(get_the_ID(), 'G_programa_'.$i.'_text', true); ?></p>
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
    <section class="col_2_block">
      <h3 class="col_2_block_title font_size_3"><?php echo get_post_meta(get_the_ID(), 'H_segunda_descripcion_titulo', true); ?></h3>
      <div class="col_2_block_col">
        <p class="col_2_bloct_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'I_segunda_descripcion_texto_1', true); ?></p>
        <p class="col_2_bloct_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'I_segunda_descripcion_texto_2', true); ?></p>
      </div>
      <div class="col_2_block_col">
        <p class="col_2_bloct_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'I_segunda_descripcion_texto_3', true); ?></p>
        <p class="col_2_bloct_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'I_segunda_descripcion_texto_4', true); ?></p>
      </div>
    </section>



    <section class="showcase3">
      <h3 class="showcase_title font_size_3 simple_title hosi_color_85AFCA">Herramientas que te servirán para...</h3>


      <div class="hosi hosi_color_85AFCA">
        <?php include get_template_directory().'/assets/shield.svg'; ?>
        <p class="hosi_txt font_size_5">Reducir estrés y ansiedad.</p>
      </div>

      <div class="hosi hosi_color_85AFCA">
        <?php include get_template_directory().'/assets/emotional_intelligence.svg'; ?>
        <p class="hosi_txt font_size_5">
          Aumentar la inteligencia emocional.
        </p>
      </div>

      <div class="hosi hosi_color_85AFCA">
        <?php include get_template_directory().'/assets/sleepy_moon.svg'; ?>
        <p class="hosi_txt font_size_5">
          Crear un sueño más profundo y reparador.
        </p>
      </div>

      <div class="hosi hosi_color_85AFCA">
        <?php include get_template_directory().'/assets/map_compose.svg'; ?>
        <p class="hosi_txt font_size_5">
          Ver “the big picture” para poder apreciar mejor los detalles.
        </p>
      </div>

      <div class="hosi hosi_color_85AFCA">
        <?php include get_template_directory().'/assets/listening_ear.svg'; ?>
        <p class="hosi_txt font_size_5">
          Mejorar la escucha activa, la concentración y creatividad.
        </p>
      </div>

      <div class="hosi hosi_color_85AFCA">
        <?php include get_template_directory().'/assets/perceptive_brain.svg'; ?>
        <p class="hosi_txt font_size_5">
          Crear una percepción flexible para mejorar la respuesta ante diferentes situaciones.
        </p>
      </div>

      <div class="hosi hosi_color_85AFCA">
        <?php include get_template_directory().'/assets/opportunity.svg'; ?>
        <p class="hosi_txt font_size_5">
          Afrontar el cambio y aprovechar las oportunidades que nos brinda.
        </p>
      </div>

      <div class="hosi hosi_color_85AFCA">
        <?php include get_template_directory().'/assets/relationship.svg'; ?>
        <p class="hosi_txt font_size_5">
          Mejorar las relaciones interpersonales.
        </p>
      </div>

      <div class="hosi hosi_color_85AFCA">
        <?php include get_template_directory().'/assets/happy_brain.svg'; ?>
        <p class="hosi_txt font_size_5">
          Hacernos más resistentes a la depresión.
        </p>
      </div>
    </section>



    <section class="copa">
      <img class="copa_img" src="https://picsum.photos/400" alt="">
      <div class="copa_interaction_container">
        <h5 class="copa_title">Retiro en Cantabria 3 días<br><?php the_title(); ?></h5>
        <p class="copa_label">FECHAS</p>

        <div class="copa_select_container">
          <select class="copa_select" name="" id="">
            <option value="">Elige una opcion</option>
          </select>
          <svg class="copa_select_arrow" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <g id="arrow_select">
              <path d="M0 0h24v24H0V0z" fill="white"/>
              <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" fill="currentColor"/>
            </g>
          </svg>
        </div>

        <?php
        // $product = wc_get_product();
        if ( $product->is_type( 'variable' ) AND !$is_out_of_stock ) {
          $variations = $product->get_available_variations();

          // THIS BLOCK DEFINES THE ARRAY: "$myAttributes"
          // WE WILL USE THIS ARRAY LATER
          $myAttributes = array();
          foreach ($variations as $key => $value) {
            foreach ($value['attributes'] as $j => $var) {
              if ( ! array_key_exists ( $j, $myAttributes ) ) {
                $myAttributes[$j] = array($var => array($value['variation_id']));
              } else {
                $myAttributes[$j][$var][] = $value['variation_id'];
              }
            }
          }
          // var_dump($myAttributes);

          $first = true;
          foreach ($myAttributes as $key => $value) {
            $slug = preg_replace("/attribute_/i", "", $key);
            $name = ucfirst($slug);
            ?>

            <div class="SelectBox copa_select" tabindex="1" id="selectBox<?php echo $name; ?>">
              <div class="selectBoxButton" onclick="altClassFromSelector('focus', '#selectBox<?php echo $slug; ?>')">
                <!-- <p class="selectBoxPlaceholder"><?php // _e('elige una opcion', 'lt_domain'); ?></p> -->
                <p class="selectBoxPlaceholder"><?php echo $name; ?></p>
                <p class="selectBoxCurrent" id="selectBoxCurrent<?php echo $name; ?>"></p>
              </div>
              <div class="selectBoxList">
                <label for="nul<?php echo $name; ?>" class="selectBoxOption">
                  <input
                  class="selectBoxInput"
                  id="nul<?php echo $name; ?>"
                  type="radio"
                  data-ids=""
                  name="filter_<?php echo $slug; ?>"
                  onclick="selectBoxControler('','#selectBox<?php echo $name; ?>','#selectBoxCurrent<?php echo $name; ?>')"
                  value="0"
                  checked
                  >
                  <!-- <span class="checkmark"></span> -->
                  <p class="colrOptP"></p>
                </label>
                <?php foreach ($value as $i => $var) { ?>
                  <!-- <p class="colrOptP"><?php // var_dump($var['attributes']); ?></p> -->
                  <?php // foreach ($value['options'] as $key => $var) { ?>
                    <label for="<?php echo $i; ?>" class="selectBoxOption<?php if(!$first){echo ' hidden';} ?>">
                      <input
                      class="selectBoxInput"
                      id="<?php echo $i; ?>"
                      data-ids="<?php
                      foreach ($var as $j => $x) {
                        echo $x;
                        if($j<count($var)-1){ echo ', '; }
                      }
                      ?>"
                      type="radio"
                      name="filter_<?php echo $slug; ?>"
                      onclick="selectBoxControler('<?php echo $i; ?>', '#selectBox<?php echo $name; ?>', '#selectBoxCurrent<?php echo $name; ?>')"
                      value="<?php echo $i; ?>"
                      <?php // if($_GET['filter_'.$term->slug]==$var->slug){echo "selected";} ?>
                      >
                      <!-- <span class="checkmark"></span> -->
                      <!-- <p class="colrOptP"><?php // var_dump($var[0]); ?></p> -->
                      <p class="colrOptP"><?php echo $i; ?></p>
                    </label>
                  <?php } ?>
                </div>
              </div>
              <?php $first = false; ?>
            <?php } ?>
          <?php } ?>



          <p class="copa_price font_size_5" id="singleSidePrice"><?php echo $product->get_price_html(); ?></p>

          <div class="cuantos Cuantos">
            <button class="cuantosBtn cuantosMins">-</button>
            <input class="cuantosQnt cuantosQantity" type="text" value="1" min="1">
            <button class="cuantosBtn cuantosPlus">+</button>
          </div>

          <button
          class="btn"
          id="myAddToCart"
          data-product-id="<?php echo get_the_id(); ?>"
          data-product-type="<?php echo $product->get_type(); ?>"
          data-quantity="1"
          data-variation-description=""
          data-buy="later">
          Añadir a la cesta
        </button>

        <p class="copa_mas">Más información <a class="copa_mas_link" href="#">CLICA AQUÍ</a></p>
      </div>
    </section>

  <?php } ?>
    <section class="col_4_block">
      <?php
      $posts = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 4
      )
    );
    ?>
    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

      <?php sqare_card(); ?>

    <?php endwhile; wp_reset_query(); ?>
  </section>



  <?php get_footer(); ?>
