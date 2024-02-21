<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="home-section-seven padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
			<div class="home-section-seven__body container-second">
				<div class="home-section-seven__inner">

					<?php if ($left_title): ?>
						<div class="home-section-seven__col">
							<?php $arrow_class = str_contains($left_title, 'href=') ? ' with-arrow' : '' ?>
							<?= add_class_paragraph($left_title, 'home-section-seven__title title-2 title-default-space' . $arrow_class, 1, true) ?>
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
	</div>

	<?php endif; ?>