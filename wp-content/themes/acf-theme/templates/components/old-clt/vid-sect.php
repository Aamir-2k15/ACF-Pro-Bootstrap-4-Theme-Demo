<?php
$featured_performers = get_row_layout('featured_performers');
// $field = get_sub_field('field');
//heading_1
?>

<?php if (!empty($featured_performers)) : ?>
    <section class="video-section rel">
        <div class="bg">
            <img src="<?php echo get_template_directory_uri() ?>/images/bg-bonus.png" alt="" class="header-bg">
            <div class="content-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="<?php echo get_sub_field('icon'); ?>" alt="" class="bonus-star">
                        </div>
                        <div class="col-md-7 flex-col">
                            <p><?php echo get_sub_field('heading_1'); ?></p>
                            <h1><?php echo get_sub_field('heading_2'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-content">
            <div class="container">
                <div class="featured-video">
                    <ul class="owl-carousel list-unstyled">
                        <?php $slides = get_sub_field('slide'); ?>
                        <?php foreach ($slides as $slide) : ?>
                            <li class="main-video rel item">
                                <img src="<?php echo  $slide['image'] ?>" alt="">
                                <div class="row no-gutters">
                                    <div class="col-md-12 col-lg-7 offset-lg-5">
                                        <div class="featured">
                                            <h1><?php echo  $slide['heading_1'] ?></h1>
                                            <p><?php echo  $slide['heading_2'] ?></p>
                                            <h2><?php echo  $slide['heading_3'] ?></h2>
                                            <div class="video-play text-right">
                                                <a href="<?php echo  $slide['link'] ?>">Watch their video <i class="fa fa-youtube-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
                <div class="video-list">
                    <h1 class="header"><?php echo get_sub_field('heading');?></h1>
                    <ul class="list-unstyled list-video row">

                        <li class="col-md-6 col-lg-4">
                            <div class="video-box bg-common" style="background-image: url(images/home/video-thumbnail.jpg);">
                                <div class="header-top">
                                    <img src="images/cgt-logo.png" alt="" class="cgt-logo">
                                    <ul class="list-untyled list-share">
                                        <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/instagram.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/pinterest.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/share.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="button abs">
                                    <a href="#" class="fa fa-youtube-play"></a>
                                </div>
                                <div class="footer-tab">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1 class="name">
                                                Michelle Lee
                                            </h1>
                                            <h2 class="role">
                                                Singer/Songwriter
                                            </h2>
                                        </div>
                                        <div class="col-6">
                                            <div class="count-vote">
                                                <h1 class="vote-count"><span>1,920</span> Votes</h1>
                                                <img src="images/up-arrow.png" alt="" class="arrow-up">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                    <div class="subscribe-button rel">
                        <a href="#" class="bonus-price">
                            <img src="images/bonus-price.png" alt="">
                        </a>
                        <div class="common-input-btn">
                            <input type="submit" value="Subscribe for new videos">
                        </div>
                    </div>
                </div>
                <div class="video-list">
                    <h1 class="header">Most Popular</h1>
                    <ul class="list-unstyled list-video row">
                        <li class="col-md-6 col-lg-4">
                            <div class="video-box bg-common" style="background-image: url(images/home/video-thumbnail.jpg);">
                                <div class="header-top">
                                    <img src="images/cgt-logo.png" alt="" class="cgt-logo">
                                    <ul class="list-untyled list-share">
                                        <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/instagram.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/pinterest.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/share.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="button abs">
                                    <a href="#" class="fa fa-youtube-play"></a>
                                </div>
                                <div class="footer-tab">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1 class="name">
                                                Michelle Lee
                                            </h1>
                                            <h2 class="role">
                                                Singer/Songwriter
                                            </h2>
                                        </div>
                                        <div class="col-6">
                                            <div class="count-vote">
                                                <h1 class="vote-count"><span>1,920</span> Votes</h1>
                                                <img src="images/up-arrow.png" alt="" class="arrow-up">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6 col-lg-4">
                            <div class="video-box bg-common" style="background-image: url(images/home/video-thumbnail.jpg);">
                                <div class="header-top">
                                    <img src="images/cgt-logo.png" alt="" class="cgt-logo">
                                    <ul class="list-untyled list-share">
                                        <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/instagram.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/pinterest.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/share.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="button abs">
                                    <a href="#" class="fa fa-youtube-play"></a>
                                </div>
                                <div class="footer-tab">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1 class="name">
                                                Michelle Lee
                                            </h1>
                                            <h2 class="role">
                                                Singer/Songwriter
                                            </h2>
                                        </div>
                                        <div class="col-6">
                                            <div class="count-vote">
                                                <h1 class="vote-count"><span>1,920</span> Votes</h1>
                                                <img src="images/up-arrow.png" alt="" class="arrow-up">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6 col-lg-4">
                            <div class="video-box bg-common" style="background-image: url(images/home/video-thumbnail.jpg);">
                                <div class="header-top">
                                    <img src="images/cgt-logo.png" alt="" class="cgt-logo">
                                    <ul class="list-untyled list-share">
                                        <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/instagram.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/pinterest.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/share.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="button abs">
                                    <a href="#" class="fa fa-youtube-play"></a>
                                </div>
                                <div class="footer-tab">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1 class="name">
                                                Michelle Lee
                                            </h1>
                                            <h2 class="role">
                                                Singer/Songwriter
                                            </h2>
                                        </div>
                                        <div class="col-6">
                                            <div class="count-vote">
                                                <h1 class="vote-count"><span>1,920</span> Votes</h1>
                                                <img src="images/up-arrow.png" alt="" class="arrow-up">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6 col-lg-4">
                            <div class="video-box bg-common" style="background-image: url(images/home/video-thumbnail.jpg);">
                                <div class="header-top">
                                    <img src="images/cgt-logo.png" alt="" class="cgt-logo">
                                    <ul class="list-untyled list-share">
                                        <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/instagram.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/pinterest.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/share.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="button abs">
                                    <a href="#" class="fa fa-youtube-play"></a>
                                </div>
                                <div class="footer-tab">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1 class="name">
                                                Michelle Lee
                                            </h1>
                                            <h2 class="role">
                                                Singer/Songwriter
                                            </h2>
                                        </div>
                                        <div class="col-6">
                                            <div class="count-vote">
                                                <h1 class="vote-count"><span>1,920</span> Votes</h1>
                                                <img src="images/up-arrow.png" alt="" class="arrow-up">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6 col-lg-4">
                            <div class="video-box bg-common" style="background-image: url(images/home/video-thumbnail.jpg);">
                                <div class="header-top">
                                    <img src="images/cgt-logo.png" alt="" class="cgt-logo">
                                    <ul class="list-untyled list-share">
                                        <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/instagram.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/pinterest.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/share.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="button abs">
                                    <a href="#" class="fa fa-youtube-play"></a>
                                </div>
                                <div class="footer-tab">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1 class="name">
                                                Michelle Lee
                                            </h1>
                                            <h2 class="role">
                                                Singer/Songwriter
                                            </h2>
                                        </div>
                                        <div class="col-6">
                                            <div class="count-vote">
                                                <h1 class="vote-count"><span>1,920</span> Votes</h1>
                                                <img src="images/up-arrow.png" alt="" class="arrow-up">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6 col-lg-4">
                            <div class="video-box bg-common" style="background-image: url(images/home/video-thumbnail.jpg);">
                                <div class="header-top">
                                    <img src="images/cgt-logo.png" alt="" class="cgt-logo">
                                    <ul class="list-untyled list-share">
                                        <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/instagram.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/pinterest.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/share.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="button abs">
                                    <a href="#" class="fa fa-youtube-play"></a>
                                </div>
                                <div class="footer-tab">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1 class="name">
                                                Michelle Lee
                                            </h1>
                                            <h2 class="role">
                                                Singer/Songwriter
                                            </h2>
                                        </div>
                                        <div class="col-6">
                                            <div class="count-vote">
                                                <h1 class="vote-count"><span>1,920</span> Votes</h1>
                                                <img src="images/up-arrow.png" alt="" class="arrow-up">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6 col-lg-4">
                            <div class="video-box bg-common" style="background-image: url(images/home/video-thumbnail.jpg);">
                                <div class="header-top">
                                    <img src="images/cgt-logo.png" alt="" class="cgt-logo">
                                    <ul class="list-untyled list-share">
                                        <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/instagram.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/pinterest.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/share.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="button abs">
                                    <a href="#" class="fa fa-youtube-play"></a>
                                </div>
                                <div class="footer-tab">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1 class="name">
                                                Michelle Lee
                                            </h1>
                                            <h2 class="role">
                                                Singer/Songwriter
                                            </h2>
                                        </div>
                                        <div class="col-6">
                                            <div class="count-vote">
                                                <h1 class="vote-count"><span>1,920</span> Votes</h1>
                                                <img src="images/up-arrow.png" alt="" class="arrow-up">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6 col-lg-4">
                            <div class="video-box bg-common" style="background-image: url(images/home/video-thumbnail.jpg);">
                                <div class="header-top">
                                    <img src="images/cgt-logo.png" alt="" class="cgt-logo">
                                    <ul class="list-untyled list-share">
                                        <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/instagram.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/pinterest.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/share.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="button abs">
                                    <a href="#" class="fa fa-youtube-play"></a>
                                </div>
                                <div class="footer-tab">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1 class="name">
                                                Michelle Lee
                                            </h1>
                                            <h2 class="role">
                                                Singer/Songwriter
                                            </h2>
                                        </div>
                                        <div class="col-6">
                                            <div class="count-vote">
                                                <h1 class="vote-count"><span>1,920</span> Votes</h1>
                                                <img src="images/up-arrow.png" alt="" class="arrow-up">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6 col-lg-4">
                            <div class="video-box bg-common" style="background-image: url(images/home/video-thumbnail.jpg);">
                                <div class="header-top">
                                    <img src="images/cgt-logo.png" alt="" class="cgt-logo">
                                    <ul class="list-untyled list-share">
                                        <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/instagram.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/pinterest.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/share.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="button abs">
                                    <a href="#" class="fa fa-youtube-play"></a>
                                </div>
                                <div class="footer-tab">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1 class="name">
                                                Michelle Lee
                                            </h1>
                                            <h2 class="role">
                                                Singer/Songwriter
                                            </h2>
                                        </div>
                                        <div class="col-6">
                                            <div class="count-vote">
                                                <h1 class="vote-count"><span>1,920</span> Votes</h1>
                                                <img src="images/up-arrow.png" alt="" class="arrow-up">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="subscribe-button rel">
                        <div class="common-input-btn">
                            <input type="submit" value="See All Videos">
                        </div>
                    </div>
                </div>
                <div class="featured-video charities-section">
                    <ul class="owl-carousel list-unstyled">
                        <li class="main-video rel item  featured-charity">
                            <img src="images/featured-charity.jpg" alt="">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-7 offset-lg-5">
                                    <div class="featured">
                                        <h1>Featured Charity of the Month</h1>
                                        <div class="logo-chairty">
                                            <img src="images/circle-logo.png" alt="">
                                        </div>
                                        <div class="video-play text-right">
                                            <a href="#"><span>Rea More</span> ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="main-video rel item  featured-charity">
                            <img src="images/featured-charity.jpg" alt="">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-7 offset-lg-5">
                                    <div class="featured">
                                        <h1>Featured Charity of the Month</h1>
                                        <div class="logo-chairty">
                                            <img src="images/circle-logo.png" alt="">
                                        </div>
                                        <div class="video-play text-right">
                                            <a href="#"><span>Read More</span> ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <img class="abs bottom-bg" src="images/bg-feature.png" alt="">
    </section>

<?php endif; ?>