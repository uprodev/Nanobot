<section class="padding-wrap">
	<div class="container-third">

		<?php if ($field = get_field('title_1', 'option')): ?>
			<h2 class="title-2 with-arrow mb-50 mb-md-120" data-set-width-variable><?= $field ?></h2>
		<?php endif ?>
		
		<?php if( have_rows('faq_1', 'option') ): ?>

			<div class="mb-60 mb-md-80">
				<ul class="staked-list" data-spoller>

					<?php while( have_rows('faq_1', 'option') ): the_row(); ?>

						<li>

							<?php if ($field = get_sub_field('title')): ?>
								<div class="staked-list__title" data-spoller-trigger><?= $field ?></div>
							<?php endif ?>

							<?php if ($field = get_sub_field('answer')): ?>
								<div class="staked-list__content text-content text"><?= $field ?></div>
							<?php endif ?>

						</li>

					<?php endwhile; ?>
				<?php endif; ?>

			</ul>
		</div>

		<?php if ($field = get_field('link_1', 'option')): ?>
			<div class="text-center text-md-start">
				<a href="<?= $field['url'] ?>" class="btn-default"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
			</div>
		<?php endif ?>

	</div>
</section>