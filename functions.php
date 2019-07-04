<?php
add_action( 'wp_enqueue_scripts', 'vss_winterbaikal_enqueue_styles' );

function vss_winterbaikal_enqueue_styles() {
 
    $parent_style = 'journalistic-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
 wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
 wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',array('jquery'),'',true);
 wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}

require_once( get_stylesheet_directory(). '/inc/customizer.php' );

?>
