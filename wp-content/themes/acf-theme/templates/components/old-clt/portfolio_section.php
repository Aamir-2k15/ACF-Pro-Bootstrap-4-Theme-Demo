<?php
$section_id = 'portfolio_section';
$section = get_row_layout($section_id );

?>
<?php if (!empty($section)) : $section_title = get_sub_field('section_title');?>
    <section id="<?php echo $section_id; ?>" class="container">
    <h3 class="my-4 <?php echo $section_id; ?>_title"><?php echo esc_html($section_title); ?></h3>

    
    
    </section>
<?php endif; ?>
