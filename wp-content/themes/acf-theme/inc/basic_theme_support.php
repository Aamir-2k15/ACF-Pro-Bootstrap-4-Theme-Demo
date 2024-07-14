<?php

include(get_template_directory() . '/inc/walker.php');
include(get_template_directory() . '/inc/walker_mobile.php');
/***
 * NAVIGATION MENU
 * */
function register_theme_menus()
{
    register_nav_menus(
        array('primary_menu' => _('Primary Menu'))
    );
    register_nav_menus(
        array('secondary_menu' => _('Secondary Menu'))
    );
}
add_action('init', 'register_theme_menus');


/* * *********
 * WIDGETS
 */

function create_widget($name, $id, $description)
{
    register_sidebar(array(
        'name' => __($name),
        'id' => $id,
        'description' => __($description),
        'before_widget' => '',
        'after_widget' => '',
        //            'before_title' => '',
        //            'after_title' => ''
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ));
}
create_widget(' Sidebar ', 'sidebar', '');
create_widget(' Footer 1', 'footer_1', '');
create_widget(' Footer 2', 'footer_2', '');
create_widget(' Footer 3', 'footer_3', '');
create_widget(' Footer 4', 'footer_4', '');
 


/***
 * WOOCOMMERECE SUPPORT 
 * */
function acfwp_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'acfwp_add_woocommerce_support');




add_filter( 'excerpt_more', '__return_empty_string', 21 );

function mythme_excerpt_more_link( $excerpt ) {
    // $excerpt .= sprintf( 
    //         '... <a href="%s">%s</a>.',
    //         esc_url( get_permalink() ),
    //         __( 'continue reading' )
    // );
    $excerpt .= sprintf( 
        '... <a href="%s">%s</a>',
        esc_url( get_permalink() ),
        __( '' )
);
    return $excerpt;
}
add_filter( 'the_excerpt', 'mythme_excerpt_more_link', 21 );

/* * *********
 * ADDING FEATURED IMAGE THEME SUPPORT
 */
add_theme_support('post-thumbnails');

/******
 * SVG SUPPORT
 * ***/
function allow_svg_upload( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_upload' );


/* * *********
 * NUMBERED PAGINATION
 */
function wplight_pagination()
{
    echo "<style>  .pagination a, .pagination span {    position: relative;    float: left;    padding: 6px 12px;    margin-left: -1px;    line-height: 1.42857143;    color: #337ab7;    text-decoration: none;    background-color: #fff;    border: 1px solid #ddd;}</style>";
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    echo '<ul class="pagination">' . paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    )) . '</ul>';
}

