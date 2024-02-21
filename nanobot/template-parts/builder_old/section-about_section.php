<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="home-section-four padding-wrap" data-parallax>
		<div class="home-section-four__body">
			<div class="home-section-four__decor-1">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-7.png" alt="">
				</div>
			</div>
			<div class="home-section-four__decor-2">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-2.png" alt="">
				</div>
			</div>
			<div class="home-section-four__decor-3">
				<div class="layer">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-9.png" alt="">
				</div>
			</div>
			<div class="home-section-four__inner">

				<?php if ($list): ?>
					<div class="container-second">
						<div class="home-section-four__row-1">
							<div class="step-tabs" data-tabs="">
								<div class="step-tabs__col-1">

									<?php foreach ($list as $index => $item): ?>
										<div class="step-tabs__content" data-tab-content="<?= $index ?>">

											<?php if ($item['title']): ?>
												<h2 class="step-tabs__title with-arrow title-default-space"><?= $item['title'] ?></h2>
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

	<?php endif; ?>