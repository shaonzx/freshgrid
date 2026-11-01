<?php
/**
 * Read-only store health check. Run: wp eval-file wp-content/plugins/freshgrid-core/seed/verify.php
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

$freshgrid_settings = array(
	'woocommerce_enable_guest_checkout',
	'woocommerce_enable_signup_and_login_from_checkout',
	'woocommerce_enable_myaccount_registration',
	'woocommerce_checkout_phone_field',
	'woocommerce_currency',
	'woocommerce_price_num_decimals',
);
foreach ( $freshgrid_settings as $freshgrid_name ) {
	WP_CLI::log( "{$freshgrid_name}: " . get_option( $freshgrid_name ) );
}

WP_CLI::log( 'Payment gateways: ' . implode( ', ', array_keys( WC()->payment_gateways()->get_available_payment_gateways() ) ) );

foreach ( WC_Shipping_Zones::get_zones() as $freshgrid_zone ) {
	$freshgrid_methods = array();
	foreach ( $freshgrid_zone['shipping_methods'] as $freshgrid_method ) {
		$freshgrid_methods[] = $freshgrid_method->id . ' ' . $freshgrid_method->get_option( 'cost' ) . $freshgrid_method->get_option( 'min_amount' );
	}
	WP_CLI::log( "Zone {$freshgrid_zone['zone_name']}: " . implode( ', ', $freshgrid_methods ) );
}

$freshgrid_products = wc_get_products(
	array(
		'limit'  => -1,
		'status' => 'publish',
	)
);
$freshgrid_no_image = array();
foreach ( $freshgrid_products as $freshgrid_product ) {
	$freshgrid_file = get_attached_file( $freshgrid_product->get_image_id() );
	if ( ! $freshgrid_product->get_image_id() || ! $freshgrid_file || ! file_exists( $freshgrid_file ) ) {
		$freshgrid_no_image[] = $freshgrid_product->get_sku();
	}
}
WP_CLI::log( 'Products: ' . count( $freshgrid_products ) . ', without image: ' . count( $freshgrid_no_image ) . ' ' . implode( ' ', $freshgrid_no_image ) );

$freshgrid_cats = get_terms(
	array(
		'taxonomy'   => 'product_cat',
		'hide_empty' => true,
	)
);
$freshgrid_no_thumb = array();
foreach ( $freshgrid_cats as $freshgrid_cat ) {
	if ( ! get_term_meta( $freshgrid_cat->term_id, 'thumbnail_id', true ) ) {
		$freshgrid_no_thumb[] = $freshgrid_cat->slug;
	}
}
WP_CLI::log( 'Categories: ' . count( $freshgrid_cats ) . ', without image: ' . count( $freshgrid_no_thumb ) . ' ' . implode( ' ', $freshgrid_no_thumb ) );

// Stored content must not carry this site's own URL. Attachment GUIDs are excluded: WordPress stores those by design.
global $wpdb;
$freshgrid_like = '%' . $wpdb->esc_like( 'localhost' ) . '%';
$freshgrid_hits = $wpdb->get_results(
	$wpdb->prepare(
		"SELECT ID, post_type, post_name FROM {$wpdb->posts} WHERE post_status NOT IN ('trash','auto-draft') AND post_content LIKE %s",
		$freshgrid_like
	)
);
WP_CLI::log( 'Posts containing "localhost" in content: ' . count( $freshgrid_hits ) );
foreach ( $freshgrid_hits as $freshgrid_hit ) {
	WP_CLI::log( "  {$freshgrid_hit->ID} {$freshgrid_hit->post_type} {$freshgrid_hit->post_name}" );
}
