<?php
/**
 * Homepage "Why FreshGrid" benefits.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

$freshgrid_benefits = array(
	array( 'leaf', __( 'Fresh daily', 'freshgrid-core' ), __( 'Sourced every morning and packed on the day of delivery.', 'freshgrid-core' ) ),
	array( 'truck', __( 'Fast delivery in Dhaka', 'freshgrid-core' ), __( 'Same-day delivery for orders placed before noon.', 'freshgrid-core' ) ),
	array( 'cash', __( 'Cash on Delivery', 'freshgrid-core' ), __( 'Check your groceries first, then pay at your door.', 'freshgrid-core' ) ),
	array( 'box', __( 'Wholesale pricing', 'freshgrid-core' ), __( 'Better rates on bulk packs for homes and businesses.', 'freshgrid-core' ) ),
);
?>
<!-- wp:group {"className":"fg-section","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"48px","bottom":"48px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group fg-section" style="margin-top:0;margin-bottom:0;padding-top:48px;padding-right:var(--wp--preset--spacing--40);padding-bottom:48px;padding-left:var(--wp--preset--spacing--40)">
<?php echo freshgrid_section_heading( __( 'Why FreshGrid', 'freshgrid-core' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"className":"fg-benefits","layout":{"type":"grid","minimumColumnWidth":"230px"}} -->
<div class="wp-block-group fg-benefits">
<?php foreach ( $freshgrid_benefits as list( $freshgrid_icon, $freshgrid_title, $freshgrid_text ) ) : ?>
<!-- wp:group {"className":"fg-benefit","layout":{"type":"default"}} -->
<div class="wp-block-group fg-benefit"><?php echo freshgrid_icon( $freshgrid_icon ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html( $freshgrid_title ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small-plus"} -->
<p class="has-small-plus-font-size"><?php echo esc_html( $freshgrid_text ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
