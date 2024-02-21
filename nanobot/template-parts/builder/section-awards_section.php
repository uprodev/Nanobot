<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="home-section-five padding-wrap relative z-2<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>" data-parallax>
			<div class="home-section-five__body container-second">
				<div class="home-section-five__inner">

					<?php if ($title): ?>
						<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
						<?= add_class_paragraph($title, 'home-section-five__title title-2 title-default-space' . $arrow_class, 1, true) ?>
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
								<div class="awards__shadow-left carousel__btn">
									<img src="<?= get_stylesheet_directory_uri() ?>/img/icons/circle-left.svg" alt="">
								</div>
								<div class="awards__shadow-right carousel__btn">
									<img src="<?= get_stylesheet_directory_uri() ?>/img/icons/circle-right.svg" alt="">
								</div>
							</div>
						</div>
					<?php endif ?>
					
				</div>
			</div>
		</section>
	</div>

	<?php endif; ?>