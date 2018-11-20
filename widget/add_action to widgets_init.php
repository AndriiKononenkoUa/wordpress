<?php 
function jpen_register_example_widget() { 
  register_widget( 'jpen_Example_Widget' );
}
add_action( 'widgets_init', 'jpen_register_example_widget' );
?> 
