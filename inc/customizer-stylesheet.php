<?php

function get_post_thumbnail_grid_col_template( $num_of_columns ) {

};

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


      /* POST THUMBNAIL GRID CONTAINER */

      /*
      div#post-thumbnail-grid-container > h2 {
          color: <#?php echo get_theme_mod( "set_postthumbgrid_galleryTitleColor", $defaults["postthumbgrid_galleryTitleColor"] ); ?>
      }*/
      div#post-thumbnail-grid {
         row-gap: <?php echo get_theme_mod( "set_postthumbgrid_rowgap", $defaults["postthumbgrid_rowgap"] ); ?>px;
      }
      div#post-thumbnail-grid div.thumbnail-container:hover div.title-overlay {
         background-color: <?php echo get_theme_mod( "set_postthumbgrid_hoverBgColor", $defaults["postthumbgrid_hoverBgColor"] ); ?>;
         opacity: <?php echo get_theme_mod( "set_postthumbgrid_hoverBgOpacity", $defaults["postthumbgrid_hoverBgOpacity"] ); ?>;
         color: <?php echo get_theme_mod( "set_postthumbgrid_hoverTextColor", $defaults["postthumbgrid_hoverTextColor"] ); ?>;
      }


      /* SPACING */

      @media screen and (min-width: 960px) {
         body { 
            margin-top: <?php echo get_theme_mod( "set_padding_site_top_desktop", $defaults["padding_site_top_desktop"] ); ?>px; 
         }
         div#site-header {
            margin-top: <?php echo get_theme_mod( "set_padding_site_top_desktop", $defaults["padding_site_top_desktop"] ); ?>px; 
         }
         div#site-content {
            padding-left: <?php echo get_theme_mod( "set_padding_site_desktop_left", $defaults["padding_site_desktop_left"] ); ?>px;
            padding-right: <?php echo get_theme_mod( "set_padding_site_desktop_right", $defaults["padding_site_desktop_right"] ); ?>px;
         }
         div.page-container {
            padding-left: <?php echo get_theme_mod( "set_padding_page_desktop_left", $defaults["padding_page_desktop_left"] ); ?>px;
            padding-right: <?php echo get_theme_mod( "set_padding_page_desktop_right", $defaults["padding_page_desktop_right"] ); ?>px;
         }
         div.post-container {
            padding-left: <?php echo get_theme_mod( "set_padding_post_desktop_left", $defaults["padding_post_desktop_left"] ); ?>px;
            padding-right: <?php echo get_theme_mod( "set_padding_post_desktop_right", $defaults["padding_post_desktop_right"] ); ?>px;
         }
      }
      @media screen and (max-width: 960px) {
         body {
            margin-top: <?php echo get_theme_mod( "set_padding_site_top_tablet", $defaults["padding_site_top_tablet"] ); ?>px;
         }
         div#site-header {
            margin-top: <?php echo get_theme_mod( "set_padding_site_top_tablet", $defaults["padding_site_top_tablet"] ); ?>px; 
         }
         div#site-content {
            padding-left: <?php echo get_theme_mod( "set_padding_site_tablet_left", $defaults["padding_site_tablet_left"] ); ?>px;
            padding-right: <?php echo get_theme_mod( "set_padding_site_tablet_right", $defaults["padding_site_tablet_right"] ); ?>px;
         }
         div.page-container {
            padding-left: <?php echo get_theme_mod( "set_padding_page_tablet_left", $defaults["padding_page_tablet_left"] ); ?>px;
            padding-right: <?php echo get_theme_mod( "set_padding_page_tablet_right", $defaults["padding_page_tablet_right"] ); ?>px;
         }
         div.post-container {
            padding-left: <?php echo get_theme_mod( "set_padding_post_tablet_left", $defaults["padding_post_tablet_left"] ); ?>px;
            padding-right: <?php echo get_theme_mod( "set_padding_post_tablet_right", $defaults["padding_post_tablet_right"] ); ?>px;
         }
      }
      @media screen and (max-width: 640px) {
         body { 
            margin-top: <?php echo get_theme_mod( "set_padding_site_top_mobile", $defaults["padding_site_top_mobile"] ); ?>px;
         }
         div#site-header {
            margin-top: <?php echo get_theme_mod( "set_padding_site_top_mobile", $defaults["padding_site_top_mobile"] ); ?>px; 
         }
         div#site-content {
            padding-left: <?php echo get_theme_mod( "set_padding_site_mobile_left", $defaults["padding_site_mobile_left"] ); ?>px;
            padding-right: <?php echo get_theme_mod( "set_padding_site_mobile_right", $defaults["padding_site_mobile_right"] ); ?>px;
         }
         div.page-container {
            padding-left: <?php echo get_theme_mod( "set_padding_page_mobile_left", $defaults["padding_page_mobile_left"] ); ?>px;
            padding-right: <?php echo get_theme_mod( "set_padding_page_mobile_right", $defaults["padding_page_mobile_right"] ); ?>px;
         }
         div.post-container {
            padding-left: <?php echo get_theme_mod( "set_padding_post_mobile_left", $defaults["padding_post_mobile_left"] ); ?>px;
            padding-right: <?php echo get_theme_mod( "set_padding_post_mobile_right", $defaults["padding_post_mobile_right"] ); ?>px;
         }
      }
      @media screen and (max-width: 480px) {
         body { 
            margin-top: <?php echo get_theme_mod( "set_padding_site_top_mobileSm", $defaults["padding_site_top_mobileSm"] ); ?>px;
         }
         div#site-header {
            margin-top: <?php echo get_theme_mod( "set_padding_site_top_mobileSm", $defaults["padding_site_top_mobileSm"] ); ?>px; 
         }
         div#site-content {
            padding-left: <?php echo get_theme_mod( "set_padding_site_mobileSm_left", $defaults["padding_site_mobileSm_left"] ); ?>px;
            padding-right: <?php echo get_theme_mod( "set_padding_site_mobileSm_right", $defaults["padding_site_mobileSm_right"] ); ?>px;
         }
         div.page-container {
            padding-left: <?php echo get_theme_mod( "set_padding_page_mobileSm_left", $defaults["padding_page_mobileSm_left"] ); ?>px;
            padding-right: <?php echo get_theme_mod( "set_padding_page_mobileSm_right", $defaults["padding_page_mobileSm_right"] ); ?>px;
         }
         div.post-container {
            padding-left: <?php echo get_theme_mod( "set_padding_post_mobileSm_left", $defaults["padding_post_mobileSm_left"] ); ?>px;
            padding-right: <?php echo get_theme_mod( "set_padding_post_mobileSm_right", $defaults["padding_post_mobileSm_right"] ); ?>px;
         }
      }
   </style>

<?php
}