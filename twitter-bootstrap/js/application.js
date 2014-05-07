/*
	All the Javascript function called in the app

*/

$('.nav-list').affix({
	offset: {
		top: 0,
		bottom: 20
	}
});

$('[data-spy="scroll"]').each(function () {
	var $spy = $(this).scrollspy('refresh')
});

$('.tooltip-element').tooltip({selector: "a[data-toggle=tooltip]"});

$('#myCarousel').carousel('cycle');
