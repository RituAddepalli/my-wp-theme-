<?php
function mytheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'main-menu' => __('Main Menu', 'mytheme'),
    ]);
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('toggle-mode', get_template_directory_uri() . '/assets/js/toggle-mode.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');
?>
