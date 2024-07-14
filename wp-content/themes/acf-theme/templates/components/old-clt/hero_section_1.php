<?php
$section = get_row_layout('hero_section_1');
?>
<?php if (!empty($section)) : ?>

    <section class="page-hero rel bg-common hero-performers" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/performers/header-graphic.jpg');">
        <div class="container">
            <div class="row row-hero">
                <div class="col-md-12 col-lg-5">
                    <div class="page-head-title">
                        <h1><?php echo get_sub_field('heading');?></h1>
                    </div>
                    <div class="page-head-content rel">
                        <p><?php echo get_sub_field('content');?></p>
                        <img src="<?php echo get_template_directory_uri() ?>/images/performers/arrow-gold.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section><?php endif; ?>