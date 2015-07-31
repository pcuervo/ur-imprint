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
			toggleActionButtons();


			/**
			 * Triggered events
			**/
			$(window).scroll(function(){
				toggleActionButtons();
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

			<?php if ( ! is_home() ){ ?>

				/**
				 * On load
				**/

				setMainPaddingTop();

			<?php } ?>


		</script>
<?php
	endif;
}// footer_scripts
?>