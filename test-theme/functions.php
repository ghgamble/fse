<?php
// Theme setup
function test_theme_setup() {
    add_theme_support( 'block-editor' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'test_theme_setup' );

// Enqueue styles
function test_theme_enqueue_styles() {
    wp_enqueue_style( 'test-theme-style', get_template_directory_uri() . '/assets/style.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'test-theme-editor-style', get_template_directory_uri() . '/assets/editor-style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'test_theme_enqueue_styles' );
add_action( 'enqueue_block_editor_assets', 'test_theme_enqueue_styles' );
