<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
			<div class="container-second">
				<div class="row gx-5">

					<?php if ($position == 'Right'): ?>
						<div class="col-12 col-md-6"></div>
					<?php endif ?>

					<div class="col-12 col-md-6">

						<?php if ($title): ?>
							<h2 class="title-2<?php if($is_title_arrow) echo ' with-arrow' ?> mb-40 mb-md-50"><?= $title ?></h2>
						<?php endif ?>
						
						<?php if ($list): ?>
							<ul class="list-step-line">

								<?php foreach ($list as $item): ?>

									<?php if ($item['text']): ?>
										<li>
											<div class="list-step-line__dot"></div>
											
											<?php 
											switch ($item['font_size']) {
												case 'Large':
												$size_class = 'text-[3rem]';
												break;
												case 'Medium':
												$size_class = 'text-[2.4rem]';
												break;
												case 'Small':
												$size_class = 'text-[1.8rem]';
												break;

												default:
												$size_class = 'text-[3rem]-uppercase';
												break;
											}
											?>

											<div class="list-step-line__text text-content last-md font-<?= $item['font_weight'] ?><?= ' ' . $size_class ?>"><?= $item['text'] ?></div>
										</li>
									<?php endif ?>
									
								<?php endforeach ?>

							</ul>
						<?php endif ?>
						
					</div>
					
					<?php if ($position == 'Left'): ?>
						<div class="col-12 col-md-6"></div>
					<?php endif ?>

				</div>
			</div>
		</section>
	</div>

	<?php endif; ?>