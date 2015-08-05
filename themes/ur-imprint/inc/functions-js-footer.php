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

			/**
			 * Triggered events
			**/

			$(window).scroll(function(){
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

				/**
				 * Triggered events
				**/
				$(window).scroll(function(){
					setMainPaddingTop();
				});
				$(window).resize(function(){
					setMainPaddingTop();
				});

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

				$('.js-btn-designs, .js-btn-products').on('click', function(e){
					if( $(this).hasClass('active') ) return;

					toggleCatalogueCategory();
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