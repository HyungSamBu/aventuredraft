<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aventure
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php

	?>
	<header class="entry-header">

		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<?php
		if ( has_post_thumbnail() ) { ?>

		<figure class="featured-image">
			<?php the_post_thumbnail(); ?>
		</figure>
		<?php }
		?>
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="content-wrapper">
		<div class="entry-meta">
			<!--?php aventure_posted_on(); ?>-->
			<span class='month'><?php the_time('F'); ?></span></br>
			<span class='day'><?php the_time('j');?></span>	
		</div><!-- .entry-meta -->
		<div class="entry-wrapper">
			<div class="entry-content">
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'aventure' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aventure' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php aventure_entry_footer(); ?>
			</footer><!-- .entry-footer -->
			<?php
			get_template_part( 'template-parts/post-navigation', get_post_format() );
			?>
		</div><!--entry wrapper-->
	</div><!--content wrapper-->
</article><!-- #post-## -->
