<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="home-section-two padding-wrap relative z-2" data-parallax="">
		<div class="home-section-two__body container-second">
			<div class="home-section-two__decor-1">
				<div class="layer">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-4.png" alt="">
				</div>
			</div>
			<div class="home-section-two__decor-2">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-5.png" alt="">
				</div>
			</div>
			<div class="home-section-two__decor-3">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-6.png" alt="">
				</div>
			</div>
			<div class="home-section-two__decor-4">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-7.png" alt="">
				</div>
			</div>
			<div class="home-section-two__decor-5">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-5.png" alt="">
				</div>
			</div>
			<div class="home-section-two__decor-6">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-8.png" alt="">
				</div>
			</div>
			<div class="home-section-two__decor-7">
				<div class="layer">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-9.png" alt="">
				</div>
			</div>
			<div class="home-section-two__inner">
				<div class="home-section-two__row-1">
					<div class="home-section-two__col">

						<?php if ($title): ?>
							<h2 class="home-section-two__title title-2 with-arrow title-default-space" data-set-width-variable>
								<?= $title ?>
							</h2>
						<?php endif ?>

						<?php if ($text): ?>
							<div class="home-section-two__text">
								<?= $text ?>

								<?php if ($icon): ?>
									<?= wp_get_attachment_image($icon['ID'], 'full', false, array('class' => 'blot')) ?>
								<?php endif ?>
								
							</div>
						<?php endif ?>
						
					</div>
					<div class="home-section-two__col">

						<?php if ($text_with_list): ?>

							<ul class="check-list">

								<?php foreach ($text_with_list as $item): ?>
									<li>
										<p><?= $item['text'] ?></p>
									</li>
								<?php endforeach ?>

							</ul>
							
						<?php endif ?>

					</div>
				</div>

				<?php if ($team): ?>
					<div class="home-section-two__row-2">
						<ul class="team-preview">

							<?php foreach ($team as $item): ?>
								<li>
									<div class="team-big-card">
										<div class="team-big-card__img" data-scroll-animation-trigger>
											<div class="team-big-card__img-inner">
												<?= get_the_post_thumbnail($item->ID, 'full') ?>
											</div>
										</div>
										<div class="team-big-card__main">
											<div class="team-big-card__col-1">
												<div class="team-big-card__label"><?php _e('Name', 'Nanobot') ?></div>
												<div class="team-big-card__title"><?= get_the_title($item->ID) ?></div>

												<?php if ($field = get_field('mobile_icon', $item->ID)): ?>
													<div class="team-big-card__flag-mob">
														<?= wp_get_attachment_image($field['ID'], 'full') ?>
														<?php the_field('mobile_text', $item->ID) ?>
													</div>
												<?php endif ?>
												
											</div>
											<div class="team-big-card__col-2">

												<?php if ($field = get_field('who', $item->ID)): ?>
													<div class="team-big-card__label"><?php _e('Who', 'Nanobot') ?></div>
													<div class="team-big-card__title"><?= $field ?></div>
												<?php endif ?>
												
												<?php $images = get_field('gallery', $item->ID);
												if($images): ?>

													<div class="team-big-card__flag">

														<?php foreach($images as $index => $image): ?>

															<?= wp_get_attachment_image($image['ID'], 'full') ?>

															<?php if($index < count($images) - 1) echo '&' ?>

														<?php endforeach; ?>

													</div>

												<?php endif; ?>

											</div>
											<div class="team-big-card__col-3">

												<?php if ($item->post_content): ?>
													<div class="team-big-card__label"><?php _e('About', 'Nanobot') ?></div>
													<div class="team-big-card__text"><?= $item->post_content ?></div>
												<?php endif ?>
												
											</div>
										</div>

									</div>
								</li>
							<?php endforeach ?>

						</ul>

						<?php if ($link): ?>
							<div class="home-section-two__bottom text-md-end">
								<a href="<?= $link['url'] ?>" class="link"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
							</div>
						<?php endif ?>

					</div>

				<?php endif ?>
			</div>
		</div>
	</section>

	<?php endif; ?>