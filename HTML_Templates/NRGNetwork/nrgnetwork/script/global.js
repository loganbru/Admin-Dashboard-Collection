(function($){
    "use strict";

    /*--------------------------------------------------------*/
    /* TABLE OF CONTENTS: */
    /*--------------------------------------------------------*/
    /* 01 - VARIABLES */
    /* 02 - page calculations */
    /* 03 - function on document ready */
    /* 04 - function on page load */
    /* 05 - function on page resize */
    /* 06 - swiper sliders */
    /* 07 - buttons, clicks, hovers */
    /*-------------------------------------------------------------------------------------------------------------------------------*/

    $('.sub_footer_menu a').each(function(){
        $(this).addClass('btn color-7 size-2 hover-9');
    });


    // VC Row Overlay
    $('div[data-overlay]').each(function(){
        var $row = $(this);
        var $overlay = $('<div class="vc-row-overlay" style="background-color:'+$row.data('overlay')+'; opacity:'+$row.data('overlay-alpha')+';"></div>');
        $row.prepend( $overlay );
    });


    // like button
    $('.like-button').each(function(){
        var $btn = $(this);

        $btn.on('click', function(){
            var _id = $btn.data('id');
            if( !$btn.hasClass('spinning') ){
                $btn.addClass('spinning');
                $.post(theme_options.ajax_url, { action:'post_like_action', post_id:_id }, function(data){
                    if( data=='1' ){
                        if( $btn.hasClass('active') ){
                            $btn.removeClass('active');
                        }
                        else{
                            $btn.addClass('active');
                        }
                        $btn.removeClass('spinning');
                    }

                });
            }
        });
    });


    // like button
    $('.like-button-blog').each(function(){
        var $btn = $(this);

        $btn.on('click', function(){
            var _id = $btn.data('id');
            $.post(theme_options.ajax_url, { action:'post_like_action', post_id:_id }, function(data){
                $btn.append(' <i class="fa fa-spinner"></i>');
                $.post(theme_options.ajax_url, { action:'post_like_blog_action', post_id:_id }, function(data){
                    $btn.html('<i class="fa fa-thumbs-o-up"></i> '+data);
                });
            });
        });
    });


    // no-logged-in
    $('.no-logged-in').each(function(){
        $(this).on('click', function(){
            $(".large-popup.login").slideToggle();
            return false;
        });
    });

    // add to collection
    $('.btn-add2collection:not(.no-logged-in)').each(function(){
        var $btn = $(this);
        var _id = $btn.data('id');

        $btn.on('click', function(){

            if( $('#add2collection-view').length ){
                $('#add2collection-view').dialog('destroy').remove();
            }

            var $form = $('#tpl-add2collection').clone();
            var dlg = $("<div id='add2collection-view' />")
                        .html($form.html())
                        .appendTo("body");

            dlg.dialog({
                'dialogClass' : 'wp-dialog',
                'modal' : true,
                'autoOpen' : false,
                'closeOnEscape' : true,
                'title': 'Add to Collections',
                'resizable': false,
                'width': '300px',
                'buttons' : [
                    {
                        'text' : 'Save',
                        'class' : 'be-button-vidget blue-style',
                        'click' : function() {

                            if( !$("#add2collection-view").hasClass('loading-form') ){
                                $("#add2collection-view").addClass('loading-form');
                                var _selected = '';
                                $("#add2collection-view").find('.add2col-list a.selected').each(function(){
                                    _selected += $(this).data('col-id') + '|';
                                });

                                $.post(theme_options.ajax_url, { action: 'add2col_save_col', post_id:_id, collections:_selected }, function(data){
                                    dlg.dialog('close');
                                });
                            }
                            
                        }
                    }
                ]
            })
            .dialog('open');


            $.post(theme_options.ajax_url, { action: 'add2col_get_list', post_id:_id }, function(data){
                if( $("#add2collection-view").find('.add2col-list').length ){
                    $("#add2collection-view").find('.add2col-list').html( data );

                    $("#add2collection-view").find('.add2col-list a').off('click').on('click', function(){
                        $(this).toggleClass('selected');
                    });
                }
            });
            // <li><a href="javascript:;">New List <i class="fa fa-check"></i></a></li>

            $('#add2col-btn').off('click').on('click', function(){
                var $col_btn = $(this);
                if( $("#add2collection-view").find('#new-collection').val()!='' && !$col_btn.hasClass('clicked') ){
                    $col_btn.addClass('clicked');
                    $.post(theme_options.ajax_url, { action: 'add2col_new', name:$("#add2collection-view").find('#new-collection').val(), post_id:_id }, function(data){
                        if( data!='0' ){
                            $('#add2collection-view').find('.add2col-list').html(data);

                            $("#add2collection-view").find('.add2col-list a').off('click').on('click', function(){
                                $(this).toggleClass('selected');
                            });
                        }
                        $col_btn.removeClass('clicked');
                    });
                }
            });

        });

    });





    
    // Follow action
    var follow_button_handler = function(_icon){
        $('.bp-follow-action').each(function(){
            var $btn = $(this);

            $btn.on('click', function(){
                var _user = $(this).attr('data-user-id');
                var _nonce = $(this).attr('data-nounce');
                var _follow = $(this).data('text-follow');
                var _following = $(this).data('text-following');

                $(".be-loader").fadeIn("slow");

                var _args = { action:'net_addremove_friend', fid:_user };

                $.post(theme_options.ajax_url, _args, function(data){

                    var _json = $.parseJSON(data);

                    if(  typeof _json.following!=='undefined' && _json.following=='1' ){
                        $btn.html( _following );
                    }
                    else{
                        if(_icon){
                            $btn.html( '<i class="fa fa-plus"></i>' + _follow );
                        }
                        else{
                            $btn.html( _follow );
                        }
                    }

                    $(".be-loader").fadeOut("fast");
                });

            });

        });
    }

    follow_button_handler(true);




    // edit image
    $('#edit-avatar').on('click', function(){
        var send_attachment_bkp = wp.media.editor.send.attachment;
        wp.media.editor.send.attachment = function(props, attachment){
            wp.media.editor.send.attachment = send_attachment_bkp;

            $('#user-avatar').find('img').attr('src', attachment.url);
            $('#user-avatar-attach').val(attachment.id);

        }
        wp.media.editor.open();
    });

    // save profile
    $('#save-profile').on('click', function(){

        var _pass = $('.cs-new-pass').val() + '';
        if( _pass!='' && _pass!=$('.cs-repeat-pass').val() ){
            alert('Please check your password!');
            return false;
        }
        
        if( _pass!='' && _pass.length<4 ){
            alert('Please check your password!');
            return false;
        }

        var custom_sections = [];
        $('.custom-section-block').each(function(){
            var $cs = $(this);
            var _id = $cs.hasClass('saved-section') ? $cs.attr('id') : 0;
            custom_sections.push( _id + '$$$' + $cs.find('.cs-input').val() + '$$$' + $cs.find('.cs-textarea').val() );
        });

        var args = {
            action: 'net_save_profile',
            fname:      $('.cs-fname').val(),
            lname:      $('.cs-lname').val(),
            user_image: $('#user-avatar-attach').val(),
            occupation: $('.cs-occupation').val(),
            company:    $('.cs-company').val(),
            country:    $('.cs-country').val(),
            city:       $('.cs-city').val(),
            website:    $('.cs-website').val(),
            facebook:   $('.cs-socials').eq(0).val(),
            twitter:    $('.cs-socials').eq(1).val(),
            google:     $('.cs-socials').eq(2).val(),
            pinterest:  $('.cs-socials').eq(3).val(),
            instagram:  $('.cs-socials').eq(4).val(),
            linkedin:   $('.cs-socials').eq(5).val(),
            description: $('.cs-description').val(),
            password:   $('.cs-new-pass').val(),
            custom_sections: custom_sections
        };

        $(".be-loader").fadeIn("slow");
        $.post( theme_options.ajax_url, args, function(data){
            window.location.reload();
        });

    });
    
    
    

    



    // Search
    var folio_filters_hook = function(){

        $(".be-loader").fadeIn("slow");

        var icon_close = ' <i class="fa keyword fa-times"></i>';
        if( $('.s_keywords').length<1 ){
            $('#main-content-panel').before( $('#tpl-search-filter').html() );
        }


        $('.sk-clears').off('click').on('click', function(){
            $('#folio_filter_search').val('');
            
            var _items = ['type', 'category', 'features', 'worldwide'];
            for( var i=0; i<_items.length; i++ ){
                var _pst = _items[i];
                var _id = 'folio_filter_' + _pst;
                $('#'+_id).parent().find('.be-dropdown-content').text( $('#'+_id).parent().find('ul li:first-child a').eq(0).text() );
                $('#'+_id).val( $('#'+_id).parent().find('ul li:first-child a').eq(0).data('id') );
            }

            $('.sk-item').each(function(){ $(this).remove(); });

            $('#net_meta_field1').val('');
            $('#net_meta_field2').val('');
            $('#net_meta_field3').val('');
            $('#net_meta_field_color').find('li.active-color').removeClass('active-color');

            folio_filters_hook();

            $('.s_keywords').remove();
        });



        if( $('#folio_filter_search').val()=='' ){
            $('.sk-item-search').remove();
        }
        else{
            if( $('.sk-item-search').length ){
                $('.sk-item-search').html( $('#folio_filter_search').val() + icon_close );
            }
            else{
                $('.s_keywords .custom-container').append( $('<a class="btn color-6 size-3 hover-10 sk-item sk-item-search" data-elem="sk-item-search" data-field="folio_filter_search"></a>').html($('#folio_filter_search').val() + icon_close) );
            }
        }


        var _items = ['type', 'category', 'features', 'worldwide'];
        for( var i=0; i<_items.length; i++ ){
            var _pst = _items[i];
            var _id = 'folio_filter_' + _pst;
            var _class = 'sk-item-' + _pst;
            var _std = $('#'+_id).parent().find('ul li:first-child a').eq(0).data('id');

            if( $('#'+_id).val()==_std ){
                $('.'+_class).remove();
            }
            else{
                var _text = $('#'+_id).parent().find('.be-dropdown-content').text() + icon_close;
                if( $('.'+_class).length ){
                    $('.'+_class).html( _text );
                }
                else{
                    $('.s_keywords .custom-container').append( $('<a class="btn color-6 size-3 hover-10 sk-item '+_class+'" data-elem="'+_class+'" data-field="'+_id+'"></a>').html(_text) );
                }
            }
        }



        $('.sk-item').off('click').on('click', function(){
            var $btn_close = $(this);
            var _id = $btn_close.data('field');
            if( $btn_close.hasClass('sk-item-search') ){
                $('#'+_id).val('');
                $('#folio_filter_type').trigger('change');
            }
            else if( $btn_close.hasClass('sk-item-mf') ){
                var _elem = $btn_close.data('elem');
                if( _elem=='net_meta_field_color' ){
                    $('#net_meta_field_color li.active-color').removeClass('active-color');
                    $btn_close.remove();
                    folio_filters_hook();
                }
                else{
                    $('#'+_elem).val('');
                    $btn_close.remove();
                    folio_filters_hook();
                }
            }
            else{
                $('#'+_id).parent().find('.be-dropdown-content').text( $('#'+_id).parent().find('ul li:first-child a').eq(0).text() );
                $('#'+_id).val( $('#'+_id).parent().find('ul li:first-child a').eq(0).data('id') );
                $('#'+_id).trigger('change');
            }
            return false;
        });




        var args = {
            action:     'net_search_portfolios',
            search:     $('#folio_filter_search').val(),
            types:      $('#folio_filter_type').val(),
            category:   $('#folio_filter_category').val(),
            features:   $('#folio_filter_features').val(),
            worldwide:  $('#folio_filter_worldwide').val(),
            paged:      0
        };

        if( $('#projects_type').length ){
            $.extend(args, { projects_type:$('#projects_type').val() });
        }

        if( $('#net_meta_field1').length ){
            $.extend(args, { meta_field1:$('#net_meta_field1').val() });
            $.extend(args, { meta_field2:$('#net_meta_field2').val() });
            $.extend(args, { meta_field3:$('#net_meta_field3').val() });
        }

        if( $('#net_meta_field_color').find('li.active-color').length ){
            var _class = $('#net_meta_field_color').find('li.active-color').attr('class') + '';
            _class = _class.replace('color filter ', '').replace(' active-color', '');
            $.extend(args, { meta_field_color:_class });
        }
        

        $.post(theme_options.ajax_url, args, function(data){
            if( data!='0' && data!='' ){
                var _json = $.parseJSON(data);
                if( typeof _json.types!=='undefined' ){

                    if( _json.count>0 ){
                        var $data = $('<div></div>').append(_json.result);
                        $('._post-container_').html( $data.html() );

                        $('#netsearch_paged').val(_json.paged);
                        $('#netsearch_args').html(_json.args);

                        if( _json.count<16 ){ $('#netsearch_btn_pager').hide(); }
                        else{ $('#netsearch_btn_pager').show(); }

                        follow_button_handler(false);
                    }
                    else{
                        $('._post-container_').html('<h4 class="text-center">'+_json.error+'</h4>');
                        $('#netsearch_btn_pager').hide();
                    }
                    
                }
            }

            $(".be-loader").fadeOut("fast");
        });

    };


    // Search Pager
    $('#netsearch_btn_pager').on('click', function(){
        $(".be-loader").fadeIn("slow");

        var args = {
            action:     'net_search_portfolios',
            search:     $('#folio_filter_search').val(),
            types:      $('#folio_filter_type').val(),
            category:   $('#folio_filter_category').val(),
            features:   $('#folio_filter_features').val(),
            worldwide:  $('#folio_filter_worldwide').val(),
            paged:      $('#netsearch_paged').val(),
            encrypted_args: $('#netsearch_args').html()
        };


        if( $('#net_meta_field1').length ){
            $.extend(args, { meta_field1:$('#net_meta_field1').val() });
            $.extend(args, { meta_field2:$('#net_meta_field2').val() });
            $.extend(args, { meta_field3:$('#net_meta_field3').val() });
        }

        if( $('#net_meta_field_color').find('li.active-color').length ){
            var _class = $('#net_meta_field_color').find('li.active-color').attr('class') + '';
            _class = _class.replace('color filter ', '').replace(' active-color', '');
            $.extend(args, { meta_field_color:_class });
        }


        $.post(theme_options.ajax_url, args, function(data){
            if( data!='0' && data!='' ){
                var _json = $.parseJSON(data);
                if( typeof _json.types!=='undefined' ){
                    var $data = $('<div></div>').append(_json.result);
                    $('._post-container_').append( $data.html() );

                    $('#netsearch_paged').val(_json.paged);
                    $('#netsearch_args').html(_json.args);

                    if( _json.count<16 ){ $('#netsearch_btn_pager').hide(); }
                    else{ $('#netsearch_btn_pager').show(); }

                    follow_button_handler(false);
                    
                }
            }

            $(".be-loader").fadeOut("fast");
        });

    });





    $('#search-form-folio').on('submit', function(){
        folio_filters_hook();
        return false;
    });

    $('.filter-projects input.form-input, .filter-categories input.form-input, .filter-features input.form-input, .filter-worldwide input.form-input').on('change', function(){
        folio_filters_hook();
        return false;
    });





    $('#net_meta_field1, #net_meta_field2, #net_meta_field3').on('keyup', function(e){
        var $this = $(this);
        var _id = $this.attr('id');
        var icon_close = ' <i class="fa keyword fa-times"></i>';

        if( e.which==13 && this.value!='' ){
            if( $('.s_keywords').length<1 ){
                $('#main-content-panel').before( $('#tpl-search-filter').html() );
            }
            $('.s_keywords .custom-container').find('a.sk-item-mf[data-elem="'+_id+'"]').remove();
            $('.s_keywords .custom-container').append( $('<a class="btn color-6 size-3 hover-10 sk-item sk-item-mf" data-elem="'+_id+'" data-field="'+_id+'"></a>').html($this.val()+icon_close) );
            folio_filters_hook();

            $this.parents('.be-popup').hide();
            $this.parents('.be-popup').parents('li.be-active').removeClass('be-active');
            $('.be-fixed-filter.active-fixed').removeClass('active-fixed');
        }
        return false;
    });



    $('#net_meta_field_color').find('li').on('click', function(){
        var _classes = this.classList;
        var _class = '';
        var icon_close = ' <i class="fa keyword fa-times"></i>';

        for( var i=0; i<_classes.length; i++ ){
            if( _classes[i]!='active-color' && _classes[i]!='color' && _classes[i]!='filter' ){
                _class = _classes[i];
            }
        }

        if( _class!='' ){
            if( $('.s_keywords').length<1 ){
                $('#main-content-panel').before( $('#tpl-search-filter').html() );
            }
            $('.s_keywords .custom-container').find('a.sk-item-mf[data-elem="net_meta_field_color"]').remove();
            $('.s_keywords .custom-container').append( $('<a class="btn color-6 size-3 hover-10 sk-item sk-item-mf '+_class+'" data-elem="net_meta_field_color" data-field="net_meta_field_color"></a>').html('color'+icon_close) );
            folio_filters_hook();

            $(this).parents('.be-popup').hide();
            $(this).parents('.be-popup').parents('li.be-active').removeClass('be-active');
            $('.be-fixed-filter.active-fixed').removeClass('active-fixed');
        }
        
    });





    $('#reg_frontend_form').on('submit', function(){
        var $form = $(this);
        if( $form.find('input[name="reg_email"]').val()=='' ){
            alert('Please check your email!');
            return false;
        }

        if( $form.find('input[name="reg_pass"]').val()=='' ){
            alert('Please check your password!');
            return false;
        }

        if( $form.find('input[name="reg_username"]').val()=='' ){
            alert('Please check your username!');
            return false;
        }

        $(".be-loader").fadeIn("slow");
        $.post(theme_options.ajax_url, $form.serialize(), function(data){
            
            $(".be-loader").fadeOut("slow");

            if( data=='1' ){
                $form.parent().find('.close-button').trigger('click');
                $(".large-popup.login").slideToggle();
            }
            else{
                alert(data);
            }
        });

        return false;
    });




    $('#msg_button_send').on('click', function(){

        if( $('#msg_content').val()!='' ){

            $(".be-loader").fadeIn("slow");

            $.post(theme_options.ajax_url, { action: 'net_frontend_message', user: $('#msg_username').val(), content: $('#msg_content').val()}, function(data){
                
                $(".be-loader").fadeOut("slow");

                if( data=='1' ){
                    $('.msg-popup-window').slideUp();
                    $('#msg_content').val('');
                }
                else{
                    alert(data);
                }
            });
        }
        
    });


    
    $('#frontend_mail_form').on('submit', function(){
        var $form = $(this);

        if( $form.find('input[name="msg_mail"]').val()=='' ){
            alert('Please check your email!');
            return false;
        }

        if( $form.find('textarea').val()=='' ){
            alert('Please check your message!');
            return false;
        }

        $(".be-loader").fadeIn("slow");
        $.post(theme_options.ajax_url, $form.serialize(), function(data){
            
            $(".be-loader").fadeOut("fast");

            if( data=='1' ){
                $form.parent().find('.close-button').trigger('click');
            }
            else{
                alert(data);
            }
        });

        return false;
    });




    $('#btn_remove_project').on('click', function(){
        var _id = $(this).data('post');
        var _nonce = $(this).data('nonce');
        var _confirm = confirm("Delete this item?");

        if( _confirm && _id!='' && _nonce!='' ){
            $(".be-loader").fadeIn("slow");
            $.post(theme_options.ajax_url, { action:'net_frontend_remove', post_id:_id, nonce:_nonce }, function(data){
                $(".be-loader").fadeOut("fast");

                var _json = $.parseJSON(data);
                if( typeof _json.result!=='undefined' && _json.result=='yes' ){
                    window.location.href = _json.redirect;
                }
                else{
                    alert('Something wrong, Please check your internet connection and try again.');
                }
            });
        }

    });






    $('.collection-actions a.coll_edit_action').on('click', function(){
        var $this = $(this);
        var _id = $this.data('id');
        var _nonce = $this.data('nonce');
        var _name = $this.parents('.collection').find('.menu-article').text();
        var _prompt = prompt('Rename Collection', _name);
        if (_prompt != null && _prompt!=''){

            $(".be-loader").fadeIn("slow");
            $.post(theme_options.ajax_url, { action:'net_edit_coll_rename', id:_id, name:_prompt, nonce:_nonce }, function(data){
                $(".be-loader").fadeOut("fast");

                var _json = $.parseJSON(data);
                if( typeof _json.result!=='undefined' && _json.result=='yes' ){
                    $this.parents('.collection').find('.menu-article').html(_prompt);
                }
                else{
                    alert('Something wrong, Please check your internet connection and try again.');
                }
            });

        }
    });

    $('.collection-actions a.col_remove_action').on('click', function(){
        var $this = $(this);
        var _id = $this.data('id');
        var _nonce = $this.data('nonce');

        var _confirm = confirm('Remove this collection?');
        if (_confirm ){

            $(".be-loader").fadeIn("slow");
            $.post(theme_options.ajax_url, { action:'net_edit_coll_remove', id:_id, nonce:_nonce }, function(data){
                $(".be-loader").fadeOut("fast");

                var _json = $.parseJSON(data);
                if( typeof _json.result!=='undefined' && _json.result=='yes' ){
                    $this.parents('.collection').remove();
                }
                else{
                    alert('Something wrong, Please check your internet connection and try again.');
                }
            });

        }
    });


    $('.author-collection-view .collection-item-remove').on('click', function(){
        var $this = $(this);
        var _id = $this.data('id');
        var _nonce = $this.data('nonce');
        var _coll = $this.data('coll');

        var _confirm = confirm('Remove this item?');
        if (_confirm ){

            $(".be-loader").fadeIn("slow");
            $.post(theme_options.ajax_url, { action:'net_edit_coll_remove_item', id:_id, nonce:_nonce, coll:_coll }, function(data){
                $(".be-loader").fadeOut("fast");

                var _json = $.parseJSON(data);
                if( typeof _json.result!=='undefined' && _json.result=='yes' ){
                    $this.parents('.author-collection-view').parent().remove();
                }
                else{
                    alert('Something wrong, Please check your internet connection and try again.');
                }
            });

        }

    });


    

    $(function() {

        /*================*/
        /* 01 - VARIABLES */
        /*================*/
        var swipers = [], winW, winH, winScr, _isresponsive, smPoint = 768, mdPoint = 992, lgPoint = 1200, addPoint = 1600, _ismobile = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i);

        /*========================*/
        /* 02 - page calculations */
        /*========================*/
        function pageCalculations(){
            winW = $(window).width();
            winH = $(window).height();
            if($('.menu-button').is(':visible')) _isresponsive = true;
            else _isresponsive = false;
            if(winW <= 992)
                $(".header-menu").css({"max-height":winH - 20 +  "px"});
        }

        /*=================================*/
        /* 03 - function on document ready */
        /*=================================*/
        pageCalculations();

        //center all images inside containers
        $('.center-image').each(function(){
            var bgSrc = $(this).attr('src');
            $(this).parent().addClass('background-block').css({'background-image':'url('+bgSrc+')'});
            $(this).hide();
        });     

        /*============================*/
        /* 04 - function on page load */
        /*============================*/
        $(window).load(function(){

            $(".be-loader").fadeOut("slow");

            $(".be-loader").addClass('inner-loader');

            initSwiper();
            notification();
            // $('.isotope-grid').isotope({
            //  itemSelector: '.isotope-item ',
            //  percentPosition: true
            // });
            setTimeout(function() {
                $('.tab-wrapper.style-2 .tab-info').addClass('none');
            }, 100);




            $('.tabs-content').find('.tab-info').each(function(){
                var $tab_info = $(this);
                if( $tab_info.find('.tab-info-viewport').length ){
                    $tab_info.find('.tab-info-viewport > .row').isotope({
                        itemSelector: '.netauthor-item'
                    });
                }
            });

        });

        /*==============================*/
        /* 05 - function on page resize */
        /*==============================*/
        $(window).resize(function(){
                resizeCall();
                notification();
        });

        function resizeCall(){
            pageCalculations();
            
            $('.swiper-container.initialized[data-slides-per-view="responsive"]').each(function(){
                var thisSwiper = swipers['swiper-'+$(this).attr('id')], $t = $(this), slidesPerViewVar = updateSlidesPerView($t);
                thisSwiper.params.slidesPerView = slidesPerViewVar;
                thisSwiper.reInit();
                var paginationSpan = $t.find('.pagination span');
                var paginationSlice = paginationSpan.hide().slice(0,(paginationSpan.length+1-slidesPerViewVar));
                if(paginationSlice.length<=1 || slidesPerViewVar>=$t.find('.swiper-slide').length) $t.addClass('pagination-hidden');
                else $t.removeClass('pagination-hidden');
                paginationSlice.show();
                updateSlidesPerView(this);
            });
                var a = $(window).height() - 70;
                $("#one").css("max-height",a + "px");
        }

        /*=====================*/
        /* 06 - swiper sliders */
        /*=====================*/
        function initSwiper(){
            var initIterator = 0;
            $('.swiper-container').each(function(){                               
                var $t = $(this);                                 

                var index = 'swiper-unique-id-'+initIterator;

                $t.addClass('swiper-'+index + ' initialized').attr('id', index);
                $t.find('.pagination').addClass('pagination-'+index);

                var autoPlayVar = parseInt($t.attr('data-autoplay'));
                var centerVar = parseInt($t.attr('data-center'));
                var simVar = ($t.closest('.circle-description-slide-box').length)?false:true;

                var slidesPerViewVar = $t.attr('data-slides-per-view');
                if(slidesPerViewVar == 'responsive'){
                    slidesPerViewVar = updateSlidesPerView($t);
                }
                else slidesPerViewVar = parseInt(slidesPerViewVar);

                var loopVar = parseInt($t.attr('data-loop'));
                var speedVar = parseInt($t.attr('data-speed'));

                var slidesPerGroup = parseInt($t.attr('data-slides-per-group'));
                if(!slidesPerGroup){slidesPerGroup=1;}          

                swipers['swiper-'+index] = new Swiper('.swiper-'+index,{
                    speed: speedVar,
                    pagination: '.pagination-'+index,
                    loop: loopVar,
                    paginationClickable: true,
                    autoplay: autoPlayVar,
                    slidesPerView: slidesPerViewVar,
                    slidesPerGroup: slidesPerGroup,
                    keyboardControl: true,
                    calculateHeight: true, 
                    simulateTouch: simVar,
                    centeredSlides: centerVar,
                    roundLengths: true,
                    onSlideChangeEnd: function(swiper){
                        var activeIndex = (loopVar===1)?swiper.activeLoopIndex:swiper.activeIndex;
                        var qVal = $t.find('.swiper-slide-active').attr('data-val');
                        $t.find('.swiper-slide[data-val="'+qVal+'"]').addClass('active');
                    },
                    onSlideChangeStart: function(swiper){
                        $t.find('.swiper-slide.active').removeClass('active');
                        if($t.hasClass('thumbnails-preview')){
                            var activeIndex = (loopVar===1)?swiper.activeLoopIndex:swiper.activeIndex;
                            swipers['swiper-'+$t.next().attr('id')].swipeTo(activeIndex);
                            $t.next().find('.current').removeClass('current');
                            $t.next().find('.swiper-slide[data-val="'+activeIndex+'"]').addClass('current');
                        }
                    },
                    onSlideClick: function(swiper){
                        if($t.hasClass('thumbnails')) {
                            swipers['swiper-'+$t.prev().attr('id')].swipeTo(swiper.clickedSlideIndex);
                        }
                    },
                    onResize: function(swiper){
                        var browserWidthResize2 = $(window).width();
                        if (browserWidthResize2 < 750) {
                                swiper.params.slidesPerGroup=1;
                        } else { 
                          swiper.params.slidesPerGroup=slidesPerGroup;
                          swiper.resizeFix(true);
                        }                   
                    }               
                });
                swipers['swiper-'+index].reInit();
                if($t.attr('data-slides-per-view')=='responsive'){
                    var paginationSpan = $t.find('.pagination span');
                    var paginationSlice = paginationSpan.hide().slice(0,(paginationSpan.length+1-slidesPerViewVar));
                    if(paginationSlice.length<=1 || slidesPerViewVar>=$t.find('.swiper-slide').length) $t.addClass('pagination-hidden');
                    else $t.removeClass('pagination-hidden');
                    paginationSlice.show();
                }
                initIterator++;
            });

        }

        function updateSlidesPerView(swiperContainer){
            if(winW>=addPoint) return parseInt($(swiperContainer).attr('data-add-slides'));
            else if(winW>=lgPoint) return parseInt($(swiperContainer).attr('data-lg-slides'));
            else if(winW>=mdPoint) return parseInt($(swiperContainer).attr('data-md-slides'));
            else if(winW>=smPoint) return parseInt($(swiperContainer).attr('data-sm-slides'));
            else return parseInt($(swiperContainer).attr('data-xs-slides'));
            // else return 0;
        }

        //swiper arrows
        $('.swiper-arrow-left.be-out').on('click', function(){
            swipers['swiper-'+$(this).parent().parent().find(".swiper-container").attr('id')].swipePrev();
            return false;
        });

        $('.swiper-arrow-right.be-out').on('click', function(){
            swipers['swiper-'+$(this).parent().parent().find(".swiper-container").attr('id')].swipeNext();
            return false;
        });

        $('.swiper-arrow-left').on('click', function(){
            if(!$(this).hasClass("be-out")) swipers['swiper-'+$(this).parent().attr('id')].swipePrev();
        });

        $('.swiper-arrow-right').on('click', function(){
            if(!$(this).hasClass("be-out")) swipers['swiper-'+$(this).parent().attr('id')].swipeNext();
        });

        /*==============================*/
        /* 07 - buttons, clicks, hovers */
        /*==============================*/

        // central images background
        $('.be-center-image').each(function(){
            var bgSrc = $(this).attr('src');
            $(this).parent().css({'background-image':'url('+bgSrc+')'});
            $(this).hide();
        });

        
        /*==============================*/
        /* Top menu */
        /*==============================*/
        $(".cmn-toggle-switch").on("click", function(){
            if ($(this).hasClass("active")){
                $(this).removeClass("active");
                $('body').removeClass('menu-open')
            } else{
                $(this).addClass("active");
                $('body').addClass('menu-open')
            }
            $(".header-menu").stop().slideToggle();
            $(".large-popup").slideUp();
            return false;
        });

        $(".header-menu i").on("click", function(){
            if($(window).width() < 1200){ 
                if ( $(this).hasClass("fa-angle-down") ) { 
                    $(this).removeClass("fa-angle-down"); 
                    $(this).addClass("fa-angle-up") ;
                    $(this).parent().find("ul:first").stop().slideToggle();
                }
                else { 
                    $(this).removeClass("fa-angle-up"); 
                    $(this).addClass("fa-angle-down") ;
                    $(this).parent().find("ul:first").stop().slideToggle();
                }
            }
        });

        /*================================*/
        /* MOBILE MENU navigation control */
        /*================================*/
        $('.header-menu li.menu-item-has-children,.header-menu li.page_item_has_children').each(function(){
            $(this).append('<span class="sub-menu-indicator"></span>');
        });
        $('.sub-menu-indicator').on('click', function(){
            if($(this).parent().hasClass('expanded')) {
                $(this).parent().removeClass('expanded');
                $(this).parent().find('>ul').slideUp();
            } else {
                $(this).parent().siblings().removeClass('expanded');
                $(this).parent().siblings().find('>ul').slideUp();
                $(this).parent().addClass('expanded');
                $(this).parent().find('>ul').slideDown();
            }
        });
                     
        if ($(window).width()<992) {
            $('.header-menu li.menu-item-has-children > a,.header-menu li.page_item_has_children > a').on('click', function(){
                if(!$(this).parent().hasClass('expanded')) {
                    $(this).parent().siblings().removeClass('expanded');
                    $(this).parent().siblings().find('>ul').slideUp();
                    $(this).parent().addClass('expanded');
                    $(this).parent().find('>ul').slideDown();
                    return false;
                }
            });
        }


        /*================================*/
        /* Add work button */
        /*================================*/
        if( netvars.addnew_force_disable=='1' ){
            if( $('.login-user-down').length ){
                $('header .header-menu').append('<li id="ad-work-li"><a id="add-work-btn" class="btn color-1" href="'+netvars.addnew+'">'+netvars.addnew_text+'</a></li>');
            }
            else{
                if( netvars.addnew_disable!='1' ){
                    $('header .header-menu').append('<li id="ad-work-li"><a id="add-work-btn" class="btn color-1 btn-login" href="javascript:;">'+netvars.addnew_text+'</a></li>');
                }
            }
        }


        $(".filter-block a").on("click", function(){
            $(".filter-block li").removeClass("be-active");
            if($(window).width() > 1199){ 
                $(".be-popup").fadeOut();
                $(this).parent().find(".be-popup").fadeIn();
            }
            else{
                $(".be-popup").slideUp();
                $(this).parent().find(".be-popup").slideDown();
            }
            $(this).parent().addClass("be-active");
            $(".be-fixed-filter").addClass("active-fixed");
        });
        $(".be-fixed-filter, .be-popup .fa").on("click", function(){
            $(".filter-block li").removeClass("be-active");
            if($(window).width() > 1199)
                $(".be-popup").fadeOut();
            else
                $(".be-popup").slideUp();
            $(".be-fixed-filter").removeClass("active-fixed");
        });

        //
        $(".color").on("click", function(){
            $(".color").removeClass("active-color");
            $(this).addClass("active-color");
        });

        $(".be-drop-down").on("click" ,function(){
            $(this).toggleClass("be-dropdown-active");
            $(this).find(".drop-down-list").stop().slideToggle();
        });

        $('.drop-down-list').each(function(){
            var $list = $(this);
            $list.find('a').on('click', function(){

                if( !$list.parent().hasClass('login-user-down') ){
                    $list.parent().find('.be-dropdown-content').text( $(this).text() );
                    
                    if( typeof $(this).attr('data-id')!=='undefined' ){
                        $list.parent().find('input').val( $(this).data('id') );
                        $list.parent().find('input').trigger('change');
                    }
                    else{
                        $list.parent().find('input').val( $(this).text() );
                        $list.parent().find('input').trigger('change');
                    }
                }
                
            });
        });
        
        
        //
        $(document).on('mouseleave', '.be-drop-down.be-dropdown-active', function(){
            $(this).trigger('click');
        });

        $(".login_block .btn-login, #add-work-btn.btn-login").on("click",function(){
            $(".large-popup.register").slideUp();
            $(".large-popup.login").slideToggle();
            return false;
        });

        $(".be-signup-link").on("click", function(){
            $(".large-popup.register").slideUp();
            $(".large-popup.login").slideDown();
            return false;
        });
        $(".large-popup.login .close-button").on("click", function(){
            $(".large-popup.login").slideUp();
        });

        $(".be-register").on("click",function(){
            $(".large-popup.login").slideUp();
            $(".large-popup.register").slideDown();
            return false;
        });
        $(".large-popup.register .close-button").on("click", function(){
            $(".large-popup.register").slideUp();
        });
        $(".btn-share").on("click", function(){
            $(this).find(".share-buttons").animate({width:'toggle'},350);
        });

        $(".btn-message").on("click", function(event){
            event.stopPropagation();

            var $tgt=jQuery(event.target);  

            if( $('.msg-popup-window').length ){
                
                if( $('.msg-popup-window').parent().hasClass('btn-message') ){
                    if( $tgt.is('.close-button') ){
                        $('.msg-popup-window').slideUp();
                    }
                    else{
                        $('.msg-popup-window').slideDown();
                    }
                }
                else{
                    $('.msg-popup-window').slideDown();
                    $('.msg-popup-window').off('click').find('.close-button').on('click', function(){
                        $('.msg-popup-window').slideUp();
                    });
                }

            }
            else{
                $('.msg-frontend-email').find('input[name="msg_author"]').val( $(this).data('author') );
                $('.msg-frontend-email').slideDown();
                $('.msg-frontend-email').off('click').find('.close-button').on('click', function(){
                    $('.msg-frontend-email').slideUp();
                });
            }

        });

        $(".btn-rename").on("click", function(event){
            event.stopPropagation();
            var $tgt=jQuery(event.target);
            if ($tgt.is('.close-button') ){
                  $(this).find(".message-popup").slideUp();     
                }else{
                  $(this).find(".message-popup").slideDown();
                }           
        }); 

        $(".edit-collection").on("click",function(){
            $(this).find(".c_edit").slideToggle();
            return false;
        }); 

        //scroll left menu
       $('#scrollspy').affix({
            offset: {
              top: function () { return (this.top = $('#scrollspy').offset().top-85)},
              bottom: 464
            }
        });
            

        $(".s_keywords a").eq(0).on("click",function(){
            $(this).parent().find(".color-6").fadeOut();
        })

        $(".s_keywords i").on("click",function(){
            if($(this).parent().index()!=0)
                    $(this).parent().fadeOut();
        })

        /*notification*/
        $(".messages-popup").on("click", function(){
            $(".notofications-block").hide();
            $(".messages-block").slideToggle();
            return false;
        });

        $(".notofications-popup").on("click", function(){
            $(".messages-block").hide();
            $(".notofications-block").slideToggle();

            $.post(theme_options.ajax_url, {action:'net_check_notification'}, function(data){
                if( data=='1' ){
                    $(".notofications-popup").find('span').hide();
                }
            });

            return false;
        });


        function notification(){
            $('.noto-body').css("max-height",winH-150);
        }       

        /*accordion*/
        $('.accordion').each(function(){
            $(this).find('.acc-title').on("click", function(){
                if($(this).hasClass('active')){
                    $(this).removeClass('active');
                    $(this).siblings('.acc-body').slideUp();
                } else{
                    $(this).closest('.accordion').find('.active').removeClass('active');
                    $(this).closest('.accordion').find('.acc-body').slideUp('slow');
                    $(this).toggleClass('active');
                    $(this).siblings('.acc-body').slideToggle('slow');
                }
            });
        });

        //statistic counters
        $('.counter-entry').each(function(){
            var $this = $(this);
            $this.viewportChecker({
                classToAdd: 'counted',
                offset: 100,
                callbackFunction: function(elem, action){
                    $(elem).find('.stat-number').countTo();
                }       
            });
        });


        //Tabs
        var tabFinish = 0;
        $('.nav-tab-item').on('click',  function(){
            var $t = $(this);
            if(tabFinish || $t.hasClass('active')) return false;
            tabFinish = 1;
            $t.closest('.nav-tab').find('.nav-tab-item').removeClass('active');
            $t.addClass('active');
            var index = $t.parent().parent().find('.nav-tab-item').index(this);
            $t.closest('.tab-wrapper').find('.tab-info:visible').fadeOut(500, function(){
                $t.closest('.tab-wrapper').find('.tab-info').eq(index).css('opacity', '0');
                $t.closest('.tab-wrapper').find('.tab-info').eq(index).fadeIn(200, function() {
                    tabFinish = 0;
                    if( $(this).find('.tab-info-viewport').length ){
                        $(this).find('.tab-info-viewport > .row').isotope('layout');
                    }
                    $(this).animate({ 'opacity':1 }, 200);
                });
            });
        });


        
        $('#btn_load_projects, #btn_load_likes').on('click', function(){
            var _btn = $(this);
            var _parent = _btn.parents('.tab-info');
            var _encrypted = _btn.next();
            var _type = _btn.hasClass('btn_load_projects') ? 'projects' : 'liked';

            $(".be-loader").fadeIn("slow");
            $.post(theme_options.ajax_url, {action: 'net_get_pager_folios', type: 'projects', encrypt_args: _encrypted.html()}, function(data){
                var _json = $.parseJSON(data);
                if( typeof _json!=='undefined' ){
                    if( parseInt(_json.count, 10)>0 ){
                        var _html = $('<div/>').append(_json.result);

                        _html.imagesLoaded().always( function( instance ) {
                            _html.find('>div').each(function(){
                                _parent.find('.tab-info-viewport > .row').append( $(this) ).isotope( 'appended', $(this) );
                            });
                            _parent.find('.tab-info-viewport > .row').isotope('layout');
                        });

                        _encrypted.html( _json.args );
                    }
                    else{
                        _btn.hide();
                    }
                }

                $(".be-loader").fadeOut("fast");
            });
        });
        

        $('.select-all').change( function(){
            if($(this).prop('checked')) {
                $(this).closest('form').find('.noto-entry .form-checkbox input').prop('checked',true);
            } else {
                $(this).closest('form').find('.noto-entry .form-checkbox input').prop('checked',false);         
            }           
        });


        var custom_section_id = 1;
        $("a.add_section").on("click",function(){

            $(".creative_filds_block ul").append("<li><a href='#"+custom_section_id+"'>New section</a>");
            var $csection = $('#tpl-custom-section').clone();
            $csection.find('.custom-section-block').attr('id', 'cs-' + custom_section_id);
            $(this).before( $csection.html() );
            
            $("#scrollspy li a[href^='#']").on('click', function(e) {
               e.preventDefault();
               var hash = this.hash;
               $('html, body').animate({
                   scrollTop: $(this.hash).offset().top
                 }, 1200, function(){
                   window.location.hash = hash;
                 });
               return false;
            });

            $(".creative_filds_block ul li:last-child a")[0].trigger('click');

            $(".close-w").off('click').on("click",function(){
                var id = $(this).parent().parent().parent().attr("id");
                $(this).parent().parent().parent().fadeOut();
                $(".creative_filds_block a").each(function(){
                    if($(this).attr("href") == "#" + id){
                        $(this).parent().fadeOut();
                    }
                });
            });
            custom_section_id++;
        });

        $(".close-w").on("click",function(){
            var id = $(this).parent().parent().parent().attr("id");
            $(this).parent().parent().parent().remove();
            $(".creative_filds_block a").each(function(){
                if($(this).attr("href") == "#" + id){
                    $(this).parent().fadeOut();
                }
            });
        });



        $('.m-close').on('click', function() {
            $('.noto-popup').slideUp();
        });


        $('.s-color').on('click', function() {
                $('.s-color').removeClass('active');
                $(this).addClass('active');
        });


        $('.open-custom').on('click', function (e) {
            e.preventDefault();
            $(this).next('.inner-filter-info').fadeToggle();
        });

        


        // Navigation Handler
        $('.en-nav').on('click', function (e) {
            e.preventDefault();
            $('.en-nav').removeClass('active');
            $(this).addClass('active');
        });

        // Show Content
        $('#content-w').on('click', function (e) {
            $('.cover-popup').add('.setting-popup').fadeOut();

            $('#tt_frontend_prev').hide();
            $('#tt_frontend_next').show();
        });

        // Cover Popup
        $('#cover-w').on('click', function (e) {
            $('.cover-popup').fadeIn();
            $('.setting-popup').fadeOut();

            $('html,body').animate({
                scrollTop: $('.cover-popup .cover-box').offset().top-100
            }, 'slow');

            $('.cover-popup').find('textarea').val( $('#tt_fontend_title').html() );
            $('.cover-popup').find('.btn-success').off('click').on('click', function(){
                $('#tt_fontend_title').html( $('.cover-popup').find('textarea').val() );
                $('#setting-w').trigger('click');
            });

            $('.cover-popup').find('.btn-cancel').off('click').on('click', function(){
                $('#content-w').trigger('click');
            });

            $('#tt_frontend_prev').show();
            $('#tt_frontend_next').show();
        });

        // Settings Popup
        $('#setting-w').on('click', function (e) {
            $('.cover-popup').fadeOut();
            $('.setting-popup').fadeIn();

            $('html,body').animate({
                scrollTop: $('.setting-popup .cover-box').offset().top-100
            }, 'slow');

            $('.setting-popup').find('.btn-cancel').off('click').on('click', function(){
                $('#content-w').trigger('click');
            });

            $('.setting-popup').find('.btn-success').off('click').on('click', function(){
                $('#tt_frontend_save').trigger('click');
            });

            $('#tt_frontend_prev').show();
            $('#tt_frontend_next').hide();
        });


        // Top Navigation
        $('#tt_frontend_prev').on('click', function(){
            var _active = $('.editor-nav').find('.en-nav').index( $('.editor-nav').find('.en-nav.active') );
            if( _active>0 ){
                $('.editor-nav').find('.en-nav').eq(_active-1).trigger('click');
            }
        });
        $('#tt_frontend_prev').hide();

        $('#tt_frontend_next').on('click', function(){
            var _active = $('.editor-nav').find('.en-nav').index( $('.editor-nav').find('.en-nav.active') );
            if( _active<2 ){
                $('.editor-nav').find('.en-nav').eq(_active+1).trigger('click');
            }
        });


        if( $('#post_id').val()!='' && parseInt($('#post_id').val(), 10)>0 ){
            $('#tt_frontend_save').show();
        }
        else{
            $('#tt_frontend_save').hide();
        }





        $('#edit-brand, #edit-tools, #edit-copyright').on('click', function(){
            var $this = $(this);

            $('.mini-popup-wrapper').fadeOut();

            $('.extra-popup').find('h3').html( $(this).html().replace('+ ', '') );
            $('.extra-popup').find('.mini-popup-text').val( $this.parent().find('input').val() );
            $('.extra-popup').fadeIn();

            $('.extra-popup').find('button').off('click').on('click', function(){
                $this.parent().find('.grey').html( $('.extra-popup').find('.mini-popup-text').val() + ' ...' );
                $this.parent().find('input').val( $('.extra-popup').find('.mini-popup-text').val() );
                $('.mini-popup-wrapper').fadeOut();
            });
        });

        $('#edit-color').on('click', function(){
            var $this = $(this);
            var _cur_val = $this.parent().find('input').val();
            _cur_val = _cur_val!='' ? '.' + _cur_val : '.no-class';

            $('.mini-popup-wrapper').fadeOut();
            $('.color-popup').find('.mini-popup').css('max-width','436px');
            $('.color-popup').find('.active-color').removeClass('active-color');
            $('.color-popup').find(_cur_val).addClass('active-color');
            $('.color-popup').fadeIn();
            
            $('.color-popup').find('li.color').off('click').on('click', function(){
                var _class = $(this).attr('class');
                _class = _class.replace('color filter ', '').replace(' active-color', '');
                $this.parent().find('.grey').html( _class + ' <span>...</span>' );
                $this.parent().find('.grey').find('span').addClass(_class);
                $this.parent().find('input').val( _class );
                $('.mini-popup-wrapper').fadeOut();
            });

        });



        $('.close-mini').on('click', function (e) {
            $(this).closest('.mini-popup-wrapper').fadeOut();
        });

        $('.close-media').on('click', function (e) {
            $('.embed').slideUp();
        });



        //MIX UP
        if($('#container-mix').length) {
            $('#container-mix').mixItUp(
                {
                    animation: {
                        duration: 400,
                        effects: 'fade translateZ(-360px) stagger(34ms)',
                        easing: 'ease'
                    }
                }
            );};



        $('.popup-gallery').length && $('.popup-gallery').magnificPopup({
            delegate: 'a.popup-a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                }
            }
        });









        var _embed_tools = '<div class="entry-tools"> \
                                <a href="javascript:;" class="el-move"><i class="fa fa-arrows"></i></a> \
                                <a href="javascript:;" class="el-close"><i class="fa fa-close"></i></a> \
                            </div>';


        var _embed_tools_handler = function(){
            $('#tt_frontend_content').find('.tt-el-embed').each(function(){
                var $el = $(this);
                $el.find('.el-close').on('click', function(){
                    $el.remove();
                });
            });

            if( $('#tt_frontend_content').length ){
                $('#tt_frontend_content').sortable({
                    handle: ".el-move",
                    placeholder: "tt-el-embed-placeholder"
                });
            }
        };


        var _build_embed_image = function(){
            var send_attachment_bkp = wp.media.editor.send.attachment;
            wp.media.editor.send.attachment = function(props, attachment){
                wp.media.editor.send.attachment = send_attachment_bkp;

                var _el = '<div class="tt-el-embed tt-el-embed-image has-image"> \
                                <div class="entry-image"></div> \
                            </div>';
                var $el = $(_el);
                $el.append(_embed_tools);

                $el.find('.entry-image').html( '<img src="'+attachment.url+'">' );
                $el.find('.entry-image').attr('data-img', attachment.id);

                $('#tt_frontend_content').append( $el );
                _embed_tools_handler();
            }
            wp.media.editor.open();
        };


        var _build_embed_text = function(_text){
            var _el = '<div class="tt-el-embed tt-el-embed-text"> \
                            <div class="entry-text" contenteditable="true"></div> \
                        </div>';
            var $el = $(_el);
            $el.append(_embed_tools);
            $el.find('.entry-text').html(_text);

            $('#tt_frontend_content').append( $el );
            _embed_tools_handler();
        };


        var _build_embed_media = function(_embed){
            var _el = '<div class="tt-el-embed tt-el-embed-media"> \
                            <div class="entry-embed"></div> \
                        </div>';
            var $el = $(_el);
            $el.append(_embed_tools);
            $el.find('.entry-embed').html( _embed );

            $('#tt_frontend_content').append( $el );
            _embed_tools_handler();
        };



        $('.embed_components').find('a.embed_com_image').on('click', function(){
            _build_embed_image();
        });

        $('.embed_components').find('a.embed_com_media').on('click', function(){
            $('.tpl-embed').slideDown();
        });

        $('.embed_components').find('a.embed_com_text').on('click', function(){
            _build_embed_text('Compellingly redefine timely interfaces vis-a-vis proactive web-readiness. Objectively synthesize impactful markets with client-centric channels. Proactively target granular meta-services via.');
        });


        // Embed form button handler
        $('#submit_embed_media').on('click', function(){
            var $txtarea = $(this).parent().find('.main-textarea');
            var _html = $txtarea.val();
            var $obj = $('<div>').append( $(_html) );
            if( $obj.find('iframe, object').length ){
                _build_embed_media( $obj.html() );
                $('.tpl-embed').slideUp();
            }
            else{
                alert('Invalid embed content!');
            }
        });



        var _custom_styles = {
            divider: $('.inner-filter-info input[name="divider"]:checked').val(),
            space: $("#amount").val(),
            padding: $("#amount-h").val(),
            color: $('#divider_color').val(),
            bg: $('#bg_color').val(),
            text: $('#text_color').val()
        }

        var _build_custom_style = function(){
            if( $('#custom_tag_style').length ){
                $('#custom_tag_style').remove();
            }

            var _style = '';

            _style += '#tt_frontend_content .tt-el-embed + .tt-el-embed { \
                            border-top-width: 1px; \
                            '+ (_custom_styles.color!='inherit' && _custom_styles.color!='' ? 'border-top-color:'+_custom_styles.color+';' : '') +' \
                            border-top-style: '+_custom_styles.divider+'; \
                            margin-top: '+_custom_styles.space+'px; \
                            padding-top: '+_custom_styles.space+'px; \
                       } ';

            _style += '#tt_frontend_content { \
                            padding-top: '+_custom_styles.padding+'px; \
                            padding-bottom: '+_custom_styles.padding+'px; \
                       } ';

            // background color
            if( _custom_styles.bg!='inherit' && _custom_styles.bg!='' ){
                _style += '#tt_frontend_container { \
                                background-color: '+_custom_styles.bg+'; \
                           } ';
            }

            // text color
            if( _custom_styles.text!='inherit' && _custom_styles.text!='' ){
                _style += '#tt_frontend_content .tt-el-embed-text .entry-text { \
                                color: '+_custom_styles.text+'; \
                           } ';
            }

            $('head').append('<style type="text/css" id="custom_tag_style">'+_style+'</style>');

        };


        // Divider Options
        if($('#slider-range-max').length) {
            
            $( "#slider-range-max").slider({
                range: "max",
                min: 0,
                max: 100,
                value: $("#amount").val(),
                slide: function( event, ui ) {
                    $( "#amount" ).val( ui.value );
                    _custom_styles.space = ui.value;
                    _build_custom_style();
                }
            });
            $( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );

            $( "#slider-head" ).slider({
                range: "max",
                min: 0,
                max: 100,
                value: $("#amount-h").val(),
                slide: function( event, ui ) {
                    $( "#amount-h" ).val( ui.value );
                    _custom_styles.padding = ui.value;
                    _build_custom_style();
                }
            });
            $( "#amount-h" ).val( $( "#slider-head" ).slider( "value" ) );


            // Divider Colors & Types
            $('.inner-filter-info input[name="divider"]').on('change', function(){
                _custom_styles.divider = this.value;
                _build_custom_style();
            });
            
            $('.color-i').length && $('.color-i').colorPicker();

            $('#divider_color').colorPicker();
            $('#divider_color').on('change', function(){
                _custom_styles.color = this.value;
                _build_custom_style();
            });

            $('#bg_color').colorPicker();
            $('#bg_color').on('change', function(){
                _custom_styles.bg = this.value;
                _build_custom_style();
            });

            $('#text_color').colorPicker();
            $('#text_color').on('change', function(){
                _custom_styles.text = this.value;
                _build_custom_style();
            });


        }


        $('#tt_frontend_cats').each(function(){
            $(this).select2({
                maximumSelectionSize: 3
            });
        });


        // Check content
        if( $('#tt_frontend_content').find('.tt-el-embed').length<1 ){
            var _html = $('#tt_frontend_content').html();
            $('#tt_frontend_content').html('');
            _build_embed_text(_html);
        }

        // Set events for handlers
        _embed_tools_handler();
        _build_custom_style();


        $('.tt-el-embed-image').each(function(){
            var $el = $(this);

            $el.find('.browse-media').on('click', function(){
                var send_attachment_bkp = wp.media.editor.send.attachment;
                wp.media.editor.send.attachment = function(props, attachment){
                    wp.media.editor.send.attachment = send_attachment_bkp;
                    $el.find('.entry-image').html( '<img src="'+attachment.url+'">' );
                    $el.find('.entry-image').attr('data-img', attachment.id);
                    $el.addClass('has-image');
                }
                wp.media.editor.open();
            });

        });


        $('.tt-frontend-cover-upload').on('click', function(){
            var $btn = $(this);
            var send_attachment_bkp = wp.media.editor.send.attachment;
            wp.media.editor.send.attachment = function(props, attachment){
                wp.media.editor.send.attachment = send_attachment_bkp;
                $btn.parent().find('.tt-frontend-cover-img').html( '<img src="'+attachment.url+'">' );
                $btn.parent().find('.tt-frontend-cover-img').attr('data-img', attachment.id);
            }
            wp.media.editor.open();
        });


        // frontend save post
        $('#tt_frontend_save').on('click', function(){

            if( typeof $('.tt-frontend-cover-img').data('img')==='undefined' ){
                $('#cover-w').trigger('click');
                return false;
            }

            if( $('#tt_frontend_content').find('.tt-el-embed').length<1 ){
                $('#content-w').trigger('click');
                return false;
            }

            if( $('#tt_frontend_cats').val()==null ){
                $('#setting-w').trigger('click');
                return false;
            }

            var _contents = '';

            $('#tt_frontend_content').find('.tt-el-embed').each(function(){
                var $el = $(this);

                if( $el.hasClass('tt-el-embed-image') && $el.hasClass('has-image') ){
                    _contents += '[tt_image id="'+ $el.find('.entry-image').data('img') +'"]';
                }
                else if( $el.hasClass('tt-el-embed-text') ){
                    _contents += '[tt_text]'+ $el.find('.entry-text').html() +'[/tt_text]';
                }
                else if( $el.hasClass('tt-el-embed-media') ){
                    _contents += '[tt_embed]'+ $el.find('.entry-embed').html() +'[/tt_embed]';
                }



            });

            var data_options = {
                action: 'net_frontend_content',
                post: $('#post_id').val(),
                title: $('#tt_fontend_title').html(),
                content: _contents,
                cover: $('.tt-frontend-cover-img').data('img'),
                cats: $('#tt_frontend_cats').val(),
                tags: $('#tt_frontend_tags').val(),
                desc: $('#tt_frontend_excerpt').val(),
                extra: {
                    brand: $('#tt_extra_brand').val(),
                    tools: $('#tt_extra_tools').val(),
                    color: $('#tt_extra_color').val(),
                    copyright: $('#tt_extra_copyright').val(),
                    adult: $('#tt_extra_adult:checked').length ? 'adult' : ''
                },
                custom_styles: _custom_styles
            }
            

            $(".be-loader").fadeIn("slow");
            $.post(theme_options.ajax_url, data_options, function(response){

                if( response!='' && response.indexOf('http')>-1 ){
                    window.location.href = response;
                }
                else{
                    $(".be-loader").fadeOut("slow");
                    alert('Please check contents and try again!');
                }
            });
            

        });

        


        // Chart Statistics
        $('.stat-chartjs').each(function(){
            var $this = $(this);
            var $chart = $this.find('.chart-viewport');
            var $json = $.parseJSON( $this.find('.chart-data').html() );

            var chart_option = {
                title: {
                    text: $this.find('.chart-data').data('label')
                },
                animationEnabled: true,
                axisY: {
                    includeZero: false
                },
                axisX: {
                    interval: 1
                },
                data: [
                    {
                        type: "spline", //change it to line, area, column, pie, etc
                        dataPoints: $json
                    }
                ]
            };

            $chart.CanvasJSChart(chart_option);

        });




        if( $('.single_add_to_cart_button').length ){
            $('.single_add_to_cart_button').addClass('btn color-1 size-2 hover-1').removeClass('button');
        }
        if( $('.woocommerce #review_form #respond .form-submit input').length ){
            $('.woocommerce #review_form #respond .form-submit input').addClass('btn color-1 size-2 hover-1');
        }

        

    });


})(jQuery);