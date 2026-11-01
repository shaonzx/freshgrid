<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require GROCEFYCART_DIR . 'admin/sections/header.php';
?>
<div id="grocefycart-dashboard">
	<div id="getting-started" class="tab-content is-active">
		<?php require GROCEFYCART_DIR . 'admin/sections/banner.php'; ?>
	
		<div class="grocefycart-spacer"></div>
	
		<div class="cols-wrapper">
			<div class="col-item">
				<?php require GROCEFYCART_DIR . 'admin/sections/getting-started.php'; ?>
	
				<div class="grocefycart-spacer"></div>
	
				<?php require GROCEFYCART_DIR . 'admin/sections/theme-demos.php'; ?>
	
			</div>
			<aside class="col-item">
				<?php require GROCEFYCART_DIR . 'admin/sections/sidebar.php'; ?>
			</aside>
		</div>
	
		<div class="grocefycart-spacer"></div>
	
		<?php
		require GROCEFYCART_DIR . 'admin/sections/branding.php';

		if ( ! grocefycart_premium_access() ) {
			?>
			<div class="grocefycart-spacer"></div>
			<?php
			require GROCEFYCART_DIR . 'admin/sections/upsell.php';
		}
		?>
	</div>

	<div id="starter-sites" class="tab-content">
		<div class="cols-wrapper">
			<div class="col-item">
				<?php require GROCEFYCART_DIR . 'admin/sections/starter-sites.php'; ?>
			</div>
			<aside class="col-item">
				<?php require GROCEFYCART_DIR . 'admin/sections/sidebar.php'; ?>
			</aside>
		</div>
	</div>

	<div id="free-vs-pro" class="tab-content">
		<?php require GROCEFYCART_DIR . 'admin/sections/free-vs-pro.php'; ?>
	</div>

	<div id="activate-licence" class="tab-content">
		<?php require GROCEFYCART_DIR . 'admin/sections/activate-licence.php'; ?>
	</div>

	<div class="grocefycart-spacer"></div>
	
	<?php require GROCEFYCART_DIR . 'admin/sections/faq.php'; ?>

	<div class="grocefycart-spacer"></div>

	<?php require GROCEFYCART_DIR . 'admin/sections/helper-links.php'; ?>
</div>