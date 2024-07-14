<?php get_header(); ?>
<main role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $bg = has_post_thumbnail() ? get_the_post_thumbnail_url() : ''; ?>
			<div class="page-banner bg-common" style="background-image: url('<?php echo $bg; ?>');">
				<div class="container">
					<div class="banner-wrapper">
						<div class="banner-text">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>

			<section class="page-body">
				<div class="container">
					<div class="">
						<?php
						the_content();
						?>
						<?php endwhile;
				else :
					get_template_part('templates/404', '404');
				endif;
						?><?php edit_post_link('edit', '<p class="clearfix">', '</p><br/>'); ?>
					</div>
				</div>
			</section>

</main>
<?php get_footer(); ?>