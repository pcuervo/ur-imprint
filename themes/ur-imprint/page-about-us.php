<?php 
	get_header(); 
	the_post();
?>

	<!-- =================================================
	==== CONTACT HEADER
	================================================== -->
	<section class="[ steps ]">
		<div class="[ wrapper ]">
			<div class="[ padding-top-bottom ]">
				<h1 class="[ text-center ]">About Us</h1>
				<?php the_content(); ?>
			</div>
		</div><!-- wrapper -->
	</section><!-- contact-header -->
	
<?php get_footer(); ?>