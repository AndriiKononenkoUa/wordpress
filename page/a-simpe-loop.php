<?php 
// Note: this loop is a simplified version of a loop published in a post at Elegant Themes
// Source: https://www.elegantthemes.com/blog/tips-tricks/converting-html-sites-to-wordpress-sites
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-header">
       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
       <p>By <?php the_author_posts_link(); ?>, <?php the_time( 'M j y' ); ?></p>
    </header>
    <div class="entry clear">
       <?php the_post_thumbnail(); ?>
       <?php the_content(); ?>
    </div>
    <footer class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </footer>
  </div>
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
     <div class="alignleft"><?php next_posts_link( '&larr; Older' ); ?></div>
     <div class="alignright"><?php previous_posts_link( 'Newer &rarr;' ); ?></div>
  </div>
<?php else : ?>
<?php endif; ?> 
