<?php
/**
 * Store behaviour that WooCommerce settings can't express.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

/**
 * Bangladesh has no postcode requirement for delivery, so drop the field.
 * The locale data drives both the block and the classic checkout.
 *
 * @param array $locale Country locale settings.
 * @return array
 */
function freshgrid_bd_locale( $locale ) {
	$locale['BD']['postcode'] = array(
		'required' => false,
		'hidden'   => true,
	);
	return $locale;
}
add_filter( 'woocommerce_get_country_locale', 'freshgrid_bd_locale' );

/**
 * When an order qualifies for free shipping, don't also offer a paid rate.
 *
 * @param array $rates Available shipping rates.
 * @return array
 */
function freshgrid_prefer_free_shipping( $rates ) {
	$free = array_filter(
		$rates,
		static function ( $rate ) {
			return 'free_shipping' === $rate->method_id;
		}
	);
	return $free ? $free : $rates;
}
add_filter( 'woocommerce_package_rates', 'freshgrid_prefer_free_shipping' );

/**
 * Classic checkout fallback: guests may leave email blank. The block checkout
 * always requires an email, so this only applies if the page is ever swapped
 * to the [woocommerce_checkout] shortcode.
 *
 * @param array $fields Checkout fields.
 * @return array
 */
function freshgrid_classic_checkout_fields( $fields ) {
	if ( isset( $fields['billing']['billing_email'] ) && ! is_user_logged_in() ) {
		$fields['billing']['billing_email']['required'] = false;
	}
	return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'freshgrid_classic_checkout_fields' );

/**
 * Many hosts disable PHP's mail(). PHPMailer then throws an Error that wp_mail()
 * doesn't catch, which kills checkout after the order is created. Skip the send
 * and log it instead, unless WP Mail SMTP is set to a mailer that doesn't need mail().
 *
 * @param null|bool $short_circuit Existing short-circuit value.
 * @return null|bool
 */
function freshgrid_skip_mail_when_unavailable( $short_circuit ) {
	if ( null !== $short_circuit || function_exists( 'mail' ) ) {
		return $short_circuit;
	}
	if ( class_exists( 'WPMailSMTP\Options' ) && 'mail' !== WPMailSMTP\Options::init()->get( 'mail', 'mailer' ) ) {
		return $short_circuit;
	}
	error_log( 'FreshGrid: email not sent because mail() is disabled on this server. Configure SMTP in WP Mail SMTP.' ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions
	return false;
}
add_filter( 'pre_wp_mail', 'freshgrid_skip_mail_when_unavailable' );
