<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($title || $text_left || $text_right || $list_services): ?>
		<div class="bg-decor" data-parallax>
			<div class="bg-decor__inner">

				<?php if ($background_1['image']): ?>
					<div class="bg-decor__cloth<?= $background_1['vertical'] == 'center' ? ' center-y' : ' ' . $background_1['vertical'] . '-' . $background_1['number_vertical'] ?><?= $background_1['horizontal'] == 'center' ? ' center-x' : ' ' . $background_1['horizontal'] . '-' . $background_1['number_horizontal'] ?> size-<?= $background_1['size'] ?><?php if($background_1['is_blur']) echo ' blur' ?>">
						<div class="layer">
							<?= wp_get_attachment_image($background_1['image']['ID'], 'full') ?>
						</div>
					</div>
				<?php endif ?>

				<?php if ($background_2['image']): ?>
					<div class="bg-decor__bubble-<?= $background_2['light_or_dark'] ?><?= $background_2['vertical'] == 'center' ? ' center-y' : ' ' . $background_2['vertical'] . '-' . $background_2['number_vertical'] ?><?= $background_2['horizontal'] == 'center' ? ' center-x' : ' ' . $background_2['horizontal'] . '-' . $background_2['number_horizontal'] ?> size-<?= $background_2['size'] ?><?php if($background_2['is_blur']) echo ' blur' ?>">
						<div class="layer" data-depth="<?= $background_2['light_or_dark'] == 'light' ? '0.30' : '0.20' ?>"<?php if($background_2['light_or_dark'] == 'light') echo ' data-speed="4"' ?>>
							<?= wp_get_attachment_image($background_2['image']['ID'], 'full') ?>
						</div>
					</div>
				<?php endif ?>

				<?php if ($background_3['image']): ?>
					<div class="bg-decor__bubble-<?= $background_3['light_or_dark'] ?><?= $background_3['vertical'] == 'center' ? ' center-y' : ' ' . $background_3['vertical'] . '-' . $background_3['number_vertical'] ?><?= $background_3['horizontal'] == 'center' ? ' center-x' : ' ' . $background_3['horizontal'] . '-' . $background_3['number_horizontal'] ?> size-<?= $background_3['size'] ?><?php if($background_3['is_blur']) echo ' blur' ?>">
						<div class="layer" data-depth="<?= $background_3['light_or_dark'] == 'light' ? '0.30' : '0.20' ?>"<?php if($background_3['light_or_dark'] == 'light') echo ' data-speed="4"' ?>>
							<?= wp_get_attachment_image($background_3['image']['ID'], 'full') ?>
						</div>
					</div>
				<?php endif ?>

			</div>
			<section class="home-section-one padding-wrap pt-0" data-parallax>
				<div class="home-section-one__body container-second">
					<div class="home-section-one__inner">

						<?php if ($title): ?>
							<h2 class="home-section-one__title title-2 title-default-space with-arrow" data-set-width-variable>
								<?= $title ?>
							</h2>
						<?php endif ?>

						<?php if ($text_left || $text_right): ?>
							<div class="home-section-one__row-1">
								<div class="home-section-one__text" data-animation-hover-text>
									<div class="home-section-one__text-col">

										<?php if ($text_left): ?>
											<?= $text_left ?>
										<?php endif ?>

									</div>
									<div class="home-section-one__text-col">

										<?php if ($text_right): ?>
											<?= $text_right ?>
										<?php endif ?>

									</div>
								</div>
							</div>
						<?php endif ?>
						
						<?php if ($list_services || $link): ?>
							<div class="home-section-one__row-2">
								<div class="post-preview" data-post-preview>
									<div class="post-preview__desk" data-tabs>
										<div class="post-preview__col">

											<?php if ($list_services): ?>
												<div class="post-preview__tabs-nav">

													<?php foreach ($list_services as $index => $term): ?>
														<div class="post-preview__tabs-nav-item<?php if($index == 0) echo ' tab-active' ?>" data-tab-trigger="<?= $index ?>">
															<div class="post-preview__tabs-nav-item-text"><?= $term->name ?></div>
														</div>
													<?php endforeach ?>

												</div>
											<?php endif ?>

											<?php if ($link): ?>
												<a href="<?= $link['url'] ?>" class="link"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
											<?php endif ?>

										</div>

										<div class="post-preview__col">

											<?php if ($list_services): ?>

												<?php foreach ($list_services as $index => $term): ?>
													<div class="post-preview__content" data-tab-content="<?= $index ?>">

														<?php $wp_query = new WP_Query(array('post_type' => 'services', 'tax_query' => array(array('taxonomy' => 'categories_services', 'field' => 'id', 'terms' => $term->term_id)), 'paged' => get_query_var('paged')));
														if($wp_query->have_posts()): ?>

															<ul class="post-preview__list">

																<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>

																	<li>
																		<a href="<?= get_field('link')['url'] ?: get_the_permalink() ?>" class="post-preview-card">
																			<div class="post-preview-card__img ibg">
																				<?php the_post_thumbnail('full') ?>
																			</div>
																			<div class="post-preview-card__title" data-set-width-variable><?= get_field('link')['title'] ?: get_the_title() ?></div>
																		</a>
																	</li>

																<?php endwhile ?>

															</ul>

														<?php endif ?>
														<?php wp_reset_query() ?>

													</div>
												<?php endforeach ?>

											<?php endif ?>

										</div>
									</div>
									<div class="post-preview__mob" data-spoller="one">

										<?php if ($list_services): ?>

											<?php foreach ($list_services as $index => $term): ?>

												<div class="post-preview__mob-item">
													<h3 class="post-preview__mob-item-title title-3<?php if($index == 0) echo ' active' ?>" data-spoller-trigger><?= $term->name ?></h3>
													<div class="post-preview__mob-item-content">

														<?php $wp_query = new WP_Query(array('post_type' => 'services', 'tax_query' => array(array('taxonomy' => 'categories_services', 'field' => 'id', 'terms' => $term->term_id)), 'paged' => get_query_var('paged')));
														if($wp_query->have_posts()): ?>

															<ul class="post-preview__list">

																<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>

																	<li>
																		<a href="<?php the_permalink(); ?>" class="post-preview-card">
																			<div class="post-preview-card__img ibg">
																				<?php the_post_thumbnail('full') ?>
																			</div>
																			<div class="post-preview-card__title" data-set-width-variable><?php the_title() ?></div>
																		</a>
																	</li>

																<?php endwhile ?>

															</ul>

														<?php endif ?>
														<?php wp_reset_query() ?>

													</div>
												</div>
											<?php endforeach ?>

										<?php endif ?>

									</div>
								</div>
							</div>
						<?php endif ?>
						
					</div>
				</div>
			</section>
		</div>
	<?php endif ?>
	
	<?php endif; ?>