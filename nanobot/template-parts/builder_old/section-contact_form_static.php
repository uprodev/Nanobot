<section class="padding-wrap">
	<div class="container-second">

		<?php if ($field = get_field('title_12', 'option')): ?>
			<h2 class="title-2 with-arrow mb-50 mb-md-110 w-md-80" data-set-width-variable><?= $field ?></h2>
		<?php endif ?>
		
		<?php if ($field = get_field('form_12', 'option')): ?>
			<?= do_shortcode('[contact-form-7 id="' . $field . '"]') ?>
		<?php endif ?>
		
	</div>
</section>