<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Lora:ital@0;1&display=swap" rel="stylesheet">

  <style>
  :root{
    --primary_color:<?php echo get_option( 'primary_color', '' ); ?>;
    --secondary_color:<?php echo get_option( 'secondary_color', '' ); ?>;

    /* --font_size_1:<?php // echo get_option( 'font_size_1_number', '' ) . get_option( 'font_size_1_unit', '' ); ?>; */
    --font_size_1:calc(<?php echo get_option( 'font_size_1_number', '' ); ?> * 0.8);
    --font_size_2:calc(<?php echo get_option( 'font_size_2_number', '' ); ?> * 0.8);
    --font_size_3:calc(<?php echo get_option( 'font_size_3_number', '' ); ?> * 0.8);
    --font_size_4:calc(<?php echo get_option( 'font_size_4_number', '' ); ?> * 0.8);
    --font_size_5:calc(<?php echo get_option( 'font_size_5_number', '' ); ?> * 0.8);
    --font_size_6:calc(<?php echo get_option( 'font_size_6_number', '' ); ?> * 0.8);
    --font_size_7:calc(<?php echo get_option( 'font_size_7_number', '' ); ?> * 0.8);
    --font_size_8:calc(<?php echo get_option( 'font_size_8_number', '' ); ?> * 0.8);
  }

  @media screen and (min-width: 768px) {
    :root {
      --font_size_1:<?php echo get_option( 'font_size_1_number', '' ); ?>;
      --font_size_2:<?php echo get_option( 'font_size_2_number', '' ); ?>;
      --font_size_3:<?php echo get_option( 'font_size_3_number', '' ); ?>;
      --font_size_4:<?php echo get_option( 'font_size_4_number', '' ); ?>;
      --font_size_5:<?php echo get_option( 'font_size_5_number', '' ); ?>;
      --font_size_6:<?php echo get_option( 'font_size_6_number', '' ); ?>;
      --font_size_7:<?php echo get_option( 'font_size_7_number', '' ); ?>;
      --font_size_8:<?php echo get_option( 'font_size_8_number', '' ); ?>;
    }
  }


  </style>
  <!-- Google ReCaptcha -->
  <?php $site = '6Lc_FccaAAAAAI3tlaOosytKvo86fA7kl4wtdCg0'; ?>
  <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $site; ?>"></script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<view id="load" class="load" style="display:none"><div class="circle"></div></view>


  	<div class="alert" id="alert">
  		<button class="btn_close" onclick="altClassFromSelector('visible', '.alert')">
  			<div class="btn_close_bar"></div>
  			<div class="btn_close_bar"></div>
  		</button>
  		<h4 class="alert_title">alert title</h4>
  		<p class="alert_txt">alert text</p>
  	</div>

  <?php include 'assets/all_icons.php'; ?>
  <header class="header Obse" id="header" data-observe=".hero">
    <a class="logo rowcol1" href="<?php echo get_site_url(); ?>">
      <svg class="logo_img" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 101 104">
        <use xlink:href="#logo"></use>
      </svg>
    </a>
    <div class="nav_menu rowcol1">
      <?php
      $args = array(
        'theme_location' => 'header_left',
        'depth' => 0,
        'container'	=> false,
        'fallback_cb' => false,
        'menu_class' => 'nav_bar nav_bar_left',
      );
      wp_nav_menu($args);

      $args = array(
        'theme_location' => 'header_right',
        'depth' => 0,
        'container'	=> false,
        'fallback_cb' => false,
        'menu_class' => 'nav_bar nav_bar_right',
      );
      wp_nav_menu($args);
      ?>
      <button class="burger" onclick="altClassFromSelector('mobile_menu_active', '#header')">
        <div class="burgerBar"></div>
        <div class="burgerBar"></div>
        <div class="burgerBar"></div>
      </button>
    </div>

    <div class="under_soc">
      <a class="under_soc_element" href="https://www.facebook.com/esfacilsisabescomo/" target="_blank">
        <svg class="under_soc_svg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
      </a>
      <a class="under_soc_element" href="https://www.youtube.com/channel/UC1wC9YlN95TMRkOpwyWaSQQ" target="_blank">
        <svg class="under_soc_svg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
      </a>
      <a class="under_soc_element" href="https://www.linkedin.com/company/es-f%C3%A1cil-si-sabes-c%C3%B3mo/?originalSubdomain=es" target="_blank">
        <svg class="under_soc_svg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
      </a>
      <a class="under_soc_element" href="https://www.instagram.com/esfacilsisabescomo/" target="_blank">
        <svg class="under_soc_svg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
      </a>
    </div>
  </header>
