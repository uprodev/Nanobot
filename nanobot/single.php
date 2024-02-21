<?php get_header(); ?>

<?php if ( have_posts() ) :

	get_template_part( 'template-parts/content', 'builder' );

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>

<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "NewsArticle",
		"headline": "<?php the_title() ?>",
		"image": [
			"<?php the_post_thumbnail_url('full') ?>"
		],
		"datePublished": "<?php the_date() ?>",
		"dateModified": "<?php the_modified_date() ?>",
		"author": [{
			"@type": "<?php the_author_meta('user_nicename' , $post->post_author) ?>",
			"name": "<?php the_author_meta('first_name' , $post->post_author) ?> <?php the_author_meta('last_name' , $post->post_author) ?>",
			"url": "<?php the_author_meta('user_url' , $post->post_author) ?>"
		}]
	}
</script>

<?php get_footer(); ?>