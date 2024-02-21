<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>

		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">

			<?php if ($title): ?>
				<div class="container-second">
					<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
					<?= add_class_paragraph($title, 'title-2 mb-50 mb-md-120' . $arrow_class, 1, true) ?>
				</div>
			<?php endif ?>

			<?php if ($awards): ?>
				<div class="container-second">
					<div class="awards">
						<ul class="awards__list">

							<?php foreach ($awards as $item): ?>
								<li>
									<div class="award-card">
										<div class="award-card__img-wrap">
											<div class="award-card__img-bg">
												<img src="<?php bloginfo('template_directory'); ?>/img/photo/awards-card-bg.png" alt="">
											</div>
											
											<?php if ($item['image']): ?>
												<div class="award-card__img">
													<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
												</div>
											<?php endif ?>
											
										</div>
										
										<?php if ($item['title']): ?>
											<div class="award-card__title"><?= $item['title'] ?></div>
										<?php endif ?>
										
										
										<?php if ($item['subtitle']): ?>
											<div class="award-card__subtitle"><?= $item['subtitle'] ?></div>
										<?php endif ?>
										
										
										<?php if ($item['text']): ?>
											<div class="award-card__text"><?= $item['text'] ?></div>
										<?php endif ?>
										
									</div>
								</li>
							<?php endforeach ?>
							
						</ul>
					</div>
				</div>
			<?php endif ?>

		</section>
	</div>

	<?php endif; ?>