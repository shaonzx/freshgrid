<?php
/**
 * Product categories, tags, the Pack Size attribute, products and variations.
 * Run: php -d extension=gd C:/wp-cli/wp-cli.phar eval-file wp-content/plugins/freshgrid-core/seed/03-catalog.php
 *
 * Matches by category slug and SKU. Re-running resets those products to the
 * values in seed/data/catalog.php, overwriting edits made in wp-admin.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

require_once FRESHGRID_CORE_DIR . 'seed/lib.php';

$freshgrid_catalog = require FRESHGRID_CORE_DIR . 'seed/data/catalog.php';

/**
 * Import a seed image once. Categories and products share attachments.
 *
 * @param string $image Basename in seed/images/.
 * @param string $title Title and alt text, used on first import only.
 * @return int Attachment ID.
 */
function freshgrid_seed_catalog_image( $image, $title ) {
	return freshgrid_seed_import_image( "image-{$image}", FRESHGRID_CORE_DIR . "seed/images/{$image}.webp", $title );
}

/**
 * Get or create a term by slug.
 *
 * @param string $slug     Term slug.
 * @param string $name     Term name.
 * @param string $taxonomy Taxonomy.
 * @param array  $args     Extra wp_insert_term() args.
 * @return int Term ID.
 */
function freshgrid_seed_term( $slug, $name, $taxonomy, array $args = array() ) {
	$term = get_term_by( 'slug', $slug, $taxonomy );
	if ( $term ) {
		wp_update_term( $term->term_id, $taxonomy, array_merge( array( 'name' => $name ), $args ) );
		return (int) $term->term_id;
	}
	$created = wp_insert_term( $name, $taxonomy, array_merge( array( 'slug' => $slug ), $args ) );
	if ( is_wp_error( $created ) ) {
		WP_CLI::error( "{$taxonomy}/{$slug}: " . $created->get_error_message() );
	}
	return (int) $created['term_id'];
}

/**
 * Sort key for a pack label, so options read smallest to largest.
 *
 * @param string $label e.g. "500 g", "25 kg Bulk Sack".
 * @return float
 */
function freshgrid_seed_pack_size( $label ) {
	$is_grams = (bool) preg_match( '/^[\d.]+\s*g\b/i', $label );
	return (float) $label * ( $is_grams ? 0.001 : 1 );
}

// Categories.
$freshgrid_order = 0;
foreach ( $freshgrid_catalog['categories'] as $freshgrid_slug => list( $freshgrid_name, $freshgrid_desc, $freshgrid_image ) ) {
	$freshgrid_term_id = freshgrid_seed_term( $freshgrid_slug, $freshgrid_name, 'product_cat', array( 'description' => $freshgrid_desc ) );
	update_term_meta( $freshgrid_term_id, 'order', $freshgrid_order++ );
	$freshgrid_thumb = freshgrid_seed_catalog_image( $freshgrid_image, $freshgrid_name );
	if ( $freshgrid_thumb ) {
		update_term_meta( $freshgrid_term_id, 'thumbnail_id', $freshgrid_thumb );
	}
}

// Tags.
$freshgrid_tags = array(
	'organic'     => 'Organic',
	'best-seller' => 'Best Seller',
	'local'       => 'Local',
);
foreach ( $freshgrid_tags as $freshgrid_slug => $freshgrid_name ) {
	freshgrid_seed_term( $freshgrid_slug, $freshgrid_name, 'product_tag' );
}

// Pack Size attribute.
if ( ! wc_attribute_taxonomy_id_by_name( 'pack-size' ) ) {
	$freshgrid_attribute = wc_create_attribute(
		array(
			'name'         => 'Pack Size',
			'slug'         => 'pack-size',
			'type'         => 'select',
			'order_by'     => 'menu_order',
			'has_archives' => false,
		)
	);
	if ( is_wp_error( $freshgrid_attribute ) ) {
		WP_CLI::error( $freshgrid_attribute->get_error_message() );
	}
}
if ( ! taxonomy_exists( 'pa_pack-size' ) ) {
	register_taxonomy( 'pa_pack-size', array( 'product', 'product_variation' ), array( 'hierarchical' => false ) );
}

$freshgrid_labels = array();
foreach ( $freshgrid_catalog['products'] as $freshgrid_item ) {
	foreach ( $freshgrid_item['variations'] ?? array() as $freshgrid_variation ) {
		$freshgrid_labels[ $freshgrid_variation[0] ] = freshgrid_seed_pack_size( $freshgrid_variation[0] );
	}
}
asort( $freshgrid_labels );
$freshgrid_order = 0;
foreach ( array_keys( $freshgrid_labels ) as $freshgrid_label ) {
	$freshgrid_term_id = freshgrid_seed_term( sanitize_title( $freshgrid_label ), $freshgrid_label, 'pa_pack-size' );
	update_term_meta( $freshgrid_term_id, 'order', $freshgrid_order++ );
}

// Products.
$freshgrid_counts = array(
	'simple'     => 0,
	'variable'   => 0,
	'variations' => 0,
);

