<?php
/**
 * Template for displaying the galleries in a portfolio view.
 *
 * Template Name: Portfolio page
 * Description: Displays all galleries.
 *
 * @package Bornholm
 */

get_header(); ?>
	<main role="main">
		<?php echo do_shortcode('[metaslider id="1284"]'); ?>
        <div id="news">
            <div id="news_head">
                <div class="logo"><img id="logo_start" class="logo_start" src="/260714-brauereifest.png"></div>
                <div id="news_heading">Neues aus dem Dachsbau</div></div>
        <?php
$args = array( 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?> 
    <div class="post">
        <div class="post_title"><?php the_title(); ?></div>
        <div class="post_date"><?php the_date(); ?></div>
        <div class="post_excerpt"><?php the_content(); ?></div>
    </div>
<?php endforeach; ?>
        </div>
	</main>
<?php get_footer();
