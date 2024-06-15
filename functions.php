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
        wp_enqueue_style('normalize_css', get_template_directory_uri() . '/assets/libs/normalize/normalize.css', array(), _S_VERSION);
        wp_enqueue_style('slick_css', get_template_directory_uri() . '/assets/libs/slick/slick.css', array(), _S_VERSION);

    }
    add_action('wp_enqueue_scripts', 'includeStyles');
    
    // scripts
    function includeScripts(){
        wp_deregister_script('jquery'); //Jquery
		wp_register_script('jquery', 'https://code.jquery.com/jquery-2.2.0.min.js');
		wp_enqueue_script('jquery');
        
        wp_enqueue_script('slick_js', get_template_directory_uri() . '/assets/libs/slick/slick.js', array(), _S_VERSION);
        wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION);

    }
    add_action('wp_footer', 'includeScripts');

?>