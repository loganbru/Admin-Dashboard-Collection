/* ------------------------------------------------------------------------------
 *
 *  # Scrollspy
 *
 *  Demo JS code for components_scrollspy.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var Scrollspy = function () {


    //
    // Setup module components
    //

	// Sticky
    var _componentSticky = function() {
        if (!$().stick_in_parent) {
            console.warn('Warning - sticky.min.js is not loaded.');
            return;
        }

        // Initialize
        $('.sidebar-sticky .sidebar').stick_in_parent({
            offset_top: 20,
            parent: '.content'
        });

        // Detach on mobiles
        $('.sidebar-mobile-component-toggle').on('click', function() {
            $('.sidebar-sticky .sidebar').trigger("sticky_kit:detach");
        });

        $(window).on('load scroll', function() {
            if ($(window).scrollTop() > $(document).height() - $(window).height() - 50) {
                $('.sidebar-sticky .sidebar').addClass('fixed-sidebar-space');
            }
            else {
                $('.sidebar-sticky .sidebar').removeClass('fixed-sidebar-space');
            }
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        initComponents: function() {
            _componentSticky();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    Scrollspy.initComponents();
});
