<?php
/**
 * Homepage best sellers: products tagged "Best Seller".
 * Uses the tag instead of sales counts, so it works from day one without made-up sales data.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

$freshgrid_tag = get_term_by( 'slug', 'best-seller', 'product_tag' );
?>
<!-- wp:group {"className":"fg-section","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"48px","bottom":"48px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group fg-section" style="margin-top:0;margin-bottom:0;padding-top:48px;padding-right:var(--wp--preset--spacing--40);padding-bottom:48px;padding-left:var(--wp--preset--spacing--40)">
<?php
echo freshgrid_section_heading( __( 'Best sellers', 'freshgrid-core' ), 'shop' ); // phpcs:ignore WordPress.Security.EscapeOutput
echo freshgrid_product_grid( // phpcs:ignore WordPress.Security.EscapeOutput
	103,
	'product-catalog',
	array( 'taxQuery' => $freshgrid_tag ? array( 'product_tag' => array( (int) $freshgrid_tag->term_id ) ) : array() )
);
?>
</div>
<!-- /wp:group -->
