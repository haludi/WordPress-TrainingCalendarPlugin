<?php

function training_calendar_register_event_type() {
    $labels = array(
        'name' => __( 'Events', TRAINING_CALENDAR_DOMAIN ),
        'singular_name' => __( 'Event', TRAINING_CALENDAR_DOMAIN ),
        'archives' => __( 'Events Calendar', TRAINING_CALENDAR_DOMAIN ),
        'add_new' => __( 'Add New Event', TRAINING_CALENDAR_DOMAIN ),
        'add_new_item' => __( 'Add New Event', TRAINING_CALENDAR_DOMAIN ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => 'events',
        'rewrite' => array( 'has_front' => true ),
        'menu_icon' => 'dashicons-calendar',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        // 'show_in_rest' => true,
    );

    register_post_type( 'event', $args );
}
add_action( 'init', 'training_calendar_register_event_type' );

// Method 1: Filter.
function my_acf_google_map_api( $api ){
	$options = get_option( 'training_calendar_options' );
	$key = $options["google_api_key"];
    $api['key'] = $key;
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Method 2: Setting.
// function my_acf_init() {
// 	$options = get_option( 'training_calendar_options' );
// 	$key = $options["google_api_key"];
//     acf_update_setting('google_api_key', $key);
// }
// add_action('acf/init', 'my_acf_init');
