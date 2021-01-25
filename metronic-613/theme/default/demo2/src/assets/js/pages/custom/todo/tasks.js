"use strict";

// Class definition
var KTApptodo = function() {
    var asideEl = KTUtil.getByID('kt_todo_aside');

    var asideOffcanvas;

    return {
        // public functions
        init: function() {
            // init
            KTApptodo.initAside();
        },

        initAside: function() {
            // Mobile offcanvas for mobile mode
            asideOffcanvas = new KTOffcanvas(asideEl, {
                overlay: true,
                baseClass: 'kt-todo__aside',
                closeBy: 'kt_todo_aside_close',
                toggleBy: 'kt_subheader_mobile_toggle'
            });
        },
    };
}();

KTUtil.ready(function() {
    KTApptodo.init();
});
