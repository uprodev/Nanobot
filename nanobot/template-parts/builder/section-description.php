<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="hero<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
			<div class="hero__bg ibg" style="<?php if($video_or_image == 'Background' && $background) echo 'background-color: ' . $background . ';'; if($opacity != 1) echo 'opacity: ' . $opacity . ';' ?>">

				<?php if ($video_or_image == 'Image'): ?>

					<?php if ($image): ?>
						<?= wp_get_attachment_image($image['ID'], 'full') ?>
					<?php endif ?>

				<?php elseif($video_or_image == 'Video'): ?>

					<?php if ($video || $video_mobile): ?>
						<video poster="<?= $poster['url'] ?>"<?php if($video_mobile) echo ' data-media-mobile="' . $video_mobile['url'] . '"' ?> muted loop playsinline controlslist="nodownload" crossorigin="anonymous"><source src="<?= $video['url'] ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
						</video>
					<?php endif ?>

				<?php endif ?>

			</div>
			<div class="hero__body container">
				<div class="hero__inner">
					<?php if ($is_breadcrumbs): ?>
						<ul class="breadcrumbs"><?php if(function_exists('bcn_display')) bcn_display(); ?></ul>
					<?php endif ?>

					<?php if ($title): ?>
						<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
						<?= add_class_paragraph($title, 'hero__title-1' . $arrow_class, $title_opacity) ?>
					<?php endif ?>

					<?php if ($subtitle): ?>
						<?php $arrow_class = str_contains($subtitle, 'href=') ? ' with-arrow' : '' ?>
						<?= add_class_paragraph($subtitle, 'hero__title-2' . $arrow_class) ?>
					<?php endif ?>

					<?php if ($text): ?>
						<div class="hero__text text-content last"><?= $text ?></div>
					<?php endif ?>

					<div class="hero__btn-wrap">

						<?php if ($link): ?>
							<a href="<?= $link['url'] ?>" class="promo-header__btn btn-default text-uppercase"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
						<?php endif ?>

						<?php if ($field = $popup_video_select == 'Youtube' && $youtube_video ? $youtube_video : $popup_video['url']): ?>
							<a href="<?= $field ?>" data-fancybox class="link"><?php _e('Watch full video', 'Nanobot') ?></a>
						<?php endif ?>

					</div>
				</div>
			</div>

			<?php if ($is_scroll_button): ?>
				<a href="#home_section_one" class="hero__btn-scroll">
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
			<?php endif ?>
			
		</section>
	</div>

	<?php endif; ?>