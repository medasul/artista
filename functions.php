<?php
function artista_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}

add_action('after_setup_theme', 'artista_setup');

function artista_enqueue_assets() {
    wp_enqueue_style('artista-style', get_stylesheet_uri());
    wp_enqueue_style('artista-additional-style', get_template_directory_uri() . '/styles/style.css');
    wp_enqueue_script('artista-script', get_template_directory_uri() . '/script.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'artista_enqueue_assets');
?>