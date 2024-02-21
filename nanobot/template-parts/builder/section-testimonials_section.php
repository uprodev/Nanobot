<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="home-section-eight padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>" data-parallax>
			<div class="home-section-eight__body container-second">
				<div class="home-section-eight__inner">
					<div class="home-section-eight__col">

						<?php if ($left_title): ?>
							<?php $arrow_class = str_contains($left_title, 'href=') ? ' with-arrow' : '' ?>
							<?= add_class_paragraph($left_title, 'home-section-eight__tittle title-2 title-default-space' . $arrow_class, 1, true) ?>
						<?php endif ?>
						
						<?php if ($description): ?>
							<div class="home-section-eight__text text text-content"><?= $description ?></div>
						<?php endif ?>
						
						<?php if ($reviews_link): ?>
							<a href="<?= $reviews_link['url'] ?>" class="link"<?php if($reviews_link['target']) echo ' target="_blank"' ?>><?= $reviews_link['title'] ?></a>
						<?php endif ?>
						
					</div>
					<div class="home-section-eight__col">
						<div class="testimonial">

							<?php if ($logo): ?>
								<div class="testimonial__logo">
									<?= wp_get_attachment_image($logo['ID'], 'full') ?>
								</div>
							<?php endif ?>
							
							<div class="testimonial__rating">
								<div class="rating" data-rating="<?= $rate ?>">
									<div class="rating__stars rating__stars-1">
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
									</div>
									<div class="rating__stars rating__stars-2">
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
										<div class="rating__star">
											<span class="icon-star-full"></span>
										</div>
									</div>
								</div>
							</div>

							<?php if ($text): ?>
								<div class="testimonial__text"><?= $text ?></div>
							<?php endif ?>
							
							<?php if ($name): ?>
								<div class="testimonial__author"><?= $name ?></div>
							<?php endif ?>
							
							<?php if ($position): ?>
								<div class="testimonial__position"><?= $position ?></div>
							<?php endif ?>
							
						</div>
						
						<?php if ($reviews_link): ?>
							<a href="<?= $reviews_link['url'] ?>" class="link"<?php if($reviews_link['target']) echo ' target="_blank"' ?>><?= $reviews_link['title'] ?></a>
						<?php endif ?>
						
					</div>
				</div>
			</div>
		</section>
	</div>

	<?php endif; ?>