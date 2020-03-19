<?php
////////////////////////////////////////////////////////////////////////////////////
function sebweo_rand_posts() {
 $args = array(
  'post_type' => 'post',
  'orderby'   => 'rand',
  'posts_per_page' => 7,
 );
 $the_query = new WP_Query( $args );
 if ( $the_query->have_posts() ) {
  $string .= '<ul>';
  while ( $the_query->have_posts() ) {
    $the_query->the_post();
    $string .= '<li><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>';
  }
  $string .= '</ul>';
  /* скидаємо початкові дані постів */
  wp_reset_postdata();
 } else {
   $string .= 'постів не знайдено';
 }
 return $string;
}
add_shortcode('random-posts','sebweo_rand_posts'); 

add_filter('widget_text', 'do_shortcode');
/////////////////////////////////////////////////////////////////////////////////////