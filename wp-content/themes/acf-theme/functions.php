<?php

/***
 * ADDING CSS AND JS 
 * THE WP WAY
 * */
$textdomain = 'acf-bootstrap';
define('TD', $textdomain);
ini_set('allow_url_include', 'On');

$common_settings =  get_field('common_settings', 'option');
define('COMMON_DATA', $common_settings);

$social_media_options =  get_field('social_media_options', 'option');
define('SM', $social_media_options);

function theme_enqueue_scripts()
{  // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2');
    
    // Bootstrap JS Bundle
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), '4.5.2', true);
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4');
    
    // Main JS
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
    
    // Style CSS
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css', '1.0');
    
    // Theme CSS
    wp_enqueue_style('theme-css', get_template_directory_uri() . '/css/theme.css', '1.0');

}
if (!is_admin()) :
    add_action('init', 'theme_enqueue_scripts');
endif;

/***
 * SUPPORT
 * */

include_once('inc/basic_theme_support.php'); 

include_once('inc/site_page_title.php'); 

include_once('inc/body_css_class.php'); 

include_once('inc/classic_support.php');

include_once('inc/custom_functions.php');

include_once('inc/acf_theme_options_page_support.php');

include_once('inc/remove-unwanted.php');

include_once('inc/shortcodes.php');

include_once('inc/cpt.php');// 

define('WP_AJAX', admin_url('admin-ajax.php'));  
