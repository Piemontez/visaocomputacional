<?php
/**
 * The template for displaying content in the single.php template.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-thumb">
		<div class="overlay-thumbnail">
			<img src="<?php echo the_post_thumbnail_url( get_the_ID(), 'large' ) ?>">
		</div>
		<div class="container">
			<div class="article-info">
				<div class="row">
					<div class="col-xs-12 col-lg-8">
						<span class="entry-category">
							<a href="<?php echo get_category_link(get_the_category(get_the_ID())[0]->term_id) ?>">
								<?php echo get_the_category(get_the_ID())[0]->name ?>
							</a>
						</span>		
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<span class="entry-excerpt"><?php echo get_the_excerpt(get_the_ID()) ?></span>

						<div class="entry-author">
							<?php echo get_avatar(get_the_author(get_the_ID())); ?>
							<div class="entry-author-info">
								<span>
									<?php 
									echo 'Por ';
									echo get_the_author_link(get_the_author(get_the_ID()));  
									?>
								</span>
								<small>
									<?php 'Publicado em ' . get_the_date('j, Y'); ?>
								</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 offset-lg-2 col-lg-8">
				<div class="container">
					<div class="entry-content">
						<?php

							the_content();

							wp_link_pages( array( 'before' => '<div class="page-link"><span>Páginas:</span>', 'after' => '</div>' ) );
						?>
					</div><!-- /.entry-content -->

					<footer class="entry-meta">
						<div class="post-tag-wrapper">
							<span>Tags:</span>
							<?php

								/* translators: used between list items, there is a space after the comma */
								$tag_list = get_the_tag_list( '', ' ' );

								print_r($tag_list);
							
							?>
						</div>
					</footer><!-- /.entry-meta -->
				</div>
			</div>
		</div>
	</div>
</article><!-- /#post-<?php the_ID(); ?> -->
