<?php
/**
 * Homepage hero.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

$freshgrid_id  = freshgrid_image_id( 'hero' );
$freshgrid_url = $freshgrid_id ? wp_get_attachment_image_url( $freshgrid_id, 'full' ) : '';
$freshgrid_img = $freshgrid_url ? sprintf( '<img class="wp-block-cover__image-background wp-image-%d" alt="" src="%s" data-object-fit="cover"/>', $freshgrid_id, esc_url( $freshgrid_url ) ) : '';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $freshgrid_url ); ?>","id":<?php echo (int) $freshgrid_id; ?>,"dimRatio":60,"overlayColor":"heading","isUserOverlayColor":true,"minHeight":460,"className":"fg-hero","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-cover fg-hero" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:460px"><?php echo $freshgrid_img; // phpcs:ignore WordPress.Security.EscapeOutput ?><span aria-hidden="true" class="wp-block-cover__background has-heading-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"fg-hero__title","textColor":"background"} -->
<h1 class="wp-block-heading fg-hero__title has-background-color has-text-color"><?php esc_html_e( 'Fresh groceries, delivered across Dhaka', 'freshgrid-core' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fg-hero__text","textColor":"background","fontSize":"medium"} -->
<p class="fg-hero__text has-background-color has-text-color has-medium-font-size"><?php esc_html_e( 'Vegetables, fish, meat and pantry staples, sourced daily and brought to your door. Order today and pay in cash on delivery.', 'freshgrid-core' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><?php echo freshgrid_button( __( 'Shop now', 'freshgrid-core' ), 'shop', 'fg-button-accent' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo freshgrid_button( __( 'Wholesale orders', 'freshgrid-core' ), 'wholesale', 'fg-button-ghost' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
