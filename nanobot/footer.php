</main>

<!-- == FOOTER ================== -->
<footer class="footer" data-parallax>
  <div class="footer__body container">

    <?php $images = get_field('backgrounds_footer', 'option');
    if($images): ?>
      <?php foreach($images as $index => $image): ?>

        <div class="footer__decor-<?= $index + 1 ?>">

          <?php if ($index == 0 || $index > 3): ?>
            <div class="vertical-parallax">
              <div class="layer"<?php if($index > 3) echo ' data-depth="0.2"' ?>>
              <?php endif ?>

              <?= wp_get_attachment_image($image['ID'], 'full') ?>

              <?php if ($index == 0 || $index > 3): ?>
              </div>
            </div>
          <?php endif ?>

        </div>

      <?php endforeach; ?>
    <?php endif; ?>

    <div class="footer__inner">
      <div class="footer__nav">

        <?php 
		  $locations = get_nav_menu_locations();
		  ksort($locations);
		  ?>

        <?php 
        foreach ($locations as $key => $location):
          if (str_contains($key, 'footer-')): 
            ?>

            <div class="footer__col">

              <?php if ($field = get_field('parent_link', wp_get_nav_menu_object($location))): ?>
                <div class="footer__title">

                  <?php if ($field['url'] == '#'): ?>
                    <p><?= $field['title'] ?></p>
                  <?php else: ?>
                    <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
                  <?php endif ?>
                </div>
              <?php endif ?>

              <?php wp_nav_menu( array(
                'theme_location'  => $key,
                'container'       => '',
                'items_wrap'      => '<ul class="footer__list">%3$s</ul>'
              ) ); ?>

            </div>

            <?php 
          endif; 
        endforeach; 
        ?>

      </div>
      <div class="footer__bottom">
        <div class="footer__language">
          <?php custom_language_switcher() ?>
        </div>

        <?php if ($field = get_field('link_1_footer', 'option')): ?>
          <a href="<?= $field['url'] ?>" class="footer__link"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
        <?php endif ?>

        <?php if ($field = get_field('link_2_footer', 'option')): ?>
          <a href="<?= $field['url'] ?>" class="footer__link"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
        <?php endif ?>
        
        <?php if( have_rows('socials', 'option') ): ?>

          <div class="footer__social">
            <ul class="social">

              <?php while( have_rows('socials', 'option') ): the_row(); ?>

                <?php if (get_sub_field('icon') && get_sub_field('url')): ?>
                <li>
                  <a href="<?= the_sub_field('url') ?>" target="_blank">
                    <?= wp_get_attachment_image(get_sub_field('icon')['ID'], 'full', false, array('class' => 'img-svg', 'loading' => 'eager')) ?>
                  </a>
                </li>
              <?php endif ?>

            <?php endwhile; ?>

          </ul>
        </div>

      <?php endif; ?>

      <?php if (get_field('link_space', 'option')): ?>
        <a href="<?php the_field('link_space', 'option') ?>" class="footer__logo" target="_blank">

          <?php if ($field = get_field('spacespire_text', 'option')): ?>
            <span><?= $field ?></span>
          <?php endif ?>

          <?php if ($field = get_field('logo_space', 'option')): ?>
            <?= wp_get_attachment_image($field['ID'], 'full', false, array('class' => 'logo-mob')) ?>
          <?php endif ?>

        </a>
      <?php endif ?>
      
    </div>
  </div>
</div>
</footer>
<!-- == // FOOTER ================== -->
</div>
<?php wp_footer(); ?>
</body>
</html>