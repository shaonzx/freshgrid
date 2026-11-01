<?php
/**
 * Title: Sidebar Default
 * Slug: grocefycart/sidebar-default
 * Categories: grocefycart,grocefycart-woocommerce
 */

$grocefycart_sidebar_url = trailingslashit( get_template_directory_uri() );
$grocefycart_sidebar_img = array(
	$grocefycart_sidebar_url . 'assets/images/ads.jpg',
)
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"
	style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
	<?php if ( class_exists( 'WooCommerce' ) ) { ?>
		<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"},"blockGap":"30px","margin":{"top":"0px","bottom":"30px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"textColor":"heading","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-heading-color has-text-color has-link-color"
			style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0px;margin-bottom:30px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px">
			<!-- wp:heading {"style":{"spacing":{"padding":{"bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"textColor":"heading","fontSize":"medium"} -->
			<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-font-size"
				style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;padding-bottom:10px;font-style:normal;font-weight:600">
				<?php esc_html_e( 'Product Categories', 'grocefycart' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
			<div class="wp-block-group has-primary-color has-text-color" style="font-style:normal;font-weight:500">
				<!-- wp:woocommerce/product-categories {"hasImage":true,"isHierarchical":false,"className":"is-style-grocefycart-wc-categories-border","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<?php } ?>

	<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"padding":{"top":"15px","bottom":"5px","left":"15px","right":"15px"},"blockGap":"0px","margin":{"top":"0px","bottom":"30px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"textColor":"heading","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-border-color has-heading-color has-text-color has-link-color"
		style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0px;margin-bottom:30px;padding-top:15px;padding-right:15px;padding-bottom:5px;padding-left:15px">
		<!-- wp:image {"id":452,"sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-grocefycart-hover-animation-pulse","style":{"spacing":{"padding":{"bottom":"10px"},"margin":{"right":"0","left":"0","top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"radius":"10px","bottom":{"width":"0px","style":"none"}}}} -->
		<figure
			class="wp-block-image aligncenter size-full has-custom-border is-style-grocefycart-hover-animation-pulse"
			style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-bottom:10px;font-style:normal;font-weight:600">
			<img src="<?php echo esc_url( $grocefycart_sidebar_img[0] ); ?>" alt=""
				class="wp-image-452" style="border-radius:10px;border-bottom-style:none;border-bottom-width:0px" />
		</figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"},"blockGap":"30px","margin":{"top":"0px","bottom":"30px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"textColor":"heading","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-border-color has-heading-color has-text-color has-link-color"
		style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0px;margin-bottom:30px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px">
		<!-- wp:heading {"style":{"spacing":{"padding":{"bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"textColor":"heading","fontSize":"medium"} -->
		<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-font-size"
			style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;padding-bottom:10px;font-style:normal;font-weight:600">
			<?php esc_html_e( 'Blog Categories', 'grocefycart' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
		<div class="wp-block-group has-primary-color has-text-color" style="font-style:normal;font-weight:500">
			<!-- wp:categories {"showPostCounts":true,"className":"is-style-grocefycart-categories-primary","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"},"blockGap":"30px","margin":{"top":"0px","bottom":"0"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"textColor":"heading","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-border-color has-heading-color has-text-color has-link-color"
		style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0px;margin-bottom:0;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px">
		<!-- wp:heading {"style":{"spacing":{"padding":{"bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"textColor":"heading","fontSize":"medium"} -->
		<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-font-size"
			style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;padding-bottom:10px;font-style:normal;font-weight:600"><?php esc_html_e( 'Blogs', 'grocefycart' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
		<div class="wp-block-group has-primary-color has-text-color" style="font-style:normal;font-weight:500">
			<!-- wp:query {"queryId":189,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
			<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}}} -->
				<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","bottom":"15px"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"15px","left":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}}} -->
				<div class="wp-block-columns are-vertically-aligned-center"
					style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:15px">
					<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
						<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"75px"} /-->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"10px"}}} -->
					<div class="wp-block-column is-vertically-aligned-center">
						<!-- wp:post-title {"level":6,"isLink":true,"className":"is-style-title-hover-primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"x-small"} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->