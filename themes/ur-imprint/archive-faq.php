<?php get_header(); ?>

	<section class="[ faqs ]">
		<div class="[ wrapper ]">
			<div class="[ padding-top-bottom--large ][ text-center ]">
				<h2>Frequently Asked Questions</h2>
			</div>
			<div class="[ row ]">

				<article class="[ column xmall-12 large-6 ][ general-faqs ][ margin-bottom--large ]">
					<?php
					$faq_args = array(
						'post_type' 		=> 'faq',
						'posts_per_page' 	=> -1,
						'tax_query'			=> array(
							array(
								'taxonomy' 	=> 'faq-categories',
								'field' 	=> 'slug',
								'terms'		=> 'general'
							)
						),
					);
					$faq_query = new WP_Query( $faq_args );
					if( $faq_query->have_posts() ) : $faq_query->the_post();
						$faq_cat = get_faq_category( $post->ID );
						echo "<h3 class='[ text-center ]'>$faq_cat</h3>";
						echo "<div class='[ accordion ]'>";
					endif; wp_reset_query();

					$faq_counter = 1;
					$faq_query = new WP_Query( $faq_args );
					if( $faq_query->have_posts() ) : while( $faq_query->have_posts() ) : $faq_query->the_post();
						$faq_cat = get_faq_category( $post->ID );
					?>
							<div class="[ accordion-section ][ margin-bottom--small ]">
								<p class="[ lead-text color-primary ]">
									<a class="[ color-primary ][ accordion-section-title ]" href="#accordion-<?php echo $faq_cat.'-'.$faq_counter; ?>">
										<span class="[ toggle ]"></span> <?php echo get_the_title(); ?>
									</a>
								</p>
								<div id="accordion-<?php echo $faq_cat.'-'.$faq_counter; ?>" class="[ accordion-section-content ]">
									<p><?php echo get_the_content(); ?></p>
								</div><!--end .accordion-section-content-->
							</div><!--end .accordion-section-->
						<?php $faq_counter++; endwhile; endif; wp_reset_query();
					$faq_query = new WP_Query( $faq_args );
					if( $faq_query->have_posts() ) : $faq_query->the_post();
						$faq_cat = get_faq_category( $post->ID );
						echo "</div><!-- accordion -->";
					endif; wp_reset_query(); ?>
				</article>

				<article class="[ column xmall-12 large-6 ][ artwork-faqs ][ margin-bottom--large ]">
					<?php
					$faq_args = array(
						'post_type' 		=> 'faq',
						'posts_per_page' 	=> -1,
						'tax_query'			=> array(
							array(
								'taxonomy' 	=> 'faq-categories',
								'field' 	=> 'slug',
								'terms'		=> 'artwork'
							)
						),
					);
					$faq_query = new WP_Query( $faq_args );
					if( $faq_query->have_posts() ) : $faq_query->the_post();
						$faq_cat = get_faq_category( $post->ID );
						echo "<h3 class='[ text-center ]'>$faq_cat</h3>";
						echo "<div class='[ accordion ]'>";
					endif; wp_reset_query();

					$faq_counter = 1;
					$faq_query = new WP_Query( $faq_args );
					if( $faq_query->have_posts() ) : while( $faq_query->have_posts() ) : $faq_query->the_post();
						$faq_cat = get_faq_category( $post->ID );
					?>
							<div class="[ accordion-section ][ margin-bottom--small ]">
								<p class="[ lead-text color-primary ]">
									<a class="[ color-primary ][ accordion-section-title ]" href="#accordion-<?php echo $faq_cat.'-'.$faq_counter; ?>">
										<span class="[ toggle ]"></span> <?php echo get_the_title(); ?>
									</a>
								</p>
								<div id="accordion-<?php echo $faq_cat.'-'.$faq_counter; ?>" class="[ accordion-section-content ]">
									<p><?php echo get_the_content(); ?></p>
								</div><!--end .accordion-section-content-->
							</div><!--end .accordion-section-->
						<?php $faq_counter++; endwhile; endif; wp_reset_query();
						$faq_query = new WP_Query( $faq_args );
						if( $faq_query->have_posts() ) : $faq_query->the_post();
							$faq_cat = get_faq_category( $post->ID );
							echo "</div><!-- accordion -->";
						endif; wp_reset_query(); ?>
				</article>

				<div class="[ clear--large ]"></div>

				<article class="[ column xmall-12 large-6 ][ design-tips-faqs ][ margin-bottom--large ]">
					<?php
					$faq_args = array(
						'post_type' 		=> 'faq',
						'posts_per_page' 	=> -1,
						'tax_query'			=> array(
							array(
								'taxonomy' 	=> 'faq-categories',
								'field' 	=> 'slug',
								'terms'		=> 'design-tips'
							)
						),
					);
					$faq_query = new WP_Query( $faq_args );
					if( $faq_query->have_posts() ) : $faq_query->the_post();
						$faq_cat = get_faq_category( $post->ID );
						echo "<h3 class='[ text-center ]'>$faq_cat</h3>";
						echo "<div class='[ accordion ]'>";
					endif; wp_reset_query();

					$faq_counter = 1;
					$faq_query = new WP_Query( $faq_args );
					if( $faq_query->have_posts() ) : while( $faq_query->have_posts() ) : $faq_query->the_post();
						$faq_cat = get_faq_category( $post->ID );
					?>
							<div class="[ accordion-section ][ margin-bottom--small ]">
								<p class="[ lead-text color-primary ]">
									<a class="[ color-primary ][ accordion-section-title ]" href="#accordion-<?php echo $faq_cat.'-'.$faq_counter; ?>">
										<span class="[ toggle ]"></span> <?php echo get_the_title(); ?>
									</a>
								</p>
								<div id="accordion-<?php echo $faq_cat.'-'.$faq_counter; ?>" class="[ accordion-section-content ]">
									<p><?php echo get_the_content(); ?></p>
								</div><!--end .accordion-section-content-->
							</div><!--end .accordion-section-->
						<?php $faq_counter++; endwhile; endif; wp_reset_query();
					$faq_query = new WP_Query( $faq_args );
					if( $faq_query->have_posts() ) : $faq_query->the_post();
						$faq_cat = get_faq_category( $post->ID );
						echo "</div><!-- accordion -->";
					endif; wp_reset_query();
					?>
				</article>

				<article class="[ column xmall-12 large-6 ][ delivery-faqs ][ margin-bottom--large ]">
					<?php
					$faq_args = array(
						'post_type' 		=> 'faq',
						'posts_per_page' 	=> -1,
						'tax_query'			=> array(
							array(
								'taxonomy' 	=> 'faq-categories',
								'field' 	=> 'slug',
								'terms'		=> 'delivery'
							)
						),
					);
					$faq_query = new WP_Query( $faq_args );
					if( $faq_query->have_posts() ) : $faq_query->the_post();
						$faq_cat = get_faq_category( $post->ID );
						echo "<h3 class='[ text-center ]'>$faq_cat</h3>";
						echo "<div class='[ accordion ]'>";
					endif; wp_reset_query();

					$faq_counter = 1;
					$faq_query = new WP_Query( $faq_args );
					if( $faq_query->have_posts() ) : while( $faq_query->have_posts() ) : $faq_query->the_post();
						$faq_cat = get_faq_category( $post->ID );
					?>
							<div class="[ accordion-section ][ margin-bottom--small ]">
								<p class="[ lead-text color-primary ]">
									<a class="[ color-primary ][ accordion-section-title ]" href="#accordion-<?php echo $faq_cat.'-'.$faq_counter; ?>">
										<span class="[ toggle ]"></span> <?php echo get_the_title(); ?>
									</a>
								</p>
								<div id="accordion-<?php echo $faq_cat.'-'.$faq_counter; ?>" class="[ accordion-section-content ]">
									<p><?php echo get_the_content(); ?></p>
								</div><!--end .accordion-section-content-->
							</div><!--end .accordion-section-->
						<?php $faq_counter++; endwhile; endif; wp_reset_query();
						$faq_query = new WP_Query( $faq_args );
						if( $faq_query->have_posts() ) : $faq_query->the_post();
							$faq_cat = get_faq_category( $post->ID );
							echo "</div><!-- accordion -->";
						endif; wp_reset_query(); ?>
				</article>

				<div class="[ clear--large ]"></div>

				<article class="[ column xmall-12 large-6 ][ products-garments-sizes-faqs ][ margin-bottom--large ]">
					<?php
					$faq_args = array(
						'post_type' 		=> 'faq',
						'posts_per_page' 	=> -1,
						'tax_query'			=> array(
							array(
								'taxonomy' 	=> 'faq-categories',
								'field' 	=> 'slug',
								'terms'		=> 'products-garments-sizes'
							)
						),
					);
					$faq_query = new WP_Query( $faq_args );
					if( $faq_query->have_posts() ) : $faq_query->the_post();
						$faq_cat = get_faq_category( $post->ID );
						echo "<h3 class='[ text-center ]'>$faq_cat</h3>";
						echo "<div class='[ accordion ]'>";
					endif; wp_reset_query();

					$faq_counter = 1;
					$faq_query = new WP_Query( $faq_args );
					if( $faq_query->have_posts() ) : while( $faq_query->have_posts() ) : $faq_query->the_post();
						$faq_cat = get_faq_category( $post->ID );
					?>
							<div class="[ accordion-section ][ margin-bottom--small ]">
								<p class="[ lead-text color-primary ]">
									<a class="[ color-primary ][ accordion-section-title ]" href="#accordion-<?php echo $faq_cat.'-'.$faq_counter; ?>">
										<span class="[ toggle ]"></span> <?php echo get_the_title(); ?>
									</a>
								</p>
								<div id="accordion-<?php echo $faq_cat.'-'.$faq_counter; ?>" class="[ accordion-section-content ]">
									<p><?php echo get_the_content(); ?></p>
								</div><!--end .accordion-section-content-->
							</div><!--end .accordion-section-->
						<?php $faq_counter++; endwhile; endif; wp_reset_query();
						$faq_query = new WP_Query( $faq_args );
						if( $faq_query->have_posts() ) : $faq_query->the_post();
							$faq_cat = get_faq_category( $post->ID );
							echo "</div><!-- accordion -->";
						endif; wp_reset_query(); ?>
				</article>

			</div><!-- row -->
		</div><!-- wrapper -->
	</section><!-- faqs -->

<?php get_footer(); ?>