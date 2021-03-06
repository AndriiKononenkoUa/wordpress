<?php 
/*
* This template displays the Ajax Advanced Search Page.
* Template Name: Ajax Advanced Search Page
* See http://wpadvancedsearch.com to learn more 
*/
get_header();
$search = new WP_Advanced_Search('myform');
?>

<div class="row search-section">
   <div id="sidebar" class="large-3 columns">
      <?php $search->the_form(); ?>
   </div>

   <div class="search-results large-9 columns">
         <div id="wpas-results"></div> <!-- This is where our results will be loaded -->
   </div>
</div>

<?php get_footer(); ?> 
