<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
			<div class="container-third pe-lg-7">

				<?php if ($title): ?>
					<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
					<?= add_class_paragraph($title, 'title-2 title-default-space w-md-75 d-md-none' . $arrow_class) ?>
				<?php endif ?>

				<ul class="cases-list">
					<li>
						<div class="cases-card cases-card--big">
							<div class="cases-card__video ibg">

								<?php if ($image): ?>
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								<?php endif ?>

								<?php if ($video): ?>
									<a href="<?= $video['url'] ?>" data-fancybox class="cases-card__video-icon">
										<img src="<?php bloginfo('template_directory'); ?>/img/icons/play.svg" alt="">
									</a>
								<?php endif ?>

							</div>
							<div class="cases-card__text-wrap">

								<?php if ($title): ?>
									<div class="cases-card__title d-none d-md-block"><?= $title ?></div>
								<?php endif ?>

								<?php if ($text): ?>
									<div class="cases-card__text text-content text"><?= $text ?></div>
								<?php endif ?>

							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
	</div>

	<?php endif; ?>