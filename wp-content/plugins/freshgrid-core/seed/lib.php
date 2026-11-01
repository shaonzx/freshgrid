<?php
/**
 * Shared helpers for the seed scripts. Every helper is idempotent.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

/**
 * Create or update a post, matched by post type and slug.
 *
 * @param string $post_type Post type.
 * @param string $slug      Post slug.
 * @param array  $args      Fields for wp_insert_post().
 * @return int Post ID.
 */
function freshgrid_seed_upsert_post( $post_type, $slug, array $args ) {
	$existing = get_posts(
		array(
			'post_type'        => $post_type,
			'name'             => $slug,
			'post_status'      => 'any',
			'numberposts'      => 1,
			'fields'           => 'ids',
			'suppress_filters' => true,
		)
	);

	$args = array_merge(
		array(
			'post_type'   => $post_type,
			'post_name'   => $slug,
			'post_status' => 'publish',
		),
		$args
	);

	// wp_insert_post() expects slashed data; block markup contains backslashes.
	$args = wp_slash( $args );

	if ( $existing ) {
		$args['ID'] = (int) $existing[0];
		$id         = wp_update_post( $args, true );
	} else {
		$id = wp_insert_post( $args, true );
	}

	if ( is_wp_error( $id ) ) {
		WP_CLI::error( "{$post_type}/{$slug}: " . $id->get_error_message() );
	}

	return (int) $id;
}

/**
 * Import an image once, keyed by a stable seed key stored in post meta.
 *
 * @param string $key   Stable key, e.g. "product-potato".
 * @param string $path  Absolute path of the image file.
 * @param string $title Attachment title and alt text.
 * @return int Attachment ID, 0 on failure.
 */
function freshgrid_seed_import_image( $key, $path, $title ) {
	$existing = get_posts(
		array(
			'post_type'   => 'attachment',
			'post_status' => 'inherit',
			'meta_key'    => '_freshgrid_seed_key',
			'meta_value'  => $key,
			'numberposts' => 1,
			'fields'      => 'ids',
		)
	);
	if ( $existing ) {
		return (int) $existing[0];
	}

	if ( ! file_exists( $path ) ) {
		WP_CLI::warning( "Missing image for {$key}: {$path}" );
		return 0;
	}

	require_once ABSPATH . 'wp-admin/includes/image.php';
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/media.php';

	// media_handle_sideload() moves the file, so hand it a temp copy.
	$tmp = wp_tempnam( basename( $path ) );
	copy( $path, $tmp );

	$id = media_handle_sideload(
		array(
			'name'     => basename( $path ),
			'tmp_name' => $tmp,
		),
		0,
		$title
	);

	if ( is_wp_error( $id ) ) {
		WP_CLI::warning( "{$key}: " . $id->get_error_message() );
		return 0;
	}

	update_post_meta( $id, '_freshgrid_seed_key', $key );
	update_post_meta( $id, '_wp_attachment_image_alt', $title );

	return (int) $id;
}
