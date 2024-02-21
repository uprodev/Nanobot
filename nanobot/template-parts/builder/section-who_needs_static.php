<section class="padding-wrap">
	<div class="container-second">
		<div class="row gx-5">
			<div class="col-12 col-md-6">

				<?php if ($field = get_field('title_15', 'option')): ?>
					<h2 class="title-2 with-arrow mb-40 mb-md-50" data-set-width-variable><?= $field ?></h2>
				<?php endif ?>
				<div class="text text-content last font-300">

					<?php if ($field = get_field('text_15', 'option')): ?>
						<?= $field ?>
					<?php endif ?>

					<?php if ($field = get_field('image_15', 'option')): ?>
						<figure>
							<?= wp_get_attachment_image($field['ID'], 'full') ?>
						</figure>
					<?php endif ?>
					
				</div>
			</div>
			<div class="col-12 col-md-6"></div>
		</div>
	</div>
</section>