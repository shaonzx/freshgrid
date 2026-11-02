<?php
/**
 * Applies template fixes to sites already deployed, so they need a file upload but no DB import.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

/**
 * Regex edits that swap a shop template's core Query Loop for Product Collection, as in
 * WooCommerce's own template. The product button gets its product ID from context only
 * that block provides, and otherwise ignores clicks.
 *
 * @return array Replacements keyed by pattern.
 */
function freshgrid_shop_collection_edits() {
	return array(
		'#<!-- wp:query \{.*?\} -->\s*<div class="wp-block-query">#' => '<!-- wp:woocommerce/product-collection {"queryId":2,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"],"taxQuery":{},"isProductCollectionBlock":true,"perPage":10,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"div","dimensions":{"widthType":"fill","fixedWidth":""},"displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"convertedFromProducts":false,"queryContextIncludes":["collection"]} -->' . "\n" . '<div class="wp-block-woocommerce-product-collection">',
		'#<!-- wp:post-template \{.*?\} -->#' => '<!-- wp:woocommerce/product-template {"className":"fg-shop-products"} -->',
		'#<!-- /wp:post-template -->#'        => '<!-- /wp:woocommerce/product-template -->',
		'#<!-- wp:query-no-results -->#'      => '<!-- wp:woocommerce/product-collection-no-results -->',
		'#<!-- /wp:query-no-results -->#'     => '<!-- /wp:woocommerce/product-collection-no-results -->',
		'#<!-- /wp:query -->#'                => '<!-- /wp:woocommerce/product-collection -->',
	);
}

/**
 * Upgrade a stored shop template once. Written with $wpdb because kses would alter
 * block markup when this runs for a visitor. Leaves the template alone if any edit
 * doesn't match, so a customized template is never half converted.
 */
function freshgrid_upgrade_shop_template() {
	if ( get_option( 'freshgrid_shop_collection_upgraded' ) ) {
		return;
	}
	update_option( 'freshgrid_shop_collection_upgraded', '1' );

	global $wpdb;
	$template = $wpdb->get_row( "SELECT ID, post_content FROM {$wpdb->posts} WHERE post_type = 'wp_template' AND post_name = 'archive-product' AND post_status = 'publish' LIMIT 1" );
	if ( ! $template || false === strpos( $template->post_content, '<!-- wp:post-template' ) ) {
		return;
	}

	$content = $template->post_content;
	foreach ( freshgrid_shop_collection_edits() as $pattern => $replacement ) {
		$content = preg_replace( $pattern, $replacement, $content, 1, $count );
		if ( ! $count ) {
			error_log( "FreshGrid: shop template not upgraded, no match for {$pattern}" ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions
			return;
		}
	}

	$wpdb->update( $wpdb->posts, array( 'post_content' => $content ), array( 'ID' => $template->ID ) );
	clean_post_cache( (int) $template->ID );
}
add_action( 'init', 'freshgrid_upgrade_shop_template' );
