<?php
/**
 * Title: Latest Blogs Stack
 * Slug: grocefycart/blogs-column
 * Categories:grocefycart
 */

?>
<!-- wp:group {"metadata":{"categories":["grocefycart"],"patternName":"grocefycart/blogs","name":"Latest Blogs"},"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-light-background-color has-background"
	style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"22px"},"margin":{"top":"0","bottom":"0px"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group"
		style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-top:0;margin-bottom:0px;padding-bottom:22px">
		<!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"style":"none","width":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"big"} -->
		<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-big-font-size"
			style="border-bottom-style:none;border-bottom-width:0px;margin-bottom:0;font-style:normal;font-weight:600"><?php esc_html_e( 'Latest News & Blogs', 'grocefycart' ); ?></h4>
		<!-- /wp:heading -->

		<!-- wp:buttons {"style":{"border":{"width":"1px","color":"#4C4C4C","radius":"100px"}},"backgroundColor":"transparent"} -->
		<div class="wp-block-buttons has-border-color has-transparent-background-color has-background"
			style="border-color:#4C4C4C;border-width:1px;border-radius:100px">
			<!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","className":"is-style-grocefycart-button-up-arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"100px","width":"0px","style":"none"},"spacing":{"padding":{"left":"18px","right":"18px","top":"8px","bottom":"8px"}}},"fontSize":"normal"} -->
			<div class="wp-block-button has-custom-font-size is-style-grocefycart-button-up-arrow has-normal-font-size">
				<a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button"
					href="#"
					style="border-style:none;border-width:0px;border-radius:100px;padding-top:8px;padding-right:18px;padding-bottom:8px;padding-left:18px"><?php esc_html_e( 'See All', 'grocefycart' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"45px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group" style="margin-top:45px">
		<!-- wp:query {"queryId":24,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
		<div class="wp-block-query">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"grid","columnCount":1}} -->
			<!-- wp:columns {"verticalAlignment":null,"className":"is-style-grocefycart-boxshadow-light","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background"} -->
			<div class="wp-block-columns is-style-grocefycart-boxshadow-light has-background-background-color has-background"
				style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
				<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
					<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"280px","align":"center","className":"is-style-grocefycart-hover-zoom-in"} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":""} -->
				<div class="wp-block-column is-vertically-aligned-center">
					<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
					<div class="wp-block-group">
						<!-- wp:post-terms {"term":"category","className":"is-style-categories-background-faded-round is-style-categories-faded-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} /-->

						<!-- wp:post-title {"level":4,"isLink":true,"className":"is-style-title-hover-primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"big"} /-->

						<!-- wp:post-excerpt {"excerptLength":30,"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"small-plus"} /-->

						<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"typography":{"textTransform":"capitalize"},"spacing":{"blockGap":"15px","margin":{"top":"15px"}}},"textColor":"meta-color","fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group has-meta-color-color has-text-color has-link-color has-small-plus-font-size"
							style="margin-top:15px;text-transform:capitalize">
							<!-- wp:post-date {"className":"is-style-grocefycart-date-icon-light","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color"} /-->

							<!-- wp:post-author-name {"className":"is-style-grocefycart-author-icon-light"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
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