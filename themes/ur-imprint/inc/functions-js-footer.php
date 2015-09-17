<?php

/**
* Here we add all the javascript that needs to be run on the footer.
**/
function footer_scripts(){
	global $post;

	if( wp_script_is( 'functions', 'done' ) ) :

?>
		<script type="text/javascript">

			/*------------------------------------*\
				#GLOBAL
			\*------------------------------------*/

			/**
			 * On load
			**/

			imgToSvg();
			toggleHeader();
			setContainerPaddingBottom();

			/**
			 * Triggered events
			**/

			$(window).scroll(function(){
				toggleHeader();
				setContainerPaddingBottom();
			});

			$(window).resize(function(){
				setContainerPaddingBottom();
			});

			$('.js-modal-opener').on('click', function(e){
				e.preventDefault();
				var modal = $(this).data('modal');
				var modal = '.modal-'+modal;
				toggleModal(modal);
			});

			$('.js-modal-closer').on('click', function(e){
				e.preventDefault();
				toggleModal();
			});



			/*------------------------------------*\
				#HOME
			\*------------------------------------*/
			<?php if ( is_home() ){ ?>

				/**
				 * On load
				**/

			<?php } ?>



			/*------------------------------------*\
				#NOT HOME
			\*------------------------------------*/
			<?php if ( ! is_home() ) : ?>

				/**
				 * On load
				**/

				/**
				 * Triggered events
				**/
				$(window).scroll(function(){
				});

				$(window).resize(function(){
				});

			<?php endif; ?>



			/*------------------------------------*\
				#CATALOGUE
			\*------------------------------------*/
			<?php if ( is_page( 'Catalogue' ) ) : ?>

				/**
				 * On load
				**/

				runIsotope( '.designs-isotope-container', '.card' );
				runIsotope( '.products-isotope-container', '.card' );
				filterIsotope('.designs-isotope-container', '.card', '.design-filters' );

				/**
				 * Triggered events
				**/

				$('.js-btn-designs, .js-btn-products').on('click', function(e){
					if( $(this).hasClass('active') ) return;
					toggleCatalogueCategory();
				});

				$('.js-lightbox-opener').on('click', function(e){
					e.preventDefault();
					var largeImage = $(this).siblings('.image-modal');
					toggleLightbox(largeImage);
				});

				$('.js-lightbox-closer').on('click', function(e){
					toggleLightbox();
				});

			<?php endif; ?>


			/*------------------------------------*\
				#FAQs ARCHIVE
			\*------------------------------------*/
			<?php if ( is_post_type_archive('faq') ) { ?>

				$('.accordion-section-title').click(function(e) {
					// Grab current anchor value
					var currentAttrValue = $(this).attr('href');

					if($(e.target).is('.active')) {
						closeAccordionSection();
					}else {
						closeAccordionSection();

						// Add active class to section title
						$(this).addClass('active');
						// Open up the hidden content panel
						$('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
					}

					e.preventDefault();
				});

			 <?php } ?> // FAQs ARCHIVE

			/*------------------------------------*\
				#CREATE
			\*------------------------------------*/
			<?php if ( is_page( 'create' ) ): ?>
				runIsotope( '.products-isotope-container', '.card' );
				filterIsotope('.products-isotope-container', '.card', '.product-filters' );
			<?php endif; ?>

			/*------------------------------------*\
				#CONTACT
			\*------------------------------------*/
			<?php if ( is_page( 'contact' ) ): ?>
				runValidation( '.js-contact' );
			<?php endif; ?>


		</script>
<?php
	endif;
}// footer_scripts
?>