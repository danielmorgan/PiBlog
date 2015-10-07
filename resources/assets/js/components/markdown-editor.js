'use strict';

var marked = require('marked');

var editor = new Vue({
    el: '#markdown-editor',
    filters: {
        marked: marked
    }
});