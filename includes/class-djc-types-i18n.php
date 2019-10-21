<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://doedejaarsma.nl
 * @since      1.0.0
 *
 * @package    Djc_Types
 * @subpackage Djc_Types/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Djc_Types
 * @subpackage Djc_Types/includes
 * @author     Mitch Hijlkema <mitch@doedejaarsma.nl>
 */
class Djc_Types_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'djc-types',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
