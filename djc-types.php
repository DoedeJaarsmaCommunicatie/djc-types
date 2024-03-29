<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://doedejaarsma.nl
 * @since             1.0.0
 * @package           Djc_Types
 *
 * @wordpress-plugin
 * Plugin Name:       Types
 * Plugin URI:        https://doedejaarsma.nl/
 * Description:       This plugin adds custom post types for the custom DJC theme.
 * Version:           1.0.0
 * Author:            Mitch Hijlkema
 * Author URI:        https://doedejaarsma.nl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       djc-types
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
define( 'DJC_TYPES_VERSION', '1.0.0' );

define('DJC_TYPES_FILE', __FILE__);

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-djc-types-activator.php
 */
function activate_djc_types() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-djc-types-activator.php';
	Djc_Types_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-djc-types-deactivator.php
 */
function deactivate_djc_types() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-djc-types-deactivator.php';
	Djc_Types_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_djc_types' );
register_deactivation_hook( __FILE__, 'deactivate_djc_types' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-djc-types.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_djc_types() {
    require_once plugin_dir_path( __FILE__) . 'vendor/autoload.php';
    
	$plugin = new Djc_Types();
	$plugin->run();

}
run_djc_types();
