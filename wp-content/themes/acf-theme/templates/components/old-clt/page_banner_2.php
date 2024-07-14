<?php
$section = get_row_layout('page_banner_2');
?>
<?php if (!empty($section)) : ?>
    <div class="cool-stuff-banner bg-common " style="background-image: url('<?php the_sub_field('banner_background'); ?>');">
        <div class="container">
            <div class="cool-banner-text z-over">
                <h1><?php the_sub_field('heading'); ?></h1>
                <?php the_sub_field('content'); ?>
            </div>
        </div>
        <div class="cool-below">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cool-stuff/banner-bellow.png" alt="">
        </div>
    </div>
<?php endif; ?>