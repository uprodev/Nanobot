<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="padding-wrap">
		<div class="container-second">

			<?php if ($title): ?>
				<h2 class="title-lg with-errow-right with-line mb-50"><?= $title ?></h2>
			<?php endif ?>

			<div class="row">
				<div class="col-12 col-md-8">
					<div class="row">
						<div class="col-6 mb-40 mb-md-80">

							<?php if ($position): ?>
								<div class="text-md mb-15 opacity-50"><?php _e('Position', 'Nanobot') ?></div>
								<h3 class="title-3"><?= $position ?></h3>
							<?php endif ?>

						</div>
						<div class="col-6 mb-40 mb-md-80">

							<?php if ($division): ?>
								<div class="text-md mb-15 opacity-50"><?php _e('Division', 'Nanobot') ?></div>
								<h3 class="title-3"><?= $division ?></h3>
							<?php endif ?>

						</div>
						<div class="col-12 col-md-6 order-1 order-md-0">
							<div class="text-center text-md-start">

								<?php if ($text_before_link): ?>
									<div class="text-md mb-15 mb-md-40 opacity-50"><?= $text_before_link ?></div>
								<?php endif ?>

								<?php if ($link): ?>
									<a href="<?= $link['url'] ?>" class="btn-default text-uppercase"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
								<?php endif ?>

							</div>
						</div>
						<div class="col-12 col-md-6 mb-60 mb-md-0 font-300 text-md text-md-[2rem] text-content last">

							<?php if ($text): ?>
								<?= $text ?>
							<?php endif ?>

						</div>
					</div>
				</div>
				<div class="col-12 col-md-4"></div>
			</div>
		</div>
	</section>

	<?php endif; ?>