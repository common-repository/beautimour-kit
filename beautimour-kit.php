<?php
/**
 * Plugin Name:  Beautimour Kit
 * Plugin URI:   https://github.com/beautimour/beautimour-kit
 * Description:  Adds extra features to All Beautimour WordPress themes.
 * Version:      1.0.2
 * Author:       Beautimour
 * Author URI:   https://beautimour.com/
 * Author Email: beautimour@gmail.com
 * Text Domain:  beautimour-kit
 * Domain Path:  /languages
 * License:      GPL 2.0
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'Beautimour_Kit' ) ) {

	class Beautimour_Kit {

		/**
		 * PHP5 constructor method.
		 */
		public function __construct() {

			// Set the constants needed by the plugin.
			add_action( 'plugins_loaded', array( &$this, 'constants' ), 1 );

			// Internationalize the text strings used.
			add_action( 'plugins_loaded', array( &$this, 'i18n' ), 2 );

			// Load the admin files.
			add_action( 'plugins_loaded', array( &$this, 'admin' ), 3 );

			// Load the functions files.
			add_action( 'plugins_loaded', array( &$this, 'includes' ), 4 );

			// Enqueue the front-end styles and scripts.
			add_action( 'wp_enqueue_scripts', array( &$this, 'plugin_assets' ), 99 );

		}

		/**
		 * Defines constants used by the plugin.
		 */
		public function constants() {

			// Set constant path to the plugin directory.
			define( 'BK_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

			// Set the constant path to the plugin directory URI.
			define( 'BK_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );

			// Set the constant path to the admin directory.
			define( 'BK_ADMIN', BK_DIR . trailingslashit( 'admin' ) );

			// Set the constant path to the inc directory.
			define( 'BK_INCLUDES', BK_DIR . trailingslashit( 'inc' ) );

			// Set the constant path to the assets directory.
			define( 'BK_ASSETS', BK_URI . trailingslashit( 'assets' ) );

		}

		/**
		 * Loads the translation files.
		 */
		public function i18n() {
			load_plugin_textdomain( 'beautimour-kit', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
		}

		/**
		 * Loads the initial files for the admin area.
		 */
		public function admin() {
			require_once( BK_ADMIN . 'customizer.php' );
			require_once( BK_ADMIN . 'sanitize.php' );
		}

		/**
		 * Loads the initial files needed by the plugin.
		 */
		public function includes() {
			require_once( BK_INCLUDES . 'author-profile-social.php' );
			require_once( BK_INCLUDES . 'cookie.php' );
			require_once( BK_INCLUDES . 'sticky-sidebar.php' );
			require_once( BK_INCLUDES . 'pinterest.php' );
			require_once( BK_INCLUDES . 'signature.php' );

			// Themes spesific function
			require_once( BK_INCLUDES . 'themes/velove-social-share.php' );
		}

		/**
		 * Enqueue front-end styles and scripts.
		 */
		public function plugin_assets() {
			wp_enqueue_style( 'beautimour-kit-css', BK_ASSETS . 'css/beautimour.css' );
			wp_enqueue_script( 'beautimour-kit-js', BK_ASSETS . 'js/beautimour.min.js', array( 'jquery' ), null, true );
			wp_enqueue_script( 'beautimour-kit-custom-js', BK_ASSETS . 'js/beautimour-custom.js', array( 'jquery' ), null, true );
		}

	}

}

new Beautimour_Kit;
