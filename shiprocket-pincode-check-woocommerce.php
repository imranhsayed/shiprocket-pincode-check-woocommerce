<?php
/**
 * Plugin Name: ShipRocket Pincode Checker Woocommerce
 * Plugin URI: http://imransayed.com/orion
 * Description: The plugin checks if the woocommerce product can be delivered to your location using pincode. It uses Shiprocket Api to achieve this.
 * Version: 1.0.0
 * Author: Imran Sayed, Smit Patadiya
 * Author URI: https://profiles.wordpress.org/gsayed786
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: shiprocket-pincode-check-woocommerce
 * Domain Path: /languages
 *
 * @package hipRocket Pincode Checker Woocommerce
 */

// Define Constants.
define( 'SPCW_TEXT_DOMAIN', 'shiprocket-pincode-check-woocommerce' );
define( 'SPCW_URI', plugins_url( 'shiprocket-pincode-check-woocommerce' ) );
define( 'SPCW_TEMPLATE_PATH', plugin_dir_path( __FILE__ ) . 'templates/' );
define( 'SPCW_PLUGIN_PATH', __FILE__ );
define( 'SPCW_JS_URI', plugins_url( 'shiprocket-pincode-check-woocommerce' ) . '/js/' );
define( 'SPCW_CSS_URI', plugins_url( 'shiprocket-pincode-check-woocommerce' ) . '/css/' );

// File Includes.

