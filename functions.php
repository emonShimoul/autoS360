<?php

function autos360_bootstrapping(){
    load_theme_textdomain("autos360");
    register_nav_menu("mainmenu", __("Main Menu", "autos360"));
    $alpha_custom_logo_defaults = array(
        "width" => '100',
        "height" => '100'
    );
    add_theme_support("custom-logo", $alpha_custom_logo_defaults);

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

    // tailwind css
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/assets/styles/tailwind-output.css', array(), '1.0');

    // font awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0', 'all');

}
add_action("wp_enqueue_scripts", "autos360_assets");