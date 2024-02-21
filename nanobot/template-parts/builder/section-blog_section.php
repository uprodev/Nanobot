<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="home-section-nine padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>" data-parallax>
			<div class="home-section-nine__body container-second">
				<div class="home-section-nine__inner">

					<?php if ($title): ?>
						<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
						<?= add_class_paragraph($title, 'home-section-nine__title title-2 title-default-space' . $arrow_class, 1, true) ?>
					<?php endif ?>
					
					<ul class="blog-list">

						<?php $wp_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 2, 'paged' => get_query_var('paged')));
						while ($wp_query->have_posts()): $wp_query->the_post(); ?>
							<li>
								<div class="blog-card">
									<div class="blog-card__col-1">
										<div class="blog-card__date"><?= get_the_date('F j, Y') ?></div>
										<div class="blog-card__title" data-adaptive-font-size>
											<a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
										</div>
									</div>
									<div class="blog-card__col-2">

										<?php $tags = wp_get_object_terms(get_the_ID(), 'post_tag') ?>

										<?php if ($tags): ?>
											<div class="blog-card__tags tags">

												<?php foreach ($tags as $tag): ?>
													<a href="<?= get_term_link($tag->term_id) ?>"># <?= $tag->name ?></a>
												<?php endforeach ?>

											</div>
										<?php endif ?>

										<div class="blog-card__text text-content text"><?= get_the_excerpt() ?></div>
										<a href="<?= get_the_permalink() ?>" class="blog-card__link text"><?php _e('Read more ...', 'Nanobot') ?></a>
									</div>
									<div class="blog-card__col-3">
										<div class="blog-card__img ibg">
											<a href="<?= get_the_permalink() ?>">
												<?= get_the_post_thumbnail(get_the_ID(), 'full') ?>
											</a>
										</div>
									</div>
								</div>
							</li>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>

					</ul>
					
					<?php if ($link): ?>
						<div class="home-section-nine__bottom text-md-end">
							<a href="<?= $link['url'] ?>" class="link"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
						</div>
					<?php endif ?>

				</div>
			</div>
		</section>
	</div>

	<?php endif; ?>