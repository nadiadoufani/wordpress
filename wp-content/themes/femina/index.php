<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Femina
 * @since Femina 1.0.7
 */

get_header(); ?>
<div id="main-content" class="main-content">
	<div class="blog-inner">
	<?php
	if ( have_posts() ) :
		// Start the Loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', get_post_format() );
		endwhile; ?>
	</div>
<?php
		// Previous/next page navigation.
		femina_blog_navigation();
	else :
		// If no content, include the "No posts found" template.
		get_template_part( 'template-parts/content', 'none' );
	endif;
	?>
</div><!--/main-content-->

<?php get_sidebar( 'sidebar' ); ?>  
<?php get_footer(); ?>
