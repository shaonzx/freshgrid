<?php
/**
 * Title: CTA Banner
 * Slug: grocefycart/cta-banner
 * Categories: grocefycart
 */

$grocefycart_banner_url = trailingslashit( get_template_directory_uri() );
$grocefycart_banner_img = array(
	$grocefycart_banner_url . 'assets/images/cta-banner.jpg',
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"40px","bottom":"40px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group"
	style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_banner_img[0] ); ?>","id":640,"isUserOverlayColor":true,"minHeight":200,"customGradient":"linear-gradient(90deg,rgb(0,0,0) 0%,rgba(0,0,0,0) 54%)","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"45px","bottom":"45px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
	<div class="wp-block-cover"
		style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:45px;padding-right:var(--wp--preset--spacing--40);padding-bottom:45px;padding-left:var(--wp--preset--spacing--40);min-height:200px">
		<span aria-hidden="true"
			class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient"
			style="background:linear-gradient(90deg,rgb(0,0,0) 0%,rgba(0,0,0,0) 54%)"></span><img
			class="wp-block-cover__image-background wp-image-640" alt=""
			src="<?php echo esc_url( $grocefycart_banner_img[0] ); ?>"
			data-object-fit="cover" />
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"constrained","contentSize":"575px"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontSize":"big-plus"} -->
					<h2 class="wp-block-heading has-background-color has-text-color has-link-color has-big-plus-font-size"
						style="font-style:normal;font-weight:600"><?php esc_html_e( "GrocefyCart's New Arrivals, Shop Fast, Limited Supply!", 'grocefycart' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'New Fresh Vegetable at our shop with limited stocks!', 'grocefycart' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"terniary","textColor":"background","className":"is-style-button-hover-primary-bgcolor is-style-grocefycart-button-up-arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"24px","right":"24px","top":"18px","bottom":"18px"}},"border":{"radius":"100px"},"typography":{"fontSize":"18px"}}} -->
					<div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor is-style-grocefycart-button-up-arrow"
						style="font-size:18px"><a
							class="wp-block-button__link has-background-color has-terniary-background-color has-text-color has-background has-link-color wp-element-button"
							style="border-radius:100px;padding-top:18px;padding-right:24px;padding-bottom:18px;padding-left:24px"><?php esc_html_e( 'Check Products', 'grocefycart' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->