<?php
$section = get_row_layout('guideline_section');
?>
<?php if (!empty($section)) : ?>
    <?php ?>
    <section class="guideline_section rel bg-common" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/performers/guidelines-banner.jpg');">
        <div class="container">
            <div class="guideline-div rel z-90">
                <div class="head">
                    <h1><?php the_sub_field('heading'); ?></h1>
                    <?php the_sub_field('guidelines'); ?>
                   
                </div>
            </div>
        </div>
    </section><?php endif; ?>