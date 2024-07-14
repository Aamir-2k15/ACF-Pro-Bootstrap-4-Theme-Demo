
<?php 

function custom_body_classes($classes) {
    global $post;

    if (isset($post) && !is_null($post)) {
        // Add post type and post name
        $classes[] = $post->post_type . '-' . $post->post_name;

        // Add category IDs
        $categories = get_the_category($post->ID);
        if ($categories) {
            foreach ($categories as $category) {
                $classes[] = 'cat-' . $category->cat_ID . '-id';
            }
        }

        // Add custom post type
        if (is_singular() && get_post_type() !== 'post') {
            $classes[] = 'post-type-' . get_post_type();
        }

        // Add taxonomy
        $taxonomies = get_post_taxonomies($post->ID);
        foreach ($taxonomies as $taxonomy) {
            $terms = get_the_terms($post->ID, $taxonomy);
            if ($terms) {
                foreach ($terms as $term) {
                    $classes[] = 'taxonomy-' . $taxonomy . '-' . $term->slug;
                }
            }
        }

        // Check if it's a custom page template
        $page_template = get_page_template_slug();
        if ($page_template) {
            $template_name = pathinfo($page_template, PATHINFO_FILENAME);
            $classes[] = 'page-template-' . sanitize_html_class($template_name);
        }
    }

    return $classes;
}

add_filter('body_class', 'custom_body_classes');


