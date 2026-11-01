<?php
/**
 * Front-end assets.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue the polish stylesheet (only what Global Styles can't express).
 */
function freshgrid_enqueue_assets() {
	wp_enqueue_style(
		'freshgrid-core',
		FRESHGRID_CORE_URL . 'assets/css/frontend.css',
		array(),
		filemtime( FRESHGRID_CORE_DIR . 'assets/css/frontend.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'freshgrid_enqueue_assets', 20 );
