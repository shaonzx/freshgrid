<?php
if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<div class="grocefycart-banner section">
	<div class="inner-wrap">
		<p class="section-pill"><?php esc_html_e('Welcome to GrocefyCart', 'grocefycart'); ?></p>
		<div class="grocefycart-spacer xs"></div>
		<h1 class="banner-heading"><?php esc_html_e('Launch a professional online store effortlessly.', 'grocefycart'); ?> <mark><?php esc_html_e('Start selling today!', 'grocefycart'); ?></mark></h1>

		<ul class="getting-started-timeline">
			<li class="timeline-item complete"><span class="counter"><?php esc_html_e('1', 'grocefycart'); ?></span> <?php esc_html_e('Setup', 'grocefycart'); ?></li>
			<li class="separator"></li>
			<?php
			$classes   = array();
			$classes[] = 'timeline-item';
			$classes[] = grocefycart_is_plugin_activated('cozy-addons/cozy-addons.php') && grocefycart_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php') && grocefycart_is_plugin_activated('advanced-import/advanced-import.php') ? 'complete' : '';
			?>
			<li class="<?php echo esc_attr(implode(' ', array_map('sanitize_html_class', array_values($classes)))); ?>"><span class="counter"><?php esc_html_e('2', 'grocefycart'); ?></span> <?php esc_html_e('Import Starter Site', 'grocefycart'); ?></li>
			<li class="separator"></li>
			<li class="timeline-item"><span class="counter"><?php esc_html_e('3', 'grocefycart'); ?></span> <?php esc_html_e('Customize', 'grocefycart'); ?></li>
			<li class="separator"></li>
			<li class="timeline-item"><span class="counter"><?php esc_html_e('4', 'grocefycart'); ?></span> <?php esc_html_e('Launch', 'grocefycart'); ?></li>
		</ul>

		<div class="grocefycart-spacer sm"></div>

		<?php
		if (! grocefycart_is_plugin_activated('cozy-addons/cozy-addons.php') || ! grocefycart_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php') || ! grocefycart_is_plugin_activated('advanced-import/advanced-import.php')) {
		?>
			<button class="grocefycart-install-required-plugins btn btn-primary has-spinner">
				<a><?php esc_html_e('Get Started →', 'grocefycart'); ?></a>
				<span class="spinner grocefycart-display-none" id="grocefycart-admin-spinner"></span>
			</button>
		<?php
		} elseif (grocefycart_is_plugin_activated('cozy-addons/cozy-addons.php') && grocefycart_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php') && grocefycart_is_plugin_activated('advanced-import/advanced-import.php')) {
		?>
			<button class="btn btn-primary">
				<a href="<?php echo esc_url(admin_url('themes.php?page=advanced-import')); ?>"><?php esc_html_e('Import Starter Site →', 'grocefycart'); ?></a>
			</button>
		<?php
		}
		?>
	</div>
	<figure class="banner-image">
		<img height="330" src="<?php echo esc_url(GROCEFYCART_URL . 'admin/images/dashboard-banner.png'); ?>" />
	</figure>
</div>