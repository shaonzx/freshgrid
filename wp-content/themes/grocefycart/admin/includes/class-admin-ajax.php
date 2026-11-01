<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class GrocefyCart_Admin_Ajax {
	private static $instance = null;

	public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	private function is_plugin_installed( $plugin_slug ) {
		$plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
		return file_exists( $plugin_path );
	}

	private function is_plugin_activated( $plugin_slug ) {
		return is_plugin_active( $plugin_slug );
	}

	private function __construct() {
		add_action( 'wp_ajax_grocefycart_dismissble_notice', array( $this, 'dismiss_welcome_notice' ) );
		add_action( 'wp_ajax_grocefycart_install_and_activate_plugins', array( $this, 'install_activate_plugins' ) );
	}

	public function dismiss_welcome_notice() {
		check_admin_referer( 'grocefycart_welcome_nonce', 'nonce' );

		update_option( 'grocefycart_dismissed_custom_notice', 1 );

		wp_send_json_success();
	}

	public function install_activate_plugins() {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_send_json_error( 'Not allowed' );
		}

		check_admin_referer( 'grocefycart_welcome_nonce', 'nonce' );

		$requested_plugins = isset( $_POST['plugins'] ) ? json_decode( sanitize_text_field( wp_unslash( $_POST['plugins'] ) ) ) : array();

		$allowed_plugins = array(
			'cozy-addons',
			'cozy-essential-addons',
			'advanced-import',
		);

		$matches = array();
		if ( ! empty( $requested_plugins ) ) {
			$matches = array_intersect( $requested_plugins, $allowed_plugins );
			if ( empty( $matches ) ) {
				$matches = $allowed_plugins;
			}
		} else {
			$matches = $allowed_plugins;
		}

		require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
		require_once ABSPATH . 'wp-admin/includes/file.php';
		require_once ABSPATH . 'wp-admin/includes/misc.php';
		require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';

		foreach ( $matches as $plugin_slug ) {
			$plugin_file = $plugin_slug . '.php';

			if ( $this->is_plugin_activated( $plugin_slug . '/' . $plugin_file ) ) {
				continue;
			}

			if ( $this->is_plugin_installed( $plugin_slug . '/' . $plugin_file ) ) {
				activate_plugin( $plugin_slug . '/' . $plugin_file );
				continue;
			}

			$api = plugins_api(
				'plugin_information',
				array(
					'slug'   => $plugin_slug,
					'fields' => array( 'sections' => false ),
				)
			);

			if ( is_wp_error( $api ) ) {
				continue;
			}

			$upgrader = new Plugin_Upgrader();
			$install  = $upgrader->install( $api->download_link );

			if ( $install ) {
				// Activate the plugin.
				$activate = activate_plugin( $plugin_slug . '/' . $plugin_file );

				// Check if activation is successful.
				if ( is_wp_error( $activate ) ) {
					continue;
				}
			}
		}

		wp_send_json_success();
	}
}
