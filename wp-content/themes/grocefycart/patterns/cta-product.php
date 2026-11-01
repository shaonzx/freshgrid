<?php
/**
 * Title: CTA Product
 * Slug: grocefycart/cta-product
 * Categories: grocefycart,grocefycart-woocommerce
 */

$grocefycart_cta_url = trailingslashit( get_template_directory_uri() );
$grocefycart_cta_img = array(
	$grocefycart_cta_url . 'assets/images/cta-3.jpg',
	$grocefycart_cta_url . 'assets/images/cta-1.jpg',
	$grocefycart_cta_url . 'assets/images/cta-2.jpg',
)
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"40px","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group"
	style="margin-top:40px;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
	<div class="wp-block-columns"><!-- wp:column {"width":"33%"} -->
		<div class="wp-block-column" style="flex-basis:33%">
			<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cta_img[0] ); ?>","id":1347,"dimRatio":0,"customOverlayColor":"#ecb92e","isUserOverlayColor":false,"minHeight":250,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"spacing":{"padding":{"right":"30px","left":"30px"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"400px"}} -->
			<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
				style="border-radius:10px;padding-right:30px;padding-left:30px;min-height:250px"><span
					aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
					style="background-color:#ecb92e"></span><img class="wp-block-cover__image-background wp-image-1347"
					alt=""
					src="<?php echo esc_url( $grocefycart_cta_img[0] ); ?>"
					data-object-fit="cover" />
				<div class="wp-block-cover__inner-container">
					<!-- wp:group {"layout":{"type":"constrained","contentSize":"250px","justifyContent":"left"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"medium-plus"} -->
						<h2
							class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-plus-font-size"><?php esc_html_e( 'Groceries Made Simple, Life Made Better.', 'grocefycart' ); ?></h2>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"backgroundColor":"background","textColor":"primary","className":"is-style-grocefycart-button-terniary","style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
						<div class="wp-block-button is-style-grocefycart-button-terniary"
							style="font-style:normal;font-weight:400"><a
								class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color wp-element-button"
								style="border-radius:100px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e( 'Shop Now', 'grocefycart' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33%"} -->
		<div class="wp-block-column" style="flex-basis:33%">
			<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cta_img[1] ); ?>","id":1360,"dimRatio":0,"customOverlayColor":"#7dc92f","isUserOverlayColor":false,"minHeight":250,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"spacing":{"padding":{"right":"30px","left":"30px"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"400px"}} -->
			<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
				style="border-radius:10px;padding-right:30px;padding-left:30px;min-height:250px"><span
					aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
					style="background-color:#7dc92f"></span><img class="wp-block-cover__image-background wp-image-1360"
					alt=""
					src="<?php echo esc_url( $grocefycart_cta_img[1] ); ?>"
					data-object-fit="cover" />
				<div class="wp-block-cover__inner-container">
					<!-- wp:group {"layout":{"type":"constrained","contentSize":"250px","justifyContent":"left"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"medium-plus"} -->
						<h2
							class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-plus-font-size"><?php esc_html_e( 'Quality Ingredients, Effortless Meals', 'grocefycart' ); ?></h2>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"backgroundColor":"background","textColor":"primary","className":"is-style-grocefycart-button-terniary","style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
						<div class="wp-block-button is-style-grocefycart-button-terniary"
							style="font-style:normal;font-weight:400"><a
								class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color wp-element-button"
								style="border-radius:100px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e( 'Shop Now', 'grocefycart' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33%"} -->
		<div class="wp-block-column" style="flex-basis:33%">
			<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cta_img[2] ); ?>","id":1476,"dimRatio":0,"customOverlayColor":"#5dc3d6","isUserOverlayColor":false,"minHeight":250,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"spacing":{"padding":{"right":"30px","left":"30px"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"400px"}} -->
			<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
				style="border-radius:10px;padding-right:30px;padding-left:30px;min-height:250px"><span
					aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
					style="background-color:#5dc3d6"></span><img class="wp-block-cover__image-background wp-image-1476"
					alt=""
					src="<?php echo esc_url( $grocefycart_cta_img[2] ); ?>"
					data-object-fit="cover" />
				<div class="wp-block-cover__inner-container">
					<!-- wp:group {"layout":{"type":"constrained","contentSize":"250px","justifyContent":"left"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"medium-plus"} -->
						<h2
							class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-plus-font-size"><?php esc_html_e( 'Your Kitchen, Our Commitment.', 'grocefycart' ); ?></h2>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"backgroundColor":"background","textColor":"primary","className":"is-style-grocefycart-button-terniary","style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
						<div class="wp-block-button is-style-grocefycart-button-terniary"
							style="font-style:normal;font-weight:400"><a
								class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color wp-element-button"
								style="border-radius:100px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e( 'Shop Now', 'grocefycart' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->