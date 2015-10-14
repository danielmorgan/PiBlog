'use strict';

//window._ = require('lodash');
window.Vue = require('vue');
window.VueRouter = require('vue-router')
window.$ = window.jQuery = require('jquery');
window.Slideout = require('slideout');
window.growl = require('jquery.growl');

require('./components/sidebar.js');
require('./components/posts.js');
require('./components/notifications.js');
require('./components/dashboard.js');
require('./components/markdown-editor.js');
