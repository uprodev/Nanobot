<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="home-section-nine padding-wrap" data-parallax>
		<div class="home-section-nine__body container-second">
			<div class="home-section-nine__decor-2">
				<div class="layer">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-1.png" alt="">
				</div>
			</div>
			<div class="home-section-nine__decor-1">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-18.png" alt="">
				</div>
			</div>
			<div class="home-section-nine__decor-5">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-17.png" alt="">
				</div>
			</div>
			<div class="home-section-nine__decor-3">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-7.png" alt="">
				</div>
			</div>
			<div class="home-section-nine__decor-4">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-19.png" alt="">
				</div>
			</div>

			<div class="home-section-nine__decor-6">
				<div class="layer">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-7.png" alt="">
				</div>
			</div>

			<div class="home-section-nine__inner">

				<?php if ($title): ?>
					<h2 class="home-section-nine__title title-2 with-arrow title-default-space" data-set-width-variable>
						<?= $title ?>
					</h2>
				<?php endif ?>
				
				<?php if ($blog_posts): ?>
					<ul class="blog-list">

						<?php foreach ($blog_posts as $post): ?>
							<li>
								<div class="blog-card">
									<div class="blog-card__col-1">
										<div class="blog-card__date"><?= get_the_date('F j, Y', $post->ID) ?></div>
										<div class="blog-card__title">
											<a href="<?= get_the_permalink($post->ID) ?>"><?= get_the_title($post->ID) ?></a>
										</div>
									</div>
									<div class="blog-card__col-2">

										<?php $tags = wp_get_object_terms($post->ID, 'post_tag') ?>

										<?php if ($tags): ?>
											<div class="blog-card__tags tags">

												<?php foreach ($tags as $tag): ?>
													<a href="<?= get_term_link($tag->term_id) ?>"># <?= $tag->name ?></a>
												<?php endforeach ?>

											</div>
										<?php endif ?>
										
										<div class="blog-card__text text-content text"><?= get_the_excerpt($post->ID) ?></div>
										<a href="<?= get_the_permalink($post->ID) ?>" class="blog-card__link text"><?php _e('Read more ...', 'Nanobot') ?></a>
									</div>
									<div class="blog-card__col-3">
										<div class="blog-card__img ibg">
											<a href="<?= get_the_permalink($post->ID) ?>">
												<?= get_the_post_thumbnail($post->ID, 'full') ?>
											</a>
										</div>
									</div>
								</div>
							</li>
						<?php endforeach ?>
						
					</ul>
				<?php endif ?>
				
				<?php if ($link): ?>
					<div class="home-section-nine__bottom text-md-end">
						<a href="<?= $link['url'] ?>" class="link"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>