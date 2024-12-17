<?php

// Load stylesheets and js
function scripts() {

    wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], '1.0.0', 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('app');
    
}
add_action('wp_enqueue_scripts', 'scripts');

// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(

    array(
        'top-menu' => 'Top Menu Location',
        'footer-menu' => 'Footer Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )

);

// Custom image sizes
function custom_thumbnail_sizes() {
    add_image_size( 'blog-large', 800, 400, true );
    add_image_size( 'blog-small', 300, 200, true);
}
add_action('after_setup_theme', 'custom_thumbnail_sizes');

// Register sidebars 
function my_sidebars() {

    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

}

add_action('widgets_init', 'my_sidebars');

// Remove <li> wrapper from widgets
function customize_sidebar_widgets($params) {
    // Remove <li> and assign direct classes instead
    $params[0]['before_widget'] = '<div id="' . $params[0]['widget_id'] . '" class="widget ' . $params[0]['widget_name'] . '">';
    $params[0]['after_widget'] = '</div>';
    return $params;
}
add_filter('dynamic_sidebar_params', 'customize_sidebar_widgets');





























?>