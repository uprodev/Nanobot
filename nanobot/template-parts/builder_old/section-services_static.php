<section class="padding-wrap">
	<div class="container-second">

		<?php if( have_rows('texts_16', 'option') ): ?>

			<div class="row gy-5 gy-md-14 gx-10 text font-300 text-content mb-60 mb-md-120">

				<?php while( have_rows('texts_16', 'option') ): the_row(); ?>

					<?php if ($field = get_sub_field('text')): ?>
						<div class="col-12 col-md-6 last"><?= $field ?></div>
					<?php endif ?>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>

		<?php if ($field = get_field('link_16', 'option')): ?>
			<div class="text-center text-md-start">
				<a href="<?= $field['url'] ?>" class="btn-default text-uppercase"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
			</div>
		<?php endif ?>

	</div>
</section>