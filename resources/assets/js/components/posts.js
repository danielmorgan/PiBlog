'use strict';

$(function() {
    if ($('#posts .post').length && $('body').hasClass('posts')) {
        /**
         * Vue component
         */
        var Posts = Vue.extend({});
        var router = new VueRouter({
            hashbang: false,
            history: true,
            saveScrollPosition: true
        });
        router.mode = 'html5';
        router.start(Posts, '#posts');

        /**
         * Image stuff
         */
        $('.post img')
            // .addClass('img-responsive')
            .wrap(function() {
                return '<a href="' + $(this).attr('src') + '"></a>'
            });

        var featuredPhoto = $('.post').eq(0).data('featured-photo');
        $('#featured-photo').css('background-image', 'url(' + featuredPhoto + ')');
    }
});