<?php
/**
 * Title: Products Sidebar
 * Slug: grocefycart/wc-sidebar
 * Categories: grocefycart,grocefycart-woocommerce
 */

$grocefycart_sidebar_url = trailingslashit( get_template_directory_uri() );
$grocefycart_sidebar_img = array(
	$grocefycart_sidebar_url . 'assets/images/ads.jpg',
)
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<?php
	if ( class_exists( 'WooCommerce' ) ) {
		?>
		<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"},"blockGap":"30px","margin":{"top":"0px","bottom":"30px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"textColor":"heading","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-heading-color has-text-color has-link-color"
			style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0px;margin-bottom:30px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px">
			<!-- wp:heading {"style":{"spacing":{"padding":{"bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"textColor":"heading","fontSize":"medium"} -->
			<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-font-size"
				style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;padding-bottom:10px;font-style:normal;font-weight:600">
				<?php esc_html_e( 'Product Categories', 'grocefycart' ); ?>
			</h2>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
			<div class="wp-block-group has-primary-color has-text-color" style="font-style:normal;font-weight:500">
				<!-- wp:woocommerce/product-categories {"hasImage":true,"isHierarchical":false,"className":"is-style-grocefycart-wc-categories-border","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"padding":{"top":"15px","bottom":"5px","left":"15px","right":"15px"},"blockGap":"0px","margin":{"top":"0px","bottom":"30px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"textColor":"heading","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-heading-color has-text-color has-link-color"
			style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0px;margin-bottom:30px;padding-top:15px;padding-right:15px;padding-bottom:5px;padding-left:15px">
			<!-- wp:image {"id":452,"sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-grocefycart-hover-animation-pulse","style":{"spacing":{"padding":{"bottom":"10px"},"margin":{"right":"0","left":"0","top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"radius":"10px","bottom":{"width":"0px","style":"none"}}}} -->
			<figure
				class="wp-block-image aligncenter size-full has-custom-border is-style-grocefycart-hover-animation-pulse"
				style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-bottom:10px;font-style:normal;font-weight:600">
				<img src="<?php echo esc_url( $grocefycart_sidebar_img[0] ); ?>" alt="" class="wp-image-452"
					style="border-radius:10px;border-bottom-style:none;border-bottom-width:0px" />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"},"blockGap":"0px","margin":{"top":"0px","bottom":"30px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"textColor":"heading","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-heading-color has-text-color has-link-color"
			style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0px;margin-bottom:30px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px">
			<!-- wp:heading {"style":{"spacing":{"padding":{"bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"textColor":"heading","fontSize":"medium"} -->
			<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-font-size"
				style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;padding-bottom:10px;font-style:normal;font-weight:600">
				<?php esc_html_e( 'New Products', 'grocefycart' ); ?>
			</h2>
			<!-- /wp:heading -->

			<!-- wp:query {"queryId":108,"query":{"perPage":5,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"default"}} -->
				<!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}}} -->
				<div class="wp-block-columns"
					style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px">
					<!-- wp:column {"width":"33.33%"} -->
					<div class="wp-block-column" style="flex-basis:33.33%">
						<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"180px","className":"is-style-grocefycart-hover-zoom-in"} /-->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
						<!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|heading"}}}}} /-->

						<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"is-style-grocefycart-wc-strikeout-foreground","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

						<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:group -->
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