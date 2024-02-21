<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="padding-wrap">
		<div class="container-second">

			<?php if ($title): ?>
				<div class="row gx-5">
					<div class="col-12 col-md-6">
						<h2 class="title-2 with-arrow mb-40 mb-md-50"><?= $title ?></h2>
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

	<?php endif; ?>