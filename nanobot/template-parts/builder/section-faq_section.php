<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<div class="bg-decor" data-parallax>
		
		<?php get_template_part('parts/backgrounds', null, ['background_1' => $background_1, 'background_2' => $background_2, 'background_3' => $background_3]) ?>

		<section class="padding-wrap<?php if(!$padding_top) echo ' pt-0'; if(!$padding_bottom) echo ' pb-0'; ?>">
			<div class="container-second">

				<?php if ($title): ?>
					<?php $arrow_class = str_contains($title, 'href=') ? ' with-arrow' : '' ?>
					<?= add_class_paragraph($title, 'title-2 mb-50 mb-md-120' . $arrow_class, 1, true) ?>
				<?php endif ?>

				<?php if ($faq): ?>
					<div class="mb-60 mb-md-80">
						<ul class="staked-list" data-spoller>

							<?php foreach ($faq as $item): ?>
								<li>

									<?php if ($item['question']): ?>
										<?php if ($item['is_h2']): ?>
											<h2 class="staked-list__title" data-spoller-trigger><?= $item['question'] ?></h2>
										<?php else: ?>
											<div class="staked-list__title" data-spoller-trigger><?= $item['question'] ?></div>
										<?php endif ?>
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
	</div>

	<?php if ($faq): ?>
		<script type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@type": "FAQPage",
				"mainEntity": [
					<?php foreach ($faq as $index => $item): ?>
					{
						"@type": "Question",
						"name": "<?= $item['question'] ?>",
						"acceptedAnswer": {
							"@type": "Answer",
							"text": "<?= addcslashes($item['answer'], '"') ?>"
}
}
<?php if($index < count($faq) - 1) echo ',' ?>
<?php endforeach ?>]}
</script>
<?php endif ?>

<?php endif; ?>