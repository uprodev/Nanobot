<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
			<div class="container-second">

				<?php if ($title): ?>
					<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
					<?= add_class_paragraph($title, 'title-2 mb-50 mb-md-100' . $arrow_class, 1, true) ?>
				<?php endif ?>
				
				<?php if ($list): ?>
					<ul class="list-icon">

						<?php foreach ($list as $item): ?>
							<li>

								<?php if ($item['icon']): ?>
									<div class="list-icon__icon">
										<?= wp_get_attachment_image($item['icon']['ID'], 'full', false, array('class' => '')) ?>
									</div>
								<?php endif ?>

								<?php if ($item['text']): ?>
									<div class="list-icon__text text-content"><?= $item['text'] ?></div>
								<?php endif ?>
								
							</li>
						<?php endforeach ?>
						
					</ul>
				<?php endif ?>
				
			</div>
		</section>
	</div>

	<?php endif; ?>