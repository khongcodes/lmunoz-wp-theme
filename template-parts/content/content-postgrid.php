<div id="post-thumbnail-grid-container">

   <!-- <h2>
      <#?php
         $category = get_the_category( );
         $category_name = $category[0]->cat_name;

         echo $category_name;
      ?>
   </h2> -->
   
   <div id="post-thumbnail-grid">
      <?php

         $category = get_the_category( );
         $category_name = $category[0]->cat_name;
         
         // wpb_postsbycategory is defined in functions.php
         echo wpb_postsbycategory($category_name);
      ?>
   </div>
</div>
