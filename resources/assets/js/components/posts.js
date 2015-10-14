'use strict';

var VueRouter = require('vue-router')

$(function() {
    if ($('.posts .post').length) {
        /**
         * Vue component
         * @todo All of this stuff before I catch a flight in 6 hours.
         */


        /**
         * Image stuff
         */
        $('.post img')
            .addClass('img-responsive')
            .wrap(function() {
                return '<a href="' + $(this).attr('src') + '"></a>'
            });

        var featuredPhoto = $('.post').eq(0).data('featured-photo');
        $('#featured-photo').css('background-image', 'url(' + featuredPhoto + ')');
    }
});