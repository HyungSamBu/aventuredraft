<?php
/**
 * Template part for displaying post header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aventure
 */

?>
	
<?php

		the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next:', 'aventure' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'aventure' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous:', 'aventure' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'aventure' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

?>


	