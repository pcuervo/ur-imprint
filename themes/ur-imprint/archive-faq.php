<?php get_header(); ?>

	<!-- =================================================
	==== CONTACT HEADER
	================================================== -->
	<section class="[ faqs ]">
		<div class="[ wrapper ]">
			<div class="[ padding-top-bottom--large ][ text-center ]">
				<h2>Frequently Asked Questions</h2>
			</div>
			
			<div class="[ general-faqs ]">
				<?php
				$faq_args = array(
					'post_type' 		=> 'faq',
					'posts_per_page' 	=> -1,
					'tax_query'			=> array(
				    	array(
							'taxonomy' 	=> 'faq-categories',
				            'field' 	=> 'slug',
				            'terms'		=> 'general',
						)
	        		),
				);
				$faq_query = new WP_Query( $faq_args );
				if( $faq_query->have_posts() ) :
					echo '<h3 class="[ text-center ]"><?php echo $faq_cat; ?></h3>';
					while( $faq_query->have_posts() )  : $faq_query->the_post(); 
						$faq_cat = get_faq_category( $post->ID );
					?>
						<div class="[ faq ]">
							<h3 class="[ text-center ]"><?php echo $faq_cat; ?></h3>
							<h4 class="[ text-center ]"><?php echo get_the_title(); ?></h4>
							<p><?php echo get_the_content(); ?></p>
						</div>
					<?php 
					endwhile;
					wp_reset_query();
				endif;
				?>
			</div>

			<div class="[ artwork-faqs ]">
				<?php
				$faq_args = array(
					'post_type' 		=> 'faq',
					'posts_per_page' 	=> -1,
					'tax_query'			=> array(
				    	array(
							'taxonomy' 	=> 'faq-categories',
				            'field' 	=> 'slug',
				            'terms'		=> 'artwork',
						)
	        		),
				);
				$faq_query = new WP_Query( $faq_args );
				if( $faq_query->have_posts() ) :
					echo '<h3 class="[ text-center ]"><?php echo $faq_cat; ?></h3>';
					while( $faq_query->have_posts() )  : $faq_query->the_post(); 
						$faq_cat = get_faq_category( $post->ID );
					?>
						<div class="[ faq ]">
							<h3 class="[ text-center ]"><?php echo $faq_cat; ?></h3>
							<h4 class="[ text-center ]"><?php echo get_the_title(); ?></h4>
							<p><?php echo get_the_content(); ?></p>
						</div>
					<?php 
					endwhile;
					wp_reset_query();
				endif;
				?>
			</div>

			<div class="[ design-tips-faqs ]">
				<?php
				$faq_args = array(
					'post_type' 		=> 'faq',
					'posts_per_page' 	=> -1,
					'tax_query'			=> array(
				    	array(
							'taxonomy' 	=> 'faq-categories',
				            'field' 	=> 'slug',
				            'terms'		=> 'design-tips',
						)
	        		),
				);
				$faq_query = new WP_Query( $faq_args );
				if( $faq_query->have_posts() ) :
					echo '<h3 class="[ text-center ]"><?php echo $faq_cat; ?></h3>';
					while( $faq_query->have_posts() )  : $faq_query->the_post(); 
						$faq_cat = get_faq_category( $post->ID );
					?>
						<div class="[ faq ]">
							<h3 class="[ text-center ]"><?php echo $faq_cat; ?></h3>
							<h4 class="[ text-center ]"><?php echo get_the_title(); ?></h4>
							<p><?php echo get_the_content(); ?></p>
						</div>
					<?php 
					endwhile;
					wp_reset_query();
				endif;
				?>
			</div>

			<div class="[ delivery-faqs ]">
				<?php
				$faq_args = array(
					'post_type' 		=> 'faq',
					'posts_per_page' 	=> -1,
					'tax_query'			=> array(
				    	array(
							'taxonomy' 	=> 'faq-categories',
				            'field' 	=> 'slug',
				            'terms'		=> 'delivery',
						)
	        		),
				);
				$faq_query = new WP_Query( $faq_args );
				if( $faq_query->have_posts() ) :
					echo '<h3 class="[ text-center ]"><?php echo $faq_cat; ?></h3>';
					while( $faq_query->have_posts() )  : $faq_query->the_post(); 
						$faq_cat = get_faq_category( $post->ID );
					?>
						<div class="[ faq ]">
							<h3 class="[ text-center ]"><?php echo $faq_cat; ?></h3>
							<h4 class="[ text-center ]"><?php echo get_the_title(); ?></h4>
							<p><?php echo get_the_content(); ?></p>
						</div>
					<?php 
					endwhile;
					wp_reset_query();
				endif;
				?>
			</div>

			<div class="[ products-garments-sizes-faqs ]">
				<?php
				$faq_args = array(
					'post_type' 		=> 'faq',
					'posts_per_page' 	=> -1,
					'tax_query'			=> array(
				    	array(
							'taxonomy' 	=> 'faq-categories',
				            'field' 	=> 'slug',
				            'terms'		=> 'products-garments-sizes',
						)
	        		),
				);
				$faq_query = new WP_Query( $faq_args );
				if( $faq_query->have_posts() ) :
					echo '<h3 class="[ text-center ]"><?php echo $faq_cat; ?></h3>';
					while( $faq_query->have_posts() )  : $faq_query->the_post(); 
						$faq_cat = get_faq_category( $post->ID );
					?>
						<div class="[ faq ]">
							<h3 class="[ text-center ]"><?php echo $faq_cat; ?></h3>
							<h4 class="[ text-center ]"><?php echo get_the_title(); ?></h4>
							<p><?php echo get_the_content(); ?></p>
						</div>
					<?php 
					endwhile;
					wp_reset_query();
				endif;
				?>
			</div>

		</div><!-- wrapper -->
	</section><!-- faqs -->

<?php get_footer(); ?>