<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://yatryan.com
 * @since             1.0.0
 * @package           smartcrop
 *
 * @wordpress-plugin
 * Plugin Name:       SmartCrop.js Wordpress Plugin
 * Plugin URI:        http://yatryan.com/plugins/smartcrop
 * Description:       Smartcrop.js implements an algorithm to find good crops for images.
 * Version:           1.0.0
 * Author:            Taylor Ryan
 * Author URI:        http://yatryan.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       smartcrop
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-smartcrop-activator.php
 */
function activate_smartcrop() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smartcrop-activator.php';
	smartcrop_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-smartcrop-deactivator.php
 */
function deactivate_smartcrop() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smartcrop-deactivator.php';
	smartcrop_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_smartcrop' );
register_deactivation_hook( __FILE__, 'deactivate_smartcrop' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-smartcrop.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_smartcrop() {

	$plugin = new smartcrop();
	$plugin->run();

}
run_smartcrop();
