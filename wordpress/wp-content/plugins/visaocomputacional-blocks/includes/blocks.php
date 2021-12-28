<?php

namespace VisaoComputacional\Plugin\Blocks;

if ( ! defined( 'ABSPATH' ) ) {
	die( 'not allowed' );
}

new Blocks();

class Blocks {

	function __construct() {
		if ( ! function_exists( 'acf_register_block_type' ) ) {
			return;
		}

		add_filter( 'block_categories', array( __CLASS__, 'block_categories' ), 10, 2 );

		self::register_block(
			array(
				'name'           => 'vc-founder-block',
				'title'          => __( 'VisaoComputacional - Founder Block', 'visao-computacional' ),
				'icon'           => 'search',
				'keywords'       => array( 'search', 'banner' ),
				'enqueue_assets' => function () {
					if ( ! is_admin() ) {
						//wp_enqueue_script(  );
						//wp_enqueue_style(  );
					}
				}
			)
		);

		self::register_block(
			array(
				'name'           => 'vc-banner-three-cols',
				'title'          => __( 'VisaoComputacional - Banner and 3 Columns', 'visao-computacional' ),
				'icon'           => 'search',
				'keywords'       => array( 'search', 'banner' ),
				'enqueue_assets' => function () {
					if ( ! is_admin() ) {
						//wp_enqueue_script(  );
						//wp_enqueue_style(  );
					}
				}
			)
		);

		self::register_block(
			array(
				'name'           => 'vc-courses-theme-list',
				'title'          => __( 'VisaoComputacional - Courses List By Category', 'visao-computacional' ),
				'icon'           => 'search',
				'keywords'       => array( 'search', 'banner' ),
				'enqueue_assets' => function () {
					if ( ! is_admin() ) {
						//wp_enqueue_script(  );
						//wp_enqueue_style(  );
					}
				}
			)
		);

		self::register_block(
			array(
				'name'           => 'vc-courses-tag-list',
				'title'          => __( 'VisaoComputacional - Courses List By Tag', 'visao-computacional' ),
				'icon'           => 'search',
				'keywords'       => array( 'search', 'banner' ),
				'enqueue_assets' => function () {
					if ( ! is_admin() ) {
						//wp_enqueue_script(  );
						//wp_enqueue_style(  );
					}
				}
			)
		);

		self::register_block(
			array(
				'name'           => 'vc-home-banner',
				'title'          => __( 'VisaoComputacional - Banner Home', 'visao-computacional' ),
				'icon'           => 'search',
				'keywords'       => array( 'search', 'banner' ),
				'enqueue_assets' => function () {
					if ( ! is_admin() ) {
						//wp_enqueue_script(  );
						//wp_enqueue_style(  );
					}
				}
			)
		);

		self::register_block(
			array(
				'name'           => 'vc-courses-list',
				'title'          => __( 'VisaoComputacional - Courses List', 'visao-computacional' ),
				'icon'           => 'search',
				'keywords'       => array( 'search', 'banner' ),
				'enqueue_assets' => function () {
					if ( ! is_admin() ) {
						//wp_enqueue_script(  );
						//wp_enqueue_style(  );
					}
				}
			)
		);
	}

	static function block_categories( $categories, $post ) {
		return array_merge(
			$categories,
			array(
				array(
					'slug'  => 'visaocomputacional',
					'title' => __( 'Visão Computacional', '' ),
					'icon'  => 'wordpress',
				),
			)
		);
	}

	public static function register_block( $data ) {
		acf_register_block_type(
			array(
				'name'            => 'vc-block-' . $data['name'],
				'title'           => $data['title'],
				'render_callback' => array( __CLASS__, 'render' ),
				'description'     => isset( $data['description'] ) ? $data['description'] : '',
				'category'        => isset( $data['category'] ) ? $data['category'] : 'visaocomputacional',
				'mode'            => isset( $data['mode'] ) ? $data['mode'] : 'auto',
				'icon'            => isset( $data['icon'] ) ? $data['icon'] : '',
				'keywords'        => isset( $data['keywords'] ) ? array_merge( array( 'VisaoComputacional' ), $data['keywords'] ) : array( 'VisaoComputacional' ),
				'enqueue_assets'  => isset( $data['enqueue_assets'] ) ? $data['enqueue_assets'] : '',
			)
		);
	}
	

	public static function preview( $block ) {
		$template_path = self::locate_block_template( $block, true );

		if ( file_exists( $template_path ) ) {
			include $template_path;
		} else {
			echo $block['title'];
		}
	}

	public static function render( $block, $content = '', $is_preview = false, $post_id = 0 ) {
		if ( $is_preview ) {
			self::preview( $block );

			return;
		}

		$template_path = self::locate_block_template( $block );

		if ( file_exists( $template_path ) ) { ?>
			<div class="vc-block <?php echo isset( $block['className'] ) ? $block['className'] : ''; ?>">
				<?php include $template_path; ?>
			</div>
			<?php
		}
	}

	public static function name_from_block( $block_name ) {
		return str_ireplace( 'acf/vc-block-', '', $block_name );
	}

	public static function locate_block_template( $block, $is_preview = false ) {
		$template_name = self::name_from_block( $block['name'] );
		$template_path = self::get_block_template_path();

		if ( $is_preview ) {
			$template_path .= 'preview/';
		}

		$template_path .= $template_name . '.php';

		return $template_path;
	}

	public static function get_block_template_path() {
		return Plugin::get_path() . 'templates/';
	}
}
