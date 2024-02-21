<?php 
if($content = get_field('content'))
	foreach ($content as $row) {
		if($row['acf_fc_layout'] == 'description' && $row['image']) $description_image = wp_get_attachment_image($row['image']['ID'], 'full');
	}
?>

<li>
	<div class="post-card">
		<div class="post-card__img ibg">
			<a href="<?php the_permalink() ?>">
				<?= $description_image ?: get_the_post_thumbnail(get_the_ID(), 'full') ?>
			</a>
		</div>
		<div class="post-card__body">
			<div class="post-card__col-1">
				<div class="post-card__date"><?= get_the_date('F j, Y') ?></div>
				<div class="post-card__title" data-adaptive-font-size>
					<a href="<?php the_permalink() ?>">
						<?php the_title() ?>
					</a>
				</div>

				<?php if ($field = get_field('subtitle')): ?>
					<div class="post-card__subtitle">
						<?= $field ?>
					</div>
				<?php endif ?>
				
			</div>
			<div class="post-card__col-2">
				
				<?php $tags = wp_get_object_terms(get_the_ID(), 'post_tag') ?>

				<?php if ($tags): ?>
					<div class="blog-card__tags tags">

						<?php foreach ($tags as $tag): ?>
							<a href="<?= get_term_link($tag->term_id) ?>"<?php if(get_queried_object_id() == $tag->term_id) echo ' class="active"' ?>># <?= $tag->name ?></a>
						<?php endforeach ?>

					</div>
				<?php endif ?>

				<div class="post-card__text text-md">
					<?php the_excerpt() ?>
				</div>
				<a href="<?php the_permalink() ?>" class="post-card__link text-md">
					<?php _e('Read more ...', 'Nanobot') ?>
				</a>
			</div>
		</div>
	</div>
</li>