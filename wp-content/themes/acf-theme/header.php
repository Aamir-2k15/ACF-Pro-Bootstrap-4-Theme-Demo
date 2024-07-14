<!DOCTYPE html>
<html lang="en">

<head>
    <?php
// E_ON();
//   dd(SM); 
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo !empty(COMMON_DATA['site_meta']['website_description_meta']) ? COMMON_DATA['site_meta']['website_description_meta'] : ''; ?>">
    <meta name="author" content="<?php echo !empty(COMMON_DATA['site_meta']['website_author_meta']) ? COMMON_DATA['site_meta']['website_author_meta'] : ''; ?>">
    <meta name="ajax_url" content="<?php echo WP_AJAX; ?>">

    <title><?php _page_title(); ?></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>

        <!-- Topbar -->
        <div class="topbar bg-light pb-2 mt-0 mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <span class="mr-3">
                        <?php email_link(); ?>
                        </span>
                        <span>
                        <?php phone_link(); ?>
                        </span>
                    </div>
                    <div class="col-md-6 text-right">
                        <?php facebook(); ?>
                        <?php twitter(); ?>
                        <?php instagram(); ?>
                        <?php youtube(); ?>
                        <?php linkedin(); ?>
                        <?php tiktok(); ?>
                        <?php pinterest(); ?>
                        <?php reddit(); ?>
                        <?php snapchat(); ?>
                        <?php whatsapp(); ?>
                        <?php telegram(); ?>

                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container"> 
                    <a href="<?= site_url(); ?>" class="navbar-brand website-logo-container">
                        <img src="<?php echo isset(COMMON_DATA['website_logo'])?COMMON_DATA['website_logo']:''; ?>"
                            alt="<?php bloginfo('name'); ?>" class="img-fluid website-logo" />
                    </a> 

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php
                    $args = array(
                        'theme_location' => 'primary_menu',
                        'menu' => 'primary_menu',
                        'container' => 'false',
                        'container_class' => 'navbar-nav ml-auto',
                        'container_id' => '',
                        'menu_class' => 'nav-item',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul class="navbar-nav ml-auto no-filter">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new Walker_Nav_Primary(), // This controls the display of the Bootstrap Navbar
                        'fallback_cb' => 'Walker::fallback', // For menu fallback
                    );
                    ?>
                    <?php wp_nav_menu($args); ?>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navigation -->