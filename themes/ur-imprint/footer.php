		</div><!-- main -->

		<section class="[ action-buttons action-buttons--right ][ hidden--xlarge ][ always-opened ]">
			<a href="#" class="[ button button--secondary button--circle ][ border border--light border--large ][ js-modal-opener ]" data-modal="nav">
				<img class="[ svg icon icon--small ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/hamburguer.svg" alt="menu">
			</a>
		</section><!-- action-buttons -->

		<section class="[ modal-wrapper modal-nav ][ hide ][ hidden--xlarge ]">
			<div class="[ modal modal--full ]">
				<div class="[ modal-content ]">

					<article class="[ center-full ][ text-center ]">
						<div class="[ bg-image-placeholder__wrapper bg-image-placeholder__wrapper__logo ][ margin-bottom--large ][ center ]">
							<a class="[ bg-image-placeholder bg-image-placeholder__logo ]" href="<?php echo site_url(); ?>"></a>
						</div>
						<nav class="">
							<a href="<?php echo site_url('create'); ?>" class="[ button button--medium button--hollow button--light ][ padding ]">Create</a><br/>
							<a href="<?php echo site_url('catalogue'); ?>" class="[ button button--medium button--ink button--light ][ padding ]">Catalogue</a><br/>
							<a href="<?php echo site_url('contact'); ?>" class="[ button button--medium button--ink button--light ][ padding ]">Contact</a><br/>
							<a href="<?php echo site_url('my-ccount'); ?>" class="[ button button--ink <?php echo ( is_home() ? 'button--light' : 'button--primary'); ?> ][ inline-block align-middle ]">Register / Login</a><br/>
							<a href="<?php echo site_url('cart'); ?>" class="[ button button--ink <?php echo ( is_home() ? 'button--light' : 'button--primary'); ?> ][ inline-block align-middle ]">
								<img class="[ svg icon icon--medium ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/cart.svg" alt="cart">
							</a>
						</nav><!-- categorias -->
					</article>

					<artcile class="[ initial ]">
						<div class="[ action-buttons action-buttons--right ][ always-opened ]">
							<a href="#" class="[ button button--secondary button--circle ][ border border--light border--large ][ js-modal-opener ]" data-modal="nav">
								<img class="[ svg icon icon--small ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/close.svg" alt="close">
							</a>
						</div><!-- action-buttons -->
					</artcile><!-- initial -->
				</div><!-- modal-content -->
			</div>
		</section>

		</div><!-- container -->

		<footer class="<?php echo ( is_home() ? 'bg-light' : 'bg-dark'); ?>">
			<div class="[ wrapper ]">
				<div class="[ padding-top-bottom ]">
					<div class="[ row ]">
						<div class="[ column xmall-6 medium-3 ][ margin-bottom ]">
							<h3>Payments</h3>
							<div class="[ row ]">
								<div class="[ column xmall-4 ]">
									<img class="[ image-responsive ]" src="<?php echo THEMEPATH; ?>icons/visa.svg" alt="visa">
								</div>
								<div class="[ column xmall-4 ]">
									<img class="[ image-responsive ]" src="<?php echo THEMEPATH; ?>icons/mastercard.svg" alt="mastercard">
								</div>
								<div class="[ column xmall-4 ]">
									<img class="[ image-responsive ]" src="<?php echo THEMEPATH; ?>icons/paypal.svg" alt="paypal">
								</div>
							</div>
						</div>
						<div class="[ column xmall-6 medium-3 ][ margin-bottom ]">
							<h3>Contact Us</h3>
							<p class="[ no-margin ]">Sydney, Australia</p>
							<p class="[ no-margin ]"><?php echo get_contact_phone(); ?></p>
							<p class="[ no-margin ]"><a href="mailto:<?php echo get_contact_email(); ?>">Email Us</a></p>
							<p class="[ no-margin ]"><a href="<?php echo get_facebook_url(); ?>" target="_blank">Facebook</a></p>
						</div>
						<div class="[ clear--xmall ]"></div>
						<div class="[ column xmall-6 medium-3 ][ margin-bottom ]">
							<h3>Quick links</h3>
							<p class="[ no-margin ]"><a href="<?php echo site_url('about-us'); ?>">About Us</a></p>
							<p class="[ no-margin ]"><a href="<?php echo get_post_type_archive_link( 'faq' ); ?>">FAQs</a></p>
							<p class="[ no-margin ]"><a href="<?php echo site_url('catalogue'); ?>">Catalogue</a></p>
							<p class="[ no-margin ]"><a href="<?php echo site_url('create'); ?>">Create</a></p>
						</div>
						<div class="[ column xmall-6 medium-3 ][ margin-bottom ]">
							<h3>Designed and developed by</h3>
							<div class="[ row ]">
								<div class="[ span xmall-10 small-6 medium-8 large-7 ]">
									<img class="[ image-responsive ]" src="<?php echo THEMEPATH; ?>icons/little-crow.svg" alt="Little Crow">
								</div>
							</div>
						</div>
					</div>
					<div class="[ text-center ]">
						<p>© Copyright <?php echo date('Y'); ?> UR Imprint Design Studio and Designs for Business</p>
						<p class="[ no-margin ]"><a href="#">Privacy Policy</a></p>
						<p class="[ no-margin ]"><a href="#">Terms and conditions</a></p>
					</div>
				</div><!-- padding-top-bottom -->
			</div><!-- wrapper -->
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>