<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="home-section-two padding-wrap relative z-2<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>" data-parallax="">
			<div class="home-section-two__body container-second">
				<div class="home-section-two__inner">
					<div class="home-section-two__row-1">
						<div class="home-section-two__col">

							<?php if ($title): ?>
								<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
								<?= add_class_paragraph($title, 'home-section-two__title title-2 title-default-space' . $arrow_class, 1, true) ?>
							<?php endif ?>

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

							<?php if ($text): ?>
								<div class="home-section-two__text text-content last-md font-<?= $font_weight ?><?= ' ' . $size_class ?>">
									<?= $text ?>

									<?php if ($icon): ?>
										<?= wp_get_attachment_image($icon['ID'], 'full', false, array('class' => 'blot')) ?>
									<?php endif ?>
									
								</div>
							<?php endif ?>
							
						</div>
						<div class="home-section-two__col" data-animation-hover-text>

							<?php if ($text_with_list): ?>

								<ul class="check-list<?php if(!$is_add_markers) echo ' check-list--hide-icons' ?>" >

									<?php foreach ($text_with_list as $item): ?>
										<li>
											<?= $item['text'] ?>
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
												<span style="background-image: url('<?php bloginfo('template_directory'); ?>/img/photo/circle-shadow-md.png')"></span>
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
	</div>

	<?php endif; ?>