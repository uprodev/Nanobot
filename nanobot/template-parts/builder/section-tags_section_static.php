<section class="padding-wrap">
	<div class="container-third">
		<div class="row">
			<div class="col-12 col-md-5 pe-md-5">

				<?php if ($field = get_field('title_9', 'option')): ?>
					<?php $arrow_class = str_contains($field, 'href=') ? ' with-arrow' : '' ?>
					<?= add_class_paragraph($field, 'title-2 mb-25 mb-dm-50' . $arrow_class, 1, true) ?>
				<?php endif ?>
				
			</div>
			<div class="col-12 col-md-7">

				<?php if ($tags = get_field('tags_9', 'option')): ?>
					<div class="tags-second">

						<?php foreach ($tags as $tag): ?>
							<a href="<?= get_term_link($tag->term_id) ?>"><?= $tag->name ?></a>
						<?php endforeach ?>
						
					</div>
				<?php endif ?>
				
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-5 pe-md-5">
				<p class="title-2 mb-25 mb-dm-50" data-set-width-variable=""><?php _e('Author', 'Nanobot') ?></p>
			</div>
			<div class="col-12 col-md-7">


					<div class="tags-second">

						<span><?php echo get_the_author_meta('display_name'); ?></span>
						
					</div>

				
			</div>
		</div>		
		
	</div>
</section>