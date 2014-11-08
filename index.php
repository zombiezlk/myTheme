<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 */

get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					get_template_part( 'content');
			
				endwhile;
				// Previous/next post navigation.

			else :
		?>
				 <p>Sorry, no posts matched your criteria.</p>	// If no content, include the "No posts found" template.

			<?php endif;?>

	</div><!-- #primary -->
	
	<?php get_sidebar(); ?>
	<div id="clear"></div>

</div><!-- #main-content -->

		<?php get_template_part( 'footer'); ?>

</div><!-- #page -->

		
               



