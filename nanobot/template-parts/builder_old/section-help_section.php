<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="home-section-three padding-wrap" data-parallax>
		<div class="home-section-three__body container-second">

			<?php if ($background): ?>
				<div class="home-section-three__decor-1">
					<div class="layer" data-depth="0.20">
						<?= wp_get_attachment_image($background['ID'], 'full') ?>
					</div>
				</div>
			<?php endif ?>
			
			<div class="home-section-three__inner">

				<?php if ($title): ?>
					<h2 class="home-section-three__title title-2 with-arrow title-default-space" data-set-width-variable>
						<?= $title ?>
					</h2>
				<?php endif ?>
				
				<?php if ($description): ?>
					<div class="home-section-three__text text-content"><?= $description ?></div>
				<?php endif ?>
				
				<?php if ($categories): ?>
					<div class="home-section-three__list grid-links" data-grid-links data-id="0">

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

			</div>
		</div>
	</section>

	<?php endif; ?>