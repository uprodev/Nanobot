<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
			<div class="container-second">

				<?php if ($title): ?>
					<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
					<?= add_class_paragraph($title, 'title-lg with-errow-right with-line mb-50' . $arrow_class) ?>
				<?php endif ?>

				<div class="row gx-5">
					<div class="col-6 col-md-4 font-300 text-sm text-md-[2rem] text-content last mb-40 mb-md-80 order-md-1">

						<?php if ($position): ?>
							<div class="text-md mb-15 opacity-50"><?php _e('Position', 'Nanobot') ?></div>
							<p class="title-3"><?= $position ?></p>
						<?php endif ?>

					</div>
					<div class="col-6 col-md-8 font-300 text-sm text-md-[2rem] text-content last mb-40 mb-md-80 order-md-2">

						<?php if ($division): ?>
							<div class="text-md mb-15 opacity-50"><?php _e('Division', 'Nanobot') ?></div>
							<p class="title-3"><?= $division ?></p>
						<?php endif ?>
						
					</div>
					<div class="col-12 col-md-4 font-300 text-sm text-md-[2rem] text-content last order-1 order-md-3">
						<div class="text-center text-md-start">

							<?php if ($text_before_link): ?>
								<div class="text-md mb-15 mb-md-40 opacity-50"><?= $text_before_link ?></div>
							<?php endif ?>

							<?php if ($link): ?>
								<a href="<?= $link['url'] ?>" class="btn-default text-uppercase"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
							<?php endif ?>

						</div>
					</div>

					<?php if ($requirements): ?>
						<div class="col-12 col-md-8 font-300 text-sm text-md-[2rem] text-content mb-40 mb-md-0 order-md-4">
							<p class="title-3"><?php _e('Requirements', 'Nanobot') ?>:</p>
							<div class="row gx-5 mb-20 mb-md-40" data-hide-content data-button-text="<?php _e('All requirements, Hide requirements', 'Nanobot') ?>">

								<?php foreach ($requirements as $item): ?>
									<div class="col-12 col-md-6">

										<?php if ($item['text']): ?>
											<?= $item['text'] ?>
										<?php endif ?>

									</div>
								<?php endforeach ?>

							</div>
						</div>
					<?php endif ?>

				</div>
			</div>
		</section>
	</div>

	<?php endif; ?>