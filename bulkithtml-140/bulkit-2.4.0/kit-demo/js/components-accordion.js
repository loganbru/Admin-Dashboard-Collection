/*! components-accordion.js | Bulkit | CSS Ninja */

/* ==========================================================================
Accordion component core
========================================================================== */

$(document).ready(function($){
    
    "use strict";
    
    //Accordion implementation
    $(".accordion-section > a").on("click", function(){
        if ($(this).hasClass('active')) {
            $(this).removeClass("active");
            $(this).siblings('.accordion-content').slideUp(200);
            $(".accordion-section > a i").removeClass("fa-minus").addClass("fa-plus");
        }
        else {
            $(".accordion-section > a i").removeClass("fa-minus").addClass("fa-plus");
            $(this).find("i").removeClass("fa-plus").addClass("fa-minus");
            $(".accordion-section > a").removeClass("active");
            $(this).addClass("active");
            $('.accordion-content').slideUp(200);
            $(this).siblings('.accordion-content').slideDown(200);
        }

    });
});