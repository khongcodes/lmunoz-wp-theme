<?php

get_header();

if ( have_posts() ) :
   while ( have_posts() ) : the_post();
   
   ?><div class="page-container">

      <?php the_content(); ?>

   </div> <?php

   endwhile;
endif;

get_footer();

?>