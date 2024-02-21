<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="home-section-six padding-wrap relative z-1<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>" data-parallax>
			<div class="home-section-six__body container-second">
				<div class="home-section-six__inner" data-cases>

					<?php if ($title): ?>
						<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
						<?= add_class_paragraph($title, 'home-section-six__title title-2 title-default-space' . $arrow_class, 1, true) ?>
					<?php endif ?>
					
					<?php if ($cases): ?>
						<div class="home-section-six__cases">
							<ul class="cases-list">

								<?php foreach ($cases as $case): ?>
									<li>
										<a href="<?= get_the_permalink($case->ID) ?>" class="cases-card">
											<div class="cases-card__img ibg">
												<?= get_the_post_thumbnail($case->ID, 'full') ?>
											</div>
											<div class="cases-card__text-wrap">
												<div class="cases-card__scroll-box">
													<div class="cases-card__title" data-adaptive-font-size><?= get_the_title($case->ID) ?></div>

													<?php if (get_field('subtitle', $case->ID)): ?>
														<div class="cases-card__subtitle"><?php the_field('subtitle', $case->ID) ?></div>
													<?php endif ?>
													
													<div class="cases-card__text text-content text">
														<?php _e('What we did', 'Nanobot') ?>:
														<?= $case->post_excerpt ?>
													</div>
												</div>
											</div>
										</a>
									</li>
								<?php endforeach ?>
								
							</ul>
						</div>
					<?php endif ?>
					
					<?php if ($button): ?>
						<a href="<?= $button['url'] ?>" class="link<?php if($button['url'] == '#') echo ' cases-load-more d-none' ?>"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?></a>
					<?php endif ?>

				</div>
			</div>
		</section>
	</div>

	<?php endif; ?>