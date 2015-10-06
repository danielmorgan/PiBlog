'use strict';

/**
 * Blog sidebar.
 */
if ($('#sidebar').length) {
	var slideout = new Slideout({
		'panel': document.getElementById('content'),
		'menu': document.getElementById('sidebar'),
		'padding': window.innerWidth
	});

	$('.menu-button.open').on('click', function () {
		slideout.open();
	});
	$('.menu-button.shut').on('click', function () {
		slideout.close();
	});
	$(window).on('resize', function () {
		slideout.close();
	});
}