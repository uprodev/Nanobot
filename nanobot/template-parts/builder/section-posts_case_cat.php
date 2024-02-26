<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php 
	$parent_cat_id = apply_filters('wpml_object_id', 46, 'category'); 
	$terms = get_terms( [
		'taxonomy' => 'category',
		'hide_empty' => false,
		'parent' => $parent_cat_id,
	] );
	?>

	<?php if ($terms): ?>
		<div class="bg-decor" data-parallax>

			<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

			<section class="padding-wrap mb-40 mb-md-0<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
				<div class="container-second">
					<div class="filter-list" data-filter-list="1">
						<div class="filter-list__head">
							<div class="filter-list__nav filter-list-nav swiper" data-slider="filter-list-nav" data-mobile="false">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<button class="filter-list-nav__title active text-lg font-600" data-filter-nav="*"><?php _e('All', 'Nanobot') ?></button>
									</div>

									<?php foreach ($terms as $term): ?>
										<div class="swiper-slide">
											<div class="filter-list-nav__item">
												<button class="filter-list-nav__title text-lg font-600"><?= $term->name ?></button>

												<?php 
												$child_terms = get_terms( [
													'taxonomy' => 'category',
													'hide_empty' => false,
													'parent' => $term->term_id,
												] );
												?>

												<?php if ($child_terms): ?>
													<div class="filter-list-nav__current-value"><?php _e('All', 'Nanobot') ?></div>
													<ul class="filter-list-nav__list">
														<li>
															<button class="filter-list-nav__list-option" data-filter-nav=".term-<?= $term->term_id ?>"><?php _e('All', 'Nanobot') ?></button>
														</li>

														<?php foreach ($child_terms as $child_term): ?>
															<li>
																<button class="filter-list-nav__list-option" data-filter-nav=".term-<?= $term->term_id ?>.term-<?= $child_term->term_id ?>"><?= $child_term->name ?></button>
															</li>
														<?php endforeach ?>
														
													</ul>
												<?php endif ?>
												
											</div>
										</div>
									<?php endforeach ?>
									
								</div>
							</div>
						</div>

						<?php 
						$args = array(
							'post_type' => 'post', 
							'posts_per_page' => 10,
							'cat' => $parent_cat_id,
							'paged' => get_query_var('paged'),
							'suppress_filters' => true
						);
						$wp_query = new WP_Query($args);
						if($wp_query->have_posts()): 
							?>
							<div class="filter-list__item-sizer"></div>
							<div class="filter-list__item-gutter"></div>
							<div class="filter-list__body" id="response-posts_case_cat" data-filter-body>

								<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>

									<?php require dirname(__FILE__) . '/../../inc/get_case_cats.php' ?>

									<?php get_template_part('parts/content', 'post_case_cat', ['post_terms_ids' => $post_terms_ids, 'child_term_name_2' => $child_term_name_2]) ?>
								<?php endwhile; ?>
								
							</div>

							<?php if ( $wp_query->max_num_pages > 1 ) { ?>
								<script> var this_page = 1; </script>

								<div class="filter-list__foter">
									<div class="button-wrap text-center mt-md-30">
										<a href="#" class="btn-default more_posts_case_cat" data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>'><?php _e('Load more', 'Nanobot') ?></a>
									</div>
								</div>
							<?php } ?>

							<?php 
						endif;
						wp_reset_query(); 
						?>

					</div>
				</section>
			</div>
		<?php endif ?>

		<?php endif; ?>