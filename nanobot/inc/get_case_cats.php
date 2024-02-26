<?php 

$parent_cat_id = apply_filters('wpml_object_id', 46, 'category'); 
$terms = get_terms( [
	'taxonomy' => 'category',
	'hide_empty' => false,
	'parent' => $parent_cat_id,
] );

$post_terms = wp_get_object_terms(get_the_ID(), 'category');

$post_terms_ids = [$parent_cat_id];

$child_terms_ids_1 = wp_list_pluck($terms, 'term_id');

$child_terms_ids_2 = [];

$child_term_name_2 = '';

foreach ($child_terms_ids_1 as $child_term_id_1) {
	$child_terms_2 = get_terms( [
		'taxonomy' => 'category',
		'hide_empty' => false,
		'parent' => $child_term_id_1,
	] );
	if ($child_terms_2) {
		foreach ($child_terms_2 as $child_term_2) {
			$child_terms_ids_2[] = $child_term_2->term_id;
		}
	}
}

if ($child_terms_ids_2) {
	foreach ($post_terms as $post_term) {
		if(in_array($post_term->parent, $child_terms_ids_1)) $post_terms_ids[] = $post_term->parent;
		if(in_array($post_term->term_id, $child_terms_ids_2)){
			$post_terms_ids[] = $post_term->term_id;
			$child_term_name_2 = $post_term->name;
		} 
	}
}