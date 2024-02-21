<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="home-section-three padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>" data-parallax>
			<div class="home-section-three__body container-second">
				<div class="<?= $location == 'Title left, content right' ? 'row gx-5' : 'home-section-three__inner' ?><?php if($location == 'Left') echo ' home-section-three__inner--left' ?>">

					<?php if ($location == 'Title left, content right'): ?>
						<div class="col-12 col-md-6">
						<?php endif ?>

						<?php if ($title): ?>
							<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
							<?= add_class_paragraph($title, 'home-section-three__title title-2 title-default-space' . $arrow_class, 1, true) ?>
						<?php endif ?>

						<?php if ($location == 'Title left, content right'): ?>
						</div>
					<?php endif ?>

					<?php if ($location == 'Title left, content right'): ?>
						<div class="col-12 col-md-6">
						<?php endif ?>

						<?php 
						switch ($font_size) {
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

						<?php if ($description): ?>
							<div class="home-section-three__text text-content last-md font-<?= $font_weight ?><?= ' ' . $size_class ?>"><?= $description ?></div>
						<?php endif ?>

						<?php if ($categories): ?>
							<div class="home-section-three__list grid-links<?php if($categories_direction == 'Vertical') echo ' grid-links--vertical' ?>" data-grid-links data-id="0">

								<?php foreach ($categories as $index => $item): ?>

									<?php if ($item['link']): ?>
										<div class="grid-links__item">
											<a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?><?= $index + 1 == count($categories) ? 'class="grid-links__last"' : '' ?>><?= $item['link']['title'] ?></a>
										</div>
									<?php endif ?>

								<?php endforeach ?>

							</div>
						<?php endif ?>

						<?php if ($link): ?>
							<a href="<?= $link['url'] ?>" class="link grid-links__btn" data-action="show-all-grid-links" data-id="0"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
						<?php endif ?>

						<?php if ($location == 'Title left, content right'): ?>
						</div>
					<?php endif ?>

				</div>
			</div>
		</section>
	</div>

	<?php endif; ?>