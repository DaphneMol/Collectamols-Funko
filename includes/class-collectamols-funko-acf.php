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
class Collectamols_Funko_ACF {

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function register_acf_funko() {
        acf_add_local_field_group( [
            'key' => 'group_funko',
            'title' => 'Funko information',
            'fields' => [
                [
                    'key' => 'item_number',
                    'label' => 'Item number',
                    'name' => 'item_number',
                    'type' => 'number',
                ]
            ],
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'funko',
                    ]
                ]
            ]
        ]);
	}
}