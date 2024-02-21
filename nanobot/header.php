<?php 
// if ($_GET['update']) {

// 	$json = wp_remote_get('http://nanobot.uprodev.site/wp-admin/admin-ajax.php?action=get_posts_data');
// 	$body = json_decode(wp_remote_retrieve_body( $json ), 1);


// 	foreach ($body as $post_remote_id=>$item) {

// 		echo  $post_remote_id;
// 		$post = get_post($post_remote_id);
// 		$content = get_field('content', $post->ID);
// 		$desc = '';
// 		if ($content) {
// 			foreach ($content as $item) {
// 				if ($item['acf_fc_layout'] == 'description') {
// 					$desc = $item;
// 				}
// 			}
// 		}

// 		$data[$post->ID] = $desc;

// 	}

// 	echo '<pre>';
// 	print_r($data);
// 	die();

// }
?>

<!DOCTYPE html>

<?php 
$locale = get_locale();
switch ($locale) {
	case 'de_DE':
	$lang = 'de';
	break;
	case 'fr_FR':
	$lang = 'fr';
	break;
	
	default:
	$lang = 'en';
	break;
}
?>

<html lang="<?= $lang ?>">
<head>
	<meta charset="UTF-8">
	<?php wp_head(); ?>
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php $current_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>
	<link rel="canonical" href="<?= strstr($current_link, '?', true) ?: $current_link ?>" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<style>
		body.page-is-load ._preload-body {
			opacity: 0;
			visibility: hidden;
		}

		._preload-body {
			background-color: #000;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 999;
			display: flex;
			justify-content: center;
			align-items: center;
			-webkit-transition: all .6s ease .2s;
			-o-transition: all .6s ease .2s;
			transition: all .6s ease .2s;
		}

		.lds-grid {
			display: inline-block;
			position: relative;
			width: 80px;
			height: 80px;
		}

		.lds-grid div {
			position: absolute;
			width: 16px;
			height: 16px;
			border-radius: 50%;
			background: #fff;
			animation: lds-grid 1.2s linear infinite;
		}

		.lds-grid div:nth-child(1) {
			top: 8px;
			left: 8px;
			animation-delay: 0s;
		}

		.lds-grid div:nth-child(2) {
			top: 8px;
			left: 32px;
			animation-delay: -0.4s;
		}

		.lds-grid div:nth-child(3) {
			top: 8px;
			left: 56px;
			animation-delay: -0.8s;
		}

		.lds-grid div:nth-child(4) {
			top: 32px;
			left: 8px;
			animation-delay: -0.4s;
		}

		.lds-grid div:nth-child(5) {
			top: 32px;
			left: 32px;
			animation-delay: -0.8s;
		}

		.lds-grid div:nth-child(6) {
			top: 32px;
			left: 56px;
			animation-delay: -1.2s;
		}

		.lds-grid div:nth-child(7) {
			top: 56px;
			left: 8px;
			animation-delay: -0.8s;
		}

		.lds-grid div:nth-child(8) {
			top: 56px;
			left: 32px;
			animation-delay: -1.2s;
		}

		.lds-grid div:nth-child(9) {
			top: 56px;
			left: 56px;
			animation-delay: -1.6s;
		}

		@keyframes lds-grid {

			0%,
			100% {
				opacity: 1;
			}

			50% {
				opacity: 0.5;
			}
		}
	</style>

	<script>
		window.addEventListener('DOMContentLoaded', () => {
			let script = document.createElement('script');
			script.src = "/wp-content/themes/nanobot/js/async.min.js";
			document.body.append(script);
			script.onload = () => {
				const lazyScripts = new LazyScripts();
				lazyScripts.init();
			}
		});
	</script>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="_preload-body">
		<div class="lds-grid"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
	</div>
	<!-- == TOP LINE ================== -->
	<div class="main-wrapper">
		<header class="header " data-header data-popup="add-right-padding">
			<div class="container">
				<div class="header__body">

					<?php if ($field = get_field('logo_header', 'option')): ?>
						<div class="header__logo">
							<a href="<?php echo get_home_url(); ?>">
								<?= wp_get_attachment_image($field['ID'], 'full') ?>
							</a>
						</div>
					<?php endif ?>

					<?php if ($field = get_field('book_a_call_header', 'option')): ?>
						<a href="<?= $field['url'] ?>" class="header__btn"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
					<?php endif ?>

					<div class="header__burger burger" data-action="toggle-menu">
						<span class="burger__cross"></span>
						<span class="burger__cross"></span>
					</div>
				</div>
			</div>
		</header>

		<div class="header-menu" data-menu>
			<div class="header-menu__body container">
				<nav class="menu">
					<div class="menu__desk">
						<div class="menu__tabs" data-tabs>
							<div class="menu__tabs-nav">

								<?php 
								$locations = get_nav_menu_locations(); 
								ksort($locations);
								?>
						
								<?php 
								
								
								$counter = 1;
								foreach ($locations as $key => $location):
									if (str_contains($key, 'header-')): 
										?>

										<a href="#"<?php if($counter == 1) echo ' class="tab-active"' ?> data-tab-trigger="<?= $counter ?>"><?= wp_get_nav_menu_object($location)->name ?></a>

										<?php 
									endif; 
									$counter++;
								endforeach; 
								?>
								
							</div>

							<?php 
							$counter = 1;
							foreach ($locations as $key => $location):
								if (str_contains($key, 'header-')): 
									?>

									<div class="menu__tabs-content" data-tab-content="<?= $counter ?>">

										<?php wp_nav_menu( array(
											'theme_location'  => $key,
											'container'       => '',
											'items_wrap'      => '<ul class="sub-menu">%3$s</ul>'
										) ); ?>

									</div>

									<?php 
								endif; 
								$counter++;
							endforeach; 
							?>

						</div>
					</div>
					<div class="menu__mob">
						<ul class="menu__list">

							<?php 
							$counter = 1;
							foreach ($locations as $key => $location):
								if (str_contains($key, 'header-')): 
									?>

									<li class="menu-item-has-children">
										<a class="menu__link" href="#"><?= wp_get_nav_menu_object($location)->name ?></a>

										<?php wp_nav_menu( array(
											'theme_location'  => $key,
											'container'       => '',
											'items_wrap'      => '<ul class="sub-menu">%3$s</ul>'
										) ); ?>

									</li>
									
									<?php 
								endif; 
								$counter++;
							endforeach; 
							?>

						</ul>
					</div>

				</nav>

				<?php if( have_rows('socials', 'option') ): ?>

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

				<?php endif; ?>

			</div>
		</div>
		<!-- == // TOP LINE ================== -->

		<main class="_page<?= is_front_page() ? ' home-page' : ' _padding-top' ?>">