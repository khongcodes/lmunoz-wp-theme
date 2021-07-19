<?php
$contentTemplatesUri = "template-parts/content/content";

get_header();

if ( have_posts() ) {
   while ( have_posts() ) {
      the_post();
      get_template_part( $contentTemplatesUri, "" );
   }
} else {
   get_template_part( $contentTemplatesUri, "none");
}

get_footer();
