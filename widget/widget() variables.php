<?php 
  $title = apply_filters( 'widget_title', $instance[ 'title' ] );
  $categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
    ) );
  $cat_count = 0;
  $cat_col_one = [];
  $cat_col_two = [];
?> 
