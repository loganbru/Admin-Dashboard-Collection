/**
 * Theme: Simulor - Responsive Bootstrap 4 Admin Dashboard
 * Author: Coderthemes
 * Module/App: Main Js
 */


!function($) {
    'use strict';

    var AdvanceFormApp = function() {
        this.$body = $('body'),
        this.$window = $(window)
    };


    /** 
     * Initlizes the select2
    */
    AdvanceFormApp.prototype.initSelect2 = function() {
        // Select2
        $('[data-toggle="select2"]').select2();
    },

    /** 
     * Initlized mask
    */
    AdvanceFormApp.prototype.initMask = function() {
        $('[data-toggle="input-mask"]').each(function (idx, obj) {
            var maskFormat = $(obj).data("maskFormat");
            var reverse = $(obj).data("reverse");
            if (reverse != null)
                $(obj).mask(maskFormat, {'reverse': reverse});
            else
                $(obj).mask(maskFormat);
        });
    },

    AdvanceFormApp.prototype.initDateRange = function() {
        var defaultOptions = {
            "cancelClass": "btn-light",
            "applyButtonClasses": "btn-success"
        };

        // date pickers
        $('[data-toggle="date-picker"]').each(function (idx, obj) {
            var objOptions = $.extend({}, defaultOptions, $(obj).data());
            $(obj).daterangepicker(objOptions);
        });

        //date pickers ranges only
        var start = moment().subtract(29, 'days');
        var end = moment();
        var defaultRangeOptions = {
            startDate: start,
            endDate: end,
            ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        };

        $('[data-toggle="date-picker-range"]').each(function (idx, obj) {
            var objOptions = $.extend({}, defaultRangeOptions, $(obj).data());
            var target = objOptions["targetDisplay"];
            //rendering
            $(obj).daterangepicker(objOptions, function(start, end) {
                if (target)
                    $(target).html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });
        });
    },

    /** 
     * Initilize
    */
   AdvanceFormApp.prototype.init = function() {
        var $this = this;
        this.initSelect2();
        this.initMask();
        this.initDateRange();
    },

    $.AdvanceFormApp = new AdvanceFormApp, $.AdvanceFormApp.Constructor = AdvanceFormApp


}(window.jQuery),

function($) {
    "use strict";

    var Components = function() {};

    //initializing tooltip
    Components.prototype.initTooltipPlugin = function() {
        $.fn.tooltip && $('[data-toggle="tooltip"]').tooltip()
    },

    //initializing popover
    Components.prototype.initPopoverPlugin = function() {
        $.fn.popover && $('[data-toggle="popover"]').popover()
    },

    //initializing Custom Select
    Components.prototype.initCustomSelect = function() {
        $('[data-plugin="customselect"]').niceSelect();
    },

    //initializing Slimscroll
    Components.prototype.initSlimScrollPlugin = function() {
        //You can change the color of scroll bar here
        $.fn.slimScroll && $(".slimscroll").slimScroll({
            height: 'auto',
            position: 'right',
            size: "8px",
            touchScrollStep: 20,
            color: '#9ea5ab'});
    },

    //initializing form validation
    Components.prototype.initFormValidation = function() {
        $(".needs-validation").on('submit', function (event) {
            $(this).addClass('was-validated');
            if ($(this)[0].checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                return false;
            }
            return true;
        });
    },


    //initilizing
    Components.prototype.init = function() {
        var $this = this;
        this.initTooltipPlugin(),
        this.initPopoverPlugin(),
        this.initCustomSelect(),
        this.initSlimScrollPlugin(),
        this.initFormValidation();
    },

    $.Components = new Components, $.Components.Constructor = Components

}(window.jQuery),

function ($) {
    'use strict';

    var App = function () {
        this.$body = $('body'),
            this.$window = $(window)
    };


    /** 
     * Initlizes the menu - top and sidebar
    */
    App.prototype.initMenu = function () {
        var $this = this;

        // Left menu collapse
        $('.button-menu-mobile').on('click', function (event) {
            event.preventDefault();
            if ($this.$window.width() < 768) {
                $this.$body.toggleClass('sidebar-enable');
            }

            // sidebar - scroll container
            $('.slimscroll-menu').slimscroll({
                height: 'auto',
                position: 'right',
                size: "8px",
                color: '#9ea5ab',
                wheelStep: 5,
                touchScrollStep: 20
            });
        });

        // sidebar - main menu
        $("#side-menu").metisMenu();

        // sidebar - scroll container
        $('.slimscroll-menu').slimscroll({
            height: 'auto',
            position: 'right',
            size: "8px",
            color: '#9ea5ab',
            wheelStep: 5,
            touchScrollStep: 20
        });

        // right side-bar toggle
        $('.right-bar-toggle').on('click', function (e) {
            $('body').toggleClass('right-bar-enabled');
        });

        $(document).on('click', 'body', function (e) {
            if ($(e.target).closest('.right-bar-toggle, .right-bar').length > 0) {
                return;
            }

            if ($(e.target).closest('.left-side-menu, #sidebar-menu').length > 0 || $(e.target).hasClass('button-menu-mobile') 
                || $(e.target).closest('.button-menu-mobile').length > 0) {
                return;
            }

            $('body').removeClass('right-bar-enabled');
            $('body').removeClass('sidebar-enable');
            return;
        });

        // activate the menu in left side bar based on url
        $("#sidebar-menu a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().addClass("in");
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().addClass("in"); // add active to li of the current link
                $(this).parent().parent().parent().parent().parent().addClass("active");
            }
        });

        this.$window.on('resize', function(e) {
            e.preventDefault();
            location.reload(true);
        });
    },

        /** 
         * Init the layout - with broad sidebar or compact side bar
        */
        App.prototype.initLayout = function () {
            // in case of small size, add class enlarge to have minimal menu
            if (this.$window.width() >= 768 && this.$window.width() <= 1028) {
                this.$body.addClass('enlarged');
            } else {
                if (this.$body.data('keep-enlarged') != true) {
                    this.$body.removeClass('enlarged');
                }
            }
        },

        //initilizing
        App.prototype.init = function () {
            var $this = this;
            this.initLayout();
            this.initMenu();
            //creating portles
            $.AdvanceFormApp.init();
            $.Components.init();

            // on window resize, make menu flipped automatically
            $this.$window.on('resize', function(e) {
                e.preventDefault();
                console.log("resized");
                $this.initLayout();
            });
        },

        $.App = new App, $.App.Constructor = App


}(window.jQuery),
    //initializing main application module
    function ($) {
        "use strict";
        $.App.init();
    }(window.jQuery);