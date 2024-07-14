<?php
/**
 * The template for displaying archive pages.
 *
 * @package ACFBS
 */

get_header(); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) : ?>
                <header class="page-header">
                    <h1 class="page-title">
                        <?php
                        if ( is_category() ) :
                            single_cat_title();
                        elseif ( is_tag() ) :
                            single_tag_title();
                        elseif ( is_author() ) :
                            printf( esc_html__( 'Author: %s', 'theme-name' ), '<span class="vcard">' . get_the_author() . '</span>' );
                        elseif ( is_day() ) :
                            printf( esc_html__( 'Day: %s', 'theme-name' ), '<span>' . get_the_date() . '</span>' );
                        elseif ( is_month() ) :
                            printf( esc_html__( 'Month: %s', 'theme-name' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
                        elseif ( is_year() ) :
                            printf( esc_html__( 'Year: %s', 'theme-name' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
                        else :
                            esc_html_e( 'Archives', 'theme-name' );
                        endif;
                        ?>
                    </h1>
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
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php esc_html_e( 'Read More', 'theme-name' ); ?></a>
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

<?php get_footer(); ?>
