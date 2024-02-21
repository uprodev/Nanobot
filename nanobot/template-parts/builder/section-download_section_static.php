<section class="padding-wrap p-md-0">
	<div class="banner" data-banner>
		<div class="banner__body container-third">
			<div class="banner__text-wrap">

				<?php if ($field = get_field('title_10', 'option')): ?>
					<?php $arrow_class = str_contains($field, 'href=') ? ' with-arrow' : '' ?>
					<?= add_class_paragraph($field, 'banner__title title-2 mb-20 mb-md-60' . $arrow_class, 1, true) ?>
				<?php endif ?>
				
				<?php if ($field = get_field('text_10', 'option')): ?>
					<div class="banner__text text-content last mb-40 mb-md-60"><?= $field ?></div>
				<?php endif ?>
				
				<?php if ($field = get_field('link_10', 'option')): ?>
					<div class="text-center text-md-start">
						<a href="<?= $field['url'] ?>" class="btn-default text-uppercase"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
					</div>
				<?php endif ?>

			</div>

			<?php if ($field = get_field('image_10', 'option')): ?>
				<div class="banner__img-wrap">
					<div class="banner__img">
						<?= wp_get_attachment_image($field['ID'], 'full') ?>
					</div>
				</div>
			<?php endif ?>
			
		</div>
	</div>
</section>