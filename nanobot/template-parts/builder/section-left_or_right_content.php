<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($rows): ?>
		<div class="bg-decor" data-parallax>
			
			<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

			<?php foreach ($rows as $item): ?>

				<section class="padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
					<div class="container-second">
						<div class="row gx-5">
							<div class="col-12 col-md-6">

								<?php if ($item['column'] == 'Left' && $item['title']): ?>
									<?php $arrow_class = str_contains($item['title'], 'href=') ? ' with-arrow' : '' ?>
									<?= add_class_paragraph($item['title'], 'title-2 mb-40 mb-md-50' . $arrow_class, 1, true, $item['number']) ?>
								<?php endif ?>

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

								<?php if ($item['column_text'] == 'Left' || $item['column_image'] == 'Left'): ?>
									<div class="text-content last-md font-<?= $item['font_weight'] ?><?= ' ' . $size_class ?>">

										<?php if ($item['column_text'] == 'Left' && $item['text']): ?>
											<?= $item['text'] ?>
										<?php endif ?>

										<?php if ($item['column_image'] == 'Left' && $item['image']): ?>
											<figure>
												<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
											</figure>
										<?php endif ?>

									</div>
								<?php endif ?>
								
							</div>
							<div class="col-12 col-md-6">

								<?php if ($item['column'] == 'Right' && $item['title']): ?>
									<?php $arrow_class = str_contains($item['title'], 'href=') ? ' with-arrow' : '' ?>
									<?= add_class_paragraph($item['title'], 'title-2 mb-40 mb-md-50' . $arrow_class, 1, true, $item['number']) ?>
								<?php endif ?>

								<?php if ($item['column_text'] == 'Right' || $item['column_image'] == 'Right'): ?>
									<div class="text-content last-md font-<?= $item['font_weight'] ?><?= ' ' . $size_class ?>">

										<?php if ($item['column_text'] == 'Right' && $item['text']): ?>
											<?= $item['text'] ?>
										<?php endif ?>

										<?php if ($item['column_image'] == 'Right' && $item['image']): ?>
											<figure>
												<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
											</figure>
										<?php endif ?>

									</div>
								<?php endif ?>
								
							</div>
						</div>
					</div>
				</section>
			<?php endforeach ?>
			
		</div>
	<?php endif ?>

	<?php endif; ?>