<?php if( have_rows('list_13', 'option') ): ?>

	<section class="padding-wrap">
		<div class="container">
			<ul class="logo-list logo-list--second">

				<?php while( have_rows('list_13', 'option') ): the_row(); ?>

					<?php if ($field = get_sub_field('logo')): ?>
						<li>
							<a href="<?php the_sub_field('link') ?>">
								<?= wp_get_attachment_image($field['ID'], 'full') ?>
							</a>
						</li>
					<?php endif ?>	

				<?php endwhile; ?>

			</ul>
		</div>
	</section>

<?php endif; ?>