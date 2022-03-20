<?php
$contentTemplatesUri = "template-parts/content/content";

get_header();

if ( have_posts() ) {
   get_template_part( $contentTemplatesUri, "postgrid" );
   // while ( have_posts() ) {
   //    the_post();
   //    get_template_part( $contentTemplatesUri, "postgrid" );
   //    // echo get_the_category();
   // }
} else {
   get_template_part( $contentTemplatesUri, "none");
}

get_footer();
