"use strict";

var KTLayout = function() {
    var body;

    var header;
    var headerMenu;
    var headerMenuOffcanvas;
    var mobileHeaderTopbarToggle;

    var asideMenu;
    var asideMenuOffcanvas;

    var scrollTop;

    var pageStickyPortlet;

    // Header
    var initHeader = function() {
        var tmp;
        var headerEl = KTUtil.get('kt_header');
        var options = {
            classic: {
                desktop: true,
                mobile: false
            },
            offset: {},
            minimize: {}
        };

        options.minimize.mobile = false;

        if (KTUtil.attr(headerEl, 'data-ktheader-minimize') == 'on') {
            options.minimize.desktop = {};
            options.minimize.desktop.on = 'kt-header--minimize';
            options.offset.desktop = parseInt(KTUtil.css(headerEl, 'height')) - 10;
        } else {
            options.minimize.desktop = false;
        }

        header = new KTHeader('kt_header', options);

        if (asideMenu) {
            header.on('minimizeOn', function() {
                asideMenu.scrollReInit();
            });

            header.on('minimizeOff', function() {
                asideMenu.scrollReInit();
            });
        }
    }

    // Header Menu
    var initHeaderMenu = function() {
        // init aside left offcanvas
        headerMenuOffcanvas = new KTOffcanvas('kt_header_menu_wrapper', {
            overlay: true,
            baseClass: 'kt-header-menu-wrapper',
            closeBy: 'kt_header_menu_mobile_close_btn',
            toggleBy: {
                target: 'kt_header_mobile_toggler',
                state: 'kt-header-mobile__toolbar-toggler--active'
            }
        });

        headerMenu = new KTMenu('kt_header_menu', {
            submenu: {
                desktop: 'dropdown',
                tablet: 'accordion',
                mobile: 'accordion'
            },
            accordion: {
                slideSpeed: 200, // accordion toggle slide speed in milliseconds
                expandAll: false // allow having multiple expanded accordions in the menu
            }
        });
    }

    // Header Topbar
    var initHeaderTopbar = function() {
        mobileHeaderTopbarToggle = new KTToggle('kt_header_mobile_topbar_toggler', {
            target: 'body',
            targetState: 'kt-header__topbar--mobile-on',
            togglerState: 'kt-header-mobile__toolbar-topbar-toggler--active'
        });
    }

    // Aside
    var initAside = function() {
        // init aside left offcanvas
        var asidBrandHover = false;
        var aside = KTUtil.get('kt_aside');
        var asideBrand = KTUtil.get('kt_aside_brand');
        var asideOffcanvasClass = KTUtil.hasClass(aside, 'kt-aside--offcanvas-default') ? 'kt-aside--offcanvas-default' : 'kt-aside';

        var asideMenuOffcanvas = new KTOffcanvas('kt_aside', {
            baseClass: asideOffcanvasClass,
            overlay: true,
            closeBy: 'kt_aside_close_btn',
            toggleBy: [{
                target: 'kt_aside_mobile_toggler',
                state: 'kt-aside-toggler--active'
            },{
                target: 'kt_aside_toggler',
                state: 'kt-aside-toggler--active'
            }]
        });
    }

    // Aside menu
    var initAsideMenu = function() {
        // Init aside menu
        var menu = KTUtil.get('kt_aside_menu');
        var menuDesktopMode = (KTUtil.attr(menu, 'data-ktmenu-dropdown') === '1' ? 'dropdown' : 'accordion');

        // Init scrollable menu container
        var scroll;
        if (KTUtil.attr(menu, 'data-ktmenu-scroll') === '1') {
            scroll = {
                rememberPosition: true, // remember position on page reload
                height: function() {  // calculate available scrollable area height
                    var height;

                    if (KTUtil.isInResponsiveRange('desktop')) {
                        height = parseInt(KTUtil.getViewPort().height);
                        height = height - parseInt(KTUtil.css(menu, 'marginTop')) - parseInt(KTUtil.css(menu, 'marginBottom'));
                    } else {
                        height = parseInt(KTUtil.getViewPort().height);
                    }

                    return height;
                }
            };
        }

        // Init aside menu
        asideMenu = new KTMenu('kt_aside_menu', {
            // vertical scroll
            scroll: scroll,

            // submenu setup
            submenu: {
                desktop: menuDesktopMode,
                tablet: 'accordion', // menu set to accordion in tablet mode
                mobile: 'accordion' // menu set to accordion in mobile mode
            },

            //accordion setup
            accordion: {
                expandAll: false // allow having multiple expanded accordions in the menu
            }
        });
    }

    // Scrolltop
    var initScrolltop = function() {
        var scrolltop = new KTScrolltop('kt_scrolltop', {
            offset: 200,
            speed: 400
        });
    }

    // Init page sticky portlet
    var initPageStickyPortlet = function() {
        return new KTPortlet('kt_page_portlet', {
            sticky: {
                offset: parseInt(KTUtil.css( KTUtil.get('kt_header'), 'height')) + 200,
                zIndex: 90,
                position: {
                    top: function() {
                        if (KTUtil.isInResponsiveRange('desktop')) {
                            return 60; //parseInt(KTUtil.actualHeight( KTUtil.get('kt_header'), 'height') );
                        } else {
                            return parseInt(KTUtil.css( KTUtil.get('kt_header_mobile'), 'height') );
                        }
                    },
                    left: function(portlet) {
						var porletEl = portlet.getSelf();

						return KTUtil.offset(porletEl).left;
					},
					right: function(portlet) {
                        var porletEl = portlet.getSelf();

                        var portletWidth = parseInt(KTUtil.css(porletEl, 'width'));
						var bodyWidth = parseInt(KTUtil.css(KTUtil.get('body'), 'width'));
						var portletOffsetLeft = KTUtil.offset(porletEl).left;

						return bodyWidth - portletWidth - portletOffsetLeft;
					}
                }
            }
        });
    }

	// Calculate content available full height
	var getContentHeight = function() {
		var height;

		height = KTUtil.getViewPort().height;

		if (KTUtil.getByID('kt_header')) {
            height = height - KTUtil.actualHeight('kt_header');
		}

		if (KTUtil.getByID('kt_subheader')) {
            height = height - KTUtil.actualHeight('kt_subheader');
		}

		if (KTUtil.getByID('kt_footer')) {
			height = height - parseInt(KTUtil.css('kt_footer', 'height'));
		}

		if (KTUtil.getByID('kt_content')) {
			height = height - parseInt(KTUtil.css('kt_content', 'padding-top')) - parseInt(KTUtil.css('kt_content', 'padding-bottom'));
		}

		return height;
	}

    return {
        init: function() {
            body = KTUtil.get('body');

            this.initHeader();
            this.initAside();
            this.initPageStickyPortlet();

            // Non functional links notice(can be removed in production)
			$('#kt_aside_menu, #kt_header_menu').on('click', '.kt-menu__link[href="#"]', function(e) {
				swal.fire("", "You have clicked on a non-functional dummy link!");

				e.preventDefault();
			});
        },

        initHeader: function() {
            initHeader();
            initHeaderMenu();
            initHeaderTopbar();
            initScrolltop();
        },

        initAside: function() {
            initAside();
            initAsideMenu();
        },

        getAsideMenu: function() {
            return asideMenu;
        },

        initPageStickyPortlet: function() {
            if (!KTUtil.get('kt_page_portlet')) {
                return;
            }

            pageStickyPortlet = initPageStickyPortlet();
            pageStickyPortlet.initSticky();

            KTUtil.addResizeHandler(function(){
                pageStickyPortlet.updateSticky();
            });

            initPageStickyPortlet();
        },

        closeMobileAsideMenuOffcanvas: function() {
            if (KTUtil.isMobileDevice()) {
                asideMenuOffcanvas.hide();
            }
        },

        closeMobileHeaderMenuOffcanvas: function() {
            if (KTUtil.isMobileDevice()) {
                headerMenuOffcanvas.hide();
            }
        },

        getContentHeight: function() {
			return getContentHeight();
		}
    };
}();

// webpack support
if (typeof module !== 'undefined') {
    module.exports = KTLayout;
}

$(document).ready(function() {
    KTLayout.init();
});
