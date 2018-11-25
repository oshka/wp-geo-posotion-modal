<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://oshka.000webhostapp.com/
 * @since             1.0.0
 * @package           Wp_Geo_Position_Modal
 *
 * @wordpress-plugin
 * Plugin Name:       Geo Position Modal Information
 * Plugin URI:        https://oshka.000webhostapp.com/
 * Description:       This plugin shows information amout your position in modal on page load
 * Version:           1.0.0
 * Author:            Olha Babchenko
 * Author URI:        https://oshka.000webhostapp.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-geo-posotion-modal
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'Wp_Geo_Position_Modal_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-geo-posotion-modal-activator.php
 */
function activate_wp_geo_posotion_modal() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-geo-posotion-modal-activator.php';
	Wp_Geo_Posotion_Modal_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-geo-posotion-modal-deactivator.php
 */
function deactivate_wp_geo_posotion_modal() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-geo-posotion-modal-deactivator.php';
	Wp_Geo_Posotion_Modal_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_geo_posotion_modal' );
register_deactivation_hook( __FILE__, 'deactivate_wp_geo_posotion_modal' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-geo-posotion-modal.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_geo_posotion_modal() {

	$plugin = new Wp_Geo_Posotion_Modal();
	$plugin->run();

}
run_wp_geo_posotion_modal();
