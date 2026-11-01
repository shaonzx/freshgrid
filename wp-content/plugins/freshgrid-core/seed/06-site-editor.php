<?php
/**
 * Header and footer template parts and the front page template, stored in the
 * DB exactly as Site Editor customizations are. The theme folder stays untouched.
 * Run: wp eval-file wp-content/plugins/freshgrid-core/seed/06-site-editor.php
 * Needs the navigation seed first.
 *
 * Re-running resets these, overwriting edits made in the Site Editor.
 * To go back to the theme's version, use "Reset" in the Site Editor.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

require_once FRESHGRID_CORE_DIR . 'seed/lib.php';

/**
 * Read a markup file and replace {{nav:slug}} with that menu's post ID.
 *
 * @param string $file Path relative to seed/markup/.
 * @return string
 */
function freshgrid_seed_markup( $file ) {
	return preg_replace_callback(
		'/\{\{nav:([a-z-]+)\}\}/',
		static function ( $match ) {
			$menu = get_posts(
				array(
					'post_type'   => 'wp_navigation',
					'name'        => $match[1],
					'post_status' => 'publish',
					'numberposts' => 1,
					'fields'      => 'ids',
				)
			);
			if ( ! $menu ) {
				WP_CLI::error( "Menu not found: {$match[1]}. Run the navigation seed first." );
			}
			return (string) $menu[0];
		},
		file_get_contents( FRESHGRID_CORE_DIR . "seed/markup/{$file}" )
	);
}

foreach ( array( 'header' => 'Header', 'footer' => 'Footer' ) as $freshgrid_slug => $freshgrid_title ) {
	$freshgrid_id = freshgrid_seed_upsert_theme_post(
		'wp_template_part',
		$freshgrid_slug,
		array(
			'post_title'   => $freshgrid_title,
			'post_content' => freshgrid_seed_markup( "{$freshgrid_slug}.html" ),
		)
	);
	wp_set_object_terms( $freshgrid_id, $freshgrid_slug, 'wp_template_part_area' );
}

freshgrid_seed_upsert_theme_post(
	'wp_template',
	'front-page',
	array(
		'post_title'   => 'Front Page',
		'post_content' => freshgrid_seed_markup( 'front-page.html' ),
	)
);

// Shop and category archives: the theme's template with a visible Add to Cart button and sale badge.
// The theme hides the button in an image overlay on hover, which touch screens never trigger.
$freshgrid_archive = file_get_contents( get_template_directory() . '/templates/archive-product.html' );
$freshgrid_edits   = array(
	'#"showSaleBadge":false#'                     => '"showSaleBadge":true',
	'#<!-- wp:woocommerce/product-button .*? /-->#' => '',
	'#(<!-- wp:woocommerce/product-rating .*? /-->)#' => '$1' . "\n\n" . '<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"fontSize":"small"} /-->',
	'#is-style-grocefycart-wc-sorting-terniary#'  => 'fg-sorting',
	'#is-style-grocefycart-pagination-terniary#'  => 'fg-pagination',
);
foreach ( $freshgrid_edits as $freshgrid_pattern => $freshgrid_replacement ) {
	$freshgrid_archive = preg_replace( $freshgrid_pattern, $freshgrid_replacement, $freshgrid_archive, 1, $freshgrid_count );
	// Stop before saving: a theme update may have changed the markup these edits expect.
	if ( ! $freshgrid_count ) {
		WP_CLI::error( "Shop template edit did not apply: {$freshgrid_pattern}" );
	}
}
freshgrid_seed_upsert_theme_post(
	'wp_template',
	'archive-product',
	array(
		'post_title'   => 'Product Catalog',
		'post_content' => $freshgrid_archive,
	)
);

WP_CLI::success( 'Template parts, front page and shop templates seeded.' );
