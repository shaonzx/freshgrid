<?php
/**
 * Homepage block patterns and the helpers they share.
 *
 * Pattern files run at render time, so their links and images always follow the current site URL.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register the pattern category and homepage patterns.
 */
function freshgrid_register_patterns() {
	register_block_pattern_category( 'freshgrid', array( 'label' => __( 'FreshGrid', 'freshgrid-core' ) ) );

	$patterns = array(
		'home-hero'          => __( 'Home: Hero', 'freshgrid-core' ),
		'home-categories'    => __( 'Home: Shop by Category', 'freshgrid-core' ),
		'home-featured'      => __( 'Home: Featured Products', 'freshgrid-core' ),
		'home-deals'         => __( 'Home: Deals', 'freshgrid-core' ),
		'home-why'           => __( 'Home: Why FreshGrid', 'freshgrid-core' ),
		'home-wholesale-cta' => __( 'Home: Wholesale Banner', 'freshgrid-core' ),
		'home-best-sellers'  => __( 'Home: Best Sellers', 'freshgrid-core' ),
		'home-trust'         => __( 'Home: Trust Strip', 'freshgrid-core' ),
	);

	foreach ( $patterns as $slug => $title ) {
		register_block_pattern(
			"freshgrid/{$slug}",
			array(
				'title'      => $title,
				'categories' => array( 'freshgrid' ),
				'filePath'   => FRESHGRID_CORE_DIR . "patterns/{$slug}.php",
			)
		);
	}
}
add_action( 'init', 'freshgrid_register_patterns' );

/**
 * Find a seeded image's attachment.
 *
 * @param string $image Image basename, as in seed/images/.
 * @return int Attachment ID, 0 if not imported.
 */
function freshgrid_image_id( $image ) {
	$ids = get_posts(
		array(
			'post_type'   => 'attachment',
			'post_status' => 'inherit',
			'meta_key'    => '_freshgrid_seed_key',
			'meta_value'  => "image-{$image}",
			'numberposts' => 1,
			'fields'      => 'ids',
		)
	);
	return $ids ? (int) $ids[0] : 0;
}

/**
 * Markup for a button whose URL is bound to a page.
 *
 * @param string $label     Button text.
 * @param string $to        Link target, see freshgrid_link_url().
 * @param string $classname Optional block class, e.g. is-style-outline.
 * @return string
 */
function freshgrid_button( $label, $to, $classname = '' ) {
	$attrs = array(
		'metadata' => array(
			'bindings' => array(
				'url' => array(
					'source' => 'freshgrid/link',
					'args'   => array( 'to' => $to ),
				),
			),
		),
	);
	if ( $classname ) {
		$attrs['className'] = $classname;
	}

	return sprintf(
		'<!-- wp:button %1$s --><div class="wp-block-button %2$s"><a class="wp-block-button__link wp-element-button">%3$s</a></div><!-- /wp:button -->',
		wp_json_encode( $attrs ),
		esc_attr( $classname ),
		esc_html( $label )
	);
}

/**
 * Markup for a homepage section heading with an optional "view all" link.
 *
 * @param string $title Heading.
 * @param string $to    Optional link target.
 * @return string
 */
function freshgrid_section_heading( $title, $to = '' ) {
	$link = '';
	if ( $to ) {
		$link = sprintf(
			'<!-- wp:paragraph {"className":"fg-section__more"} --><p class="fg-section__more"><a href="%s">%s</a></p><!-- /wp:paragraph -->',
			esc_url( freshgrid_link_url( $to ) ),
			esc_html__( 'View all →', 'freshgrid-core' )
		);
	}

	return sprintf(
		'<!-- wp:group {"className":"fg-section__head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} --><div class="wp-block-group fg-section__head"><!-- wp:heading --><h2 class="wp-block-heading">%s</h2><!-- /wp:heading -->%s</div><!-- /wp:group -->',
		esc_html( $title ),
		$link
	);
}

/**
 * Markup for a product grid section.
 *
 * @param int    $query_id   Unique query ID on the page.
 * @param string $collection Collection name.
 * @param array  $query      Query overrides.
 * @return string
 */
function freshgrid_product_grid( $query_id, $collection, array $query ) {
	$attrs = array(
		'queryId'              => $query_id,
		'query'                => array_merge(
			array(
				'perPage'                       => 8,
				'pages'                         => 1,
				'offset'                        => 0,
				'postType'                      => 'product',
				'order'                         => 'asc',
				'orderBy'                       => 'title',
				'search'                        => '',
				'exclude'                       => array(),
				'inherit'                       => false,
				'taxQuery'                      => array(),
				'isProductCollectionBlock'      => true,
				'featured'                      => false,
				'woocommerceOnSale'             => false,
				'woocommerceStockStatus'        => array( 'instock' ),
				'woocommerceAttributes'         => array(),
				'woocommerceHandPickedProducts' => array(),
				'filterable'                    => false,
			),
			$query
		),
		'tagName'              => 'div',
		'displayLayout'        => array(
			'type'          => 'flex',
			'columns'       => 4,
			'shrinkColumns' => true,
		),
		'dimensions'           => array( 'widthType' => 'fill' ),
		'queryContextIncludes' => array( 'collection' ),
		'collection'           => "woocommerce/product-collection/{$collection}",
	);

	return '<!-- wp:woocommerce/product-collection ' . wp_json_encode( $attrs ) . ' -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template {"className":"fg-products"} -->
<!-- wp:woocommerce/product-image {"showSaleBadge":true,"saleBadgeAlign":"left","imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"aspectRatio":"1"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"normal","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"normal"} /-->

<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->';
}

/**
 * Inline line icon, colored by the surrounding text color.
 *
 * @param string $name Icon name.
 * @return string
 */
function freshgrid_icon( $name ) {
	$paths = array(
		'leaf'   => '<path d="M20 4C10 4 4 9 4 16c0 2 1 4 3 4 8 0 13-7 13-16Z"/><path d="M3 21l8-8"/>',
		'truck'  => '<path d="M2 6h12v11H2z"/><path d="M14 10h4l4 4v3h-8z"/><circle cx="7" cy="18" r="2"/><circle cx="18" cy="18" r="2"/>',
		'cash'   => '<rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="12" cy="12" r="3"/><path d="M6 10v4M18 10v4"/>',
		'box'    => '<path d="M3 8l9-5 9 5v8l-9 5-9-5z"/><path d="M3 8l9 5 9-5M12 13v8"/>',
		'pin'    => '<path d="M12 22s8-7 8-13a8 8 0 1 0-16 0c0 6 8 13 8 13Z"/><circle cx="12" cy="9" r="3"/>',
		'phone'  => '<path d="M5 3h4l2 5-3 2a12 12 0 0 0 6 6l2-3 5 2v4a2 2 0 0 1-2 2A17 17 0 0 1 3 5a2 2 0 0 1 2-2Z"/>',
	);

	return '<!-- wp:html --><span class="fg-icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">' . $paths[ $name ] . '</svg></span><!-- /wp:html -->';
}
