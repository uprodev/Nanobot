<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="home-section-four padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>" data-parallax>
			<div class="home-section-four__body">
				<div class="home-section-four__inner">

					<?php if ($list): ?>
						<div class="container-second">
							<div class="home-section-four__row-1">
								<div class="step-tabs" data-tabs="">
									<div class="step-tabs__col-1">

										<?php foreach ($list as $index => $item): ?>
											<div class="step-tabs__content" data-tab-content="<?= $index ?>">

												<?php if ($item['title']): ?>
													<?php $arrow_class = str_contains($item['title'], 'href=') ? ' with-arrow' : '' ?>
													<?= add_class_paragraph($item['title'], 'step-tabs__title title-default-space title-2' . $arrow_class) ?>
												<?php endif ?>

												<?php if ($item['text']): ?>
													<div class="step-tabs__text text-content text"><?= $item['text'] ?></div>
												<?php endif ?>
												
											</div>
										<?php endforeach ?>
										
										<?php if ($button): ?>
											<a href="<?= $button['url'] ?>" class="btn-default d-none d-md-inline-flex text-uppercase"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?></a>
										<?php endif ?>

									</div>
									<div class="step-tabs__col-2">
										<div class="step-tabs__nav">

											<?php foreach ($list as $index => $item): ?>
												<div class="step-tabs__nav-item" data-tab-trigger="<?= $index ?>">
													<div class="step-tabs__nav-item-num"><?php if($index < 9) echo '0'; echo $index + 1 ?></div>
													<div class="step-tabs__nav-item-dot"></div>

													<?php if ($item['label']): ?>
														<div class="step-tabs__nav-item-title"><?= $item['label'] ?></div>
													<?php endif ?>
													
													<?php if ($item['icon']): ?>
														<div class="step-tabs__nav-item-icon">
															<span style="background-image: url('<?php bloginfo('template_directory'); ?>/img/photo/circle-shadow.png')"></span>
															<?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
														</div>
													<?php endif ?>
													
												</div>
											<?php endforeach ?>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endif ?>
					
					<?php if ($experience): ?>
						<div class="container">
							<div class="home-section-four__row-2">
								<div class="home-section-four__text-big"><?= $experience ?></div>
							</div>
						</div>
					<?php endif ?>
					
				</div>
			</div>
		</section>
	</div>

	<?php endif; ?>