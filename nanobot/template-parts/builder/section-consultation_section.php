<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="home-section-ten padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>" data-parallax="">
			<div class="home-section-ten__body container">
				<div class="home-section-ten__inner">

					<?php if ($title): ?>
						<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
						<?= add_class_paragraph($title, 'home-section-ten__title' . $arrow_class, 1, true) ?>
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
	</div>

	<?php endif; ?>