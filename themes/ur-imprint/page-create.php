<?php  
	get_header(); 
	echo do_shortcode('[product_page id="71"]');
?>

	<!-- =================================================
	==== PRODUCT FILTERS
	================================================== -->
	<section class="[ product-filters ][ bg-primary ][ margin-bottom ][ js-product-filters ]">
		<div class="[ wrapper ]">
			<div class="[ row ][ color-light ][ padding-top-bottom ]">

				<div class="[ column xmall-2 large-1 ]">
					<p class="[ padding-top--small ]">who</p>
				</div>
				<div class="[ column xmall-9 large-11 ][ product-filters ][ button-filter-group ]" data-filter-group="product-cat">
					<button class="[ button button--light button--hollow active ][ margin-bottom--small ][ lowercase ]" data-filter="">
						all
					</button>
					<?php
					$product_cat_terms = get_terms( 'product_cat', 'orderby=name&hide_empty=0' );
					foreach ( $product_cat_terms as $product_cat ) : ?>
						<button class="[ button button--light button--hollow ][ margin-bottom--small ][ lowercase ]" data-filter=".<?php echo $product_cat->slug; ?>">
							<?php echo $product_cat->name; ?>
						</button>
					<?php endforeach; ?>
				</div><!-- product-filters -->

				<div class="[ column xmall-12 medium-2 large-1  ]">
					<p class="[ padding-top--small ]">type</p>
				</div>
				<div class="[ column xmall-9 large-11 ][ type-filters ][ button-filter-group ]" data-filter-group="product-type">
					<button class="[ button button--light button--hollow active ][ margin-bottom--small ][ lowercase ]" data-filter="">
						all
					</button>
					<?php
					$product_type_terms = get_terms( 'pa_product-type', 'orderby=name&hide_empty=1' );
					foreach ( $product_type_terms as $product_type ) : ?>
						<button class="[ button button--light button--hollow ][ margin-bottom--small ][ lowercase ]" data-filter=".<?php echo $product_type->slug; ?>">
							<?php echo $product_type->name; ?>
						</button>
					<?php endforeach; ?>
				</div><!-- type-filters -->

				<div class="[ column xmall-12 medium-2 large-1  ]">
					<p class="[ padding-top--small ]">author</p>
				</div>
				<div class="[ column xmall-9 large-11 ][ author-filters ][ button-filter-group ]" data-filter-group="style">
					<button class="[ button button--light button--hollow active ][ margin-bottom--small ][ lowercase ]" data-filter="">
						all
					</button>
					<?php
					$style_terms = get_terms( 'pa_style', 'orderby=name&hide_empty=1' );
					foreach ( $style_terms as $style ) : ?>
						<button class="[ button button--light button--hollow ][ margin-bottom--small ][ lowercase ]" data-filter=".<?php echo $style->slug; ?>">
							<?php echo $style->name; ?>
						</button>
					<?php endforeach; ?>
				</div><!-- author-filters -->
			</div>
		</div><!-- wrapper -->
	</section><!-- product-filters -->
	
	<!-- =================================================
	==== PRODUCTS
	================================================== -->
	<section class="[ products ][ products-isotope-container ]">
		<div class="[ wrapper ]">
			<div class="[ row ]">

				<?php
				$products_args = array(
					'post_type' => 'product',
					'posts_per_page' => -1,
					'tax_query'			=> array(
						array(
							'taxonomy' 	=> 'pa_garment',
							'field' 	=> 'slug',
							'terms'		=> 'blank',
						)
					),
				);
				$products_query = new WP_Query( $products_args );

				if( $products_query->have_posts() ) : while ( $products_query->have_posts() ) : $products_query->the_post();
					global $product;
					$product_filter_classes = get_product_filter_classes( $product->ID );
				?>
					<div class="[ card ][ column xmall-6 medium-4 xlarge-3 ][ margin-bottom--small ] <?php echo $product_filter_classes; ?>]">
						<a class="[ relative ][ block ]" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'thumbnail', array( 'class' => '[ image-responsive ]' ) ); ?>
							<div class="[ card-name ][ absolute ][ bg-secondary bg-opacity--9 ][ padding--small ]">
								<p class="[ light ]"><?php the_title(); ?></p>
							</div>
						</a>
					</div>

				<?php endwhile; endif; wp_reset_query(); ?>

			</div><!-- row -->
		</div><!-- wrapper -->
	</section><!-- products -->

<?php get_footer(); ?>