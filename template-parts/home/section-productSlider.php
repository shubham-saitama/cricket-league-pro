<section class="products section-space">
    <div class="container">
        <div class="heading-wrap">
            <div class="heading-tag">
            Product Shop
            </div>
            <h2>Exclusive Collection</h2>
        </div>
        <div class="row">
            <div class="owl-carousel">
                <?php
                // Define arguments for the WP_Query
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => -1, // Retrieve all products
                );

                // Instantiate the WP_Query
                $products_query = new WP_Query($args);

                // Check if there are any products
                if ($products_query->have_posts()) {
                    // Start the loop
                    while ($products_query->have_posts()) {
                        $products_query->the_post();
                        // Get product meta fields
                        $product_price = get_post_meta(get_the_ID(), '_price', true);
                        $sale_price = get_post_meta(get_the_ID(), '_sale_price', true);
                        // Get product image URL
                        $product_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                        $current_currency = get_woocommerce_currency_symbol();
                        ?>
                        <div class="item-product">
                            <div class="product-cricket">
                                <?php if (class_exists('YITH_WCWL')): ?>
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="product-image">
                                    <img src="<?php echo $product_image_url; ?>" alt="<?php the_title(); ?>">
                                </div>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php
                                echo get_star_rating_custom();
                                ?>
                                <div class="price-wrapper">
                                    <p class="regular-price"><?php echo $current_currency;
                                    echo $product_price; ?></p>
                                    <?php if ($sale_price): ?>
                                        <p class="sale-price"><?php echo $current_currency;
                                        echo $sale_price; ?></p>
                                    <?php endif; ?>
                                </div>
                                <?php  // Get the product ID
                                        $product_id = get_the_ID();
                                        // Get the add to cart URL
                                        $add_to_cart_url = esc_url(wc_get_product($product_id)->add_to_cart_url());
                                        ?>
                                <a href="<?php echo $add_to_cart_url; ?>" class="button">Add to Cart</a>
                            </div>
                        </div>
                        <?php
                    }
                    // Reset post data
                    wp_reset_postdata();
                } else {
                    // If no products found
                    echo 'No products found.';
                }
                ?>
            </div>
        </div>
    </div>
</section>
