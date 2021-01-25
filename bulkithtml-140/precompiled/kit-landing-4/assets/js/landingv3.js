/*! landingv3.js | Bulkit | CSS Ninja */

/* ==========================================================================
Landing kit 4 JS file 
========================================================================== */

$(document).ready(function($){
    
    "use strict";

    //Toggle between light and dark logo when solid navbar comes in
    $(window).on('scroll', function () {    // this will work when your window scrolled.
        var height = $(window).scrollTop();  //getting the scrolling height of window
        if(height  > 80) {
            $("img.light-logo").attr("src","assets/images/logos/bulkit-blue.svg");
        } else{
            $("img.light-logo").attr("src","assets/images/logos/bulkit-white.svg");
        }
    });
    
    //Toggle the sign up button color when solid navbar comes in
    if ($('.navbar-light').length) {
        $(window).on('scroll', function () {    // this will work when your window scrolled.
            var height = $(window).scrollTop();  //getting the scrolling height of window
            if(height  > 80) {
                $('.button-signup').removeClass('light-btn').addClass('primary-btn');
            } else{
                $('.button-signup').removeClass('primary-btn').addClass('light-btn');
            }
        }); 
    }

    //Clone the original video
    var video = $('#video-embed').clone();

    //Destroy the video instance on modal close and replace it with the clone
    $('.stop-video').on("click", function(){
        var $this = $('#video-modal').find('iframe'),
            tempSrc = $this.attr('src');
        $this.attr('src', "");
        $('#video-embed').remove();
        
        setTimeout(function(){
            $('.background-wrapper').append(video);
            Video('#video-embed');
        }, 1000);
    })

    //Pricing switcher toggle
    $('#price-switch').on("click", function(){
        $('.by-year, .by-month').toggleClass('is-active');
        $('.condensed-plan').toggleClass('is-switched');
    })

})