<?php
$section = get_row_layout('share_section');
$field = get_sub_field('field');
?>
<?php if (!empty($section)) :  ?>
    <section class="share-section rel bg-common" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);">
        <div class="container">
            <div class="content text-center">
                <?php echo the_sub_field('text_1'); ?>
                <br><br>
                <p style="display: inline-block;"><?php echo the_sub_field('text_2'); ?></p>
                <div class="list-content">
                    <?php _share_icons(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>