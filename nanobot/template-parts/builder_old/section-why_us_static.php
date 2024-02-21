<section class="padding-wrap">
	<div class="container-second">

		<?php if ($field = get_field('title_4', 'option')): ?>
			<h2 class="title-2 with-arrow mb-50 mb-md-100" data-set-width-variable><?= $field ?></h2>
		<?php endif ?>
		
		<?php if( have_rows('items_4', 'option') ): ?>

			<ul class="num-list" data-animation-hover-text>

				<?php while( have_rows('items_4', 'option') ): the_row(); ?>

					<?php if ($field = get_sub_field('text')): ?>
						<li>
							<div class="num-list__num"><?php if(get_row_index() < 10) echo '0'; echo get_row_index() ?></div>
							<div class="num-list__text text-content"><?= $field ?></div>
						</li>
					<?php endif ?>

				<?php endwhile; ?>

			</ul>

		<?php endif; ?>

	</div>
</section>