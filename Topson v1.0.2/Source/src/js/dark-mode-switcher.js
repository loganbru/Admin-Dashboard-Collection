(function($) { 
    "use strict";
        
    $('#dark-mode-switcher').on('change', function() {
        if ($('html').hasClass('dark')) {
            $('html').removeClass('dark')
        } else {
            $('html').addClass('dark')
        }
    })
})($)