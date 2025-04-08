<?php

//Add Styles
function add_styles()
{
    wp_enqueue_style('framework', get_template_directory_uri() . '/css/framework.css', array(), '2.0', 'all'); //all screen media 

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/all.min.css');
    // wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array(), rand(111, 999), 'all'); //for development to update css file
    // wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), rand(111, 999), 'all'); //for development to update css file

    // wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.1', 'all'); //all screen media 
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), rand(111, 999), 'all'); //for development to update css file

}

//Add Scripts
function add_scripts()
{
    // wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), '3.5.1', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), false, true);
    // wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
    // jquery
    wp_enqueue_script('jquery-core', false, array(), false, true);
    wp_enqueue_script('jquery-migrate', false, array(), false, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array(), false, true);

    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), rand(111, 999), true);
}

//Add Actions
add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');
//add theme support for search form html5
add_theme_support('html5', array('search-form'));
add_theme_support('post-thumbnails');
// add_image_size('custom-size', 400, 10, true); // Add this in functions.php
// the_post_thumbnail('custom-size');


include_once('navwalker.php');
//Register menue
register_nav_menu('header', 'Header Menu');

// Add menue to design 
function header_menu()
{
    wp_nav_menu(
        array(
            'theme_location' => 'header',
            'container'            => false,
            // 'container'            => 'div',
            // 'container_class'      => '',
            // 'container_id'         => '',
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            // 'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new bootstrap_5_wp_nav_menu_walker()
        )
    );
}


// create heading and description component
function title_box(string $title = 'title', string $description = 'description', int $title_class = 1): string
// add to this function constrand inputs

{
    // convert this 'title-one' to be numbers 1 to 5 by using case
    switch ($title_class) {
        case 1:
            $title_class = 'title-one';
            break;
        case 2:
            $title_class = 'title-two';
            break;
        case 3:
            $title_class = 'title-three';
            break;
        case 4:
            $title_class = 'title-four';
            break;
        case 5:
            $title_class = 'title-five';
            break;
        default:
            $title_class = 'title-one';
            break;
    }
    $output = '';
    $output .= '<div class="title-box">';
    $output .= '<h2 class= ' . $title_class . ' >' . $title . '</h2>';
    $output .= '<p class="description">' . $description . '</p>';
    $output .= '</div>';
    return $output;
}


add_image_size('portrait-thumb', 300, 600, true); // 1:2 ratio, hard crop


// Enable Widgets
function enable_widgets()
{
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}
add_action("widgets_init", "enable_widgets");


function enable_widgets_search()
{
    register_sidebar(array(
        'name' => 'Main Sidebar Search',
        'id' => 'main-sidebar-search',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}
add_action("widgets_init", "enable_widgets_search");
