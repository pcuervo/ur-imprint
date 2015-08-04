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
			toggleActionButtons();

			/**
			 * Triggered events
			**/

			$(window).scroll(function(){
				toggleActionButtons();
				toggleHeader();
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

				runHTML5Video();

			<?php } ?>



			/*------------------------------------*\
				#NOT HOME
			\*------------------------------------*/
			<?php if ( ! is_home() ) : ?>

				/**
				 * On load
				**/

				setMainPaddingTop();

			<?php endif; ?>



			/*------------------------------------*\
				#CATALOGUE
			\*------------------------------------*/
			<?php if ( is_page( 'Catalogue' ) ) : ?>

				/**
				 * On load
				**/

				runIsotope( '.designs-isotope-container', '.column' );
				runIsotope( '.products-isotope-container', '.column' );
				filterIsotope('.designs-isotope-container', '.column', '.design-filters' );

				/**
				 * Triggered events
				**/

				$('.js-btn-designs').on('click', function(e){
					if( $(this).hasClass('active') ) return;

					toggleCatalogueCategory( 'designs' );
				});

				$('.js-btn-products').on('click', function(e){
					if( $(this).hasClass('active') ) return;

					toggleCatalogueCategory( 'products' );
				});

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