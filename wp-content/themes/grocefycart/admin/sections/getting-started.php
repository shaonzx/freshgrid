<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$recommended_plugins = array(
	'cozy-addons'           => array(
		'name'        => 'Cozy Blocks',
		'description' => 'Your complete website-building toolkit with advanced customization, custom blocks, sections, and templates.',
		'file'        => 'cozy-addons/cozy-addons.php',
	),
	'cozy-essential-addons' => array(
		'name'        => 'Cozy Essential Addons',
		'description' => 'Access the complete starter site library for CozyThemes themes.',
		'file'        => 'cozy-essential-addons/cozy-essential-addons.php',
	),
	'advanced-import'       => array(
		'name'        => 'Advanced Import',
		'description' => 'Import your complete demo website with one click. Deactivate and uninstall after the import is complete.',
		'file'        => 'advanced-import/advanced-import.php',
	),
);
?>
<div id="getting-started" class="section">
	<h2 class="section-title has-icon">
		<i class="section-icon">
			<svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M16.0006 8.32347L15.7337 7.85234C15.532 7.49603 15.431 7.31788 15.2593 7.24684C15.0877 7.1758 14.8935 7.23186 14.5052 7.34397L13.8456 7.533C13.5976 7.59116 13.3376 7.55817 13.1111 7.43984L12.929 7.33293C12.7349 7.20644 12.5856 7.01993 12.5029 6.80071L12.3224 6.25215C12.2037 5.88914 12.1443 5.70763 12.0031 5.60381C11.8618 5.5 11.6741 5.5 11.2987 5.5H10.6961C10.3207 5.5 10.133 5.5 9.99172 5.60381C9.85046 5.70763 9.79106 5.88914 9.67235 6.25215L9.49186 6.80071C9.40918 7.01993 9.25986 7.20644 9.06576 7.33293L8.88365 7.43984C8.65727 7.55817 8.39716 7.59116 8.14924 7.533L7.48958 7.34397C7.10125 7.23186 6.90709 7.1758 6.73541 7.24684C6.56373 7.31788 6.46283 7.49603 6.26103 7.85234L5.99419 8.32347C5.80503 8.65746 5.71046 8.82445 5.72881 9.00223C5.74717 9.17996 5.87378 9.32323 6.12702 9.60978L6.6844 10.2438C6.82062 10.4192 6.91734 10.725 6.91734 10.9999C6.91734 11.275 6.82065 11.5807 6.68441 11.7562L6.12702 12.3902C5.87378 12.6767 5.74717 12.82 5.72881 12.9977C5.71046 13.1755 5.80504 13.3425 5.99419 13.6765L6.26102 14.1476C6.46282 14.5039 6.56373 14.6821 6.73541 14.7531C6.90709 14.8241 7.10126 14.7681 7.4896 14.6559L8.14921 14.4669C8.39718 14.4087 8.65734 14.4418 8.88374 14.5601L9.06583 14.667C9.25995 14.7935 9.40918 14.9801 9.49186 15.1992L9.67235 15.7479C9.79106 16.1109 9.85046 16.2924 9.99172 16.3961C10.133 16.5 10.3207 16.5 10.6961 16.5H11.2987C11.6741 16.5 11.8618 16.5 12.0031 16.3961C12.1443 16.2924 12.2037 16.1109 12.3224 15.7479L12.5029 15.1992C12.5856 14.9801 12.7348 14.7935 12.929 14.667L13.111 14.5601C13.3375 14.4418 13.5976 14.4087 13.8456 14.4669L14.5052 14.6559C14.8935 14.7681 15.0877 14.8241 15.2593 14.7531C15.431 14.6821 15.532 14.5039 15.7338 14.1476L16.0006 13.6765C16.1898 13.3425 16.2844 13.1755 16.2659 12.9977C16.2476 12.82 16.121 12.6767 15.8677 12.3902L15.3104 11.7562C15.1741 11.5807 15.0775 11.275 15.0775 10.9999C15.0775 10.725 15.1742 10.4192 15.3104 10.2438L15.8677 9.60978C16.121 9.32323 16.2476 9.17996 16.2659 9.00223C16.2844 8.82445 16.1898 8.65746 16.0006 8.32347Z"
					stroke="white" stroke-width="1.5" stroke-linecap="round" />
				<path
					d="M11.0026 12.6043C11.8886 12.6043 12.6068 11.8861 12.6068 11.0002C12.6068 10.1142 11.8886 9.396 11.0026 9.396C10.1166 9.396 9.39844 10.1142 9.39844 11.0002C9.39844 11.8861 10.1166 12.6043 11.0026 12.6043Z"
					stroke="white" stroke-width="1.5" />
				<path
					d="M17.4193 1.8335V4.45385C15.7658 2.83296 13.501 1.8335 11.0026 1.8335C5.93999 1.8335 1.83594 5.93755 1.83594 11.0002C1.83594 12.3038 2.10809 13.544 2.59869 14.6668M4.58594 20.1668V17.5464C6.23938 19.1674 8.50428 20.1668 11.0026 20.1668C16.0652 20.1668 20.1693 16.0627 20.1693 11.0002C20.1693 9.69648 19.8971 8.45634 19.4065 7.3335"
					stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
			</svg>

		</i>
		<?php esc_html_e( 'Complete Your Website Setup', 'grocefycart' ); ?>
	</h2>
	<p><?php esc_html_e( 'Install the recommended plugins to unlock starter sites, advanced customization, and the complete website-building experience.', 'grocefycart' ); ?>
	</p>

	<div class="grocefycart-spacer md"></div>

	<div class="cols-grid cols-3">
		<?php
		foreach ( $recommended_plugins as $slug => $plugin_data ) {
			?>
		<div class="plugin-card-layout">
			<figure class="plugin-logo">
				<img src="<?php echo esc_url( GROCEFYCART_URL . "admin/images/{$slug}.png" ); ?>" />
			</figure>

			<h3 class="plugin-title"><?php echo esc_html( $plugin_data['name'] ); ?></h3>

			<p><?php echo esc_html( $plugin_data['description'] ); ?></p>

			<?php
				$classes   = array();
				$classes[] = grocefycart_is_plugin_installed( $plugin_data['file'] ) && grocefycart_is_plugin_activated( $plugin_data['file'] ) ? 'grocefycart-disabled' : 'grocefycart-install-plugin';
				$classes[] = 'btn';
				$classes[] = grocefycart_is_plugin_installed( $plugin_data['file'] ) && grocefycart_is_plugin_activated( $plugin_data['file'] ) ? 'btn-secondary' : 'btn-primary';
				$classes[] = 'has-spinner';
				$classes[] = 'is-full-width';
			?>
			<button
				class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>"
				data-plugin-slug="<?php echo esc_attr( $slug ); ?>">
				<a href="#getting-started"><?php echo grocefycart_is_plugin_installed( $plugin_data['file'] ) && grocefycart_is_plugin_activated( $plugin_data['file'] ) ? esc_html__( 'Activated', 'grocefycart' ) : esc_html__( 'Install & Activate', 'grocefycart' ); ?></a>
				<span class="spinner grocefycart-display-none" id="grocefycart-admin-spinner"></span>
			</button>
		</div>
			<?php
		}
		?>
	</div>

	<div class="grocefycart-spacer md"></div>

	<?php
	if ( grocefycart_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) && grocefycart_is_plugin_activated( 'cozy-essential-addons/cozy-essential-addons.php' ) && grocefycart_is_plugin_activated( 'advanced-import/advanced-import.php' ) ) {
		?>
	<div class="info-text tone-success has-icon">
		<i class="icon">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect width="16" height="16" rx="8" fill="#0EB188" />
				<path d="M5.08594 8.83301L6.54427 10.2913L10.9193 5.70801" stroke="white" stroke-linecap="round"
					stroke-linejoin="round" />
			</svg>
		</i>
		<span><?php esc_html_e( 'All recommended plugins are activated!', 'grocefycart' ); ?></span>
	</div>
		<?php
	}
	?>
</div>