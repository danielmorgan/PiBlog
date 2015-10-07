'use strict';

/**
 * Growl notifications.
 */
if ($('#messages div').length) {
	$.each($('#messages div'), function () {
		var style = 'default',
			title = 'default',
			message = $(this).text();

		$(this).hide();

		style = title = $(this).attr('class');

		$.growl({
			fixed: true,
			location: 'tr',
			size: 'large',
			style: style,
			title: title.charAt(0).toUpperCase() + title.substring(1),
			message: message,
		});

		console.log("Growling", style, title, message);
	});
}