<?php
/* register widget areas */
function jpen_sidebar_widget_area() {
  register_sidebar( array(
    'name'          => 'Sidebar Widget Area',
    'id'            => 'jpen-sidebar-widgets',
    'before_widget' => '<div class="well">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
    ));
}
add_action( 'widgets_init' , 'jpen_sidebar_widget_area' );
?> 
