<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="padding-wrap">
		<div class="container-second">

			<?php if($texts): ?>

				<div class="row gy-5 gy-md-14 gx-10 text font-300 text-content mb-60 mb-md-120">

					<?php foreach ($texts as $item): ?>
						
						<?php if ($item['text']): ?>
							<div class="col-12 col-md-6 last"><?= $item['text'] ?></div>
						<?php endif ?>

					<?php endforeach ?>

				</div>

			<?php endif; ?>

			<?php if ($link): ?>
				<div class="text-center text-md-start">
					<a href="<?= $link['url'] ?>" class="btn-default text-uppercase"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
				</div>
			<?php endif ?>

		</div>
	</section>

	<?php endif; ?>