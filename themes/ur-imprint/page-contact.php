<?php get_header(); ?>

	<!-- =================================================
	==== CONTACT HEADER
	================================================== -->
	<section class="[ steps ]">
		<div class="[ wrapper ]">
			<div class="[ padding-top-bottom--large ][ text-center ]">
				<h2>Contact</h2>
				<p class="[ italic ]">How can we help you?</p>
			</div>
		</div><!-- wrapper -->
	</section><!-- contact-header -->



	<!-- =================================================
	==== HERO CONTACT
	================================================== -->
	<section class="[ hero hero-contact ]">
		<div class="[ screen-dark--30 ]">
			<div class="[ padding-top-bottom--large ]">
				<div class="[ wrapper ]">
					<div class="[ text-center color-light ][ form ]">
						<form class="[ js-contact ]" action="">
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
						<p class="[ italic ]">You can read our FAQs <a href="<?php echo get_post_type_archive_link( 'faq' ); ?>">here</a> and send us an email at <a href="mailto:<?php echo get_contact_email(); ?>"><?php echo get_contact_email(); ?></a> or give us a call at <a href="tel:<?php echo get_contact_phone(); ?>"><?php echo get_contact_phone(); ?></p>
					</div>
				</div><!-- wrapper -->
			</div>
		</div>
	</section><!-- hero-contact -->

<?php get_footer(); ?>