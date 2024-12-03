<?php

function autos360_bootstrapping(){
    load_theme_textdomain("autos360");
    // register_nav_menu("mainmenu", __("Main Menu", "autos360"));
    register_nav_menu('primary-menu', __('Primary Menu', 'autos360'));

    // for logo
    $defaults = array(
        'height'      => 100, // Change to desired height
        'width'       => 400, // Change to desired width
        'flex-height' => true,
        'flex-width'  => true,
    );
    add_theme_support('custom-logo', $defaults);


    // for gutenberg
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
}
add_action("after_setup_theme", "autos360_bootstrapping");


function autos360_assets(){
    wp_enqueue_style("autos360", get_stylesheet_uri());
    wp_enqueue_style('banner-style', get_template_directory_uri() . '/assets/styles/banner.css');
    wp_enqueue_style('slider-style', get_template_directory_uri() . '/assets/styles/slider.css');

    // tailwind css
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/assets/styles/tailwind-output.css', array(), '1.0');

    // font awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0', 'all');


    wp_enqueue_script(
        'autos360-slider', // Unique handle for your script
        get_template_directory_uri() . '/assets/js/slider.js', // Path to the file
        array('jquery'), // Dependencies (optional, e.g., jQuery)
        '1.0.0', // Version number
        true // Load in footer (true) or header (false)
    );

}
add_action("wp_enqueue_scripts", "autos360_assets");