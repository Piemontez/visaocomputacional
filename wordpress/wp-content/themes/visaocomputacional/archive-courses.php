<?php
/**
 * The template for displaying the courses archive loop.
 */

if ( have_posts() ) {
?>
	<div class="row">
	<?php
		while ( have_posts() ) {
			the_post();

			get_template_part( 'content', 'index' );
		}
	?>
	</div>
	<div class="row">
		<div class="blog-pagination">
			<?php
			echo paginate_links(array(
				'prev_text' => __('Previous', 'visao-computacional'),
				'next_text' => __('Next', 'visao-computacional'),
			));
			?>
		</div>
	</div>
<?php
}

wp_reset_postdata();

