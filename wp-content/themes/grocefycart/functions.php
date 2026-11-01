<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'GROCEFYCART_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'GROCEFYCART_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
define( 'GROCEFYCART_DIR', trailingslashit( get_template_directory() ) );
define( 'GROCEFYCART_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'grocefycart_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since walker_fse 1.0.0
	 *
	 * @return void
	 */
	function grocefycart_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'post-thumbnails' );
		// Enqueue editor styles.
		add_editor_style( 'style.css' );
		// Removing default patterns.
		remove_theme_support( 'core-block-patterns' );
	}

endif;
add_action( 'after_setup_theme', 'grocefycart_support' );

/*
----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'grocefycart_styles' ) ) :
	function grocefycart_styles() {
		// registering style for theme
		wp_enqueue_style( 'grocefycart-style', get_stylesheet_uri(), array(), GROCEFYCART_VERSION );
		wp_enqueue_style( 'grocefycart-aos-style', get_template_directory_uri() . '/assets/css/aos.css', array(), GROCEFYCART_VERSION );
		if ( is_rtl() ) {
			wp_enqueue_style( 'grocefycart-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css', array(), GROCEFYCART_VERSION );
		}
		// wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'grocefycart-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), GROCEFYCART_VERSION, true );
		wp_enqueue_script( 'grocefycart-scripts', get_template_directory_uri() . '/assets/js/grocefycart-scripts.js', array(), GROCEFYCART_VERSION, true );
	}
endif;

add_action( 'wp_enqueue_scripts', 'grocefycart_styles' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
function grocefycart_block_assets() {
	wp_enqueue_style( 'grocefycart-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css', array(), GROCEFYCART_VERSION );
}
add_action( 'enqueue_block_assets', 'grocefycart_block_assets' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

function grocefycart_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'grocefycart_add_woocommerce_support' );

/**
 * Load welcome page file.
 */
function fotawp_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'fotawp_add_woocommerce_support' );

function grocefycart_premium_access() {
	$status = false;

	if ( function_exists( 'cozy_addons_premium_access' ) ) {
		$status = cozy_addons_premium_access();
	}

	return $status;
}

function grocefycart_is_plugin_installed( $plugin_slug ) {
	$plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
	return file_exists( $plugin_path );
}
function grocefycart_is_plugin_activated( $plugin_slug ) {
	return is_plugin_active( $plugin_slug );
}

/* Admin init */
if ( is_admin() ) {
	require_once GROCEFYCART_DIR . 'admin/class-admin.php';
	GrocefyCart_Admin::get_instance();
}
