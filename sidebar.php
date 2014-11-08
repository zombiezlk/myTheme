<?php
if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>
<div id="sidebar">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</div>
