<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aventure
 */

if ( ! is_active_sidebar( 'footer' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area-bottom" role="complementary">
	<div class="bottom-sidebar">
		<?php dynamic_sidebar( 'footer' ); ?>
	</div>
</aside><!-- #secondary -->
