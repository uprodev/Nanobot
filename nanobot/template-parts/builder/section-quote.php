<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($text): ?>
		<div class="bg-decor" data-parallax>
			
			<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

			<section class="padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
				<div class="container-second">
					<div class="quote"><?= $text ?></div>
				</div>
			</section>
		</div>
	<?php endif ?>

	<?php endif; ?>