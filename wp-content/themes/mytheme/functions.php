<?php


//Load Stylesheets
function load_css(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', null , false, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', null , false, 'all' );
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');


//Load Scripts
function load_js(){
    wp_enqueue_script( 'jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js', 'jquery', false, true);
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'load_js');


//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');




//Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Region',
        'mobile-menu' => 'Mobile Menu Region',
    )

);


// Custom Images Sizes
add_image_size('img-large', 1300, 500, true);
add_image_size('img-small', 200, 200, true);

//Creating a Custom Post Type Coffee
function my_first_coffee() {
    $args = array (

        'labels' => array(
            'name' => 'Coffees',
            'singular_name' => 'Coffee'
        ),
        'hierarchical' => true, //we want to behave like a page if false it behaves like a post
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-store',
        'supports' => array ('title', 'editor', 'thumbnail', 'custom-fields', 'comments', 'excerpt'),
        'rewrite' => array('slug' => 'our-coffees'),
    );

    register_post_type( 'coffees', $args );
}
add_action('init', 'my_first_coffee');

//Creating a Taxonomy Coffee
function coffee_taxonomy(){
    $args = array(
        'labels' => array (
            'name' => 'Categories',
            'singular_name' => 'Category',
        ),
        'public' => true,
        'hierarchical' => true, //true to make it behave like a category, false to make it behave like a tag

    );

    register_taxonomy( 'categories', array('coffees'), $args );
}
add_action('init', 'coffee_taxonomy');


?>

