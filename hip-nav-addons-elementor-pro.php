<?php
/**
 * Plugin Name: HIP Nav Addons For Elementor Pro
 * Description: HIP Nav Addons For Elementor Pro. Adds extra navigation features
 * Plugin URI:  https://hip.agency/
 * Version:     1.0.0
 * Author:      Hip Creative
 * Author URI:  https://hip.agency/
 * Text Domain: hip
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
        require_once( __DIR__ . '/controls/hip-nav-menu-addons.php' );
        new Hip_Nav_Menu_Addons();
	}

}

Hip_Nav_Addons_Elementor_Pro::instance();