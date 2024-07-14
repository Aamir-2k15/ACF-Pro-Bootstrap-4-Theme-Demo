<?php 
$home_hero_section = get_row_layout('home_hero_section');
$main_image = get_sub_field('main_image');
$images_left = get_sub_field('images_left');
$images_right = get_sub_field('images_right');
$buttons = get_sub_field('buttons' );
?>
<?php if (!empty($home_hero_section)) : ?>
    <section class="hero-section">
        <div class="row no-gutters">
            <div class="col-md-4 col-custom">
                <ul class="list-untyled list-img list-left">
                    <?php foreach ($images_left as $img) : ?>
                        <li><img src="<?php echo $img; ?>" alt=""></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-4 col-custom">
                <div class="flex-container-banner">
                    <div class="center-banner">
                        <div class="logo">
                            <img src="<?php echo $main_image; ?>" alt="">
                        </div>
                        <div class="text-banner text-center">
                            <h1><?php the_sub_field('heading_1');?></h1>
                            <p><?php the_sub_field('heading_2');?></p>
                            <ul class="list-untyled">
                                <?php $button_n=0;?>
                                <?php foreach($buttons as $button): $button_n++;?>
                                <li data-id="<?php echo $button_n;?>">
                                    <a href="<?php echo $button['url']?>"><?php echo $button['title']?></a>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-custom">
                <ul class="list-untyled list-img list-right">
                    <?php foreach ($images_right as $img) : ?>
                        <li><img src="<?php echo $img; ?>" alt=""></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>