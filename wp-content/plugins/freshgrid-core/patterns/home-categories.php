<?php
/**
 * Homepage category grid. Reads categories live, so new ones and new images appear automatically.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

$freshgrid_terms = get_terms(
	array(
		'taxonomy'   => 'product_cat',
		'hide_empty' => true,
		'orderby'    => 'menu_order',
	)
);
?>
<!-- wp:group {"className":"fg-section","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"48px","bottom":"48px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group fg-section" style="margin-top:0;margin-bottom:0;padding-top:48px;padding-right:var(--wp--preset--spacing--40);padding-bottom:48px;padding-left:var(--wp--preset--spacing--40)">
<?php echo freshgrid_section_heading( __( 'Shop by category', 'freshgrid-core' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"className":"fg-category-grid","layout":{"type":"grid","minimumColumnWidth":"140px"}} -->
<div class="wp-block-group fg-category-grid">
<?php
foreach ( $freshgrid_terms as $freshgrid_term ) :
	$freshgrid_thumb = (int) get_term_meta( $freshgrid_term->term_id, 'thumbnail_id', true );
	$freshgrid_link  = get_term_link( $freshgrid_term );
	$freshgrid_src   = $freshgrid_thumb ? wp_get_attachment_image_url( $freshgrid_thumb, 'woocommerce_thumbnail' ) : wc_placeholder_img_src();
	?>
<!-- wp:group {"className":"fg-category","layout":{"type":"default"}} -->
<div class="wp-block-group fg-category"><!-- wp:image {"id":<?php echo (int) $freshgrid_thumb; ?>,"aspectRatio":"1","scale":"cover","linkDestination":"custom"} -->
<figure class="wp-block-image"><a href="<?php echo esc_url( $freshgrid_link ); ?>"><img src="<?php echo esc_url( $freshgrid_src ); ?>" alt="" class="wp-image-<?php echo (int) $freshgrid_thumb; ?>" style="aspect-ratio:1;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"small-plus"} -->
<h3 class="wp-block-heading has-small-plus-font-size"><a href="<?php echo esc_url( $freshgrid_link ); ?>"><?php echo esc_html( $freshgrid_term->name ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
