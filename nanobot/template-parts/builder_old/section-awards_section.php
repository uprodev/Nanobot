<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="home-section-five padding-wrap relative z-2" data-parallax>
		<div class="home-section-five__body container-second">

			<?php if ($background): ?>
				<div class="home-section-five__decor-1">
					<div class="layer">
						<?= wp_get_attachment_image($background['ID'], 'full') ?>
					</div>
				</div>
			<?php endif ?>
			
			<div class="home-section-five__inner">

				<?php if ($title): ?>
					<h2 class="home-section-five__title title-2 with-arrow title-default-space" data-set-width-variable>
						<?= $title ?>
					</h2>
				<?php endif ?>
				
				<?php if ($awards): ?>
					<div class="home-section-five__slider">
						<div class="awards" data-slider="awards">
							<div class="awards__slider swiper">
								<div class="swiper-wrapper">

									<?php foreach ($awards as $item): ?>
										<div class="swiper-slide">
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
										</div>
									<?php endforeach ?>
									
								</div>
							</div>
							<div class="awards__shadow-right"></div>
						</div>
					</div>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>