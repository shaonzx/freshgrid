<?php
/**
 * Links resolved at render time, so stored content never contains a URL.
 *
 * In text:    [fg_link to="contact"]Contact us[/fg_link]
 * On buttons: {"metadata":{"bindings":{"url":{"source":"freshgrid/link","args":{"to":"contact"}}}}}
 * Year:       [fg_year]
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

/**
 * Resolve a page slug, "cat:<slug>" for a product category or "account:<endpoint>"
 * for a My Account section to its current URL.
 *
 * @param string $to Link target.
 * @return string URL. Falls back to the home page if the target no longer exists.
 */
function freshgrid_link_url( $to ) {
	if ( 0 === strpos( $to, 'account:' ) ) {
		return wc_get_account_endpoint_url( substr( $to, 8 ) );
	}

	if ( 0 === strpos( $to, 'cat:' ) ) {
		$link = get_term_link( substr( $to, 4 ), 'product_cat' );
		return is_wp_error( $link ) ? home_url( '/' ) : $link;
	}

	$page = get_page_by_path( $to );
	return $page ? get_permalink( $page ) : home_url( '/' );
}

/**
 * Shortcode: a link to a page or category.
 *
 * @param array       $atts    Attributes: "to".
 * @param string|null $content Link text.
 * @return string
 */
function freshgrid_link_shortcode( $atts, $content = null ) {
	$atts = shortcode_atts( array( 'to' => '' ), $atts );
	return sprintf( '<a href="%s">%s</a>', esc_url( freshgrid_link_url( $atts['to'] ) ), wp_kses_post( (string) $content ) );
}
add_shortcode( 'fg_link', 'freshgrid_link_shortcode' );

/**
 * Shortcode: the current year in the site's timezone.
 *
 * @return string
 */
function freshgrid_year_shortcode() {
	return esc_html( wp_date( 'Y' ) );
}
add_shortcode( 'fg_year', 'freshgrid_year_shortcode' );

/**
 * Block binding source for button and navigation link URLs.
 */
function freshgrid_register_link_binding() {
	register_block_bindings_source(
		'freshgrid/link',
		array(
			'label'              => __( 'FreshGrid page link', 'freshgrid-core' ),
			'get_value_callback' => static function ( array $args ) {
				return empty( $args['to'] ) ? null : esc_url( freshgrid_link_url( $args['to'] ) );
			},
		)
	);
}
add_action( 'init', 'freshgrid_register_link_binding' );
