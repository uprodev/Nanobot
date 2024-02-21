<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="padding-wrap">
		<div class="container-second">

			<?php if ($title): ?>
				<h2 class="title-2 with-arrow mb-50 mb-md-120" data-set-width-variable><?= $title ?></h2>
			<?php endif ?>

			<?php if ($locations): ?>
				<div class="row gx-5 text-center text-md-start">

					<?php foreach ($locations as $item): ?>
						<div class="col-12 col-md-4 mb-40 mb-md-0">
							<ul class="contact-list">
								<li>

									<?php if ($item['flag']): ?>
										<div class="contact-list__flag">
											<?= wp_get_attachment_image($item['flag']['ID'], 'full') ?>
										</div>
									<?php endif ?>
									
								</li>
								<li>

									<?php if ($item['title']): ?>
										<strong><?= $item['title'] ?></strong>
									<?php endif ?>
									
								</li>

								<?php if ($item['address']): ?>
									<li><?= $item['address'] ?></li>
								<?php endif ?>

								<?php if ($item['texts']): ?>
									<?php foreach ($item['texts'] as $item_2): ?>
										<li><?= $item_2['text'] ?></li>
									<?php endforeach ?>
								<?php endif ?>
								
								<?php if ($item['phones']): ?>
									<?php foreach ($item['phones'] as $index => $item_3): ?>
										<li>
											<a href="tel:+<?= preg_replace('/[^0-9]/', '', $item_3['phone']) ?>" class="contact-list__el-with-icon">

												<?php if ($index == 0): ?>
													<span class="contact-list__icon">
														<img src="<?php bloginfo('template_directory'); ?>/img/icons/phone-second.svg" alt="">
													</span>
												<?php endif ?>

												<?= $item_3['phone'] ?>
											</a>
										</li>
									<?php endforeach ?>
								<?php endif ?>
								
								<?php if ($item['email']): ?>
									<li>
										<a href="mailto:<?= $item['email'] ?>" class="contact-list__el-with-icon">
											<span class="contact-list__icon">
												<img src="<?php bloginfo('template_directory'); ?>/img/icons/globe.svg" alt="">
											</span>
											<?= $item['email'] ?>
										</a>
									</li>
								<?php endif ?>

							</ul>
						</div>
					<?php endforeach ?>
					
				</div>
			<?php endif ?>
			
		</div>
	</div>

	<?php endif; ?>