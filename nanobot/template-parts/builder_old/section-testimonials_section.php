<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="home-section-eight padding-wrap" data-parallax>
		<div class="home-section-eight__body container-second">
			<div class="home-section-eight__decor-1">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-12.png" alt="">
				</div>
			</div>
			<div class="home-section-eight__decor-2">
				<div class="layer">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-4.png" alt="">
				</div>
			</div>
			<div class="home-section-eight__decor-3">
				<div class="layer" data-depth="0.2">
					<img src="<?php bloginfo('template_directory'); ?>/img/photo/decor-7.png" alt="">
				</div>
			</div>
			<div class="home-section-eight__inner">
				<div class="home-section-eight__col">

					<?php if ($left_title): ?>
						<h2 class="home-section-eight__tittle title-2 with-arrow title-default-space" data-set-width-variable>
							<?= $left_title ?>
						</h2>
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

	<?php endif; ?>