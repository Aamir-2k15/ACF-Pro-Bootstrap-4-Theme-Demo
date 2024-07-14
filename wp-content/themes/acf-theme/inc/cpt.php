
<?php
function create_portfolio_cpt() {
    $labels = array(
        'name' => __( 'Portfolios' ),
        'singular_name' => __( 'Portfolio' ),
        'menu_name' => __( 'Portfolios' ),
        'name_admin_bar' => __( 'Portfolio' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New Portfolio' ),
        'new_item' => __( 'New Portfolio' ),
        'edit_item' => __( 'Edit Portfolio' ),
        'view_item' => __( 'View Portfolio' ),
        'all_items' => __( 'All Portfolios' ),
        'search_items' => __( 'Search Portfolios' ),
        'parent_item_colon' => __( 'Parent Portfolios:' ),
        'not_found' => __( 'No portfolios found.' ),
        'not_found_in_trash' => __( 'No portfolios found in Trash.' )
    );
  
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'portfolio' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
    );
  
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'create_portfolio_cpt' );
