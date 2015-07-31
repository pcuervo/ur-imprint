		</div><!-- main -->

		<section class="[ action-buttons action-buttons--right ]">
			<a href="#" class="[ button button--primary button--circle ][ js-modal-opener ]" data-modal="nav"><i class="[ icon-menu ]"></i></a>
		</section><!-- action-buttons -->

		<section class="[ modal-wrapper modal-nav ][ hide ]">
			<div class="[ modal modal--full ]">
				<div class="[ modal-content ]">
					<article class="[ menu ]">
						<div class="[ row ][ bg-dark ]">
							<?php /*<a href="<?php echo site_url(''); ?>" class="[ span xmall-6 ][ border ][ button button--light button--ink ][ padding ]"><i class="[ icon-sillones ]"></i>quiero comprar</a>
							<?php /* <a href="<?php echo site_url('');?>" class="[ span xmall-6 ][ border ][ button button--light button--ink ][ padding ]"><i class="[ icon-vender ]"></i>quiero vender</a> */ ?>
							<a href="<?php echo site_url('como-funciona');?>" class="[ span xmall-6 ][ border ][ button button--light button--ink ][ padding--medium ]"><i class="[ icon-graph ]"></i>¿cómo funciona?</a>
							<a href="<?php echo site_url('');?>" class="[ span xmall-6 ][ border ][ button button--light button--ink ][ padding--medium ]"><i class="[ icon-messages ]"></i>blog</a>
							<?php if( is_user_logged_in() ) {  ?>
								<a href="<?php echo site_url('mi-cuenta');?>" class="[ span xmall-12 ][ border ][ button button--light button--ink ][ bg-primary ][ padding--medium ]"><i class="[ icon-user ]"></i>mi cuenta</a>
								<a href="<?php echo wp_logout_url( site_url() ) ?>" class="[ span xmall-12 ][ border ][ button button--light button--ink ][ bg-highlight ][ padding--medium ]"><i class="[ icon ]"></i>Logout</a>
							<?php } else { ?>
								<a href="<?php echo site_url('mi-cuenta');?>" class="[ span xmall-12 ][ border ][ button button--light button--ink ][ bg-primary ][ padding--medium ]"><i class="[ icon-user ]"></i>log in o registrate</a>
							<?php } ?>
						</div>
					</article><!-- menu -->

					<article class="[ search ]">
						<div class="[ padding ][ border ]">
							<?php get_product_search_form(); ?>
						</div><!-- padding -->
					</article><!-- search -->

					<article class="[ categorias ]">
						<div class="[ padding ]">
							<h3 class="[ text-center ][ no-margin ]">Categorías</h3>
						</div>
						<div class="[ row ]">
							<a href="#" class="[ span xmall-6 ][ border ][ button button--primary button--ink ][ padding ]"><img class="[ svg icon icon--small ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/hamburguer.svg" alt="menu">category</a>
						</div>
					</article><!-- categorias -->
					<artcile class="[ initial ]">
						<div class="[ action-buttons action-buttons--right ][ always-opened ]">
							<a href="#" class="[ button button--primary button--action ][ pull-right ][ js-modal-closer ]"><i class="[ icon-close ]"></i></a>
						</div><!-- action-buttons -->
					</artcile><!-- action-buttons -->
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