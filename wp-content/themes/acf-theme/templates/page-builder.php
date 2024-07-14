<?php /* Template Name: Page Builder */ ?>
<?php get_header(); ?>
<main role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates/content-page-builder');?>
			<section class="the_content"><?php  the_content( );?></section>
			<?php endwhile;
	else :
		get_template_part( 'templates/404', '404' );
	endif;
			?><?php edit_post_link('edit', '<p>', '</p><br/>'); ?>
</main>
<?php get_footer(); ?>