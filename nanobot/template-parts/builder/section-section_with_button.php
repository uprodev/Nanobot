<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($link): ?>
		<div class="bg-decor" data-parallax>

			<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

			<?php 

			switch ($desktop_location) {
				case 'Left':
					$button_desktop_location = 'start';
					break;
				case 'Right':
					$button_desktop_location = 'end';
					break;
				case 'Center':
					$button_desktop_location = 'center';
					break;
				
				default:
					// code...
					break;
			}


			switch ($mobile_location) {
				case 'Left':
					$button_mobile_location = 'start';
					break;
				case 'Right':
					$button_mobile_location = 'end';
					break;
				case 'Center':
					$button_mobile_location = 'center';
					break;
				
				default:
					// code...
					break;
			}

			?>

			<section class="padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
				<div class="container-second">
					<div class="button-wrap<?php if($desktop_margin_top > 0) echo ' mt-md-' . $desktop_margin_top; if($desktop_margin_bottom > 0) echo ' mb-md-' . $desktop_margin_bottom; if($mobile_margin_top > 0) echo ' mt-' . $mobile_margin_top; if($mobile_margin_bottom > 0) echo ' mb-' . $mobile_margin_bottom; ?> text-md-<?= $button_desktop_location ?> text-<?= $button_mobile_location ?>">
						<a href="<?= $link['url'] ?>" class="btn-default"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
					</div>
				</div>
			</section>
		</div>
	<?php endif ?>
	
	<?php endif; ?>