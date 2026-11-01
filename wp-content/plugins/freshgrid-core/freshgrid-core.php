<?php
/**
 * Plugin Name: FreshGrid Core
 * Description: All custom code for Srijon FreshGrid: store behaviour, block patterns, polish CSS, brand assets and seed scripts.
 * Version:     1.0.0
 * Author:      Srijon Tech Limited
 * Requires at least: 6.6
 * Requires PHP: 7.4
 * Requires Plugins: woocommerce
 * Text Domain: freshgrid-core
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

define( 'FRESHGRID_CORE_VERSION', '1.0.0' );
define( 'FRESHGRID_CORE_FILE', __FILE__ );
define( 'FRESHGRID_CORE_DIR', plugin_dir_path( __FILE__ ) );
define( 'FRESHGRID_CORE_URL', plugin_dir_url( __FILE__ ) );

require_once FRESHGRID_CORE_DIR . 'inc/store.php';
require_once FRESHGRID_CORE_DIR . 'inc/assets.php';
