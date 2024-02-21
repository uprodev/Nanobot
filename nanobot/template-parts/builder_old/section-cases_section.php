<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="home-section-six padding-wrap relative z-1" data-parallax>
		<div class="home-section-six__body container-second">
			<div class="home-section-six__decor-1">
				<div class="layer" data-depth="0.2" data-speed="4">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-15.png" alt="">
				</div>
			</div>
			<div class="home-section-six__decor-2">
				<div class="layer">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-16.png" alt="">
				</div>
			</div>
			<div class="home-section-six__decor-3">
				<div class="layer" data-depth="0.2" data-speed="4">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-15.png" alt="">
				</div>
			</div>
			<div class="home-section-six__decor-4">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-8.png" alt="">
				</div>
			</div>
			<div class="home-section-six__inner">

				<?php if ($title): ?>
					<h2 class="home-section-six__title title-2 with-arrow title-default-space" data-set-width-variable>
						<?= $title ?>
					</h2>
				<?php endif ?>
				
				<?php if ($cases): ?>
					<div class="home-section-six__cases">
						<ul class="cases-list">

							<?php foreach ($cases as $case): ?>
								<li>
									<a href="#" class="cases-card">
										<div class="cases-card__img ibg">
											<?= get_the_post_thumbnail($case->ID, 'full') ?>
										</div>
										<div class="cases-card__text-wrap">
											<div class="cases-card__title"><?= get_the_title($case->ID) ?></div>

											<?php if (get_field('subtitle', $case->ID)): ?>
												<div class="cases-card__subtitle"><?php the_field('subtitle', $case->ID) ?></div>
											<?php endif ?>
											
											<div class="cases-card__text text-content text">
												<?php _e('What we did', 'Nanobot') ?>:
												<?= $case->post_content ?>
											</div>
										</div>
									</a>
								</li>
							<?php endforeach ?>
							
						</ul>
					</div>
				<?php endif ?>
				
				<?php if ($learn_more): ?>
					<a href="<?= $learn_more['url'] ?>" class="link"<?php if($learn_more['target']) echo ' target="_blank"' ?>><?= $learn_more['title'] ?></a>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>