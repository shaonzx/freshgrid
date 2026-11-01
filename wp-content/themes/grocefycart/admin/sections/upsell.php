<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$list_features = array(
	'More Premium Starter Sites',
	'Popup Builder',
	'Advanced Customizations',
	'Testimonials & Team Builder',
	'Dynamic Content Blocks',
	'Brand logo Showcase',
	'Custom Post Types',
	'WooCommerce Blocks',
	'Slider and Carousel Builders',
	'Complete Website Builder Toolkit',
	'Advanced Photo Gallery',
	'Advanced Portfolio Builder',
);
?>

<div id="upsell" class="section cols-grid cols-2">
	<div class="cols-wrapper">
		<i>
			<svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect width="40" height="40" rx="20" fill="#121B28" />
				<path
					d="M26.5591 28.0814C26.6143 28.0814 26.6597 28.1267 26.6597 28.1819V29.2952C26.6597 29.3505 26.6143 29.3948 26.5591 29.3948H13.1323C13.0771 29.3948 13.0327 29.3505 13.0327 29.2952V28.1819C13.0327 28.1267 13.0771 28.0814 13.1323 28.0814H26.5591ZM19.7388 10.7474C19.8691 10.5568 20.1503 10.5569 20.2808 10.7474L24.6118 17.0941C24.7035 17.2284 24.8795 17.2752 25.0259 17.2044L29.8608 14.8655L30.0855 14.763C30.3453 14.6449 30.6218 14.8919 30.5337 15.1634L26.897 26.3773C26.853 26.5126 26.7267 26.6038 26.5845 26.6038H13.1128C12.9676 26.6037 12.8397 26.5086 12.7983 26.3694L9.46729 15.1644C9.38634 14.8915 9.66759 14.6516 9.92432 14.7747L14.9946 17.2064C15.1408 17.2763 15.3163 17.2289 15.4077 17.095L19.7388 10.7474Z"
					fill="#FFB600" />
			</svg>
		</i>
		<div>
			<h2 class="section-title"><?php esc_html_e( 'Build Without Limits with Pro', 'grocefycart' ); ?></h2>
			<p><?php esc_html_e( 'Unlock advanced customization, premium Starter Sites, more templates, WooCommerce features, and the complete Pro toolkit.', 'grocefycart' ); ?>
			</p>
			<div class="grocefycart-spacer md"></div>
			<button class="btn upsell-btn">
				<a href="https://cozythemes.com/pricing-and-plans" target="_blank"
					rel="noopener"><?php esc_html_e( 'Explore Pro →', 'grocefycart' ); ?></a>
			</button>
		</div>
	</div>
	<ul class="section features-section icon-list cols-grid cols-2">
		<?php
		foreach ( $list_features as $feature ) {
			?>
			<li class="icon-list-item">
				<i class="list-icon">
					<svg width="9" height="9" viewBox="0 0 7 6" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.5 3.625L1.95833 5.08333L6.33333 0.5" stroke="white" stroke-linecap="round"
							stroke-linejoin="round" />
					</svg>
				</i>
				<?php echo esc_html( $feature ); ?>
			</li>
			<?php
		}
		?>
	</ul>
</div>