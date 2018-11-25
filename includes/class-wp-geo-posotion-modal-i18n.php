<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://oshka.000webhostapp.com/
 * @since      1.0.0
 *
 * @package    Wp_Geo_Posotion_Modal
 * @subpackage Wp_Geo_Posotion_Modal/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Geo_Posotion_Modal
 * @subpackage Wp_Geo_Posotion_Modal/includes
 * @author     Olha Babchenko <olkace@gmail.com>
 */
class Wp_Geo_Posotion_Modal_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-geo-posotion-modal',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
