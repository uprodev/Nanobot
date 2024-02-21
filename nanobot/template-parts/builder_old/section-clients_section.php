<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="home-section-seven padding-wrap" data-parallax>
		<div class="home-section-seven__body container-second">
			<div class="home-section-seven__decor-1">
				<div class="layer">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-17.png" alt="">
				</div>
			</div>
			<div class="home-section-seven__decor-2">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-7.png" alt="">
				</div>
			</div>
			<div class="home-section-seven__inner">

				<?php if ($left_title): ?>
					<div class="home-section-seven__col">
						<h2 class="home-section-seven__title title-2 title-default-space with-arrow" data-set-width-variable>
							<?= $left_title ?>
						</h2>
					</div>
				<?php endif ?>

				<?php if($clients): ?>

					<div class="home-section-seven__col">
						<ul class="logo-list">

							<?php foreach($clients as $image): ?>

								<li>
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								</li>

							<?php endforeach; ?>

						</ul>

						<?php if ($link): ?>
							<a href="<?= $link['url'] ?>" class="link"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
						<?php endif ?>

					</div>

				<?php endif; ?>

			</div>
		</div>
	</section>

	<?php endif; ?>