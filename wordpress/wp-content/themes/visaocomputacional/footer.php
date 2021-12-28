		</main><!-- /#main -->
		<footer id="footer">
			<div class="vc-footer-info">
				<div class="container">
					<div class="row">
					<!-- 4 COLUMNS -->
					<div class="col-12 col-lg-3 vc-col-1">
						<?php
							$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

							if ( ! empty( $header_logo ) ) {
							?>
								<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
							<?php
							}
							else {
								echo esc_attr( get_bloginfo( 'name', 'display' ) );
							}

							if ( !( empty( get_field('ft_primeira_coluna', 'options') ) ) ) {
								print_r(get_field('ft_primeira_coluna', 'options'));
							}
						?>
					</div>
					<div class="col-12 col-lg-3 vc-col-2">
					<h4><?php echo __('Featured', 'visao-computacional') ?></h4>
						<?php
							if ( !( empty( get_field('ft_segunda_coluna', 'options') ) ) ) {
								
								foreach ( get_field('ft_segunda_coluna', 'options') as $recent ) {	
								?>
									<a href="<?php echo esc_url( get_post_permalink( $recent->ID ) ); ?>" class="sc-block">
										<span class="sc-title"><?php echo $recent->post_title ?></span>
										<span class="sc-date">
										<?php 
											echo __('Posted in', 'visao-computacional') . ' ' . date('d/m/Y', strtotime($recent->post_date )); 
										?>
										</span>
									</a>
									<?php
								}
							}
						?>
					</div>
					<div class="col-12 col-lg-3 vc-col-3">
						<?php
							if ( !( empty( get_field('ft_terceira_coluna', 'options') ) ) ) {
								?>
								<h4><?php echo __('Menu', 'visao-computacional') ?></h4>
								<?php
								if ( has_nav_menu( 'main-menu' ) ) {
									?>
									<div class="col-12 col-lg-7">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'main-menu',
												'depth'           => 2,
												'container'       => 'div'
												)
										);
										?>
									</div>
									<?php
								}
							}
						?>
					</div>
					<div class="col-12 col-lg-3 vc-col-4">
					<?php 
						if ( !( empty( get_field('ft_quarta_coluna', 'options') ) ) ) {
							?>
							<h4><?php echo __('Newsletter', 'visao-computacional') ?></h4>
							<?php
							echo do_shortcode(get_field('ft_quarta_coluna', 'options'));
						}
						?>
					</div>
					<!-- !4 COLUMNS -->
					</div>
				</div><!-- /.container -->
			</div>
			<div class="vc-footer-copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 vc-footer-copyright">
							<p><?php printf( esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'visao-computacional' ), date_i18n( 'Y' ), get_bloginfo( 'name', 'display' ) ); ?></p>
						</div>
					</div><!-- /.row -->
				</div>
			</div>
					
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
