<?php
$section = get_row_layout('section');
?>
<?php if (!empty($section)) : ?>
    <section class="about-body">
        <div class="about-ele about-left">
            <img src="<?php echo get_template_directory_uri() ?>/images/about/about-left.png" alt="">
        </div>
        <div class="about-ele about-right">
            <img src="<?php echo get_template_directory_uri() ?>/images/about/about-right.png" alt="">
        </div>
        <div class="container">
            <div class="about-head">
                <h1><?php the_sub_field('the_heading'); ?></h1>
            </div>

            <div class="about-text-with-image">
                <div class="row">
                    <div class="col-lg-7">

                        <div class="about-text">
                            <?php echo get_sub_field('the_content'); ?>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <img src="<?php the_sub_field('image'); ?>" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php endif; ?>