<?php
/**
 * Header and footer menus as wp_navigation posts.
 * Run: wp eval-file wp-content/plugins/freshgrid-core/seed/05-navigation.php
 * Needs the catalog and pages seeds first.
 *
 * Menu items store an ID and a block binding, never a URL: core resolves them at render time.
 * Re-running resets these menus, overwriting edits made in the Site Editor.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

require_once FRESHGRID_CORE_DIR . 'seed/lib.php';

/**
 * Attributes for a menu item that links to a page.
 *
 * @param string $slug  Page slug.
 * @param string $label Menu label.
 * @return array
 */
function freshgrid_nav_page_attrs( $slug, $label ) {
	$page = get_page_by_path( $slug );
	if ( ! $page ) {
		WP_CLI::error( "Page not found: {$slug}. Run the pages seed first." );
	}
	return array(
		'label'    => $label,
		'type'     => 'page',
		'id'       => $page->ID,
		'kind'     => 'post-type',
		'metadata' => array(
			'bindings' => array(
				'url' => array(
					'source' => 'core/post-data',
					'args'   => array( 'field' => 'link' ),
				),
			),
		),
	);
}

/**
 * A menu link block.
 *
 * @param array $attrs Block attributes.
 * @return string
 */
function freshgrid_nav_link( array $attrs ) {
	return '<!-- wp:navigation-link ' . wp_json_encode( $attrs, JSON_UNESCAPED_UNICODE ) . ' /-->';
}

/**
 * A menu link to a page.
 *
 * @param string $slug  Page slug.
 * @param string $label Menu label.
 * @return string
 */
function freshgrid_nav_page( $slug, $label ) {
	return freshgrid_nav_link( freshgrid_nav_page_attrs( $slug, $label ) );
}

/**
 * A menu link to a My Account section, through the FreshGrid link binding.
 *
 * @param string $endpoint Account endpoint.
 * @param string $label    Menu label.
 * @return string
 */
function freshgrid_nav_account( $endpoint, $label ) {
	return freshgrid_nav_link(
		array(
			'label'    => $label,
			'kind'     => 'custom',
			'metadata' => array(
				'bindings' => array(
					'url' => array(
						'source' => 'freshgrid/link',
						'args'   => array( 'to' => "account:{$endpoint}" ),
					),
				),
			),
		)
	);
}

// One link per category, in catalog order.
$freshgrid_catalog = require FRESHGRID_CORE_DIR . 'seed/data/catalog.php';
$freshgrid_cats    = array();
foreach ( array_keys( $freshgrid_catalog['categories'] ) as $freshgrid_slug ) {
	$freshgrid_term = get_term_by( 'slug', $freshgrid_slug, 'product_cat' );
	if ( ! $freshgrid_term ) {
		WP_CLI::error( "Category not found: {$freshgrid_slug}. Run the catalog seed first." );
	}
	$freshgrid_cats[] = freshgrid_nav_link(
		array(
			'label'    => $freshgrid_term->name,
			'type'     => 'product_cat',
			'id'       => $freshgrid_term->term_id,
			'kind'     => 'taxonomy',
			'metadata' => array(
				'bindings' => array(
					'url' => array(
						'source' => 'core/term-data',
						'args'   => array( 'field' => 'link' ),
					),
				),
			),
		)
	);
}
$freshgrid_cats = implode( "\n", $freshgrid_cats );

$freshgrid_shop_attrs = freshgrid_nav_page_attrs( 'shop', 'Shop' );

$freshgrid_menus = array(
	'freshgrid-header'          => array(
		'Header Menu',
		implode(
			"\n",
			array(
				'<!-- wp:home-link {"label":"Home"} /-->',
				'<!-- wp:navigation-submenu ' . wp_json_encode( $freshgrid_shop_attrs ) . " -->\n{$freshgrid_cats}\n<!-- /wp:navigation-submenu -->",
				freshgrid_nav_page( 'wholesale', 'Wholesale' ),
				freshgrid_nav_page( 'about-us', 'About' ),
				freshgrid_nav_page( 'contact', 'Contact' ),
			)
		),
	),
	'freshgrid-footer-shop'     => array( 'Footer: Shop', $freshgrid_cats ),
	'freshgrid-footer-customer' => array(
		'Footer: Customer',
		implode(
			"\n",
			array(
				freshgrid_nav_page( 'my-account', 'My Account' ),
				freshgrid_nav_account( 'orders', 'Orders' ),
				freshgrid_nav_page( 'delivery-information', 'Delivery Info' ),
				freshgrid_nav_page( 'return-refund-policy', 'Returns' ),
				freshgrid_nav_page( 'faq', 'FAQ' ),
			)
		),
	),
	'freshgrid-footer-company'  => array(
		'Footer: Company',
		implode(
			"\n",
			array(
				freshgrid_nav_page( 'about-us', 'About' ),
				freshgrid_nav_page( 'wholesale', 'Wholesale' ),
				freshgrid_nav_page( 'contact', 'Contact' ),
				freshgrid_nav_page( 'privacy-policy', 'Privacy' ),
				freshgrid_nav_page( 'terms-conditions', 'Terms' ),
			)
		),
	),
);

foreach ( $freshgrid_menus as $freshgrid_slug => list( $freshgrid_title, $freshgrid_content ) ) {
	$freshgrid_id = freshgrid_seed_upsert_post(
		'wp_navigation',
		$freshgrid_slug,
		array(
			'post_title'   => $freshgrid_title,
			'post_content' => $freshgrid_content,
		)
	);
	WP_CLI::log( "{$freshgrid_slug}: {$freshgrid_id}" );
}

WP_CLI::success( 'Navigation seeded.' );
