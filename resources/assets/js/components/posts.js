'use strict';

$(function() {
    if ($('.posts .post').length) {
        $('.post img')
            .addClass('img-responsive')
            .wrap(function() {
                return '<a href="' + $(this).attr('src') + '"></a>'
            });

        var featuredPhoto = $('.post').eq(0).data('featured-photo');
        $('#featured-photo').css('background-image', 'url(' + featuredPhoto + ')');
    }
});