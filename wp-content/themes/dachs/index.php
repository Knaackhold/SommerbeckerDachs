<?php
/**
 * Main template file.
 *
 * @package Bornholm
 */

get_header(); ?>
	<main role="main">
        <?php echo do_shortcode('[metaslider id="1284"]'); ?>
		<?php if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'content', get_post_format() );
			}
		}
		the_posts_pagination( array( 'type' => 'list' ) ); ?>
	</main>
<?php //get_sidebar();
//get_footer();
