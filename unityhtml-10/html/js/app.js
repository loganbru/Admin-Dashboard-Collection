(function($, namespace) {
    'use strict';

    var app = {
        settins: {
            bp: 1024
        },
        dom: {
            $header: $('.js-header')
        },
        crnt: {
            init: function() {
                $(window).on('resize resizecurrent', function() {
                    app.crnt.m = window.innerWidth <= app.settins.bp;
                    app.crnt.d = !app.crnt.m;
                });

                $(window).trigger('resizecurrent');
            }
        },
        methods: {
            responsiveHandlers: function(obj) {
                $(window).on('resize.responsivehandlers responsivehandlers', function() {
                    if(obj.desktopBp === app.crnt.d) return;
                    else obj.desktopBp = app.crnt.d;

                    var $elem = $(obj.elem),
                        ns = obj.namespace ? '.' + obj.namespace : '';

                    if(obj.onDesktop === app.crnt.d) {
                        $.each(obj.events, function(event, func) {
                            $elem.on(event + ns, obj.delegate, func);
                        });
                    } else {
                        $.each(obj.events, function(key) {
                            $elem.unbind(key + ns);
                        });
                    }
                });

                $(window).trigger('responsivehandlers');
            }
        },
        searchVisibleOnMobileBtn: function() {
            var $header = app.dom.$header,
                $btn_open = app.dom.$header.find('.js-header-search-btn-open'),
                $btn_close = app.dom.$header.find('.js-header-search-btn-close');

            app.methods.responsiveHandlers({
                elem: $btn_open,
                namespace: 'searchopen',
                onDesktop: false,
                events: {
                    'click': function() {
                        $header.addClass('header--search');
                    }
                }
            });

            app.methods.responsiveHandlers({
                elem: $btn_close,
                namespace: 'searchclose',
                onDesktop: false,
                events: {
                    'click': function() {
                        $header.removeClass('header--search');
                    }
                }
            });
        },
        dropdowns: function() {

            function toggleList($list, $btn) {
                if(!$list.hasClass('js-dropdown-process')) {
                    $list.addClass('js-dropdown-process');

                    var process = $list.hasClass('dropdown--open') ? 'slideUp' : 'slideDown';

                    $btn = $btn || $list.parents('.js-dropdown').find('[data-dropdown-btn="' + $list.data('dropdown-btn') + '"]');

                    $list.velocity(process, {
                        complete: function() {
                            $list[process === 'slideUp' ? 'removeClass' : 'addClass']('dropdown--open');
                            $list.removeAttr('style').removeClass('js-dropdown-process');
                        }
                    });

                    $btn[process === 'slideUp' ? 'removeClass' : 'addClass']('dropdown__btn--open');
                }
            };

            function closeOpenLists($t) {
                var $list_close = $('[data-dropdown-list].dropdown--open');

                if($t) {
                    var $list_parent = $t.closest('[data-dropdown-list]');

                    $list_close = $list_close.not($list_parent)
                }

                toggleList($list_close);
            };

            $(document).on('click', '.js-dropdown [data-dropdown-btn]', function(e) {
                var $this = $(this),
                    namespace = $this.data('dropdown-btn'),
                    $list = $this.parents('.js-dropdown').find('[data-dropdown-list="' + namespace + '"]');

                closeOpenLists($list);

                toggleList($list, $this);

                e.preventDefault();
                return false;
            });

            $(document).on('click', function(e) {
                var $t = $(e.target);

                closeOpenLists($t);
            });
        },
        init: function() {
            for (var key in this) {
                delete this.init;

                if (typeof this[key] === 'function') {
                    this[key]();
                } else if (this[key].init && typeof this[key].init === 'function') {
                    this[key].init();
                }
            }

            return this;
        }
    };

    window[namespace] = app.init();
})(jQuery, 'app');
