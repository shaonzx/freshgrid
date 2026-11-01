<?php
/**
 * Title: Cover Grid 2
 * Slug: grocefycart/cover-grid-2
 * Categories: grocefycart,grocefycart-woocommerce
 */

$grocefycart_cover_url = trailingslashit( get_template_directory_uri() );
$grocefycart_cover_img = array(
	$grocefycart_cover_url . 'assets/images/cover-1.jpg',
	$grocefycart_cover_url . 'assets/images/cover-2.jpg',
	$grocefycart_cover_url . 'assets/images/cover-3.jpg',
)
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group"
	style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)">
	<?php if ( class_exists( 'WooCommerce' ) ) { ?>
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"},"margin":{"top":"0","bottom":"0"}}}} -->
		<div class="wp-block-columns" style="margin-top:0;margin-bottom:0">
			<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"20px"}}} -->
			<div class="wp-block-column" style="flex-basis:25%">
				<!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":"0","postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
				<div class="wp-block-query"><!-- wp:post-template -->
					<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cover_img[2] ); ?>","id":272,"dimRatio":0,"customOverlayColor":"#6fc1cd","isUserOverlayColor":false,"minHeight":240,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"spacing":{"padding":{"right":"20px","left":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"170px"}} -->
					<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
						style="border-radius:10px;margin-top:0;margin-bottom:0;padding-right:20px;padding-left:20px;min-height:240px">
						<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
							style="background-color:#6fc1cd"></span><img
							class="wp-block-cover__image-background wp-image-272" alt=""
							src="<?php echo esc_url( $grocefycart_cover_img[2] ); ?>"
							data-object-fit="cover" />
						<div class="wp-block-cover__inner-container">
							<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"170px","justifyContent":"left"}} -->
							<div class="wp-block-group">
								<!-- wp:post-terms {"term":"product_cat","className":"is-style-categories-terniary-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} /-->

								<!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"textColor":"heading","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

								<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"primary","fontFamily":"inter","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"10px"}}} /-->

								<!-- wp:read-more {"content":"Shop Now","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"14px","right":"14px"},"margin":{"top":"12px"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"light","fontSize":"x-small"} /-->
							</div>
							<!-- /wp:group -->
						</div>
					</div>
					<!-- /wp:cover -->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:query -->

				<!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":"1","postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
				<div class="wp-block-query"><!-- wp:post-template -->
					<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cover_img[1] ); ?>","id":255,"dimRatio":0,"customOverlayColor":"#c4d3e3","isUserOverlayColor":false,"minHeight":240,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"spacing":{"padding":{"right":"20px","left":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"170px"}} -->
					<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
						style="border-radius:10px;margin-top:0;margin-bottom:0;padding-right:20px;padding-left:20px;min-height:240px">
						<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
							style="background-color:#c4d3e3"></span><img
							class="wp-block-cover__image-background wp-image-255" alt=""
							src="<?php echo esc_url( $grocefycart_cover_img[1] ); ?>"
							data-object-fit="cover" />
						<div class="wp-block-cover__inner-container">
							<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"170px","justifyContent":"left"}} -->
							<div class="wp-block-group">
								<!-- wp:post-terms {"term":"product_cat","className":"is-style-categories-background-with-round is-style-categories-terniary-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} /-->

								<!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"textColor":"heading","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

								<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"primary","fontFamily":"inter","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"10px"}}} /-->

								<!-- wp:read-more {"content":"Shop Now","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"14px","right":"14px"},"margin":{"top":"12px"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"light","fontSize":"x-small"} /-->
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

			<!-- wp:column {"width":"51%"} -->
			<div class="wp-block-column" style="flex-basis:51%">
				<!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":"2","postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
				<div class="wp-block-query"><!-- wp:post-template -->
					<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cover_img[0] ); ?>","id":233,"dimRatio":0,"customOverlayColor":"#efc342","isUserOverlayColor":false,"minHeight":500,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"border":{"radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"55px","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"420px"}} -->
					<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
						style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:55px;min-height:500px">
						<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
							style="background-color:#efc342"></span><img
							class="wp-block-cover__image-background wp-image-233" alt=""
							src="<?php echo esc_url( $grocefycart_cover_img[0] ); ?>"
							data-object-fit="cover" />
						<div class="wp-block-cover__inner-container">
							<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"420px","justifyContent":"left"}} -->
							<div class="wp-block-group">
								<!-- wp:post-terms {"term":"product_cat","separator":",","className":"is-style-categories-terniary-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} /-->

								<!-- wp:post-title {"level":1,"isLink":true,"className":"is-style-title-hover-primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"16px","bottom":"16px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"large-plus","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

								<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"primary","fontFamily":"inter","fontSize":"medium","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

								<!-- wp:read-more {"content":"Shop Now","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"24px","right":"24px"},"margin":{"top":"34px"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"light","fontSize":"small-plus"} /-->
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

			<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"20px"}}} -->
			<div class="wp-block-column" style="flex-basis:25%">
				<!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":"3","postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
				<div class="wp-block-query"><!-- wp:post-template -->
					<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cover_img[1] ); ?>","id":255,"dimRatio":0,"customOverlayColor":"#c4d3e3","isUserOverlayColor":false,"minHeight":240,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"spacing":{"padding":{"right":"20px","left":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"170px"}} -->
					<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
						style="border-radius:10px;margin-top:0;margin-bottom:0;padding-right:20px;padding-left:20px;min-height:240px">
						<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
							style="background-color:#c4d3e3"></span><img
							class="wp-block-cover__image-background wp-image-255" alt=""
							src="<?php echo esc_url( $grocefycart_cover_img[1] ); ?>"
							data-object-fit="cover" />
						<div class="wp-block-cover__inner-container">
							<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"170px","justifyContent":"left"}} -->
							<div class="wp-block-group">
								<!-- wp:post-terms {"term":"product_cat","className":"is-style-categories-background-with-round is-style-categories-terniary-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} /-->

								<!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"textColor":"heading","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

								<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"primary","fontFamily":"inter","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"10px"}}} /-->

								<!-- wp:read-more {"content":"Shop Now","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"14px","right":"14px"},"margin":{"top":"12px"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"light","fontSize":"x-small"} /-->
							</div>
							<!-- /wp:group -->
						</div>
					</div>
					<!-- /wp:cover -->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:query -->

				<!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":"4","postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
				<div class="wp-block-query"><!-- wp:post-template -->
					<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cover_img[2] ); ?>","id":272,"dimRatio":0,"customOverlayColor":"#6fc1cd","isUserOverlayColor":false,"minHeight":240,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"spacing":{"padding":{"right":"20px","left":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"170px"}} -->
					<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
						style="border-radius:10px;margin-top:0;margin-bottom:0;padding-right:20px;padding-left:20px;min-height:240px">
						<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
							style="background-color:#6fc1cd"></span><img
							class="wp-block-cover__image-background wp-image-272" alt=""
							src="<?php echo esc_url( $grocefycart_cover_img[2] ); ?>"
							data-object-fit="cover" />
						<div class="wp-block-cover__inner-container">
							<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"170px","justifyContent":"left"}} -->
							<div class="wp-block-group">
								<!-- wp:post-terms {"term":"product_cat","className":"is-style-categories-terniary-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} /-->

								<!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"textColor":"heading","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

								<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"primary","fontFamily":"inter","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"10px"}}} /-->

								<!-- wp:read-more {"content":"Shop Now","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"14px","right":"14px"},"margin":{"top":"12px"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"light","fontSize":"x-small"} /-->
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
	<?php } else { ?>
		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"medium-plus"} -->
		<p class="has-meta-color-color has-text-color has-link-color has-medium-plus-font-size">
			<?php
			esc_html_e(
				'** NOTE : It looks like WooCommerce plugin is not installed / activated. Please install the WooCommece plugin and
		reload the page',
				'grocefycart'
			)
			?>
		</p>
		<!-- /wp:paragraph -->
	<?php } ?>
</div>
<!-- /wp:group -->