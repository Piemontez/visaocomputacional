<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package visao-computacional
 */

require_once('src/Menu/BootstrapNavwalker.php');

use VisaoComputacional\Theme\Menu;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'visao-computacional' ); ?></a>

<div id="wrapper">
<!-- 
	* Section previous to navbar
	-->
	<?php
	if ( get_field('bt_ativo', 'options') ) { ?>
		<div id="pre-header-nav">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-8">
						<?php
						if ( !( empty( get_field( 'bt_localizacao', 'options' ) ) ) ) { ?>
							<span class="pre-header-info">
								<?php 
									echo visao_computacional_get_svg('assets/icons/geo-alt.svg');
									echo get_field( 'bt_localizacao', 'options' );
								?>
							</span>
						<?php
						}

						if ( !( empty( get_field( 'bt_telefone', 'options' ) ) ) ) { ?>
							<span class="pre-header-info">
								<?php 
									echo visao_computacional_get_svg('assets/icons/telephone.svg');
									echo get_field( 'bt_telefone', 'options' );
								?>
							</span>
						<?php
						}
						?>
					</div>

					<div class="col-12 col-lg-4">
						<?php
						if ( !( empty( get_field( 'bt_redes_sociais', 'options' ) ) ) ) { ?>
							<div class="pre-header-social">
								<div class="phs-info">
									<span>Siga-nos:</span>

									<?php 
									foreach ( get_field( 'bt_redes_sociais', 'options' ) as $social ) { ?>
										<a href="<?php echo $social['bt_rede_social_url'] ?>" target="_blank" rel="noreferrer noopener">
											<?php echo visao_computacional_get_svg("assets/icons/".$social['bt_rede_social'].".svg"); ?>
										</a>
										<?php
									}
									?>
								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}
?>
	<!--
	*
-->

	
	<header>
		<nav id="header" class="navbar navbar-expand-lg <?php echo esc_attr( $navbar_scheme ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

						if ( ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'visao-computacional' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navbar" class="collapse navbar-collapse">
					<div class="row">
						<?php
							if ( has_nav_menu( 'main-menu' ) ) {
								?>
								<div class="col-12 col-lg-7">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'main-menu',
											'depth'           => 2,
											'container'       => 'div',
											'container_id'    => 'navbarSupportedContent',
											'menu_class'      => 'navbar-nav m-auto',
											'fallback_cb'     => 'Menu\BootstrapNavwalker::fallback',
											'walker'          => new Menu\BootstrapNavwalker(),
											)
									);
									?>
								</div>
								<?php
							}
							if ( '1' === $search_enabled ) :
							?>
							<div class="col-12 col-lg-5">
								<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<div class="input-group">
										<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'visao-computacional' ); ?>" title="<?php esc_attr_e( 'Search', 'visao-computacional' ); ?>" />
										<button type="submit" name="submit" aria-label="Submit" class="btn btn-outline-secondary"><?php echo visao_computacional_get_svg('assets/icons/search.svg'); ?></button>
									</div>
								</form>
							</div>
						<?php
							endif;
						?>
					</div>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>

	<main id="main" <?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>