<section class="padding-wrap">
	<div class="container-third">
		<div class="default-gird">
			<div class="default-gird__main-column">
				<div class="text-content text-lg last">

					<?php if ($field = get_field('image_7', 'option')): ?>
						<figure>
							<?= wp_get_attachment_image($field['ID'], 'full') ?>
						</figure>
					<?php endif ?>
					
					<?php if ($field = get_field('subtitle_7', 'option')): ?>
						<q><?= $field ?></q>
					<?php endif ?>
					
					<?php if ($field = get_field('text_7', 'option')): ?>
						<?= $field ?>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</div>
</section>