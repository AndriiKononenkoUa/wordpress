<?php 
public function form( $instance ) {
  $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
  <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
    <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
  </p><?php 
}
?> 
