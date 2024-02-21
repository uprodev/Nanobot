<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="padding-wrap">
		<div class="container-second">

			<?php if ($title): ?>
				<h2 class="title-2 with-arrow mb-50 mb-md-100" data-set-width-variable><?= $title ?></h2>
			<?php endif ?>
			
			<?php if ($list): ?>
				<ul class="list-icon">

					<?php foreach ($list as $item): ?>
						<li>

							<?php if ($item['icon']): ?>
								<div class="list-icon__icon">
									<?= wp_get_attachment_image($item['icon']['ID'], 'full', false, array('class' => 'img-svg')) ?>
								</div>
							<?php endif ?>

							<?php if ($item['text']): ?>
								<div class="list-icon__text text-content"><?= $item['text'] ?></div>
							<?php endif ?>
							
						</li>
					<?php endforeach ?>
					
				</ul>
			<?php endif ?>
			
		</div>
	</section>

	<?php endif; ?>