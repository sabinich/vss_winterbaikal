<?php
add_action( 'wp_enqueue_scripts', 'vss_winterbaikal_enqueue_styles' );

function vss_winterbaikal_enqueue_styles() {
 
    $parent_style = 'journalistic-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
 wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css',true );  
 wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri().'/font-awesome/css/font-awesome.css',true );
}

require_once( get_stylesheet_directory(). '/inc/customizer.php' );

?>
