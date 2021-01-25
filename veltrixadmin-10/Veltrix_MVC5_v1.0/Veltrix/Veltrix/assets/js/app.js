/*
Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
Author: Themesbrand
Version: 3.0.0
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Main Js File
*/


(function ($) {

    'use strict';

    
    function initMetisMenu() {
        //metis menu
        $("#side-menu").metisMenu();
    }

    function initLeftMenuCollapse() {
        $('#vertical-menu-btn').on('click', function (event) {
            event.preventDefault();
            $('body').toggleClass('sidebar-enable');
            if ($(window).width() >= 992) {
                $('body').toggleClass('vertical-collpsed');
            } else {
                $('body').removeClass('vertical-collpsed');
            }
        });
    }

    function initActiveMenu() {
        // === following js will activate the menu in left side bar based on url ====
        $("#sidebar-menu a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("mm-active"); // add active to li of the current link
                $(this).parent().parent().addClass("mm-show");
                $(this).parent().parent().prev().addClass("mm-active"); // add active class to an anchor
                $(this).parent().parent().parent().addClass("mm-active");
                $(this).parent().parent().parent().parent().addClass("mm-show"); // add active to li of the current link
                $(this).parent().parent().parent().parent().parent().addClass("mm-active");
            }
        });
    }

    function initMenuItem() {
        $(".navbar-nav a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active");
                $(this).parent().parent().addClass("active");
                $(this).parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().addClass("active");
            }
        });
    }

    function initFullScreen() {
        $('[data-toggle="fullscreen"]').on("click", function (e) {
            e.preventDefault();
            $('body').toggleClass('fullscreen-enable');
            if (!document.fullscreenElement && /* alternative standard method */ !document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
                if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) {
                    document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                }
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }
        });
        document.addEventListener('fullscreenchange', exitHandler);
        document.addEventListener("webkitfullscreenchange", exitHandler);
        document.addEventListener("mozfullscreenchange", exitHandler);
        function exitHandler() {
            if (!document.webkitIsFullScreen && !document.mozFullScreen && !document.msFullscreenElement) {
                $('body').removeClass('fullscreen-enable');
            }
        }
    }

    function initRightSidebar() {
        // right side-bar toggle
        $('.right-bar-toggle').on('click', function (e) {
            $('body').toggleClass('right-bar-enabled');
        });

        $(document).on('click', 'body', function (e) {
            if ($(e.target).closest('.right-bar-toggle, .right-bar').length > 0) {
                return;
            }

            $('body').removeClass('right-bar-enabled');
            return;
        });
    }

    function initDropdownMenu() {
        $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');

            return false;
        });
    }

    function initComponents() {
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        $(function () {
            $('[data-toggle="popover"]').popover();
        });
    }

    function initPreloader() {
        $(window).on('load', function () {
            $('#status').fadeOut();
            $('#preloader').delay(350).fadeOut('slow');
        });
    }

    function initSettings() {
        if (window.sessionStorage) {
            var alreadyVisited = sessionStorage.getItem("is_visited");
            if (!alreadyVisited) {
                sessionStorage.setItem("is_visited", "light-mode-switch");
                updateThemeSetting(false, true, true);
            } else {
                $(".right-bar input:checkbox").prop('checked', false);
                $("#" + alreadyVisited).prop('checked', true);
                $("#" + alreadyVisited).trigger("change");
                if (alreadyVisited === "light-mode-switch") {
                    updateThemeSetting(false, true, true);
                } else if (alreadyVisited === "dark-mode-switch") {
                    updateThemeSetting(true, false, true);
                } else if (alreadyVisited === "rtl-mode-switch") {
                    updateThemeSetting(false, true, false);
                }
            }
        }

        $("#light-mode-switch, #dark-mode-switch, #rtl-mode-switch").on("change", function (e) {
            if (e.target.id === "light-mode-switch" && $(this).prop("checked")) {
                $("#dark-mode-switch").prop("checked", false);
                $("#rtl-mode-switch").prop("checked", false);
                updateThemeSetting(false, true, true);
                sessionStorage.setItem("is_visited", e.target.id);
            } else if (e.target.id === "dark-mode-switch" && $(this).prop("checked")) {
                $("#light-mode-switch").prop("checked", false);
                $("#rtl-mode-switch").prop("checked", false);
                updateThemeSetting(true, false, true);
                sessionStorage.setItem("is_visited", e.target.id);
            } else if (e.target.id === "rtl-mode-switch" && $(this).prop("checked")) {
                $("#dark-mode-switch").prop("checked", false);
                $("#light-mode-switch").prop("checked", false);
                updateThemeSetting(false, true, false);
                sessionStorage.setItem("is_visited", e.target.id);
            }
        });
    }

    function updateThemeSetting(light, dark, rtl) {
        $("#bootstrap-light").prop("disabled", light);
        $("#bootstrap-dark").prop("disabled", dark);
        $("#app-light").prop("disabled", (rtl) ? light : true);
        $("#app-dark").prop("disabled", dark);
        $("#app-rtl").prop("disabled", rtl);
    }

    function initManageLogout() {
        $("#btnLogout").click(function () {
            localStorage.removeItem("username");
            localStorage.removeItem("password");
            window.location.href = "/Pages/pages-login";
        });
    }

    function fnIsUndefinedOREmpty(value) {
        if (value === undefined || value === null || value === 'undefined' || value === '')
            return true;
        return false;
    }

    function init() {
        initMetisMenu();
        initLeftMenuCollapse();
        initActiveMenu();
        initMenuItem();
        initFullScreen();
        initRightSidebar();
        initDropdownMenu();
        initComponents();
        initSettings();
        initPreloader();
        Waves.init();
        initManageLogout();
    }

    init();

})(jQuery);
