<?php
/*
 * Template part for the custom filters
 *
 */
$page_term_id = '';
if (isset(get_queried_object()->term_id)) {
  $page_term_id = get_queried_object()->term_id;
}

// print_r($page_term_id);
// exit;

$max_price = 0;
global $wpdb;
$results = $wpdb->get_results("SELECT MAX(cast(meta_value as unsigned)) AS max_price FROM `{$wpdb->prefix}postmeta` WHERE `meta_key` = '_price'");
if (count($results) && isset($results[0]) && isset($results[0]->max_price)) {
  $max_price = $results[0]->max_price;
}
if ($max_price) {
  $max_price = +$max_price;
}

?>
<div class="shop-page-filters" id="">
  <div class="accordion" id="accordionExample">
    <div class="flower-categories fsp-filter-box">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <?php echo esc_html('Categories', 'flower-shop-pro'); ?>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="flower-shop-filter">
          <!-- Categories content -->
          <div>
            <?php 
            $terms = get_terms(
              array(
                'post_type' => 'product',
                'taxonomy' => 'product_cat',
                'hide_empty' => true
              )
            );
            $cat_arr = [];
            $checked_cat = '';
            if (isset($_GET['product_category']) && $_GET['product_category']) {
              $checked_cat = $_GET['product_category'];
            }

            if ($checked_cat) {
              $cat_arr = explode(',', $checked_cat);
            }
            ?>
            <ul class="shop-page-produts-category">
              <?php
              foreach ($terms as $term_value) {
                //remove uncategorized from loop
                if ($term_value->slug == 'uncategorized') {
                  continue;
                } ?>
                <li>
                  <label>
                    <input class="category-filter-checkbox" type="checkbox" name="product_category" value="<?php echo $term_value->term_id; ?>" <?php if (in_array($term_value->term_id, $cat_arr)) {
                                                                                                                                                    echo "checked";
                                                                                                                                                  } ?> />
                    <span><?php echo $term_value->name; ?></span>
                  </label>
                  <span><?php echo ' (' . $term_value->count . ')'; ?></span>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="flower-categories fsp-filter-box">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <?php echo esc_html('Price', 'flower-shop-pro'); ?>
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <!-- Price content -->
          <label for="#product-amount" class="d-flex justify-content-between pb-3">
            <span id="product-amount-start" class="product-amount-start">$0</span>
            <span id="product-amount-end" class="product-amount-end">$<?php echo $max_price; ?></span>
          </label>
          <div id="product-price-slider" class="product-price-slider"></div>
        </div>
      </div>
    </div>

    <div class="rating flower-categories fsp-filter-box">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <?php echo esc_html('Rating', 'flower-shop-pro'); ?>
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="flower-shop-filter">
          <!-- Rating content -->
          <div>
            <ul class="shop-page-produts-category">
              <li>
                <label>
                  <input class="category-filter-checkbox" type="checkbox" name="rating" value="5" />
                  <span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span>
                  (5)
                </label>
              </li>
              <li>
                <label>
                  <input class="category-filter-checkbox" type="checkbox" name="rating" value="4" />
                  <span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star o"></span></span>
                  (4)
                </label>
              </li>
              <li>
                <label>
                  <input class="category-filter-checkbox" type="checkbox" name="rating" value="3" />
                  <span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star o"></span><span class="fa fa-star o"></span></span>(3)
                </label>
              </li>
              <li>
                <label>
                  <input class="category-filter-checkbox" type="checkbox" name="rating" value="2" />
                  <span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star o"></span><span class="fa fa-star o"></span><span class="fa fa-star o"></span></span>(2)
                </label>
              </li>
              <li>
                <label>
                  <input class="category-filter-checkbox" type="checkbox" name="rating" value="1" />
                  <span><span class="fa fa-star"></span><span class="fa fa-star o"></span><span class="fa fa-star o"></span><span class="fa fa-star o"></span><span class="fa fa-star o"></span></span>(1)
                </label>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>