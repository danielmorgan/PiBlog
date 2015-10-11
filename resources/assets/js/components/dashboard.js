'use strict';

$(function() {
	if ($('body').hasClass('editor')) {
		$(document).on('click', '.delete', function(event) {
			if (! confirm('Are you sure?')) event.preventDefault();
		});
	}
});