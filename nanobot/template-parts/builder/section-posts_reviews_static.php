<section class="padding-wrap">
	<div class="container-third">
		<div class="default-gird">
			<div class="default-gird__main-column">
				<ul class="posts-list">

					<?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = ['post_type' => 'post', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 5, 'paged' => $paged];
                    $wp_query = new WP_Query($args);
					while ($wp_query->have_posts()): $wp_query->the_post(); ?>

						<?php get_template_part('parts/content', 'post') ?>

					<?php endwhile; ?>
					<?php //wp_reset_postdata(); ?>

				</ul>

				<?php if ( $wp_query->max_num_pages > 1 ) { ?>

					<script> var this_page = <?= $paged ?>; </script>


                    <div class="blog-bottom">
                        <?php if ($paged < $wp_query->max_num_pages ) { ?>
                            <div class="blog-bottom__row-1">
                                <a href="#" class="more_posts2 link"  data-base="/blog/page/"   data-current="<?= $paged+1 ?>"  data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>'>Load more articles</a>
                            </div>
                        <?php } ?>
                        <div class="blog-bottom__row-2 pagination-wrap">

                            <?php  my_pagenavi($paged, $wp_query->max_num_pages, '/blog/page/'); ?>



                        </div>
                    </div>


				<?php } ?>

			</div>
			<div class="default-gird__side-column">
				<div data-sticky-box>
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
	</div>
</section>
