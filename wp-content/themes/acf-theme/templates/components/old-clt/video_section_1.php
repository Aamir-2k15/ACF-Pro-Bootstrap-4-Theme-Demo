<?php
$featured_performers = get_row_layout('featured_performers');
// $field = get_sub_field('field');
//heading_1
?>
<style>
    .video-box.bg-common {
        padding: 0 !important;
    }

    .prominent {
        position: relative !important;
        z-index: 9999999999 !important;
    }
</style>
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

                <?php
                $videos_section = get_sub_field('videos_section');
                // dd($videos_section);

                ?>

                <?php foreach ($videos_section as $videos_section_single) :  ?>

                    <div class="video-list">
                        <h1 class="header"><?php echo $videos_section_single['title'] ?></h1>
                        <ul class="list-unstyled list-video row">
                            <?php $the_videos = $videos_section_single['videos']; ?>
                            <?php foreach ($the_videos as $the_video) : #dd($the_video); 
                            ?>

                                <li class="col-md-6 col-lg-4">
                                    <div class="video-box bg-common">
                                        <!---style="background-image: url(images/home/video-thumbnail.jpg);">--->
                                        <?php echo  the_field('video_link', $the_video->ID); ?>
                                        <div class="header-top">
                                            <img src="<?php echo get_template_directory_uri() ?>/images/cgt-logo.png" alt="" class="cgt-logo prominent">
                                           <?php _share_icons();?>
                                        </div>
                                        <?php $url = home_url() . "/videos/?contest=video-detail&video_id=" . $the_video->ID; ?>
                                        <div class="button abs">
                                            <a href="<?php echo $url; ?>" class="fa fa-youtube-play prominent"></a>
                                            <?php $thumb_url = get_post_meta($the_video->ID, 'thumb_url', true); ?>
                                            <a href="<?php echo $url; ?>"><img src="<?php echo $thumb_url; ?>"></a>
                                        </div>
                                        <div class="footer-tab">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h1 class="name">
                                                        <a href="<?php echo $url; ?>"><?php echo $the_video->post_title; ?></a>
                                                    </h1>
                                                    <h2 class="role prominent">
                                                        <?php the_field('title', $the_video->ID); ?>
                                                    </h2>
                                                </div>
                                                <div class="col-6">
                                                    <div class="count-vote">
                                                        <?php
                                                        $rating = 0;
                                                        $contest_video_rate10_total = get_post_meta($the_video->ID, 'contest-video-rate10-total', true);
                                                        $contest_video_rate5_total = get_post_meta($the_video->ID, 'contest-video-rate5-total', true);
                                                        if ($contest_video_rate10_total == "") {
                                                            $rating = $contest_video_rate5_total;
                                                        } elseif ($contest_video_rate5_total == "") {
                                                            $rating = $contest_video_rate10_total;
                                                        } else {
                                                            $rating = 0;
                                                        }
                                                        ?>
                                                        <h1 class="vote-count">
                                                            <span><?php # echo $rating; ?></span> Vote &nbsp;
                                                        </h1>
                                                        <a href="<?php echo $url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.png" alt="" class="arrow-up"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>

                        </ul>

                        <div class="subscribe-button rel">
                            <?php $cta = $videos_section_single['call_to_action'];  ?>
                            <?php if (!empty($cta)) :  ?>
                                <a href="<?php echo $cta['link'] ?>" class="bonus-price">
                                    <img src="<?php echo $cta['icon'] ?>" alt="">
                                </a>
                            <?php endif; ?>
                            <?php $button = $videos_section_single['button'];  ?>
                            <div class="common-input-btn">
                                <a href="<?php echo $button['url']; ?>" style="background-color: #3a0ca3;height: 68px;border-radius: 50px;padding: 17px 40px;color: #fff;font-size: 24px;font-weight: 900;border: none;"><?php echo $button['title']; ?></a>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>

                <div class="featured-video charities-section">
                    <ul class="owl-carousel list-unstyled">

                        <?php $slides2 = get_sub_field('slide_2'); ?>
                        <?php foreach ($slides2 as $slide) : ?>
                            <li class="main-video rel item  featured-charity">
                                <img src="<?php echo  $slide['image'] ?>" alt="">
                                <div class="row no-gutters">
                                    <div class="col-md-12 col-lg-7 offset-lg-5">
                                        <div class="featured">
                                            <h1><?php echo  $slide['heading'] ?></h1>
                                            <div class="logo-chairty">
                                                <img src="<?php echo  $slide['logo'] ?>" alt="">
                                            </div>
                                            <div class="video-play text-right">
                                                <a href="<?php echo  $slide['link']['url']; ?>"><span><?php echo  $slide['link']['title']; ?></span> ></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>
        <img class="abs bottom-bg" src="<?php echo get_template_directory_uri(); ?>/images/bg-feature.png" alt="">
    </section>

<?php endif; ?>