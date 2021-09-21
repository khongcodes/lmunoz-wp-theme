<?php

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



function site_spacing_section($wp_customize, $defaults ) {
   $wp_customize -> add_section("sec_siteSpacing", array(
      "title" => "Site Spacing",
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



function all_customizer_settings( $wp_customize ) {
   
   include get_template_directory() . "/inc/customizer-defaults.php";

   color_section($wp_customize, $lm_customizer_defaults);
   site_spacing_section($wp_customize, $lm_customizer_defaults);
}
add_action( "customize_register", "all_customizer_settings" );