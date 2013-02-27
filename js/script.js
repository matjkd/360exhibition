var base_url = $('#baseurl').val();

// remap jQuery to $
(function($) {

})(this.jQuery);

// usage: log('inside coolFunc',this,arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function() {
	log.history = log.history || [];
	// store logs to an array for reference
	log.history.push(arguments);
	if (this.console) {
		console.log(Array.prototype.slice.call(arguments));
	}
};

function burst() {
	$('.lightning01').fadeIn(100);
	$('.lightning01').delay(100).fadeOut(101);

	$('.lightning02').delay(200).fadeIn(101);
	$('.lightning02').delay(100).fadeOut(101);

	$('.lightning03').delay(300).fadeIn(101);
	$('.lightning03').delay(100).fadeOut(101);

	$('.lightning04').delay(400).fadeIn(101);
	$('.lightning04').delay(100).fadeOut(101);

	$('.lightning05').delay(450).fadeIn(101);
	$('.lightning05').delay(100).fadeOut(101);

}

function pageLoader(id) {
	$('.mainbody').fadeOut(401);

	$('#page' + id).delay(400).slideDown();
	
	  
}


$(document).ready(function() {

	// Declare parallax on layers
	$('.parallax-layer').parallax({
		mouseport : jQuery("#port"),
		yparallax : false
	});

	
	$('.spark').click(function() {
		var pageID = $(this).attr('id');
		pageID = pageID.replace('load', '');

		pageLoader(pageID);
		burst();
		burst();

	});

}); 