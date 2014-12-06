$(document).ready(function () {
	$('.bloga').fancybox({
		 'scrolling': 'no',
			'titleShow': false,
			"centerOnScroll": true
	});
	var hash = window.location.hash;
	if(hash)$("a[href$="+hash+"]").trigger("click");
});