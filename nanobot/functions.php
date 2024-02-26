<?php

// show_admin_bar( false );


function load_style_script(){
	//wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');
	wp_enqueue_style('styles', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('vendors', get_template_directory_uri() . '/js/vendors.min.js');
	wp_enqueue_script('app', get_template_directory_uri() . '/js/app.min.js');
	wp_enqueue_script('add', get_template_directory_uri() . '/js/add.js', array(), time(), true);
}



add_action('wp_enqueue_scripts', 'load_style_script');



add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header-1' => 'Header menu-1',
		'header-2' => 'Header menu-2',
		'header-3' => 'Header menu-3',
		'header-4' => 'Header menu-4',
		'header-5' => 'Header menu-5',
		'header-6' => 'Header menu-6',
		'footer-1' => 'Footer menu-1',
		'footer-2' => 'Footer menu-2',
		'footer-3' => 'Footer menu-3',
		'footer-4' => 'Footer menu-4',
		'footer-5' => 'Footer menu-5',
		'footer-6' => 'Footer menu-6',
		'footer-7' => 'Footer menu-7',
	) );
});



add_theme_support( 'title-tag' );
add_theme_support('html5');
add_theme_support( 'post-thumbnails' );


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Main settings',
		'menu_title'	=> 'Theme options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


add_filter('wpcf7_autop_or_not', '__return_false');


function override_mce_options($initArray) {
	$opts = '*[*]';
	$initArray['valid_elements'] = $opts;
	$initArray['extended_valid_elements'] = $opts;
	return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');



add_filter( 'nav_menu_link_attributes', 'nav_link_filter', 10, 4 );
function nav_link_filter( $atts, $item, $args, $depth ){
	if (str_contains($args->theme_location, 'header-')) {
		$atts['class'] = 'sub-menu__link';
	}
	return $atts;
}



function custom_language_switcher(){
	$languages = icl_get_languages('skip_missing=0&orderby=id&order=desc');
	if(!empty($languages)){

		$missing = 0;
		foreach($languages as $index => $language){
			if ($language['missing'] === 1) $missing++;
		}

		if ($missing < count($languages) - 1) {
			foreach($languages as $index => $language) {
				if ($language['missing'] !== 1) {
					if($language['active'] === '1') echo '<span class="active">' . $language['language_code'] . '</span>';
					else echo '<span><a href="' . $language['url'] . '">' . $language['language_code'] . '</a></span>';
				}
			}
		}

	}
}



add_filter('bcn_breadcrumb_title', 'my_breadcrumb_title_swapper', 3, 10);
function my_breadcrumb_title_swapper($title, $type, $id)
{
	if(in_array('home', $type))
	{
		$title = 'Main';
	}
	return $title;
}



add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more) {
	global $post;
	return '';
}



add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'quote_nano',
			'title'             => __('Quote Nanobot'),
			'description'       => __('Add quote'),
			'render_template'   => 'parts/blocks/quote.php',
			'category'          => 'common',
			'post_types'        => array('post'),
		));
		acf_register_block_type(array(
			'name'              => 'image_nano',
			'title'             => __('Image Nanobot'),
			'description'       => __('Add image'),
			'render_template'   => 'parts/blocks/image.php',
			'category'          => 'common',
			'post_types'        => array('post'),
		));
		acf_register_block_type(array(
			'name'              => 'iframe_video_nano',
			'title'             => __('Iframe Video Nanobot'),
			'description'       => __('Add iframe video'),
			'render_template'   => 'parts/blocks/iframe.php',
			'category'          => 'common',
			'post_types'        => array('post'),
		));
		acf_register_block_type(array(
			'name'              => 'video_nano',
			'title'             => __('Video Nanobot'),
			'description'       => __('Add video'),
			'render_template'   => 'parts/blocks/video.php',
			'category'          => 'common',
			'post_types'        => array('post'),
		));
	}
}



