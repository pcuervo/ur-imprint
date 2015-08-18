<?php get_header(); ?>

	<!-- =================================================
	==== HERO
	================================================== -->
	<section class="[ hero hero-home ]">
		<div class="[ screen screen-dark--30 ][ z-index-1 ]"></div>
		<div class="[ padding-top-bottom--large ][ relative z-index-2 ]">
			<div class="[ wrapper ]">
				<div class="[ text-center color-light ]">
					<div class="[ bg-image-placeholder__wrapper bg-image-placeholder__wrapper__logo ][ margin-bottom--large ][ hidden--xlarge-inline ]">
						<a class="[ bg-image-placeholder bg-image-placeholder__logo ]" href="#"></a>
					</div>
					<span class="[ padding ][ shown--xlarge ]">&nbsp;</span><br />
					<span class="[ padding ][ shown--xlarge ]">&nbsp;</span><br />
					<span class="[ padding ][ shown--xxlarge ]">&nbsp;</span><br />
					<h1 class="[ text-shadow ]">Bring your imagination to life</h1>
					<a href="<?php echo site_url( 'create' ); ?>" class="[ button button--secondary ]">get started</a>
				</div>
			</div><!-- wrapper -->
		</div>
	</section><!-- hero -->



	<!-- =================================================
	==== VIDEO
	================================================== -->
	<section class="[ video ][ bg-primary ]">
		<div class="[ wrapper ]">
			<div class="[ padding-top-bottom--large ]">
				<div class="[ row ][ xmall-12 medium-10 large-10 ][ center ]">
					<div class="[ margin-bottom ][ xmall-12 large-6 ][ relative ][ inline-block align-middle ]">
						<video poster="<?php echo THEMEPATH; ?>videos/poster.jpg" id="video" controls class="[ xmall-12 ]">
							<source src="<?php echo THEMEPATH; ?>videos/video1.webm" type="video/webm">
							<source src="<?php echo THEMEPATH; ?>videos/video1.ogv" type="video/ogv">
							<source src="<?php echo THEMEPATH; ?>videos/video1.mp4" type="video/mp4">
							<p>
								Your browser doesn't support HTML5 video.
								<a href="<?php echo THEMEPATH; ?>videos/video1.mp4">Download</a> the video instead.
							</p>
						</video>
					</div><div class="[ shown-large--inline ][ large-1 ][ inline-block align-middle ]">
						&nbsp;
					</div><div
					class="[ xmall-12 large-5 ][ text-center text-left--large ][ inline-block align-middle ]">
						<h2>UR Imprint Design Studio</h2>
						<p class="[ italic ]">Direct to garment printing technology for bright long-lasting prints.</p>
					</div>
				</div><!-- row -->

			</div>
		</div><!-- wrapper -->
	</section>



	<!-- =================================================
	==== STEPS
	================================================== -->
	<section class="[ steps ]">
		<div class="[ wrapper ]">
			<div class="[ padding-top-bottom--large ]">
				<h2 class="[ text-center ]">3 easy steps</h2>
				<div class="[ row ][ relative ][ text-center ]">
					<div class="[ column xmall-4 ][ relative ]">
						<div class="[ z-index-2 ][ relative ]">
							<div class="[ inline-block ][ circle ][ border border--light border--xlarge ][ bg-secondary ][ drop-shadow ][ margin-bottom ]">
								<img class="[ svg icon icon--medium ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/shirt.svg" alt="shirt">
							</div>
							<p class="[ italic ]">Choose</p>
						</div>
						<hr class="[ connector connector--right ][ bg-dark ][ z-index-1 ]">
					</div>
					<div class="[ column xmall-4 ][ relative ]">
						<div class="[ z-index-2 ][ relative ]">
							<div class="[ inline-block ][ circle ][ border border--light border--xlarge ][ bg-secondary ][ drop-shadow ][ margin-bottom ]">
								<img class="[ svg icon icon--medium ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/design.svg" alt="design">
							</div>
							<p class="[ italic ]">Customise</p>
						</div>
						<hr class="[ connector connector--left ][ bg-dark ][ z-index-1 ]">
						<hr class="[ connector connector--right ][ bg-dark ][ z-index-1 ]">
					</div>
					<div class="[ column xmall-4 ][ relative ]">
						<div class="[ z-index-2 ][ relative ]">
							<div class="[ inline-block ][ circle ][ border border--light border--xlarge ][ bg-secondary ][ drop-shadow ][ margin-bottom ]">
								<img class="[ svg icon icon--medium ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/shop.svg" alt="shop">
							</div>
							<p class="[ italic ]">Checkout</p>
						</div>
						<hr class="[ connector connector--left ][ bg-dark ][ z-index-1 ]">
					</div>
				</div>
			</div>
		</div><!-- wrapper -->
	</section>


	<!-- =================================================
	==== CHARACTERISTICS
	================================================== -->
	<section class="[ characteristics ][ bg-primary ]">
		<div class="[ wrapper--large ]">
			<div class="[ clearfix ][ text-center ]">
				<article class="[ square ][ bg-primary--darken-10 ]">
					<div class="[ square-content ][ color-light ]">
						<img class="[ svg icon icon--large ][ center ][ margin-bottom--small ]" src="<?php echo THEMEPATH; ?>icons/badge.svg" alt="menu">
						<p class="[ ]">Premium quality</p>
					</div><!-- square-content -->
				</article><!-- square -->
				<article class="[ square ][ bg-primary ]">
					<div class="[ square-content ][ color-light ]">
						<img class="[ svg icon icon--large ][ center ][ margin-bottom--small ]" src="<?php echo THEMEPATH; ?>icons/lightning.svg" alt="menu">
						<p class="[ ]">Fast service</p>
					</div><!-- square-content -->
				</article><!-- square -->
				<article class="[ square ][ bg-primary ]">
					<div class="[ square-content ][ color-light ]">
						<img class="[ svg icon icon--large ][ center ][ margin-bottom--small ]" src="<?php echo THEMEPATH; ?>icons/shirts.svg" alt="menu">
						<p class="[ ]">Product variety</p>
					</div><!-- square-content -->
				</article><!-- square -->
				<article class="[ square ][ bg-primary--darken-10 ]">
					<div class="[ square-content ][ color-light ]">
						<img class="[ svg icon icon--large ][ center ][ margin-bottom--small ]" src="<?php echo THEMEPATH; ?>icons/face.svg" alt="menu">
						<p class="[ ]">Client satisfaction</p>
					</div><!-- square-content -->
				</article><!-- square -->
			</div>
		</div><!-- wrapper -->
	</section><!-- characteristics -->



	<!-- =================================================
	==== PRODUCT CATEGORIES
	================================================== -->
	<section class="[ product-categories ]">
		<div class="[ clearfix ]">
			<?php
			$counter = 1;
			$args = array(
				'taxonomy'     => 'product_cat',
				'hide_empty'   => 1
				);
			$all_categories = get_categories( $args );
			foreach ( $all_categories as $cat ) :
				$cat_thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
				$cat_image_url = wp_get_attachment_image_src( $cat_thumbnail_id, 'medium' );
				$cat_image_url = $cat_image_url[0] ?>
				<div class="[ span xmall-12 medium-4 ][ bg-secondary bg-secondary--darken-<?php echo $counter; ?>0 ]">
					<a class="[ clearfix ][ block ]" href="<?php echo get_term_link( $cat->slug, 'product_cat' ); ?>">
						<div class="[ xmall-4 medium-12 ][ inline-block align-middle ]" href="<?php echo get_term_link( $cat->slug, 'product_cat' ); ?>">
							<img class="[ image-responsive ]" src="<?php echo $cat_image_url; ?>" alt="">
						</div><div
						class="[ xmall-8 medium-12 ][ inline-block align-middle ][ no-margin padding-top-bottom--large ]" href="<?php echo get_term_link( $cat->slug, 'product_cat' ); ?>">
							<p class="[ text-center ][ color-light italic lead-text ]"><?php echo $cat->name ?></p>
						</div>
					</a>
				</div>
			<?php
				$counter++;
				if ( $counter == 11 ){
					$counter = 1;
				}
			endforeach; wp_reset_query(); ?>
		</div>
	</section><!-- product-categories -->



	<!-- =================================================
	==== TESTIMONIALS
	================================================== -->
	<?php
	$testimonials_args = array(
		'post_type' => 'testimonials',
		'posts_per_page' => -1,
	);
	$testimonials_query = new WP_Query( $testimonials_args );
	if( $testimonials_query->have_posts() ) : ?>
		<section class="[ testimonials ][ bg-primary ][ color-light ]">
			<div class="[ padding-top-bottom--large ]">
				<div class="[ wrapper ]">
					<div class="[ cycle-slideshow ]"
						data-cycle-fx="scrollHorz"
						data-cycle-pause-on-hover="true"
						data-cycle-timeout="4000"
						data-cycle-speed="650"
						data-cycle-slides="> div"
						data-cycle-swipe="true"
						data-cycle-center-horz="true"
						data-cycle-center-vert="true"
						data-cycle-auto-height="calc"
					>
						<?php
						while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();
							$company = get_post_meta($post->ID, '_company_meta', true);
						?>
							<div class="[ xmall-12 medium-8 large-6 ][ padding-top-bottom--large ]">
								<div class="[ xmall-12 ]">
									<blockquote class="[ margin-bottom ]"><?php echo $post->post_content; ?></blockquote>
									<div class="[ text-right ]">
										<p><strong><?php echo $post->post_title; ?></strong>,<br />
										<?php echo $company; ?></p>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section><!-- testimonials -->
	<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>