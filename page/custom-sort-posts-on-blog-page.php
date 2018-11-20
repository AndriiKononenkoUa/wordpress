<?php
/* Sort posts on the blog posts page according to the custom sort order */
function jpen_custom_post_order_sort( $query ){
  if ( $query->is_main_query() && is_home() ){
    $query->set( 'orderby', 'meta_value' );
    $query->set( 'meta_key', '_custom_post_order' );
    $query->set( 'order' , 'ASC' );
  }
}
add_action( 'pre_get_posts' , 'jpen_custom_post_order_sort' );
?> 
