<?php

use VisaoComputacional\Plugin\Blocks;

$figure      = get_field( 'vc_founder_image' )['url'];
$name 		 = get_field( 'vc_founder_name' );
$description = get_field( 'vc_founder_description' );
$socials     = get_field( 'vc_founder_socials' );

?>
<div class="vc-founder-block">
	<div class="vc-founder-figure">
		<img class="img img-responsive" src="<?php echo $figure ?>" alt="<?php echo $name ?>">
	</div>
	<div class="vc-founder-info">
		<?php 
			if (!(empty($name))) { ?>
				<div class="vc-founder-info-name">
					<?php echo $name ?>
				</div>
			<?php
			}
			if (!(empty($description))) { ?>
				<div class="vc-founder-info-description">
					<?php echo $description ?>
				</div>
			<?php
			}
			if (!(empty($socials))) { ?>
				<div class="vc-founder-info-socials">
					<?php
					foreach($socials as $social) {
						echo '<a href="' . $social['vc_founder_social_link'] . '"> '. VisaoComputacional\Plugin\Blocks\Plugin::get_svg( $social['vc_founder_social'] ) . '</a>';
					}
					?>
				</div>
			<?php
			}
		?>
	</div>
</div>
