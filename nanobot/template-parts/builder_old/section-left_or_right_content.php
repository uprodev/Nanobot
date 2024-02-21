<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($rows): ?>

		<?php foreach ($rows as $item): ?>
			<section class="padding-wrap">
				<div class="container-second">
					<div class="row gx-5">
						<div class="col-12 col-md-6">

							<?php if ($item['column'] == 'Left' && $item['title']): ?>
								<h2 class="title-2 with-arrow mb-40 mb-md-50" data-set-width-variable><?= $item['title'] ?></h2>
							<?php endif ?>

							<?php if ($item['column_text'] == 'Left' || $item['column_image'] == 'Left'): ?>
								<div class="text-content last font-300<?= $item['is_large_font'] ? ' text-lg' : ' text' ?>">

									<?php if ($item['column_text'] == 'Left' && $item['text']): ?>
										<?= $item['text'] ?>
									<?php endif ?>

									<?php if ($item['column_image'] == 'Left' && $item['image']): ?>
										<figure>
											<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
										</figure>
									<?php endif ?>

								</div>
							<?php endif ?>
							
						</div>
						<div class="col-12 col-md-6">

							<?php if ($item['column'] == 'Right' && $item['title']): ?>
								<h2 class="title-2 with-arrow mb-40 mb-md-50" data-set-width-variable><?= $item['title'] ?></h2>
							<?php endif ?>

							<?php if ($item['column_text'] == 'Right' || $item['column_image'] == 'Right'): ?>
								<div class="text-content last font-300<?= $item['is_large_font'] ? ' text-lg' : ' text' ?>">

									<?php if ($item['column_text'] == 'Right' && $item['text']): ?>
										<?= $item['text'] ?>
									<?php endif ?>

									<?php if ($item['column_image'] == 'Right' && $item['image']): ?>
										<figure>
											<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
										</figure>
									<?php endif ?>

								</div>
							<?php endif ?>
							
						</div>
					</div>
				</div>
			</section>
		<?php endforeach ?>
		
	<?php endif ?>

	<?php endif; ?>