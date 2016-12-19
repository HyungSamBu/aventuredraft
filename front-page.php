

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

			<section id = "recent-post">
				<div>
					<?php
						$parems = array(
							'pagename' => 'travel-log' ,
							'posts_per_page' => 1,
							'ignore_sticky_posts' => 1, );
						$query = new WP_query( $parems );
						//The Content Loop
						if ( $query->have_posts()) {
							while ($query->have_posts()) {
								$query->the_post();
								echo '<h1 class="entry-title">';
								the_title();
								echo'</h1>';

								the_post_thumbnail();

								echo '<div class="entry-meta">';
								the_meta();
								echo '</div>';

								echo '<div class="entry-content">';
								the_content();
								echo '</div>';
							}
						}

						wp_reset_postdata();
					?>
				</div>
			</section>
			<section id="instagram">
				<div class="indent clear">
					<?php 
					$query = new WP_Query( 'pagename=instagram' );
						// The Loop
						if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<h1 class="entry-title">';
								the_title();
								echo'</h1>';
							echo '<div class="entry-content">';
							the_content();
							echo '</div>';
						}
					}

						/* Restore original Post Data */
						wp_reset_postdata();
					?>
				</div><!-- .indent -->
			</section><!-- #instagram -->
			<section id="meet">
				<div class="indent clear">
					<?php 
					$query = new WP_Query( 'pagename=wheres-meagen' );
						// The Loop
						if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<h1 class="entry-title">';
								the_title();
								echo'</h1>';
							echo '<div class="entry-content">';
							the_content();
							echo '</div>';
						}
					}

						/* Restore original Post Data */
						wp_reset_postdata();
					?>
				</div><!-- .indent -->
			</section><!-- #meet -->

	
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
