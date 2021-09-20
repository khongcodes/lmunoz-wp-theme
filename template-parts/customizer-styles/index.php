<style>
   html {
      background-color: <?php echo get_theme_mod( "set_color_background" ); ?>;
      color: <?php echo get_theme_mod( "set_color_textMain" ); ?>;
   }

   a {
      color: <?php echo get_theme_mod( "set_color_linksPrimary" ) ?>;
   }

   a:hover, a:active {
      color: <?php echo get_theme_mod( "set_color_linksSecondary" ) ?>;
   }

   @media screen and (min-width: 960px) {
      body { margin-top: <?php echo get_theme_mod( "set_padding_desktop" ); ?>px; }
   }
   @media screen and (max-width: 960px) {
      body { margin-top: <?php echo get_theme_mod( "set_padding_tablet" ); ?>px; }
   }
   @media screen and (max-width: 640px) {
      body { margin-top: <?php echo get_theme_mod( "set_padding_mobile" ); ?>px; }
   }
   @media screen and (max-width: 480px) {
      body { margin-top: <?php echo get_theme_mod( "set_padding_mobileSm" ); ?>px; }
   }
</style>