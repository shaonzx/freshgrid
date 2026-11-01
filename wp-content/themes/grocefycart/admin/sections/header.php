<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$theme = wp_get_theme();
?>
<div id="grocefycart-admin-header">
	<div class="nav-bar">
		<div class="brand-wrapper">
			<figure class="brand-logo">
				<img src="<?php echo esc_url( GROCEFYCART_URL . 'admin/images/brand_logo.png' ); ?>" />
			</figure>
			<h2 class="brand-title">
				<?php echo esc_html( $theme->get( 'Name' ) ); ?>
			</h2>
		</div>
		<ul class="nav-menu">
			<li class="nav-menu-item is-active" data-tab="getting-started"><?php esc_html_e( 'Getting Started', 'grocefycart' ); ?></li>
			<li class="nav-menu-item" data-tab="starter-sites"><?php esc_html_e( 'Starter Sites', 'grocefycart' ); ?></li>
			<li class="nav-menu-item" data-tab="free-vs-pro"><?php esc_html_e( 'Free vs Pro', 'grocefycart' ); ?></li>
			<li class="nav-menu-item" data-tab="activate-licence"><?php esc_html_e( 'Activate Licence', 'grocefycart' ); ?></li>
		</ul>
	</div>
	<?php
	if ( ! grocefycart_premium_access() ) {
		?>
		<button class="upsell-btn">
			<a href="https://cozythemes.com/pricing-and-plans">
				<svg width="16" height="16" viewBox="0 0 22 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M17.106 17.4769C17.1612 17.4769 17.2066 17.5223 17.2066 17.5775V18.6908C17.2066 18.746 17.1612 18.7904 17.106 18.7904H3.67926C3.62405 18.7904 3.5787 18.746 3.57868 18.6908V17.5775C3.57868 17.5223 3.62403 17.4769 3.67926 17.4769H17.106ZM10.2857 0.142957C10.4161 -0.0476858 10.6973 -0.0476188 10.8277 0.142957L15.1588 6.48964C15.2504 6.62394 15.4264 6.67082 15.5728 6.59999L20.4078 4.26112L20.6324 4.15858C20.8922 4.04046 21.1687 4.28745 21.0806 4.55897L17.4439 15.7728C17.3999 15.9081 17.2737 15.9994 17.1314 15.9994H3.65973C3.51454 15.9993 3.38672 15.9042 3.34528 15.765L0.0142235 4.55995C-0.0668121 4.28714 0.213611 4.04762 0.470278 4.1703L5.54157 6.60194C5.68774 6.67181 5.86331 6.62447 5.95465 6.49061L10.2857 0.142957Z" />
				</svg>
				<?php esc_html_e( 'Upgrade to Pro', 'grocefycart' ); ?>
			</a>
		</button>
		<?php
	}
	?>
</div>