/*! startup.js | Bulkit | CSS Ninja */

/* ==========================================================================
Startup kit JS file 
========================================================================== */

$(document).ready(function($){
    
    "use strict";
    
    //Toggle the sign up button color when solid navbar comes in
    if ($('.navbar-light').length) {
        $(window).on('scroll', function() {    // this will work when your window scrolled.
            var height = $(window).scrollTop();  //getting the scrolling height of window
            if(height  > 80) {
                $('.button-signup').removeClass('light-btn').addClass('primary-btn');
            } else{
                $('.button-signup').removeClass('primary-btn').addClass('light-btn');
            }
        }); 
    }
    
    //Toggle between the laptop mockup and the video wrapper
    $('#show-video, #show-mockup').on("click", function(){
        $('#show-video, #show-mockup').toggleClass('is-hidden');
        $('#video, #mockup').toggleClass('is-hidden');
    })

    //Fullscreen Wallop slider 
    if ($('.Wallop').length) {
        var wallopEl = document.querySelector('.Wallop');
        var wallop = new Wallop(wallopEl);

        var paginationDots = Array.prototype.slice.call(document.querySelectorAll('.Wallop-dot'));

        //Attach click listener on the dots

        paginationDots.forEach(function (dotEl, index) {
            dotEl.addEventListener('click', function() {
                wallop.goTo(index);
            });
        });

        // Listen to wallop change and update classes

        wallop.on('change', function(event) {
            removeClass(document.querySelector('.Wallop-dot--current'), 'Wallop-dot--current');
            addClass(paginationDots[event.detail.currentItemIndex], 'Wallop-dot--current');
        });

        // Helpers
        function addClass(element, className) {
            if (!element) { return; }
            element.className = element.className.replace(/\s+$/gi, '') + ' ' + className;
        }

        function removeClass(element, className) {
            if (!element) { return; }
            element.className = element.className.replace(className, '');
        }

        // To start Autoplay, just call the function below
        // and pass in the number of seconds as interval
        // if you want to start autoplay after a while
        // you can wrap this in a setTimeout(); function
        autoplay(5000);

        // This a a helper function to build a simple
        // auto-play functionality. 
        function autoplay(interval) {
            var lastTime = 0;  

            function frame(timestamp) {
                var update = timestamp - lastTime >= interval;

                if (update) {
                    wallop.next();
                    lastTime = timestamp;
                }

                requestAnimationFrame(frame);
            }

            requestAnimationFrame(frame);
        };
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