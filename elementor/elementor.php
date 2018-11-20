<?php
/**
 * Template Name: Elementor
 *
 * @package WordPress
 * @subpackage Orangeweb
 * @since 1.0.0
 *
 * 2016 - Desenvolvido por Agência Orangeweb - www.orangeweb.com.br
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<title><?php wp_title(); ?></title>
		<?php do_action( 'get_header', "" ); ?>
		<?php wp_head(); ?>
		<style>
		body{
			background: none !important;
			background_color: #FFF !important;
		}
		*, *:before, *:after {
		    margin:0px;
		    padding:0px;
		    -webkit-box-sizing:border-box;
		    -moz-box-sizing:border-box;
		    box-sizing:border-box;
		    border:0px;
		    font-size:100%;
		    font:inherit;
		    outline:0;
		}
		</style>
		<link rel='stylesheet' id='style-css' href="https://necolas.github.io/normalize.css/latest/normalize.css"/>
	</head>
    <body <?php body_class(); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
      <?php wp_footer(); ?>
    </body>
  </html>