<?php

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
