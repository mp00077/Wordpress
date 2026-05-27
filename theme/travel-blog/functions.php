<?php
/**
 * Travel Blog theme functions.
 *
 * @package TravelBlog
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'travel_blog_setup' ) ) {
	/**
	 * Sets up theme defaults.
	 */
	function travel_blog_setup(): void {
		load_theme_textdomain( 'travel-blog', get_template_directory() . '/languages' );

		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_editor_style( 'style.css' );
	}
}
add_action( 'after_setup_theme', 'travel_blog_setup' );

/**
 * Registers block pattern categories.
 */
function travel_blog_register_pattern_categories(): void {
	register_block_pattern_category(
		'travel-blog',
		array( 'label' => __( 'Travel Blog', 'travel-blog' ) )
	);
}
add_action( 'init', 'travel_blog_register_pattern_categories' );

/**
 * Enqueues theme assets.
 */
function travel_blog_enqueue_assets(): void {
	wp_enqueue_script(
		'travel-blog-motion',
		get_theme_file_uri( 'assets/js/motion.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'travel_blog_enqueue_assets' );
