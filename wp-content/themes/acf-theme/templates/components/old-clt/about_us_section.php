<?php
$about_us_section = get_row_layout('about_us_section');
?>
<?php if (!empty($about_us_section)) : ?>
    <?php ?>
    <section class="about-section rel common-section">
        <img src="<?php echo get_template_directory_uri() ?>/images/bg-purple.png" alt="" class="bg">
        <img src="<?php the_sub_field('heading'); ?>" alt="" class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="header">
                        <h1><?php the_sub_field('heading'); ?></h1>
                        <p><?php the_sub_field('subheading'); ?></p>
                    </div>
                    <?php $content = get_sub_field('content');
                    // dd($content);
                    ?>
                    <div class="about-box bg-common rel box-1" style="background-image: url(<?php echo $content['box_1_bg_image']; ?>)">
                        <div>
                            <?php echo $content['content_box_1']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="about-box bg-common rel box-2" style="background-image: url(<?php echo $content['box_2_bg_image']; ?>)">
                        <div>
                            <?php echo $content['content_box_2']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>