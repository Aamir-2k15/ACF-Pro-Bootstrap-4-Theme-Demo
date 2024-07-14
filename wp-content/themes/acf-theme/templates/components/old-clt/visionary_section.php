<?php
$section = get_row_layout('visionary_section');
$field = get_sub_field('field');
?>
<?php if (!empty($section)) : ?>

    <section class="visionary rel">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bg-purple.png" alt="" class="purple bg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/vision-bg.png" alt="" class="vision bg">
        <img src="<?php the_sub_field('image'); ?>" alt="" class="group">
        <div class="container rel cont">
            <div class="link-button">
                <p>How is your user experience? <?php $cta = get_sub_field('call_to_action'); ?>
                <a href="<?php echo $cta['url']; ?>"><?php echo $cta['title']; ?></a></p>
            </div>
            <div class="vision-cont">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="row">

                            <?php $n = 0;
                            $bs = get_sub_field('boxes_section');  ?>
                            <?php foreach ($bs as $box) : $n++; ?>
                            <?php if ($n == 1 || $n == 2) : ?>
                                <div class="col-md-12 col-lg-6">
                                    <div class="common-div split" style="height: 282.8px;">
                                        <?php echo $box['box_content']; ?>
                                    </div>
                                </div>
                                <?php elseif ($n == 3) : ?>
                                    <div class="col-md-12">
                                        <div class="common-div main">
                                            <?php echo $box['box_content']; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>