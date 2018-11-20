<?php
$args = array(
  'numberposts' = '4',
  'category_name' = 'slider'
);
$slider_posts = get_posts( $args );
if ( $slider_posts ) {
  foreach ( $slider_posts as $post ) :
    // First, setup post data
    setup_postdata( $post ); 
    // Second, define content to display ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <!--setup_postdata() required for the_title() and the_content() to work--><?php
  endforeach;
  // Third, reset post data after end of the foreach function
  wp_reset_postdata();
} 
