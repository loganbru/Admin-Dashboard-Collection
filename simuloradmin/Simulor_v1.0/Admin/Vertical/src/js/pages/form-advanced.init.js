/**
 * Theme: Simulor - Responsive Bootstrap 4 Admin Dashboard
 * Author: Coderthemes
 * Module/App: Form Advanced
 */

!function($) {
    "use strict";

    var Components = function() {};

    //switch
    Components.prototype.initSwitchery = function() {
        $('[data-plugin="switchery"]').each(function (idx, obj) {
            new Switchery($(this)[0], $(this).data());
        });
    },

    //Max Length
    Components.prototype.initMaxLength = function() {
        //Bootstrap-MaxLength
        $('input#defaultconfig').maxlength({
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger"
        });

        $('input#thresholdconfig').maxlength({
            threshold: 20,
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger"
        });

        $('input#alloptions').maxlength({
            alwaysShow: true,
            separator: ' out of ',
            preText: 'You typed ',
            postText: ' chars available.',
            validate: true,
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger"
        });

        $('textarea#textarea').maxlength({
            alwaysShow: true,
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger"
        });

        $('input#placement').maxlength({
            alwaysShow: true,
            placement: 'top-left',
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger"
        });
    },



    //initilizing
    Components.prototype.init = function() {
        var $this = this;
        this.initSwitchery(),
        this.initMaxLength()
    },

    $.Components = new Components, $.Components.Constructor = Components

}(window.jQuery),
    //initializing main application module
function($) {
    "use strict";
    $.Components.init();
}(window.jQuery);