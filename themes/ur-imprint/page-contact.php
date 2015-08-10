<?php get_header(); ?>

	<!-- =================================================
	==== CONTACT HEADER
	================================================== -->
	<section class="[ steps ]">
		<div class="[ wrapper ]">
			<div class="[ text-center ][ padding-top-bottom ]">
				<h1 class="[ ]">Contact</h1>
				<p class="[ lead-text italic ]">How can we help you?</p>
			</div>
		</div><!-- wrapper -->
	</section><!-- contact-header -->



	<!-- =================================================
	==== HERO CONTACT
	================================================== -->
	<section class="[ hero hero-contact ]">
		<div class="[ screen screen-dark--30 ][ z-index-1 ]"></div>
		<div class="[ padding-top-bottom--large ][ z-index-2 relative ]">
			<div class="[ wrapper ]">
				<div class="[ row ]">
					<div class="[ text-center ][ form ]">
						<form class="[ js-contact ][ column xmall-12 large-6 ]" action="">
							<fieldset class="[ margin-bottom ]">
								<input type="text" class="[ gui-input ][ required ]" placeholder="What's your name?" name="name">
							</fieldset>
							<fieldset class="[ margin-bottom ]">
								<input type="text" class="[ gui-input ][ required email ]" placeholder="and your email address?" name="email">
							</fieldset>
							<fieldset class="[ margin-bottom ]">
								<textarea class="[ gui-textarea ][ required ]" name="message" id="" cols="30" rows="10" placeholder="your message..."></textarea>
							</fieldset>
							<fieldset class="[ margin-bottom ]">
								<input type="hidden" name="action" value="send_contact_email">
								<button class="[ button button--secondary ]" type="submit">Send</button>
							</fieldset>
						</form>
						<div class="[ column xmall-12 large-6 ][ color-light ]">
							<p class="[ italic text-shadow ]">You can read our FAQs <a href="<?php echo get_post_type_archive_link( 'faq' ); ?>">here</a> and send us an email at <a href="mailto:<?php echo get_contact_email(); ?>"><?php echo get_contact_email(); ?></a> or give us a call at <a href="tel:<?php echo get_contact_phone(); ?>"><?php echo get_contact_phone(); ?></a></p>
						</div>
					</div>
				</div><!-- row -->

			</div><!-- wrapper -->
		</div>
	</section><!-- hero-contact -->

<?php get_footer(); ?>