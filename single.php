<?php get_header() ?>
   <?php if( have_posts() ) : ?>
      <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>   
      <div class="content">
         <?php the_content() ?>
      </div>
   <?php else : ?>
      <p>oh no no posts</p>
   <?php endif ?>
<?php get_footer() ?>