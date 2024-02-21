<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
			<div class="container-second">

				<?php if ($title): ?>
					<div class="row gx-5">
						<div class="col-12 col-md-6">
							<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
							<?= add_class_paragraph($title, 'title-2 mb-40 mb-md-50' . $arrow_class) ?>
						</div>
						<div class="col-12 col-md-6"></div>
					</div>
				<?php endif ?>
				
				<div class="row gx-5">
					<div class="col-12 col-md-6">

						<?php if ($image): ?>
							<div class="text text-content last-md font-300">
								<figure>
									<?= wp_get_attachment_image($image['ID'], 'full') ?>
								</figure>
							</div>
						<?php endif ?>
						
					</div>
					<div class="col-12 col-md-6">

						<?php if ($text): ?>
							<div class="text text-content last font-300"><?= $text ?></div>
						<?php endif ?>
						
					</div>
				</div>
			</div>
		</section>
	</div>

	<?php endif; ?>