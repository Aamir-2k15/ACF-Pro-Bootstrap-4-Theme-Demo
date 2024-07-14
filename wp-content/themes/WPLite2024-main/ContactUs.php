<?php /*
 * Template Name: Contact Us
 */ ?>
<?php get_header(); ?>
<section id="contact" class="mt-4">
    <div class="container mt-4">
 
        <div class="section-header">
        <h3><?php echo __( 'Contact Us', TD ); ?></h3>
        </div>

        <div class="row">
            <?php if (have_posts()):while (have_posts()):the_post(); ?>
            <div class="col-lg-6">
                <?php the_content(); ?>
                <?php edit_post_link('edit', '<p>', '</p><br/>'); ?>
            </div>
            <?php endwhile; endif;?>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-5 info">
                        <i class="fa fa-map-marker"></i>
                        <p><?php echo !empty( WPL_SETTINGS['address']) ?  WPL_SETTINGS['address']: ''; ?></p>
                    </div>
                    <div class="col-md-4 info">
                        <i class="fa fa-envelope"></i>
                        <p><?php echo !empty( WPL_SOCIALMEDIA['sm_site_email']) ?  WPL_SOCIALMEDIA['sm_site_email']: ''; ?></p>
                    </div>
                    <div class="col-md-3 info">
                        <i class="fa fa-phone"></i>
                        <p><?php echo  !empty( WPL_SOCIALMEDIA['sm_phone']) ?  WPL_SOCIALMEDIA['sm_phone']: ''; ?></p>
                    </div>
                </div>

                <div class="form">
                     
                <?php 
if (isset(WPL_SETTINGS['contact_form']) && !empty(WPL_SETTINGS['contact_form'])) {
    // Remove slashes if they exist
    $contact_form_shortcode = stripslashes(WPL_SETTINGS['contact_form']);
    // Process the shortcode
    echo do_shortcode($contact_form_shortcode);
} else {
    echo 'Contact form shortcode is not defined.';
}
?>
 
                </div>
            </div>

        </div>
        <div class="row">
            <h4 class="heading-sm-b pt-2 pb-3"><?php  echo __( 'Follow us on:', TD ); ?></h4>
            <ul class="list-inline mb-3 contact-social">
                <?php if (!empty(WPL_SOCIALMEDIA['sm_facebook'])) { ?>
                <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank"
                        href="<?php echo  WPL_SOCIALMEDIA['sm_facebook']; ?>"><i class="fab fa-2x  fa-facebook"></i> </a>
                </li>
                <?php } ?>
                <?php if (!empty(WPL_SOCIALMEDIA['sm_pinterest'])) { ?>
                <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank"
                        href="<?php echo  WPL_SOCIALMEDIA['sm_pinterest']; ?>"><i class="fab fa-2x  fa-pinterest"></i> </a>
                </li>
                <?php } ?>
                <?php if (!empty(WPL_SOCIALMEDIA['sm_youtube'])) { ?>
                <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank"
                        href="<?php echo  WPL_SOCIALMEDIA['sm_youtube']; ?>"><i class="fab fa-2x  fa-youtube"></i> </a>
                </li>
                <?php } ?>
                <?php if (!empty(WPL_SOCIALMEDIA['sm_google-plus'])) { ?>
                <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank"
                        href="<?php echo  WPL_SOCIALMEDIA['sm_google-plus']; ?>"><i class="fab fa-2x  fa-google-plus"></i>
                    </a> </li>
                <?php } ?>
                <?php if (!empty(WPL_SOCIALMEDIA['sm_twitter'])) { ?>
                <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank"
                        href="<?php echo  WPL_SOCIALMEDIA['sm_twitter']; ?>"><i class="fab fa-2x  fa-twitter"></i> </a>
                </li>
                <?php } ?>
                <?php if (!empty(WPL_SOCIALMEDIA['sm_instagram'])) { ?>
                <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank"
                        href="<?php echo  WPL_SOCIALMEDIA['sm_instagram']; ?>"><i class="fab fa-2x  fa-instagram"></i> </a>
                </li>
                <?php } ?>
                <?php if (!empty(WPL_SOCIALMEDIA['sm_email'])) { ?>
                <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank"
                        href="<?php echo  WPL_SOCIALMEDIA['sm_email']; ?>"><i class="fab fa-2x  fa-envelope"></i> </a> </li>
                <?php } ?>
                <?php if (!empty(WPL_SOCIALMEDIA['sm_linkedin'])) { ?>
                <li class="list-inline-item"> <a class="social-icon text-xs-center" target="_blank"
                        href="<?php echo  WPL_SOCIALMEDIA['sm_linkedin']; ?>"><i class="fab fa-2x  fa-linkedin"></i> </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <?php echo !empty( WPL_SETTINGS['map']) ?  stripslashes(WPL_SETTINGS['map']): ''; ?>
</section><!-- / -->
<?php get_footer(); ?>