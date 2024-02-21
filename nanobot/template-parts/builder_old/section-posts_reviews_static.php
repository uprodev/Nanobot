<section class="padding-wrap">
	<div class="container-third">
		<div class="default-gird">
			<div class="default-gird__main-column">

				<?php
				$featured_posts = get_field('posts_6', 'option');
				if($featured_posts): ?>

					<ul class="posts-list">

						<?php foreach($featured_posts as $post): 

							setup_postdata($post); ?>
							<li>
								<div class="post-card">
									<div class="post-card__img ibg">
										<a href="<?php the_permalink() ?>">
											<?php the_post_thumbnail('full') ?>
										</a>
									</div>
									<div class="post-card__body">
										<div class="post-card__col-1">
											<div class="post-card__date"><?= get_the_date('F j, Y') ?></div>
											<div class="post-card__title">
												<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
											</div>

											<?php if ($field = get_field('subtitle')): ?>
												<div class="post-card__subtitle"><?= $field ?></div>
											<?php endif ?>
											
										</div>
										<div class="post-card__col-2">

											<?php $tags = wp_get_object_terms(get_the_ID(), 'post_tag') ?>

											<?php if ($tags): ?>
												<div class="blog-card__tags tags">

													<?php foreach ($tags as $tag): ?>
														<a href="<?= get_term_link($tag->term_id) ?>"># <?= $tag->name ?></a>
													<?php endforeach ?>

												</div>
											<?php endif ?>

											<div class="post-card__text text-md"><?php the_excerpt() ?></div>
											<a href="<?php the_permalink() ?>" class="post-card__link text-md"><?php _e('Read more ...', 'Nanobot') ?></a>
										</div>
									</div>
								</div>
							</li>
						<?php endforeach; ?>

						<?php wp_reset_postdata(); ?>

					</ul>

				<?php endif; ?>

			</div>
			<div class="default-gird__side-column">
				<div class="testimonials-slider-card">
					<div class="testimonials-slider-card__head">

						<?php if( have_rows('reviews_6', 'option') ): ?>

							<div class="testimonials-slider-card__logo" data-slider="testimonials-slider-card-logo">
								<div class="swiper">
									<div class="swiper-wrapper">

										<?php while( have_rows('reviews_6', 'option') ): the_row(); ?>

											<?php if ($field = get_sub_field('logo')): ?>
												<div class="swiper-slide">
													<?= wp_get_attachment_image($field['ID'], 'full') ?>
												</div>
											<?php endif ?>
											
										<?php endwhile; ?>

									</div>
								</div>
							</div>

						<?php endif; ?>
						
						<?php if ($field = get_field('title_6', 'option')): ?>
							<div class="testimonials-slider-card__title"><?= $field ?></div>
						<?php endif ?>
						
						<div class="testimonials-slider-card__head-footer">
							<div class="testimonials-slider-card__rating">
								<div class="rating" data-rating="<?php the_field('rating_6', 'option') ?>">
									<div class="rating__stars rating__stars-1">
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
									</div>
									<div class="rating__stars rating__stars-2">
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="line"></div>

							<?php if ($field = get_field('link_6', 'option')): ?>
								<div class="testimonials-slider-card__reviews">
									<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
								</div>
							<?php endif ?>
						</div>
					</div>

					<?php if( have_rows('reviews_6', 'option') ): ?>

						<div class="testimonials-slider-card__slider" data-slider="testimonials-slider-card">
							<div class="swiper">
								<div class="swiper-wrapper">

									<?php while( have_rows('reviews_6', 'option') ): the_row(); ?>

										<div class="swiper-slide">

											<?php if ($field = get_sub_field('text')): ?>
												<div class="testimonials-slider-card__text"><?= $field ?></div>
											<?php endif ?>
											
											<?php if ($field = get_sub_field('author')): ?>
												<div class="testimonials-slider-card__author"><?= $field ?></div>
											<?php endif ?>
											
										</div>

									<?php endwhile; ?>

								</div>
							</div>
							<div class="testimonials-slider-card__btn prev">
								<i class="icon-triangle-left"></i>
							</div>
							<div class="testimonials-slider-card__btn next">
								<i class="icon-triangle-right"></i>
							</div>
						</div>

					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>