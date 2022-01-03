<?php
/**
 * Plugin Name: Elementor Nav Menu Addon
 * Plugin URI:  https://github.com/elementor-nav-menu-addon
 * Description: A simple plugin to extend your Elementor Pro Nav Menu.
 * Version:     1.0.0
 * Author:      Chigozie Orunta
 * Author URI:  https://github.com/chigozieorunta
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: ENMA
 * Domain Path: /languages
 *
 * @package ENMA
 */

 if ( ! defined( 'ABSPATH' ) ) { exit; }

final class Hip_Nav_Addons_Elementor_Pro {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function __construct() {
		add_action( 'plugins_loaded', [ $this, 'init' ] );

	}

	public function init() {
		add_action( 'elementor/controls/controls_registered', [ $this, 'init_controls' ] );

	}

	public function init_controls() {
		require_once( __DIR__ . '/controls/nav-controls.php' );
        new Hip_Nav_Menu_Addons();
	}

}

Hip_Nav_Addons_Elementor_Pro::instance();
