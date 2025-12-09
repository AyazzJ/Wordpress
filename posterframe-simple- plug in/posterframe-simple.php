<?php
/**
 * Plugin Name: Posterframe Simple Helper
 * Plugin URI: https://example.com/posterframe-simple
 * Description: Very small helper plugin. Adds a shortcode [posterframe_hero] that outputs a hero image. Useful for quickly inserting a hardcoded hero image into content or templates.
 * Version: 1.0.0
 * Author: Posterframe
 * License: GPLv2 or later
 * Text Domain: posterframe-simple
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}


function pfs_enqueue_styles() {
    wp_register_style('pfs-inline-style', false);
    wp_enqueue_style('pfs-inline-style');

    $custom_css = "
    .pfs-hero-img { display: block; width: 100%; height: auto; object-fit: cover; aspect-ratio: 3 / 4; border-radius: var(--posterframe-radius, 14px); box-shadow: var(--posterframe-shadow, none); }
    ";

    wp_add_inline_style('pfs-inline-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'pfs_enqueue_styles');


function pfs_hero_shortcode( $atts ) {
    $defaults = array(
        'url'   => 'http://wordpressclass.local/wp-content/uploads/2025/12/xl_spider-man-into-the-spider-verse-movie-poster_539d3b77.jpg',
        'alt'   => '',
        'class' => '',
    );

    $atts = shortcode_atts( $defaults, $atts, 'posterframe_hero' );

    $img_url = esc_url( $atts['url'] );
    $alt     = esc_attr( $atts['alt'] );
    $class   = trim( 'pfs-hero-img ' . sanitize_html_class( $atts['class'] ) );

    return '<img src="' . $img_url . '" alt="' . $alt . '" class="' . esc_attr( $class ) . '" />';
}
add_shortcode( 'posterframe_hero', 'pfs_hero_shortcode' );


function pfs_admin_notice() {
    if ( ! current_user_can( 'activate_plugins' ) ) {
        return;
    }

    $screen = get_current_screen();
    if ( $screen && in_array( $screen->id, array( 'dashboard', 'appearance_page_theme' ), true ) ) {
        ?>
        <div class="notice notice-success is-dismissible">
            <p><?php echo esc_html__( 'Posterframe Simple Helper active — use the shortcode ', 'posterframe-simple' ); ?> <code>[posterframe_hero]</code><?php echo esc_html__( ' or pass a URL: ', 'posterframe-simple' ); ?> <code>[posterframe_hero url="https://.../image.jpg"]</code></p>
        </div>
        <?php
    }
}
add_action( 'admin_notices', 'pfs_admin_notice' );
