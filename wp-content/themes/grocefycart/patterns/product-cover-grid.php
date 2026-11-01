<?php
/**
 * Title: Product Cover Grid
 * Slug: grocefycart/product-cover-grid
 * Categories:grocefycart,grocefycart-woocommerce
 */

$grocefycart_cover_url = trailingslashit( get_template_directory_uri() );
$grocefycart_cover_img = array(
	$grocefycart_cover_url . 'assets/images/cta-1.jpg',
	$grocefycart_cover_url . 'assets/images/cta-3.jpg',
)
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"40px","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group"
	style="margin-top:40px;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
	<?php
	if ( class_exists( 'WooCommerce' ) ) {
		?>
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
				<div class="wp-block-query"><!-- wp:post-template -->
					<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cover_img[0] ); ?>","id":1639,"dimRatio":0,"customOverlayColor":"#7dc92f","isUserOverlayColor":false,"minHeight":280,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"border":{"radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"55px","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
					<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
						style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:55px;min-height:280px">
						<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
							style="background-color:#7dc92f"></span><img
							class="wp-block-cover__image-background wp-image-1639" alt=""
							src="<?php echo esc_url( $grocefycart_cover_img[0] ); ?>" data-object-fit="cover" />
						<div class="wp-block-cover__inner-container">
							<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"420px","justifyContent":"left"}} -->
							<div class="wp-block-group">
								<!-- wp:post-terms {"term":"product_cat","className":"is-style-categories-background-with-round is-style-categories-terniary-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} /-->

								<!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"16px","bottom":"16px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"big","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

								<!-- wp:read-more {"content":"Shop Now","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"},"margin":{"top":"16px"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"light","fontSize":"small-plus"} /-->
							</div>
							<!-- /wp:group -->
						</div>
					</div>
					<!-- /wp:cover -->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":"1","postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
				<div class="wp-block-query"><!-- wp:post-template -->
					<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cover_img[1] ); ?>","id":1647,"dimRatio":0,"customOverlayColor":"#ecb92e","isUserOverlayColor":false,"minHeight":280,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"border":{"radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"55px","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
					<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
						style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:55px;min-height:280px">
						<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
							style="background-color:#ecb92e"></span><img
							class="wp-block-cover__image-background wp-image-1647" alt=""
							src="<?php echo esc_url( $grocefycart_cover_img[1] ); ?>" data-object-fit="cover" />
						<div class="wp-block-cover__inner-container">
							<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"420px","justifyContent":"left"}} -->
							<div class="wp-block-group">
								<!-- wp:post-terms {"term":"product_cat","className":"is-style-categories-background-with-round is-style-categories-terniary-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} /-->

								<!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"16px","bottom":"16px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"big","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

								<!-- wp:read-more {"content":"Shop Now","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"},"margin":{"top":"16px"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"light","fontSize":"small-plus"} /-->
							</div>
							<!-- /wp:group -->
						</div>
					</div>
					<!-- /wp:cover -->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<?php
	} else {
		?>
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cover_img[0] ); ?>","id":1639,"dimRatio":0,"customOverlayColor":"#7dc92f","isUserOverlayColor":false,"minHeight":280,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"border":{"radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"55px","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"615px"}} -->
				<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
					style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:55px;min-height:280px">
					<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
						style="background-color:#7dc92f"></span><img class="wp-block-cover__image-background wp-image-1639"
						alt="" src="<?php echo esc_url( $grocefycart_cover_img[0] ); ?>"
						data-object-fit="cover" />
					<div class="wp-block-cover__inner-container">
						<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"constrained","contentSize":"300px","justifyContent":"left"}} -->
						<div class="wp-block-group"><!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button {"backgroundColor":"Terniary","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"100px"},"spacing":{"padding":{"left":"12px","right":"12px","top":"5px","bottom":"5px"}}},"fontSize":"x-small"} -->
								<div class="wp-block-button has-custom-font-size has-x-small-font-size"
									style="text-transform:uppercase"><a
										class="wp-block-button__link has-background-color has-terniary-background-color has-text-color has-background has-link-color wp-element-button"
										style="border-radius:100px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><?php esc_html_e( 'Drinks', 'grocefycart' ); ?></a>
								</div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->

							<!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
							<h5 class="wp-block-heading has-big-font-size"
								style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e( 'Red and White Wine Collection', 'grocefycart' ); ?></h5>
							<!-- /wp:heading -->

							<!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button {"backgroundColor":"background","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":"100px"},"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}}},"fontSize":"small-plus"} -->
								<div class="wp-block-button has-custom-font-size has-small-plus-font-size"
									style="font-style:normal;font-weight:500"><a
										class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color wp-element-button"
										style="border-radius:100px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e( 'Shop Now', 'grocefycart' ); ?></a></div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:cover -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cover_img[1] ); ?>","id":1647,"dimRatio":0,"customOverlayColor":"#ecb92e","isUserOverlayColor":false,"minHeight":280,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"border":{"radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"55px","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"615px"}} -->
				<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
					style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:55px;min-height:280px">
					<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
						style="background-color:#ecb92e"></span><img class="wp-block-cover__image-background wp-image-1647"
						alt="" src="<?php echo esc_url( $grocefycart_cover_img[1] ); ?>"
						data-object-fit="cover" />
					<div class="wp-block-cover__inner-container">
						<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"constrained","contentSize":"300px","justifyContent":"left"}} -->
						<div class="wp-block-group"><!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button {"backgroundColor":"Terniary","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"100px"},"spacing":{"padding":{"left":"12px","right":"12px","top":"5px","bottom":"5px"}}},"fontSize":"x-small"} -->
								<div class="wp-block-button has-custom-font-size has-x-small-font-size"
									style="text-transform:uppercase"><a
										class="wp-block-button__link has-background-color has-terniary-background-color has-text-color has-background has-link-color wp-element-button"
										style="border-radius:100px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><?php esc_html_e( 'Fruits', 'grocefycart' ); ?></a>
								</div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->

							<!-- wp:heading {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
							<h2 class="wp-block-heading has-big-font-size"
								style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e( 'Mixed Fruits Basket', 'grocefycart' ); ?></h2>
							<!-- /wp:heading -->

							<!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button {"backgroundColor":"background","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":"100px"},"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}}},"fontSize":"small-plus"} -->
								<div class="wp-block-button has-custom-font-size has-small-plus-font-size"
									style="font-style:normal;font-weight:500"><a
										class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color wp-element-button"
										style="border-radius:100px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e( 'Shop Now', 'grocefycart' ); ?></a></div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:cover -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	<?php } ?>
</div>
<!-- /wp:group -->