<?php

require get_template_directory() . "/inc/customizer-defaults.php";
function retrieve_lm_customizer_defaults() {
   return $lm_customizer_defaults;
}

require get_template_directory() . "/inc/customizer.php";

if ( ! function_exists( "lmunoz_theme_setup" ) ) :
   /**
   *  Sets up theme defaults and registers support for various WP features
   * 
   * Note that this function is hooked into after_setup_theme hook, which runs
   * before the init hook. The init hook is too late for some features, such as indicating 
   * support post thumbnails
   */
   function lmunoz_theme_setup() {
      
      // Make theme available for translation
      // Translations can be placed in the /languages/ directory.
      // load_theme_textdomain( "my-first-theme", get_template_directory() . "/languages" );

      // Add support for navigation menu
      register_nav_menu( "primary", __("Primary Menu", "lmunoz-wp-theme"));

      // Enable support for post thumbnails; featured images
      // https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/      
      // add_theme_support( "post-thumbnails" );

      // Enable support for following post formats:
      // Aside, gallery, image
      // add_theme_support( "post-formats", array ( "aside", "gallery", "image" ) );
      

      /////////////////////////////////////
      // CUSTOM HEADER
      $custom_header_args = array(
         "default-image"      => get_template_directory_uri() . "/assets/images/header_placeholder.png",
         "header-text"        => false,
         "default-text-color" => "fff",
         "width"              => 603,
         "height"             => 107,
         "flex-width"         => true,
         "flex-height"        => true,
         "uploads"            => true,
         // "wp-head-callback"         => "wphead_cb",
         // "admin-head-callback"      => "adminhead_cb",
         // "admin-preview-callback"   => "adminpreview_cb"
      );
      add_theme_support( "custom-header", $custom_header_args );
   }
endif; // my_first_theme_setup()
add_action( "after_setup_theme", "lmunoz_theme_setup" );


/////////////////////////////////////
// LOAD IN STYLESHEETS

add_action( 'wp_enqueue_scripts', 'mat_assets');
function mat_assets() {
   wp_enqueue_style( 'global', get_stylesheet_uri() );
}


/////////////////////////////////////
// LOAD IN JAVASCRIPT

add_action( 'wp_enqueue_scripts', 'load_mobile_menu_js');
function load_mobile_menu_js() {
   wp_enqueue_script("mobile-menu-function", get_template_directory_uri() . "/assets/js/mobile-menu.js");
}


/////////////////////////////////////
// REGISTER FOOTER SIDEBAR

function register_my_sidebars() {
   register_sidebar( array(
      "name"            => __( "Footer Sidebar", "lmunoz-wp-theme" ),
      "description"     => __( "Content to place in the footer" ),
      "id"              => "footer-sidebar",
      "before_widget"   => '<div id="%1$s" class="widget %2$s">',
      "after_widget"    => "</div>",
      "before_title"    => '<h3 class="widget-title">',
      "after_title"     => "</h3>"
   ) );
}
add_action( "widgets_init", "register_my_sidebars" );




