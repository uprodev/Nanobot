<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="padding-wrap">
		<div class="container-second">

			<?php if ($title): ?>
				<h2 class="title-2 with-arrow mb-40 mb-md-100 w-md-50" data-set-width-variable><?= $title ?></h2>
			<?php endif ?>

			<?php if($cases): ?>

				<div class="carousel carousel--second" data-slider="carousel-second">
					<div class="carousel__slider swiper">
						<div class="swiper-wrapper">

							<?php foreach($cases as $post): 

								setup_postdata($post); ?>
								<div class="swiper-slide">
									<div class="mb-40">
										<div class="cases-card cases-card--sm">
											<div class="cases-card__img ibg">
												<a href="<?php the_permalink() ?>">
													<?php the_post_thumbnail('full') ?>
												</a>
											</div>
											<div class="cases-card__text-wrap">
												<div class="cases-card__title">
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

	<?php endif; ?>