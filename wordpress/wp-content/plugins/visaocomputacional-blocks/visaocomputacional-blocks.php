<?php
/**
 * Plugin Name:     Visão Computacional Blocks
 * Plugin URI:
 * Description:
 * Author:          Visão Computacional
 * Author URI:      https://www.visaocomputacional.com.br/
 * Text Domain:     visaocomputacional-blocks
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         VisaoComputacionak_Blocks
 */

// Your code starts here.

namespace VisaoComputacional\Plugin\Blocks;

if ( ! defined( 'ABSPATH' ) ) {
	die( 'not allowed' );
}

new Plugin();

final class Plugin {
	public function __construct() {
		add_action('plugins_loaded', array($this, 'plugins_loaded') );

		add_shortcode('get_partners_block', array($this, 'get_partners_block') );
		add_shortcode('get_social_share_block', array($this, 'get_social_share_block') );
	}

	public function plugins_loaded() {
		require_once('includes/blocks.php');
	}

	public static function find_svg( $ico ) {
		$ico_path = Plugin::get_path() . 'assets/icons/' . $ico . '.svg';
		if ( file_exists( $ico_path ) ) {
			return $ico_path;
		}
	}

	public static function get_svg( $ico ) {
		$found_ico = self::find_svg( $ico );
		if ( ! empty( $found_ico ) ) {
			return file_get_contents( $found_ico );
		}
	}

	public static function get_url() {
		return plugin_dir_url( __FILE__ );
	}

	public static function get_path() {
		return plugin_dir_path( __FILE__ );
	}

}
