<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div id="sidebar" class="is-sticky">
	<div class="sidebar-section">
		<h3 class="sidebar-title has-icon">
			<i class="sidebar-icon">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M9.9974 18.3332C14.5997 18.3332 18.3307 14.6022 18.3307 9.99984C18.3307 5.39746 14.5997 1.6665 9.9974 1.6665C5.39502 1.6665 1.66406 5.39746 1.66406 9.99984C1.66406 14.6022 5.39502 18.3332 9.9974 18.3332Z"
						stroke="#4C3EFA" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
					<path
						d="M9.9948 14.1668C12.296 14.1668 14.1615 12.3013 14.1615 10.0002C14.1615 7.69898 12.296 5.8335 9.9948 5.8335C7.69361 5.8335 5.82812 7.69898 5.82812 10.0002C5.82812 12.3013 7.69361 14.1668 9.9948 14.1668Z"
						stroke="#4C3EFA" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
					<path
						d="M12.9404 7.0537L15.8867 4.10742M12.9404 12.9462L15.8867 15.8925M7.04784 12.9462L4.10156 15.8925M7.04784 7.0537L4.10156 4.10742"
						stroke="#4C3EFA" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
				</svg>

			</i>
			<?php esc_html_e( 'Need Help?', 'grocefycart' ); ?>
		</h3>
		<p>
			<?php
				esc_html_e( 'Find answers in our documentation or send us a support request. We\'re here to help you get your site launched.', 'grocefycart' )
			?>
		</p>

		<div class="buttons-group">
			<button class="btn btn-primary is-full-width">
				<a href="https://cozythemes.com/support"
					target="_blank"><?php esc_html_e( 'Support →', 'grocefycart' ); ?></a>
			</button>
			<button class="btn btn-secondary is-full-width">
				<a href="https://docs.cozythemes.com/theme-guide"
					target="_blank"><?php esc_html_e( 'Documentation →', 'grocefycart' ); ?></a>
			</button>
		</div>
	</div>

	<div class="grocefycart-spacer sm"></div>

	<div class="sidebar-section text-align-center">
		<figure class="stars">
			<img src="<?php echo esc_url( GROCEFYCART_URL . 'admin/images/stars.png' ); ?>" />
		</figure>

		<div class="grocefycart-spacer sm"></div>

		<h3 class="sidebar-title">
			<?php esc_html_e( 'Love our Product ?', 'grocefycart' ); ?>
		</h3>
		<p><?php esc_html_e( 'Your review helps us grow and make GrocefyCart even better.', 'grocefycart' ); ?>
		</p>
		<div class="grocefycart-spacer sm"></div>
		<button class="btn btn-secondary is-full-width">
			<a href="https://wordpress.org/support/theme/grocefycart/reviews/#new-post"
				target="_blank"><?php esc_html_e( 'Leave a Review →', 'grocefycart' ); ?></a>
		</button>
	</div>

	<?php
	if ( ! grocefycart_premium_access() ) {
		?>
	<div class="grocefycart-spacer sm"></div>

	<div class="sidebar-upsell-section">
		<h3 class="sidebar-title has-icon">
			<i class="sidebar-icon">
				<svg width="18" height="17" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M17.107 17.4773C17.162 17.4774 17.2065 17.5218 17.2066 17.5769V18.6902C17.2066 18.7453 17.1621 18.7906 17.107 18.7907H3.67926C3.62422 18.7905 3.57965 18.7452 3.57965 18.6902V17.5769C3.57974 17.5219 3.62428 17.4775 3.67926 17.4773H17.107ZM10.2857 0.143285C10.4161 -0.0477615 10.6983 -0.0477615 10.8287 0.143285L15.1588 6.48899C15.2504 6.62333 15.4274 6.67115 15.5738 6.60032L20.4078 4.26047L20.6334 4.15793C20.8931 4.04006 21.1695 4.28693 21.0816 4.55832L17.4449 15.7722C17.401 15.9075 17.2746 15.9996 17.1324 15.9997H3.66071C3.5154 15.9997 3.38669 15.9037 3.34528 15.7644L0.0142236 4.56028C-0.066933 4.28729 0.214455 4.0475 0.471255 4.17063L5.54157 6.60129C5.68781 6.67141 5.86324 6.62393 5.95465 6.48996L10.2857 0.143285Z"
						fill="#FFB600" />
				</svg>
			</i>
			<?php esc_html_e( 'Build More With Pro', 'grocefycart' ); ?>
		</h3>
		<p><?php esc_html_e( 'Unlock advanced tools for dynamic content, popups, portfolios, testimonials, galleries, WooCommerce, premium themes, and more.', 'grocefycart' ); ?>
		</p>

		<div class="grocefycart-spacer sm"></div>

		<button class="btn sidebar-upsell-btn is-full-width">
			<a href="https://cozythemes.com/pricing-and-plans/" target="_blank" rel="noopener nofollow">
				<?php esc_html_e( 'Upgrade Now', 'grocefycart' ); ?>
			</a>
		</button>
	</div>
		<?php
	}
	?>
</div>