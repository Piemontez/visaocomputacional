<?php

use VisaoComputacional\Plugin\Blocks;

$figure      = get_field( 'vc_first_col' );
$description = get_field( 'vc_founder_description' );
$socials     = get_field( 'vc_founder_socials' );

?>
<div class="vc-banner-three-cols">
    <div class="container">
        <div class="row vc-btc-wrapper">
            <div class="col-12 col-md-4 vc-btc">
                <?php
                    if ( !( empty( get_field( 'vc_first_col_wrapper' )['vc_first_col_title'] ) ) ) { ?>
                        <h2 class="vc-btc-title">
                            <?php
                                if ( !( empty( get_field( 'vc_first_col_wrapper' )['vc_first_col_icon'] ) ) ) {
                                    echo VisaoComputacional\Plugin\Blocks\Plugin::get_svg( get_field( 'vc_first_col_wrapper' )['vc_first_col_icon'] );
                                }

                                echo get_field( 'vc_first_col_wrapper' )['vc_first_col_title']; 
                            ?>
                        </h2>
                        
                        <?php
                    }

                    if ( !( empty( get_field( 'vc_first_col_wrapper' )['vc_first_col_txt'] ) ) ) { ?>
                    <h2 class="vc-btc-txt">
                        <?php echo get_field( 'vc_first_col_wrapper' )['vc_first_col_txt']; ?>
                    </h2>
                        <?php
                    }
                ?>
            </div>
            <div class="col-12 col-md-4 vc-btc">
                <?php
                    if ( !( empty( get_field( 'vc_second_col_wrapper' )['vc_second_col_title'] ) ) ) { ?>
                        <h2 class="vc-btc-title">
                        <?php
                            if ( !( empty( get_field( 'vc_second_col_wrapper' )['vc_second_col_icon'] ) ) ) {
                                echo VisaoComputacional\Plugin\Blocks\Plugin::get_svg( get_field( 'vc_second_col_wrapper' )['vc_second_col_icon'] );
                            }

                            echo get_field( 'vc_second_col_wrapper' )['vc_second_col_title']; 
                        ?>
                        </h2>
                        
                        <?php
                    }

                    if ( !( empty( get_field( 'vc_second_col_wrapper' )['vc_second_col_txt'] ) ) ) { ?>
                    <h2 class="vc-btc-txt">
                        <?php echo get_field( 'vc_second_col_wrapper' )['vc_second_col_txt']; ?>
                    </h2>
                        <?php
                    }
                ?>
            </div>
            <div class="col-12 col-md-4 vc-btc">
                <?php
                    if ( !( empty( get_field( 'vc_third_col_wrapper' )['vc_third_col_title'] ) ) ) { ?>
                        <h2 class="vc-btc-title">
                        <?php
                            if ( !( empty( get_field( 'vc_third_col_wrapper' )['vc_third_col_icon'] ) ) ) {
                                echo VisaoComputacional\Plugin\Blocks\Plugin::get_svg( get_field( 'vc_third_col_wrapper' )['vc_third_col_icon'] );
                            }
                            
                            echo get_field( 'vc_third_col_wrapper' )['vc_third_col_title']; 
                        ?>
                        </h2>
                        
                        <?php
                    }

                    if ( !( empty( get_field( 'vc_third_col_wrapper' )['vc_third_col_txt'] ) ) ) { ?>
                    <h2 class="vc-btc-txt">
                        <?php echo get_field( 'vc_third_col_wrapper' )['vc_third_col_txt']; ?>
                    </h2>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
