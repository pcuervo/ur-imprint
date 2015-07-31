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
							<a class="[ bg-image-placeholder bg-image-placeholder__logo ]" href="#"></a>
						</div>
						<nav class="[ hidden--large ]">
							<a href="<?php echo site_url('nosotros'); ?>" class="[ button button--medium button--hollow button--light ][ uppercase ][ padding ]">Create</a>
							<a href="<?php echo site_url('productos'); ?>" class="[ button button--medium button--ink button--light ][ uppercase ][ padding ]">Catalogue</a>
							<a href="<?php echo site_url('servicios'); ?>" class="[ button button--medium button--ink button--light ][ uppercase ][ padding ]">Contact</a>
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
				<div class="[ row ]">
					<div class="[ xmall-6 large-3 ]">
						<h3>Payments</h3>
						<div class="[ row ]">
							<div class="[ xmall-4 ]">
								<img class="[ svg icon icon--medium ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/visa.svg" alt="visa">
							</div>
							<div class="[ xmall-4 ]">
								<img class="[ svg icon icon--medium ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/mastercard.svg" alt="mastercard">
							</div>
							<div class="[ xmall-4 ]">
								<img class="[ svg icon icon--medium ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/paypal.svg" alt="paypal">
							</div>
						</div>
					</div>
					<div class="[ xmall-6 large-3 ]">
						<h3>Contact Us</h3>
						<p>Sydney, Australia</p>
						<p>(0439) 959 051</p>
						<a href="mailto:blabla@gmail.com">Email Us</a>
						<a href="#">Facebook</a>
					</div>
					<div class="[ xmall-6 large-3 ]">
						<h3>Quick links</h3>
						<p><a href="#">About Us</a></p>
						<p><a href="#">FAQs</a></p>
						<p><a href="#">Catalogue</a></p>
						<p><a href="#">Get started</a></p>
					</div>
					<div class="[ xmall-6 large-3 ]">
						<h3>Designed and developed by</h3>
						<img class="[ svg icon icon--medium ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/little-crow.svg" alt="menu">
					</div>
				</div>
				<div class="[ text-center ]">
					<p>© Copyright <?php echo date('Y'); ?> UR Imprint Design Studio and Designs for Business</p>
					<p><a href="#">Privacy Policy</a></p>
					<p><a href="#">Terms and conditions</a></p>
				</div>
			</div><!-- wrapper -->
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>