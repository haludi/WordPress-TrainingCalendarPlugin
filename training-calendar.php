<?php
/*
Plugin Name: Training Calendar Plugin
Description: .
Author:      Haludi
Version:     1.0
License:     GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.txt

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// if admin area
if ( is_admin() ) {

	// include dependencies
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';
}

// include plugin dependencies: admin and public
require_once plugin_dir_path( __FILE__ ) . 'includes/core-functions.php';


// default plugin options
function training_calendar_options_default() {

	return array(
		'image_url'     => '',
	);

}
