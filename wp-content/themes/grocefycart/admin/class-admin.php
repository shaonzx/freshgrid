<?php
if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

class GrocefyCart_Admin
{


	private static $instance = null;

	private static $dir = GROCEFYCART_DIR . 'admin/';
	private static $url = GROCEFYCART_URL . 'admin/';

	public static function get_instance()
	{
		if (is_null(self::$instance)) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	private function __construct()
	{
		$this->include_files();

		add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_assets'));

		add_action('admin_notices', array($this, 'welcome_notice'));

		add_action('admin_menu', array($this, 'register_theme_menu'));
	}

	private function include_files()
	{
		require_once self::$dir . 'includes/class-admin-ajax.php';
		GrocefyCart_Admin_Ajax::get_instance();
	}

	public function enqueue_admin_assets()
	{
		if (! function_exists('get_current_screen')) {
			return;
		}

		$saaslauncher_notice_current_screen = get_current_screen();

		$allowed_pages = array(
			'dashboard',
			'themes',
		);

		if ((isset($_GET['page']) && ! empty($_GET['page']) && 'about-grocefycart' === $_GET['page']) || in_array($saaslauncher_notice_current_screen->id, $allowed_pages, true)) {
			wp_enqueue_style('grocefycart-admin-style', self::$url . 'css/admin-style.css', array(), GROCEFYCART_VERSION, 'all');

			wp_enqueue_script('grocefycart-admin-scripts', self::$url . 'js/admin-scripts.js', array('jquery'), GROCEFYCART_VERSION, true);
			wp_localize_script(
				'grocefycart-admin-scripts',
				'ajaxObj',
				array(
					'ajaxURL'      => admin_url('admin-ajax.php'),
					'welcomeNonce' => wp_create_nonce('grocefycart_welcome_nonce'),
					'redirectURL'  => admin_url('themes.php?page=about-grocefycart'),
				)
			);
		}
	}

	public function welcome_notice()
	{
		$current_screen  = get_current_screen();
		$allowed_screens = array('dashboard', 'themes');
		if (! in_array($current_screen->id, $allowed_screens, true) || is_network_admin() || ! current_user_can('manage_options') || get_option('grocefycart_dismissed_custom_notice')) {
			return;
		}
?>
		<div class="grocefycart-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice"
			id="grocefycart-welcome-notice">
			<div class="content-holder">
				<div class="notices">
					<figure class="brand-logo">
						<img width="44" height="44" src="<?php echo esc_url(self::$url . 'images/brand_logo.png'); ?>"
							alt="Cozy Blocks logo" />
					</figure>

					<div>
						<h2 class="notice-heading">
							<?php esc_html_e('Welcome to GrocefyCart 🎉', 'grocefycart'); ?>
						</h2>

						<p><?php esc_html_e('GrocefyCart is installed and ready to go. Install the recommended plugins to import Starter Sites, unlock advanced customization, and launch your store faster.', 'grocefycart'); ?>
						</p>

						<div class="grocefycart-spacer sm"></div>

						<p>
							<i>
								<?php esc_html_e('Recommended Plugins: ✓ Cozy Blocks · ✓ Cozy Essential Addons · ✓ Advanced Import ', 'grocefycart'); ?>
							</i>
						</p>

						<div class="grocefycart-spacer sm"></div>

						<div class="notice-buttons">
							<?php
							if (grocefycart_is_plugin_activated('cozy-addons/cozy-addons.php') && grocefycart_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php') && grocefycart_is_plugin_activated('advanced-import/advanced-import.php')) {
							?>
								<button class="notice-button">
									<a
										href="<?php echo esc_url(admin_url('site-editor.php')); ?>"><?php esc_html_e('Customize', 'grocefycart'); ?></a>
								</button>
								<button class="notice-button notice-button-secondary">
									<a
										href="<?php echo esc_url(admin_url('themes.php?page=about-grocefycart')); ?>"><?php esc_html_e('Explore GrocefyCart', 'grocefycart'); ?></a>
								</button>
							<?php
							} else {
							?>
								<button class="grocefycart-install-required-plugins btn notice-button has-spinner">
									<a href="#"><?php esc_html_e('Get Started in a single click →', 'grocefycart'); ?></a>
									<span class="spinner grocefycart-display-none" id="grocefycart-admin-spinner"></span>
								</button>
								<button class="notice-button notice-button-secondary">
									<a
										href="<?php echo esc_url(admin_url('themes.php?page=about-grocefycart')); ?>"><?php esc_html_e('Explore GrocefyCart', 'grocefycart'); ?></a>
								</button>
							<?php
							}
							?>
						</div>
					</div>
				</div>
				<figure class="notice-image">
					<img src="<?php echo esc_url(self::$url . 'images/theme_screen_img.png'); ?>" />
				</figure>
			</div>
		</div>
<?php
	}

	public function register_theme_menu()
	{
		add_theme_page(
			esc_html__('About GrocefyCart', 'grocefycart'),
			esc_html__('About GrocefyCart', 'grocefycart'),
			'edit_theme_options',
			'about-grocefycart',
			array($this, 'render_admin_dashboard')
		);
	}

	public function render_admin_dashboard()
	{
		require_once self::$dir . 'index.php';
	}
}
