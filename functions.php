<?php
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );

function test_register_assets() {
wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css');
wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', [ 'popper'], false, true);
wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);

wp_enqueue_style('bootstrap');
wp_enqueue_style('style', get_stylesheet_uri());
wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts', 'test_register_assets');

register_nav_menus( array(
	'main' => 'main menu',
	'footer' => 'footer',
) );

register_sidebar( array(
	'id' => 'home-sidebar',
	'name' => 'Home page',
) );

$header_info = array(
    'width'         => 980,
    'height'        => 60,
    'default-image' => get_template_directory_uri() . 'header.jpg',
);
add_theme_support( 'custom-header', $header_info );


function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'header.jpg',
        'default-text-color' => '000',
        'width'              => 1290,
        'height'             => 500,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );
