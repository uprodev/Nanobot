<section class="padding-wrap">
	<div class="container-third pe-lg-7">

		<?php if ($field = get_field('title_17', 'option')): ?>
			<h2 class="title-2 with-arrow title-default-space w-md-75 d-md-none"><?= $field ?></h2>
		<?php endif ?>
		
		<ul class="cases-list">
			<li>
				<div class="cases-card cases-card--big">
					<div class="cases-card__video ibg">

						<?php if ($field = get_field('image_17', 'option')): ?>
							<?= wp_get_attachment_image($field['ID'], 'full') ?>
						<?php endif ?>
						
						<?php if ($field = get_field('video_17', 'option')): ?>
							<a href="<?= $field['url'] ?>" data-fancybox class="cases-card__video-icon">
								<img src="<?php bloginfo('template_directory'); ?>/img/icons/play.svg" alt="">
							</a>
						<?php endif ?>
						
					</div>
					<div class="cases-card__text-wrap">

						<?php if ($field = get_field('title_17', 'option')): ?>
							<div class="cases-card__title d-none d-md-block"><?= $field ?></div>
						<?php endif ?>

						<?php if ($field = get_field('text_17', 'option')): ?>
							<div class="cases-card__text text-content text"><?= $field ?></div>
						<?php endif ?>

					</div>
				</div>
			</div>
		</li>
	</ul>
</div>
</section>