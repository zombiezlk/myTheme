<?php
/**
 *myTheme functions and definition
 *
 *
 *
 * 
 **/




/**
 *
 *Change the length of excerpt
 *
 **/
function custom_excerpt_length($length) {
    return 250;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




/**
 *
 *Change the style of excerpt
 *
**/ 

function emtx_auto_excerpt_more( $more ) {
  return '<br></br> <a href="'. get_permalink() . '" class="readmore">read more</a>';
}
add_filter( 'excerpt_more', 'emtx_auto_excerpt_more' );
 
function emtx_custom_excerpt_more( $output ) {
  if ( has_excerpt() && ! is_attachment() ) {
    $output .= emtx_continue_reading_link();
  }
  return $output;
}
add_filter( 'get_the_excerpt', 'emtx_custom_excerpt_more' );
?>
