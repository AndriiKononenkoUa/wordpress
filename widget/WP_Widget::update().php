<?php 
public function update( $new_instance, $old_instance ) {
  $instance = $old_instance;
  $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
  return $instance;
}
?> 
