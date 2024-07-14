<?php
 
$section_id = 'carousel_slides';
$section = get_row_layout($section_id);
$section_class = get_sub_field('section_class');
?>
<?php if (!empty($section)) : $section_title = get_sub_field('section_title');?>
<!-- Carousel Section --->
<section id="<?php echo $section_id; ?>">
    <div
        class="<?php echo !empty($section_class) ? $section_class : ''; ?> <?php echo 'section-'.$section_count; ?> <?php echo $section_id; ?>">
        <div class="row">
            <div class="col-md-12">
                <?php if (!empty($section_title)) :?>
                <h3 class="my-4 <?php echo $section_id; ?>_title">
                    <?php echo esc_html($section_title); ?>
                </h3>
                <?php endif; ?>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php 
            $slide_count = 0; 
            if( have_rows('slide') ):
                while( have_rows('slide') ): the_row(); ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $slide_count; ?>"
                    class="<?php echo $slide_count == 0 ? 'active' : ''; ?>"></li>
                <?php $slide_count++; endwhile; 
            endif; ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php 
            $slide_count = 0; 
            if( have_rows('slide') ):
                while( have_rows('slide') ): the_row(); 
                    $background_image = get_sub_field('background_image');
                    $slide_title = get_sub_field('slide_title');
                    $slide_description = get_sub_field('slide_description');
            ?>
                <div class="carousel-item <?php echo $slide_count == 0 ? 'active' : ''; ?>"
                    style="background-image: url('<?php echo !empty($background_image)? $background_image : ''; ?>')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><?php echo !empty($slide_title)? $slide_title : ''; ?></h3>
                        <p><?php echo !empty($slide_description)? $slide_description : ''; ?></p>
                    </div>
                </div>
                
                <?php $slide_count++; endwhile; 
            endif; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<?php wp_reset_postdata();?>
<?php endif; ?>