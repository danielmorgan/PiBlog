'use strict';

var marked = require('marked');

var markdownEditor = new Vue({
    el: '#markdown-editor',
    data: {
        content: '# Test'
    },
    filters: {
        marked: marked
    }
});
