<?php
/**
 * Homepage deals: products on sale.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"backgroundColor":"light","className":"fg-section","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"48px","bottom":"48px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group fg-section has-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:48px;padding-right:var(--wp--preset--spacing--40);padding-bottom:48px;padding-left:var(--wp--preset--spacing--40)">
<?php
echo freshgrid_section_heading( __( 'Deals of the day', 'freshgrid-core' ), 'shop' ); // phpcs:ignore WordPress.Security.EscapeOutput
echo freshgrid_product_grid( 102, 'on-sale', array( 'woocommerceOnSale' => true ) ); // phpcs:ignore WordPress.Security.EscapeOutput
?>
</div>
<!-- /wp:group -->
