<?php
 
$section_id = 'portfolio_section';
$section = get_row_layout($section_id);
$section_class = get_sub_field('section_class');
?>
<?php if (!empty($section)) : $section_title = get_sub_field('section_title'); 
?>
<!-- Portfolio Section -->
<section id="<?php echo 'section-'.$section_count; ?>">
    <div class="<?php echo !empty($section_class) ? $section_class : ''; ?> <?php echo 'section-'.$section_count; ?> <?php echo $section_id; ?>">
    <div class="row">
        <div class="col-md-12">
            <?php if (!empty($section_title)) : ?>
            <h2 class="my-4 <?php echo $section_id; ?>_title"><?php echo ($section_title); ?></h2>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
    <?php if (have_rows('portfolio')) : 
        $col_class =  col_class_based_on_totals('portfolio')['col_class'];
        echo '<!-- Total Itmes: '.col_class_based_on_totals('portfolio')['totals'].' -->';
            ?>
        <?php while (have_rows('portfolio')) : the_row();
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $link = get_sub_field('link');
            $image = get_sub_field('image');
        ?>
        <div class="<?php echo $col_class; ?> portfolio-item">
            <div class="card h-100">

                <a href="<?php echo !empty($link) ? esc_url($link) : ''; ?>" title="<?php echo !empty($link) ? esc_url($link) : ''; ?>">
                    <img class="card-img-top" src="<?php echo !empty($image['url'])? esc_url($image['url']) : ''; ?>"
                        alt="<?php echo !empty($image['alt'])? esc_attr($image['alt']) : ''; ?>">
                </a>
                
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a>
                    </h4>
                    <p class="card-text"><?php echo ($description); ?></p>
                </div>

            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>