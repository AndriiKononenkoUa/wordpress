 
<?php
public function widget( $args, $instance ) {
  $title = apply_filters( 'widget_title', $instance[ 'title' ] );
  $blog_title = get_bloginfo( 'name' );
  $tagline = get_bloginfo( 'description' );
  echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; ?>

  <p><strong>Site Name:</strong> <?php echo $blog_title ?></p>
  <p><strong>Tagline:</strong> <?php echo $tagline ?></p>

  <?php echo $args['after_widget'];
}
?>