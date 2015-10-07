'use strict';

var marked = require('marked');
var autosize = require('autosize');
require('bootstrap-sass/assets/javascripts/bootstrap/tooltip');
require('bootstrap-sass/assets/javascripts/bootstrap/popover');

var editor = new Vue({
    el: '#markdown-editor',
    data: {
        title: $('#markdown-editor input#title').val(),
        content: $('#markdown-editor textarea#content').val()
    },
    filters: {
        marked: marked
    }
});

$(function() {
    $('.markdown-help-link').popover({
        animation: true,
        html: true,
        content: $('#markdown-help').html(),
        viewport: { selector: '#markdown-editor', padding: 0 },
        placement: function() {
            if ($(window).width() < 768) {
                return 'bottom';
            }
            return 'right';
        }
    });

    autosize($('#markdown-editor textarea#content'));
});