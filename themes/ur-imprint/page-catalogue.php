<?php get_header(); ?>

	<!-- =================================================
	==== MAIN FILTERS
	================================================== -->
	<section class="[ main-filters ][ padding ][ margin-bottom ]">
		<div class="[ wrapper ]">
			<div class="[ text-center ]">
				<h2 class="[ ]">Catalogue</h2>
				<div class="[ button-group ][ color-light ]">
					<div class="[ button button--primary ]">designs</div>
					<div class="[ button button--primary button--hollow ]">products</div>
				</div>
			</div>
		</div><!-- wrapper -->
	</section><!-- main-filters -->



	<!-- =================================================
	==== DESIGN FILTERS
	================================================== -->
	<section class="[ design-filters ][ bg-primary ][ margin-bottom ]">
		<div class="[ wrapper ]">
			<div class="[ row ][ color-light ][ padding-top-bottom ]">

				<div class="[ column xmall-3 ]">
					<p class="[ padding-top--small ]">theme</p>
				</div>
				<div class="[ theme-filters ][ button-group ]" data-filter-group="theme">
					<div class="[ column xmall-9 ]">
						<button class="[ button button--light ][ margin-bottom--small ]" data-filter="<?php echo $theme->name; ?>">
							<span class="[ block ][ color-primary ]">all</span>
						</button>
						<?php 
						$theme_terms = get_terms( 'theme', 'orderby=name&hide_empty=1' );
						foreach ( $theme_terms as $theme ) : ?>
							<button class="[ button button--light button--hollow ][ margin-bottom--small ]" data-filter="<?php echo $theme->name; ?>">
								<span class="[ block ][ color-light ]"><?php echo $theme->name; ?></span>
							</button>
						<?php endforeach; ?>
					</div>
				</div><!-- theme-filters -->
				
				<div class="[ column xmall-3 ]">
					<p class="[ padding-top--small ]">type</p>
				</div>
				<div class="[ type-filters ][ button-group ]" data-filter-group="type">
					<div class="[ column xmall-9 ]">
						<button class="[ button button--light ][ margin-bottom--small ]" data-filter="<?php echo $type->name; ?>">
							<span class="[ block ][ color-primary ]">all</span>
						</button>
						<?php 
						$type_terms = get_terms( 'type', 'orderby=name&hide_empty=1' );
						foreach ( $type_terms as $type ) : ?>
							<button class="[ button button--light button--hollow ][ margin-bottom--small ]" data-filter="<?php echo $type->name; ?>">
								<span class="[ block ][ color-light ]"><?php echo $type->name; ?></span>
							</button>
						<?php endforeach; ?>
					</div>
				</div><!-- type-filters -->

				<div class="[ column xmall-3 ]">
					<p class="[ padding-top--small ]">author</p>
				</div>
				<div class="[ author-filters ][ button-group ]" data-filter-group="author">
					<div class="[ column xmall-9 ]">
						<button class="[ button button--light ][ margin-bottom--small ]" data-filter="<?php echo $author->name; ?>">
							<span class="[ block ][ color-primary ]">all</span>
						</button>
						<?php 
						$author_terms = get_terms( 'design-author', 'orderby=name&hide_empty=1' );
						foreach ( $author_terms as $author ) : ?>
							<button class="[ button button--light button--hollow ][ margin-bottom--small ]" data-filter="<?php echo $author->name; ?>">
								<span class="[ block ][ color-light ]"><?php echo $author->name; ?></span>
							</button>
						<?php endforeach; ?>
					</div>
				</div><!-- author-filters -->
			</div>
		</div><!-- wrapper -->
	</section><!-- design-filters -->



	<!-- =================================================
	==== DESIGNS
	================================================== -->
	<section class="[ designs ][ isotope-container ]">
		<div class="[ wrapper ]">
			<div class="[ row ]">

				<?php 
				$designs_args = array(
					'post_type' => 'designs',
					'posts_per_page' => -1,
				);
				$designs_query = new WP_Query( $designs_args );
				if( $designs_query->have_posts() ) : while ( $designs_query->have_posts() ) : $designs_query->the_post(); 
					$design_filter_classes = get_design_filter_classes( $post->ID );
				?>	
					<div class="[ column xmall-6 ][ <?php echo $design_filter_classes; ?>]">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'thumb', array( 'class' => '[ image-responsive ]' ) ); ?>
						</a>
					</div>
					
				<?php endwhile; endif; wp_reset_query(); ?>

			</div><!-- row -->
		</div><!-- wrapper -->
	</section><!-- designs -->

<?php get_footer(); ?>