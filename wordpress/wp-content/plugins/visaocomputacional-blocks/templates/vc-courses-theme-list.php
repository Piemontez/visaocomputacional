<?php

$amnt = (!(empty(get_field('vc_amount_elements')))) ? get_field('vc_amount_elements') : 3;

?>
<div class="vc-courses-theme-list">
    <h2>Assuntos</h2>
    <div class="row">
        <div class="container">
            <div class="vc-ctl-cat">
                <button type="button" class="btn btn-list-category" id="term-0">Todos</button>
                <?php
                $categories = get_categories();

                foreach ($categories as $category) {
                    $category = get_terms($category);

                    foreach ($category as $cat) {
                ?>
                        <button type="button" class="btn btn-list-category" id="term-<?php echo $cat->term_id ?>"><?php echo $cat->name ?></button>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="vc-ctl-list">
        <div id="list-term-<?php echo $category->term_id ?>" class="vc-list-category">
            <div class="row">
                <?php
                    $posts = get_posts(array(
                        'numberposts' => 10,
                        'category' => $cat->term_id,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'status' => 'published',
                    ));
                    foreach ($posts as $post) {
                ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="vc-post-wrapper">
                            <div class="post-thumb">
                                <a href="<?php echo get_permalink( $post->ID ) ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url( $post->ID ) ?>" class="img-responsive" alt="<?php echo $post->post_title; ?>">
                                </a>
                                </div>
                            <div class="post-info-wrapper">
                                <div class="post-title">
                                    <a href="<?php echo get_permalink( $post->ID ) ?>">
                                        <?php echo $post->post_title; ?>
                                    </a>
                                </div>
                                <div class="post-excerpt">
                                    <?php 
                                        echo wp_trim_words( get_the_excerpt( $post->ID ), 20, '...' );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php foreach ($categories as $category) { ?>
            <div id="list-term-<?php echo $category->term_id ?>" class="vc-list-category">
                <div class="row">
                    <?php
                    $category_terms = get_terms($category);

                    foreach ($category_terms as $cat) {
                        $posts = get_posts(array(
                            'numberposts' => 10,
                            'category' => $cat->term_id,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'status' => 'published',
                        ));

                        foreach ($posts as $post) {
                    ?>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="vc-post-wrapper">
                                    <div class="post-thumb">
                                        <a href="<?php echo get_permalink( $post->ID ) ?>">
                                            <img src="<?php echo get_the_post_thumbnail_url( $post->ID ) ?>" class="img-responsive" alt="<?php echo $post->post_title; ?>">
                                        </a>
                                        </div>
                                    <div class="post-info-wrapper">
                                        <div class="post-title">
                                            <a href="<?php echo get_permalink( $post->ID ) ?>">
                                                <?php echo $post->post_title; ?>
                                            </a>
                                        </div>
                                        <div class="post-excerpt">
                                            <?php 
                                                echo wp_trim_words( get_the_excerpt( $post->ID ), 20, '...' );
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <?php
        }
            ?>
    </div>
</div>