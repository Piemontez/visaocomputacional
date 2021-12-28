<?php
/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();

the_post();
?>
<div id="post-<?php the_ID(); ?>">

	<?php
	if ( !( is_home() ) && ! (is_front_page() )) {
		?>
		<div class="vc-page-title">
			<div class="container">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</div>
		</div>
		<?php
	}
	?>
	<div class="container">
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'visao-computacional' ),
					'after'  => '</div>',
				)
			);
		?>
	</div>
	<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	?>
</div>
<?php
get_footer();
