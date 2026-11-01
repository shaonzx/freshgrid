<?php
if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<div id="starter-sites" class="section">
	<h2 class="section-title has-icon">
		<i class="section-icon">
			<svg width="36" height="36" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect width="40" height="40" rx="20" fill="#4C3EFA" />
				<path
					d="M16.9227 11.8831L15.36 12.6055C12.9533 13.7179 11.75 14.2741 11.75 15.1872C11.75 16.1002 12.9533 16.6564 15.36 17.7689L16.9227 18.4912C18.4373 19.1913 19.1946 19.5413 20 19.5413C20.8054 19.5413 21.5627 19.1913 23.0773 18.4912L24.64 17.7689C27.0467 16.6564 28.25 16.1002 28.25 15.1872C28.25 14.2741 27.0467 13.7179 24.64 12.6055L23.0773 11.8831C21.5627 11.183 20.8054 10.833 20 10.833C19.1946 10.833 18.4373 11.183 16.9227 11.8831Z"
					stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
				<path
					d="M28.0557 19.1729C28.1852 19.355 28.25 19.5449 28.25 19.7537C28.25 20.6537 27.0467 21.2021 24.64 22.2987L23.0773 23.0108C21.5627 23.7008 20.8054 24.0459 20 24.0459C19.1946 24.0459 18.4373 23.7008 16.9227 23.0108L15.36 22.2987C12.9533 21.2021 11.75 20.6537 11.75 19.7537C11.75 19.5449 11.8148 19.355 11.9443 19.1729"
					stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
				<path
					d="M27.6786 23.9102C28.0595 24.2136 28.25 24.516 28.25 24.874C28.25 25.7741 27.0467 26.3224 24.64 27.419L23.0773 28.131C21.5627 28.8212 20.8054 29.1662 20 29.1662C19.1946 29.1662 18.4373 28.8212 16.9227 28.131L15.36 27.419C12.9533 26.3224 11.75 25.7741 11.75 24.874C11.75 24.516 11.9405 24.2136 12.3214 23.9102"
					stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
		</i>
		<?php esc_html_e('Start with a Ready-Made Website', 'grocefycart'); ?>
	</h2>
	<p><?php esc_html_e('Choose a professionally designed Starter Site and import your complete website  in just a few clicks.', 'grocefycart'); ?> </p>

	<div class="grocefycart-spacer md"></div>

	<div class="starter-sites-collection cols-grid cols-3">
		<div class="template-item">
			<figure class="template-image">
				<img src="<?php echo esc_url(GROCEFYCART_URL . 'admin/images/template-1.png'); ?>" />
			</figure>
			<h3 class="template-title"><?php esc_html_e('Default', 'grocefycart'); ?></h3>
		</div>
		<div class="template-item">
			<figure class="template-image">
				<img src="<?php echo esc_url(GROCEFYCART_URL . 'admin/images/template-2.png'); ?>" />
			</figure>
			<h3 class="template-title"><?php esc_html_e('Pro', 'grocefycart'); ?></h3>
		</div>
	</div>

	<div class="grocefycart-spacer md"></div>

	<?php
	if (grocefycart_is_plugin_activated('cozy-addons/cozy-addons.php') && grocefycart_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php') && grocefycart_is_plugin_activated('advanced-import/advanced-import.php')) {
	?>
		<div class="btn btn-primary">
			<a href="<?php echo esc_url(admin_url('themes.php?page=advanced-import')); ?>"><?php esc_html_e('Import Starter Site →', 'grocefycart'); ?></a>
		</div>
	<?php
	} else {
	?>
		<div class="grocefycart-install-required-plugins btn btn-primary has-spinner">
			<a><?php esc_html_e('Install & Activate Required Plugins →', 'grocefycart'); ?></a>
			<span class="spinner grocefycart-display-none" id="grocefycart-admin-spinner"></span>
		</div>
	<?php
	}
	?>
</div>