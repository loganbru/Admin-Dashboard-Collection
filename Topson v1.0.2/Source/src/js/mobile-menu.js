(function($) { 
    "use strict";
        
    // Mobile Menu
    $('.mobile-menu-toggler').on('click', function() {
        if ($('.side-menu').is(':visible')) {
            $('.app').removeClass('app--backdrop')
            $('.side-menu').addClass('hidden')
        } else {
            $('.app').addClass('app--backdrop')
            $('.side-menu').removeClass('hidden')
        }
    })
})($)