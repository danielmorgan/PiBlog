'use strict';
window._ = require('lodash');
window.Vue = require('vue');
window.$ = window.jQuery = require('jquery');
require('slideout/dist/slideout');
require('bootstrap-sass/assets/javascripts/bootstrap');

$(function() {
	console.log('dom ready');
	var slideout = new Slideout({
		'panel': $('#content'),
		'menu': $('#sidebar')
	});
});