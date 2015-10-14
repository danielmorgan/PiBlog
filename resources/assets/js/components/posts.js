'use strict';

$(function() {
    if ($('#posts .post').length && $('body').hasClass('posts')) {
        /**
         * Init Vue component
         */
        var Posts = Vue.extend({});
        var router = new VueRouter({
            hashbang: false,
            history: true,
            saveScrollPosition: true
        });
        router.start(Posts, '#posts');
        router.mode = 'html5';

        /**
         * Check the current scroll position and route to the post that's in 
         * view.
         */
        function navigateToVisiblePost() {
            var currentRoute = window.location.pathname,
                top = window.pageYOffset;

            $('.post-link').each(function() {
                var distance = top - $(this).offset().top,
                    route = $(this).attr('href');

                    console.log(route, distance);

                if (distance < 10 && distance > -100 && currentRoute !== route) {
                    router.go(route);
                    $('.post').removeClass('active');
                    $(this).parents('.post').addClass('active');
                    currentRoute = route;
                }
            });
        }

        navigateToVisiblePost();

        $(window).on('scroll', navigateToVisiblePost);

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