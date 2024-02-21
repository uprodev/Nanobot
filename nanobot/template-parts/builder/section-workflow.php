<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($list): ?>
		<div class="bg-decor" data-parallax>

			<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

			<div class="padding-wrap <?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>" >
				<div class="list-gallery" data-tabs>
					<div class="list-gallery__col-1 container-second">

						<?php if ($title): ?>
							<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
							<?= add_class_paragraph($title, 'title-2 mb-40 mb-md-80' . $arrow_class, 1, true) ?>
						<?php endif ?>

						<ul class="list-gallery__nav list-step-line">

							<?php foreach ($list as $index => $item): ?>
								<li data-tab-trigger="<?= $index ?>">
									<div class="list-step-line__dot"></div>
									
									<?php 
									switch ($item['font_size']) {
										case 'Large':
										$size_class = 'text-[3rem]';
										break;
										case 'Medium':
										$size_class = 'text-[2.4rem]';
										break;
										case 'Small':
										$size_class = 'text-[1.8rem]';
										break;

										default:
										$size_class = 'text-[3rem]-uppercase';
										break;
									}
									?>

									<div class="list-step-line__text text-content last-md font-<?= $item['font_weight'] ?><?= ' ' . $size_class ?>"><?= $item['text'] ?></div>
								</li>
							<?php endforeach ?>
							
						</ul>
					</div>
					<div class="list-gallery__col-2">

						<?php foreach ($list as $index => $item): ?>
							<div class="list-gallery__img" data-tab-content="<?= $index ?>">
								<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
							</div>
						<?php endforeach ?>

					</div>
				</div>
			</div>
		</div>
	<?php endif ?>
	
	<?php endif; ?>