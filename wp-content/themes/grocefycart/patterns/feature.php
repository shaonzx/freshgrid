<?php
/**
 * Title: Features Block
 * Slug: grocefycart/feature
 * Categories:grocefycart
 */

$grocefycart_feature_url = trailingslashit( get_template_directory_uri() );
$grocefycart_feature_img = array(
	$grocefycart_feature_url . 'assets/images/icon-1.png',
	$grocefycart_feature_url . 'assets/images/icon-2.png',
	$grocefycart_feature_url . 'assets/images/icon-3.png',
	$grocefycart_feature_url . 'assets/images/icon-4.png',
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"light","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-light-background-color has-background"
	style="padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"id":1403,"width":"70px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized"><img
						src="<?php echo esc_url( $grocefycart_feature_img[0] ); ?>"
						alt="" class="wp-image-1403" style="aspect-ratio:1;object-fit:cover;width:70px" /></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"normal"} -->
					<h5 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
						style="font-style:normal;font-weight:600"><?php esc_html_e( 'Free Shipping', 'grocefycart' ); ?></h5>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"meta-color","fontSize":"x-small"} -->
					<p class="has-meta-color-color has-text-color has-link-color has-x-small-font-size"
						style="font-style:normal;font-weight:400"><?php esc_html_e( 'Order $79 worth or more', 'grocefycart' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"id":1411,"width":"70px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized"><img
						src="<?php echo esc_url( $grocefycart_feature_img[1] ); ?>"
						alt="" class="wp-image-1411" style="aspect-ratio:1;object-fit:cover;width:70px" /></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"normal"} -->
					<h5 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
						style="font-style:normal;font-weight:600"><?php esc_html_e( 'Best Deals', 'grocefycart' ); ?></h5>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"meta-color","fontSize":"x-small"} -->
					<p class="has-meta-color-color has-text-color has-link-color has-x-small-font-size"
						style="font-style:normal;font-weight:400"><?php esc_html_e( 'Atleast $25 off on items', 'grocefycart' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"id":1412,"width":"70px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized"><img
						src="<?php echo esc_url( $grocefycart_feature_img[2] ); ?>"
						alt="" class="wp-image-1412" style="aspect-ratio:1;object-fit:cover;width:70px" /></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"normal"} -->
					<h5 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
						style="font-style:normal;font-weight:600"><?php esc_html_e( '100% Return Policy', 'grocefycart' ); ?></h5>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"meta-color","fontSize":"x-small"} -->
					<p class="has-meta-color-color has-text-color has-link-color has-x-small-font-size"
						style="font-style:normal;font-weight:400"><?php esc_html_e( 'Moneyback guarantee', 'grocefycart' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"id":1413,"width":"70px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized"><img
						src="<?php echo esc_url( $grocefycart_feature_img[3] ); ?>"
						alt="" class="wp-image-1413" style="aspect-ratio:1;object-fit:cover;width:70px" /></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"normal"} -->
					<h5 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
						style="font-style:normal;font-weight:600"><?php esc_html_e( 'Support 24/7', 'grocefycart' ); ?></h5>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"meta-color","fontSize":"x-small"} -->
					<p class="has-meta-color-color has-text-color has-link-color has-x-small-font-size"
						style="font-style:normal;font-weight:400"><?php esc_html_e( 'Customer support', 'grocefycart' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->