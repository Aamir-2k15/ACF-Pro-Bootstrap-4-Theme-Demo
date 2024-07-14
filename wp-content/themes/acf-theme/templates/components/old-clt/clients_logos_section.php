<?php
$clients_logos_section = get_row_layout('clients_logos_section');
?>
<?php if (!empty($clients_logos_section)) : ?>
<section class="our-procedure rel">

    <img src="<?php echo get_template_directory_uri()?>/images/service-bg.png" alt="" class="bg">
    
    <div class="container">
        <div class="procedure-content">
            <div class="header text-center">
            <h1 class="glow_heading" style="font-weight: 900;max-width: 680px;margin: 0 auto;"><?php the_sub_field('heading_1'); ?></h1>
                <!-- <img src="images/procedure-header.png" alt=""> -->
            </div><?php $logos_n = 0; ?>
            <ul class="list-untyled list-brands">
                <?php
                $logos_row_1 = get_sub_field('logos_row_1');
                foreach ($logos_row_1 as $img) : $logos_n++; ?>
                    <li data-id="<?= $logos_n ?>"><img src="<?php echo $img; ?>" alt=""></li>
                <?php endforeach; ?>
            </ul>
            <br>
            <div class="as-seen text-left">
                <h1><?php the_sub_field('heading_2'); ?></h1>
                <ul class="list-untyled list-brands"><?php $logos2_n = 0; ?>
                    <?php $logos_row_2 = get_sub_field('logos_row_2');
                    foreach ($logos_row_2 as $img) : $logos2_n++; ?>
                        <li data-id="<?= $logos2_n ?>"><img src="<?php echo $img; ?>" alt=""></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php endif; 
?>