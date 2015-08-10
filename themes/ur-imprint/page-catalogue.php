+<?php get_header(); ?>

	<!-- =================================================
	==== MAIN FILTERS
	================================================== -->
	<section class="[ main-filters ][ margin-bottom ]">
		<div class="[ wrapper ]">
			<div class="[ text-center ][ padding-top ]">
				<h1 class="[ ]">Catalogue</h1>
				<div class="[ button-group ]">
					<button class="[ button button--primary button--hollow ][ lowercase ][ js-btn-designs ][ active ]">designs</button>
					<button class="[ button button--primary button--hollow ][ lowercase ][ js-btn-products ]">products</button>
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

				<div class="[ column xmall-2 large-1 ]">
					<p class="[ padding-top--small ]">theme</p>
				</div>
				<div class="[ column xmall-9 large-11 ][ theme-filters ][ button-filter-group ]" data-filter-group="theme">
					<button class="[ button button--light button--hollow active ][ margin-bottom--small ][ lowercase ]" data-filter="">
						all
					</button>
					<?php
					$theme_terms = get_terms( 'theme', 'orderby=name&hide_empty=1' );
					foreach ( $theme_terms as $theme ) : ?>
						<button class="[ button button--light button--hollow ][ margin-bottom--small ][ lowercase ]" data-filter=".<?php echo $theme->slug; ?>">
							<?php echo $theme->name; ?>
						</button>
					<?php endforeach; ?>
				</div><!-- theme-filters -->

				<div class="[ column xmall-2 large-1 ]">
					<p class="[ padding-top--small ]">type</p>
				</div>
				<div class="[ column xmall-9 large-11 ][ type-filters ][ button-filter-group ]" data-filter-group="type">
					<button class="[ button button--light button--hollow active ][ margin-bottom--small ][ lowercase ]" data-filter="">
						all
					</button>
					<?php
					$type_terms = get_terms( 'type', 'orderby=name&hide_empty=1' );
					foreach ( $type_terms as $type ) : ?>
						<button class="[ button button--light button--hollow ][ margin-bottom--small ][ lowercase ]" data-filter=".<?php echo $type->slug; ?>">
							<?php echo $type->slug; ?>
						</button>
					<?php endforeach; ?>
				</div><!-- type-filters -->

				<div class="[ column xmall-2 large-1 ]">
					<p class="[ padding-top--small ]">author</p>
				</div>
				<div class="[ column xmall-9 large-11 ][ author-filters ][ button-filter-group ]" data-filter-group="author">
					<button class="[ button button--light button--hollow active ][ margin-bottom--small ][ lowercase ]" data-filter="">
						all
					</button>
					<?php
					$author_terms = get_terms( 'design-author', 'orderby=name&hide_empty=1' );
					foreach ( $author_terms as $author ) : ?>
						<button class="[ button button--light button--hollow ][ margin-bottom--small ][ lowercase ]" data-filter=".<?php echo $author->slug; ?>">
							<?php echo $author->name; ?>
						</button>
					<?php endforeach; ?>
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
	==== DESIGNS
	================================================== -->
	<section class="[ designs ]">
		<div class="[ wrapper ]">
			<div class="[ padding-top-bottom ][ text-center--medium ]">
				<p class="[ margin-bottom ]">Do you want to print one of these designs? It’s very easy:</p>
				<p></p>
				<div class="[ row ][ italic ][  ]">
					<div class="[ column xmall-12 medium-3 ][ margin-bottom--small ]">
						<p><small>Go to “Products” and choose the product of your choice</small></p>
					</div><div
					class="[ column xmall-12 medium-3 ][ margin-bottom--small ]">
						<p><small>Press the “Customize” button on the selected product</small></p>
					</div><div
					class="[ column xmall-12 medium-3 ][ margin-bottom--small ]">
						<p><small>Once you are on the product designer, click the “Add layer” button</small></p>
					</div>
					<div
					class="[ column xmall-12 medium-3 ][ margin-bottom--small ]">
						<p><small>Click on “Choose from gallery” option and select the art you would like to use</small></p>
					</div>
				</div>
			</div><!-- padding-top-bottom -->
			<div class="[ row ][ designs-isotope-container ]">

				<?php
				$designs_args = array(
					'post_type'			=> 'designs',
					'posts_per_page'	=> -1,
				);
				$designs_query = new WP_Query( $designs_args );
				if( $designs_query->have_posts() ) : while ( $designs_query->have_posts() ) : $designs_query->the_post();
					$design_filter_classes = get_design_filter_classes( $post->ID );
					$large_image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				?>
					<div class="[ card ][ column xmall-6 medium-4 xlarge-3 ][ margin-bottom--small ][ <?php echo $design_filter_classes; ?>]">
						<a class="[ relative ][ block ][ js-lightbox-opener ]" href="#">
							<?php the_post_thumbnail( 'thumbnail', array( 'class' => '[ image-responsive ]' ) ); ?>
							<div class="[ card-info ][ absolute ][ bg-secondary bg-opacity--9 ][ padding--small ]">
								<div class="[ card-name ]">
									<p class="[ light ]"><?php the_title(); ?></p>
								</div><!-- card-name -->
							</div>
						</a>
						<div class="[ image-modal ][ hide ]">
							<div class="[ wrapper ]">
								<?php the_post_thumbnail('large'); ?>
							</div>
							<artcile class="[ initial ]">
								<div class="[ action-buttons action-buttons--right ]">
									<a href="#" class="[ button button--secondary button--circle ][ border border--light border--large ][ js-lightbox-closer ]" data-modal="nav">
										<img class="[ svg icon icon--small ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/close.svg" alt="close">
									</a>
								</div><!-- action-buttons -->
							</artcile><!-- initial -->
						</div>
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
					<div class="[ card ][ column xmall-6 medium-4 xlarge-3 ][ margin-bottom--small ] <?php echo $product_filter_classes; ?>]">
						<a class="[ relative ][ block ]" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'thumbnail', array( 'class' => '[ image-responsive ]' ) ); ?>
							<div class="[ card-info ][ absolute ][ bg-secondary bg-opacity--9 ][ padding--small ]">
								<div class="[ card-name ]">
									<p class="[ light ]"><?php the_title(); ?></p>
								</div><!-- card-name -->
							</div>
						</a>
					</div>

				<?php endwhile; endif; wp_reset_query(); ?>

			</div><!-- row -->
		</div><!-- wrapper -->
	</section><!-- products -->

<?php get_footer(); ?>