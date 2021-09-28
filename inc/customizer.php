<?php

require_once(get_template_directory() . "/inc/customizer-defaults.php");

////////////////////////////////////////////////////////////
//////// SANITIZE CHECKBOX INPUT FUNCTION

function khong_sanitize_checkbox( $checked ) {
   // just return true if checkbox is checked
   // if ( !isset($input) ) { return false; }

   // $retVal = false;
   // // if (is_string($input)) {
   // //    // $retVal = in_array($input, array(
   // //    //    "true", "1", "on", "yes"
   // //    // ));
   // // } elseif (is_numeric($input)) {
   // //    $retVal = $input == 1;
   // // } elseif (is_boolean($input)) {
   // //    return $input;
   // // }
   // return $retVal;

   return ( isset( $checked ) && true == $checked ) ? true : false;
}


////////////////////////////////////////////////////////////
//////// COLORS

function color_section( $wp_customize, $defaults ) {
   $wp_customize -> add_section("sec_colors", array(
      "title" => "Colors",
      "description" => "Set website colors here.",
      "priority" => 61
   ));

   $wp_customize -> add_setting("set_color_background", array(
      "type" => "theme_mod",
      "default" => $defaults["color_background"],
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
      "description" => "Secondary color for links (on hover or active)",
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

   $wp_customize -> add_setting("set_color_formSubmitBg", array(
      "type" => "theme_mod",
      "default" => "#fd7a7a",
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control("ctrl_color_formSubmitBg", array(
      "label" => "Contact Form Submit - Background",
      "description" => "Background color for Submit button in the contact form",
      "section" => "sec_colors",
      "settings" => "set_color_formSubmitBg",
      "type" => "color"
   ));

   $wp_customize -> add_setting("set_color_formSubmitBgHover", array(
      "type" => "theme_mod",
      "default" => "#e75656",
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control("ctrl_color_formSubmitBgHover", array(
      "label" => "Contact Form Submit (Hover) - Background",
      "description" => "Background color for Submit button in the contact form (on mouse hover)",
      "section" => "sec_colors",
      "settings" => "set_color_formSubmitBgHover",
      "type" => "color"
   ));

   $wp_customize -> add_setting("set_color_formSubmitBorder", array(
      "type" => "theme_mod",
      "default" => "#ff9494",
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control("ctrl_color_formSubmitBorder", array(
      "label" => "Contact Form Submit - Border",
      "description" => "Border color for Submit button in the contact form",
      "section" => "sec_colors",
      "settings" => "set_color_formSubmitBorder",
      "type" => "color"
   ));

   $wp_customize -> add_setting("set_color_formSubmitText", array(
      "type" => "theme_mod",
      "default" => "#FFFFFF",
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control("ctrl_color_formSubmitText", array(
      "label" => "Contact Form Submit - Text",
      "description" => "Text color for Submit button in the contact form",
      "section" => "sec_colors",
      "settings" => "set_color_formSubmitText",
      "type" => "color"
   ));

   $wp_customize -> add_setting("set_color_formConfirmedBg", array(
      "type" => "theme_mod",
      "default" => "#ffe6e6",
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control("ctrl_color_formConfirmedBg", array(
      "label" => "Contact Form Confirmation - Background",
      "description" => "Background color for message displayed after user submits on the contact form",
      "section" => "sec_colors",
      "settings" => "set_color_formConfirmedBg",
      "type" => "color"
   ));

   $wp_customize -> add_setting("set_color_formConfirmedShadow", array(
      "type" => "theme_mod",
      "default" => "#ff0000",
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control("ctrl_color_formConfirmedShadow", array(
      "label" => "Contact Form Confirmation - Shadow",
      "description" => "Color of box-shadow for message displayed after user submits on the contact form",
      "section" => "sec_colors",
      "settings" => "set_color_formConfirmedShadow",
      "type" => "color"
   ));
   
}


////////////////////////////////////////////////////////////
//////// SITE SPACING

function site_spacing_section($wp_customize, $defaults ) {
   $wp_customize -> add_section("sec_siteSpacing", array(
      "title" => "WORKINPROGRESS Site Spacing",
      "description" => "Set spacing/padding for the site here.",
      "priority" => 62
   ));

   $wp_customize -> add_setting("set_padding_desktop", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_desktop'],
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


////////////////////////////////////////////////////////////
//////// TYPOGRAPHY

function typography_section($wp_customize, $defaults ) {
   $wp_customize -> add_section("sec_typography", array(
      "title" => "Typography",
      "description" => "Set spacing/padding for the site here.",
      "priority" => 63
   ));

   ////////////// MAIN
   $wp_customize -> add_setting("set_text_mainFont", array(
      "type" => "theme_mod",
      "default" => $defaults['text_mainFont'],
      "sanitize_callback" => "wp_filter_nohtml_kses"
   ));
   $wp_customize -> add_control("ctrl_text_mainFont", array(
      "label" => "Main text - font",
      "description" => "Font for regular text",
      "section" => "sec_typography",
      "settings" => "set_text_mainFont",
      "type" => "text"
   ));

   $wp_customize -> add_setting("set_text_mainSize", array(
      "type" => "theme_mod",
      "default" => $defaults['text_mainSize'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_text_mainSize", array(
      "label" => "Main text - size",
      "description" => "Font size of regular text",
      "section" => "sec_typography",
      "settings" => "set_text_mainSize",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_text_mainWeight", array(
      "type" => "theme_mod",
      "default" => $defaults['text_mainWeight'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_text_mainWeight", array(
      "label" => "Main text - weight",
      "description" => "Weight of regular text",
      "section" => "sec_typography",
      "settings" => "set_text_mainWeight",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_text_mainItalics", array(
      "type" => "theme_mod",
      "default" => $defaults['text_mainItalics'],
      "sanitize_callback" => "khong_sanitize_checkbox"
   ));
   $wp_customize -> add_control("ctrl_text_mainItalics", array(
      "label" => "Main text - italics",
      "description" => "Whether or not main text is in italics",
      "section" => "sec_typography",
      "settings" => "set_text_mainItalics",
      "type" => "checkbox"
   ));

   ////////////// NAV
   $wp_customize -> add_setting("set_text_navFont", array(
      "type" => "theme_mod",
      "default" => $defaults['text_navFont'],
      "sanitize_callback" => "wp_filter_nohtml_kses"
   ));
   $wp_customize -> add_control("ctrl_text_navFont", array(
      "label" => "Nav text - font",
      "description" => "Font for nav menu text",
      "section" => "sec_typography",
      "settings" => "set_text_navFont",
      "type" => "text"
   ));

   $wp_customize -> add_setting("set_text_navSize", array(
      "type" => "theme_mod",
      "default" => $defaults['text_navSize'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_navSize", array(
      "label" => "Nav text - size",
      "description" => "Font size of nav menu links",
      "section" => "sec_typography",
      "settings" => "set_text_navSize",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_text_navWeight", array(
      "type" => "theme_mod",
      "default" => $defaults['text_navWeight'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_text_navWeight", array(
      "label" => "Nav text - weight",
      "description" => "Weight of nav menu text",
      "section" => "sec_typography",
      "settings" => "set_text_navWeight",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_text_navItalics", array(
      "type" => "theme_mod",
      "default" => $defaults['text_navItalics'],
      "sanitize_callback" => "khong_sanitize_checkbox"
   ));
   $wp_customize -> add_control("ctrl_text_navItalics", array(
      "label" => "Nav text - italics",
      "description" => "Whether or not nav text is in italics",
      "section" => "sec_typography",
      "settings" => "set_text_navItalics",
      "type" => "checkbox"
   ));
      
}



function all_customizer_settings( $wp_customize, $customizer_defaults ) {

   color_section($wp_customize, $customizer_defaults);
   site_spacing_section($wp_customize, $customizer_defaults);
   typography_section($wp_customize, $customizer_defaults);
}
add_action( "customize_register", function( $wp_customize ) use ( $lm_customizer_defaults ) {
   all_customizer_settings( $wp_customize, $lm_customizer_defaults );
});