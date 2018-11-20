<?php
public function __construct() {
    $widget_options = array( 
      'classname' => 'example_widget',
      'description' => 'This is an Example Widget',
    );
    parent::__construct( 'example_widget', 'Example Widget', $widget_options );
  }
?> 
