'use strict';

$(function() {
    if ($('.posts .post').length) {
        $('.post img')
            .addClass('img-responsive')
            .wrap(function() {
                return '<a href="' + $(this).attr('src') + '"></a>'
            });
    }
});