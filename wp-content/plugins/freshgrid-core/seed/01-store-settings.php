<?php
/**
 * WooCommerce settings for Bangladesh, Cash on Delivery and shipping zones.
 * Run: wp eval-file wp-content/plugins/freshgrid-core/seed/01-store-settings.php
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

$freshgrid_options = array(
	// Location and currency.
	'timezone_string'                                 => 'Asia/Dhaka',
	'date_format'                                     => 'j F Y',
	'time_format'                                     => 'g:i a',
	'woocommerce_default_country'                     => 'BD:BD-13',
	'woocommerce_store_address'                       => 'House 00, Road 00, Dhanmondi',
	'woocommerce_store_city'                          => 'Dhaka',
	'woocommerce_store_postcode'                      => '1205',
	'woocommerce_allowed_countries'                   => 'specific',
	'woocommerce_specific_allowed_countries'          => array( 'BD' ),
	'woocommerce_ship_to_countries'                   => '',
	'woocommerce_default_customer_address'            => 'base',
	'woocommerce_currency'                            => 'BDT',
	'woocommerce_currency_pos'                        => 'left',
	'woocommerce_price_thousand_sep'                  => ',',
	'woocommerce_price_decimal_sep'                   => '.',
	'woocommerce_price_num_decimals'                  => 0,
	'woocommerce_weight_unit'                         => 'kg',
	'woocommerce_dimension_unit'                      => 'cm',
	'woocommerce_calc_taxes'                          => 'no',
	'woocommerce_manage_stock'                        => 'yes',
	'woocommerce_hide_out_of_stock_items'             => 'no',
	'woocommerce_coming_soon'                         => 'no',
	'woocommerce_store_pages_only'                    => 'no',

	// Guest checkout and accounts. Customers choose their own password, so
	// registering works before SMTP is configured on the server.
	'woocommerce_enable_guest_checkout'               => 'yes',
	'woocommerce_enable_checkout_login_reminder'      => 'yes',
	'woocommerce_enable_signup_and_login_from_checkout' => 'yes',
	'woocommerce_enable_myaccount_registration'       => 'yes',
	'woocommerce_registration_generate_username'      => 'yes',
	'woocommerce_registration_generate_password'      => 'no',

	// Checkout fields: phone required, the rest kept short.
	'woocommerce_checkout_phone_field'                => 'required',
	'woocommerce_checkout_company_field'              => 'hidden',
	'woocommerce_checkout_address_2_field'            => 'hidden',
	'woocommerce_ship_to_destination'                 => 'billing_only',
	'woocommerce_enable_shipping_calc'                => 'yes',
	'woocommerce_shipping_cost_requires_address'      => 'no',
	'woocommerce_enable_reviews'                      => 'yes',

	// Skip the setup wizard and task list: this seed is the setup.
	'woocommerce_task_list_hidden'                    => 'yes',
	'woocommerce_task_list_complete'                  => 'yes',
);

foreach ( $freshgrid_options as $freshgrid_name => $freshgrid_value ) {
	update_option( $freshgrid_name, $freshgrid_value );
}

$freshgrid_profile              = (array) get_option( 'woocommerce_onboarding_profile', array() );
$freshgrid_profile['skipped']   = true;
$freshgrid_profile['completed'] = true;
update_option( 'woocommerce_onboarding_profile', $freshgrid_profile );

// Cash on Delivery is the only payment method for now.
foreach ( WC()->payment_gateways()->payment_gateways() as $freshgrid_gateway ) {
	if ( 'cod' !== $freshgrid_gateway->id ) {
		$freshgrid_settings            = get_option( $freshgrid_gateway->get_option_key(), array() );
		$freshgrid_settings['enabled'] = 'no';
		update_option( $freshgrid_gateway->get_option_key(), $freshgrid_settings );
	}
}
update_option(
	'woocommerce_cod_settings',
	array(
		'enabled'            => 'yes',
		'title'              => 'Cash on Delivery',
		'description'        => 'Pay in cash when your groceries reach your door.',
		'instructions'       => 'Please keep the exact amount ready. Our delivery team will call you before arriving.',
		'enable_for_methods' => array(),
		'enable_for_virtual' => 'yes',
	)
);

/**
 * Create a zone once, or return the existing one with the same name.
 *
 * @param string $name  Zone name.
 * @param int    $order Zone order: lower matches first.
 * @return WC_Shipping_Zone
 */
function freshgrid_seed_zone( $name, $order ) {
	foreach ( WC_Shipping_Zones::get_zones() as $zone ) {
		if ( $zone['zone_name'] === $name ) {
			return new WC_Shipping_Zone( $zone['id'] );
		}
	}
	$zone = new WC_Shipping_Zone();
	$zone->set_zone_name( $name );
	$zone->set_zone_order( $order );
	$zone->save();
	return $zone;
}

/**
 * Add a shipping method to a zone once and apply its settings.
 *
 * @param WC_Shipping_Zone $zone     Zone.
 * @param string           $type     Method id.
 * @param array            $settings Method settings.
 */
function freshgrid_seed_method( WC_Shipping_Zone $zone, $type, array $settings ) {
	$instance_id = 0;
	foreach ( $zone->get_shipping_methods() as $method ) {
		if ( $method->id === $type ) {
			$instance_id = $method->get_instance_id();
		}
	}
	if ( ! $instance_id ) {
		$instance_id = $zone->add_shipping_method( $type );
	}
	update_option( "woocommerce_{$type}_{$instance_id}_settings", $settings );
}

// The setup wizard's catch-all zone offers unconditional free shipping and would match before ours.
foreach ( WC_Shipping_Zones::get_zones() as $freshgrid_old_zone ) {
	if ( 'Bangladesh' === $freshgrid_old_zone['zone_name'] ) {
		WC_Shipping_Zones::delete_zone( $freshgrid_old_zone['id'] );
	}
}

// Dhaka matches first; every other district falls through to Outside Dhaka.
$freshgrid_zones = array(
	array( 'Inside Dhaka', 0, 'BD:BD-13', 'state', '60' ),
	array( 'Outside Dhaka', 1, 'BD', 'country', '120' ),
);

foreach ( $freshgrid_zones as list( $freshgrid_zone_name, $freshgrid_order, $freshgrid_code, $freshgrid_type, $freshgrid_cost ) ) {
	$freshgrid_zone = freshgrid_seed_zone( $freshgrid_zone_name, $freshgrid_order );
	$freshgrid_zone->set_zone_order( $freshgrid_order );
	$freshgrid_zone->set_locations(
		array(
			array(
				'code' => $freshgrid_code,
				'type' => $freshgrid_type,
			),
		)
	);
	$freshgrid_zone->save();

	freshgrid_seed_method(
		$freshgrid_zone,
		'flat_rate',
		array(
			'title'      => 'Home Delivery',
			'tax_status' => 'none',
			'cost'       => $freshgrid_cost,
		)
	);
	freshgrid_seed_method(
		$freshgrid_zone,
		'free_shipping',
		array(
			'title'            => 'Free Delivery',
			'requires'         => 'min_amount',
			'min_amount'       => '3000',
			'ignore_discounts' => 'no',
		)
	);
}

WC_Cache_Helper::get_transient_version( 'shipping', true );

WP_CLI::success( 'Store settings applied.' );
