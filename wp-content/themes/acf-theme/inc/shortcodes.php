<?php
add_shortcode('search_form', 'acfwp_search_form');


add_shortcode('website_address', function(){
    return !empty(COMMON_DATA['address']) ? COMMON_DATA['address'] : '';
});


add_shortcode('email_address', function(){
    return !empty(COMMON_DATA['website_email']) ? COMMON_DATA['website_email'] : '';
});
add_shortcode('business_number', function(){
    return !empty(COMMON_DATA['business_number']) ? COMMON_DATA['business_number'] : '';
});
add_shortcode('map', function(){
    return !empty(COMMON_DATA['map']) ? COMMON_DATA['map'] : '';
});
add_shortcode('footer_text', function(){
    return !empty(COMMON_DATA['footer_text']) ? COMMON_DATA['footer_text'] : '';
});



function email_link() {
    if(!empty(COMMON_DATA['website_email'])):
    ?>
    <a href="mailto:<?php echo COMMON_DATA['website_email']; ?>" class="mr-3" title="Email">
        <i class="fas fa-envelope"></i> <?php echo COMMON_DATA['website_email']; ?>
    </a>
    <?php
    endif;
}
add_shortcode('email_link', 'email_link');


function phone_link() {
    if(!empty(COMMON_DATA['business_number'])):
    ?>
    <a href="tel:<?php echo COMMON_DATA['business_number']; ?>" class="mr-3" title="Phone">
        <i class="fas fa-phone"></i> <?php echo COMMON_DATA['business_number']; ?>
    </a>
    <?php
    endif;
}
add_shortcode('phone', 'phone_link');




/**
 * Generates HTML code for displaying social media links.
 *
 * @param array|null $atts The attributes for the function. Defaults to null.
 * @return string The HTML code for displaying the social media links.
 */
function facebook()
{
?>
<?php if(!empty(SM['facebook'])): ?>
<a href="<?php echo SM['facebook'];?>" target="_blank" class="mr-3" title="Facebook">
    <i class="fab fa-facebook-f"></i>
</a>
<?php endif; ?>
<?php
}

add_shortcode('fb', 'facebook');

function twitter(){
?>
                        <?php if(!empty(SM['twitter'])): ?>
                        <a href="<?php echo SM['twitter'];?>" target="_blank" class="mr-3" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <?php endif; ?>
    <?php
}

add_shortcode('twitter', 'twitter');

function instagram() {
    if(!empty(SM['instagram'])): ?>
        <a href="<?php echo SM['instagram']; ?>" target="_blank" class="mr-3" title="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    <?php endif;
}
add_shortcode('instagram', 'instagram');

function linkedin() {
    if(!empty(SM['linkedin'])): ?>
        <a href="<?php echo SM['linkedin']; ?>" target="_blank" class="mr-3" title="LinkedIn">
            <i class="fab fa-linkedin-in"></i>
        </a>
    <?php endif;
}
add_shortcode('linkedin', 'linkedin');


function youtube() {
    if(!empty(SM['youtube'])): ?>
        <a href="<?php echo SM['youtube']; ?>" target="_blank" class="mr-3" title="YouTube">
            <i class="fab fa-youtube"></i>
        </a>
    <?php endif;
}
add_shortcode('youtube', 'youtube');

function whatsapp() {
    if(!empty(SM['whatsapp'])): ?>
        <a href="https://wa.me/<?php echo SM['whatsapp']; ?>" target="_blank" class="mr-3" title="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    <?php endif;
}
add_shortcode('whatsapp', 'whatsapp');


function telegram() {
    if(!empty(SM['telegram'])): ?>
        <a href="https://t.me/<?php echo SM['telegram']; ?>" target="_blank" class="mr-3" title="Telegram">
            <i class="fab fa-telegram-plane"></i>
        </a>
    <?php endif;
}
add_shortcode('telegram', 'telegram');



function tiktok() {
    if(!empty(SM['tiktok'])): ?>
        <a href="<?php echo SM['tiktok']; ?>" target="_blank" class="mr-3" title="TikTok">
            <i class="fab fa-tiktok"></i>
        </a>
    <?php endif;
}
add_shortcode('tiktok', 'tiktok');

function pinterest() {
    if(!empty(SM['pinterest'])): ?>
        <a href="<?php echo SM['pinterest']; ?>" target="_blank" class="mr-3" title="Pinterest">
            <i class="fab fa-pinterest"></i>
        </a>
    <?php endif;
}
add_shortcode('pinterest', 'pinterest');

function snapchat() {
    if(!empty(SM['snapchat'])): ?>
        <a href="<?php echo SM['snapchat']; ?>" target="_blank" class="mr-3" title="Snapchat">
            <i class="fab fa-snapchat-ghost"></i>
        </a>
    <?php endif;
}
add_shortcode('snapchat', 'snapchat');

function reddit() {
    if(!empty(SM['reddit'])): ?>
        <a href="<?php echo SM['reddit']; ?>" target="_blank" class="mr-3" title="Reddit">
            <i class="fab fa-reddit-alien"></i>
        </a>
    <?php endif;
}
add_shortcode('reddit', 'reddit');


/**
 * Generates the function comment for the given function body.
 *
 * @param array $atts the shortcode attributes
 * @param string|null $content the shortcode content
 * @throws Some_Exception_Class description of exception
 * @return string the generated HTML output
 */
function bootstrap_container_shortcode($atts, $content = null)
{
    $atts = shortcode_atts(
        array(
            'class' => '',
            'id' => '',
        ),
        $atts,
        'bootstrap_container'
    );

    $class = !empty($atts['class']) ? ' ' . esc_attr($atts['class']) : '';
    $id = !empty($atts['id']) ? ' id="' . esc_attr($atts['id']) . '"' : '';

    $output = '<div class="container' . $class . '"' . $id . '>' . $content . '</div>';

    return $output;
}
add_shortcode('container', 'bootstrap_container_shortcode');



/**
 * Generate the function comment for the given function body.
 *
 * @param array $atts The attributes passed to the shortcode.
 * @param string|null $content The content within the shortcode.
 * @throws None
 * @return string The generated output. That is <div class="row">
 */
function bootstrap_row_shortcode($atts, $content = null)
{
    $atts = shortcode_atts(
        array(
            'class' => '',
            'id' => '',
        ),
        $atts,
        'bootstrap_row'
    );

    $class = !empty($atts['class']) ? ' ' . esc_attr($atts['class']) : '';
    $id = !empty($atts['id']) ? ' id="' . esc_attr($atts['id']) . '"' : '';

    $output = '<div class="row' . $class . '"' . $id . '>' . do_shortcode($content) . '</div>';

    return $output;
}
add_shortcode('row', 'bootstrap_row_shortcode');



function bootstrap_col_shortcode($atts, $content = null)
{
    $atts = shortcode_atts(
        array(
            'class' => '',
            'id' => '',
            'size' => '', // Default size is an empty string
        ),
        $atts,
        'bootstrap_col'
    );

    $class = !empty($atts['class']) ? ' ' . esc_attr($atts['class']) : '';
    $id = !empty($atts['id']) ? ' id="' . esc_attr($atts['id']) . '"' : '';
    $size = !empty($atts['size']) ? 'col-' . esc_attr($atts['size']) : 'col';

    $output = '<div class="' . $size . $class . '"' . $id . '>' . do_shortcode($content) . '</div>';

    return $output;
}
add_shortcode('col', 'bootstrap_col_shortcode');