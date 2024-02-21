<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="padding-wrap" id ="contact_form_static">
		<div class="container-second">

			<?php if ($field = get_field('title_12', 'option')): ?>
				<h2 class="title-2 with-arrow mb-50 mb-md-110 w-md-80" data-set-width-variable><?= $field ?></h2>
			<?php endif ?>

			<?php if (($field = get_field('form_12', 'option')) && $form == 'CF7'): ?>
				<?= do_shortcode('[contact-form-7 id="' . $field . '"]') ?>
			<?php endif ?>

			<?php if (($field = get_field('script_12', 'option')) && $form == 'Script'): ?>
				<?= $field ?>
			<?php endif ?>

		</div>
	</section>

	<?php endif; ?>