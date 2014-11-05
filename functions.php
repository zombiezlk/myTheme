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


/**
 *
 *Import javaScript
 *
**/ 
function myTheme_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'myTheme_scripts_with_jquery' );
?>
