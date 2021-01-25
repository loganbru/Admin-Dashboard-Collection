"use strict";

// Class definition
var KTApptasks = function() {
    var asideEl = KTUtil.getByID('kt_tasks_aside');

    var asideOffcanvas;

    return {
        // public functions
        init: function() {
            // init
            KTApptasks.initAside();
        },

        initAside: function() {
            // Mobile offcanvas for mobile mode
            asideOffcanvas = new KTOffcanvas(asideEl, {
                overlay: true,
                baseClass: 'kt-tasks__aside',
                closeBy: 'kt_tasks_aside_close',
                toggleBy: 'kt_subheader_mobile_toggle'
            });
        },
    };
}();

KTUtil.ready(function() {
    KTApptasks.init();
});
