<?php
/**
 * Site identity, logo, site icon and Global Styles.
 * Run: php -d extension=gd C:/wp-cli/wp-cli.phar eval-file wp-content/plugins/freshgrid-core/seed/02-branding.php
 *
 * Re-running overwrites Global Styles with these values, including any changes
 * made in Appearance > Editor > Styles.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

require_once FRESHGRID_CORE_DIR . 'seed/lib.php';

update_option( 'blogname', 'Srijon FreshGrid™' );
update_option( 'blogdescription', 'Wholesale • Retail • Smart Commerce • Delivery Ecosystem' );

$freshgrid_png = FRESHGRID_CORE_DIR . 'assets/brand/png/';

$freshgrid_logo = freshgrid_seed_import_image( 'brand-logo', $freshgrid_png . 'logo-horizontal-light.png', 'Srijon FreshGrid logo' );
if ( $freshgrid_logo ) {
	update_option( 'site_logo', $freshgrid_logo );
	set_theme_mod( 'custom_logo', $freshgrid_logo );
}

$freshgrid_icon = freshgrid_seed_import_image( 'brand-icon', $freshgrid_png . 'icon-light.png', 'Srijon FreshGrid icon' );
if ( $freshgrid_icon ) {
	update_option( 'site_icon', $freshgrid_icon );
}

// Same slugs as the theme's palette, so every theme pattern and template follows the brand.
$freshgrid_palette = array(
	'primary'        => array( 'Primary', '#177A52' ),
	'secondary'      => array( 'Secondary', '#F59E0B' ),
	'terniary'       => array( 'Terniary', '#C2410C' ),
	'heading'        => array( 'Heading', '#1F2A25' ),
	'dark-shade'     => array( 'Dark Shade', '#2B332F' ),
	'light'          => array( 'Light Color', '#F4F8F5' ),
	'background'     => array( 'Background', '#FFFFFF' ),
	'background-alt' => array( 'Background Alternate', '#14201A' ),
	'foreground'     => array( 'Foreground', '#56635C' ),
	'meta-color'     => array( 'Meta Color', '#47524C' ),
	'border-color'   => array( 'Border Color', '#1F2A251A' ),
	'transparent'    => array( 'Transparent', '#ffffff00' ),
);

$freshgrid_theme_palette = array();
foreach ( $freshgrid_palette as $freshgrid_slug => list( $freshgrid_name, $freshgrid_color ) ) {
	$freshgrid_theme_palette[] = array(
		'slug'  => $freshgrid_slug,
		'name'  => $freshgrid_name,
		'color' => $freshgrid_color,
	);
}

$freshgrid_styles = array(
	'version'                     => 3,
	'isGlobalStylesUserThemeJSON' => true,
	'settings'                    => array(
		'color' => array(
			'palette' => array( 'theme' => $freshgrid_theme_palette ),
		),
	),
	'styles'                      => array(
		'elements' => array(
			'link'    => array(
				':hover' => array(
					'color' => array( 'text' => 'var(--wp--preset--color--heading)' ),
				),
			),
			'button'  => array(
				':hover' => array(
					'color' => array(
						'background' => 'var(--wp--preset--color--heading)',
						'text'       => 'var(--wp--preset--color--background)',
					),
				),
			),
			'heading' => array(
				'typography' => array(
					'fontFamily' => 'var(--wp--preset--font-family--sora)',
					'lineHeight' => '1.25',
				),
			),
			'h1'      => array(
				'typography' => array( 'lineHeight' => '1.2' ),
			),
			'h2'      => array(
				'typography' => array( 'lineHeight' => '1.25' ),
			),
		),
	),
);

$freshgrid_user_data = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( wp_get_theme(), true );

$freshgrid_result = wp_update_post(
	array(
		'ID'           => $freshgrid_user_data['ID'],
		'post_content' => wp_slash( wp_json_encode( $freshgrid_styles ) ),
	),
	true
);
if ( is_wp_error( $freshgrid_result ) ) {
	WP_CLI::error( $freshgrid_result->get_error_message() );
}

WP_Theme_JSON_Resolver::clean_cached_data();

WP_CLI::success( "Branding applied. Logo {$freshgrid_logo}, icon {$freshgrid_icon}, global styles {$freshgrid_user_data['ID']}." );