add_action('wp_ajax_more_posts', 'more_posts');
add_action('wp_ajax_nopriv_more_posts', 'more_posts');
function more_posts() {
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1;

	$query = new WP_Query( $args );
	ob_start();
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();


			get_template_part('parts/content', 'post');

		}

		$posts = ob_get_clean();
	}

	ob_start();
	my_pagenavi($_POST['current'], $_POST['max'], $_POST['base']);
	$my_pagenavi = ob_get_clean();

	wp_send_json([
		'posts'=> $posts,
		'pagenavi' => $my_pagenavi
	]);
}



add_action('wp_ajax_more_posts_case_cat', 'more_posts_case_cat');
add_action('wp_ajax_nopriv_more_posts_case_cat', 'more_posts_case_cat');
function more_posts_case_cat() {
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1;
	$args['post_status'] = 'publish';

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) { 
			$query->the_post();

			require dirname(__FILE__) . '/inc/get_case_cats.php';

			get_template_part('parts/content', 'post_case_cat', ['post_terms_ids' => $post_terms_ids, 'child_term_name_2' => $child_term_name_2]);

		}
		die();
	}
}



function add_class_paragraph ($string, $class, $is_opacity = 1, $is_width_variable = false, $is_number = '') {

	$opacity = $is_opacity == 1 ? '' : ' style="opacity: ' . $is_opacity . ';"';
	$width_variable = $is_width_variable ? ' data-set-width-variable' : '';
	$number = $is_number == '' ? '' : ' data-num="' . $is_number . '"';

	if (str_contains($string, '<h')) {
		foreach (range(1,6) as $i) {
			$from[] = "<h$i";
			$to[] = '<h'. $i .' class="'. $class . '"' . $opacity . $width_variable . $number;
		}
	} else{
		$from[] = "<p";
		$to[] = '<p class="'. $class . '"' . $opacity . $width_variable . $number;
	}

	return str_replace ($from , $to   ,$string );

}



remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );


/**
 * Image with animation shortcode.
 *
 * @since 1.0
 */
