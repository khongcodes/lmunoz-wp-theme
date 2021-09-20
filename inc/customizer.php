<?php

function color_section( $wp_customize ) {
   $wp_customize -> add_section("sec_colors", array(
      "title" => "Colors",
      "description" => "Set website colors here.",
      "priority" => 61
   ));

   $wp_customize -> add_setting("set_color_background", array(
      "type" => "theme_mod",
      "default" => "#FFFFFF",
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control("ctrl_color_background", array(
      "label" => "Background Color",
      "description" => "Background color for site",
      "section" => "sec_colors",
      "settings" => "set_color_background",
      "type" => "color"
   ));

   $wp_customize -> add_setting("set_color_backgroundMobileNav", array(
      "type" => "theme_mod",
      "default" => "#ffe6e6",
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control("ctrl_color_backgroundMobileNav", array(
      "label" => "Background Color (Mobile Nav Menu)",
      "description" => "Background for nav menu in mobile view",
      "section" => "sec_colors",
      "settings" => "set_color_backgroundMobileNav",
      "type" => "color"
   ));

   $wp_customize -> add_setting("set_color_linksPrimary", array(
      "type" => "theme_mod",
      "default" => "#f66",
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control("ctrl_color_linksPrimary", array(
      "label" => "Links (Primary)",
      "description" => "Primary color for links",
      "section" => "sec_colors",
      "settings" => "set_color_linksPrimary",
      "type" => "color"
   ));

   $wp_customize -> add_setting("set_color_linksSecondary", array(
      "type" => "theme_mod",
      "default" => "#f9b44d",
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control("ctrl_color_linksSecondary", array(
      "label" => "Links (Secondary)",
      "description" => "Secondary color for links",
      "section" => "sec_colors",
      "settings" => "set_color_linksSecondary",
      "type" => "color"
   ));

   $wp_customize -> add_setting("set_color_textMain", array(
      "type" => "theme_mod",
      "default" => "#922627",
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control("ctrl_color_textMain", array(
      "label" => "Text (Main)",
      "description" => "Main color for text",
      "section" => "sec_colors",
      "settings" => "set_color_textMain",
      "type" => "color"
   ));
}



function site_spacing_section($wp_customize) {
   $wp_customize -> add_section("sec_siteSpacing", array(
      "title" => "Site Spacing",
      "description" => "Set spacing/padding for the site here.",
      "priority" => 62
   ));

   $wp_customize -> add_setting("set_padding_desktop", array(
      "type" => "theme_mod",
      "default" => 80,
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_desktop", array(
      "label" => "Desktop padding",
      "description" => "Desktop padding (pixels): when width > 960px",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_desktop",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_tablet", array(
      "type" => "theme_mod",
      "default" => 50,
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_tablet", array(
      "label" => "Tablet padding",
      "description" => "Tablet padding (pixels): when width is between 960px and 640px",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_tablet",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_mobile", array(
      "type" => "theme_mod",
      "default" => 30,
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_mobile", array(
      "label" => "Large Mobile padding",
      "description" => "Mobile padding (pixels): when width is between 640px and 480px",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_mobile",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_mobileSm", array(
      "type" => "theme_mod",
      "default" => 20,
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_mobileSm", array(
      "label" => "Small Mobile padding",
      "description" => "Small-mobile padding (pixels): when width < 480px",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_mobileSm",
      "type" => "number"
   ));
}



function all_customizer_settings( $wp_customize ) {
   color_section($wp_customize);
   site_spacing_section($wp_customize);
}
add_action( "customize_register", "all_customizer_settings" );