<?php
$section = get_row_layout('hero_section_2');
?>
<?php if (!empty($section)) : ?>
    <section class="page-hero hero-charity rel bg-common" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/performers/header-graphic.jpg'); ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="page-head-title">
                        <h1><?php echo get_sub_field('heading'); ?></h1>
                    </div>
                    <div class="page-head-content rel">
                        <?php echo get_sub_field('content'); ?>
                        <img src="<?php echo get_template_directory_uri() ?>/images/performers/arrow-gold.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-vid">
                        <?php echo get_sub_field('video'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>