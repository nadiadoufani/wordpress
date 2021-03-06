<?php
/**
 * The Footer widget areas
 *
 * @package Femina
 * @since Femina 1.0.10
 */

?>

<?php

/*
 * The footer widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'footer-1' ) && ! is_active_sidebar( 'footer-2' ) && ! is_active_sidebar( 'footer-3' ) ) :
	return;
endif;
// If we get this far, we have widgets. Let do this.
?>
<div id="footer-widget-area" role="complementary">	
	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		
		<div id="first-footer-widget" class="widget-area footer-widget-column">
			<?php dynamic_sidebar( 'footer-1' ); ?>
		</div><!-- #first .widget-area -->
		
	<?php endif; ?>
	
	<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
		
		<div id="second-footer-widget" class="widget-area footer-widget-column">
			<?php dynamic_sidebar( 'footer-2' ); ?>
		</div><!-- #second .widget-area -->
		
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
		
		<div id="third-footer-widget" class="widget-area footer-widget-column">
			<?php dynamic_sidebar( 'footer-3' ); ?>
		</div><!-- #third .widget-area -->
		
	<?php endif; ?>

</div><!-- #footer-widget-area -->
