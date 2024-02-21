<section class="padding-wrap">
	<div class="container-third">

		<?php if ($field = get_field('title_3', 'option')): ?>
			<?php $arrow_class = str_contains($field, 'href=') ? ' with-arrow' : '' ?>
			<?= add_class_paragraph($field, 'title-2 mb-40 mb-md-50' . $arrow_class, 1, true) ?>
		<?php endif ?>
		
		<?php if ($field = get_field('subtitle_3', 'option')): ?>
			<div class="text mb-60 mb-md-140 w-md-50"><?= $field ?></div>
		<?php endif ?>
		
		<?php
		$featured_posts = get_field('team_3', 'option');
		if($featured_posts): ?>

			<div class="mb-80 mb-md-120">
				<div class="team-list" data-team-list>
					<div class="team-list__body mb-30 mb-md-0">

						<?php foreach($featured_posts as $post): 

							setup_postdata($post); ?>
							<div class="team-list__item">
								<div class="person-card">
									<div class="person-card__img">
										<?php the_post_thumbnail('full') ?>
									</div>
									<!-- <div class="person-card__label"><?php //_e('Name', 'Nanobot') ?></div> -->
									<div class="person-card__name"><?php the_title() ?></div>

									<?php if ($field = get_field('position')): ?>
										<div class="person-card__position"><?= $field ?></div>
									<?php endif ?>
									
								</div>
							</div>
						<?php endforeach; ?>

						<?php wp_reset_postdata(); ?>

					</div>

					<?php if ($field = get_field('link_3', 'option')): ?>
						<a href="<?= $field['url'] ?>" class="team-list__all-team link d-md-none" data-action="show-all-list"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
					<?php endif ?>

				</div>
			</div>

		<?php endif; ?>

		<?php if ($field = get_field('button_3', 'option')): ?>
			<div class="text-center text-md-start">
				<a href="<?= $field['url'] ?>" class="btn-default"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
			</div>
		<?php endif ?>

	</div>
</section>