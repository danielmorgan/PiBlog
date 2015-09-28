'use strict';
window._ = require('lodash');
window.Vue = require('vue');
window.$ = window.jQuery = require('jquery');
window.Slideout = require('slideout');
require('bootstrap-sass/assets/javascripts/bootstrap');

$(function() {
    var slideout = new Slideout({
        'panel': document.getElementById('content'),
        'menu': document.getElementById('sidebar'),
        'padding': window.innerWidth
    });

    $('.menu-button.open').on('click', function() {
        slideout.open();
    });
    $('.menu-button.shut').on('click', function() {
        slideout.close();
    });
    $(window).on('resize', function() {
        slideout.close();
    });
});
