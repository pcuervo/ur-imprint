<?php 
	get_header(); 
	the_post();
?>

	<!-- =================================================
	==== CONTACT HEADER
	================================================== -->
	<section class="[ steps ]">
		<div class="[ wrapper ]">
			<div class="[ text-center ][ padding-top-bottom ]">
				<h1 class="[ ]">About Us</h1>
				<p class="[ lead-text ]"><?php the_content(); ?></p>
			</div>
		</div><!-- wrapper -->
	</section><!-- contact-header -->

<?php get_footer(); ?>