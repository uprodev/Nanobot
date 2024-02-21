<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="padding-wrap">
		<div class="container-third pe-lg-7">

			<?php if ($title): ?>
				<h2 class="title-2 with-arrow title-default-space w-md-75 d-md-none"><?= $title ?></h2>
			<?php endif ?>

			<ul class="cases-list">
				<li>
					<div class="cases-card cases-card--big">
						<div class="cases-card__video ibg">

							<?php if ($image): ?>
								<?= wp_get_attachment_image($image['ID'], 'full') ?>
							<?php endif ?>

							<?php if ($video): ?>
								<a href="<?= $video['url'] ?>" data-fancybox class="cases-card__video-icon">
									<img src="<?php bloginfo('template_directory'); ?>/img/icons/play.svg" alt="">
								</a>
							<?php endif ?>

						</div>
						<div class="cases-card__text-wrap">

							<?php if ($title): ?>
								<div class="cases-card__title d-none d-md-block"><?= $title ?></div>
							<?php endif ?>

							<?php if ($text): ?>
								<div class="cases-card__text text-content text"><?= $text ?></div>
							<?php endif ?>

						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<?php endif; ?>