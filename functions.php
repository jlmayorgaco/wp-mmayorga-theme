<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function mayorga_landing_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mayorga_landing_setup' );

function mayorga_landing_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style(
        'mayorga-main',
        get_template_directory_uri() . '/css/main.css',
        array(),
        $theme_version
    );

    wp_enqueue_script(
        'mayorga-main-js',
        get_template_directory_uri() . '/js/main.js',
        array(),
        $theme_version,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'mayorga_landing_assets' );



function mm_theme_enqueue_assets() {
    // style.css del tema
    $style_path = get_stylesheet_directory() . '/style.css';

    wp_enqueue_style(
        'mm-theme-style',
        get_stylesheet_uri(),
        [],
        filemtime( $style_path ) // versión = fecha de modificación del archivo
    );

    // Si más adelante agregas main.js, puedes hacer lo mismo:
    // $script_path = get_template_directory() . '/js/main.js';
    // wp_enqueue_script(
    //     'mm-theme-main',
    //     get_template_directory_uri() . '/js/main.js',
    //     [],
    //     filemtime( $script_path ),
    //     true
    // );
}
add_action( 'wp_enqueue_scripts', 'mm_theme_enqueue_assets' );