<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		<div class="bg-decor__inner">

			<?php if ($background_1['image']): ?>
				<div class="bg-decor__cloth<?= $background_1['vertical'] == 'center' ? ' center-y' : ' ' . $background_1['vertical'] . '-' . $background_1['number_vertical'] ?><?= $background_1['horizontal'] == 'center' ? ' center-x' : ' ' . $background_1['horizontal'] . '-' . $background_1['number_horizontal'] ?> size-<?= $background_1['size'] ?><?php if($background_1['is_blur']) echo ' blur' ?>">
					<div class="layer">
						<?= wp_get_attachment_image($background_1['image']['ID'], 'full') ?>
					</div>
				</div>
			<?php endif ?>
			
			<?php if ($background_2['image']): ?>
				<div class="bg-decor__bubble-<?= $background_2['light_or_dark'] ?><?= $background_2['vertical'] == 'center' ? ' center-y' : ' ' . $background_2['vertical'] . '-' . $background_2['number_vertical'] ?><?= $background_2['horizontal'] == 'center' ? ' center-x' : ' ' . $background_2['horizontal'] . '-' . $background_2['number_horizontal'] ?> size-<?= $background_2['size'] ?><?php if($background_2['is_blur']) echo ' blur' ?>">
					<div class="layer" data-depth="<?= $background_2['light_or_dark'] == 'light' ? '0.30' : '0.20' ?>"<?php if($background_2['light_or_dark'] == 'light') echo ' data-speed="4"' ?>>
						<?= wp_get_attachment_image($background_2['image']['ID'], 'full') ?>
					</div>
				</div>
			<?php endif ?>

			<?php if ($background_3['image']): ?>
				<div class="bg-decor__bubble-<?= $background_3['light_or_dark'] ?><?= $background_3['vertical'] == 'center' ? ' center-y' : ' ' . $background_3['vertical'] . '-' . $background_3['number_vertical'] ?><?= $background_3['horizontal'] == 'center' ? ' center-x' : ' ' . $background_3['horizontal'] . '-' . $background_3['number_horizontal'] ?> size-<?= $background_3['size'] ?><?php if($background_3['is_blur']) echo ' blur' ?>">
					<div class="layer" data-depth="<?= $background_3['light_or_dark'] == 'light' ? '0.30' : '0.20' ?>"<?php if($background_3['light_or_dark'] == 'light') echo ' data-speed="4"' ?>>
						<?= wp_get_attachment_image($background_3['image']['ID'], 'full') ?>
					</div>
				</div>
			<?php endif ?>

		</div>
		<section class="hero">
			<div class="hero__bg ibg" style="<?php if($video_or_image == 'Background' && $background) echo 'background-color: ' . $background . ';'; if($opacity != 1) echo 'opacity: ' . $opacity . ';' ?>">

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
			<div class="hero__body container">

				<?php if ($title): ?>
					<h1 class="hero__title-1"><?= $title ?></h1>
				<?php endif ?>

				<?php if ($subtitle): ?>
					<h2 class="hero__title-2"><?= $subtitle ?></h2>
				<?php endif ?>

				<?php if ($text): ?>
					<div class="hero__text text-content last"><?= $text ?></div>
				<?php endif ?>

				<?php if ($link): ?>
					<div class="hero__btn-wrap">
						<a href="<?= $link['url'] ?>" class="promo-header__btn btn-default text-uppercase"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
					</div>
				<?php endif ?>

			</div>
		</section>
	</div>

	<?php endif; ?>