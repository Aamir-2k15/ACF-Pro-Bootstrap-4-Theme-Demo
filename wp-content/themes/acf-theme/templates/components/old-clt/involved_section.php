<?php
$section = get_row_layout('involved_section');
// $field = get_sub_field('field');
?>
<?php if (!empty($section)) : ?>
    <section class="involve-section rel bg-common" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
        <img src="<?php echo get_template_directory_uri() ?>/images/curve-1.png" alt="" class="bg">
        <div class="container">
            <div class="content">
                <div class="header-tag">
                    <img class="bg" src="<?php echo get_template_directory_uri() ?>/images/bg-purple.png" alt="">
                    <?php the_sub_field('content_box'); ?>
                    </p>
                </div>
            </div>
        </div>
        <br><br>
        <?php $icons_section_1 = get_sub_field('icons_section')['0']; ?>
        <?php $icons_section_2 = get_sub_field('icons_section')['1']; ?>
        <div class="row-charity common-row rel">
            <div class="row-button">
                <a href="<?php echo $icons_section_1['call_to_action']['url']; ?>" class="apply"><?php echo $icons_section_1['call_to_action']['title']; ?></a>
            </div>
            <div class="container">
                <div class="common-header">
                    <h1><?php echo $icons_section_1['section_heading']; ?></h1>
                </div>
                <?php $icon_1 = $icons_section_1['icon_box_1']; ?>
                <?php $icon_2 = $icons_section_1['icon_box_2']; ?>
                <?php $icon_3 = $icons_section_1['icon_box_3']; ?>
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="common-col rel">
                            <h2 class="num">1.</h2>
                            <img src="<?php echo $icon_1['icon']; ?>" alt="">
                            <?php echo $icon_1['text']; ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="common-col rel">
                            <h2 class="num">2.</h2>
                            <img src="<?php echo $icon_2['icon']; ?>" alt="">
                            <?php echo $icon_2['text']; ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="common-col rel">
                            <h2 class="num">3.</h2>
                            <img src="<?php echo $icon_3['icon']; ?>" alt="">
                            <?php echo $icon_3['text']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-charity common-row rel">
            <div class="row-button enter">
                <a href="<?php echo $icons_section_2['call_to_action']['url']; ?>" class="enter"><?php echo $icons_section_2['call_to_action']['title']; ?></a>
            </div>
            <div class="container">
                <div class="common-header">
                    <h1><?php echo $icons_section_2['section_heading']; ?></h1>
                </div>
                <div class="row">
                    <?php $icon1 = $icons_section_2['icon_box_1']; ?>
                    <?php $icon2 = $icons_section_2['icon_box_2']; ?>
                    <?php $icon3 = $icons_section_2['icon_box_3']; ?>
                    <div class="col-md-12 col-lg-4">
                        <div class="common-col rel">
                            <h2 class="num">1.</h2>
                            <img src=" <?php echo $icon1['icon']; ?>" alt="">
                            <?php echo $icon1['text']; ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="common-col rel">
                            <h2 class="num">2.</h2>
                            <img src=" <?php echo $icon2['icon']; ?>" alt="">
                            <?php echo $icon2['text']; ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="common-col rel">
                            <h2 class="num">3.</h2>
                            <img src=" <?php echo $icon3['icon']; ?>" alt="">
                            <?php echo $icon3['text']; ?>
                        </div>
                    </div>
                </div>
                <?php $icons_with_links = get_sub_field('icons_with_links'); ?>
                <ul class="list-untyled list-infographic mt-4 pt-4">
                    <?php foreach ($icons_with_links as $single) : ?>
                        <li><a href="<?php echo $single['link'] ?>"><img src="<?php echo $single['image'] ?>" alt=""></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>