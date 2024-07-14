<?php
function _page_title()
{
    ob_start(); ?>
<?php if (!is_front_page()) {
        $page_title = wp_title('', false) . ' | ';
    } else {
        $page_title = 'Home | ';
    } ?>
<?php echo $page_title; ?><?php bloginfo('name'); ?> 
    <?php $html = ob_get_clean();
    echo $html;
}
 