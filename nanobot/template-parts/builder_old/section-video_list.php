<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="padding-wrap">
		<div class="container-third pe-lg-7">

			<?php if ($title): ?>
				<h2 class="title-2 with-arrow title-default-space w-md-75 d-md-none"><?= $title ?></h2>
			<?php endif ?>

			<?php if ($list): ?>
				<ul class="cases-list">

					<?php foreach ($list as $item): ?>
						<li>
							<div class="cases-card cases-card--big">
								<div class="cases-card__video ibg">

									<?php if ($item['image']): ?>
										<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
									<?php endif ?>

									<?php if ($item['video']): ?>
										<a href="<?= $item['video']['url'] ?>" data-fancybox class="cases-card__video-icon">
											<img src="<?php bloginfo('template_directory'); ?>/img/icons/play.svg" alt="">
										</a>
									<?php endif ?>

								</div>
								<div class="cases-card__text-wrap">
									
									<?php if ($item['title']): ?>
										<div class="cases-card__title d-none d-md-block"><?= $item['title'] ?></div>
									<?php endif ?>

									<?php if ($item['text']): ?>
										<div class="cases-card__text text-content text"><?= $item['text'] ?></div>
									<?php endif ?>

								</div>
							</div>
						</li>
					<?php endforeach ?>
					
				</ul>
			<?php endif ?>
			
		</div>
	</section>

	<?php endif; ?>