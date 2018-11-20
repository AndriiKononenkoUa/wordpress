<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  /* insert post content here */
  
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, there doesn\'t appear to be anything here.' ); ?></p>
<?php endif; ?> 
