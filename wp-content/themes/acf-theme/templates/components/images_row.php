<?php

$section_id = 'images_row';
$section = get_row_layout($section_id);
$section_class = get_sub_field('section_class'); 
?>
<?php if (!empty($section)) : $section_title = get_sub_field('section_title');?>
<!-- Images Row -->
<section id="<?php echo 'section-'.$section_count; ?>">
    <div
        class="<?php echo !empty($section_class) ? $section_class : ''; ?> <?php echo 'section-'.$section_count; ?> <?php echo $section_id; ?>">
        <?php if (!empty($section_title)) :?>
        <h3 class="my-4 <?php echo $section_id; ?>_title">
            <?php echo esc_html($section_title); ?>
        </h3>
        <?php endif; ?>



        <div class="row">
            <?php if( have_rows('the_images') ): ?>
            <?php 
        $total_images = 0;
        $images = []; // Store images for later use

        // Single pass to count and store images
        while( have_rows('the_images') ): the_row();  
            $image = get_sub_field('image');
            $link = get_sub_field('link');
            if (!empty($image['url'])) {
                $images[] = ['url' => $image['url'], 'alt' => $image['alt'], 'link' => $link];
                $total_images++;
            }
        endwhile;

        echo '<!-- Total Images: '.$total_images.' -->';

        // Determine column class based on total images
        if ($total_images > 0) {
            if ($total_images == 1) {
                $col_class = 'col-lg-12'; 
            } elseif($total_images > 6) {
                $col_class = 'col-lg-1'; // 12 divided by the number of images, capped at 6
            }else {
                $col_class = 'col-lg-' . (12 / min($total_images, 6)); // 12 divided by the number of images, capped at 6
            }
        } else {
            $col_class = 'col-lg-12'; // Default class if no images
        }

        // Output the images
        foreach ($images as $img): ?>
            <div class="<?php echo $col_class; ?> mb-4 text-center">
                <a href="<?php echo !empty($img['link']) ? esc_url($img['link']) : 'javascript:void(0)'; ?>">
                    <img class="img-fluid" src="<?php echo esc_url($img['url']); ?>"
                        alt="<?php echo esc_attr($img['alt']); ?>">
                </a>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
            <p>No images found.</p>
            <?php endif; ?>
        </div>

    </div>
</section>
<!-- /.row -->
<?php wp_reset_postdata();?>
<?php endif; ?>