<?php



function get_shop_page_filter(){
	$post_data = $_POST['data'];




		$items_per_page = 9;
	//	$bwp_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$paged = isset($_POST['data']['paged']) ? $_POST['data']['paged'] : 1;

//$bwp_paged = isset($_POST['data']['bwp_paged']) ? $_POST['data']['bwp_paged'] : 1;

	  $args = array(
	    'post_type'       =>  'product',
	    'post_status'     =>  'publish',
	    // 'posts_per_page'  =>  $items_per_page,
		 //	'bwp_paged'           =>  $bwp_paged,

		'posts_per_page'  =>  9,

        'paged'           => $paged,

	  );

	if ( $_POST['data'] ) {
		$post_data = $_POST['data'];

		// if ( isset( $post_data['search_value'] ) ) {
		// 	$args['s'] = $post_data['search_value'];
		// }

		$meta_query_array = array(
			'relation' => 'AND'
		);

		$tax_query_array = array(
			'relation' => 'AND'
		);

		if( isset( $post_data['product_category'] ) && count( $post_data['product_category'] ) ) {
			$category = $post_data['product_category'];

			array_push( $tax_query_array, array(
			  'taxonomy'  =>  'product_cat',
			  'field'     =>  'term_id',
			  'terms'     =>  $category
			));
		}

	

		if( isset( $post_data['values'] ) && count( $post_data['values'] ) ) {

			array_push( $meta_query_array,
			array(
				array(
					'key' => '_price',
					'value' => array($post_data['values'][0], $post_data['values'][1]),
					'compare' => 'BETWEEN',
					'type' => 'numeric',
					)
					)
				);

		}

		if( isset( $post_data['rating'] ) && count( $post_data['rating'] ) ) {

			$rating = $post_data['rating'][0];
			if ( $rating == '5' ) {
				$array_rating = array(
					'key'     => '_wc_average_rating',
					'value'   => $rating,
					'compare' => '>=',
					'type'    => 'NUMERIC',
				);
			} elseif ($rating == '2') {
				$array_rating = array(
						'key'     => '_wc_average_rating',
						'value'   => array('0', '2.9'),
						'compare' => 'BETWEEN',
						'type'    => 'NUMERIC',
					);
			} else {
				$array_rating = array(
						'key'     => '_wc_average_rating',
						'value'   => array( $rating, $rating.'.9'),
						'compare' => 'BETWEEN',
						'type'    => 'NUMERIC',
					);
			}

			array_push( $meta_query_array,
			array(
				$array_rating
				)
			);
		}

		

		$args['meta_query'] = $meta_query_array;
		$args['tax_query'] = $tax_query_array;
	}


$args['orderby'] = 'menu_order title';
$args['order'] = 'ASC';

   
  $loop = new WP_Query($args);
  $shop_page_loop_html = '';

  ob_start();
  if ($loop->have_posts()):
      while ($loop->have_posts()):
          $loop->the_post();
         
          // Get product meta fields
          $product_price = get_post_meta(get_the_ID(), '_price', true);
          $sale_price = get_post_meta(get_the_ID(), '_sale_price', true);
          // Get product image URL
          $product_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
          $current_currency = get_woocommerce_currency_symbol();
          ?>
          <div class="item-product col-lg-4 col-md-6 col-12 mb-3">
              <div class="product">
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
      endwhile;
  endif;

      

       
    $shop_page_loop_html = ob_get_clean();


        $base = $_POST['data']['base_url'];
      
        if (str_contains($base, '?')) {
          $base .= '&paged=999999999';
        } else {
          $base .= '?paged=999999999';
        }
      
        $base = str_replace( 999999999, '%#%', $base );
      
        $current = 1;
        $total = $loop->max_num_pages;

        
        $pages = paginate_links(
            array(
                // Other parameters...
                'base'      => add_query_arg('paged', '%#%'),
                'format'    => '',
                'current'   => max(1, $paged),
                'total'     => $loop->max_num_pages,
                'prev_text' => '<',
                'next_text' => '>',
              //  'type'      => 'list',
                'add_args'  => array(
                    'product_category' => isset($_POST['data']['product_category']) ? $_POST['data']['product_category'] : '',
                ),
            )
            );
        
        
          $response_data = array(
           
            'html'          =>  $shop_page_loop_html,
            'pagination'    =>  $pages
          );
        
          wp_send_json( $response_data );
          exit;
        

}
add_action('wp_ajax_get_shop_page_filter','get_shop_page_filter');
add_action('wp_ajax_nopriv_get_shop_page_filter','get_shop_page_filter');

