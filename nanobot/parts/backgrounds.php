<div class="bg-decor__inner">

	<?php if ($args['background_1']['image']): ?>
		<div class="bg-decor__cloth<?= $args['background_1']['vertical'] == 'center' ? ' center-y' : ' ' . $args['background_1']['vertical'] . '-' . $args['background_1']['number_vertical'] ?><?= $args['background_1']['horizontal'] == 'center' ? ' center-x' : ' ' . $args['background_1']['horizontal'] . '-' . $args['background_1']['number_horizontal'] ?><?= $args['background_1']['horizontal_mobile'] == 'center' ? ' center-x-mob' : ' ' . $args['background_1']['horizontal_mobile'] . '-' . $args['background_1']['number_horizontal_mobile'] . '-mob' ?><?= $args['background_1']['vertical_mobile'] == 'center' ? ' center-y-mob' : ' ' . $args['background_1']['vertical_mobile'] . '-' . $args['background_1']['number_vertical_mobile'] . '-mob' ?> size-<?= $args['background_1']['size'] ?><?php if($args['background_1']['is_blur']) echo ' blur' ?><?php if($args['background_1']['is_hide_on_mobile']) echo ' d-none-mob' ?>">
			<div class="vertical-parallax">
				<div class="layer" data-depth="0.10" data-speed="12">
					<?= wp_get_attachment_image($args['background_1']['image']['ID'], 'full') ?>
				</div>
			</div>
		</div>
	<?php endif ?>

	<?php if ($args['background_2']['image']): ?>
		<div class="bg-decor__bubble-dark<?= $args['background_2']['vertical'] == 'center' ? ' center-y' : ' ' . $args['background_2']['vertical'] . '-' . $args['background_2']['number_vertical'] ?><?= $args['background_2']['horizontal'] == 'center' ? ' center-x' : ' ' . $args['background_2']['horizontal'] . '-' . $args['background_2']['number_horizontal'] ?><?= $args['background_2']['horizontal_mobile'] == 'center' ? ' center-x-mob' : ' ' . $args['background_2']['horizontal_mobile'] . '-' . $args['background_2']['number_horizontal_mobile'] . '-mob' ?><?= $args['background_2']['vertical_mobile'] == 'center' ? ' center-y-mob' : ' ' . $args['background_2']['vertical_mobile'] . '-' . $args['background_2']['number_vertical_mobile'] . '-mob' ?> size-<?= $args['background_2']['size'] ?><?php if($args['background_2']['is_blur']) echo ' blur' ?><?php if($args['background_2']['is_hide_on_mobile']) echo ' d-none-mob' ?>">
			<div class="vertical-parallax">
				<div class="layer" data-depth="0.15" data-speed="8">
					<?= wp_get_attachment_image($args['background_2']['image']['ID'], 'full') ?>
				</div>
			</div>
		</div>
	<?php endif ?>

	<?php if ($args['background_3']['image']): ?>
		<div class="bg-decor__bubble-light<?= $args['background_3']['vertical'] == 'center' ? ' center-y' : ' ' . $args['background_3']['vertical'] . '-' . $args['background_3']['number_vertical'] ?><?= $args['background_3']['horizontal'] == 'center' ? ' center-x' : ' ' . $args['background_3']['horizontal'] . '-' . $args['background_3']['number_horizontal'] ?><?= $args['background_3']['horizontal_mobile'] == 'center' ? ' center-x-mob' : ' ' . $args['background_3']['horizontal_mobile'] . '-' . $args['background_3']['number_horizontal_mobile'] . '-mob' ?><?= $args['background_3']['vertical_mobile'] == 'center' ? ' center-y-mob' : ' ' . $args['background_3']['vertical_mobile'] . '-' . $args['background_3']['number_vertical_mobile'] . '-mob' ?> size-<?= $args['background_3']['size'] ?><?php if($args['background_3']['is_blur']) echo ' blur' ?><?php if($args['background_3']['is_hide_on_mobile']) echo ' d-none-mob' ?>">
			<div class="vertical-parallax">
				<div class="layer" data-depth="0.25" data-speed="4">
					<?= wp_get_attachment_image($args['background_3']['image']['ID'], 'medium') ?>
				</div>
			</div>
		</div>
	<?php endif ?>

</div>