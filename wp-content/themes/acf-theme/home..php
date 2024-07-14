<?php
/**
 * The template for displaying archive posts.
 *
 * @package ACFBS
 */

get_header(); ?>
<main role="main">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <h1 class="page-title">Blog Posts</h1>
                <?php
                    the_archive_description( '<div class="archive-description">', '</div>' );
                    ?>
            </header><!-- .page-header -->

            <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
            <div class="card mb-4">
                <div class="card-body">
                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail mb-3">
                        <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
                    </div>
                    <?php endif; ?>
                    <h2 class="card-title"><?php the_title(); ?></h2>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>"
                        class="btn btn-primary"><?php esc_html_e( 'Read More', 'theme-name' ); ?></a>
                </div>
            </div>
            <?php endwhile; ?>

            <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( '&laquo;', 'theme-name' ),
                    'next_text' => __( '&raquo;', 'theme-name' ),
                ) );
                ?>

            <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'theme-name' ); ?></p>
            <?php endif; ?>
        </div><!-- .col-md-8 -->

        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div><!-- .col-md-4 -->
    </div><!-- .row -->
</div><!-- .container -->
</main>
<?php get_footer(); ?>