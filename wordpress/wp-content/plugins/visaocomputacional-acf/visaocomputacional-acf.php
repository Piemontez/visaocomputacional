<?php
/**
 * Plugin Name:     Visão Computacional Acf
 * Plugin URI:      https://www.visaocomputacional.com.br
 * Description:     Plugin que customiza campos do ACF e guarda em arquivos JSON
 * Author:          Visão Computacional
 * Author URI:      https://www.visaocomputacional.com.br
 * Text Domain:     visao-computacional-acf
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         VisaoComputacional_Acf
 */

namespace VisaoComputacional\Plugin\ACF;

if (!defined('ABSPATH')) {
	die('not allowed');
}

new Plugin();

final class Plugin
{
	public function __construct()
	{
		add_action('plugins_loaded', array($this, 'plugins_loaded'));

		add_action('acf/init', array($this, 'register_acf_options_pages'));
	}

	public function plugins_loaded()
	{
		require_once('includes/json.php');
	}

	public static function register_acf_options_pages()
	{
		// Check function exists.
		if (!function_exists('acf_add_options_page')) {
			return;
		}

		// register options page.
		$option_page = acf_add_options_page(
			array(
				'page_title' => __('Theme General Settings', ''),
				'menu_title' => __('Theme Settings', ''),
				'menu_slug' => 'theme-general-settings',
				'icon_url' => 'dashicons-admin-customizer',
				'capability' => 'edit_posts',
				'redirect' => false,
			)
		);

	}

	public static function get_url()
	{
		return plugin_dir_url(__FILE__);
	}

	public static function get_path()
	{
		return plugin_dir_path(__FILE__);
	}

}
