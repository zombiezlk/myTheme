 <?php
 /**
  * The Template for displaying all single posts
  *
  * @package WordPress
  * @subpackage Twenty_Fourteen
  * @since Twenty Fourteen 1.0
  */ 
 get_header(); ?>
   <div id="main-content" class="main-content">
 
 	<div id="primary" class="content-area single-content-area">
 
 		<?php 
 				// Start the Loop.
 				while ( have_posts() ) : the_post();
 		?>
 
 		<div class="article">
 			<div class="title">
 				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 			</div>
 	
 			<div class="post_date">
 				<?php the_time('Y') ?>&nbsp<?php the_time('m') ?>&nbsp<?php the_time('d') ?>&nbsp &nbsp <span class="post_cat"><?php the_category(', 				') ?></span>
 			</div>
 
 			<div class="content">
 				<?php the_content(); ?>
 			</div>
 
 			<hr></hr>
 
 		</div>
 
 		<?php		// If comments are open or we have at least one comment, load up the comment template.
 				if ( comments_open() || get_comments_number() ) {
 					comments_template();	
 				}
 				endwhile;
 		?>
 
	</div><!-- #primary -->

		<div id="clear"></div>

</div><!-- #main-content -->
		<?php get_sidebar(); ?>
		<?php get_template_part('footer'); ?>

 </div><!-- #page -->
 
                
 
 
 
