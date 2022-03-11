<?php

function load_stylesheets()
{
        
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
        wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');




function include_jquery()
{

        wp_deregister_script('jquery');

        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', '', 1, true);

        add_action('wp_enqueue_scripts','jquery');

}

add_action('wp_enqueue_scripts','include_jquery');





function loadjs()
{
        wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true);
        wp_enqueue_script('customjs');

}

add_action('wp_enqueue_scripts','loadjs');



/* Wordpress support menu */
add_theme_support('menus');

register_nav_menus(

        array(
                'top-menu' => __('Top Menu','theme'),
                'footer-menu' => __('Footer Menu','theme'),
        )
);

/* Wordpress support logo */
function themename_custom_logo_setup() {
        $defaults = array(
            'height'               => 20,
            'width'                => 40,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
     
        add_theme_support( 'custom-logo', $defaults );
    }
     
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


/* Wordpress support logo */
add_theme_support('post_thumbnails');


/* load navwalker */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
