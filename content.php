<?php
/**
 * The default template for displaying content
 *
 * Used for index/archive/search.
 *
 * 
 */
?>

<div class="article">
	<div class="title">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
	
	<div class="post_date">
		<?php the_time('Y') ?>&nbsp<?php the_time('m') ?>&nbsp<?php the_time('d') ?>&nbsp &nbsp <span class="post_cat"><?php the_category(', ') ?></span>
	</div>

	<div class="content">
		<?php the_excerpt(); ?>
	</div>

	<hr></hr>

</div>


