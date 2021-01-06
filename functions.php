<?php

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/template-parts/navbar.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );





function tema1_agregar_css_js()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.18', true);
    //JS personalizados
    wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js', '', '1.0', true);
}

add_action('wp_enqueue_scripts', 'tema1_agregar_css_js');

//soporte imagenes destacadas
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

function tema1_setup(){
    //soporte imagenes destacadas
    if(function_exists('add_theme_support')){
        add_theme_support('post_thumbnials');
    }
    add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'tema1_setup' );


//agregar sidebar

function tema1_widgets()
{
    register_sidebar(array(
        'id' => 'widgets-derecha',
        'name' => __('Widget Derecha'),
        'before_widget' => '<div class="card-body bluu-wi">',
        'after_widget' => '</div>',
        'before_title'  => '<h4>',
        'after_title' => '</h4><hr>'
    ));
}

add_action('widgets_init', 'tema1_widgets');

//registrar menus
function tema1_register_my_menus()
{
    register_nav_menus(
        array(
            'menu-principal' => __('Menu Superior')
        )
    );
}
add_action('init', 'tema1_register_my_menus');
