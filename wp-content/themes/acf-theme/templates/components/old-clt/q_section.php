<?php
$section = get_row_layout('q_section');
?>
<?php if (!empty($section)) : ?>
    <section class="question-section rel z-90">
        <img src="<?php echo get_template_directory_uri() ?>/images/bg-purple.png" alt="" class="bg">
        <div class="content container">
            <div class="split-col">
                <div class="row">
                    <div class="col-md-12 col-lg-5 mobile-last">
                        <div class="row row-col">
                            <div class="col-md-12">
                                <div class="question-content">
                                    <h1>WHO?</h1>
                                    <?php echo get_sub_field('who'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row row-col">
                            <div class="col-md-12">
                                <div class="question-content">
                                    <h1>Why?</h1>
                                    <?php echo get_sub_field('why'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row row-col">
                            <div class="col-md-12">
                                <div class="question-content">
                                    <h1>Where?</h1>
                                    <?php echo get_sub_field('where'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row row-col">
                            <div class="col-md-12">
                                <div class="question-content">
                                    <h1>When?</h1>
                                    <p><?php echo get_sub_field('when'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $form =  get_sub_field('form');
                    $paypal_form =  get_sub_field('paypal_form'); //dd($form)
                    ?>
                    <?php if (!empty($form)) : ?>
                        <div class="col-md-12 col-lg-7 mobile-first">
                            <div class="performers-form">
                                <div class="header">
                                    <h1>Fill out the form below to <span>BE A PERFORMER</span><b>*</b></h1>
                                    <p>*If you're under 18, please ask a parent/guardian to register on your behalf and fill in form below.</p>
                                    <br>
                                    <?php echo do_shortcode(" . $form  . "); ?>
                                    <?php echo do_shortcode(" . $paypal_form  . "); ?>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="col-lg-6 col-md-12 mobile-first">
                            <div class="clt_community">
                                <h1>Be part of the CLT community...</h1>
                                <ul class="list-unstyled">
                                    <?php $gallery = get_sub_field('gallery');
                                    foreach ($gallery as $img) : ?>
                                        <li>
                                            <img src="<?php echo $img; ?>" alt="">
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row row-col row-how">
                <div class="col-md-12">
                    <div class="question-content">
                        <h1>how?</h1>
                        <?php echo get_sub_field('how'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section><?php endif; ?>