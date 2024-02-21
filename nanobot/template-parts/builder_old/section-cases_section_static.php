<section class="padding-wrap">
	<div class="container-second">

		<?php if ($field = get_field('title_18', 'option')): ?>
			<h2 class="title-2 with-arrow mb-40 mb-md-100 w-md-50" data-set-width-variable><?= $field ?></h2>
		<?php endif ?>
		
		<?php
		$featured_posts = get_field('cases_18', 'option');
		if($featured_posts): ?>

			<div class="carousel carousel--second" data-slider="carousel-second">
				<div class="carousel__slider swiper">
					<div class="swiper-wrapper">

						<?php foreach($featured_posts as $post): 

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
				<div class="awards__shadow-right"></div>
			</div>

		<?php endif; ?>

	</div>
</section>