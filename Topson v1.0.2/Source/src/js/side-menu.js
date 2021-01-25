(function($) { 
    "use strict";
        
    // Side Menu
    $('.side-menu__content__link').on('click', function() {
        let content = $(this).data('content')
        if (content !== undefined) {
            // Remove active class
            $('.side-content').removeClass('side-content--active')
            $('.side-menu__content__link').removeClass('side-menu__content__link--active')

            // Set active class
            $(this).addClass('side-menu__content__link--active')
            $('.app').removeClass('app--backdrop')
            $('.side-menu').addClass('hidden')
            $(`[data-content=${content}]`).each(function() {
                if ($(this).hasClass('side-content')) {
                    $(this).addClass('side-content--active')
                }
            })
        }
    })
})($)