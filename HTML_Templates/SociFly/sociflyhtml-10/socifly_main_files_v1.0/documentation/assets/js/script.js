/*!
 * Documenter 2.0
 * http://rxa.li/documenter
 *
 * Copyright 2011, Xaver Birsak
 * http://revaxarts.com
 *
 */
 
$(window).on('load', function() {
	/* Documenter Nav */
	var $documenterNav = $('#documenter_nav');
	
	$documenterNav.on('click', '.dropdown > a', function (e) {
		e.preventDefault();
		
		$(this).parent().toggleClass('open');
	});

	/* PRELOADER */
	var $preloaderInner = $('.preloader--inner'),
		preloaderSnippers = function ($el, i) {
			i = {
				now: 1,
				max: i,
				result: ''
			};

			while (i.now++ <= i.max) {
				i.result += '<span></span>';
			}

			$el.append( i.result );
		};

	$preloaderInner.each(function () {
		var $t = $(this),
			preloader = $t.parent('.preloader').data('preloader');

		switch ( preloader ) {
			case 6:
				preloaderSnippers($t, 12);
				break;

			case 7:
				preloaderSnippers($t, 5);
				break;

			case 8:
				preloaderSnippers($t, 4);
				break;

			case 9:
				preloaderSnippers($t, 9);
				break;

			case 10:
				preloaderSnippers($t, 4);
				break;

			case 'img':
				$t.append('<img src="' + $t.parent().data('preloader-img') + '" alt="Preloader Logo">');
				break;

			default:
				break;
		}
	});
	
	/* General Variables */
    var timeout,
        sections = new Array(),
        sectionscount = 0,
        win = $(window),
        sidebar = $('#documenter_sidebar'),
        nav = $('#documenter_nav'),
        logo = $('#documenter_logo'),
        navanchors = nav.find('a'),
        timeoffset = 50,
        hash = location.hash || null;
        iDeviceNotOS4 = (navigator.userAgent.match(/iphone|ipod|ipad/i) && !navigator.userAgent.match(/OS 5/i)) || false,
        badIE = $('html').prop('class').match(/ie(6|7|8)/)|| false;
    
	// Handle External Links (New Window)
	var $anchorHref = $('a[href^=http]');
	
    $anchorHref.on('click', function (e) {
		e.preventDefault();
		
		e.$el = $(this);
		e.$href = this.href;
		
		if ( this.href.match('themeforest.net') || this.href.match('codecanyon.net') ) {
			e.$href = e.$href + '?ref=themelooks';
		}
		
        window.open( e.$href );
    });
    
    // IE 8 and lower doesn't like the smooth pagescroll
	var $anchorHash = $('a[href^=\\#]');
	
    if( !badIE ) {
        window.scroll(0, 0);
        
        $anchorHash.on('click touchstart', function () {
			var $t = $(this);
			
			if ( !$t.hasClass('dropdown-toggle') ) {
				hash = $t.attr('href');
				
				$.scrollTo.window().queue([]).stop();
				
				goTo(hash);
				
				return false;
			}
        });
        
        // if a hash is set => go to it
        if( hash ){
            setTimeout(function(){
                goTo(hash);
            },800);
        }
    }
    
    // We need the position of each section until the full page with all images is loaded
    var sectionselector = 'section';
        
	// Documentation has subcategories       
	if( nav.find('ol').length ){
		sectionselector = 'section, h4';
	}
	// saving some information
	$( sectionselector ).each(function(i,e){
		var _this = $(this);
		var p = {
			id: this.id,
			pos: _this.offset().top
		};
		sections.push(p);
	});
	
	
	//iPhone, iPod and iPad don't trigger the scroll event
	if( iDeviceNotOS4 ){
		nav.find('a').on('click',function(){
			setTimeout(function(){
				win.trigger('scroll');              
			},duration);
			
		});
		//scroll to top
		window.scroll(0,0);
	}

	//how many sections
	sectionscount = sections.length;
	
	//on the handler to the scroll event
	win.on('scroll',function(event){
		clearInterval(timeout);
		//should occur with a delay
		timeout = setTimeout(function(){
			//get the position from the very top in all browsers
			pos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
			
			//iDeviceNotOS4s don't know the fixed property so we fake it
			if(iDeviceNotOS4){
				sidebar.css({height:document.height});
				logo.css({'margin-top':pos});
			}
			//activate Nav element at the current position
			activateNav(pos);
		},timeoffset);
	}).trigger('scroll');
    
    //the function is called when the hash changes
    function hashchange(){
        goTo(location.hash, false);
    }
    
    //scroll to a section and set the hash
    function goTo(hash,changehash){
        win.off('hashchange', hashchange);
        hash = hash.replace(/!\//,'');
        win.stop().scrollTo(hash,duration,{
            easing:easing,
            axis:'y'            
        });
        if(changehash !== false){
            var l = location;
            location.href = (l.protocol+'//'+l.host+l.pathname+'#!/'+hash.substr(1));
        }
        win.on('hashchange', hashchange);
    }
    
    
    //activate current nav element
    function activateNav(pos){
        var offset = 100,
        current, next, parent, isSub, hasSub;
        win.off('hashchange', hashchange);
        for(var i=sectionscount;i>0;i--){
            if(sections[i-1].pos <= pos+offset){
                navanchors.removeClass('current');
                current = navanchors.eq(i-1);
                current.addClass('current');
                
                parent = current.parent().parent();
                next = current.next();
                
                hasSub = next.is('ul');
                isSub = !parent.is('#documenter_nav');
                
                nav.find('ol:visible').not(parent).slideUp('fast');
                if(isSub){
                    parent.prev().addClass('current');
                    parent.stop().slideDown('fast');
                }else if(hasSub){
                    next.stop().slideDown('fast');
                }
                win.on('hashchange', hashchange);
                break;
            };
        }   
    }
	
	/* TAB NAV */
	var $tabNav = $('.tab--nav');
	
	$tabNav.on('click', 'span', function (e) {
		e.preventDefault();
		e.$el = $(this);
		e.$target = e.$el.data('target');
		e.$parents = e.$el.parents('.tab--nav');
		e.$parentsTabC = e.$parents.siblings('.tab--content');
		
		e.$el.parent('li').addClass('active').siblings().removeClass('active');
	
		if ( e.$parentsTabC.length ) {
			e.$parentsTabC.children('.tab--item[data-tab-item="' + e.$target + '"]').addClass('active').siblings('.tab--item').removeClass('active');
		}
	});

});
