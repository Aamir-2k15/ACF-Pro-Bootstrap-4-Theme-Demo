<?php
$section_id = 'card_extended';
$section = get_row_layout($section_id);
$section_class = get_sub_field('section_class');
?>
<?php if (!empty($section)) : $section_title = get_sub_field('section_title'); 
?>
<!-- Portfolio Section -->
<section id="<?php echo 'section-'.$section_count; ?>">
    <div
        class="<?php echo !empty($section_class) ? $section_class : ''; ?> <?php echo 'section-'.$section_count; ?> <?php echo $section_id; ?>">
        <div class="row">
            <div class="col-md-12">
                <?php if (!empty($section_title)) : ?>
                <h2 class="my-4 <?php echo $section_id; ?>_title"><?php echo ($section_title); ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <?php if (have_rows('the_card')) : 
                            $col_class =  col_class_based_on_totals('the_card')['col_class'];
                            echo '<!-- Total Itmes: '.col_class_based_on_totals('the_card')['totals'].' -->';
            ?>
            <?php while (have_rows('the_card')) : the_row();
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $link = get_sub_field('link');
            $image = get_sub_field('image');
            $sub_title = get_sub_field('sub_title');
            $meta = get_sub_field('meta');
            $card_footer_text = get_sub_field('card_footer_text');
        ?>
            <div class="<?php echo $col_class; ?> the_card-item mt-3 mb-3">
                <div class="card h-100">

                    <a href="<?php echo !empty($link) ? esc_url($link) : ''; ?>">
                        <img class="card-img-top"
                            src="<?php echo !empty($image['url'])? esc_url($image['url']) : ''; ?>"
                            alt="<?php echo !empty($image['alt'])? esc_attr($image['alt']) : ''; ?>">
                    </a>

                    <div class="card-body">

                        <?php if(!empty($card_footer_text)): ?>
                        <h4 class="card-title">
                            <a href="<?php echo esc_url($link); ?>">
                                <?php echo esc_html($title); ?>
                            </a>
                        </h4>
                        <?php endif; ?>
                        <?php if(!empty($sub_title)): ?>
                        <h6 class="card-subtitle mt-2 mb-2 text-muted">
                            <?php echo esc_html($sub_title); ?>
                        </h6>
                        <?php endif; ?>
                        <?php if(!empty($description)): ?>
                        <p class="card-text">
                            <?php echo ($description); ?>
                        </p>
                        <?php endif; ?>
                        <?php if(!empty($meta)): ?>
                        <h6 class="card-subtitle mt-2 mb-2 text-muted">
                            <?php echo esc_html($meta); ?>
                        </h6>
                        <?php endif; ?>

                    </div>

                    <?php if(!empty($card_footer_text)): ?>
                    <div class="card-footer">
                        <a href="<?php echo !empty($link) ? esc_url($link) : ''; ?>">
                            <?php echo esc_html($card_footer_text); ?>
                        </a>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>