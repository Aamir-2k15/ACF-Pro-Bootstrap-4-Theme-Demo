<?php
$section = get_row_layout('faq_section');
?>
<?php if (!empty($section)) : ?>

    <section class="rel faq-section z-90" style="margin-top: 140px;">
        <?php
        $use_background_image  = get_sub_field('use_background_image'); //dd($use_background_image);
        if ($use_background_image == 'Yes') : ?>
            <img src="<?php echo get_template_directory_uri() ?>/images/bg-feature.png" alt="" class="bg-bottom">
            <?php endif; ?>
            <img src="<?php echo get_template_directory_uri() ?>/images/bg-purple.png" alt="" class="bg">
        <div class="container rel">
            <div class="row">
                <div class="col-md-12 col-lg-7 offset-lg-5 our-procedure">
                    <div class="procedure-content">
                        <div class="header text-center">
                            <h1 class="glow_heading"><?php echo get_sub_field('client_logos_heading'); ?></h1>
                            <!-- <img src="<?php echo get_template_directory_uri() ?>/images/procedure-header.png" alt=""> -->
                        </div>
                        <ul class="list-untyled list-brands">
                            <?php $clients = get_sub_field('clients_logos');
                            foreach ($clients as $client) : ?>
                                <li>
                                    <img src="<?php echo $client['url']; ?>" alt="">
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="faq-div">
                        <div class="header">
                            <h1 class="glow_heading"><?php echo get_sub_field('heading'); ?></h1>
                        </div>
                        <ul class="list-unstyled list-faq accordion-list">

                            <?php $count = 0;
                            $faqs = get_sub_field('faqs');
                            foreach ($faqs as $faq) : $count++; ?>
                                <li class="button-li">
                                    <div class="accordion-body">
                                        <button class="toggle-button">
                                            <?php echo $faq['title']; ?>
                                        </button>
                                        <div class="body-content-accor" <?php echo $count > 1 ? 'style="display: none;"' : ""; ?>>
                                            <?php echo $faq['body']; ?>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="button-div"><?php $link = get_sub_field('link'); ?>
                <p>How is your user experience? <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?>.</a></p>
            </div>
        </div>
    </section><?php endif; ?>