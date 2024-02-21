<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="padding-wrap">
		<div class="container-second">

			<?php if ($title): ?>
				<h2 class="title-2 with-arrow mb-50 mb-md-120" data-set-width-variable><?= $title ?></h2>
			<?php endif ?>

			<?php if ($steps): ?>
				<div class="development-steps">
					<div class="development-steps__bg">
						<img src="<?php bloginfo('template_directory'); ?>/img/photo/lines-bg.svg" alt="">
					</div>
					<div class="development-steps__body">
						<div class="development-steps__list">

							<?php foreach ($steps as $index => $item): ?>
								<div class="development-steps__item">

									<?php if ($item['icon']): ?>
										<div class="development-steps__icon">
											<?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
										</div>
									<?php endif ?>
									
									<div class="development-steps__num"><?php if($index < 9) echo '0'; echo $index + 1; ?></div>

									<?php if ($item['title']): ?>
										<div class="development-steps__title"><?= $item['title'] ?></div>
									<?php endif ?>
									
									<?php if ($item['text']): ?>
										<div class="development-steps__hidden-text"><?= $item['text'] ?></div>
									<?php endif ?>
									
								</div>
							<?php endforeach ?>
							
						</div>
					</div>
				</div>
			<?php endif ?>
			
		</div>
	</div>

	<?php endif; ?>