<section class="padding-wrap">

	<?php if ($field = get_field('title_2', 'option')): ?>
		<div class="container-third">
			<h2 class="title-2 with-arrow mb-50 mb-md-120" data-set-width-variable><?= $field ?></h2>
		</div>
	<?php endif ?>
	
	<?php if( have_rows('awards_2', 'option') ): ?>

		<div class="container">
			<div class="carousel" data-slider="carousel">
				<div class="carousel__slider swiper">
					<div class="swiper-wrapper">

						<?php while( have_rows('awards_2', 'option') ): the_row(); ?>

							<div class="swiper-slide">
								<div class="award-card">

									<?php if ($field = get_sub_field('image')): ?>
										<div class="award-card__img-wrap">
											<div class="award-card__img-bg">
												<img src="<?php bloginfo('template_directory'); ?>/img/photo/awards-card-bg.png" alt="">
											</div>
											<div class="award-card__img">
												<?= wp_get_attachment_image($field['ID'], 'full') ?>
											</div>
										</div>
									<?php endif ?>

									<?php if ($field = get_sub_field('title')): ?>
										<div class="award-card__title"><?= $field ?></div>
									<?php endif ?>
									
									<?php if ($field = get_sub_field('subtitle')): ?>
										<div class="award-card__subtitle"><?= $field ?></div>
									<?php endif ?>
									
									<?php if ($field = get_sub_field('text')): ?>
										<div class="award-card__text"><?= $field ?></div>
									<?php endif ?>
									
								</div>
							</div>

						<?php endwhile; ?>

					</div>
				</div>
			</div>
		</div>

	<?php endif; ?>

</section>