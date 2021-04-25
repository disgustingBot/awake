<?php

require_once 'inc/custom_posts.php';
require_once 'inc/form_handler.php';
require_once 'inc/ajax.php';
require_once 'inc/new_ajax.php';
require_once 'inc/customize.php';

include __DIR__ . '/inc/select_box.php';

if(!is_admin()){
  require_once 'inc/multi_cards.php';
}


function lattte_setup(){
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
  wp_enqueue_script('modules', get_theme_file_uri('/js/modules.js'), NULL, microtime(), true);

  // TOOOODO ESTO ES PARA AJAX
	global $wp_query;
	// In most cases it is already included on the page and this line can be removed
	wp_enqueue_script('jquery');
	// register our main script but do not enqueue it yet
	wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/js/myloadmore.js', array('jquery') );

	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages,
		'first_page' => get_pagenum_link(1) // here it is
	) );

	wp_enqueue_script( 'my_loadmore' );
  // FIN DE PARA AJAX





  // register our main script but do not enqueue it yet
  wp_register_script( 'main', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), 1.0, true );
  // now the most interesting part
  // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
  // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
  wp_localize_script( 'main', 'lt_data', array(
    'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
    // 'query' => json_encode( $wp_query->query_vars ), // everything about your loop is here
    'homeurl' => site_url(),
    'front_page' => is_front_page(),
  ) );
  wp_localize_script( 'main', 'filters', array(
    'query' => json_encode( $wp_query->query_vars ), // everything about your loop is here
  ) );
  wp_enqueue_script( 'main' );



}
add_action('wp_enqueue_scripts', 'lattte_setup');

// Adding Theme Support

function gp_init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
  );
  add_theme_support( 'woocommerce' );
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
}
add_action('after_setup_theme', 'gp_init');


// function my_custom_css_output() {
//   echo '<style type="text/css" id="custom-theme-css">' .
//   get_theme_mod( 'custom_theme_css', '' ) . '</style>';
//   echo '<style type="text/css" id="custom-plugin-css">' .
//   get_option( 'custom_plugin_css', '' ) . '</style>';
// }
// add_action( 'wp_head', 'my_custom_css_output');







function get_img_url_by_slug($slug){
  return wp_get_attachment_url( get_img_id_by_slug($slug));
}

function get_img_id_by_slug( $slug ) {
  $args = array(
    'post_type' => 'attachment',
    'name' => sanitize_title($slug),
    'posts_per_page' => 1,
    'post_status' => 'inherit',
  );
  $_header = get_posts( $args );
  $header = $_header ? array_pop($_header) : null;
  return $header ? $header->ID : '';
}





// this removes the "Archive" word from the archive title in the archive page
add_filter('get_the_archive_title',function($title){
  if(is_category()){$title=single_cat_title('',false);
  }elseif(is_tag()){$title=single_tag_title('',false);
  }elseif(is_author()){$title='<span class="vcard">'.get_the_author().'</span>';
  }return $title;
});






function excerpt($charNumber){
  if(!$charNumber){$charNumber=100;}
  $excerpt = get_the_excerpt();
  if(strlen($excerpt)<=$charNumber){return $excerpt;}else{
    $excerpt = substr($excerpt, 0, $charNumber);
    $result  = substr($excerpt, 0, strrpos($excerpt, ' '));
    $result  = $result . '...';
    // return var_dump($excerpt);
    return $result;
  }
}









