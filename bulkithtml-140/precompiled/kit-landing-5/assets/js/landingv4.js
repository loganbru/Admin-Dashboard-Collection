/*! landingv4.js | Bulkit | CSS Ninja */

/* ==========================================================================
Landing kit 2 JS file 
========================================================================== */

$(document).ready(function($){
    
    "use strict";
    
    //Navigation dots
    $('.slide-dot').on('click', function(){
        
        var text = $(this).attr('data-feature-text');
        var image = $(this).attr('data-feature');
        
        $('.showcase-wrap').removeClass('is-active');
        $('.showcase-text-wrapper').addClass('is-hidden');
        
        $('#' + text).removeClass('is-hidden');
        $('#' + image).addClass('is-active');
        
        $('.slide-dot.is-active').removeClass('is-active');
        $(this).addClass('is-active');
    })
    
    //Contact toggler
    $('.tabbed-links li').on('click', function(){
        
        var target = $(this).attr('data-contact');
        
        $('.contact-block').addClass('is-hidden');
        $('#' + target).removeClass('is-hidden');
        
        $('.tabbed-links li.is-active').removeClass('is-active');
        $(this).addClass('is-active');
    })
    
    if ($('.switch-pricing-wrapper').length) {
        $('.pricing-switcher input').on('change', function(){
            $('.plan-price').toggleClass('is-active');
        })
    }

    //Scroll reveal definitions
    // Declaring defaults
    window.sr = ScrollReveal();

    // Simple reveal
    sr.reveal('.is-title-reveal', { 
        origin: 'bottom',
        distance: '20px',
        duration: 600,
        delay: 100,
        rotate: { x: 0, y: 0, z: 0 },
        opacity: 0,
        scale: 1,
        easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
        container: window.document.documentElement,
        mobile: true,
        reset: false,
        useDelay: 'always',
        viewFactor: 0.2,

    });

    // Left reveal
    sr.reveal('.is-left-reveal', { 
        origin: 'left',
        distance: '20px',
        duration: 500,
        delay: 150,
        rotate: { x: 0, y: 0, z: 0 },
        opacity: 0,
        scale: 1,
        easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
        container: window.document.documentElement,
        mobile: true,
        reset: false,
        useDelay: 'always',
        viewFactor: 0.4,

    });

    // Right reveal
    sr.reveal('.is-right-reveal', { 
        origin: 'right',
        distance: '20px',
        duration: 500,
        delay: 150,
        rotate: { x: 0, y: 0, z: 0 },
        opacity: 0,
        scale: 1,
        easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
        container: window.document.documentElement,
        mobile: true,
        reset: false,
        useDelay: 'always',
        viewFactor: 0.4,

    });

    // Revealing multiple icons
    sr.reveal('.is-icon-reveal', { 
        origin: 'bottom',
        distance: '20px',
        duration: 600,
        delay: 100,
        rotate: { x: 0, y: 0, z: 0 },
        opacity: 0,
        scale: 1,
        easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
        container: window.document.documentElement,
        mobile: true,
        reset: true,
        useDelay: 'always',
        viewFactor: 0.2,

    }, 100);

    // Revealing multiple posts
    sr.reveal('.is-post-reveal', { 
        origin: 'bottom',
        distance: '20px',
        duration: 600,
        delay: 100,
        rotate: { x: 0, y: 0, z: 0 },
        opacity: 0,
        scale: 1,
        easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
        container: window.document.documentElement,
        mobile: true,
        reset: false,
        useDelay: 'always',
        viewFactor: 0.2,

    }, 160);

    // Revealing multiple cards
    sr.reveal('.is-card-reveal', { 
        origin: 'bottom',
        distance: '20px',
        duration: 600,
        delay: 100,
        rotate: { x: 0, y: 0, z: 0 },
        opacity: 0,
        scale: 1,
        easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
        container: window.document.documentElement,
        mobile: true,
        reset: false,
        useDelay: 'always',
        viewFactor: 0.2,

    }, 160);

    // Revealing multiple dots
    sr.reveal('.is-dot-reveal', { 
        origin: 'bottom',
        distance: '20px',
        duration: 600,
        delay: 100,
        rotate: { x: 0, y: 0, z: 0 },
        opacity: 0,
        scale: 1,
        easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
        container: window.document.documentElement,
        mobile: true,
        reset: true,
        useDelay: 'always',
        viewFactor: 0.2,

    }, 160);

})