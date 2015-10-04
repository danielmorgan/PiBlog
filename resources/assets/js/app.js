'use strict';
//window._ = require('lodash');
//window.Vue = require('vue');
//require('bootstrap-sass/assets/javascripts/bootstrap');
window.$ = window.jQuery = require('jquery');
window.Slideout = require('slideout');
window.growl = require('jquery.growl');

$(function() {
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

	/**
	 * Growl notifications.
     */
    if ($('.errors div').length) {
        $.each($('.errors div'), function () {
            var style = 'default',
                title = 'default',
                message = $(this).text();

            $(this).hide();

            if ($(this).hasClass('notice')) style = title = 'notice';
            if ($(this).hasClass('warning')) style = title = 'warning';
            if ($(this).hasClass('error')) style = title = 'error';

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
});
