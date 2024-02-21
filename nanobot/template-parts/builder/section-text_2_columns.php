<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($title || $text_left || $text_right || $list_services): ?>
		<div class="bg-decor" data-parallax>
			
			<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

			<section class="home-section-one padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>" data-parallax>
				<div class="home-section-one__body container-second">
					

					<?php if ($title): ?>
						<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
						<?= add_class_paragraph($title, 'home-section-one__title title-2 title-default-space' . $arrow_class, 1, true) ?>
					<?php endif ?>

					<?php if ($text_left || $text_right): ?>
						
						<div class="home-section-one__text" data-animation-hover-text>

							<?php 
							switch ($font_size) {
								case 'Large':
								$size_class = 'text-[3rem]';
								break;
								case 'Medium':
								$size_class = 'text-[2.4rem]';
								break;
								case 'Small':
								$size_class = 'text-[1.8rem]';
								break;

								default:
								$size_class = 'text-[3rem]-uppercase';
								break;
							}
							?>

							<div class="home-section-one__text-col text-content last-md font-<?= $font_weight ?><?= ' ' . $size_class ?>">

								<?php if ($text_left): ?>
									<?= $text_left ?>
								<?php endif ?>

							</div>

							<?php 
							switch ($font_size_2) {
								case 'Large':
								$size_class_2 = 'text-[3rem]';
								break;
								case 'Medium':
								$size_class_2 = 'text-[2.4rem]';
								break;
								case 'Small':
								$size_class_2 = 'text-[1.8rem]';
								break;

								default:
								$size_class_2 = 'text-[3rem]-uppercase';
								break;
							}
							?>

							<div class="home-section-one__text-col text-content last-md font-<?= $font_weight_2 ?><?= ' ' . $size_class_2 ?>">

								<?php if ($text_right): ?>
									<?= $text_right ?>
								<?php endif ?>

							</div>
						</div>
						
					<?php endif ?>
					
					<?php if ($list_services): ?>
						
						<div class="post-preview" data-post-preview>
							<div class="post-preview__desk" data-tabs-preview>
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

									<!-- <a href="#" class="link"><?php //_e('Load more', 'Nanobot') ?></a> -->
								</div>

								<div class="post-preview__col">

									<?php if ($list_services): ?>

										<?php foreach ($list_services as $index => $term): ?>
											<div class="post-preview__content" data-tab-content="<?= $index ?>">

												<?php $wp_query = new WP_Query(array('post_type' => 'services', 'tax_query' => array(array('taxonomy' => 'categories_services', 'field' => 'id', 'terms' => $term->term_id)), 'paged' => get_query_var('paged')));
												if($wp_query->have_posts()): ?>

													<div class="post-preview__list">

														<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>

															
															<a href="<?= get_field('link') ? get_field('link')['url'] : get_the_permalink() ?>" class="post-preview-card">
																<div class="post-preview-card__img ibg">
																	<?php the_post_thumbnail('full') ?>
																</div>
																<div class="post-preview-card__title" data-set-width-variable><?= get_field('link') ? get_field('link')['title'] : get_the_title() ?></div>
															</a>
															

														<?php endwhile ?>

													</div>

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
											<p class="post-preview__mob-item-title title-3<?php if($index == 0) echo ' active' ?>" data-spoller-trigger><?= $term->name ?></p>
											<div class="post-preview__mob-item-content">

												<?php $wp_query = new WP_Query(array('post_type' => 'services', 'tax_query' => array(array('taxonomy' => 'categories_services', 'field' => 'id', 'terms' => $term->term_id)), 'paged' => get_query_var('paged')));
												if($wp_query->have_posts()): ?>

													<div class="post-preview__list">

														<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>

															
															<a href="<?php the_permalink(); ?>" class="post-preview-card">
																<div class="post-preview-card__img ibg">
																	<?php the_post_thumbnail('full') ?>
																</div>
																<div class="post-preview-card__title" data-set-width-variable><?php the_title() ?></div>
															</a>
															

														<?php endwhile ?>

													</div>

												<?php endif ?>
												<?php wp_reset_query() ?>

											</div>
										</div>
									<?php endforeach ?>

								<?php endif ?>

							</div>
						</div>
						
					<?php endif ?>
					
					
				</div>
			</section>
		</div>
	<?php endif ?>
	
	<?php endif; ?>