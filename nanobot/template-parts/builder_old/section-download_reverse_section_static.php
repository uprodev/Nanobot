<section class="padding-wrap p-md-0">
	<div class="banner banner--revers" data-banner>
		<div class="banner__body container-third">
			<div class="banner__text-wrap">

				<?php if ($field = get_field('title_11', 'option')): ?>
					<h2 class="banner__title title-2 with-arrow mb-20 mb-md-60" data-set-width-variable><?= $field ?></h2>
				<?php endif ?>
				
				<?php if ($field = get_field('text_11', 'option')): ?>
					<div class="banner__text text-content last mb-40 mb-md-60"><?= $field ?></div>
				<?php endif ?>
				
				<?php if ($field = get_field('link_11', 'option')): ?>
					<div class="text-center text-md-start">
						<a href="<?= $field['url'] ?>" class="btn-default text-uppercase"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
					</div>
				<?php endif ?>

			</div>

			<?php if ($field = get_field('image_11', 'option')): ?>
				<div class="banner__img-wrap">
					<div class="banner__img">
						<?= wp_get_attachment_image($field['ID'], 'full') ?>
					</div>
				</div>
			<?php endif ?>
			
		</div>
	</div>
</section>