foreach ( $freshgrid_catalog['products'] as $freshgrid_item ) {
	$freshgrid_is_variable = ! empty( $freshgrid_item['variations'] );
	$freshgrid_id          = wc_get_product_id_by_sku( $freshgrid_item['sku'] );
	$freshgrid_product     = $freshgrid_is_variable ? new WC_Product_Variable( $freshgrid_id ) : new WC_Product_Simple( $freshgrid_id );

	$freshgrid_product->set_name( $freshgrid_item['name'] );
	$freshgrid_product->set_slug( sanitize_title( preg_replace( '/[()]/', '', $freshgrid_item['name'] ) ) );
	$freshgrid_product->set_status( 'publish' );
	$freshgrid_product->set_catalog_visibility( 'visible' );
	$freshgrid_product->set_sku( $freshgrid_item['sku'] );
	$freshgrid_product->set_short_description( $freshgrid_item['short'] );
	$freshgrid_product->set_description( $freshgrid_item['desc'] );
	$freshgrid_product->set_featured( ! empty( $freshgrid_item['featured'] ) );
	$freshgrid_product->set_manage_stock( true );
	$freshgrid_product->set_stock_quantity( $freshgrid_item['stock'] );
	$freshgrid_product->set_stock_status( 'instock' );
	$freshgrid_product->set_reviews_allowed( true );

	$freshgrid_cat_ids = array();
	foreach ( $freshgrid_item['cat'] as $freshgrid_cat ) {
		$freshgrid_cat_ids[] = (int) get_term_by( 'slug', $freshgrid_cat, 'product_cat' )->term_id;
	}
	$freshgrid_product->set_category_ids( $freshgrid_cat_ids );

	$freshgrid_tag_ids = array();
	foreach ( $freshgrid_item['tags'] as $freshgrid_tag ) {
		$freshgrid_tag_ids[] = (int) get_term_by( 'slug', $freshgrid_tag, 'product_tag' )->term_id;
	}
	$freshgrid_product->set_tag_ids( $freshgrid_tag_ids );

	$freshgrid_image_id = freshgrid_seed_catalog_image( $freshgrid_item['image'], $freshgrid_item['name'] );
	if ( $freshgrid_image_id ) {
		$freshgrid_product->set_image_id( $freshgrid_image_id );
	}

	if ( $freshgrid_is_variable ) {
		$freshgrid_slugs = array();
		foreach ( $freshgrid_item['variations'] as $freshgrid_variation ) {
			$freshgrid_slugs[] = sanitize_title( $freshgrid_variation[0] );
		}

		$freshgrid_attribute = new WC_Product_Attribute();
		$freshgrid_attribute->set_id( wc_attribute_taxonomy_id_by_name( 'pack-size' ) );
		$freshgrid_attribute->set_name( 'pa_pack-size' );
		$freshgrid_attribute->set_options(
			array_map(
				static function ( $slug ) {
					return (int) get_term_by( 'slug', $slug, 'pa_pack-size' )->term_id;
				},
				$freshgrid_slugs
			)
		);
		$freshgrid_attribute->set_visible( true );
		$freshgrid_attribute->set_variation( true );

		$freshgrid_product->set_attributes( array( $freshgrid_attribute ) );
		$freshgrid_product->set_default_attributes( array( 'pa_pack-size' => $freshgrid_slugs[0] ) );
		$freshgrid_parent_id = $freshgrid_product->save();

		wp_set_object_terms( $freshgrid_parent_id, $freshgrid_slugs, 'pa_pack-size' );

		foreach ( $freshgrid_item['variations'] as list( $freshgrid_label, $freshgrid_price, $freshgrid_sale, $freshgrid_weight ) ) {
			$freshgrid_slug      = sanitize_title( $freshgrid_label );
			$freshgrid_var_sku   = $freshgrid_item['sku'] . '-' . strtoupper( $freshgrid_slug );
			$freshgrid_var_id    = wc_get_product_id_by_sku( $freshgrid_var_sku );
			$freshgrid_var       = new WC_Product_Variation( $freshgrid_var_id );

			$freshgrid_var->set_parent_id( $freshgrid_parent_id );
			$freshgrid_var->set_sku( $freshgrid_var_sku );
			$freshgrid_var->set_attributes( array( 'pa_pack-size' => $freshgrid_slug ) );
			$freshgrid_var->set_regular_price( (string) $freshgrid_price );
			$freshgrid_var->set_sale_price( $freshgrid_sale ? (string) $freshgrid_sale : '' );
			$freshgrid_var->set_weight( (string) $freshgrid_weight );
			$freshgrid_var->set_manage_stock( 'parent' );
			$freshgrid_var->set_status( 'publish' );
			$freshgrid_var->save();
			++$freshgrid_counts['variations'];
		}

		WC_Product_Variable::sync( $freshgrid_parent_id );
		++$freshgrid_counts['variable'];
	} else {
		$freshgrid_product->set_regular_price( (string) $freshgrid_item['price'] );
		$freshgrid_product->set_sale_price( empty( $freshgrid_item['sale'] ) ? '' : (string) $freshgrid_item['sale'] );
		$freshgrid_product->set_weight( (string) $freshgrid_item['weight'] );
		$freshgrid_product->save();
		++$freshgrid_counts['simple'];
	}
}

wc_delete_product_transients();

WP_CLI::success( "Catalog: {$freshgrid_counts['simple']} simple, {$freshgrid_counts['variable']} variable, {$freshgrid_counts['variations']} variations." );
