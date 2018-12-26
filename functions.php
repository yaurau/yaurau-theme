<?php
/**
 * yaurau-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yaurau-theme
 */

/**
 * Enqueue scripts and styles.
 */
function yaurau_theme_scripts() {

    wp_register_style('yaurau-theme-style-bootstrape', get_template_directory_uri(). '/css/bootstrap.min.css');
    wp_enqueue_style('yaurau-theme-style-bootstrape');

    wp_register_style('yaurau-theme-style-mdb', get_template_directory_uri(). '/css/mdb.min.css');
    wp_enqueue_style('yaurau-theme-style-mdb');

    wp_register_style('yaurau-theme-style-time', get_template_directory_uri(). '/countdown/css/style.css');
    wp_enqueue_style('yaurau-theme-style-time');

    wp_register_style('yaurau-theme-style-yaurau', get_template_directory_uri(). '/css/yaurau.css');
    wp_enqueue_style('yaurau-theme-style-yaurau');

    wp_register_style('yaurau-theme-style-gallery', get_template_directory_uri(). '/gallery/css/gallery.css');
    wp_enqueue_style('yaurau-theme-style-gallery');

    wp_enqueue_style( 'yaurau-theme-style', get_stylesheet_uri() );

    wp_register_script('yaurau-theme-script-jquery', get_template_directory_uri(). '/js/jquery-3.3.1.min.js');
    wp_enqueue_script('yaurau-theme-script-jquery');

	wp_register_script('yaurau-theme-script-popper', get_template_directory_uri(). '/js/popper.min.js',array(), false, true);
    wp_enqueue_script('yaurau-theme-script-popper');

    wp_register_script('yaurau-theme-script-bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js',array(), false, true);
    wp_enqueue_script('yaurau-theme-script-bootstrap');

    wp_register_script('yaurau-theme-script-mdb', get_template_directory_uri(). '/js/mdb.min.js',array(), false, true);
    wp_enqueue_script('yaurau-theme-script-mdb');

    wp_register_script('yaurau-theme-script-time', get_template_directory_uri(). '/countdown/js/countdown.js',array(), false, true);
    wp_enqueue_script('yaurau-theme-script-time');

    wp_register_script('yaurau-theme-script-gallery', get_template_directory_uri(). '/gallery/js/gallery.js',array(), false, true);
    wp_enqueue_script('yaurau-theme-script-gallery');

    wp_register_script('yaurau-theme-script-menu', get_template_directory_uri(). '/js/menu.js',array(), false, true);
    wp_enqueue_script('yaurau-theme-script-menu');

    wp_register_script('yaurau-theme-script-yaurau', get_template_directory_uri(). '/js/yaurau.js',array(), false, true);
    wp_enqueue_script('yaurau-theme-script-yaurau');

}
add_action( 'wp_enqueue_scripts', 'yaurau_theme_scripts' );

/**
 * Edit admin menu.
 */
function yaurau_edit_admin_menus() {
    global $menu;
    $menu[20][0] = 'Landing page';
}
add_action( 'admin_menu', 'yaurau_edit_admin_menus' );

/**
 * Remove action
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head','rel_canonical');
remove_action('wp_head','adjacent_posts_rel_link_wp_head');
remove_action('wp_head','feed_links_extra', 3);
remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action('wp_head', 'feed_links', 2);
add_filter( 'show_recent_comments_widget_style', '__return_false', 99 );
add_filter('show_admin_bar', '__return_false');

/*
 * Disable the WordPress visual editor for all pages
 */
function disable_visual_editor()
{
    global $post;


    $post_type = get_post_type($post);
    if ($post_type == 'page') {
        return false;
    }
}
add_filter('user_can_richedit', 'disable_visual_editor');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';



