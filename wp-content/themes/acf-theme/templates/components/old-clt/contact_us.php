<?php
$section = get_row_layout('contact_us');
?>
<?php if (!empty($section)) : ?>
    <section class="contact-us bg-common rel" style="background-image: url('<?php the_sub_field('background_image'); ?>');" id="contact_us">
        <div class="container">
            <div class="header">
                <h1><?php the_sub_field('heading_1'); ?></h1>
            </div>
            <div class="shape-contact rel ">
                <img src="<?php the_sub_field('image'); ?>" alt="">
                <div class="caption">
                    <p><?php the_sub_field('heading_2'); ?></p>
                    <br><br>
                    <h1><?php the_sub_field('heading_3'); ?></h1>
                    <img src="<?php echo get_template_directory_uri() ?>/images/CLT-style.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="form">
                        <?php $form = get_sub_field('form')[0]; ?>
                        <?php echo do_shortcode("[contact-form-7 id='{$form}' ]"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>