<?php

function lmunoz_customizer_generate_stylesheet( $defaults ) {?>

   <style type="text/css">
      html {
         background-color: <?php echo get_theme_mod( "set_color_background", $defaults["color_background"] ) ; ?>;
         color: <?php echo get_theme_mod( "set_color_textMain", $defaults["color_textMain"] ); ?>;
         font-size: <?php echo get_theme_mod( "set_text_mainSize", $defaults["text_mainSize"] ); ?>px;
         font-family: <?php echo get_theme_mod( "set_text_mainFont", $defaults["text_mainFont"] ) . ", Arial, sans-serif"; ?>;
         font-style: <?php echo (get_theme_mod( "set_text_mainItalics" ) ? "italic" : "normal"); ?>;
      }

      a {
         color: <?php echo get_theme_mod( "set_color_linksPrimary", $defaults["color_linksPrimary"] ); ?>;
      }

      a:hover, a:active {
         color: <?php echo get_theme_mod( "set_color_linksSecondary", $defaults["color_linksSecondary"] ); ?>;
      }


      /* NAV MENU */
      #primary-nav-container a {
         font-size: <?php echo get_theme_mod( "set_text_navSize", $defaults["text_navSize"] ); ?>px;
         font-weight: <?php echo get_theme_mod( "set_text_navWeight", $defaults["text_navWeight"] ); ?>;
         font-family: <?php echo get_theme_mod( "set_text_navFont", $defaults["text_navFont"] ) . ", Arial, sans-serif"; ?>;
         font-style: <?php echo (get_theme_mod( "set_text_navItalics" ) ? "italic" : "normal"); ?>;
      }

      #primary-nav-container li.current-menu-item > a {
         color: <?php echo get_theme_mod( "set_color_linksSecondary", $defaults["color_linksSecondary"] ); ?>;
      }

      div#mobile-nav-interface div.nav-frame {
         background-color: <?php echo get_theme_mod( "set_color_backgroundMobileNav", $defaults["color_backgroundMobileNav"] ); ?>;
      }


      /* CONTACT FORM */

      div.wpforms-container.wpforms-container-full div.wpforms-submit-container button[type="submit"].wpforms-submit {
         border-color: <?php echo get_theme_mod( "set_color_formSubmitBorder", $defaults["color_formSubmitBorder"] ); ?>;
         background-color: <?php echo get_theme_mod( "set_color_formSubmitBg", $defaults["color_formSubmitBg"] ); ?>;
         color: <?php echo get_theme_mod( "set_color_formSubmitText", $defaults["color_formSubmitText"] ); ?>;
      }

      div.wpforms-container.wpforms-container-full div.wpforms-submit-container button[type="submit"].wpforms-submit:hover,
      div.wpforms-container.wpforms-container-full div.wpforms-submit-container button[type="submit"].wpforms-submit:active,
      div.wpforms-container.wpforms-container-full div.wpforms-submit-container button[type="submit"].wpforms-submit:focus {
         background-color: <?php echo get_theme_mod( "set_color_formSubmitBgHover", $defaults["color_formSubmitBgHover"] ); ?> !important;
      }

      div.wpforms-confirmation-container-full {
         box-shadow: 0px 1px 4px -2px <?php echo get_theme_mod( "set_color_formConfirmedShadow", $defaults["color_formConfirmedShadow"] ); ?>;
         background-color: <?php echo get_theme_mod( "set_color_formConfirmedBg", $defaults["color_formConfirmedBg"] ); ?>;
         color: <?php echo get_theme_mod( "set_color_textMain", $defaults["color_textMain"] ); ?>;
      }


      /* SPACING */

      @media screen and (min-width: 960px) {
         body { margin-top: <?php echo get_theme_mod( "set_padding_desktop", $defaults["padding_desktop"] ); ?>px; }
      }
      @media screen and (max-width: 960px) {
         body { margin-top: <?php echo get_theme_mod( "set_padding_tablet", $defaults["padding_tablet"] ); ?>px; }
      }
      @media screen and (max-width: 640px) {
         body { margin-top: <?php echo get_theme_mod( "set_padding_mobile", $defaults["padding_mobile"] ); ?>px; }
      }
      @media screen and (max-width: 480px) {
         body { margin-top: <?php echo get_theme_mod( "set_padding_mobileSm", $defaults["padding_mobileSm"] ); ?>px; }
      }
   </style>

<?php
}