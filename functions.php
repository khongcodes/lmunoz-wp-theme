<?php

// GET CUSTOMIZER

require_once(get_template_directory() . "/inc/customizer-defaults.php");


require_once(get_template_directory(). "/inc/customizer.php");

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

      /////////////////////////////////////
      // REGISTER MENU LOCATIONS
      register_nav_menu( "primary", __("Primary Menu", "lmunoz-wp-theme"));


      // Enable support for post thumbnails; featured images
      // https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/      
      add_theme_support( "post-thumbnails" );


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
// LOAD IN GOOGLE FONT SUPPORT

add_action( "wp_enqueue_scripts", function() use ( $lm_customizer_defaults ) {
   lmunoz_scripts_styles($lm_customizer_defaults);
});
function lmunoz_scripts_styles($customizer_defaults) {
   wp_enqueue_style( "lmunoz-fonts", lmunoz_fonts_url($customizer_defaults), array(), null );
}

function lmunoz_fonts_url($customizer_defaults) {
   $fonts_url = '';

   $raw_font_arr = array(
      get_theme_mod( "set_text_mainFont", $customizer_defaults["text_mainFont"] ),
      get_theme_mod( "set_text_navFont", $customizer_defaults["text_navFont"] )
   );
   $raw_weight_arr = array(
      get_theme_mod( "set_text_mainWeight", $customizer_defaults["text_mainWeight"] ),
      get_theme_mod( "set_text_navWeight", $customizer_defaults["text_navWeight"] )
   );
   $raw_italic_arr = array(
      get_theme_mod( "set_text_mainItalics", $customizer_defaults["text_mainItalics"] ),
      get_theme_mod( "set_text_navItalics", $customizer_defaults["text_navItalics"] )
   );


   /* Translators: If there are characters in your language that are not
   * supported by Poppins, translate this to 'off'. Do not translate
   * into your own language.
   */
  $mainFont_translation_opt = _x( 'on', 'main font (' . $raw_font_arr[0] . ') : on or off', 'theme-slug' ); 
  $navFont_translation_opt = _x( 'on', 'nav font (' . $raw_font_arr[1] . ') : on or off', 'theme-slug' ); 

   $fonts_weights_arr = array();
   $key_count = count($raw_font_arr);

   for ($i=0; $i < $key_count; $i++) {
      $this_font = $raw_font_arr[$i];
      $this_weight = $raw_weight_arr[$i];
      if ($raw_italic_arr[$i]) {
         $this_weight .= "," . $this_weight . "italic";
      }

      if ( array_key_exists($this_font, $fonts_weights_arr) ) {
         if ( !in_array($this_weight, $fonts_weights_arr[$this_font]) ) {
            $fonts_weights_arr[$this_font][]=$this_weight;
         }
         asort($fonts_weights_arr[$this_font]);
      } else {
         $fonts_weights_arr[$this_font] = array( $this_weight );
     }
   }

   $font_families = array();

   foreach($fonts_weights_arr as $font => $weight_arr) {
      $font_families[] = $font . ":" . implode(",", $weight_arr);
  }

   // COMBINE $font_families with '|'
   // add subset parameter that determines which character sets to use
   $query_args = array(
      'family' => urlencode( implode( '|', $font_families ) ),
      "subset" => urlencode( "latin,latin-ext" )
   );

   $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
   
   // file_put_contents("mylog.log", $fonts_url, 0);

   return $fonts_url;
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




