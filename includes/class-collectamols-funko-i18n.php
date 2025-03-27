<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://lilacdaphne.nl
 * @since      1.0.0
 *
 * @package    Collectamols_Funko
 * @subpackage Collectamols_Funko/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Collectamols_Funko
 * @subpackage Collectamols_Funko/includes
 * @author     Daphne Mol <plugins@lilacdaphne.nl>
 */
class Collectamols_Funko_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'collectamols-funko',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
