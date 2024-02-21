<?php 

//estimated reading time
function reading_time() {
	$content = get_post_field( 'post_content', $post->ID );
	$word_count = str_word_count( strip_tags( $content ) );

	$readingtime = ceil($word_count / 200);

	if ($readingtime == 1) {
		$timer = ' minute';
	} else {
		$timer = ' minutes';
	}
	
	$totalreadingtime = $readingtime . $timer;

	return $totalreadingtime;
}


if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
			<div class="container-third">
				<div class="default-gird">
					<div class="default-gird__main-column">
						<div class="text-content text-lg last">
                        <span class="reading-time"><?php echo _e('Reading time: ', 'Nanobot') . reading_time(); ?></span>
							<?php the_content() ?>
						</div>
						<div class="share">
							<div class="share__label"><?php _e('Share', 'Nanobot') ?>:</div>
							<ul class="social">
								<li>
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?= get_permalink(get_the_ID()) ?>">
										<svg width="18" height="36" viewBox="0 0 18 36" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.185 36V19.6054H16.2842L17.0422 13.1864H11.185V9.09777C11.185 7.24548 11.6608 5.97728 14.1118 5.97728H17.2174V0.254379C15.7063 0.0787329 14.1875 -0.00607699 12.6678 0.000338386C8.16056 0.000338386 5.066 2.98481 5.066 8.46367V13.1744H0V19.5934H5.07707V36H11.185Z" fill="white"/>
										</svg>
									</a>
								</li>
								<li>
									<a href="https://twitter.com/intent/tweet?url=<?= get_permalink(get_the_ID()) ?>">
										<svg width="42" height="36" viewBox="0 0 42 36" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M37.2169 8.97181C37.2443 9.3665 37.2443 9.75893 37.2443 10.1514C37.2443 22.1611 28.6899 36 13.0564 36C8.23993 36 3.76538 34.5092 0 31.9201C0.683847 32.0035 1.34237 32.0328 2.05365 32.0328C5.88022 32.0427 9.59843 30.6754 12.609 28.1514C10.8348 28.117 9.11495 27.4916 7.68956 26.3623C6.26416 25.233 5.20438 23.6562 4.65818 21.8521C5.18373 21.9356 5.71139 21.992 6.26437 21.992C7.02631 21.992 7.79248 21.8792 8.50376 21.683C6.57835 21.2676 4.84702 20.1524 3.60417 18.527C2.36131 16.9017 1.68364 14.8665 1.6864 12.7676V12.6548C2.81981 13.3292 4.13474 13.7509 5.52776 13.8073C4.36077 12.9786 3.40387 11.8542 2.74244 10.5343C2.081 9.21439 1.73561 7.74006 1.73706 6.24283C1.73706 4.55582 2.15707 3.00865 2.89369 1.65994C5.02994 4.46791 7.69434 6.76508 10.7143 8.40269C13.7343 10.0403 17.0425 10.9818 20.4246 11.1663C20.2938 10.4897 20.2136 9.78825 20.2136 9.08458C20.213 7.89141 20.4325 6.70982 20.8596 5.60736C21.2867 4.5049 21.9129 3.50319 22.7024 2.65949C23.492 1.81579 24.4294 1.14665 25.4611 0.690316C26.4929 0.233983 27.5986 -0.000591759 28.7152 1.12105e-06C31.1636 1.12105e-06 33.3734 1.0961 34.9268 2.86881C36.8302 2.47552 38.6554 1.73307 40.3216 0.674352C39.6872 2.77367 38.3582 4.5538 36.5837 5.68124C38.2718 5.47551 39.9215 5.00115 41.4783 4.2739C40.3156 6.08517 38.8748 7.6735 37.2169 8.97181Z" fill="white"/>
										</svg>
									</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= get_permalink(get_the_ID()) ?>">
										<svg width="34" height="37" viewBox="0 0 34 37" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M4.0172 8.668C6.23584 8.668 8.0344 6.7276 8.0344 4.334C8.0344 1.9404 6.23584 0 4.0172 0C1.79856 0 0 1.9404 0 4.334C0 6.7276 1.79856 8.668 4.0172 8.668Z" fill="white"/>
											<path d="M11.8276 12.9536V36.9986H18.7475V25.1078C18.7475 21.9702 19.2947 18.9317 22.9006 18.9317C26.4569 18.9317 26.501 22.5189 26.501 25.3059V37.0006H33.4246V23.8144C33.4246 17.3371 32.1321 12.3594 25.1148 12.3594C21.7457 12.3594 19.4874 14.354 18.5639 16.2418H18.4703V12.9536H11.8276ZM0.550781 12.9536H7.48174V36.9986H0.550781V12.9536Z" fill="white"/>
										</svg>
									</a>
								</li>
							</ul>
						</div>
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
	</div>

	<?php endif; ?>