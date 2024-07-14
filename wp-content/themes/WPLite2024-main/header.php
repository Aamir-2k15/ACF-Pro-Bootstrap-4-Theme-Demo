<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="WPL_AJAX" content="<?php echo WPL_AJAX; ?>">
    <meta name="description"
        content="<?=(isset(WPL_SETTINGS['site_description']) ? WPL_SETTINGS['site_description']: '');?>">
    <meta name="author"
        content="<?=(isset(WPL_SETTINGS['author_description']) ? WPL_SETTINGS['author_description']: '');?>">
    <?php if(!is_front_page()){$page_title = wp_title('', false).' | '; }else{$page_title = 'Home | ';}?>
    <title> <?php echo $page_title;?><?php bloginfo('name'); ?> </title>

    <link rel="shortcut icon" href="<?= (isset(WPL_SETTINGS['favicon']) ? WPL_SETTINGS['favicon'] : ''); ?>"
        type="image/x-icon">
    <link rel="icon" href="<?= (isset(WPL_SETTINGS['favicon']) ? WPL_SETTINGS['favicon'] : ''); ?>" type="image/x-icon">
    <!-- Main Stylesheet File -->
    <?php wp_head();?>
</head>
<?php 

?>

<body <?php body_class(); ?>>
    <div id="wrap">
        <header>

            <div id="topbar" class="navbar-dark bg-dark">
                <div class="container">
                    <div class="row pt-2 pb-0">
                        <div class="col-md-3 topbar-1"><?php dynamic_sidebar('topbar_1'); ?></div>
                        <div class="col-md-3 topbar-2"><?php dynamic_sidebar('topbar_2'); ?></div>
                        <div class="col-md-3 topbar-3"><?php dynamic_sidebar('topbar_3'); ?></div>
                        <div class="col-md-3 topbar-4"><?php dynamic_sidebar('topbar_4'); ?></div>
                    </div>
                </div>
            </div>



            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a href="<?= site_url(); ?>" class="navbar-brand">
                        <img src="<?php echo isset(WPL_SETTINGS['site_logo'])?WPL_SETTINGS['site_logo']:''; ?>"
                            alt="<?php bloginfo('name'); ?>" class="img-fluid logo" />
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