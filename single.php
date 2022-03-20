<?php get_header(); ?>

<?php

if ( have_posts() ) :
   while ( have_posts() ) : the_post();  ?>
   
   <div class="post-container">
      <?php the_content(); ?>
   </div>
   
   <h3>
      <?php
         $category = get_the_category( );
         $category_name = $category[0]->cat_name;
         echo $category_name;
      ?>
   </h3>

   <?php get_template_part( "template-parts/content/content", "postgrid" ); ?>
   
   <?php
   endwhile;
endif;

?>


<?php get_footer(); ?>