<?php
/**
 * Template part for displaying the footer bottom sidebar.
 *
 * @package Bornholm
 */
?>



<nav role="navigation2">
		<?php wp_nav_menu( array(
			'theme_location' => 'footer-menu',
			'container'      => '',
			'fallback_cb'    => '__return_false'
		) ); ?>
	</nav>
</footer>
