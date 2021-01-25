/*
*  Altair Admin
*  author: tzd
*
*  TOC:
*  1. Init functions
*  2. Helpers / Variables
*  3. Common functions & variables
*
* */

// 1. Init functions

    $(function() {
        "use strict";

        // fastClick (touch devices)
        if(Modernizr.touch) {
            FastClick.attach(document.body);
        }

        // page onload functions
        altair_page_onload.init();

        // main header
        altair_main_header.init();

        // main sidebar
        altair_main_sidebar.init();
        // secondary sidebar
        altair_secondary_sidebar.init();

        // top bar
        altair_top_bar.init();

        // material design
        altair_md.init();

        // forms
        altair_forms.init();

        // uikit custom code
        altair_uikit.init();

        // truncate text helper
        altair_helpers.truncate_text($('.truncate-text'));

    });


// 2. Helpers

    /* Detect hi-res devices */
    function isHighDensity() {
        return ((window.matchMedia && (window.matchMedia('only screen and (min-resolution: 124dpi), only screen and (min-resolution: 1.3dppx), only screen and (min-resolution: 48.8dpcm)').matches || window.matchMedia('only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (min--moz-device-pixel-ratio: 1.3), only screen and (min-device-pixel-ratio: 1.3)').matches)) || (window.devicePixelRatio && window.devicePixelRatio > 1.3));
    }

	/*
	* debouncedresize: special jQuery event that happens once after a window resize
	* throttledresize: special jQuery event that happens at a reduced rate compared to "resize"
	*
	* latest version and complete README available on Github:
	* https://github.com/louisremi/jquery-smartresize
	*
	* Copyright 2012 @louis_remi
	* Licensed under the MIT license.
    *
	*/
	(function(a){var d=a.event,b,c;b=d.special.debouncedresize={setup:function(){a(this).on("resize",b.handler)},teardown:function(){a(this).off("resize",b.handler)},handler:function(a,f){var g=this,h=arguments,e=function(){a.type="debouncedresize";d.dispatch.apply(g,h)};c&&clearTimeout(c);f?e():c=setTimeout(e,b.threshold)},threshold:150}})(jQuery);
    (function(b){var f=b.event,c,g={_:0},a=0,d,e;c=f.special.throttledresize={setup:function(){b(this).on("resize",c.handler)},teardown:function(){b(this).off("resize",c.handler)},handler:function(h,k){var l=this,m=arguments;d=!0;e||(setInterval(function(){a++;if(a>c.threshold&&d||k)h.type="throttledresize",f.dispatch.apply(l,m),d=!1,a=0;9<a&&(b(g).stop(),e=!1,a=0)},30),e=!0)},threshold:0}})(jQuery);

    /* Calculate Scrollbar Width (http://chris-spittles.co.uk/jquery-calculate-scrollbar-width/) */
    function scrollbarWidth(){var a=jQuery('<div style="width: 100%; height:200px;">test</div>'),b=jQuery('<div style="width:200px;height:150px; position: absolute; top: 0; left: 0; visibility: hidden; overflow:hidden;"></div>').append(a),c=a[0],a=b[0];jQuery("body").append(a);c=c.offsetWidth;b.css("overflow","scroll");a=a.clientWidth;b.remove();return c-a};


    /* random id generator */
        function randID_generator() {
            var randLetter = String.fromCharCode(65 + Math.floor(Math.random() * 26));
            return randLetter + Date.now();
        }

    /* reverse array */
    jQuery.fn.reverse = [].reverse;

    /* serialize form */
    $.fn.serializeObject = function() {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };

    /* hex 2 rgba conversion */
    function hex2rgba(hex,opacity){
        hex = hex.replace('#','');
        r = parseInt(hex.substring(0,2), 16);
        g = parseInt(hex.substring(2,4), 16);
        b = parseInt(hex.substring(4,6), 16);

        result = 'rgba('+r+','+g+','+b+','+opacity/100+')';
        return result;
    }

    /* modernizer test for localStorage */
    function lsTest(){
        var test = 'test';
        try {
            localStorage.setItem(test, test);
            localStorage.removeItem(test);
            return true;
        } catch(e) {
            return false;
        }
    }

    // selectize plugin
    if(typeof $.fn.selectize != 'undefined') {

        Selectize.define('dropdown_append_page', function(options) {
            this.positionDropdown = (function () {
                var $control = this.$control,
                    offset = $control.offset(),
                    offset_left = offset.left - parseInt($page_content.css('margin-left')),
                    offset_top = offset.top + $page_content.scrollTop() - $page_content.position().top + $control.outerHeight(true);

                this.$dropdown.css({
                    width : $control.outerWidth(),
                    top   : offset_top,
                    left  : offset_left
                });

            });
        });

        Selectize.define('dropdown_after', function(options) {
            this.positionDropdown = (function () {
                var $control = this.$control,
                    position = $control.position(),
                    position_left = position.left,
                    position_top = position.top + $control.outerHeight(true) + 32;

                this.$dropdown.css({
                    width : $control.outerWidth(),
                    top   : position_top,
                    left  : position_left
                });

            });
        });

    }


