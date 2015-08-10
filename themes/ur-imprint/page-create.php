<?php
	get_header();
?>

	<!-- =================================================
	==== CREATE
	================================================== -->
	<section class="[ page-create ][ margin-bottom ][ js-product-filters ]">
		<div class="[ text-center ][ padding-top ]">
			<h1 class="[ no-margin ]">Create</h1>
		</div>

		<div class="[ wrapper ][ padding-top-bottom ][ text-center--medium ]">
			<ol class="[ row ][ italic ][  ]">
				<li class="[ column xmall-12 medium-4 ]">
					<p><small>Choose a product and color</small></p>
				</li><li
				class="[ column xmall-12 medium-4 ]">
					<p><small>Click on the “Add layer” button</small></p>
				</li><li
				class="[ column xmall-12 medium-4 ]">
					<p><small>Select from our exclusive designs or upload your own images</small></p>
				</li>
			</ol>
		</div><!-- wrapper -->

		<?php echo do_shortcode('[product_page id="71"]'); ?>

		<div class="[ padding-top-bottom--large ]">
			<h2 class="[ text-center ][ no-margin ]">Choose another garment from our catalogue</h2>
		</div>

		<div class="[ product-filters ][ bg-primary ][ padding-top-bottom ]">

			<div class="[ wrapper ]">
				<div class="[ row ]">

					<div class="[ column xmall-2 large-1 ]">
						<p class="[ padding-top--small ]">who</p>
					</div>
					<div class="[ column xmall-9 large-11 ][ button-filter-group ]" data-filter-group="product-cat">
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

					<div class="[ column xmall-2 large-1 ]">
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

					<div class="[ column xmall-2 large-1 ]">
						<p class="[ padding-top--small ]">style</p>
					</div>
					<div class="[ column xmall-9 large-11 ][ style-filters ][ button-filter-group ]" data-filter-group="style">
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
		</div><!-- [ bg-primary ][ padding-top-bottom ] -->
	</section><!-- product-filters -->

	<!-- =================================================
	==== PRODUCTS
	================================================== -->
	<section class="[ products ]">
		<div class="[ wrapper ]">
			<div class="[ row ][ products-isotope-container ]">

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
							<?php the_post_thumbnail( 'medium', array( 'class' => '[ image-responsive ]' ) ); ?>
							<div class="[ card-info ][ absolute ][ bg-secondary bg-opacity--9 ][ padding--small ]">
								<div class="[ card-name ]">
									<p class="[ light ]"><?php the_title(); ?></p>
								</div>
							</div>
						</a>
					</div>

				<?php endwhile; endif; wp_reset_query(); ?>

			</div><!-- row -->
		</div><!-- wrapper -->
	</section><!-- products -->

<?php get_footer(); ?>