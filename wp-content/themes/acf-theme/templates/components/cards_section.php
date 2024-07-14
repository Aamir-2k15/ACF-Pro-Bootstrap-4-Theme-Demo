<?php
 
$section_id = 'cards_section';
$section = get_row_layout($section_id );
$section_class = get_sub_field('section_class');

?>
<?php if (!empty($section)) : $section_title = get_sub_field('section_title');?>
<!-- Cards Section --->
<section id="<?php echo 'section-'.$section_count; ?>">
    <div
        class="<?php echo !empty($section_class) ? $section_class : ''; ?> <?php echo 'section-'.$section_count; ?> <?php echo $section_id; ?>">
        <?php if (!empty($section_title)) :?>
        <h3 class="my-4 <?php echo $section_id; ?>_title"><?php echo esc_html($section_title); ?></h3>
        <?php endif; ?>
        <!-- Icons Section --->
        <div class="row">
            <?php 
            
            if( have_rows('cards') ):                 
                $col_class =  col_class_based_on_totals('cards')['col_class'];
                echo '<!-- Total Itmes: '.col_class_based_on_totals('cards')['totals'].' -->';
            ?>
            <?php while( have_rows('cards') ): the_row();  
                
                $card_title = get_sub_field('card_title');
                $card_text = get_sub_field('card_text');
                $card_button = get_sub_field('card_button');
               
            ?>
            <div class="<?php echo $col_class; ?> mb-4">
                <div class="card h-100">
                    <?php if(!empty($card_title)):?>
                    <h4 class="card-header"><?php echo esc_html($card_title); ?></h4>
                    <?php endif; ?>
                    <?php if(!empty($card_text)):?>
                    <div class="card-body">
                        <p class="card-text"><?php echo esc_html($card_text); ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($card_button)):?>
                    <div class="card-footer">
                        <a href="<?php echo esc_url($card_button['url']); ?>" class="btn btn-primary">
                            <?php echo esc_html($card_button['title']); ?>
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
<?php wp_reset_postdata();?>
<?php endif; ?>