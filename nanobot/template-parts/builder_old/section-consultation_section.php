<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="home-section-ten padding-wrap" data-parallax="">
		<div class="home-section-ten__body container">
			<div class="home-section-ten__decor-1">
				<div class="layer" data-depth="0.4" data-speed="4">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-15.png" alt="">
				</div>
			</div>
			<div class="home-section-ten__decor-3">
				<div class="layer">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-4.png" alt="">
				</div>
			</div>
			<div class="home-section-ten__decor-2">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-11.png" alt="">
				</div>
			</div>

			<div class="home-section-ten__inner">

				<?php if ($title): ?>
					<h2 class="home-section-ten__title"><?= $title ?></h2>
				<?php endif ?>
				
				<?php if ($text): ?>
					<div class="home-section-ten__text text-content" data-animation-hover-text><?= $text ?></div>
				<?php endif ?>
				
				<?php if ($link): ?>
					<a href="<?= $link['url'] ?>" class="home-section-ten__btn btn-default"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>