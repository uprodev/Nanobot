<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($text): ?>
		<section class="padding-wrap">
			<div class="container-second">
				<div class="quote"><?= $text ?></div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>