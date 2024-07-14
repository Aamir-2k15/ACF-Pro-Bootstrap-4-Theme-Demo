<?php get_header(); ?>
<main role="main" class="mb-4">

	<?php $bg = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/about-banner.jpg'; ?>
	<div class="page-banner bg-common" style="background-image: url('<?php echo $bg; ?>');">
		<div class="container">
			<div class="banner-wrapper">
				<div class="banner-text">
					<h1 style="font-weight:400;"><?php printf(__('Search Results for: "%s" ', ''), '<span style="font-weight:800;">' . get_search_query() . '</span>'); ?></h1>
				</div>
			</div>
		</div>
	</div>

	<section class="page-body mb-4">
		<div class="container mb-4">
			<div class="mb-4 make_visible">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="row border-bottom pt-4 pb-4">
						<?php /* ?><div class="col-md-2">
								<?php if (has_post_thumbnail()) { ?>
									<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
									<a href="<?= the_permalink(); ?>" class="entry__thumb-link pt-2 pb-2">
										<img src="<?php echo $image[0]; ?>" class="img-fluid" />
									</a>
								<?php } ?>
							</div><?php */?>
							<div class="col-md-12">
								<h5 class="pt-3 pb-2 heading-sm-b">
									<a href="<?= the_permalink(); ?>" class="the-link">
										<?php the_title(); ?>
									</a>
								</h5>
								<div class="pt-2 pb-2"><?php the_excerpt(); ?></div>

							</div>
						</div>
						<?php endwhile;
				else :
					get_template_part('templates/404', '404');
				endif;
						?><?php edit_post_link('edit', '<p class="clearfix">', '</p><br/>'); ?>
			</div>
		</div>
	</section>
<div class="mb-4 pb-4 clearfix">&nbsp;</div>
</main>
<?php get_footer(); ?>