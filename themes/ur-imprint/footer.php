		</div><!-- main -->

		<section class="[ action-buttons action-buttons--right ]">
			<a href="#" class="[ button button--secondary button--circle ][ border border--light border--large ][ js-modal-opener ]" data-modal="nav">
				<img class="[ svg icon icon--small ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/hamburguer.svg" alt="menu">
			</a>
		</section><!-- action-buttons -->

		<section class="[ modal-wrapper modal-nav ][ hide ]">
			<div class="[ modal modal--full ]">
				<div class="[ modal-content ]">

					<article class="[ center-full ][ text-center ]">
						<div class="[ bg-image-placeholder__wrapper bg-image-placeholder__wrapper__logo ][ margin-bottom--large ][ center ]">
							<a class="[ bg-image-placeholder bg-image-placeholder__logo ]" href="<?php echo site_url(); ?>"></a>
						</div>
						<nav class="[ hidden--large ]">
							<a href="<?php echo site_url('catalogue'); ?>" class="[ button button--medium button--hollow button--light ][ uppercase ][ padding ]">Create</a>
							<a href="<?php echo site_url('catalogue'); ?>" class="[ button button--medium button--ink button--light ][ uppercase ][ padding ]">Catalogue</a>
							<a href="<?php echo site_url('contact'); ?>" class="[ button button--medium button--ink button--light ][ uppercase ][ padding ]">Contact</a>
							<a href="<?php echo site_url('contacto'); ?>" class="[ button button--medium button--ink button--light ][ uppercase ][ padding ]">Register</a>
							<a href="<?php echo site_url('contacto'); ?>" class="[ button button--medium button--ink button--light ][ uppercase ][ padding ]">Login</a>
							<a href="<?php echo site_url('contacto'); ?>" class="[ button button--medium button--ink button--light ][ uppercase ][ padding ]">
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

		<footer class="">
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
							<p class="[ no-margin ]"><a href="<?php echo get_facebook_url(); ?>">Facebook</a></p>
						</div>
						<div class="[ clear--xmall ]"></div>
						<div class="[ column xmall-6 medium-3 ][ margin-bottom ]">
							<h3>Quick links</h3>
							<p class="[ no-margin ]"><a href="#">About Us</a></p>
							<p class="[ no-margin ]"><a href="#">FAQs</a></p>
							<p class="[ no-margin ]"><a href="#">Catalogue</a></p>
							<p class="[ no-margin ]"><a href="#">Get started</a></p>
						</div>
						<div class="[ column xmall-6 medium-3 ][ margin-bottom ]">
							<h3>Designed and developed by</h3>
							<img class="[ icon icon--medium ]" src="<?php echo THEMEPATH; ?>icons/little-crow.svg" alt="Little Crow">
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