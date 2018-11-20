<?php
$args = array(
  'post_type' => 'post',
  'cat' => '94',
  'meta_key' => '_custom_post_order',
  'orderby' => 'meta_value',
  'order' => 'ASC'
);
$query = new WP_query ( $args );
if ( $query->have_posts() ) {
  while ($query->have_posts() ) {
    $query->the_post();
    /* only list posts that have a current custom post order value */
    if ( !empty(get_post_meta( $post->ID, '_custom_post_order', true )) ) : ?>

    /* insert code for rendering posts */

<?php 
    endif; }
  wp_reset_postdata();
} ?> 