function nectar_image_with_animation($atts, $content = null) {

	extract(shortcode_atts(array(
		"animation" => 'Fade In',
		"delay" => '0',
		"image_url" => '',
		'alt' => '',
		'margin_top' => '',
		'margin_right' => '',
		'margin_bottom' => '',
		'margin_left' => '',
		'alignment' => 'left',
		'border_radius' => '',
		'img_link_target' => '_self',
		'img_link' => '',
		'img_link_large' => '',
		'box_shadow' => 'none',
		'box_shadow_direction' => 'middle',
		'max_width' => '100%',
		'el_class' => ''), $atts));

	$image_url        = apply_filters('wpml_object_id', $image_url, 'attachment');
	$parsed_animation = str_replace(" ","-",$animation);

	(!empty($alt)) ? $alt_tag = $alt : $alt_tag = null;

	$image_width  = '100';
	$image_height = '100';
	$image_srcset = null;

	if(preg_match('/^\d+$/',$image_url)){

		$image_src = wp_get_attachment_image_src($image_url, 'full');

		if (function_exists('wp_get_attachment_image_srcset')) {

			$image_srcset_values = wp_get_attachment_image_srcset($image_url, 'full');
			if($image_srcset_values) {
				$image_srcset = 'srcset="';
				$image_srcset .= $image_srcset_values;
				$image_srcset .= '" sizes="100vw"';
			}
		}

		$image_meta = wp_get_attachment_metadata($image_url);
		if(!empty($image_meta['width'])) {
			$image_width = $image_meta['width'];
		}
		if(!empty($image_meta['height'])) {
			$image_height = $image_meta['height'];
		}

		$wp_img_alt_tag = get_post_meta( $image_url, '_wp_attachment_image_alt', true );
		if(!empty($wp_img_alt_tag)) {
			$alt_tag = $wp_img_alt_tag;
		}
		$image_url = $image_src[0];

	}

	$margins = '';
	if(!empty($margin_top)) {

		if(strpos($margin_top,'%') !== false) {
			$margins .= 'margin-top: '.intval($margin_top).'%; ';
		} else {
			$margins .= 'margin-top: '.intval($margin_top).'px; ';
		}

	}
	if(!empty($margin_right)) {

		if(strpos($margin_right,'%') !== false) {
			$margins .= 'margin-right: '.intval($margin_right).'%; ';
		} else {
			$margins .= 'margin-right: '.intval($margin_right).'px; ';
		}

	}
	if(!empty($margin_bottom)) {

		if(strpos($margin_bottom,'%') !== false) {
			$margins .= 'margin-bottom: '.intval($margin_bottom).'%; ';
		} else {
			$margins .= 'margin-bottom: '.intval($margin_bottom).'px; ';
		}

	}
	if(!empty($margin_left)) {

		if(strpos($margin_left,'%') !== false) {
			$margins .= 'margin-left: '.intval($margin_left).'%;';
		} else {
			$margins .= 'margin-left: '.intval($margin_left).'px;';
		}

	}

	$margin_style_attr = '';

	if(!empty($margins)) {
		$margin_style_attr = 'style="'.$margins.'"';
	}


  // Attributes applied to img-with-animation-wrap.
	$wrap_image_attrs_escaped  = 'data-max-width="'.esc_attr($max_width).'" ';
	$wrap_image_attrs_escaped .= 'data-border-radius="'.esc_attr($border_radius).'"';

  // Attributes applied to img.
	$image_attrs_escaped  = 'data-shadow="'.esc_attr($box_shadow).'" ';
	$image_attrs_escaped .= 'data-shadow-direction="'.esc_attr($box_shadow_direction).'" ';
	$image_attrs_escaped .= 'data-delay="'.esc_attr($delay).'" ';
	$image_attrs_escaped .= 'height="'.esc_attr($image_height).'" ';
	$image_attrs_escaped .= 'width="'.esc_attr($image_width).'" ';
	$image_attrs_escaped .= 'data-animation="'.esc_attr(strtolower($parsed_animation)).'" ';
	$image_attrs_escaped .= 'src="'.esc_url($image_url).'" ';
	$image_attrs_escaped .= 'alt="'.esc_attr($alt_tag).'" ';
	$image_attrs_escaped .= $image_srcset;
	$image_attrs_escaped .= $margin_style_attr;



	if( !empty($img_link) || !empty($img_link_large) ){

		if( !empty($img_link) && empty($img_link_large) ) {
      // Link image to larger version.
			return '<div class="img-with-aniamtion-wrap '.esc_attr($alignment).'" '.$wrap_image_attrs_escaped.'>
			<div class="inner">
			<a href="'.esc_url($img_link).'" target="'.esc_attr($img_link_target).'" class="'.esc_attr($alignment).'">
			<img class="img-with-animation '.esc_attr($el_class).'" '.$image_attrs_escaped.' />
			</a>
			</div>
			</div>';

		} elseif(!empty($img_link_large)) {
      // Regular link image.
			return '<div class="img-with-aniamtion-wrap '.esc_attr($alignment).'" '.$wrap_image_attrs_escaped.'>
			<div class="inner">
			<a href="'.esc_url($image_url).'" class="pp '.esc_attr($alignment).'">
			<img class="img-with-animation '.esc_attr($el_class).'" '.$image_attrs_escaped.' />
			</a>
			</div>
			</div>';
		}

	} else {
    // No link image.
		return '<div class="img-with-aniamtion-wrap '.esc_attr($alignment).'" '.$wrap_image_attrs_escaped.'>
		<div class="inner">
		<img class="img-with-animation '.esc_attr($el_class).'" '.$image_attrs_escaped.' />
		</div>
		</div>';
	}

}


add_shortcode('image_with_animation', 'nectar_image_with_animation');

/**
 * Heading shortcode.
 *
 * @since 1.0
 */
function nectar_heading($atts, $content = null) {

	extract(shortcode_atts(array(
		"title" => 'Title',
		"subtitle" => 'Subtitle'), $atts));

	$subtitle_holder = null;

	if($subtitle !== 'Subtitle') {
		$subtitle_holder = '<p>'.wp_kses_post($subtitle).'</p>';
	}
	return'
	<div class="col span_12 section-title text-align-center extra-padding">
	<h2>'.wp_kses_post($content).'</h2>'. $subtitle_holder .'</div><div class="clear"></div>';
}

add_shortcode('heading', 'nectar_heading');

