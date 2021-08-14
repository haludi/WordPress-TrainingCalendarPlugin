<?php // Training Calendar - Core Functionality

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

function display_training_calendar() {

	/*

	wp_enqueue_style(
		string           $handle,
		string           $src = '',
		array            $deps = array(),
		string|bool|null $ver = false,
		string           $media = 'all'
	)
	wp_enqueue_script(
		string           $handle,
		string           $src = '',
		array            $deps = array(),
		string|bool|null $ver = false,
		bool             $in_footer = false
	)
	*/
	wp_enqueue_style( 'training-calendar', plugin_dir_url( dirname( __FILE__ ) ) . 'includes/css/styles.css', array(), null, 'screen' );
	wp_enqueue_script( 'training-calendar', plugin_dir_url( dirname( __FILE__ ) ) . 'includes/js/main.js', array(), null, false );
	ob_start();
	include(plugin_dir_path( __FILE__ ). "calendar.php");
	return ob_get_clean();
}

add_shortcode( 'training_calendar', 'display_training_calendar' );