// 3. Common functions & variables

    // 3.1 material design easing
    // 3.2 page onload init functions
    // 3.3 page content
    // 3.4 forms
    // 3.5 main sidebar / main menu (left)
    // 3.6 secondary sidebar (right)
    // 3.7 top bar
    // 3.8 main header
    // 3.9 material design
    // 3.10 common helpers
    // 3.11 uikit custom


    // 3.1 material design easing
    easing_swiftOut = [ 0.4,0,0.2,1 ];

    var $body = $('body'),
        $document = $(document),
        $window = $(window),
        $page_content = $('#page_content'),
        $page_content_inner = $('#page_content_inner'),
        $sidebar_main = $('#sidebar_main'),
        $sidebar_main_toggle = $('#sidebar_main_toggle'),
        $sidebar_secondary = $('#sidebar_secondary'),
        $sidebar_secondary_toggle = $('#sidebar_secondary_toggle'),
        $topBar = $('#top_bar'),
        $header_main = $('#header_main'),
        header__main_height = 48;


    // 3.2 page init functions
    altair_page_onload = {
        init: function() {
            $window.load(function(){
                // fire functions on window load
                altair_helpers.hierarchical_show();
                altair_helpers.hierarchical_slide();
            });
        }
    };

    // 3.3 page content
    altair_page_content = {
        hide_content_sidebar: function() {
            if(!$body.hasClass('header_double_height')) {
                $page_content.css({
                    'paddingRight': scrollbarWidth(),
                    'overflow': 'hidden'
                });
            }
        },
        show_content_sidebar: function() {
            if(!$body.hasClass('header_double_height')) {
                $page_content.css({
                    'paddingRight': '',
                    'overflow': ''
                });
            }
        }
    };

    // 3.4 forms
    altair_forms = {
        init: function() {
            altair_forms.textarea_autosize();
            altair_forms.select_elements();
            altair_forms.switches();
        },
        textarea_autosize: function() {
            autosize($('textarea.textarea_autosize,textarea.md-input'));
        },
        select_elements: function() {

            var $selectize = $("[data-md-selectize],.data-md-selectize");

            $selectize.each(function(){
                var $this = $(this);
                if(!$this.hasClass('selectized')) {
                    var thisPosBottom = $this.attr('data-md-selectize-bottom');
                    $this
                        .after('<div class="selectize_fix"></div>')
                        .selectize({
                            plugins: [
                                'dropdown_append_page'
                            ],
                            dropdownParent: $page_content,
                            hideSelected: true,
                            onDropdownOpen: function($dropdown) {
                                $dropdown
                                    .hide()
                                    .velocity('slideDown', {
                                        begin: function() {
                                            if (typeof thisPosBottom !== 'undefined') {
                                                $dropdown.css({'margin-top':'0'})
                                            }
                                        },
                                        duration: 200,
                                        easing: easing_swiftOut
                                    })
                            },
                            onDropdownClose: function($dropdown) {
                                $dropdown
                                    .show()
                                    .velocity('slideUp', {
                                        complete: function() {
                                            if (typeof thisPosBottom !== 'undefined') {
                                                $dropdown.css({'margin-top': ''})
                                            }
                                        },
                                        duration: 200,
                                        easing: easing_swiftOut
                                    });
                            }
                        });
                }
            });

            // dropdowns
            var $selectize_inline = $("[data-md-selectize-inline]");

            $selectize_inline.each(function(){
                var $this = $(this);
                if(!$this.hasClass('selectized')) {
                    var thisPosBottom = $this.attr('data-md-selectize-bottom');
                    $this
                        .after('<div class="selectize_fix"></div>')
                        .closest('div').addClass('uk-position-relative')
                        .end()
                        .selectize({
                            plugins: [
                                'dropdown_after'
                            ],
                            dropdownParent: $this.closest('div'),
                            hideSelected: true,
                            onDropdownOpen: function($dropdown) {
                                $dropdown
                                    .hide()
                                    .velocity('slideDown', {
                                        begin: function() {
                                            if (typeof thisPosBottom !== 'undefined') {
                                                $dropdown.css({'margin-top':'0'})
                                            }
                                        },
                                        duration: 200,
                                        easing: easing_swiftOut
                                    })
                            },
                            onDropdownClose: function($dropdown) {
                                $dropdown
                                    .show()
                                    .velocity('slideUp', {
                                        complete: function() {
                                            if (typeof thisPosBottom !== 'undefined') {
                                                $dropdown.css({'margin-top': ''})
                                            }
                                        },
                                        duration: 200,
                                        easing: easing_swiftOut
                                    });
                            }
                        });
                }
            })

        },
        switches: function() {
            var $elem = $('[data-switchery]');
            if($elem.length) {
                $elem.each(function() {
                    var $this = this,
                        this_size = $($this).attr('data-switchery-size'),
                        this_color = $($this).attr('data-switchery-color'),
                        this_secondary_color = $($this).attr('data-switchery-secondary-color');

                    new Switchery($this, {
                        color: (typeof this_color !== 'undefined') ? hex2rgba(this_color,50) : hex2rgba('#009688',50),
                        jackColor: (typeof this_color !== 'undefined') ? hex2rgba(this_color,100) : hex2rgba('#009688',100),
                        secondaryColor: (typeof this_secondary_color !== 'undefined') ? hex2rgba(this_secondary_color,50) : 'rgba(0, 0, 0,0.26)',
                        jackSecondaryColor: (typeof this_secondary_color !== 'undefined') ? hex2rgba(this_secondary_color,50) : '#fafafa',
                        className: 'switchery' + ( (typeof this_size !== 'undefined') ? ' switchery-'+ this_size : '' )
                    });
                })
            }
        },
        parsley_validation_config: function() {
            window.ParsleyConfig = {
                excluded: 'input[type=button], input[type=submit], input[type=reset], input[type=hidden], input.exclude_validation',
                trigger: 'change',
                errorsWrapper: '<div class="parsley-errors-list"></div>',
                errorTemplate: '<span></span>',
                errorsContainer: function (ParsleyField) {
                    var element = ParsleyField.$element;
                    return element.closest('.uk-form-row');
                },
                classHandler: function (ParsleyField) {
                    var element = ParsleyField.$element;
                    if( element.is(':checkbox') || element.is(':radio') || element.parent().is('label') || $(element).is('[data-md-selectize]') ) {
                        return element.closest('.uk-form-row');
                    }
                }
            };
        }
    };

    // 3.5 main sidebar (left)
    altair_main_sidebar = {
        init: function() {

            $sidebar_main_toggle.on('click', function(e) {
                e.preventDefault();
                ( $body.hasClass('sidebar_main_active') || ($body.hasClass('sidebar_main_open') && $window.width() >= 1220) ) ? altair_main_sidebar.hide_sidebar() : altair_main_sidebar.show_sidebar();
            });

            // hide sidebar (outside click/esc key pressed)
            $document.on('click keyup', function(e) {
                if( $body.hasClass('sidebar_main_active') && $window.width() < 1220 ) {
                    if (
                        ( !$(e.target).closest($sidebar_main).length && !$(e.target).closest($sidebar_main_toggle).length )
                        || ( e.keyCode == 27 )
                    ) {
                        altair_main_sidebar.hide_sidebar();
                    }
                }
            });

            // hide sidebar (close btn)
            $('.sidebar_main_close_button').on('click', function(e) {
                e.preventDefault();
                altair_main_sidebar.hide_sidebar();
            });

            // custom scroller
            altair_helpers.custom_scrollbar($sidebar_main);

            if( $body.hasClass('sidebar_main_active') && $window.width() < 1220 ) {
                altair_page_content.hide_content_sidebar();
            } else {
                altair_page_content.show_content_sidebar();
            }

            // main menu
            altair_main_sidebar.main_menu();
            // language switcher
            altair_main_sidebar.lang_switcher();
        },
        hide_sidebar: function() {

            $body.addClass('sidebar_main_hiding').removeClass('sidebar_main_active sidebar_main_open');
            if( $window.width() < 1220 ) {
                altair_page_content.show_content_sidebar();
            }
            setTimeout(function() {
                $body.removeClass('sidebar_main_hiding');
                $window.resize();
            },280);

        },
        show_sidebar: function() {

            $body.addClass('sidebar_main_active');
            if( $window.width() < 1220 ) {
                altair_page_content.hide_content_sidebar();
            }
            setTimeout(function() {
                $window.resize();
            },280);

        },
        main_menu: function() {
            // check for submenu
            $sidebar_main.find('.menu_section > ul').children('li').each(function() {
                var hasChildren = $(this).children('ul').length;
                if(hasChildren) {
                    $(this).addClass('submenu_trigger')
                }
            });
            // toggle sections
            $('.submenu_trigger > a').on('click',function(e) {
                e.preventDefault();
                var $this = $(this);
                var slideToogle = $this.next('ul').is(':visible') ? 'slideUp' : 'slideDown';
                $this.next('ul')
                    .velocity(slideToogle, {
                        duration: 400,
                        easing: easing_swiftOut,
                        begin: function() {
                            if(slideToogle == 'slideUp') {
                                $(this).closest('.submenu_trigger').removeClass('act_section')
                            } else {
                                $(this).closest('.submenu_trigger').addClass('act_section')
                            }
                        },
                        complete: function() {
                            if(slideToogle !== 'slideUp') {
                                $this.closest('.act_section').velocity("scroll", {
                                    duration: 500,
                                    easing: easing_swiftOut,
                                    container: $("#sidebar_main").find(".scroll-content")
                                });
                            }
                        }
                    });
            });

            // open section/add classes if children has class .act_item
            $sidebar_main
                .find('.act_item')
                .closest('.submenu_trigger')
                .addClass('act_section')
                .children('a')
                .trigger('click');
        },
        lang_switcher: function() {
            var $lang_switcher = $('#lang_switcher');

            if($lang_switcher.length) {
                $lang_switcher.selectize({
                    options: [
                        {id: 1, title: 'English', value: 'gb'},
                        {id: 2, title: 'French', value: 'fr'},
                        {id: 3, title: 'Chinese', value: 'cn'},
                        {id: 4, title: 'Dutch', value: 'nl'},
                        {id: 5, title: 'Italian', value: 'it'},
                        {id: 6, title: 'Spanish', value: 'es'},
                        {id: 7, title: 'German', value: 'de'},
                        {id: 8, title: 'Polish', value: 'pl'}
                    ],
                    render: {
                        option: function(data, escape) {
                            return  '<div class="option">' +
                                '<i class="item-icon flag-' + escape(data.value).toUpperCase() + '"></i>' +
                                '<span>' + escape(data.title) + '</span>' +
                                '</div>';
                        },
                        item: function(data, escape) {
                            return '<div class="item"><i class="item-icon flag-' + escape(data.value).toUpperCase() + '"></i></div>';
                        }
                    },
                    valueField: 'value',
                    labelField: 'title',
                    searchField: 'title',
                    create: false,
                    onDropdownOpen: function($dropdown) {
                        $dropdown
                            .hide()
                            .velocity('slideDown', {
                                begin: function() {
                                    $dropdown.css({'margin-top':'-33px'})
                                },
                                duration: 200,
                                easing: easing_swiftOut
                            })
                    },
                    onDropdownClose: function($dropdown) {
                        $dropdown
                            .show()
                            .velocity('slideUp', {
                                complete: function() {
                                    $dropdown.css({'margin-top':''})
                                },
                                duration: 200,
                                easing: easing_swiftOut
                            })
                    }
                });

                $lang_switcher.next().children('.selectize-input').find('input').attr('readonly',true);

            }

        }
    };

    // secondary sidebar (right)
    altair_secondary_sidebar = {
        init: function() {
            if($sidebar_secondary.length) {
                $sidebar_secondary_toggle.removeClass('sidebar_secondary_check');

                $sidebar_secondary_toggle.on('click', function (e) {
                    e.preventDefault();
                    $body.hasClass('sidebar_secondary_active') ? altair_secondary_sidebar.hide_sidebar() : altair_secondary_sidebar.show_sidebar();
                });

                // hide sidebar (outside/esc click)
                $document.on('click keydown', function(e) {
                     if(
                         $body.hasClass('sidebar_secondary_active')
                         && (
                            ( !$(e.target).closest($sidebar_secondary).length && !$(e.target).closest($sidebar_secondary_toggle).length )
                            || (e.which == 27)
                         )
                     ) {
                         altair_secondary_sidebar.hide_sidebar();
                     }
                });

                // hide page sidebar on page load
                if ( $body.hasClass('sidebar_secondary_active') ) {
                    altair_secondary_sidebar.hide_sidebar();
                }

                // custom scroller
                altair_helpers.custom_scrollbar($sidebar_secondary);

            }
        },
        hide_sidebar: function() {
            $sidebar_secondary.velocity({
                right: -$sidebar_secondary.width() - 4
            },{
                duration: 280,
                easing: easing_swiftOut,
                begin: function() {
                    $body.removeClass('sidebar_secondary_active');
                    if( $window.width() < 1220 ) {
                        $page_content.css({
                            'paddingRight': '',
                            'overflow': ''
                        });
                    }
                }
            });
        },
        show_sidebar: function() {
            $sidebar_secondary.velocity({
                right: 0
            },{
                duration: 400,
                easing: easing_swiftOut,
                begin: function() {
                    $body.addClass('sidebar_secondary_active');
                    if( $window.width() < 1220 ) {
                        $page_content.css({
                            'paddingRight': '',
                            'overflow': ''
                        });
                    }
                }
            });
        }
    };

    // top bar
    altair_top_bar = {
        init: function () {
            if($topBar.length) {
                var topBar_right_padding = parseInt( $topBar.css('paddingRight') );

                $topBar.css({
                    'paddingRight': topBar_right_padding + scrollbarWidth()
                });

                $body.addClass('top_bar_active');
            }
        }
    };

    // main header
    altair_main_header = {
        init: function() {
            altair_main_header.search_activate();
        },
        search_activate: function() {
            $('#main_search_btn').on('click',function(e) {
                e.preventDefault();
                altair_main_header.search_show();
            });
            // hide main search
            $(document).on('click keydown', function(e) {
                if( $body.hasClass('main_search_active') ) {
                    if (
                        ( !$(e.target).closest('.header_main_search_form').length && !$(e.target).closest('#main_search_btn').length )
                        || ( e.which == 27 )
                    ) {
                        altair_main_header.search_hide();
                    }
                }
            });
            $('.header_main_search_close').on('click', function() {
                altair_main_header.search_hide();
            })
        },
        search_show: function() {
            $header_main
                .children('.header_main_content')
                .velocity("transition.slideUpBigOut", {
                    duration: 280,
                    easing: easing_swiftOut,
                    begin: function() {
                        $body.addClass('main_search_active');
                    },
                    complete: function() {
                        $header_main
                            .children('.header_main_search_form')
                            .velocity("transition.slideDownBigIn", {
                                duration: 280,
                                easing: easing_swiftOut,
                                complete: function() {
                                    $('.header_main_search_input').focus();
                                }
                            })
                    }
                });
        },
        search_hide: function() {
            $header_main
                .children('.header_main_search_form')
                .velocity("transition.slideUpBigOut", {
                    duration: 280,
                    easing: easing_swiftOut,
                    begin: function() {
                        $header_main.velocity("reverse");
                        $body.removeClass('main_search_active');
                    },
                    complete: function() {
                        $header_main
                            .children('.header_main_content')
                            .velocity("transition.slideDownBigIn", {
                                duration: 280,
                                easing: easing_swiftOut,
                                complete: function() {
                                    $('.header_main_search_input').blur().val('');
                                }
                            })
                    }
                });
        }
    };

    // material design
    altair_md = {
        init: function() {
            altair_md.inputs();
            altair_md.checkbox_radio();
            altair_md.card_fullscreen();
            altair_md.card_expand();
            altair_md.card_overlay();
            altair_md.card_single();
            altair_md.list_outside();
            altair_md.fab_actions();
        },
        // card toggle fullscreen
        card_fullscreen: function() {
            $('.md-card-fullscreen-activate').on('click',function() {
                // get card width/height
                var $thisCard = $(this).closest('.md-card'),
                    mdCard_h = $thisCard.height(),
                    mdCard_w = $thisCard.width();

                // create placeholder for card
                $thisCard.after('<div class="md-card-placeholder" style="width:'+ mdCard_w+'px;height:'+ mdCard_h+'px;"/>');
                // add overflow hidden to #page_content (fix for ios)
                //$body.addClass('md-card-fullscreen-active');
                // add width/height to card (preserve original size)
                $thisCard.addClass('md-card-fullscreen').css({
                    'width': mdCard_w,
                    'height': mdCard_h
                })
                    // animate card to top/left position
                    .velocity(
                        {
                            left: 0,
                            top: 0
                        },
                        {
                            duration: 600,
                            easing: easing_swiftOut,
                            begin: function(elements) {
                                // add back button
                                $thisCard.find('.md-card-toolbar').prepend('<span class="md-icon md-card-fullscreen-deactivate material-icons uk-float-left">&#xE5C4;</span>');
                                altair_page_content.hide_content_sidebar();
                            }
                        }
                    // resize card to full width/height
                    ).velocity(
                        {
                            height: '100%',
                            width: '100%'
                        },
                        {
                            duration: 600,
                            easing: easing_swiftOut,
                            complete: function(elements) {
                                // activate onResize callback for some js plugins
                                $(window).resize();
                                // show fullscreen content
                                $thisCard.find('.md-card-fullscreen-content').velocity("transition.slideUpBigIn", {
                                    duration: 600,
                                    easing: easing_swiftOut,
                                    complete: function(elements) {
                                        // activate onResize callback for some js plugins
                                        $(window).resize();
                                    }
                                });

                            }
                        }
                    );
            });

            $page_content.on('click', '.md-card-fullscreen-deactivate', function() {
                // get card placeholder width/height and offset
                var $thisPlaceholderCard = $('.md-card-placeholder'),
                    mdPlaceholderCard_h = $thisPlaceholderCard.height(),
                    mdPlaceholderCard_w = $thisPlaceholderCard.width(),
                    mdPlaceholderCard_offset_top = $thisPlaceholderCard.offset().top,
                    mdPlaceholderCard_offset_left = $thisPlaceholderCard.offset().left,
                    $thisCard = $('.md-card-fullscreen');

                    $thisCard
                        // resize card to original size
                        .velocity(
                            {
                                height: mdPlaceholderCard_h,
                                width: mdPlaceholderCard_w
                            },
                            {
                                duration: 600,
                                easing: easing_swiftOut,
                                begin: function(elements) {
                                    // hide fullscreen content
                                    $thisCard.find('.md-card-fullscreen-content').velocity("transition.slideDownOut",{ duration: 275, easing: easing_swiftOut });
                                },
                                complete: function(elements) {
                                    // activate onResize callback for js plugins
                                    $window.resize();
                                    // remove back button
                                    $thisCard.find('.md-card-fullscreen-deactivate').remove();
                                    altair_page_content.show_content_sidebar();
                                }
                            }
                        )
                        // move card to original position
                        .velocity(
                            {
                                left: mdPlaceholderCard_offset_left,
                                top: mdPlaceholderCard_offset_top
                            },
                            {
                                duration: 600,
                                easing: easing_swiftOut,
                                complete: function(elements) {
                                    // remove some styles added by velocity.js
                                    $thisCard.removeClass('md-card-fullscreen').css({
                                        width: '',
                                        height: '',
                                        left: '',
                                        top: ''
                                    });
                                    // remove card placeholder
                                    $thisPlaceholderCard.remove();
                                    // remove overflow:hidden from #page_content (ios fix)
                                    $body.removeClass('md-card-fullscreen-active');
                                }
                            }
                        );
            });
        },
        card_expand: function() {
            // expand elements
            $(".md-expand").velocity("transition.expandIn", { stagger: 175, drag: true });
            $(".md-expand-group").children().velocity("transition.expandIn", { stagger: 175, drag: true });
        },
        card_overlay: function() {
            $('.md-card').on('click','.md-card-overlay-toggler', function(e) {
                e.preventDefault();
                if(!$(this).closest('.md-card').hasClass('md-card-overlay-active')) {
                    $(this)
                        .html('&#xE5CD;')
                        .closest('.md-card').addClass('md-card-overlay-active');

                } else {
                    $(this)
                        .html('&#xE5D4;')
                        .closest('.md-card').removeClass('md-card-overlay-active');
                }
            })
        },
        card_single: function() {
            var $md_card_single = $('.md-card-single');
            if($md_card_single && $body.hasClass('header_double_height')) {
                function md_card_content_height() {
                    var content_height = $window.height() - ((header__main_height * 2) + 10);
                    $md_card_single.find('.md-card-content').innerHeight(content_height);
                }
                md_card_content_height();
                $window.on('debouncedresize',function() {
                    md_card_content_height();
                });
            }
        },
        card_show_hide: function(card,begin_callback,complete_callback,callback_element) {
            $(card)
                .velocity({
                    scale: 0,
                    opacity: 0.2
                }, {
                    duration: 400,
                    easing: easing_swiftOut,
                    // on begin callback
                    begin: function () {
                        if (typeof begin_callback !== 'undefined') {
                            begin_callback(callback_element);
                        }
                    },
                    // on complete callback
                    complete: function () {
                        if (typeof complete_callback !== 'undefined') {
                            complete_callback(callback_element);
                        }
                    }
                })
                .velocity('reverse');
        },
        list_outside: function() {
            var $md_list_outside_wrapper = $('.md-list-outside-wrapper');
            if($md_list_outside_wrapper && $body.hasClass('header_double_height')) {
                function md_list_outside_height() {
                    // check header height
                    var content_height = $window.height() - ((header__main_height * 2) + 10);
                    $md_list_outside_wrapper.height(content_height);
                }
                md_list_outside_height();
                $window.on('debouncedresize',function() {
                    md_list_outside_height();
                });
                altair_helpers.custom_scrollbar($md_list_outside_wrapper);
            }
        },
        inputs: function(parent) {
            var $mdInput = (typeof parent === 'undefined') ? $('.md-input') : $(parent).find('.md-input');
            $mdInput.each(function() {
                if(!$(this).closest('.md-input-wrapper').length) {
                    var $this = $(this);

                    if( $this.prev('label').length ) {
                        $this.prev('label').andSelf().wrapAll('<div class="md-input-wrapper"/>');
                    } else if($this.siblings('[data-uk-form-password]').length) {
                        $this.siblings('[data-uk-form-password]').andSelf().wrapAll('<div class="md-input-wrapper"/>');
                    } else {
                        $this.wrap('<div class="md-input-wrapper"/>');
                    }
                    $this.closest('.md-input-wrapper').append('<span class="md-input-bar"/>');


                    altair_md.update_input($this);
                }
                $body
                    .on('focus', '.md-input', function() {
                        $(this).closest('.md-input-wrapper').addClass('md-input-focus')
                    })
                    .on('blur', '.md-input', function() {
                        $(this).closest('.md-input-wrapper').removeClass('md-input-focus');
                        if($(this).val() != '') {
                            $(this).closest('.md-input-wrapper').addClass('md-input-filled')
                        } else {
                            $(this).closest('.md-input-wrapper').removeClass('md-input-filled')
                        }
                    })
                    .on('change', '.md-input', function() {
                        altair_md.update_input($(this));
                    });
            })
        },
        checkbox_radio: function() {
            var mdInput = $("[data-md-icheck],.data-md-icheck");
            mdInput.each(function() {
                if( !$(this).next('.iCheck-helper').length ) {
                    $(this)
                        .iCheck({
                            checkboxClass: 'icheckbox_md',
                            radioClass: 'iradio_md',
                            increaseArea: '20%'
                        })
                        // validate inputs on change (parsley)
                        .on('ifToggled', function(event){
                            if ( !!$(event.currentTarget).attr('data-parsley-id') ) {
                                $(this).parsley().validate(true);
                            }
                        });
                }
            });
        },
        update_input: function(object) {
            // clear wrapper classes
            object.closest('.md-input-wrapper').removeClass('md-input-wrapper-danger md-input-wrapper-success md-input-wrapper-disabled');

            if(object.hasClass('md-input-danger')) {
                object.closest('.md-input-wrapper').addClass('md-input-wrapper-danger')
            }
            if(object.hasClass('md-input-success')) {
                object.closest('.md-input-wrapper').addClass('md-input-wrapper-success')
            }
            if(object.prop('disabled')) {
                object.closest('.md-input-wrapper').addClass('md-input-wrapper-disabled')
            }
            if(object.val() != '') {
                object.closest('.md-input-wrapper').addClass('md-input-filled')
            }
        },
        fab_actions: function() {
            $('.md-fab-actions')
                .append('<i class="material-icons md-fab-action-close">&#xE5CD;</i>')
                .on('click',function() {
                    if(!$(this).closest('.md-fab-wrapper').hasClass('md-fab-active')) {
                        $(this)
                            .closest('.md-fab-wrapper')
                            .addClass('md-fab-active');
                    } else {
                        $(this)
                            .closest('.md-fab-wrapper')
                            .removeClass('md-fab-active');
                    }
                })
        }
    };

    // common helpers
    altair_helpers = {
        truncate_text: function($object) {
            $object.each(function() {
                $object.dotdotdot({
                    watch: "window"
                });
            })
        },
        custom_scrollbar: function($object) {
            $object.wrapInner("<div class='scrollbar-inner'></div>");
            if(Modernizr.touch) {
                $object.addClass('touchscroll');
            }
            $object.children('.scrollbar-inner').scrollbar({
                disableBodyScroll: true,
                scrollx: false,
                duration: 100
            });
        },
        hierarchical_show: function() {
            $hierarchical_show = $('.hierarchical_show');

            if($hierarchical_show.length) {
                $hierarchical_show.each(function() {
                    var $this = $(this),
                        thisChildrenLength = $this.children().length,
                        baseDelay = 60;


                    $this
                        .children()
                        .each(function(index) {
                            $(this).css({
                                '-webkit-animation-delay': (index * baseDelay) + "ms",
                                'animation-delay': (index * baseDelay) + "ms"
                            })
                        })
                        .end()
                        .waypoint({
                            handler: function() {
                                $this.addClass('hierarchical_show_inView');
                                setTimeout(function() {
                                    $this
                                        .removeClass('hierarchical_show hierarchical_show_inView fast_animation')
                                        .children()
                                        .css({
                                            '-webkit-animation-delay': '',
                                            'animation-delay': ''
                                        });
                                }, (thisChildrenLength*baseDelay)+1200 );
                                this.destroy();
                            },
                            context: '#page_content',
                            offset: '90%'
                        });
                })
            }
        },
        hierarchical_slide: function() {
            $hierarchical_slide = $('.hierarchical_slide');
            if($hierarchical_slide.length) {

                $hierarchical_slide.each(function() {
                    var $this = $(this),
                        $thisChildren = $this.attr('data-slide-children') ? $this.children($this.attr('data-slide-children')) : $this.children(),
                        thisChildrenLength = $thisChildren.length,
                        thisContext = $this.attr('data-slide-context') ? $this.closest($this.attr('data-slide-context')) : '#page_content',
                        baseDelay = 100;

                    if(thisChildrenLength > 1) {

                        $thisChildren.each(function(index) {
                            $(this).css({
                                '-webkit-animation-delay': (index * baseDelay) + "ms",
                                'animation-delay': (index * baseDelay) + "ms"
                            })
                        });

                        $this.waypoint({
                            handler: function() {
                                $this.addClass('hierarchical_slide_inView');
                                setTimeout(function() {
                                    $this.removeClass('hierarchical_slide hierarchical_slide_inView');
                                    $thisChildren.css({
                                        '-webkit-animation-delay': '',
                                        'animation-delay': ''
                                    });
                                }, (thisChildrenLength*baseDelay)+1200 );
                                this.destroy();
                            },
                            context: thisContext,
                            offset: '90%'
                        });

                    }

                })

            }
        },
        content_preloader_show: function(style) {

            if(!$body.find('.content-preloader').length) {
                var image_density = isHighDensity() ? '@2x' : '' ;

                var preloader_content = (style == 'regular')
                    ? '<img src="assets/img/spinners/spinner' + image_density + '.gif" alt="" width="32" height="32">'
                    : '<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="8"/></svg></div>';

                $body.append('<div class="content-preloader">' + preloader_content + '</div>');
                setTimeout(function() {
                    $('.content-preloader').addClass('preloader-active');
                }, 0);
            }
        },
        content_preloader_hide: function() {
            if($body.find('.content-preloader').length) {
                // hide preloader
                $('.content-preloader').removeClass('preloader-active');
                // remove preloader
                preloader_timeout = window.setTimeout(function() {
                    $('.content-preloader').remove();
                }, 500);
            }
        },
        color_picker: function(object,pallete) {
            if(object) {
                var cp_id = randID_generator(),
                    cp_pallete = pallete ? pallete : ['#e53935','#d81b60','#8e24aa','#5e35b1','#3949ab','#1e88e5','#039be5','#0097a7','#00897b','#43a047','#689f38','#ef6c00','#f4511e','#6d4c41','#757575','#546e7a'],
                    cp_pallete_length = cp_pallete.length,
                    cp_wrapper = $('<div class="cp_altair" id="'+cp_id+'"/>');

                for(var $i=0;$i<cp_pallete_length;$i++) {
                    cp_wrapper.append('<span data-color=' + cp_pallete[$i] + ' style="background:' + cp_pallete[$i] + '"></span>');
                }

                cp_wrapper.append('<input type="hidden">');

                $body.on('click', '#'+cp_id+' span',function() {
                    $(this)
                        .addClass('active_color')
                        .siblings().removeClass('active_color')
                        .end()
                        .closest('.cp_altair').find('input').val($(this).attr('data-color'));
                });

                return object.append(cp_wrapper);

            }
        },
        retina_images: function() {
            if (typeof $.fn.dense !== "undefined") {
                $('img').dense({
                    glue: "@"
                });
            }
        }
    };

    // uikit custom
    altair_uikit = {
        init: function() {
            altair_uikit.override_defaults();
        },
        override_defaults: function() {
            if (typeof UIkit !== 'undefined') {
                // http://getuikit.com/docs/documentation_javascript.html#js-override
                UIkit.on('beforeready.uk.dom', function () {

                    if (typeof UIkit.components.accordion !== "undefined") { // check if accordion component is defined
                        $.extend(UIkit.components.accordion.prototype.defaults, {
                            easing: $.bez(easing_swiftOut),
                            duration: 200
                        });
                    }

                    if (typeof UIkit.components.dropdown.prototype !== "undefined") { // check if tooltip component is defined

                        $.extend(UIkit.components.dropdown.prototype.defaults, {
                            remaintime: 150,
                            delay: 50
                        });

                        (function() {
                            var old_show_function = UIkit.components.dropdown.prototype.show;

                            UIkit.components.dropdown.prototype.show = function() {

                                this.dropdown
                                    .css({
                                        'min-width': this.dropdown.outerWidth()
                                    })
                                    .addClass('uk-dropdown-active uk-dropdown-shown');

                                var show_function = old_show_function.apply(this, arguments);

                                return show_function;
                            }
                        })();

                        (function() {
                            var old_hide_function = UIkit.components.dropdown.prototype.hide;

                            UIkit.components.dropdown.prototype.hide = function() {

                                var this_dropdown = this.dropdown;

                                this_dropdown
                                    .removeClass('uk-dropdown-shown');

                                var dropdown_timeout = setTimeout(function() {
                                    this_dropdown
                                        .removeClass('uk-dropdown-active')
                                },280);

                                var hide_function = old_hide_function.apply(this, arguments);

                                return hide_function;
                            }
                        })();

                    }

                    if (typeof UIkit.components.modal !== "undefined") { // check if modal component is defined
                        $.extend(UIkit.components.modal.prototype.defaults, {
                            center: true
                        });

                        UIkit.modal.dialog.template = '<div class="uk-modal uk-modal-dialog-replace"><div class="uk-modal-dialog" style="min-height:0;"></div></div>';
                        $body
                            .on('show.uk.modal', '.uk-modal-dialog-replace', function () {
                                // customize uikit dialog
                                setTimeout(function () {
                                    var dialogReplace = $('.uk-modal-dialog-replace');
                                    if (dialogReplace.find('.uk-button-primary').length) {
                                        var actionBtn = dialogReplace.find('.uk-button-primary').toggleClass('uk-button-primary md-btn-flat-primary');
                                        if (actionBtn.next('button')) {
                                            actionBtn.next('button').after(actionBtn);
                                        }
                                    }
                                    if (dialogReplace.find('.uk-button').length) {
                                        dialogReplace.find('.uk-button').toggleClass('uk-button md-btn md-btn-flat');
                                    }
                                    if (dialogReplace.find('.uk-margin-small-top').length) {
                                        dialogReplace.find('.uk-margin-small-top').toggleClass('uk-margin-small-top uk-margin-top');
                                    }
                                    if (dialogReplace.find('input.uk-width-1-1').length) {
                                        dialogReplace.find('input.uk-width-1-1').toggleClass('uk-width-1-1 md-input');
                                        // reinitialize md inputs
                                        altair_md.inputs();
                                    }
                                    if (dialogReplace.find('.uk-form').length) {
                                        dialogReplace.find('.uk-form').removeClass('uk-form');
                                    }
                                }, 50)
                            });
                    }

                    if (typeof UIkit.components.tooltip !== "undefined") { // check if tooltip component is defined
                        $.extend(UIkit.components.tooltip.prototype.defaults, {
                            animation: true,
                            offset: 8
                        });
                    }

                });
            }
        },
        reinitialize_grid_margin: function() {
            $("[data-uk-grid-margin]").each(function() {
                var element = $(this);
                if (!element.data("gridMargin")) {
                    $.UIkit.gridMargin(element, $.UIkit.Utils.options(element.attr("data-uk-grid-margin")));
                }
            });
            $window.resize();
        }
    };
