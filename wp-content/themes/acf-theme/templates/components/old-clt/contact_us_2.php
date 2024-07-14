<?php
$section = get_row_layout('contact_us_2');
?>
<?php if (!empty($section)) : ?>
    <section class="contact-us about-contact bg-common rel" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);" id="contact_us_2">
        <div class="container">
            <div class="header text-left">
                <h1><?php echo get_sub_field('heading'); ?></h1>
            </div>

            <div class="contact-choices">
                <div class="row">
                    <?php $call_to_action =  get_sub_field('call_to_action'); ?>
                    <?php $i = 0;
                    foreach ($call_to_action as $cta) : $i++; ?>
                        <?php if ($i == 1 || $i == 4) : ?>
                            <div class="col-lg-4">
                                <div class="contact-item apply">
                                    <p><?php echo $cta['title']; ?></p>
                                    <a href="<?php echo $cta['link']['url']; ?>"><?php echo $cta['link']['title']; ?></a>
                                </div>
                            </div>

                        <?php elseif ($i == 2 || $i == 5) : ?>
                            <div class="col-lg-4">
                                <div class="contact-item enter">
                                    <p><?php echo $cta['title']; ?></p>
                                    <a href="<?php echo $cta['link']['url']; ?>"><?php echo $cta['link']['title']; ?></a>
                                </div>
                            </div>
                        <?php elseif ($i == 3 || $i == 6) : ?>
                            <div class="col-lg-4">
                                <div class="contact-item vote">
                                    <p><?php echo $cta['title']; ?></p>
                                    <a href="<?php echo $cta['link']['url']; ?>"><?php echo $cta['link']['title']; ?></a>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>


            <div class="contact-thank-you z-over">
                <div class="dog-img">
                    <img src="<?php echo get_sub_field('image'); ?>" alt="">
                </div>

                <div class="charity">
                    <h1><?php echo get_sub_field('heading_2'); ?>
                    </h1>
                    <img class="ty" src="<?php echo get_template_directory_uri(); ?>/images/about/charities-text.png" alt="">
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>