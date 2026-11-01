<?php
/**
 * Title: Deal Of The Week
 * Slug: grocefycart/deal-of-the-week
 * Categories:grocefycart,grocefycart-woocommerce
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"40px","bottom":"40px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group"
	style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"position":{"type":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"22px"},"margin":{"top":"0","bottom":"0px"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group"
			style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-top:0;margin-bottom:0px;padding-bottom:22px">
			<!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"style":"none","width":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"big"} -->
			<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-big-font-size"
				style="border-bottom-style:none;border-bottom-width:0px;margin-bottom:0;font-style:normal;font-weight:600">
				<?php esc_html_e( 'Deal Of The Week', 'grocefycart' ); ?>
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
		<?php
		if ( class_exists( 'WooCommerce' ) ) {

			?>
			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"45px"}}}} -->
			<div class="wp-block-columns" style="margin-top:45px">
				<!-- wp:column {"width":"33%","style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-column" style="flex-basis:33%">
					<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
					<div class="wp-block-group">
						<!-- wp:woocommerce/product-collection {"queryId":2,"query":{"perPage":1,"pages":1,"offset":0,"postType":"product","orderBy":"random","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":true,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"list","columns":2,"shrinkColumns":false},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/on-sale","hideControls":["inherit","on-sale","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
						<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
							<!-- wp:group {"className":"is-style-grocefycart-boxshadow-hover","style":{"spacing":{"padding":{"right":"25px","left":"25px","top":"34px","bottom":"34px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"position":{"type":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
							<div class="wp-block-group is-style-grocefycart-boxshadow-hover has-border-color"
								style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0;margin-bottom:0;padding-top:34px;padding-right:25px;padding-bottom:34px;padding-left:25px">
								<!-- wp:woocommerce/product-image {"saleBadgeAlign":"left","imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"100%","height":"235px","className":"is-style-grocefycart-sales-badge-primary","style":{"spacing":{"margin":{"bottom":"24px"}}}} /-->

								<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
								<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
									<!-- wp:woocommerce/product-stock-indicator {"isDescendentOfQueryLoop":true,"className":"is-style-grocefycart-wc-custom-psi-rounded","backgroundColor":"secondary","textColor":"heading","fontSize":"x-small","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"8px","right":"8px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

									<!-- wp:post-title {"textAlign":"left","level":5,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"14px"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

									<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"style":{"elements":{"link":{"color":{"text":"#fd8f14"}}},"color":{"text":"#fd8f14"},"spacing":{"margin":{"top":"14px","bottom":"14px"}}}} /-->

									<!-- wp:post-excerpt {"excerptLength":20,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"bottom":"14px"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"small-plus"} /-->

									<!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"24px"},"margin":{"top":"24px"}},"border":{"top":{"color":"#2424241a","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
									<div class="wp-block-group"
										style="border-top-color:#2424241a;border-top-width:1px;margin-top:24px;padding-top:24px">
										<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","className":"is-style-grocefycart-wc-strikeout-foreground","textColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

										<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"is-style-grocefycart-wc-btn-terniary","backgroundColor":"primary","textColor":"background","fontSize":"small","style":{"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}}} /-->
									</div>
									<!-- /wp:group -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:group -->
							<!-- /wp:woocommerce/product-template -->
						</div>
						<!-- /wp:woocommerce/product-collection -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:woocommerce/product-collection {"queryId":3,"query":{"perPage":6,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":true,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/on-sale","hideControls":["inherit","on-sale","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
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

			<?php
		} else {
			$grocefycart_product_url = trailingslashit( get_template_directory_uri() );
			$grocefycart_product_img = array(
				$grocefycart_product_url . 'assets/images/product-wine.jpg',
				$grocefycart_product_url . 'assets/images/product-papaya.jpg',
				$grocefycart_product_url . 'assets/images/product-pomegranate.jpg',
				$grocefycart_product_url . 'assets/images/product-berry-1.jpg',
				$grocefycart_product_url . 'assets/images/product-tagliate.jpg',
				$grocefycart_product_url . 'assets/images/product-farfalle.jpg',
				$grocefycart_product_url . 'assets/images/product-mix.jpg',
				$grocefycart_product_url . 'assets/images/star.png',
			)
			?>
			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"45px"},"blockGap":{"top":"30px","left":"30px"}}}} -->
			<div class="wp-block-columns" style="margin-top:45px"><!-- wp:column {"width":"33%"} -->
				<div class="wp-block-column" style="flex-basis:33%">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
					<div class="wp-block-group has-border-color"
						style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
						<!-- wp:image {"id":61,"width":"auto","height":"240px","aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-grocefycart-hover-zoom-in"} -->
						<figure class="wp-block-image aligncenter size-full is-resized is-style-grocefycart-hover-zoom-in">
							<img src="<?php echo esc_url( $grocefycart_product_img[0] ); ?>" alt="" class="wp-image-61"
								style="aspect-ratio:4/3;object-fit:cover;width:auto;height:240px" />
						</figure>
						<!-- /wp:image -->

						<!-- wp:group {"style":{"spacing":{"margin":{"top":"24px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group" style="margin-top:24px;margin-bottom:0">
							<!-- wp:paragraph {"style":{"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}}},"backgroundColor":"secondary","textColor":"heading","fontSize":"x-small"} -->
							<p class="has-heading-color has-secondary-background-color has-text-color has-background has-link-color has-x-small-font-size"
								style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-style:normal;font-weight:500">
								<?php esc_html_e( 'In stock', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"14px","bottom":"14px"}}},"textColor":"heading","fontSize":"medium"} -->
						<h6 class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-font-size"
							style="margin-top:14px;margin-bottom:14px;font-style:normal;font-weight:600">
							<?php esc_html_e( 'Red & White Wine Collection', 'grocefycart' ); ?>
						</h6>
						<!-- /wp:heading -->

						<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}}} -->
						<figure class="wp-block-image size-full is-resized" style="margin-top:0px;margin-bottom:0"><img
								src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>" alt="" class="wp-image-1423"
								style="object-fit:cover;width:80px;height:16px" /></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#6a6a6a"}}},"color":{"text":"#6a6a6a"},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"16px"}}},"fontSize":"small-plus"} -->
						<p class="has-text-color has-link-color has-small-plus-font-size"
							style="color:#6a6a6a;margin-top:16px;font-style:normal;font-weight:400">
							<?php
							esc_html_e(
								'Lorem ipsum dolor sit
							amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
							aliqua.',
								'grocefycart'
							)
							?>
						</p>
						<!-- /wp:paragraph -->

						<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group"
							style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:24px">
							<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small-plus"} -->
							<h2 class="wp-block-heading has-small-plus-font-size" style="font-style:normal;font-weight:600">
								<s><mark style="background-color:rgba(0, 0, 0, 0)"
										class="has-inline-color has-foreground-color"><?php esc_html_e( '$1299.99', 'grocefycart' ); ?></mark></s><mark
									style="background-color:rgba(0, 0, 0, 0)"
									class="has-inline-color has-primary-color"><?php esc_html_e( '$999.99', 'grocefycart' ); ?></mark>
							</h2>
							<!-- /wp:heading -->

							<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
							<div class="wp-block-buttons">
								<!-- wp:button {"backgroundColor":"primary","textColor":"background","className":"is-style-grocefycart-button-terniary","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"14px","right":"14px","top":"12px","bottom":"12px"}},"border":{"radius":"100px"}},"fontSize":"x-small"} -->
								<div
									class="wp-block-button has-custom-font-size is-style-grocefycart-button-terniary has-x-small-font-size">
									<a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color wp-element-button"
										style="border-radius:100px;padding-top:12px;padding-right:14px;padding-bottom:12px;padding-left:14px"><?php esc_html_e( 'Add To Cart', 'grocefycart' ); ?></a>
								</div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":""} -->
				<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"24px"}}}} -->
						<div class="wp-block-columns"><!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:group {"className":"is-style-grocefycart-boxshadow-hover","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"},"blockGap":"0"},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
								<div class="wp-block-group is-style-grocefycart-boxshadow-hover has-border-color"
									style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
									<!-- wp:image {"id":74,"width":"auto","height":"110px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
									<figure class="wp-block-image aligncenter size-full is-resized"
										style="margin-bottom:24px"><img
											src="<?php echo esc_url( $grocefycart_product_img[1] ); ?>" alt=""
											class="wp-image-74" style="width:auto;height:110px" /></figure>
									<!-- /wp:image -->

									<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
									<h2
										class="wp-block-heading has-primary-color has-text-color has-link-color has-normal-font-size">
										<?php esc_html_e( '$29.99', 'grocefycart' ); ?>
									</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"14px","bottom":"14px"}}},"textColor":"heading","fontSize":"normal"} -->
									<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
										style="margin-top:14px;margin-bottom:14px">
										<?php esc_html_e( 'Fresh Papaya', 'grocefycart' ); ?>
									</h2>
									<!-- /wp:heading -->

									<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
									<figure class="wp-block-image size-full is-resized"><img
											src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>" alt=""
											class="wp-image-1423" style="object-fit:cover;width:80px;height:16px" />
									</figure>
									<!-- /wp:image -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:group {"className":"is-style-grocefycart-boxshadow-hover","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"},"blockGap":"0"},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
								<div class="wp-block-group is-style-grocefycart-boxshadow-hover has-border-color"
									style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
									<!-- wp:image {"id":76,"width":"auto","height":"110px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
									<figure class="wp-block-image aligncenter size-full is-resized"
										style="margin-bottom:24px"><img
											src="<?php echo esc_url( $grocefycart_product_img[2] ); ?>" alt=""
											class="wp-image-76" style="width:auto;height:110px" /></figure>
									<!-- /wp:image -->

									<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
									<h2
										class="wp-block-heading has-primary-color has-text-color has-link-color has-normal-font-size">
										<?php esc_html_e( '$39.99', 'grocefycart' ); ?>
									</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"14px","bottom":"14px"}}},"textColor":"heading","fontSize":"normal"} -->
									<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
										style="margin-top:14px;margin-bottom:14px">
										<?php esc_html_e( 'Fresh Pomegranate', 'grocefycart' ); ?>
									</h2>
									<!-- /wp:heading -->

									<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
									<figure class="wp-block-image size-full is-resized"><img
											src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>" alt=""
											class="wp-image-1423" style="object-fit:cover;width:80px;height:16px" />
									</figure>
									<!-- /wp:image -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:group {"className":"is-style-grocefycart-boxshadow-hover","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"},"blockGap":"0"},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
								<div class="wp-block-group is-style-grocefycart-boxshadow-hover has-border-color"
									style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
									<!-- wp:image {"id":66,"width":"auto","height":"110px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
									<figure class="wp-block-image aligncenter size-full is-resized"
										style="margin-bottom:24px"><img
											src="<?php echo esc_url( $grocefycart_product_img[3] ); ?>" alt=""
											class="wp-image-66" style="width:auto;height:110px" /></figure>
									<!-- /wp:image -->

									<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
									<h2
										class="wp-block-heading has-primary-color has-text-color has-link-color has-normal-font-size">
										$29.99</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"14px","bottom":"14px"}}},"textColor":"heading","fontSize":"normal"} -->
									<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
										style="margin-top:14px;margin-bottom:14px">
										<?php esc_html_e( 'Fresh Strawberry', 'grocefycart' ); ?>
									</h2>
									<!-- /wp:heading -->

									<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
									<figure class="wp-block-image size-full is-resized"><img
											src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>" alt=""
											class="wp-image-1423" style="object-fit:cover;width:80px;height:16px" />
									</figure>
									<!-- /wp:image -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->

						<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"24px"},"margin":{"top":"24px","bottom":"0"}}}} -->
						<div class="wp-block-columns" style="margin-top:24px;margin-bottom:0"><!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:group {"className":"is-style-grocefycart-boxshadow-hover","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"},"blockGap":"0"},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
								<div class="wp-block-group is-style-grocefycart-boxshadow-hover has-border-color"
									style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
									<!-- wp:image {"id":70,"width":"auto","height":"110px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
									<figure class="wp-block-image aligncenter size-full is-resized"
										style="margin-bottom:24px"><img
											src="<?php echo esc_url( $grocefycart_product_img[4] ); ?>" alt=""
											class="wp-image-70" style="width:auto;height:110px" /></figure>
									<!-- /wp:image -->

									<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
									<h2
										class="wp-block-heading has-primary-color has-text-color has-link-color has-normal-font-size">
										<?php esc_html_e( '$29.99', 'grocefycart' ); ?>
									</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"14px","bottom":"14px"}}},"textColor":"heading","fontSize":"normal"} -->
									<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
										style="margin-top:14px;margin-bottom:14px">
										<?php esc_html_e( 'Capellini Tagliati', 'grocefycart' ); ?>
									</h2>
									<!-- /wp:heading -->

									<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
									<figure class="wp-block-image size-full is-resized"><img
											src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>" alt=""
											class="wp-image-1423" style="object-fit:cover;width:80px;height:16px" />
									</figure>
									<!-- /wp:image -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:group {"className":"is-style-grocefycart-boxshadow-hover","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"},"blockGap":"0"},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
								<div class="wp-block-group is-style-grocefycart-boxshadow-hover has-border-color"
									style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
									<!-- wp:image {"id":68,"width":"auto","height":"110px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
									<figure class="wp-block-image aligncenter size-full is-resized"
										style="margin-bottom:24px"><img
											src="<?php echo esc_url( $grocefycart_product_img[5] ); ?>" alt=""
											class="wp-image-68" style="width:auto;height:110px" /></figure>
									<!-- /wp:image -->

									<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
									<h2
										class="wp-block-heading has-primary-color has-text-color has-link-color has-normal-font-size">
										<?php esc_html_e( '$39.99', 'grocefycart' ); ?>
									</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"14px","bottom":"14px"}}},"textColor":"heading","fontSize":"normal"} -->
									<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
										style="margin-top:14px;margin-bottom:14px">
										<?php esc_html_e( 'Farfalle Pasta', 'grocefycart' ); ?>
									</h2>
									<!-- /wp:heading -->

									<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
									<figure class="wp-block-image size-full is-resized"><img
											src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>" alt=""
											class="wp-image-1423" style="object-fit:cover;width:80px;height:16px" />
									</figure>
									<!-- /wp:image -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:group {"className":"is-style-grocefycart-boxshadow-hover","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"},"blockGap":"0"},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
								<div class="wp-block-group is-style-grocefycart-boxshadow-hover has-border-color"
									style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
									<!-- wp:image {"id":63,"width":"auto","height":"110px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
									<figure class="wp-block-image aligncenter size-full is-resized"
										style="margin-bottom:24px"><img
											src="<?php echo esc_url( $grocefycart_product_img[6] ); ?>" alt=""
											class="wp-image-63" style="width:auto;height:110px" /></figure>
									<!-- /wp:image -->

									<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
									<h2
										class="wp-block-heading has-primary-color has-text-color has-link-color has-normal-font-size">
										<?php esc_html_e( '$39.99', 'grocefycart' ); ?>
									</h2>
									<!-- /wp:heading -->

									<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"14px","bottom":"14px"}}},"textColor":"heading","fontSize":"normal"} -->
									<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
										style="margin-top:14px;margin-bottom:14px">
										<?php esc_html_e( 'Mixed Fruit basket', 'grocefycart' ); ?>
									</h2>
									<!-- /wp:heading -->

									<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
									<figure class="wp-block-image size-full is-resized"><img
											src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>" alt=""
											class="wp-image-1423" style="object-fit:cover;width:80px;height:16px" />
									</figure>
									<!-- /wp:image -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		<?php } ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->