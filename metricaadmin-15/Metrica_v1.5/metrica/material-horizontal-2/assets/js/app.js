/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Module/App: Main Js
 */


(function ($) {

    'use strict';

    function initSlimscroll() {
        $('.slimscroll').slimscroll({
            height: 'auto',
            position: 'right',
            size: "7px",
            color: '#ebf0f6',
            wheelStep: 5,
            opacity: 1,
            touchScrollStep: 50
        });
    }

   
    function initEnlarge() {
        if ($(window).width() < 1025) {
            $('body').addClass('enlarge-menu');
        } else {
            if ($('body').data('keep-enlarged') != true)
                $('body').removeClass('enlarge-menu');
        }
    }


    function initMainIconMenu() {
        var pageUrl = (window.location.href.split(/[?#]/)[0]);
        $(".navigation-menu a").each(function () {      
            if (this.href === pageUrl) {
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().parent().parent().addClass("show");
                $(this).parent().parent().addClass("show");
                $(this).parent().parent().parent().addClass("active"); // add active class to an anchor
                $(this).parent().parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().parent().addClass("in");  
                $(this).parent().parent().parent().parent().parent().addClass("active"); // add active class to an anchor
            }
        });
    }

    function initTopbarMenu() {
        $('.navbar-toggle').on('click', function (event) {
            $(this).toggleClass('open');
            $('#navigation').slideToggle(400);
        });

        $('.navigation-menu>li').slice(-2).addClass('last-elements');

        $('.navigation-menu li.has-submenu a[href="javascript:;"]').on('click', function (e) {
            if ($(window).width() < 992) {
                e.preventDefault();
                $(this).parent('li').toggleClass('open').find('.submenu:first').toggleClass('open');
            }
        });
    }

    function initnavbarMenu() {
        $('.has-submenu').on('click', function(e){
            e.preventDefault();
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            $('.submenu-tab').addClass('show');
            var targ = $(this).attr('href');
            $(targ).addClass('active');
            $(targ).siblings().removeClass('active');
        });
        $('.submenu li').on('click', function(e){
            // e.preventDefault();
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            window.location.href = e.target.href;
        });
    }
    

    function init() {
        initSlimscroll();
        initEnlarge();
        initMainIconMenu();
        initTopbarMenu();
        initnavbarMenu();
        Waves.init();
    }

    init();

})(jQuery)
