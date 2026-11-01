<?php
/**
 * Title: Product Cover Grid with Categories
 * Slug: grocefycart/cover-grid
 * Categories:grocefycart,grocefycart-woocommerce
 */

$grocefycart_cover_url = trailingslashit( get_template_directory_uri() );
$grocefycart_cover_img = array(
	$grocefycart_cover_url . 'assets/images/cover-1.jpg',
	$grocefycart_cover_url . 'assets/images/cover-2.jpg',
	$grocefycart_cover_url . 'assets/images/cover-3.jpg',
);
$grocefycart_cat_url   = trailingslashit( get_template_directory_uri() );
$grocefycart_cat_img   = array(
	$grocefycart_cat_url . 'assets/images/cat-1.png',
	$grocefycart_cat_url . 'assets/images/cat-2.png',
	$grocefycart_cat_url . 'assets/images/cat-3.png',
	$grocefycart_cat_url . 'assets/images/cat-4.png',
	$grocefycart_cat_url . 'assets/images/cat-5.png',
	$grocefycart_cat_url . 'assets/images/cat-6.png',
	$grocefycart_cat_url . 'assets/images/cat-7.png',
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group"
	style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)">
	<?php
	if ( class_exists( 'WooCommerce' ) ) {
		?>
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"},"margin":{"top":"0","bottom":"0"}}}} -->
		<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"25%"} -->
			<div class="wp-block-column" style="flex-basis:25%">
				<!-- wp:group {"style":{"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"34px","right":"34px"},"blockGap":"0"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
				<div class="wp-block-group has-border-color"
					style="border-color:#022E1C1A;border-width:1px;border-radius:10px;min-height:100%;padding-top:20px;padding-right:34px;padding-bottom:20px;padding-left:34px">
					<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"padding":{"bottom":"10px"},"margin":{"bottom":"30px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"medium"} -->
					<h5 class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-font-size"
						style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-bottom:30px;padding-bottom:10px;font-style:normal;font-weight:600">
						<?php esc_html_e( 'Top Categories', 'grocefycart' ); ?>
					</h5>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":91,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[0] ); ?>" alt="" class="wp-image-91"
									style="aspect-ratio:1;object-fit:cover;width:30px" /></figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Fruits & Vegetable', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(9)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":99,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[1] ); ?>" alt="" class="wp-image-99"
									style="aspect-ratio:1;object-fit:cover;width:30px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Pet Foods', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(4)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":100,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[2] ); ?>" alt="" class="wp-image-100"
									style="aspect-ratio:1;object-fit:cover;width:30px" /></figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Frozen Seafoods', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(6)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":101,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[3] ); ?>" alt="" class="wp-image-101"
									style="aspect-ratio:1;object-fit:cover;width:30px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Dairy Products', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(5)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":103,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[4] ); ?>" alt="" class="wp-image-103"
									style="aspect-ratio:1;object-fit:cover;width:30px" /></figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Alcohol', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(8)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":104,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[5] ); ?>" alt="" class="wp-image-104"
									style="aspect-ratio:1;object-fit:cover;width:30px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Coffee & Tea', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(10)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"0"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-bottom:0;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":105,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[6] ); ?>" alt="" class="wp-image-105"
									style="aspect-ratio:1;object-fit:cover;width:30px" /></figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Food Cupboard', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(3)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"51%"} -->
			<div class="wp-block-column" style="flex-basis:51%">
				<!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
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

				<!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":"2","postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
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
		<?php
	} else {
		?>
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"},"margin":{"top":"0px","bottom":"0"}}}} -->
		<div class="wp-block-columns" style="margin-top:0px;margin-bottom:0"><!-- wp:column {"width":"25%"} -->
			<div class="wp-block-column" style="flex-basis:25%">
				<!-- wp:group {"style":{"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"34px","right":"34px"},"blockGap":"0"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
				<div class="wp-block-group has-border-color"
					style="border-color:#022E1C1A;border-width:1px;border-radius:10px;min-height:100%;padding-top:20px;padding-right:34px;padding-bottom:20px;padding-left:34px">
					<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"padding":{"bottom":"10px"},"margin":{"bottom":"30px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"medium"} -->
					<h5 class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-font-size"
						style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-bottom:30px;padding-bottom:10px;font-style:normal;font-weight:600">
						<?php esc_html_e( 'Top Categories', 'grocefycart' ); ?>
					</h5>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":91,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[0] ); ?>" alt="" class="wp-image-91"
									style="aspect-ratio:1;object-fit:cover;width:30px" /></figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Fruits & Vegetable', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(9)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":99,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[1] ); ?>" alt="" class="wp-image-99"
									style="aspect-ratio:1;object-fit:cover;width:30px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Pet Foods', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(4)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":100,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[2] ); ?>" alt="" class="wp-image-100"
									style="aspect-ratio:1;object-fit:cover;width:30px" /></figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Frozen Seafoods', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(6)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":101,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[3] ); ?>" alt="" class="wp-image-101"
									style="aspect-ratio:1;object-fit:cover;width:30px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Dairy Products', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(5)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":103,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[4] ); ?>" alt="" class="wp-image-103"
									style="aspect-ratio:1;object-fit:cover;width:30px" /></figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Alcohol', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(8)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":104,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[5] ); ?>" alt="" class="wp-image-104"
									style="aspect-ratio:1;object-fit:cover;width:30px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Coffee & Tea', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(10)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"0"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-small-plus-font-size"
						style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-bottom:0;font-style:normal;font-weight:500">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:image {"id":105,"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-primary"}}} -->
							<figure class="wp-block-image size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_cat_img[6] ); ?>" alt="" class="wp-image-105"
									style="aspect-ratio:1;object-fit:cover;width:30px" /></figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
							<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">
								<?php esc_html_e( 'Food Cupboard', 'grocefycart' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color">
							<?php esc_html_e( '(3)', 'grocefycart' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cover_img[0] ); ?>","id":233,"dimRatio":0,"customOverlayColor":"#efc342","isUserOverlayColor":false,"minHeight":500,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"spacing":{"padding":{"right":"55px","left":"55px"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
				<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
					style="border-radius:10px;padding-right:55px;padding-left:55px;min-height:500px"><span
						aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
						style="background-color:#efc342"></span><img class="wp-block-cover__image-background wp-image-233"
						alt="" src="<?php echo esc_url( $grocefycart_cover_img[0] ); ?>" data-object-fit="cover" />
					<div class="wp-block-cover__inner-container">
						<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"420px"}} -->
						<div class="wp-block-group"><!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button {"backgroundColor":"Terniary","className":"is-style-button-hover-primary-bgcolor is-style-grocefycart-button-primary","style":{"border":{"radius":"100px"},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"left":"12px","right":"12px","top":"5px","bottom":"5px"}}},"fontSize":"x-small"} -->
								<div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor is-style-grocefycart-button-primary has-x-small-font-size"
									style="text-transform:uppercase"><a
										class="wp-block-button__link has-terniary-background-color has-background wp-element-button"
										style="border-radius:100px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><?php esc_html_e( 'Juicy', 'grocefycart' ); ?></a>
								</div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->

							<!-- wp:heading {"level":1,"className":"is-style-title-hover-primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"16px","bottom":"16px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"large-plus"} -->
							<h1 class="wp-block-heading is-style-title-hover-primary has-heading-color has-text-color has-link-color has-large-plus-font-size"
								style="margin-top:16px;margin-bottom:16px;font-style:normal;font-weight:600;line-height:1.2">
								<?php esc_html_e( 'Healthy Vegetable Drinks', 'grocefycart' ); ?>
							</h1>
							<!-- /wp:heading -->

							<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"medium"} -->
							<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-medium-font-size"
								style="font-style:normal;font-weight:700;text-transform:uppercase">
								<?php esc_html_e( 'From $1.99-$2.99', 'grocefycart' ); ?>
							</h4>
							<!-- /wp:heading -->

							<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"34px","bottom":"0"},"blockGap":{"top":"0"}}}} -->
							<div class="wp-block-buttons" style="margin-top:34px;margin-bottom:0">
								<!-- wp:button {"backgroundColor":"light","textColor":"primary","className":"is-style-grocefycart-button-terniary","style":{"border":{"radius":"100px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"12px","bottom":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small-plus"} -->
								<div
									class="wp-block-button has-custom-font-size is-style-grocefycart-button-terniary has-small-plus-font-size">
									<a class="wp-block-button__link has-primary-color has-light-background-color has-text-color has-background has-link-color wp-element-button"
										style="border-radius:100px;padding-top:12px;padding-right:28px;padding-bottom:12px;padding-left:28px"><?php esc_html_e( 'Shop Now', 'grocefycart' ); ?></a>
								</div>
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

			<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"20px"}}} -->
			<div class="wp-block-column" style="flex-basis:25%">
				<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cover_img[1] ); ?>","id":255,"dimRatio":0,"customOverlayColor":"#c4d3e3","isUserOverlayColor":false,"minHeight":240,"contentPosition":"bottom left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"spacing":{"padding":{"right":"25px","left":"25px","top":"25px","bottom":"25px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
				<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-grocefycart-hover-zoom-in"
					style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px;min-height:240px">
					<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
						style="background-color:#c4d3e3"></span><img class="wp-block-cover__image-background wp-image-255"
						alt="" src="<?php echo esc_url( $grocefycart_cover_img[1] ); ?>" data-object-fit="cover" />
					<div class="wp-block-cover__inner-container">
						<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"170px"}} -->
						<div class="wp-block-group"><!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button {"backgroundColor":"Terniary","className":"is-style-button-hover-primary-bgcolor is-style-grocefycart-button-primary","style":{"border":{"radius":"100px"},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"left":"12px","right":"12px","top":"5px","bottom":"5px"}}},"fontSize":"x-small"} -->
								<div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor is-style-grocefycart-button-primary has-x-small-font-size"
									style="text-transform:uppercase"><a
										class="wp-block-button__link has-terniary-background-color has-background wp-element-button"
										style="border-radius:100px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><?php esc_html_e( 'Juicy', 'grocefycart' ); ?></a>
								</div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->

							<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"textColor":"heading"} -->
							<h1 class="wp-block-heading has-heading-color has-text-color has-link-color"
								style="margin-top:10px;margin-bottom:10px;font-size:18px;font-style:normal;font-weight:600;line-height:1.2">
								<?php esc_html_e( 'Fresh Coconut Water', 'grocefycart' ); ?>
							</h1>
							<!-- /wp:heading -->

							<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
							<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-x-small-font-size"
								style="font-style:normal;font-weight:700;text-transform:uppercase">
								<?php esc_html_e( 'From $1.99-$2.99', 'grocefycart' ); ?>
							</h4>
							<!-- /wp:heading -->

							<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"13px","bottom":"0"},"blockGap":{"top":"0"}}}} -->
							<div class="wp-block-buttons" style="margin-top:13px;margin-bottom:0">
								<!-- wp:button {"backgroundColor":"light","textColor":"primary","className":"is-style-grocefycart-button-terniary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"100px"},"spacing":{"padding":{"left":"14px","right":"14px","top":"8px","bottom":"8px"}}},"fontSize":"small-plus"} -->
								<div
									class="wp-block-button has-custom-font-size is-style-grocefycart-button-terniary has-small-plus-font-size">
									<a class="wp-block-button__link has-primary-color has-light-background-color has-text-color has-background has-link-color wp-element-button"
										style="border-radius:100px;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px"><?php esc_html_e( 'Shop Now', 'grocefycart' ); ?></a>
								</div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:cover -->

				<!-- wp:cover {"url":"<?php echo esc_url( $grocefycart_cover_img[2] ); ?>","id":254,"dimRatio":0,"customOverlayColor":"#6fc1cd","isUserOverlayColor":false,"minHeight":240,"contentPosition":"center left","isDark":false,"className":"is-style-grocefycart-hover-zoom-in","style":{"spacing":{"padding":{"right":"25px","left":"25px","top":"25px","bottom":"25px"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"170px"}} -->
				<div class="wp-block-cover is-light has-custom-content-position is-position-center-left is-style-grocefycart-hover-zoom-in"
					style="border-radius:10px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px;min-height:240px">
					<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
						style="background-color:#6fc1cd"></span><img class="wp-block-cover__image-background wp-image-254"
						alt="" src="<?php echo esc_url( $grocefycart_cover_img[2] ); ?>" data-object-fit="cover" />
					<div class="wp-block-cover__inner-container">
						<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"170px"}} -->
						<div class="wp-block-group"><!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button {"backgroundColor":"Terniary","className":"is-style-button-hover-primary-bgcolor is-style-grocefycart-button-primary","style":{"border":{"radius":"100px"},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"left":"12px","right":"12px","top":"5px","bottom":"5px"}}},"fontSize":"x-small"} -->
								<div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor is-style-grocefycart-button-primary has-x-small-font-size"
									style="text-transform:uppercase"><a
										class="wp-block-button__link has-terniary-background-color has-background wp-element-button"
										style="border-radius:100px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><?php esc_html_e( 'Juicy', 'grocefycart' ); ?></a>
								</div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->

							<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"textColor":"heading"} -->
							<h1 class="wp-block-heading has-heading-color has-text-color has-link-color"
								style="margin-top:10px;margin-bottom:10px;font-size:18px;font-style:normal;font-weight:600;line-height:1.2">
								<?php esc_html_e( 'Nutritious Veggie Foods', 'grocefycart' ); ?>
							</h1>
							<!-- /wp:heading -->

							<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
							<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-x-small-font-size"
								style="font-style:normal;font-weight:700;text-transform:uppercase">
								<?php esc_html_e( 'From $1.99-$2.99', 'grocefycart' ); ?>
							</h4>
							<!-- /wp:heading -->

							<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"15px","bottom":"0"},"blockGap":{"top":"0"}}}} -->
							<div class="wp-block-buttons" style="margin-top:15px;margin-bottom:0">
								<!-- wp:button {"backgroundColor":"light","textColor":"primary","className":"is-style-grocefycart-button-terniary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"100px"},"spacing":{"padding":{"left":"14px","right":"14px","top":"8px","bottom":"8px"}}},"fontSize":"small-plus"} -->
								<div
									class="wp-block-button has-custom-font-size is-style-grocefycart-button-terniary has-small-plus-font-size">
									<a class="wp-block-button__link has-primary-color has-light-background-color has-text-color has-background has-link-color wp-element-button"
										style="border-radius:100px;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px"><?php esc_html_e( 'Shop Now', 'grocefycart' ); ?></a>
								</div>
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