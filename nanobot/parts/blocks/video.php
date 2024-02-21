<?php if ($field = get_field('video')): ?>
    <video<?php if($poster = get_field('poster')) echo ' poster="' . $poster['url'] . '"' ?> playsinline controls crossorigin="anonymous"><source src="<?= $field['url'] ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
    </video>
<?php endif ?>
