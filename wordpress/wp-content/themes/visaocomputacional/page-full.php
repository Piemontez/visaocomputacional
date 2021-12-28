<?php
/**
 * Template Name: Page (Full width)
 * Description: Page template full width.
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

	the_content();

	wp_link_pages( array(
		'before' => '<div class="page-links">' . __( 'Pages:', 'visao-computacional' ),
		'after'  => '</div>',
	) );
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

get_footer();
