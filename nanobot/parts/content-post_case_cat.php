<div class="filter-list__item<?php if($args['post_terms_ids']) echo ' term-' . implode(' term-', $args['post_terms_ids']) ?>">
	<a href="<?php the_permalink() ?>" class="post-card-sm">
		<div class="post-card-sm__img">
			<?php the_post_thumbnail('full') ?>
		</div>
		<div class="post-card-sm__content">
			<div class="post-card-sm__title text-sm text-md-[3rem]"><?php the_title() ?></div>

			<?php if ($args['child_term_name_2']): ?>
				<div class="post-card-sm__subtitle text-[1.8rem]"><?= $args['child_term_name_2'] ?></div>
			<?php endif ?>
			
		</div>
	</a>
</div>