/**
 * video
 *
 * @since 1.0
 */

function nectar_video_lightbox_shc($atts, $content = null) {

	extract(shortcode_atts(array(
		"link_style" => "play_button",
		'hover_effect' => 'default',
		"font_style" => "p",
		"video_url" => '#',
		"link_text" => "",
		"play_button_color" => "default",
		"nectar_button_color" => "default",
		'nectar_play_button_color' => 'Accent-Color',
		'image_url' => '',
		'border_radius' => 'none',
		'play_button_size' => 'default',
		'box_shadow' => ''), $atts));

	$extra_attrs   = ($link_style === 'nectar-button') ? 'data-color-override="false"': null;

	$the_link_text_escaped = ($link_style === 'nectar-button') ? wp_kses_post($link_text) : '<span class="play"><span class="inner-wrap"><svg version="1.1"
	xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="600px" height="800px" x="0px" y="0px" viewBox="0 0 600 800" enable-background="new 0 0 600 800" xml:space="preserve"><path fill="none" d="M0-1.79v800L600,395L0-1.79z"></path> </svg></span></span>';

	$the_color     = ($link_style === 'nectar-button') ? $nectar_button_color : $play_button_color;

	if( $link_style === 'play_button_with_text' ) {
		$the_color = $nectar_play_button_color;
	}

	if( $link_style == 'play_button_2' ) {

		$image = null;

		if( !empty($image_url) ) {

			if( !preg_match('/^\d+$/',$image_url) ){
				$image = '<img src="'.esc_url($image_url).'" alt="'. esc_html__('video preview', 'salient-core') .'" />';
			} else {
				$image = wp_get_attachment_image($image_url, 'full');
			}
		}

		$content .= '<div class="nectar-video-box" data-color="'.esc_attr(strtolower($nectar_play_button_color)).'" data-play-button-size="'.esc_attr($play_button_size).'" data-border-radius="'.esc_attr($border_radius).'" data-hover="'.esc_attr($hover_effect).'" data-shadow="'.esc_attr($box_shadow).'"><div class="inner-wrap"><a href="'.esc_url($video_url).'" class="full-link pp"></a>'. $image;
	}

	$pbwt_escaped = ($link_style === 'play_button_with_text') ? '<span class="link-text"><'.esc_html($font_style).'>'.wp_kses_post($link_text).'</'.esc_html($font_style).'></span>' : null;

	$content .= '<a href="'.esc_url($video_url).'" '.$extra_attrs.' data-color="'.esc_attr(strtolower($the_color)).'" class="'.esc_attr($link_style).' large nectar_video_lightbox pp">'.$the_link_text_escaped .$pbwt_escaped.'</a>';

	if( $link_style === 'play_button_2' ) {
		$content .= '</div></div>';
	}

	return $content;
}


add_shortcode('nectar_video_lightbox', 'nectar_video_lightbox_shc');




function my_pagenavi($current, $max, $base) {
	global $wp_query;

    $big = 999999999; //

    $args = array(
    	'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    	'format'  => '',
    	'type' => 'array',
    	'mid_size' => 1,
    	'end_size' => 1,
    	'prev_next' => false,
    	'current' => max( 1, $current-1 ),
    	'total'   => $max,
    );

    $result = paginate_links( $args );

//    if(is_tag()) $base = '/tag/page/';
//    elseif(is_category()) $base = '/category/page/';
//    else $base = '/blog/page/';


    ?>

    <ul class="pagination">
    	<?php foreach ($result as $page) {
    		$page = (int)strip_tags($page);
    		?>

    		<?php if (0 == trim($page)) { ?>
    			<li class="dots" >
    				...
    			</li>
    		<?php } else  { ?>

    			<li data="<?= $page ?>" class="page-<?= $page  ?> <?= $page == $current ? 'curren-page' : '' ?>">
    				<a href="<?= get_home_url() . $base . $page ?>" class="pagination__item"><?= $page ?></a>
    			</li>
    		<?php } ?>
    	<?php } ?>

    </ul>

    <?php
}

// Теперь, где нужно вывести пагинацию используем
// my_pagenavi();
