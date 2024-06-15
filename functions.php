<?php 
    if ( ! defined( '_S_VERSION' ) ) {
        define( '_S_VERSION', '1.0.0' );
    }

    function custom_theme_setup() {
        add_theme_support( 'custom-logo' );
    }
    add_action( 'after_setup_theme', 'custom_theme_setup' );

    // styles
    function includeStyles(){
        wp_enqueue_style('style_css', get_stylesheet_uri(), array(), _S_VERSION);
        wp_enqueue_style('mormalize_css', get_template_directory_uri() . '/assets/libs/normalize/normalize.css', array(), _S_VERSION);
    }
    add_action('wp_enqueue_scripts', 'includeStyles');
    
    // scripts
    // function includeScripts(){
        // wp_enqueue_style('main_js', get_stylesheet_uri(), array(), _S_VERSION);
    // }
    // add_action('wp_footer', 'includeScripts');

?>