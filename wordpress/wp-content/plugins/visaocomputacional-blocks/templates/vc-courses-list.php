<?php

$args = array(
    'post_type'=> 'courses',
    'status'   => 'published',
    'order'    => 'ASC'
);              

$the_query = new WP_Query( $args );

?>
<div class="vc-courses-loop">
    <div class="row">
        <?php
            if($the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); 
                    ?>
                    <div class="col-12 col-md-6 vc-course-wrapper">
                        <div class="vc-course-thumb">
                            <?php 
                                echo get_the_post_thumbnail( get_the_id(), 'large' );
                            ?>
                        </div>
                        <div class="vc-course">
                            
                            <h3><?php echo the_title(); ?></h3>
                            <span><?php echo the_Excerpt(); ?></span>

                            <a href="<?php echo get_post_permalink() ?>" class="btn btn-yellow"><?php echo __('Read more', 'visao-computacional')?></a>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata(); 
            }
            else {
                $img_nocourses_1 = get_field('vc_nocourses_figure_1', 'options');
                $img_nocourses_2 = get_field('vc_nocourses_figure_2', 'options');
                $img_nocourses_3 = get_field('vc_nocourses_figure_3', 'options');

                ?>
                    <div class="col-12 offset-md-3 col-md-6">
                        <div class="vc-no-courses">
                            <span>
                                <?php
                                    echo __('No courses available at this moment.', 'visao-computacional');
                                ?>
                            </span>
                        </div>
                        <div class="row">
                            <?php
                            if (!(empty($img_nocourses_1))) {
                                ?>
                            <div class="col-4 no-courses-img">
                                <img src="<?php echo $img_nocourses_1['sizes']['medium'] ?>" alt="<?php echo $img_nocourses_1['title'] ?>"/>
                            </div>
                            <?php
                            }
                            
                            if (!(empty($img_nocourses_2))) {
                                ?>
                            <div class="col-4 no-courses-img">
                                <img src="<?php echo $img_nocourses_2['sizes']['medium'] ?>" alt="<?php echo $img_nocourses_2['title'] ?>"/>
                            </div>
                            <?php
                            }
                            
                            if (!(empty($img_nocourses_3))) {
                                ?>
                            <div class="col-4 no-courses-img">
                                <img src="<?php echo $img_nocourses_3['sizes']['medium'] ?>" alt="<?php echo $img_nocourses_3['title'] ?>"/>
                            </div>
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
