<?php
/**
 * Homepage wholesale banner.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

$freshgrid_id  = freshgrid_image_id( 'wholesale' );
$freshgrid_url = $freshgrid_id ? wp_get_attachment_image_url( $freshgrid_id, 'full' ) : '';
$freshgrid_img = $freshgrid_url ? sprintf( '<img class="wp-block-cover__image-background wp-image-%d" alt="" src="%s" data-object-fit="cover"/>', $freshgrid_id, esc_url( $freshgrid_url ) ) : '';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $freshgrid_url ); ?>","id":<?php echo (int) $freshgrid_id; ?>,"dimRatio":80,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":280,"className":"fg-wholesale","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-cover fg-wholesale" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:280px"><?php echo $freshgrid_img; // phpcs:ignore WordPress.Security.EscapeOutput ?><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textColor":"background"} -->
<h2 class="wp-block-heading has-background-color has-text-color"><?php esc_html_e( 'Buying for a restaurant, hostel or shop?', 'freshgrid-core' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"background"} -->
<p class="has-background-color has-text-color"><?php esc_html_e( 'Get bulk pricing, scheduled delivery and a dedicated contact for your business.', 'freshgrid-core' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><?php echo freshgrid_button( __( 'Request a wholesale quote', 'freshgrid-core' ), 'wholesale', 'fg-button-accent' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
