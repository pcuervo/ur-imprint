var $=jQuery.noConflict();

/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

/**
 * Run Isotope plugin
 * @container element cointaining items
 * @item element inside the container
**/
function runIsotope(container, item){
	var $container = $(container);
	$container.imagesLoaded( function(){
		$container.isotope({
			itemSelector : item,
			layoutMode: 'fitRows'
		});
	});
}// runIsotope

/**
 * Filter in Isotope plugin
 * @container element cointaining items
 * @item element inside the container
**/
function filterIsotope(container, item, filterSelector){

	var $grid = $(container).isotope({
		itemSelector: item
	});

	// store filter for each group
	var filters = {};

	$( filterSelector ).on( 'click', '.button-group .button', function() {
		var $this = $(this);
		// get group key
		var $buttonGroup = $this.parents('.button-group');
		var filterGroup = $buttonGroup.attr('data-filter-group');
		// set filter for group
		filters[ filterGroup ] = $this.attr('data-filter');
		// combine filters
		var filterValue = concatValues( filters );
		// set filter for Isotope
		$grid.isotope({ filter: filterValue });
	});

	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
		var $buttonGroup = $( buttonGroup );
		$buttonGroup.on( 'click', 'button', function() {
			$buttonGroup.find('.active').removeClass('active');
			$( this ).addClass('active');
		});
	});
}// filterIsotope

/**
 * Flatten object by concatenating values
 * @param Object obj 
**/
function concatValues( obj ) {
	var value = '';
	for ( var prop in obj ) {
		value += obj[ prop ];
	}
	return value;
}// concatValues

/*------------------------------------*\
	#GET/SET FUNCTIONS
\*------------------------------------*/

/**
 * Get header's height
 */
function getHeaderHeight(){
	return $('header').outerHeight();
}// getHeaderHeight

/**
 * Get footer's height
 */
function getFooterHeight(){
	return $('footer').height();
}// getFooterHeight

/**
 * Get the scrolled pixels in Y axis
 */
function getScrollY() {
	return $(window).scrollTop();
}// getScrollY

/**
 * Get the scrolled pixels in Y axis
 */
function getScrollY() {
	return $(window).scrollTop();
}// getScrollY

/**
 * Set main's padding top
 */
function setMainPaddingTop(){
	var headerHeight = getHeaderHeight();
	$('.main').css('padding-top', headerHeight + 20);
}// setMainPaddingTop



/*------------------------------------*\
	#AJAX FUNCTIONS
\*------------------------------------*/



/*------------------------------------*\
	#TOGGLE FUNCTIONS
\*------------------------------------*/

/**
 * Toggle action buttons
 */
 function toggleActionButtons(){
	//Get the header height so we can now when
	//to change the heade state
	var headerHeight = getHeaderHeight();
	//Scrolled pixels in Y axis
	var sy = getScrollY();
	//Compare the two numbers, when they are the same or less
	//add fixed class to the header.
	if ( sy >= headerHeight ) {
		$('.action-buttons').addClass('opened');
	} else {
		$('.action-buttons').removeClass('opened');
	}
}// toggleActionButtons

/**
 * Toggle Modal
 * @param element to be toggled
**/
function toggleModal(element){

	$('body').toggleClass('overflow-hidden');

	if ( undefined === element ){
		$('.modal-wrapper').addClass('hide');
		return;
	}

	$(element).toggleClass('hide');

}//toggleModal

/**
 * Toggle any element
 * @param element to be shown
**/
function toggleVisibility(element){
	$(element).toggleClass('opened');
}// toggleVisibility

/**
 * Toggle catalogue filters and results
**/
function toggleCatalogueCategory( catalogueCategory ){

	toggleCatalogueDesigns();
	toggleCatalogueProducts();
	
}// toggleCatalogueCategory

/**
 * Toggle catalogue designs' filters and results
**/
function toggleCatalogueDesigns(){

	if( $('.js-btn-designs').hasClass('active') ){
		$('.design-filters').addClass('hidden');
		$('.designs').addClass('hidden');
		return;
	}
	$('.design-filters').removeClass('hidden');
	$('.designs').removeClass('hidden');

}// toggleCatalogueDesigns

/**
 * Toggle catalogue products' filters and results
**/
function toggleCatalogueProducts(){
	
	if( $('.js-btn-products').hasClass('active') ){
		$('.product-filters').addClass('hidden');
		$('.products').addClass('hidden');
		return;
	}
	$('.product-filters').removeClass('hidden');
	$('.products').removeClass('hidden');
	console.log('filtering...');
	filterIsotope('.products-isotope-container', '.column', '.product-filters' );

}// toggleCatalogueProducts



/*------------------------------------*\
	#HELPER FUNCTIONS
\*------------------------------------*/

function imgToSvg(){
	$('img.svg').each(function(){
		var $img = $(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');

		$.get(imgURL, function(data) {
			// Get the SVG tag, ignore the rest
			var $svg = $(data).find('svg');

			// Add replaced image's ID to the new SVG
			if(typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			// Add replaced image's classes to the new SVG
			if(typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass+' replaced-svg');
			}

			// Remove any invalid XML tags as per http://validator.w3.org
			$svg = $svg.removeAttr('xmlns:a');

			// Replace image with new SVG
			$img.replaceWith($svg);

		}, 'xml');

	});
} //imgToSvg



/*------------------------------------*\
	#FORMAT FUNCTIONS
\*------------------------------------*/



/*------------------------------------*\
	#VIDEO
\*------------------------------------*/

function runHTML5Video(){

	// Video Controls
	var videoControls = document.getElementById("video-controls");

	// Video
	var video = document.getElementById("video");

	// Buttons
	var playButton = document.getElementById("play-pause");

	// Event listener for the play/pause button
	playButton.addEventListener("click", function() {
		if (video.paused == true) {
			// Play the video
			video.play();

			// Update the button text to 'Pause'
			$(playButton).addClass('paused');
			$(videoControls).removeClass('gradient-transparent-to-black');
			playButton.innerHTML = '<img class="[ svg icon icon--small ][ color-light ]" src="'+theme_url+'icons/pause.svg" alt="pause">';
		} else {
			// Pause the video
			video.pause();

			// Update the button text to 'Play'
			$(playButton).removeClass('paused');
			$(videoControls).addClass('gradient-transparent-to-black');
			playButton.innerHTML = '<img class="[ svg icon icon--small ][ color-light ]" src="'+theme_url+'icons/play.svg" alt="play">';
		}
	});
}