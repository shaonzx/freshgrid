<?php
/**
 * Title: Sitemap
 * Slug: grocefycart/sitemap
 * Categories: grocefycart
 */

?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0">
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"40px","bottom":"40px"}}},"backgroundColor":"primary-shade","layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group has-primary-shade-background-color has-background"
		style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"120px","right":"120px"}},"typography":{"textTransform":"uppercase"}},"textColor":"heading","fontSize":"xx-large"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"40px","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group"
		style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:40px;padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<div class="wp-block-columns" style="margin-top:0;margin-bottom:0">
			<!-- wp:column {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
			<div class="wp-block-column has-heading-color has-text-color has-link-color">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"large"} -->
				<h3 class="wp-block-heading has-heading-color has-text-color has-link-color has-large-font-size"
					style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:500"><?php esc_html_e( 'Pages', 'grocefycart' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:page-list {"className":"is-style-grocefycart-page-list-hidden","style":{"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"400"}}} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
			<div class="wp-block-column has-heading-color has-text-color has-link-color">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"large"} -->
				<h3 class="wp-block-heading has-heading-color has-text-color has-link-color has-large-font-size"
					style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">Categories
				</h3>
				<!-- /wp:heading -->

				<!-- wp:categories {"showPostCounts":true,"className":"is-style-blockverse-categories-bullet-hide-style is-style-grocefycart-categories-bullet-hide-style is-style-grocefycart-categories-primary","style":{"spacing":{"padding":{"right":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"normal"} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"large"} -->
				<h3 class="wp-block-heading has-heading-color has-text-color has-link-color has-large-font-size"
					style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:500"><?php esc_html_e( 'Posts', 'grocefycart' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:query {"queryId":44,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
				<div class="wp-block-query">
					<!-- wp:post-template {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","layout":{"type":"default","columnCount":3}} -->
					<!-- wp:post-title {"level":5,"isLink":true,"className":"is-style-title-hover-primary","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} /-->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->