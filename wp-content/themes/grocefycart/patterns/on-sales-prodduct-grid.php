<?php
/**
 * Title: On Sales Product Grid
 * Slug: grocefycart/on-sales-product-grid
 * Categories:grocefycart, grocefycart-woocommerce
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"40px","bottom":"40px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group"
	style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)">
	<?php if ( class_exists( 'WooCommerce' ) ) { ?>
		<!-- wp:group {"style":{"position":{"type":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"22px"},"margin":{"top":"0","bottom":"0px"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group"
				style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-top:0;margin-bottom:0px;padding-bottom:22px">
				<!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"style":"none","width":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"big"} -->
				<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-big-font-size"
					style="border-bottom-style:none;border-bottom-width:0px;margin-bottom:0;font-style:normal;font-weight:600">
					<?php esc_html_e( 'On Sales Products', 'grocefycart' ); ?>
				</h4>
				<!-- /wp:heading -->

				<!-- wp:buttons {"style":{"border":{"width":"1px","color":"#4C4C4C","radius":"100px"}},"backgroundColor":"transparent"} -->
				<div class="wp-block-buttons has-border-color has-transparent-background-color has-background"
					style="border-color:#4C4C4C;border-width:1px;border-radius:100px">
					<!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","className":"is-style-grocefycart-button-up-arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"100px","width":"0px","style":"none"},"spacing":{"padding":{"left":"18px","right":"18px","top":"8px","bottom":"8px"}}},"fontSize":"normal"} -->
					<div
						class="wp-block-button has-custom-font-size is-style-grocefycart-button-up-arrow has-normal-font-size">
						<a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button"
							href="#"
							style="border-style:none;border-width:0px;border-radius:100px;padding-top:8px;padding-right:18px;padding-bottom:8px;padding-left:18px"><?php esc_html_e( 'See All', 'grocefycart' ); ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"45px"}}}} -->
			<div class="wp-block-columns" style="margin-top:45px"><!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:woocommerce/product-collection {"queryId":13,"query":{"perPage":8,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":true,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/on-sale","hideControls":["inherit","on-sale","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
					<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
						<!-- wp:group {"className":"is-style-grocefycart-boxshadow-hover","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"24px","bottom":"24px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group is-style-grocefycart-boxshadow-hover has-border-color"
							style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
							<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"100%","height":"130px"} /-->

							<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","className":"is-style-grocefycart-wc-hide-strikeout","textColor":"primary","fontSize":"normal","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

							<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"14px","top":"14px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"normal","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

							<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"fontSize":"normal","style":{"color":{"text":"#fd8f14"},"elements":{"link":{"color":{"text":"#fd8f14"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
						</div>
						<!-- /wp:group -->
						<!-- /wp:woocommerce/product-template -->
					</div>
					<!-- /wp:woocommerce/product-collection -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	<?php } else { ?>
		<!-- wp:paragraph -->
		<p>
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