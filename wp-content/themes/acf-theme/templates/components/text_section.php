<?php
 
$section_id = 'text_section';
$section = get_row_layout($section_id );
$section_class = get_sub_field('section_class');
$bg = get_sub_field('background_image');
$text = get_sub_field('text');
?>
<?php if (!empty($section)) : $section_title = get_sub_field('title');?>
<!-- Text Section --->
<section id="<?php echo 'section-'.$section_count; ?>" <?php echo !empty($bg) ? 'style="background-image:url('.$bg.');"' : ''; ?>>
   <div class="<?php echo !empty($section_class) ? $section_class : ''; ?> <?php echo 'section-'.$section_count; ?> <?php echo $section_id; ?>">
        <div class="row"> 

            <div class="col-lg-12">
            <?php if (!empty($section_title)) : ?>
                <h3 class="my-4 <?php echo $section_id; ?>_title"><?php echo esc_html($section_title); ?></h3>
            <?php endif; ?>
                <?php echo !empty($text)? $text : ''; ?>
            </div>
        </div>
    </div>
</section>
<?php wp_reset_postdata();?>
<?php endif; ?>