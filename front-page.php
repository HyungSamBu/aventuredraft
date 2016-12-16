<?php
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else { ?>
<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php
			$query = new WP_query('pagename=travel-log');
			//Loop
			if ( $query->have_posts() ) {
				while ($query->have_posts() ) {
					$query->has_post_thumbnail();
						if ($query--> has_post_thumbnail()); {

						echo '<div class="travel-log-entries">';
						get_post_thumbnail();
						echo '</div>';
					}
				}
			}
			wp_reset_postdata();
			?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php }	?>
