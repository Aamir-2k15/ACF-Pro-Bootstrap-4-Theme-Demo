<?php
$section = get_row_layout('page_banner_1');
?>
<?php if (!empty($section)) : ?>
    <style>
        .bg-common {
            background-position: 0 7%;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <div class="page-banner bg-common" style="background-image: url('<?php the_sub_field('banner_background'); ?>');">
        <div class="container">
            <div class="banner-wrapper">
                <div class="banner-text">
                    <h1><?php the_sub_field('heading'); ?></h1>
                </div>
            </div>
        </div>

        <?php /*<div class="page-banner-below">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about-banner-below.png" alt="">
        </div> */ ?>
    </div>
<?php endif; ?>