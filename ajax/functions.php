<?php
/*
* Basic search form for WP Advanced Search
* See http://wpadvancedsearch.com to learn more 
*/
require_once('wp-advanced-search/wpas.php');
function demo_ajax_search() {
  $args = array();
  $args['wp_query'] = array( 'post_type' => array('page', 'post'), 
                             'orderby' => 'title', 
                             'order' => 'ASC' );
  $args['form'] = array( 'auto_submit' => true );
  $args['form']['ajax'] = array( 'enabled' => true,
                             'show_default_results' => true,
                             'results_template' => 'template-ajax-results.php', // This file must exist in your theme root
                             'button_text' => 'Load More Results');
  $args['fields'][] = array( 'type' => 'search', 
                             'placeholder' => 'Enter search terms' );
  $args['fields'][] = array( 'type' => 'post_type', 
                             'format' => 'checkbox', 
                             'label' => 'Search by post type', 
                             'values' => array('page' => 'Pages', 'post' => 'Posts') ,
                             'default_all' => true );
  $args['fields'][] = array( 'type' => 'orderby', 
                             'format' => 'select', 
                             'label' => 'Order by', 
                             'values' => array('title' => 'Title', 'date' => 'Date') );
  $args['fields'][] = array( 'type' => 'order', 
                             'format' => 'radio', 
                             'label' => 'Order', 
                             'values' => array('ASC' => 'ASC', 'DESC' => 'DESC'), 
                             'default' => 'ASC' );
  $args['fields'][] = array(  'type' => 'taxonomy',
                              'format' => 'checkbox',
                              'label' => 'Filter results by category',
                              'taxonomy' => 'category',
                              'default_all' => false,
                              'operator' => 'IN' );
  $args['fields'][] = array( 'type' => 'posts_per_page', 
                             'format' => 'select', 
                             'label' => 'Results per page', 
                             'values' => array(2=>2, 5=>5, 10=>10), 
                             'default' => 10 );
  $args['fields'][] = array( 'type' => 'reset',
                             'class' => 'button',
                             'value' => 'Reset' );
  register_wpas_form('myform', $args);
}
add_action('init', 'demo_ajax_search');
?>