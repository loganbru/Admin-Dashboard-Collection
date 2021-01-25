$(document).ready(function() {
    
    "use strict";
    var submenu_animation_speed = 200,
        submenu_opacity_animation = true;
    
    
    
    var simulateClick = function (elem) {
        // Create our event (with options)
        var evt = new MouseEvent('click', {
            bubbles: true,
            cancelable: true,
            view: window
        });
        // If cancelled, don't dispatch our event
	   var canceled = !elem.dispatchEvent(evt);
    };
    
    var limeSidebar = function() { 
        
        if ($('.material-design-hamburger__icon').length === 1) {
            document.querySelector('.material-design-hamburger__icon').addEventListener(
                'click',
                function() {      
                    var child;
                    document.body.classList.toggle('background--blur');
                    this.parentNode.nextElementSibling.classList.toggle('menu--on');

                    child = this.childNodes[1].classList;

                    if (child.contains('material-design-hamburger__icon--to-arrow')) {
                        child.remove('material-design-hamburger__icon--to-arrow');
                        child.add('material-design-hamburger__icon--from-arrow');
                    } else {
                        child.remove('material-design-hamburger__icon--from-arrow');
                        child.add('material-design-hamburger__icon--to-arrow');
                    }
                }
            );
        }
        
        $(window).click(function() {
            if($('body').hasClass('sidebar-show')) {
                var navToggle = document.querySelector('.navigation-toggle a');
                simulateClick(navToggle);
            }
        });
        
        $('.lime-sidebar').click(function(event){
            event.stopPropagation();
        });
        
        $('.navigation-toggle a').on('click', function(){
            $('body').toggleClass('sidebar-show');
            return false;
        });
        
        
        var select_sub_menus = $('.accordion-menu li:not(.open) .sub-menu'),
            active_page_sub_menu_link = $('.accordion-menu li.active-page > a');
        
        // Hide all sub-menus
        select_sub_menus.hide();
        
        
        if(submenu_opacity_animation == false) {
            $('.sub-menu li').each(function(i){
                $(this).addClass('animation');
            });
        };
        
        // Accordion
        $('.accordion-menu li a').on('click', function() {
            var sub_menu = $(this).next('.sub-menu'),
                parent_list_el = $(this).parent('li'),
                active_list_element = $('.accordion-menu > li.open'),
                show_sub_menu = function() {
                    sub_menu.slideDown(submenu_animation_speed);
                    parent_list_el.addClass('open');
                    if(submenu_opacity_animation === true) {
                        $('.open .sub-menu li').each(function(i){
                            var t = $(this);
                            setTimeout(function(){ t.addClass('animation'); }, (i+1) * 25);
                        });
                    };
                },
                hide_sub_menu = function() {
                    if(submenu_opacity_animation === true) {
                        $('.open .sub-menu li').each(function(i){
                            var t = $(this);
                            setTimeout(function(){ t.removeClass('animation'); }, (i+1) * 15);
                        });
                    };
                    sub_menu.slideUp(submenu_animation_speed);
                    parent_list_el.removeClass('open');
                },
                hide_active_menu = function() {
                    $('.accordion-menu > li.open > .sub-menu').slideUp(submenu_animation_speed);
                    active_list_element.removeClass('open');
                };
            
            if(sub_menu.length) {
                
                if(!parent_list_el.hasClass('open')) {
                    if(active_list_element.length) {
                        hide_active_menu();
                    };
                    show_sub_menu();
                } else {
                    hide_sub_menu();
                };
                
                return false;
                
            };
        });
        
        if($('.active-page > .sub-menu').length) {
            active_page_sub_menu_link.click();
        };
        
    };
    
    var limeHeader = function(){ 
        if($('body').hasClass('header-fixed')) {
            $(window).scroll(function(){
                var st = $(this).scrollTop(),
                    stf = 20;
                if (st > stf){
                    $('.lime-header').addClass('scroll-header');
                } else {
                    $('.lime-header').removeClass('scroll-header');
                }
            });
    
            $(window).on('load', function(){
                var st = $(this).scrollTop(),
                    stf = 0;
                if (st > stf){
                    $('.lime-header').addClass('scroll-header');
                } else {
                    $('.lime-header').removeClass('scroll-header');
                }
            });
        
        };
    };
    
    
    var theme_settings = function() {
        
        $(window).click(function() {
            if($('body').hasClass('show-theme-settings')) {
                var navToggle = document.querySelector('.theme-settings-link');
                simulateClick(navToggle);
            }
        });
        
        $('.theme-settings-sidebar').click(function(event){
            event.stopPropagation();
        });
        $('.theme-settings-link').on('click', function() {
            $('body').toggleClass('show-theme-settings');
            return false;
        });
    }
    
    var plugins_init = function(){
        // Slimscroll
        $('.slimscroll').slimScroll({
            wheelStep: 5
        });
        
        $('[data-toggle="popover"]').popover();
        $('[data-toggle="tooltip"]').tooltip();
        
        var imageCrop = function(){
            if($(".image-crop").length) {
                var $image = $(".image-crop > img");

                $image.cropper({
                    preview: ".img-preview"
                });

                $("#zoomIn").on('click', function() {
                    $image.cropper('zoom', 0.1);
                });

                $("#zoomOut").on('click', function() {
                    $image.cropper('zoom', -0.1);
                });

                $("#rotateLeft").on('click', function() {
                    $image.cropper('rotate', 45);
                });

                $("#rotateRight").on('click', function() {
                    $image.cropper('rotate', -45);
                });

                $("#clear").on('click', function() {
                    $image.cropper('clear');
                });

                var $replaceWith = $('#replaceWith');
                $('#replace').click(function () {
                    $image.cropper('replace', $replaceWith.val());
                });
            }
        }
        
        imageCrop();
        
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    
    };
    
    limeSidebar();
    limeHeader();
    theme_settings();
    plugins_init();
});