<?php
/**
 * Title: Testimonial
 * Slug: grocefycart/testimonial
 * Categories:grocefycart
 */

$grocefycart_testimonial_url = trailingslashit( get_template_directory_uri() );
$grocefycart_testimonial_img = array(
	$grocefycart_testimonial_url . '/assets/images/testimonial.png',
	$grocefycart_testimonial_url . '/assets/images/star.png',
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"40px","top":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group"
	style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"22px"},"margin":{"top":"0","bottom":"0px"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group"
		style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-top:0;margin-bottom:0px;padding-bottom:22px">
		<!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"style":"none","width":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"big"} -->
		<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-big-font-size"
			style="border-bottom-style:none;border-bottom-width:0px;margin-bottom:0;font-style:normal;font-weight:600"><?php esc_html_e( "Customer's Reviews", 'grocefycart' ); ?></h4>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"35px","left":"35px"},"margin":{"top":"40px"}}}} -->
	<div class="wp-block-columns" style="margin-top:40px"><!-- wp:column {"width":"33%"} -->
		<div class="wp-block-column" style="flex-basis:33%">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"spacing":{"padding":{"top":"35px","bottom":"35px","left":"35px","right":"35px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color"
				style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:35px;padding-right:35px;padding-bottom:35px;padding-left:35px">
				<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}}} -->
				<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%">
						<!-- wp:image {"id":1376,"width":"70px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full is-resized"><img
								src="<?php echo esc_url( $grocefycart_testimonial_img[0] ); ?>"
								alt="" class="wp-image-1376" style="aspect-ratio:1;object-fit:cover;width:70px" />
						</figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"}}} -->
					<div class="wp-block-column is-vertically-aligned-center">
						<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"medium"} -->
						<h5 class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-font-size"
							style="font-style:normal;font-weight:600"><?php esc_html_e( 'Alex Xavier', 'grocefycart' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Best Seller', 'grocefycart' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

				<!-- wp:image {"id":1386,"width":"auto","height":"24px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}}} -->
				<figure class="wp-block-image size-full is-resized" style="margin-top:20px;margin-bottom:20px"><img
						src="<?php echo esc_url( $grocefycart_testimonial_img[1] ); ?>"
						alt="" class="wp-image-1386" style="width:auto;height:24px" /></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"normal"} -->
				<p class="has-foreground-color has-text-color has-link-color has-normal-font-size"
					style="font-style:normal;font-weight:400">
					<?php
					esc_html_e(
						"From wellness tips to expert advice, we're here to support
					your journey to a healthier you. Our team of dedicated healthcare providers has years of experience
					and expertise.",
						'grocefycart'
					)
					?>
					</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33%"} -->
		<div class="wp-block-column" style="flex-basis:33%">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"spacing":{"padding":{"top":"35px","bottom":"35px","left":"35px","right":"35px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color"
				style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:35px;padding-right:35px;padding-bottom:35px;padding-left:35px">
				<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}}} -->
				<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%">
						<!-- wp:image {"id":1376,"width":"70px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full is-resized"><img
								src="<?php echo esc_url( $grocefycart_testimonial_img[0] ); ?>"
								alt="" class="wp-image-1376" style="aspect-ratio:1;object-fit:cover;width:70px" />
						</figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"}}} -->
					<div class="wp-block-column is-vertically-aligned-center">
						<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"medium"} -->
						<h5 class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-font-size"
							style="font-style:normal;font-weight:600"><?php esc_html_e( 'Alex Xavier', 'grocefycart' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Best Seller', 'grocefycart' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

				<!-- wp:image {"id":1386,"width":"auto","height":"24px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}}} -->
				<figure class="wp-block-image size-full is-resized" style="margin-top:20px;margin-bottom:20px"><img
						src="<?php echo esc_url( $grocefycart_testimonial_img[1] ); ?>"
						alt="" class="wp-image-1386" style="width:auto;height:24px" /></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"normal"} -->
				<p class="has-foreground-color has-text-color has-link-color has-normal-font-size"
					style="font-style:normal;font-weight:400">
					<?php
					esc_html_e(
						"From wellness tips to expert advice, we're here to support
					your journey to a healthier you. Our team of dedicated healthcare providers has years of experience
					and expertise.",
						'grocefycart'
					)
					?>
					</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33%"} -->
		<div class="wp-block-column" style="flex-basis:33%">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"spacing":{"padding":{"top":"35px","bottom":"35px","left":"35px","right":"35px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color"
				style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:35px;padding-right:35px;padding-bottom:35px;padding-left:35px">
				<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}}} -->
				<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%">
						<!-- wp:image {"id":1376,"width":"70px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full is-resized"><img
								src="<?php echo esc_url( $grocefycart_testimonial_img[0] ); ?>"
								alt="" class="wp-image-1376" style="aspect-ratio:1;object-fit:cover;width:70px" />
						</figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"}}} -->
					<div class="wp-block-column is-vertically-aligned-center">
						<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"medium"} -->
						<h5 class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-font-size"
							style="font-style:normal;font-weight:600"><?php esc_html_e( 'Alex Xavier', 'grocefycart' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Best Seller', 'grocefycart' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

				<!-- wp:image {"id":1386,"width":"auto","height":"24px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}}} -->
				<figure class="wp-block-image size-full is-resized" style="margin-top:20px;margin-bottom:20px"><img
						src="<?php echo esc_url( $grocefycart_testimonial_img[1] ); ?>"
						alt="" class="wp-image-1386" style="width:auto;height:24px" /></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"normal"} -->
				<p class="has-foreground-color has-text-color has-link-color has-normal-font-size"
					style="font-style:normal;font-weight:400">
					<?php
					esc_html_e(
						"From wellness tips to expert advice, we're here to support
					your journey to a healthier you. Our team of dedicated healthcare providers has years of experience
					and expertise.",
						'grocefycart'
					)
					?>
					</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->