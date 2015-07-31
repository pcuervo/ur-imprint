<?php get_header(); ?>

	<!-- =================================================
	==== HERO
	================================================== -->
	<section class="[ hero hero-home ]">
		<div class="[ screen-dark--30 ]">
			<div class="[ padding-top-bottom--large ]">
				<div class="[ wrapper ]">
					<div class="[ text-center color-light ]">
						<div class="[ bg-image-placeholder__wrapper bg-image-placeholder__wrapper__logo ][ margin-bottom--large ]">
							<a class="[ bg-image-placeholder bg-image-placeholder__logo ]" href="#"></a>
						</div>
						<h1 class="[ text-shadow ]">Bring your imagination to life</h1>
						<a href="#" class="[ button button--secondary ]">get started</a>
					</div>
				</div><!-- wrapper -->
			</div>
		</div>
	</section><!-- hero -->



	<!-- =================================================
	==== VIDEO
	================================================== -->
	<section class="[ video ][ bg-primary ]">
		<div class="[ wrapper ]">
			<div class="[ padding-top-bottom--large ][ text-center color-light ]">
				<div class="[ margin-bottom ][ xmall-12 ][ center ][ relative ]">
					<video id="video" class="[ xmall-12 ]">
						<source src="<?php echo THEMEPATH; ?>videos/video1.webm" type="video/webm">
						<source src="<?php echo THEMEPATH; ?>videos/video1.ogv" type="video/ogv">
						<source src="<?php echo THEMEPATH; ?>videos/video1.mp4" type="video/mp4">
						<p>
							Your browser doesn't support HTML5 video.
							<a href="<?php echo THEMEPATH; ?>videos/video1.mp4">Download</a> the video instead.
						</p>
					</video>
					<!-- Video Controls -->
					<div id="video-controls">
						<button type="button" id="play-pause">Play</button>
						<input type="range" id="seek-bar" value="0">
						<button type="button" id="mute">Mute</button>
						<input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
						<button type="button" id="full-screen">Full-Screen</button>
					</div>
				</div>
				<h2>UR Imprint Design Studio</h2>
				<p class="[ italic ]">Direct to garment printing technology for bright long-lasting prints.</p>
			</div>
		</div><!-- wrapper -->
	</section>


	<!-- =================================================
	==== STEPS
	================================================== -->
	<section class="[ steps ]">
		<div class="[ wrapper ]">
			<h2 class="[ text-center ]">3 easy steps</h2>
			<div class="[ row ][ relative ]">
				<div class="[ column xmall-4 ]">
					<div class="[ circle border--large bg-secondary ]">
						<img class="[ svg icon icon--small ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/shirt.svg" alt="menu">
					</div>
					<p class="[ italic ]"><small>Choose</small></p>
				</div>
				<div class="[ column xmall-4 ]">
					<div class="[ circle border--large bg-secondary ]">
						<img class="[ svg icon icon--small ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/design.svg" alt="menu">
					</div>
					<p class="[ italic ]"><small>Customise</small></p>
				</div>
				<div class="[ column xmall-4 ]">
					<div class="[ circle border--large bg-secondary ]">
						<img class="[ svg icon icon--small ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/shop.svg" alt="menu">
					</div>
					<p class="[ italic ]"><small>Checkout</small></p>
				</div>
				<hr class="[ connector ][ bg-dark ]">
			</div>
		</div><!-- wrapper -->
	</section>


	<!-- =================================================
	==== CHARACTERISTICS
	================================================== -->
	<section class="[ characteristics ][ bg-primary ]">
		<div class="[ wrapper--large ]">
			<div class="[ row ]">
				<article class="[ square ][ bg-primary--darken-10 ]">
					<div class="[ square-content ][ color-light ]">
						<img class="[ svg icon icon--xxlarge ]" src="<?php echo THEMEPATH; ?>icons/badge.svg" alt="menu">
						<p class="[ ]"><small>Premium quality</small></p>
					</div><!-- square-content -->
				</article><!-- square -->
				<article class="[ square ][ bg-primary ]">
					<div class="[ square-content ][ color-light ]">
						<img class="[ svg icon icon--xxlarge ]" src="<?php echo THEMEPATH; ?>icons/lightning.svg" alt="menu">
						<p class="[ ]"><small>Fast service</small></p>
					</div><!-- square-content -->
				</article><!-- square -->
				<article class="[ square ][ bg-primary--darken-10 ]">
					<div class="[ square-content ][ color-light ]">
						<img class="[ svg icon icon--xxlarge ]" src="<?php echo THEMEPATH; ?>icons/shirts.svg" alt="menu">
						<p class="[ ]"><small>Product variety</small></p>
					</div><!-- square-content -->
				</article><!-- square -->
				<article class="[ square ][ bg-primary ]">
					<div class="[ square-content ][ color-light ]">
						<img class="[ svg icon icon--xxlarge ]" src="<?php echo THEMEPATH; ?>icons/face.svg" alt="menu">
						<p class="[ ]"><small>Client satisfaction</small></p>
					</div><!-- square-content -->
				</article><!-- square -->
			</div>
		</div><!-- wrapper -->
	</section><!-- characteristics -->


	<!-- =================================================
	==== PRODUCT CATEGORIES
	================================================== -->
	<section class="[ product-categories ]">
		<div class="[ row ]">
			<?php 
			$args = array(
				'taxonomy'     => 'product_cat',
				'hide_empty'   => 1
				);
			$all_categories = get_categories( $args );
			foreach ( $all_categories as $cat ) :
				$cat_thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
			    $cat_image_url = wp_get_attachment_url( $cat_thumbnail_id ); ?>
				<div class="[ span xmall-12 ]">
					<div class="[ row ]">
						<a href="<?php echo get_term_link( $cat->slug, 'product_cat' ); ?>">
							<div class="[ span xmall-4 ]">
								<img class="[ image-responsive ]" src="<?php echo $cat_image_url; ?>" alt="">
							</div>
							<div class="[ span xmall-8 ][ padding ][ bg-secondary ]">
								<p class="[ text-center ]"><?php echo $cat->name ?></p>
							</div>
						</a>
					</div>
				</div>
			<?php endforeach; wp_reset_query(); ?>
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
		<section class="[ testimonials ][ bg-primary ]">
			<div class="[ padding-top-bottom--large ]">
				<div class="[ wrapper ]">
					<?php
					while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post(); 
						$company = get_post_meta($post->ID, '_company_meta', true);
					?>
						<div class="[ xmall-12 large-8 ][ center ]">
							<blockquote><?php echo $post->post_content; ?></blockquote>
							<div class="[ text-right ]">
								<p><strong><?php echo $post->post_title; ?></strong>,</p>
								<p><?php echo $company; ?></p>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</section><!-- testimonials -->
	<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>