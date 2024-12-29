<?php

function autos360_bootstrapping(){
    load_theme_textdomain("autos360");
    add_theme_support("post-thumbnails");
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

// Register a Custom Post Type (Product)
function create_product_post_type() {
    register_post_type('product',
        array(
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Product')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'products'),
        )
    );
}
add_action('init', 'create_product_post_type');

// For Additional Meta Fields
function product_meta_boxes() {
    add_meta_box(
        'product_details',
        'Product Details',
        'render_product_meta_box',
        'product',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'product_meta_boxes');

function render_product_meta_box($post) {
    // Retrieve current meta values
    $model = get_post_meta($post->ID, '_product_model', true);

    // Display fields
    echo '<label for="product_model">Model: </label>';
    echo '<input type="text" id="product_model" name="product_model" value="' . esc_attr($model) . '" />';
}

// Save meta fields
function save_product_meta_fields($post_id) {
    if (array_key_exists('product_model', $_POST)) {
        update_post_meta($post_id, '_product_model', sanitize_text_field($_POST['product_model']));
    }
}
add_action('save_post', 'save_product_meta_fields');


