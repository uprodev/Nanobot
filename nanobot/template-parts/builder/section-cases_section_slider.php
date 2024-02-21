<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
			<div class="container-second">

				<?php if ($title): ?>
					<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
					<?= add_class_paragraph($title, 'title-2 mb-40 mb-md-100 w-md-50' . $arrow_class, 1, true) ?>
				<?php endif ?>

				<?php if($cases): ?>

					<div class="carousel carousel--second" data-slider="carousel-second">
						<div class="carousel__slider swiper">
							<div class="swiper-wrapper">

								<?php foreach($cases as $post): 

									setup_postdata($post); ?>
									<div class="swiper-slide">
										<div>
											<div class="mb-40">
												<div class="cases-card cases-card--sm">
													<div class="cases-card__img ibg">
														<a href="<?php the_permalink() ?>">
															<?php the_post_thumbnail('full') ?>
														</a>
													</div>
													<div class="cases-card__text-wrap">
														<div class="cases-card__title" >
															<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
														</div>

														<?php if ($field = get_field('subtitle')): ?>
															<div class="cases-card__subtitle"><?= $field ?></div>
														<?php endif ?>

													</div>
												</div>
											</div>
											<a href="<?php the_permalink() ?>" class="link"><?php _e('Learn more', 'Nanobot') ?></a>
										</div>
									</div>
								<?php endforeach; ?>

								<?php wp_reset_postdata(); ?>

							</div>
						</div>
						<div class="carousel__shadow-left carousel__btn">
							<img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow-left.svg" alt="">
						</div>
						<div class="carousel__shadow-right carousel__btn">
							<img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow-right.svg" alt="">
						</div>
					</div>

				<?php endif; ?>

			</div>
		</section>
	</div>

	<?php endif; ?>