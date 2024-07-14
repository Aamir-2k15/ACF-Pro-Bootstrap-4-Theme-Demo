<?php
$layout      = get_field('layout');
$id          = get_the_ID();

$row_layouts = [
    'carousel_slides',
    'cards_section',
    'portfolio_section',
    'text_section',
    'image_with_text',
    'images_row',
    'cards_extended',
];
?>
<?php 
function col_class_based_on_totals($rows) {
    $totals = 0;
    
    // Count the total number of rows
    while (have_rows($rows)) {
        the_row();
        $totals++;
    }
    
    // Determine the column class based on the total number of items
    if ($totals > 0) {
        if ($totals == 1) {
            $col_class = 'col-lg-12';
        } 
        elseif ($totals > 6) {
            $col_class = 'col-lg-2'; // cap at col-lg-2 for more than 6 items
        }
        
        // else {
        //     $col_class = 'col-lg-' . floor(12 / $totals); // use floor to avoid fractional values
        // }
    } else {
        $col_class = 'col-lg-12'; // Default class if no items
    }
    
    return ['col_class' => $col_class, 'totals' => $totals];
}

?>
    <?php
    if (have_rows('layout', $id)) : $section_count = 0;
        while (have_rows('layout', $id)) : the_row(); $section_count++;
            if (in_array(get_row_layout(), $row_layouts)) :
                include('components/' . get_row_layout() . '.php');
            endif;
        endwhile;
    else :
    endif;
?>