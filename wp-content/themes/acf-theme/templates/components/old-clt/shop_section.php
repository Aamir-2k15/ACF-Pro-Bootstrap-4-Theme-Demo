<?php $section = get_row_layout('shop_section'); ?>
<?php if (!empty($section)) : ?>
    <?php $product_slider_section = get_sub_field('product_slider_section'); ?>
    <style>
        .share-section {
            margin-top: 0;
        }
    </style>
    <section class="shop-section z-over">
        <div class="container rel">
            <?php $n = 0;
            foreach ($product_slider_section as $product_slider) : $n++; ?>
                <div class="shop-head">
                    <h1><?php echo $product_slider['heading']; ?></h1>

                    <?php if (empty($product_slider['filter']) == 'Yes') : ?>
                        <div class="sorting">
                            <h2>Sort By</h2>
                            <select name="category select_three" id="category" form="">
                                <option value="">Category</option>
                                <option value="">Category 2</option>
                                <option value="">Category 3</option>
                                <option value="">Category 4</option>
                            </select>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="shop-row">
                    <div class="shop-list">
                        <div class="owl-carousel owl-theme">

                            <?php foreach ($product_slider['products_to_slide'] as $single) : ?>

                                <?php
                                $product = wc_get_product($single->ID);

                                // dd($product);

                                $product->get_regular_price();
                                $product->get_sale_price();
                                $product->get_price();
                                $img_url =  get_the_post_thumbnail_url($single->ID);
                                $no_img  = get_template_directory_uri() . '/images/woocommerce-placeholder.png';
                                ?>
                                <div class="shop-item">
                                    <a href="<?php echo $single->guid; ?>">
                                        <img src="<?php echo $img_url != "" ? $img_url : $no_img; ?>" title="<?php echo $single->post_title; ?>" alt="<?php echo $single->post_title; ?>">
                                    </a>
                                    <div class="item-description">
                                        <a href="<?php echo $single->guid; ?>">
                                            <?php echo $single->post_title; ?>
                                        </a>
                                        <p class="price"><b><?php echo wc_price($product->get_price());?></b></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>


                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php if ($product_slider['button'] != "") : ?>
                <div class="text-center">
                    <div class="view-all">
                        <a href="<?php echo $product_slider['button']['url']; ?>"><?php echo $product_slider['button']['title']; ?></a>
                    </div>
                </div>
            <?php endif; ?>
            <?php $call_to_action = get_sub_field('call_to_action'); ?>
            <?php if (!empty($call_to_action) && $n >= 3) : ?>
                <div class="button-div">
                    <p>How is your user experience? <a href="<?php echo $call_to_action['url']; ?>"><?php echo $call_to_action['title']; ?></a></p>
                </div>
            <?php endif; ?>
        </div>

    </section>
<?php endif; ?>