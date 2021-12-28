<?php

namespace VisaoComputacional\Plugin\ACF;

if ( ! defined( 'ABSPATH' ) ) {
	die( 'not allowed' );
}

new JSON();

final class JSON {

	function __construct() {
		add_filter( 'acf/settings/save_json', array( __CLASS__, 'json_save' ), 50 );
        add_filter( 'acf/settings/load_json', array( __CLASS__, 'json_load' ) );
    }

	public static function json_save( $path ) {
		$path = Plugin::get_path() . 'acf-json';
		return $path;
	}

	public static function json_load( $paths ) {
		$paths[] = Plugin::get_path() . 'acf-json';

		return $paths;
	}

}
