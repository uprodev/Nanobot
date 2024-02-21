<?php get_header(); ?>

<div class="data-padding-top-header-size"></div>
<div class="padding-wrap pb-0 pt-60 d-none d-md-block">
	<div class="container">
		<ul class="breadcrumbs"><?php if(function_exists('bcn_display')) bcn_display(); ?></ul>
	</div>
</div>
<div class="bg-decor" data-parallax>
	<div class="bg-decor__inner">
		<div class="bg-decor__cloth top-0 right-0 size-lg">
			<div class="vertical-parallax">
				<div class="layer">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-10.png" alt="">
				</div>
			</div>
		</div>
		<div class="bg-decor__bubble-dark right-75 top-0 size-md">
			<div class="vertical-parallax">
				<div class="layer" data-depth="0.20">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-13.png" alt="">
				</div>
			</div>
		</div>
		<div class="bg-decor__bubble-light left-75 top-25 size-sm">
			<div class="vertical-parallax">
				<div class="layer" data-depth="0.30" data-speed="4">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/bubble-light.png" alt="">
				</div>
			</div>
		</div>
		<div class="bg-decor__bubble-dark left-75 top-50 size-lg blur">
			<div class="vertical-parallax">
				<div class="layer" data-depth="0.20">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-13.png" alt="">
				</div>
			</div>
		</div>
		<div class="bg-decor__cloth bottom-0 left-0 size-sm">
			<div class="vertical-parallax">
				<div class="layer">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-1.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<section class="padding-wrap pt-60">
		<div class="container-third">
			<div class="default-gird">
				<div class="default-gird__main-column">
					<div class="posts-list-head">
						<div class="posts-list-head__col-1">
							<h1 class="posts-list-head__selected-tag">
								# <?php single_term_title() ?> <?php _e('Blog Tag', 'Nanobot') ?>
							</h1>

							<?php
							$terms = get_terms( [
								'taxonomy' => 'post_tag',
								'hide_empty' => false,
							] );
							?>

							<?php if ($terms): ?>
								<div class="posts-list-head__tags-wrap" data-tags-list>
									<div class="posts-list-head__tags">

										<?php foreach ($terms as $term): ?>
											<a href="<?= get_term_link($term->term_id) ?>"># <?= $term->name ?></a>
										<?php endforeach ?>

									</div>
								</div>
							<?php endif ?>

						</div>
						<div class="posts-list-head__col-2">
							<a href="#" class="link" data-toggle-visible-tags data-button-text="See all tags,Hide all tags">See all tags</a>
							<a href="<?= get_permalink(181) ?>" class="link">All articles</a>
						</div>
					</div>

					<ul class="posts-list">

						<?php
						$paged = get_query_var('paged') ? get_query_var('paged') : 1;
						$args = ['post_type' => 'post', 'tag_id' => get_queried_object_id(), 'posts_per_page' => 5, 'paged' => $paged];
						$wp_query = new WP_Query($args);
						while ($wp_query->have_posts()): $wp_query->the_post();
							?>

							<?php get_template_part('parts/content', 'post') ?>

						<?php endwhile; ?>

					</ul>


                            <script> var this_page = <?= $paged ?>; </script>


                            <div class="blog-bottom">

                                <?php if ($paged < $wp_query->max_num_pages ) { ?>
                                    <div class="blog-bottom__row-1">
                                        <a href="#" class="more_posts2 link" data-base="/tag/<?= get_queried_object()->slug ?>/page/"  data-current="<?= $paged+1 ?>"  data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>'>Load more articles</a>
                                    </div>
                                <?php } ?>
                                <div class="blog-bottom__row-2 pagination-wrap">

                                    <?php  my_pagenavi($paged, $wp_query->max_num_pages, "/tag/". get_queried_object()->slug ."/page/"); ?>


                                </div>
                            </div>


				</div>
			</div>
		</div>
	</section>
</div>

<section class="home-section-ten padding-wrap" data-parallax="">
	<div class="home-section-ten__body container">

		<?php if ($field = get_field('background_1_tag', 'option')): ?>
			<div class="home-section-ten__decor-1">
				<div class="layer" data-depth="0.4">
					<?= wp_get_attachment_image($field['ID'], 'full') ?>
				</div>
			</div>
		<?php endif ?>

		<?php if ($field = get_field('background_2_tag', 'option')): ?>
			<div class="home-section-ten__decor-3">
				<div class="layer">
					<?= wp_get_attachment_image($field['ID'], 'full') ?>
				</div>
			</div>
		<?php endif ?>

		<?php if ($field = get_field('background_3_tag', 'option')): ?>
			<div class="home-section-ten__decor-2">
				<div class="layer" data-depth="0.2">
					<?= wp_get_attachment_image($field['ID'], 'full') ?>
				</div>
			</div>
		<?php endif ?>

		<div class="home-section-ten__inner">

			<?php if ($field = get_field('title_tag', 'option')): ?>
				<p class="home-section-ten__title"><?= $field ?></p>
			<?php endif ?>

			<?php if ($field = get_field('text_tag', 'option')): ?>
				<div class="home-section-ten__text text-content" data-animation-hover-text><?= $field ?></div>
			<?php endif ?>

			<?php if ($field = get_field('link_tag', 'option')): ?>
				<a href="<?= $field['url'] ?>" class="home-section-ten__btn btn-default btn-default--second"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
			<?php endif ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>
