<?php if( have_rows('socials', 'option') ): ?>

	<div class="padding-wrap z-10">
		<div class="container-second">
			<div class="share">
				<p class="text-[4.8rem] title-default-space"><?php _e('Follow us', 'Nanobot') ?></p>
				<ul class="social social--lg">

					<?php while( have_rows('socials', 'option') ): the_row(); ?>

						<?php if (get_sub_field('icon') && get_sub_field('url')): ?>
						<li>
							<a href="<?= the_sub_field('url') ?>" target="_blank">
								<?= wp_get_attachment_image(get_sub_field('icon')['ID'], 'full', false, array('class' => 'img-svg', 'loading' => 'eager')) ?>
							</a>
						</li>
					<?php endif ?>

				<?php endwhile; ?>

			</ul>
		</div>
	</div>
</div>

<?php endif; ?>