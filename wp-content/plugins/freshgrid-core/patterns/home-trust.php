<?php
/**
 * Homepage trust strip.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

$freshgrid_items = array(
	array( 'pin', __( 'Delivering nationwide', 'freshgrid-core' ), __( 'Inside Dhaka ৳60, outside Dhaka ৳120', 'freshgrid-core' ) ),
	array( 'cash', __( 'Cash on Delivery', 'freshgrid-core' ), __( 'Pay when your order arrives', 'freshgrid-core' ) ),
	array( 'phone', __( 'Support hotline', 'freshgrid-core' ), __( '+880 1XXX-XXXXXX, 8 am to 10 pm', 'freshgrid-core' ) ),
);
?>
<!-- wp:group {"backgroundColor":"heading","textColor":"background","className":"fg-trust","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group fg-trust has-background-color has-heading-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:var(--wp--preset--spacing--40);padding-bottom:28px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"240px"}} -->
<div class="wp-block-group">
<?php foreach ( $freshgrid_items as list( $freshgrid_icon, $freshgrid_title, $freshgrid_text ) ) : ?>
<!-- wp:group {"className":"fg-trust__item","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group fg-trust__item"><?php echo freshgrid_icon( $freshgrid_icon ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:paragraph {"fontSize":"small-plus"} -->
<p class="has-small-plus-font-size"><strong><?php echo esc_html( $freshgrid_title ); ?></strong><br><?php echo esc_html( $freshgrid_text ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
