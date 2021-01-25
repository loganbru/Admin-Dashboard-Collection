

(function ($) {
    $.fn.horizontalMenu = function (options) {

        //plugin's default options
        var defaults = {
            resizeWidth: '1024',
            animationSpeed: 'fast',
            accoridonExpAll: false
        };

        //Variables
        var options = $.extend(defaults, options),
            opt = options,
            $resizeWidth = opt.resizeWidth,
            $animationSpeed = opt.animationSpeed,
            $expandAll = opt.accoridonExpAll,
            $horizontalMenu = $(this),
            $menuStyle = $(this).attr('data-menu-style');

        // Initilizing        
        $horizontalMenu.find('ul').addClass("sub-menu");
       // $horizontalMenu.find('ul').siblings('a').append('<span class="arrow "></span>');
        if ($menuStyle == 'accordion') { $(this).addClass('collapse'); }

        // Window resize on menu breakpoint 
        if ($(window).innerWidth() <= $resizeWidth) {
            menuCollapse();
        }
        $(window).resize(function () {
            menuCollapse();
        });

        // Menu Toggle
        function menuCollapse() {
            var w = $(window).innerWidth();
            if (w <= $resizeWidth) {
                $horizontalMenu.find('li.menu-active').removeClass('menu-active');
                $horizontalMenu.find('ul.slide').removeClass('slide').removeAttr('style');
                $horizontalMenu.addClass('collapse hide-menu');
                $horizontalMenu.attr('data-menu-style', '');
                $('.menu-toggle').show();
            } else {
                $horizontalMenu.attr('data-menu-style', $menuStyle);
                $horizontalMenu.removeClass('collapse hide-menu').removeAttr('style');
                $('.menu-toggle').hide();
                if ($horizontalMenu.attr('data-menu-style') == 'accordion') {
                    $horizontalMenu.addClass('collapse');
                    return;
                }
                $horizontalMenu.find('li.menu-active').removeClass('menu-active');
                $horizontalMenu.find('ul.slide').removeClass('slide').removeAttr('style');
            }
        }

        //ToggleBtn Click
        $('#menu-btn').click(function () {
            $horizontalMenu.slideToggle().toggleClass('hide-menu');
        });


        // Main function 
        return this.each(function () {
            // Function for Horizontal menu on mouseenter
            $horizontalMenu.on('mouseover', '> li a', function () {
                if ($horizontalMenu.hasClass('collapse') === true) {
                    return false;
                }
               // $(this).off('click', '> li a');
                $(this).parent('li').siblings().children('.sub-menu').stop(true, true).slideUp($animationSpeed).removeClass('slide').removeAttr('style').stop();
                $(this).parent().addClass('menu-active').children('.sub-menu').slideDown($animationSpeed).addClass('slide');
                return;
            });
            $horizontalMenu.on('mouseleave', 'li', function () {
                if ($horizontalMenu.hasClass('collapse') === true) {
                    return false;
                }
                $(this).off('click', '> li a');
                $(this).removeClass('menu-active');
                $(this).children('ul.sub-menu').stop(true, true).slideUp($animationSpeed).removeClass('slide').removeAttr('style');
                return;
            });
            //End of Horizontal menu function

            // Function for Vertical/Responsive Menu on mouse click
            $horizontalMenu.on('click', '> li a', function () {
                if ($horizontalMenu.hasClass('collapse') === false) {
                    //return false;
                }
                $(this).off('mouseover', '> li a');
                if ($(this).parent().hasClass('menu-active')) {
                    $(this).parent().children('.sub-menu').slideUp().removeClass('slide');
                    $(this).parent().removeClass('menu-active');
                } else {
                    if ($expandAll == true) {
                        $(this).parent().addClass('menu-active').children('.sub-menu').slideDown($animationSpeed).addClass('slide');
                        return;
                    }
                    $(this).parent().siblings().removeClass('menu-active');
                    $(this).parent('li').siblings().children('.sub-menu').slideUp().removeClass('slide');
                    $(this).parent().addClass('menu-active').children('.sub-menu').slideDown($animationSpeed).addClass('slide');
                }
            });
            //End of responsive menu function

        });
        //End of Main function
    }
})(jQuery);
