<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="padding-wrap">
		<div class="container-second">
			<div class="row gx-5">

				<?php if ($position == 'Right'): ?>
					<div class="col-12 col-md-6"></div>
				<?php endif ?>

				<div class="col-12 col-md-6">

					<?php if ($title): ?>
						<h2 class="title-2 with-arrow mb-40 mb-md-50"><?= $title ?></h2>
					<?php endif ?>
					
					<?php if ($list): ?>
						<ul class="list-step-line">

							<?php foreach ($list as $item): ?>

								<?php if ($item['text']): ?>
									<li>
										<div class="list-step-line__dot"></div>
										<div class="list-step-line__text"><?= $item['text'] ?></div>
									</li>
								<?php endif ?>
								
							<?php endforeach ?>

						</ul>
					<?php endif ?>
					
				</div>
				
				<?php if ($position == 'Left'): ?>
					<div class="col-12 col-md-6"></div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>