function register_menus() {
  register_nav_menu('header_left',__( 'Header Left' ));
  register_nav_menu('header_right',__( 'Header Right' ));
  register_nav_menu('footer_nav',__( 'Footer' ));
  // register_nav_menu('navBarMobile',__( 'Header Mobile' ));
  // register_nav_menu('contactMenu',__( 'Contact Menu' ));
  // add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'register_menus' );



















function get_random_color(){
  $colors = ['#85AFCA', '#EDC06D', '#98C9AC', '#E9AD94'];
  // echo array_rand ( $colors );
  return $colors[array_rand ( $colors )];
}
























add_action( 'wp_ajax_nopriv_woocommerce_add_variation_to_cart', 'woocommerce_add_variation_to_cart' );
add_action( 'wp_ajax_woocommerce_add_variation_to_cart', 'woocommerce_add_variation_to_cart' );

function woocommerce_add_variation_to_cart() {
	$respuesta = array();
	// echo WC()->cart->get_cart_contents_count();

  // ob_start();

  $product_id        = apply_filters( 'woocommerce_add_to_cart_product_id', absint( $_POST['product_id'] ) );
  $quantity          = empty( $_POST['quantity'] ) ? 1 : wc_stock_amount( $_POST['quantity'] );
  $variation_id      = isset( $_POST['variation_id'] ) ? absint( $_POST['variation_id'] ) : '';
  // $variations        =  ! empty( $_POST['variation'] ) ? (array) $_POST['variation'] : '';
  // $variations1        = $_POST['variation'];
  // $variations2        = stripslashes($_POST['variation']);
  $variations        = (array) json_decode(stripslashes($_POST['variation']));

  $passed_validation = apply_filters( 'woocommerce_add_to_cart_validation', true, $product_id, $quantity, $variation_id, $variations, $cart_item_data );
	// echo WC()->cart->get_cart_contents_count();

  $respuesta['quant1'] = $_POST['quantity'];
  $respuesta['quant2'] = $quantity;

  $respuesta['variations'] = $variations;

  if ( $passed_validation ) {

    if(WC()->cart->add_to_cart( $product_id, $quantity, $variation_id, $variations )){

      do_action( 'woocommerce_ajax_added_to_cart', $product_id );

      if ( get_option( 'woocommerce_cart_redirect_after_add' ) == 'yes' ) {
        wc_add_to_cart_message( $product_id );
      }

      // Return fragments
      // WC_AJAX::get_refreshed_fragments();
      // echo WC()->cart->get_cart_contents_count();
    } else {
      $respuesta['error'] = 'add to cart';

    }


  } else {

        // If there was an error adding to the cart, redirect to the product page to show any errors
        // $data = array(
        //     'error' => true,
        //     'product_url' => apply_filters( 'woocommerce_cart_redirect_after_error', get_permalink( $product_id ), $product_id )
        // );
        //
        // wp_send_json( $data );
    $respuesta['error'] = 'validation';
	}

	// echo WC()->cart->get_cart_contents_count();
	$respuesta['count'] = WC()->cart->get_cart_contents_count();

	echo wp_json_encode($respuesta);
	exit();
}





























add_action('admin_init', 'my_general_section');
function my_general_section() {

    add_settings_section(
      'custom_settings', // Section ID
      'Custom Settings', // Section Title
      'my_section_options_callback', // Callback
      'general' // What Page?  This makes the section show up on the General Settings Page
    );

    add_settings_field( // Option 1
      'contact_form_to', // Option ID
      'Recive messages from contact form here', // Label
      'my_textbox_callback', // !important - This is where the args go!
      'general', // Page it will be displayed (General Settings)
      'custom_settings', // Name of our section
      array( // The $args
        'contact_form_to' // Should match Option ID
      )
    );

    register_setting('general','contact_form_to', 'esc_attr');
    // register_setting('general','option_2', 'esc_attr');
}

function my_section_options_callback() { // Section Callback
    echo '<p>A little message on editing info</p>';
}

function my_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}













//Second solution : two or more files.
//If you're using a child theme you could use:
// get_stylesheet_directory_uri() instead of get_template_directory_uri()
add_action( 'admin_enqueue_scripts', 'load_admin_styles' );
function load_admin_styles() {
  // wp_enqueue_style( 'admin_css_foo', get_template_directory_uri() . '/css/backoffice.css', false, '1.0.0' );
}



add_filter( 'template_include', 'custom_woocommerce_templates', 50, 1 );
function custom_woocommerce_templates( $template ) {
  if ( is_singular('product') ) {
    global $post;
    $slug = $post->post_name;
    $located = locate_template( "woocommerce/single-product-$slug.php" );
    if(!empty( $located )){
      $template = get_stylesheet_directory() . "/woocommerce/single-product-$slug.php";
    }
  }

  if ( is_tax('product_cat') ){
    global $term;
    $located = locate_template( "woocommerce/taxonomy-product_cat-$term.php" );
    if(!empty( $located )){
      $template = get_stylesheet_directory() . "/woocommerce/taxonomy-product_cat-$term.php";
    }
  }
  return $template;
}


// THIS CHANGES THE "REMEMBER ME" TEXT ON THE COMMENT FORM
add_filter( 'comment_form_default_fields', 'wc_comment_form_change_cookies' );
function wc_comment_form_change_cookies( $fields ) {
	$commenter = wp_get_current_commenter();

	$consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

	$fields['cookies'] = '<div class="comment-form-cookies-consent acceptance_consent_label"><input required id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
					 '<label for="wp-comment-cookies-consent">'.__('Acepto recordar mi nombre y mi email para poder comentar con los mismos datos nuevamente.*', 'textdomain').'</label></div>'.'<div class="comment-form-cookies-consent acceptance_consent_label"><input required id="wp-comment-terms-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"/>' .
         					 '<label for="wp-comment-terms-consent">'.__('Acepto los <a class="consent_link" href="' . get_site_url() . '/terminos-condiciones">Términos y condiciones</a> generales del sitio, y que mis datos sean tratados con el fin de dar soporte a mi consulta/comentario.*', 'textdomain').'</label></div>';
	return $fields;
}



?>
