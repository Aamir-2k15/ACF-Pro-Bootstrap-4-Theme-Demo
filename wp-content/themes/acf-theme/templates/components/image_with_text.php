<?php

$section_id = 'image_with_text';
$section = get_row_layout($section_id);
$section_class = get_sub_field('section_class');
$image_position = get_sub_field('image_position');
?>
<?php if (!empty($section)) : ?>
    <!-- IwT Section --->
    <section id="<?php echo 'section-'.$section_count; ?>">
        <div class="<?php echo !empty($section_class) ? $section_class : ''; ?> <?php echo 'section-'.$section_count; ?> <?php echo $section_id; ?>">
            <div class="row">

                <div class="col-md-6 <?php echo ($image_position == 'Right')? 'order-md-2' : ''; ?>">
                    <?php 
                    $image = get_sub_field('image');
                    if (!empty($image)): 
                    ?>
                        <img class="img-fluid  mb-4" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    <?php endif; ?>
                </div>

                <div class="col-md-6">
                    <?php 
                    $title = get_sub_field('title');
                    if (!empty($title)): 
                    ?>
                        <h2><?php echo ($title); ?></h2>
                    <?php endif; ?>

                    <?php 
                    $text = get_sub_field('text');
                    if (!empty($text)): 
                    ?>
                        <p><?php echo ($text); ?></p>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>