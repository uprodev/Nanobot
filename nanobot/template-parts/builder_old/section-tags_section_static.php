<section class="padding-wrap">
	<div class="container-third">
		<div class="row">
			<div class="col-12 col-md-5 pe-md-5">

				<?php if ($field = get_field('title_9', 'option')): ?>
					<h2 class="title-2 with-arrow mb-25 mb-dm-50" data-set-width-variable ><?= $field ?></h2>
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
	</div>
</section>