// The Loop
/*
* Usage: loop category="news" query="" pagination="false"
*/

<?php
add_shortcode("loop", "myLoop");
function myLoop($atts, $content = null) {
	extract(shortcode_atts(array(
	"pagination" => 'true',
	"query" => '',
	"category" => '',
	), $atts));
	
	global $wp_query,$paged,$post;
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	if($pagination == 'true'){
		$query .= '&paged='.$paged;
	}
	if(!empty($category)){
		$query .= '&category_name='.$category;
	}
	if(!empty($query)){
		$query .= $query;
	}
	$wp_query->query($query);
	ob_start();
	?>
	<ul class="loop">
		<?php have_posts()) : $wp_query->the_post(); ?>
		<li><a href="" rel="bookmark"></li>
		<?php endwhile; ?>
	</ul>
	<?php if($pagination == 'true'){ ?>
	<div class="navigation">
	  <div class="alignleft"><?php previous_posts_link('« Previous') ?></div>
	  <div class="alignright"><?php next_posts_link('More »') ?></div>
	</div>
	<?php } ?>
	<?php 
	$wp_query = null; 
	$wp_query = $temp;
	wp_reset_query();
	$content = ob_get_contents();
	ob_end_clean();
	
	return $content;
}
?> 
