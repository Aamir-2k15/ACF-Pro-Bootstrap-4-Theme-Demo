<?php
/* * *
 * CUSTOM SEARCH FORM FOR CLT WEBSITE
 * * */
function acfwp_search_form()
{
    ob_start(); ?>
    <form class="form-inline" action="<?php echo esc_url(home_url('/')); ?>">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" name="s" value="<?php echo get_search_query(); ?>">
        <button class="btn btn-success" type="submit">Search</button>
    </form>
<?php $html = ob_get_clean();
    return $html;
}

/* * *
 * FILTER TO ADD FORM TO LAST li OF nav
 * * */

// add_filter('wp_nav_menu_items', 'add_search_box_to_primary_menu', 10, 2);

function add_search_box_to_primary_menu($items, $args)
{
    if ($args->theme_location == 'primary_menu') {
        $items .= '<li class="nav-item">';
        $items .= acfwp_search_form();
        $items .= '</li>';
    }
    return $items;
}

/* * *
 *  
 * * */
function dd($data, $exit = null)
{
?>
    <div class="row my-4" style="z-index:99999;">
        <pre>TESTING MODE</pre>
        <pre>
        <?php print_r($data); ?> 
    </pre>
    </div>
    <?php
    if (isset($exit)) {
        exit;
    }
}


function E_ON()
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}




/**
 * Checks if the current page is a membership page and redirects to the homepage if the user is not logged in.
 *
 * @throws None
 * @return void
 */
function is_membership_page() {
    if (is_singular()) {
        $page_id = get_the_ID();
        $is_membership_page = get_field('is_membership_page', $page_id);
        $redir_page = !empty(COMMON_DATA['non_logged_in_redirect_page']) ? COMMON_DATA['non_logged_in_redirect_page']: '';

        if ($is_membership_page === 'Yes') {
            if (!is_user_logged_in()) {
                $ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
                if ($ref !== $redir_page) {
                    wp_redirect($redir_page);
                    exit;
                }
            }
        }
    }
}

add_action('template_redirect', 'is_membership_page');



/* *
    SEARCH CUSTOM POST TYPES IN SEARCH 
 * */
function  include_custom_post_types_in_search_results($query)
{
    if ($query->is_main_query() && $query->is_search() && !is_admin()) {
        $query->set('post_type', array('video-contest-videos', 'page', 'post'));
    }
}
add_action('pre_get_posts', 'include_custom_post_types_in_search_results');
