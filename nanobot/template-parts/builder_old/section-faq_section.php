<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="padding-wrap">
		<div class="container-third">

			<?php if ($title): ?>
				<h2 class="title-2 with-arrow mb-50 mb-md-120" data-set-width-variable><?= $title ?></h2>
			<?php endif ?>

			<?php if ($faq): ?>
				<div class="mb-60 mb-md-80">
					<ul class="staked-list" data-spoller>

						<?php foreach ($faq as $item): ?>
							<li>

								<?php if ($item['question']): ?>
									<div class="staked-list__title" data-spoller-trigger><?= $item['question'] ?></div>
								<?php endif ?>

								<?php if ($item['answer']): ?>
									<div class="staked-list__content text-content text"><?= $item['answer'] ?></div>
								<?php endif ?>

							</li>
						<?php endforeach ?>

					</ul>
				</div>
			<?php endif ?>

			<?php if ($link): ?>
				<div class="text-center text-md-start">
					<a href="<?= $link['url'] ?>" class="btn-default"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
				</div>
			<?php endif ?>

		</div>
	</section>

	<?php endif; ?>