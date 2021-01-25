/*
Template Name: Xoric - Responsive Bootstrap 4 Admin Dashboard
Author: Themesdesign
Version: 1.0.0
Website: https://themesdesign.in/
File: Form Advanced Js File
*/

!function($) {
    "use strict";

    var AdvancedForm = function() {};
    
    AdvancedForm.prototype.init = function() {

        //colorpicker start
        $(".colorpicker-default").spectrum();

        $("#show-input").spectrum({
            preferredFormat: "hex",
            showInput: true
        });

        $("#show-alpha").spectrum({
            preferredFormat: "rgb",
            showInput: true,
            showAlpha: true
        });

        $("#show-palette").spectrum({
            showPalette: true,
            palette: [
                ['#3051d3', '#3ddc97', '#00a7e1'],
                ['#e4cc37', '#f06543', '#343a40']
            ]
        });

        $("#show-input-initial").spectrum({
            preferredFormat: "hex",
            showInitial: true,
            showInput: true
        });

        $("#hide-button").spectrum({
            showButtons: false
        });

        $("#flat-colorpicker").spectrum({
            preferredFormat: "hex",
            flat: true,
            showInput: true
        });

        // selectize

        $('.selectize').selectize();

        $('#selectize-tags').selectize({
            delimiter: ',',
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input
                }
            }
        });


        
        //Bootstrap-TouchSpin
        var defaultOptions = {
        };

        // touchspin
        $('[data-toggle="touchspin"]').each(function (idx, obj) {
            var objOptions = $.extend({}, defaultOptions, $(obj).data());
            $(obj).TouchSpin(objOptions);
        });

        $("input[name='demo3_21']").TouchSpin({
            initval: 40,
            buttondown_class: "btn btn-primary",
            buttonup_class: "btn btn-primary"
        });
        $("input[name='demo3_22']").TouchSpin({
            initval: 40,
            buttondown_class: "btn btn-primary",
            buttonup_class: "btn btn-primary"
        });

        $("input[name='demo_vertical']").TouchSpin({
            verticalbuttons: true
        });

        //Bootstrap-MaxLength
        $('input#defaultconfig').maxlength({
            warningClass: "badge badge-info",
            limitReachedClass: "badge badge-warning"
        });

        $('input#thresholdconfig').maxlength({
            threshold: 20,
            warningClass: "badge badge-info",
            limitReachedClass: "badge badge-warning"
        });

        $('input#moreoptions').maxlength({
            alwaysShow: true,
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger"
        });

        $('input#alloptions').maxlength({
            alwaysShow: true,
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger",
            separator: ' out of ',
            preText: 'You typed ',
            postText: ' chars available.',
            validate: true
        });

        $('textarea#textarea').maxlength({
            alwaysShow: true,
            warningClass: "badge badge-info",
            limitReachedClass: "badge badge-warning"
        });

        $('input#placement').maxlength({
            alwaysShow: true,
            placement: 'top-left',
            warningClass: "badge badge-info",
            limitReachedClass: "badge badge-warning"
        });

    },
    //init
    $.AdvancedForm = new AdvancedForm, $.AdvancedForm.Constructor = AdvancedForm
}(window.jQuery),

//initializing
function ($) {
    "use strict";
    $.AdvancedForm.init();
}(window.jQuery);