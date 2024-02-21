<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="promo-header">
		<div class="promo-header__bg ibg" style="<?php if($video_or_image == 'Background' && $background) echo 'background-color: ' . $background . ';'; if($opacity != 1) echo 'opacity: ' . $opacity . ';' ?>">

			<?php if ($video_or_image == 'Image'): ?>

				<?php if ($image): ?>
					<?= wp_get_attachment_image($image['ID'], 'full') ?>
				<?php endif ?>

			<?php elseif($video_or_image == 'Video'): ?>

				<?php if ($video): ?>
					<video poster="<?= $poster['url'] ?>" autoplay muted loop playsinline controlslist="nodownload" crossorigin="anonymous"><source src="<?= $video['url'] ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
					</video>
				<?php endif ?>

			<?php endif ?>

		</div>
		
		<div class="promo-header__body container">
		<?php if ($is_breadcrumbs): ?>

				<ul class="breadcrumbs"><?php if(function_exists('bcn_display')) bcn_display(); ?></ul>
			
		<?php endif ?>

		<?php if ($title): ?>
			<h1 class="promo-header__title " data-text="medical animation studio"><?= $title ?></h1>
		<?php endif ?>

		<?php if ($button): ?>
			<div class="promo-header__btn-wrap ">
				<a href="<?= $button['url'] ?>" class="promo-header__btn btn-default text-uppercase"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?></a>
			</div>
		<?php endif ?>
		</div>
		<a href="#home_section_one" class="promo-header__btn-scroll">
			<svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g>
					<path
					d="M61 31C61 47.5685 47.5685 61 31 61C14.4315 61 1 47.5685 1 31C1 14.4315 14.4315 1 31 1C47.5685 1 61 14.4315 61 31Z"
					stroke="white" stroke-width="1.2" />
					<path class="dot"
					d="M35 49C35 51.2091 33.2091 53 31 53C28.7909 53 27 51.2091 27 49C27 46.7909 28.7909 45 31 45C33.2091 45 35 46.7909 35 49Z"
					fill="white" />
				</g>
			</svg>
		</a>
	</section>

	<?php endif; ?>