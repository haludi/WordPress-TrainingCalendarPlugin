<?php // MyPlugin - Register Settings



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



// register plugin settings
function myplugin_register_settings() {

	/*

	register_setting(
		string   $option_group,
		string   $option_name,
		callable $sanitize_callback
	);

	*/

	register_setting(
		'training_calendar_options',
		'training_calendar_options',
		'myplugin_callback_validate_options'
	);

	/*

	add_settings_section(
		string   $id,
		string   $title,
		callable $callback,
		string   $page
	);

	*/

	add_settings_section(
		'training_calendar_section',
		'Customize Login Page',
		'training_calendar_callback_section',
		'training_calendar'
	);

	/*

	add_settings_field(
    	string   $id,
		string   $title,
		callable $callback,
		string   $page,
		string   $section = 'default',
		array    $args = []
	);

	*/

	add_settings_field(
		'image_url',
		'Image URL',
		'training_calendar_callback_field_text',
		'training_calendar',
		'training_calendar_section',
		[ 'id' => 'image_url', 'label' => 'URL for training calendar background image' ]
	);

	add_settings_field(
		'google_api_key',
		'Google Api Key',
		'training_calendar_callback_field_password',
		'training_calendar',
		'training_calendar_section',
		[ 'id' => 'google_api_key', 'label' => 'Google Api Key for map functionality' ]
	);
}
add_action( 'admin_init', 'myplugin_register_settings' );


