<?php
/**
 * Homepage featured products.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"className":"fg-section","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"48px","bottom":"48px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group fg-section" style="margin-top:0;margin-bottom:0;padding-top:48px;padding-right:var(--wp--preset--spacing--40);padding-bottom:48px;padding-left:var(--wp--preset--spacing--40)">
<?php
echo freshgrid_section_heading( __( 'Featured products', 'freshgrid-core' ), 'shop' ); // phpcs:ignore WordPress.Security.EscapeOutput
echo freshgrid_product_grid( 101, 'featured', array( 'featured' => true ) ); // phpcs:ignore WordPress.Security.EscapeOutput
?>
</div>
<!-- /wp:group -->
