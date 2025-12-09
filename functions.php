<?php
/**
 * Posterframe theme setup and helpers.
 */

if (!defined('POSTERFRAME_VERSION')) {
    define('POSTERFRAME_VERSION', wp_get_theme()->get('Version'));
}

add_action('after_setup_theme', function () {
    load_theme_textdomain('posterframe', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 120,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script', 'navigation-widgets']);
    add_theme_support('woocommerce');

    add_image_size('posterframe-portrait', 960, 1344, true);
    add_image_size('posterframe-landscape', 1344, 960, true);

    register_nav_menus([
        'primary' => __('Primary Menu', 'posterframe'),
        'footer'  => __('Footer Menu', 'posterframe'),
    ]);
});

add_action('widgets_init', function () {
    register_sidebar([
        'name'          => __('Footer Widgets', 'posterframe'),
        'id'            => 'footer-widgets',
        'description'   => __('Appears in the footer area.', 'posterframe'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
});

add_action('wp_enqueue_scripts', function () {
    $theme_version = POSTERFRAME_VERSION;

    wp_enqueue_style('posterframe-style', get_stylesheet_uri(), [], $theme_version);
    wp_enqueue_style(
        'posterframe-theme',
        get_template_directory_uri() . '/assets/css/theme.css',
        ['posterframe-style'],
        $theme_version
    );

    wp_enqueue_script(
        'posterframe-scripts',
        get_template_directory_uri() . '/assets/js/theme.js',
        [],
        $theme_version,
        true
    );
});

add_filter('body_class', function ($classes) {
    $classes[] = 'posterframe-body';
    return $classes;
});

/**
 * Trims excerpt length for cleaner grids.
 */
add_filter('excerpt_length', function () {
    return 20;
});

/**
 * Appends a custom read more indicator for excerpts.
 */
add_filter('excerpt_more', function () {
    return ' …';
});
