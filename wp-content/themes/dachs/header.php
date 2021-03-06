<?php
/**
 * Template for displaying visible and invisible header.
 *
 * @package Bornholm
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<?php if ( is_singular() && pings_open() ) { ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php }
	wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header" class="clearfix" role="banner">
	<div class="header_image">
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if ( get_header_image() ) { ?>
					<img src="<?php echo esc_url( get_header_image() ); ?>"
					     alt="<?php echo esc_html( get_bloginfo( 'title' ) ); ?>"/>
				<?php } else {
					bloginfo( 'title' );
				} ?>
			</a>
		</h1>
		<!--<?php if ( get_bloginfo( 'description' ) != '' ) { ?>
			<h2 class="blog-description">
				<?php bloginfo( 'description' ); ?>
			</h2>-->
		<?php } ?>
	</div>
    
	<button class="menu-button show-menu">≡</button>
	<nav role="navigation">
		<?php wp_nav_menu( array(
			'theme_location' => 'header-menu',
			'container'      => '',
			'fallback_cb'    => '__return_false'
		) ); ?>
		<button class="hide-menu menu-button">×</button>
	</nav>
    </header>
    <?php //echo do_shortcode('[metaslider id="1284"]'); ?>
<div id="wrapper" class="clearfix">
