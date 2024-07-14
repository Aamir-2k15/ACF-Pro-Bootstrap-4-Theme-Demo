<?php
$section = get_row_layout('clients_logos_section_2');
?>
<?php if (!empty($section)) : ?>

    <section class="thank">
        <div class="container">
            <h2><?php the_sub_field('heading'); ?></h2>
            <?php $logos = get_sub_field('logos'); ?>
            <div class="thank-wrapper">

                <?php foreach ($logos as $img) :  ?>
                    <div class="thank-item">
                        <img src="<?php echo $img; ?>" alt="">
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

<?php endif; ?>