<?php

require_once(get_template_directory() . "/inc/customizer-defaults.php");

////////////////////////////////////////////////////////////
//////// SANITIZE CHECKBOX INPUT FUNCTION

function khong_sanitize_checkbox( $checked ) {
   return ( isset( $checked ) && true == $checked ) ? true : false;
}


////////////////////////////////////////////////////////////
//////// COLORS

function color_section( $wp_customize, $defaults ) {
   $wp_customize -> add_section("sec_colors", array(
      "title" => "Site Colors",
      "description" => "Set website colors here.",
      "priority" => 61
   ));

   $wp_customize -> add_setting("set_color_background", array(
      "type" => "theme_mod",
      "default" => $defaults["color_background"],
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control(
      new WP_Customize_Color_Control(
         $wp_customize,
         "ctrl_color_background",
         array(
            "label" => __( "Background Color", "lmunoz-wp-theme" ),
            "description" => "Background color for site",
            "section" => "sec_colors",
            "settings" => "set_color_background"
         )
      )
   );

   $wp_customize -> add_setting("set_color_backgroundMobileNav", array(
      "type" => "theme_mod",
      "default" => $defaults["color_backgroundMobileNav"],
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control(
      new WP_Customize_Color_Control(
         $wp_customize,
         "ctrl_color_backgroundMobileNav",
         array(
            "label" => __("Background Color (Mobile Nav Menu)", "lmunoz-wp-theme"),
            "description" => "Background for nav menu in mobile view",
            "section" => "sec_colors",
            "settings" => "set_color_backgroundMobileNav"
         )  
      )
   );

   $wp_customize -> add_setting("set_color_linksPrimary", array(
      "type" => "theme_mod",
      "default" => $defaults["color_linksPrimary"],
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control(
      new WP_Customize_Color_Control(
         $wp_customize,
         "ctrl_color_linksPrimary", 
         array(
            "label" => __("Links (Primary)", "lmunoz-wp-theme"),
            "description" => "Primary color for links",
            "section" => "sec_colors",
            "settings" => "set_color_linksPrimary"
         )
   ));

   $wp_customize -> add_setting("set_color_linksSecondary", array(
      "type" => "theme_mod",
      "default" => $defaults["color_linksSecondary"],
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control(
      new WP_Customize_Color_Control(
         $wp_customize,
         "ctrl_color_linksSecondary", 
         array(
            "label" => "Links (Secondary)",
            "description" => "Secondary color for links (on hover or active)",
            "section" => "sec_colors",
            "settings" => "set_color_linksSecondary",
         )
      )
   );

   $wp_customize -> add_setting("set_color_textMain", array(
      "type" => "theme_mod",
      "default" => $defaults["color_textMain"],
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control(
      new WP_Customize_Color_Control(
         $wp_customize,
         "ctrl_color_textMain", 
         array(
            "label" => "Text (Main)",
            "description" => "Main color for text",
            "section" => "sec_colors",
            "settings" => "set_color_textMain",
         )
      )
   );

   $wp_customize -> add_setting("set_color_formSubmitBg", array(
      "type" => "theme_mod",
      "default" => $defaults["color_formSubmitBg"],
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control(
      new WP_Customize_Color_Control(
         $wp_customize,
         "ctrl_color_formSubmitBg", 
         array(
            "label" => "Contact Form Submit - Background",
            "description" => "Background color for Submit button in the contact form",
            "section" => "sec_colors",
            "settings" => "set_color_formSubmitBg",
         )
      )
   );

   $wp_customize -> add_setting("set_color_formSubmitBgHover", array(
      "type" => "theme_mod",
      "default" => $defaults["color_formSubmitBgHover"],
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control(
      new WP_Customize_Color_Control(
         $wp_customize,
         "ctrl_color_formSubmitBgHover", 
         array(
            "label" => "Contact Form Submit (Hover) - Background",
            "description" => "Background color for Submit button in the contact form (on mouse hover)",
            "section" => "sec_colors",
            "settings" => "set_color_formSubmitBgHover",
         )
      )
   );

   $wp_customize -> add_setting("set_color_formSubmitBorder", array(
      "type" => "theme_mod",
      "default" => $defaults["color_formSubmitBorder"],
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control(
      new WP_Customize_Color_Control(
         $wp_customize,
         "ctrl_color_formSubmitBorder", 
         array(
            "label" => "Contact Form Submit - Border",
            "description" => "Border color for Submit button in the contact form",
            "section" => "sec_colors",
            "settings" => "set_color_formSubmitBorder",
         )
      )
   );

   $wp_customize -> add_setting("set_color_formSubmitText", array(
      "type" => "theme_mod",
      "default" => $defaults["color_formSubmitText"],
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control(
      new WP_Customize_Color_Control(
         $wp_customize,
         "ctrl_color_formSubmitText", 
         array(
            "label" => "Contact Form Submit - Text",
            "description" => "Text color for Submit button in the contact form",
            "section" => "sec_colors",
            "settings" => "set_color_formSubmitText",
         )
      )
   );

   $wp_customize -> add_setting("set_color_formConfirmedBg", array(
      "type" => "theme_mod",
      "default" => $defaults["color_formConfirmedBg"],
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control(
      new WP_Customize_Color_Control(
         $wp_customize,
         "ctrl_color_formConfirmedBg", 
         array(
            "label" => "Contact Form Confirmation - Background",
            "description" => "Background color for message displayed after user submits on the contact form",
            "section" => "sec_colors",
            "settings" => "set_color_formConfirmedBg",
         )
      )
   );

   $wp_customize -> add_setting("set_color_formConfirmedShadow", array(
      "type" => "theme_mod",
      "default" => $defaults["color_formConfirmedShadow"],
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control(
      new WP_Customize_Color_Control(
         $wp_customize,
         "ctrl_color_formConfirmedShadow", 
         array(
            "label" => "Contact Form Confirmation - Shadow",
            "description" => "Color of box-shadow for message displayed after user submits on the contact form",
            "section" => "sec_colors",
            "settings" => "set_color_formConfirmedShadow",
         )
      )
   );
   
}


////////////////////////////////////////////////////////////
//////// SITE SPACING

function site_spacing_section($wp_customize, $defaults ) {
   $wp_customize -> add_section("sec_siteSpacing", array(
      "title" => "Spacing",
      "description" => "Set spacing/padding for the site here.",
      "priority" => 62
   ));

   $wp_customize -> add_setting("set_padding_site_top_desktop", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_site_top_desktop'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_site_top_desktop", array(
      "label" => "Site Top Padding - Desktop",
      "description" => "Site container top padding (pixels) when screen width > 960px (Desktop view)",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_site_top_desktop",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_site_top_tablet", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_site_top_tablet'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_site_top_tablet", array(
      "label" => "Site Top Padding - Tablet",
      "description" => "Site container top padding (pixels) when screen width > 960px (Desktop view)",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_site_top_desktop",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_site_top_mobile", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_site_top_mobile'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_site_top_mobile", array(
      "label" => "Site Top Padding - Mobile",
      "description" => "Site container top padding (pixels) when screen width > 960px (Desktop view)",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_site_top_desktop",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_site_top_mobileSm", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_site_top_mobileSm'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_site_top_mobileSm", array(
      "label" => "Site Padding - Mobile (small)",
      "description" => "Site container top padding (pixels) when screen width > 960px (Desktop view)",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_site_top_desktop",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_site_desktop_left", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_site_desktop_left'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_site_desktop_left", array(
      "label" => "Site Padding (left) - Desktop",
      "description" => "Site container left padding (pixels) when screen width > 960px (Desktop view)",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_site_desktop_left",
      "type" => "number"
   ));
   $wp_customize -> add_setting("set_padding_site_desktop_right", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_site_desktop_right'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_site_desktop_right", array(
      "label" => "Site Padding (right) - Desktop",
      "description" => "Site container right padding (pixels) when screen width > 960px (Desktop view)",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_site_desktop_right",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_site_tablet_left", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_site_tablet_left'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_site_tablet_left", array(
      "label" => "Site Padding (left) - Tablet",
      "description" => "Site container left padding (pixels) when screen width is between 960px and 640px (Tablet view)",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_site_tablet_left",
      "type" => "number"
   ));
   $wp_customize -> add_setting("set_padding_site_tablet_right", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_site_tablet_right'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_site_tablet_right", array(
      "label" => "Site Padding (right) - Tablet",
      "description" => "Site container right padding (pixels) when screen width is between 960px and 640px (Tablet view)",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_site_tablet_right",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_site_mobile_left", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_site_mobile_left'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_site_mobile_left", array(
      "label" => "Site Padding (left) - Mobile",
      "description" => "Site container left padding (pixels) when screen width is between 640px and 480px (Mobile view)",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_site_mobile_left",
      "type" => "number"
   ));
   $wp_customize -> add_setting("set_padding_site_mobile_right", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_site_mobile_right'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_site_mobile_right", array(
      "label" => "Site Padding (right) - Mobile",
      "description" => "Site container right padding (pixels) when screen width is between 640px and 480px (Mobile view)",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_site_mobile_right",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_site_mobileSm_left", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_site_mobileSm_left'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_site_mobileSm_left", array(
      "label" => "Site Padding (left) - Mobile (small)",
      "description" => "Site container left padding (pixels) when screen width < 480px (Small mobile view)",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_site_mobileSm_left",
      "type" => "number"
   ));
   $wp_customize -> add_setting("set_padding_site_mobileSm_right", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_site_mobileSm_right'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_site_mobileSm_right", array(
      "label" => "Site Padding (right) - Mobile (small)",
      "description" => "Site container right padding (pixels) when screen width < 480px (Small mobile view)",
      "section" => "sec_siteSpacing",
      "settings" => "set_padding_site_mobileSm_right",
      "type" => "number"
   ));
}


function page_spacing_section($wp_customize, $defaults ) {
   $wp_customize -> add_section("sec_pageSpacing", array(
      "title" => "Spacing - Pages",
      "description" => "Set spacing/padding for the page content here.",
      "priority" => 63
   ));

   $wp_customize -> add_setting("set_padding_page_desktop_left", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_page_desktop_left'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_page_desktop_left", array(
      "label" => "Page Padding (left) - Desktop",
      "description" => "Page container left padding (pixels) when screen width > 960px (Desktop view)",
      "section" => "sec_pageSpacing",
      "settings" => "set_padding_page_desktop_left",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_page_desktop_right", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_page_desktop_right'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_page_desktop_right", array(
      "label" => "Page Padding (right) - Desktop",
      "description" => "Page container right padding (pixels) when screen width > 960px (Desktop view)",
      "section" => "sec_pageSpacing",
      "settings" => "set_padding_page_desktop_right",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_page_tablet_left", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_page_tablet_left'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_page_tablet_left", array(
      "label" => "Page Padding (left) - Tablet",
      "description" => "Page container left padding (pixels) when screen width is between 960px and 640px (Tablet view)",
      "section" => "sec_pageSpacing",
      "settings" => "set_padding_page_tablet_left",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_page_tablet_right", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_page_tablet_right'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_page_tablet_right", array(
      "label" => "Page Padding (right) - Tablet",
      "description" => "Page container right padding (pixels) when screen width is between 960px and 640px (Tablet view)",
      "section" => "sec_pageSpacing",
      "settings" => "set_padding_page_tablet_right",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_page_mobile_left", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_page_mobile_left'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_page_mobile_left", array(
      "label" => "Page Padding (left) - Mobile",
      "description" => "Page container left padding (pixels) when screen width is between 640px and 480px (Mobile view)",
      "section" => "sec_pageSpacing",
      "settings" => "set_padding_page_mobile_left",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_page_mobile_right", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_page_mobile_right'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_page_mobile_right", array(
      "label" => "Page Padding (right) - Mobile",
      "description" => "Page container right padding (pixels) when screen width is between 640px and 480px (Mobile view)",
      "section" => "sec_pageSpacing",
      "settings" => "set_padding_page_mobile_right",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_page_mobileSm_left", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_page_mobileSm_left'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_page_mobileSm_left", array(
      "label" => "Page Padding (left) - Mobile (small)",
      "description" => "Page container left padding (pixels) when screen width < 480px (Small mobile view)",
      "section" => "sec_pageSpacing",
      "settings" => "set_padding_page_mobileSm_left",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_page_mobileSm_right", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_page_mobileSm_right'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_page_mobileSm_right", array(
      "label" => "Page Padding (right) - Mobile (small)",
      "description" => "Page container right padding (pixels) when screen width < 480px (Small mobile view)",
      "section" => "sec_pageSpacing",
      "settings" => "set_padding_page_mobileSm_right",
      "type" => "number"
   ));
}

function post_spacing_section($wp_customize, $defaults ) {
   $wp_customize -> add_section("sec_postSpacing", array(
      "title" => "Spacing - Posts",
      "description" => "Set spacing/padding for post content here.",
      "priority" => 64
   ));

   $wp_customize -> add_setting("set_padding_post_desktop_left", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_post_desktop_left'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_post_desktop_left", array(
      "label" => "Post Padding (left) - Desktop",
      "description" => "Post container left padding (pixels) when screen width > 960px (Desktop view)",
      "section" => "sec_postSpacing",
      "settings" => "set_padding_post_desktop_left",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_post_desktop_right", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_post_desktop_right'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_post_desktop_right", array(
      "label" => "Post Padding (right) - Desktop",
      "description" => "Post container right padding (pixels) when screen width > 960px (Desktop view)",
      "section" => "sec_postSpacing",
      "settings" => "set_padding_post_desktop_right",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_post_tablet_left", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_post_tablet_left'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_post_tablet_left", array(
      "label" => "Post Padding (left) - Tablet",
      "description" => "Post container left padding (pixels) when screen width is between 960px and 640px (Tablet view)",
      "section" => "sec_postSpacing",
      "settings" => "set_padding_post_tablet_left",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_post_tablet_right", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_post_tablet_right'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_post_tablet_right", array(
      "label" => "Post Padding (right) - Tablet",
      "description" => "Post container right padding (pixels) when screen width is between 960px and 640px (Tablet view)",
      "section" => "sec_postSpacing",
      "settings" => "set_padding_post_tablet_right",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_post_mobile_left", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_post_mobile_left'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_post_mobile_left", array(
      "label" => "Post Padding (left) - Mobile",
      "description" => "Post container left padding (pixels) when screen width is between 640px and 480px (Mobile view)",
      "section" => "sec_postSpacing",
      "settings" => "set_padding_post_mobile_left",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_post_mobile_right", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_post_mobile_right'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_post_mobile_right", array(
      "label" => "Post Padding (right) - Mobile",
      "description" => "Post container right padding (pixels) when screen width is between 640px and 480px (Mobile view)",
      "section" => "sec_postSpacing",
      "settings" => "set_padding_post_mobile_right",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_post_mobileSm_left", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_post_mobileSm_left'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_post_mobileSm_left", array(
      "label" => "Post Padding (left) - Mobile (small)",
      "description" => "Post container left padding (pixels) when screen width < 480px (Small mobile view)",
      "section" => "sec_postSpacing",
      "settings" => "set_padding_post_mobileSm_left",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_padding_post_mobileSm_right", array(
      "type" => "theme_mod",
      "default" => $defaults['padding_post_mobileSm_right'],
      "sanitize_callback" => "absint"
   ));
   $wp_customize -> add_control("ctrl_padding_post_mobileSm_right", array(
      "label" => "Post Padding (right) - Mobile (small)",
      "description" => "Post container right padding (pixels) when screen width < 480px (Small mobile view)",
      "section" => "sec_postSpacing",
      "settings" => "set_padding_post_mobileSm_right",
      "type" => "number"
   ));
}

////////////////////////////////////////////////////////////
//////// TYPOGRAPHY

function typography_section($wp_customize, $defaults ) {
   $wp_customize -> add_section("sec_typography", array(
      "title" => "Typography",
      "description" => "Control typography settings here.",
      "priority" => 65
   ));

   ////////////// MAIN
   $wp_customize -> add_setting("set_text_mainFont", array(
      "type" => "theme_mod",
      "default" => $defaults['text_mainFont'],
      "sanitize_callback" => "wp_filter_nohtml_kses"
   ));
   $wp_customize -> add_control("ctrl_text_mainFont", array(
      "label" => "Main text - font",
      "description" => "Font for regular text. Enter a font name from Google Fonts: https://fonts.google.com/",
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
      "description" => "Font for nav menu text. Enter a font name from Google Fonts: https://fonts.google.com/",
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


////////////////////////////////////////////////////////////
//////// POST THUMBNAIL GRID

function post_thumbnail_grid_section( $wp_customize, $defaults ) {
   $wp_customize -> add_section("sec_post_thumbnail_grid", array(
      "title" => "Post Thumbnail Grid",
      "description" => "Set Post Thumbnail Grid settings here.",
      "priority" => 66
   ));


   // $wp_customize -> add_setting("set_postthumbgrid_galleryTitleColor", array(
   //    "type" => "theme_mod",
   //    "default" => $defaults["postthumbgrid_galleryTitleColor"],
   //    "sanitize_callback" => "sanitize_hex_color"
   // ));
   // $wp_customize -> add_control(
   //    new WP_Customize_Color_Control(
   //       $wp_customize,
   //       "ctrl_posttthumbgrid_galleryTitleColor", 
   //       array(
   //          "label" => "Gallery Title Color",
   //          "description" => "Color for title displayed at the top of the gallery",
   //          "section" => "sec_post_thumbnail_grid",
   //          "settings" => "set_postthumbgrid_galleryTitleColor",
   //       )
   //    )
   // );
   
   $wp_customize -> add_setting("set_postthumbgrid_colnum_desktop", array(
      "type" => "theme_mod",
      "default" => $defaults["postthumbgrid_colnum_desktop"],
      "sanitize_callback" => "absint"
   ));

   $wp_customize -> add_control("ctrl_postthumbgrid_colnum_desktop", array(
      "label" => "Number of Columns - Desktop",
      "description" => "Number of columns to be displayed on desktop view",
      "section" => "sec_post_thumbnail_grid",
      "settings" => "set_postthumbgrid_colnum_desktop",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_postthumbgrid_colgap", array(
      "type" => "theme_mod",
      "default" => $defaults["postthumbgrid_colgap"],
      "sanitize_callback" => "absint"
   ));

   $wp_customize -> add_control("ctrl_postthumbgrid_colgap", array(
      "label" => "Column Gap",
      "description" => "Gap between columns (pixels)",
      "section" => "sec_post_thumbnail_grid",
      "settings" => "set_postthumbgrid_colgap",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_postthumbgrid_rowgap", array(
      "type" => "theme_mod",
      "default" => $defaults["postthumbgrid_rowgap"],
      "sanitize_callback" => "absint"
   ));

   $wp_customize -> add_control("ctrl_postthumbgrid_rowgap", array(
      "label" => "Row Gap",
      "description" => "Row between columns (pixels)",
      "section" => "sec_post_thumbnail_grid",
      "settings" => "set_postthumbgrid_rowgap",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_postthumbgrid_hoverBgColor", array(
      "type" => "theme_mod",
      "default" => $defaults["postthumbgrid_hoverBgColor"],
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control(
      new WP_Customize_Color_Control(
         $wp_customize,
         "ctrl_posttthumbgrid_hoverBgColor", 
         array(
            "label" => "Background color for thumbnail hover",
            "description" => "Color for thumbnail hover state background",
            "section" => "sec_post_thumbnail_grid",
            "settings" => "set_postthumbgrid_hoverBgColor",
         )
      )
   );

   $wp_customize -> add_setting("set_postthumbgrid_hoverBgOpacity", array(
      "type" => "theme_mod",
      "default" => $defaults["postthumbgrid_hoverBgOpacity"],
      "sanitize_callback" => "absint"
   ));

   $wp_customize -> add_control("ctrl_postthumbgrid_hoverBgOpacity", array(
      "label" => "Hover Background Opacity",
      "description" => "Opacity of background on thumbnail hover (percent)",
      "section" => "sec_post_thumbnail_grid",
      "settings" => "set_postthumbgrid_hoverBgOpacity",
      "type" => "number"
   ));

   $wp_customize -> add_setting("set_postthumbgrid_hoverTextColor", array(
      "type" => "theme_mod",
      "default" => $defaults["postthumbgrid_hoverTextColor"],
      "sanitize_callback" => "sanitize_hex_color"
   ));
   $wp_customize -> add_control(
      new WP_Customize_Color_Control(
         $wp_customize,
         "ctrl_posttthumbgrid_hoverTextColor", 
         array(
            "label" => "Thumbnail Title Color",
            "description" => "Color for title displayed when you hover over the thumbnail",
            "section" => "sec_post_thumbnail_grid",
            "settings" => "set_postthumbgrid_hoverTextColor",
         )
      )
   );
}

// $wp_customize -> add_setting("set_padding_post");
// $wp_customize -> add_control("set_padding_post");


////////////////////////////////////////////////////////////
//////// CONSOLIDATION

function all_customizer_settings( $wp_customize, $customizer_defaults ) {

   color_section($wp_customize, $customizer_defaults);
   site_spacing_section($wp_customize, $customizer_defaults);
   page_spacing_section($wp_customize, $customizer_defaults);
   post_spacing_section($wp_customize, $customizer_defaults);
   typography_section($wp_customize, $customizer_defaults);
   post_thumbnail_grid_section($wp_customize, $customizer_defaults);

}
// add_action( "customize_register", function( $wp_customize ) use ( $lm_customizer_defaults ) {
//    all_customizer_settings( $wp_customize, $lm_customizer_defaults );
// });

