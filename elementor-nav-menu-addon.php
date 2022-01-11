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

// Support for site-level autoloading.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

// Initialize plugin loading
\ENMA\Plugin::init();
