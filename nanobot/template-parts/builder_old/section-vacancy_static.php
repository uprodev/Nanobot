<section class="padding-wrap">
	<div class="container-second">

		<?php if ($field = get_field('title_8', 'option')): ?>
			<h2 class="title-lg with-errow-right with-line mb-50"><?= $field ?></h2>
		<?php endif ?>
		
		<div class="row">
			<div class="col-12 col-md-8">
				<div class="row">
					<div class="col-6 mb-40 mb-md-80">

						<?php if ($field = get_field('position_8', 'option')): ?>
							<div class="text-md mb-15 opacity-50"><?php _e('Position', 'Nanobot') ?></div>
							<h3 class="title-3"><?= $field ?></h3>
						<?php endif ?>
						
					</div>
					<div class="col-6 mb-40 mb-md-80">

						<?php if ($field = get_field('division_8', 'option')): ?>
							<div class="text-md mb-15 opacity-50"><?php _e('Division', 'Nanobot') ?></div>
							<h3 class="title-3"><?= $field ?></h3>
						<?php endif ?>
						
					</div>
					<div class="col-12 col-md-6 order-1 order-md-0">
						<div class="text-center text-md-start">

							<?php if ($field = get_field('text_before_link_8', 'option')): ?>
								<div class="text-md mb-15 mb-md-40 opacity-50"><?= $field ?></div>
							<?php endif ?>
							
							<?php if ($field = get_field('link_8', 'option')): ?>
								<a href="<?= $field['url'] ?>" class="btn-default text-uppercase"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
							<?php endif ?>

						</div>
					</div>
					<div class="col-12 col-md-6 mb-60 mb-md-0 font-300 text-md text-md-[2rem] text-content last">

						<?php if ($field = get_field('text_8', 'option')): ?>
							<?= $field ?>
						<?php endif ?>
						
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4"></div>
		</div>
	</div>
</section>