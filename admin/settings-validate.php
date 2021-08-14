<?php // MyPlugin - Validate Settings



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// callback: validate options
function myplugin_callback_validate_options( $input ) {

	// custom url
	if ( isset( $input['image_url'] ) ) {

		$input['image_url'] = esc_url( $input['image_url'] );

	}

	return $input;

}
