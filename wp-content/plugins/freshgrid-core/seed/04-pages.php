<?php
/**
 * Content pages, WooCommerce page assignment and the static front page.
 * Run: wp eval-file wp-content/plugins/freshgrid-core/seed/04-pages.php
 *
 * Matches by slug. Re-running resets these pages to seed/data/pages.php,
 * overwriting edits made in wp-admin.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

require_once FRESHGRID_CORE_DIR . 'seed/lib.php';

/**
 * Turn the page data into block markup.
 *
 * @param array $page Page data.
 * @return string
 */
function freshgrid_seed_page_blocks( array $page ) {
	$blocks = array();

	foreach ( $page['sections'] as list( $heading, $items ) ) {
		if ( $heading ) {
			$blocks[] = "<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">" . esc_html( $heading ) . "</h2>\n<!-- /wp:heading -->";
		}
		foreach ( $items as $item ) {
			if ( is_array( $item ) ) {
				$list = '';
				foreach ( $item as $line ) {
					$list .= "<!-- wp:list-item -->\n<li>{$line}</li>\n<!-- /wp:list-item -->\n";
				}
				$blocks[] = "<!-- wp:list -->\n<ul class=\"wp-block-list\">{$list}</ul>\n<!-- /wp:list -->";
			} else {
				$blocks[] = "<!-- wp:paragraph -->\n<p>{$item}</p>\n<!-- /wp:paragraph -->";
			}
		}
	}

	if ( ! empty( $page['cta'] ) ) {
		list( $label, $to ) = $page['cta'];
		$attrs              = wp_json_encode(
			array(
				'metadata' => array(
					'bindings' => array(
						'url' => array(
							'source' => 'freshgrid/link',
							'args'   => array( 'to' => $to ),
						),
					),
				),
			)
		);
		$blocks[]           = "<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {$attrs} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link wp-element-button\">" . esc_html( $label ) . "</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->";
	}

	return implode( "\n\n", $blocks );
}

$freshgrid_pages = require FRESHGRID_CORE_DIR . 'seed/data/pages.php';
$freshgrid_ids   = array();

foreach ( $freshgrid_pages as $freshgrid_slug => $freshgrid_page ) {
	$freshgrid_ids[ $freshgrid_slug ] = freshgrid_seed_upsert_post(
		'page',
		$freshgrid_slug,
		array(
			'post_title'   => $freshgrid_page['title'],
			'post_content' => freshgrid_seed_page_blocks( $freshgrid_page ),
		)
	);
}

// The homepage sections are patterns, resolved at render time so links and images follow the site.
$freshgrid_home_sections = array( 'hero', 'categories', 'featured', 'deals', 'why', 'wholesale-cta', 'best-sellers', 'trust' );
$freshgrid_home          = implode(
	"\n\n",
	array_map(
		static function ( $section ) {
			return '<!-- wp:pattern {"slug":"freshgrid/home-' . $section . '"} /-->';
		},
		$freshgrid_home_sections
	)
);
$freshgrid_ids['home']   = freshgrid_seed_upsert_post(
	'page',
	'home',
	array(
		'post_title'   => 'Home',
		'post_content' => $freshgrid_home,
	)
);

// Title-case the page WooCommerce created as "My account".
wp_update_post(
	array(
		'ID'         => wc_get_page_id( 'myaccount' ),
		'post_title' => 'My Account',
	)
);

update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $freshgrid_ids['home'] );
update_option( 'wp_page_for_privacy_policy', $freshgrid_ids['privacy-policy'] );
update_option( 'woocommerce_terms_page_id', $freshgrid_ids['terms-conditions'] );
update_option( 'woocommerce_refund_returns_page_id', $freshgrid_ids['return-refund-policy'] );

// WordPress and WooCommerce starter content that a live store shouldn't show. Trash, not delete.
foreach ( array( 'page' => array( 'sample-page', 'refund_returns' ), 'post' => array( 'hello-world' ) ) as $freshgrid_type => $freshgrid_slugs ) {
	foreach ( $freshgrid_slugs as $freshgrid_slug ) {
		$freshgrid_starter = get_page_by_path( $freshgrid_slug, OBJECT, $freshgrid_type );
		if ( $freshgrid_starter ) {
			wp_trash_post( $freshgrid_starter->ID );
		}
	}
}

flush_rewrite_rules( false );

WP_CLI::success( count( $freshgrid_ids ) . ' pages seeded. Front page: ' . $freshgrid_ids['home'] );
