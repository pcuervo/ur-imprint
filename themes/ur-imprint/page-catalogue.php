<?php get_header(); ?>

	<!-- =================================================
	==== MAIN FILTERS
	================================================== -->
	<section class="[ main-filters ][ padding ][ margin-bottom ]">
		<div class="[ wrapper ]">
			<div class="[ text-center ]">
				<h2 class="[ ]">Catalogue</h2>
				<div class="[ button-group ][ color-light ]">
					<button class="[ button button--primary ][ js-btn-designs ][ active ]">designs</button>
					<button class="[ button button--primary button--hollow ][ js-btn-products ]">products</button>
				</div>
			</div>
		</div><!-- wrapper -->
	</section><!-- main-filters -->



	<!-- =================================================
	==== DESIGN FILTERS
	================================================== -->
	<section class="[ design-filters ][ bg-primary ][ margin-bottom ][ js-design-filters ]">
		<div class="[ wrapper ]">
			<div class="[ row ][ color-light ][ padding-top-bottom ]">

				<div class="[ column xmall-3 ]">
					<p class="[ padding-top--small ]">theme</p>
				</div>
				<div class="[ theme-filters ][ button-group ]" data-filter-group="theme">
					<div class="[ column xmall-9 ]">
						<button class="[ button button--light ][ margin-bottom--small ]" data-filter="">
							<span class="[ block ]">all</span>
						</button>
						<?php 
						$theme_terms = get_terms( 'theme', 'orderby=name&hide_empty=1' );
						foreach ( $theme_terms as $theme ) : ?>
							<button class="[ button button--light button--hollow ][ margin-bottom--small ]" data-filter=".<?php echo $theme->slug; ?>">
								<span class="[ block ]"><?php echo $theme->name; ?></span>
							</button>
						<?php endforeach; ?>
					</div>
				</div><!-- theme-filters -->
				
				<div class="[ column xmall-3 ]">
					<p class="[ padding-top--small ]">type</p>
				</div>
				<div class="[ type-filters ][ button-group ]" data-filter-group="type">
					<div class="[ column xmall-9 ]">
						<button class="[ button button--light ][ margin-bottom--small ]" data-filter="">
							<span class="[ block ][ color-primary ]">all</span>
						</button>
						<?php 
						$type_terms = get_terms( 'type', 'orderby=name&hide_empty=1' );
						foreach ( $type_terms as $type ) : ?>
							<button class="[ button button--light button--hollow ][ margin-bottom--small ]" data-filter=".<?php echo $type->slug; ?>">
								<span class="[ block ][ color-light ]"><?php echo $type->slug; ?></span>
							</button>
						<?php endforeach; ?>
					</div>
				</div><!-- type-filters -->

				<div class="[ column xmall-3 ]">
					<p class="[ padding-top--small ]">author</p>
				</div>
				<div class="[ author-filters ][ button-group ]" data-filter-group="author">
					<div class="[ column xmall-9 ]">
						<button class="[ button button--light ][ margin-bottom--small ]" data-filter="">
							<span class="[ block ][ color-primary ]">all</span>
						</button>
						<?php 
						$author_terms = get_terms( 'design-author', 'orderby=name&hide_empty=1' );
						foreach ( $author_terms as $author ) : ?>
							<button class="[ button button--light button--hollow ][ margin-bottom--small ]" data-filter=".<?php echo $author->slug; ?>">
								<span class="[ block ][ color-light ]"><?php echo $author->name; ?></span>
							</button>
						<?php endforeach; ?>
					</div>
				</div><!-- author-filters -->
			</div>
		</div><!-- wrapper -->
	</section><!-- design-filters -->



	<!-- =================================================
	==== PRODUCT FILTERS
	================================================== -->
	<section class="[ product-filters ][ bg-primary ][ margin-bottom ][ js-product-filters ][ hidden ]">
		<div class="[ wrapper ]">
			<div class="[ row ][ color-light ][ padding-top-bottom ]">

				<div class="[ column xmall-3 ]">
					<p class="[ padding-top--small ]">who</p>
				</div>
				<div class="[ product-filters ][ button-group ]" data-filter-group="product-cat">
					<div class="[ column xmall-9 ]">
						<button class="[ button button--light ][ margin-bottom--small ]" data-filter="">
							<span class="[ block ][ color-primary ]">all</span>
						</button>
						<?php 
						$product_cat_terms = get_terms( 'product_cat', 'orderby=name&hide_empty=0' );
						foreach ( $product_cat_terms as $product_cat ) : ?>
							<button class="[ button button--light button--hollow ][ margin-bottom--small ]" data-filter=".<?php echo $product_cat->slug; ?>">
								<span class="[ block ][ color-light ]"><?php echo $product_cat->name; ?></span>
							</button>
						<?php endforeach; ?>
					</div>
				</div><!-- product-filters -->
				
				<div class="[ column xmall-3 ]">
					<p class="[ padding-top--small ]">type</p>
				</div>
				<div class="[ type-filters ][ button-group ]" data-filter-group="product-type">
					<div class="[ column xmall-9 ]">
						<button class="[ button button--light ][ margin-bottom--small ]" data-filter="">
							<span class="[ block ][ color-primary ]">all</span>
						</button>
						<?php 
						$product_type_terms = get_terms( 'pa_product-type', 'orderby=name&hide_empty=1' );
						foreach ( $product_type_terms as $product_type ) : ?>
							<button class="[ button button--light button--hollow ][ margin-bottom--small ]" data-filter=".<?php echo $product_type->slug; ?>">
								<span class="[ block ][ color-light ]"><?php echo $product_type->name; ?></span>
							</button>
						<?php endforeach; ?>
					</div>
				</div><!-- type-filters -->

				<div class="[ column xmall-3 ]">
					<p class="[ padding-top--small ]">author</p>
				</div>
				<div class="[ author-filters ][ button-group ]" data-filter-group="style">
					<div class="[ column xmall-9 ]">
						<button class="[ button button--light ][ margin-bottom--small ]" data-filter="">
							<span class="[ block ][ color-primary ]">all</span>
						</button>
						<?php 
						$style_terms = get_terms( 'pa_style', 'orderby=name&hide_empty=1' );
						foreach ( $style_terms as $style ) : ?>
							<button class="[ button button--light button--hollow ][ margin-bottom--small ]" data-filter=".<?php echo $style->slug; ?>">
								<span class="[ block ][ color-light ]"><?php echo $style->name; ?></span>
							</button>
						<?php endforeach; ?>
					</div>
				</div><!-- author-filters -->
			</div>
		</div><!-- wrapper -->
	</section><!-- product-filters -->



	<!-- =================================================
	==== DESIGNS
	================================================== -->
	<section class="[ designs ]">
		<div class="[ wrapper ]">
			<div class="[ row ][ designs-isotope-container ]">

				<?php 
				$designs_args = array(
					'post_type'			=> 'designs',
					'posts_per_page'	=> -1,
				);
				$designs_query = new WP_Query( $designs_args );
				if( $designs_query->have_posts() ) : while ( $designs_query->have_posts() ) : $designs_query->the_post(); 
					$design_filter_classes = get_design_filter_classes( $post->ID );
				?>	
					<div class="[ column xmall-6 ][ <?php echo $design_filter_classes; ?>]">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'thumb', array( 'class' => '[ image-responsive ]' ) ); ?>
						</a>
					</div>
					
				<?php endwhile; endif; wp_reset_query(); ?>

			</div><!-- row -->
		</div><!-- wrapper -->
	</section><!-- designs -->



	<!-- =================================================
	==== PRODUCTS
	================================================== -->
	<section class="[ products ][ products-isotope-container ][ hidden ]">
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
					<div class="[ column xmall-6 ][ <?php echo $product_filter_classes; ?>]">
						<a href="<?php the_permalink(); ?>">
							<?php echo get_the_post_thumbnail( $products_query->post->ID, 'thumb', array( 'class' => '[ image-responsive ]' ) );  ?>
						</a>
					</div>
					
				<?php endwhile; endif; wp_reset_query(); ?>

			</div><!-- row -->
		</div><!-- wrapper -->
	</section><!-- products -->

<?php get_footer(); ?>