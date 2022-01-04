<?php
/**
 * Plugin Class
 *
 * @package ENMA
 */

namespace ENMA;

/**
 * Plugin entry point
 */
class Plugin {

	/**
	 * Plugin's singleton instance
	 *
	 * @var object
	 */
	private static $instance;

	/**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct() {
		add_action( 'plugins_loaded', [ $this, 'init' ] );
	}

	/**
	 * Plugin Entry point based on Singleton
	 *
	 * @return Plugin $plugin Instance of the plugin abstraction.
	 */
	public static function init() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}
}

/*final class Hip_Nav_Addons_Elementor_Pro {

	public function init() {
		add_action( 'elementor/controls/controls_registered', [ $this, 'init_controls' ] );

	}

	public function init_controls() {
		require_once( __DIR__ . '/controls/nav-controls.php' );
        new Hip_Nav_Menu_Addons();
	}

}
