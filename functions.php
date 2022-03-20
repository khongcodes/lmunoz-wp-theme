<?php

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
   wp_enqueue_style( "wp-color-picker" );
}


/////////////////////////////////////
// LOAD IN JAVASCRIPT

add_action( 'wp_enqueue_scripts', 'load_mobile_menu_js');
function load_mobile_menu_js() {
   wp_enqueue_script("mobile-menu-function", get_template_directory_uri() . "/assets/js/mobile-menu.js");
}

// add_action( 'wp_enqueue_scripts', 'load_post_thumbnail_grid_resizer_js');
// function load_post_thumbnail_grid_resizer_js() {
//    wp_enqueue_script("post-thumbnail-grid-resizer-function", get_template_directory_uri() . "/assets/js/post-thumbnail-grid-resizer.js");
// }

/////////////////////////////////////
// LOAD IN CUSTOMIZER & STYLESHEET

require_once(get_template_directory() . "/inc/customizer-defaults.php");
require_once(get_template_directory(). "/inc/customizer.php");
require_once(get_template_directory(). "/inc/customizer-stylesheet.php");

add_action( "customize_register", function( $wp_customize ) use ( $lm_customizer_defaults ) {
   all_customizer_settings( $wp_customize, $lm_customizer_defaults );
});
add_action( "wp_head", function() use ( $lm_customizer_defaults ) {
   lmunoz_customizer_generate_stylesheet( $lm_customizer_defaults );
} );


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
      
      // CHECK IF JUST REQUESTING GLOBAL DEFAULT
      if ($customizer_defaults["text_mainFont"] == $this_font) {
         continue;
      }

      // CHECK FOR ITALIC
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


/////////////////////////////////////
// FUNCTION FOR QUERYING POSTS BY CATEGORY

function wpb_postsbycategory($category_name) {
   //  The Query
   $the_query = new WP_Query( array(
      "category_name" => $category_name
   ) );

   $the_posts_html = "";
   //  The Loop
   if ( $the_query->have_posts() ) {
      // $the_posts_html .= "<ul class='postsbycategory widget_recent_entries'>";
      while ( $the_query->have_posts() ) {
            $the_query->the_post();
            if ( has_post_thumbnail() ) {
               
               $the_posts_html .= "<div class='link-container'>";
               $the_posts_html .= "<a href='" . get_the_permalink() . "' rel='bookmark'>";
               $the_posts_html .= "<div class='thumbnail-container'>";
               
               $the_posts_html .= "<div class='title-overlay'>";
               $the_posts_html .= "<h3>" . get_the_title( ) . "</h3>";
               $the_posts_html .= "</div>";
               
               $the_posts_html .=  get_the_post_thumbnail( get_the_ID(  ) );
               
               $the_posts_html .= "</div>";
               $the_posts_html .= "</a>";
               $the_posts_html .= "</div>";
               
            } else {
               // if no featured image is found
               $the_posts_html .= "<li><a href='" . get_the_permalink() . "' rel='bookmark'>" . get_the_title() . "</a></li>";
            }
      }
      wp_reset_postdata(  );
      $the_posts_html .= "</ul>";
   } else {
      // no posts found
   }

   return $the_posts_html;

   
}

add_shortcode( "categoryposts", "wpb_postsbycategory" );



/////////////////////////////////////
// FUNCTION FOR PASSING VARIABLE TO POST THUMBNAIL GRID SCRIPT


function register_and_inject_postthumbnailgrid_script( $customizer_defaults ) {
   
   if ( is_single() || is_category() ) {

      wp_register_script(
         "postthumbgrid-script",
         get_template_directory_uri() . "/assets/js/post-thumbnail-grid-resizer.js",
         array(), 1.0, true
      );
      wp_enqueue_script( "postthumbgrid-script" );

      $user_params = array(
         "targetColNum" => get_theme_mod( "set_postthumbgrid_colnum_desktop", $customizer_defaults["postthumbgrid_colnum_desktop"] ),
         "colGapWidth" => get_theme_mod( "set_postthumbgrid_colgap", $customizer_defaults["postthumbgrid_colgap"] ),
         "totalDesktopPadding" => ( get_theme_mod( "set_padding_site_desktop_right", $customizer_defaults["padding_site_desktop_right"] ) + get_theme_mod( "set_padding_site_desktop_left", $customizer_defaults["padding_site_desktop_left"] ) )
      );

      wp_localize_script( "postthumbgrid-script", "userParams", $user_params );
   }
}

add_action( "wp_enqueue_scripts", function() use ( $lm_customizer_defaults ) {
   register_and_inject_postthumbnailgrid_script( $lm_customizer_defaults );
});