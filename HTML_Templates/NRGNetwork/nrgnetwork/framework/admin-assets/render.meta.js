
jQuery(function(){
    // init color picker
    jQuery('.tt_wpcolorpicker').wpColorPicker({
        palettes: [
                    '#16a085', '#27ae60', '#2980b9', '#8e44ad', '#f39c12',
                    '#f39c12','#d35400', '#c0392b', '#bdc3c7', '#7f8c8d'
                ]
    });
    


    /* init select field
    ==========================================*/
    jQuery('.tt_wpselectbox').each(function(){
        var $this = jQuery(this);



        $this.on('change', function(){
            var $select = jQuery(this);
            var _id = $this.attr('id');
            var $dep = jQuery('div[data-dependency="'+_id+'"]');
            
            if( $dep.length ){
                $dep.each(function(){
                    var _value = $select.val();
                    var _val = jQuery(this).data('dep-value');
                    var _val_arr = _val.split(' ');
                    var _exists = false;
                    for(var i=0; i<_val_arr.length; i++){
                        if( _val_arr[i]==_value ){
                            _exists = true;
                        }
                    }
                    if( _exists ){
                        jQuery(this).show();
                    }
                    else{
                        jQuery(this).hide();
                    }
                });
            }
        });
        


        defval = $this.attr('default-value');
        if( $this.find('option[value="'+defval+'"]').length>0 ){
            $this.val(defval).change();
        }
        else{
            $this.find('option').eq(0).attr('selected', 'selected');
            $this.change();
        }

    });


    
    /* init browse button
    ==========================================*/
    jQuery('.pmeta_item_browse .pmeta_button_browse').each(function(){
        var $this = jQuery(this);
        if($this.parent().find('input').val()!=''){
            $this.parent().find('.browse_preview').find('a').off('click')
                .on('click', function(){
                    $this.parent().find('.browse_preview').html('');
                    $this.parent().find('input').val('');
                    $this.parent().find('.browse_preview').hide();
                    $this.parent().find('input').change();
                });
            $this.parent().find('.browse_preview').show();
        }
        
        jQuery(this).on('click', function(){
            var send_attachment_bkp = wp.media.editor.send.attachment;
            wp.media.editor.send.attachment = function(props, attachment){
                wp.media.editor.send.attachment = send_attachment_bkp;
                $this.parent().find('input').val(attachment.url);
                $this.parent().find('.browse_preview').html('<img src="'+attachment.url+'" />');
                $this.parent().find('.browse_preview').append('<a href="javascript:;">Remove</a>');
                $this.parent().find('.browse_preview').find('a').off('click')
                    .on('click', function(){
                        $this.parent().find('.browse_preview').html('');
                        $this.parent().find('input').val('');
                        $this.parent().find('.browse_preview').hide();
                        $this.parent().find('input').change();
                    });
                $this.parent().find('input').change();
                $this.parent().find('.browse_preview').show();
            }
            wp.media.editor.open();
            
            return false;
        });
    });

    /* init background
    ==========================================*/
    jQuery('.pmeta_item_background .pmeta_button_browse').each(function(){
        var $this = jQuery(this);
        if($this.parent().find('.bg_image_url').val()!=''){
            $this.parent().find('.browse_preview').find('a').off('click')
                .on('click', function(){
                    $this.parent().find('.browse_preview .preview_sample').css('background-image', '');
                    $this.parent().find('.bg_image_url').val('');
                    $this.parent().find('.bg_hidden_value').val('');
                    $this.parent().find('.browse_preview').hide();
                    $this.parent().find('.background-controlls').hide();
                    $this.parent().find('input').change();
                });
            $this.parent().find('.browse_preview').show();
            $this.parent().find('.background-controlls').show();
        }

        $this.parent().find('.bg_image_repeat').change(function(){
            if( $this.parent().find('.bg_image_url').val() != '' ){
                var val = '';
                val += $this.parent().find('.bg_image_url').val();
                val += '$' + $this.parent().find('.bg_image_repeat').val();
                val += '$' + $this.parent().find('.bg_image_position').val();
                val += '$' + $this.parent().find('.bg_image_attach').val();
                $this.parent().find('.bg_hidden_value').val(val);
            }
        });
        $this.parent().find('.bg_image_position').change(function(){
            $this.parent().find('.bg_image_repeat').trigger('change');
        });
        $this.parent().find('.bg_image_attach').change(function(){
            $this.parent().find('.bg_image_repeat').trigger('change');
        });
        
        jQuery(this).on('click', function(){
            var send_attachment_bkp = wp.media.editor.send.attachment;
            wp.media.editor.send.attachment = function(props, attachment){
                wp.media.editor.send.attachment = send_attachment_bkp;
                $this.parent().find('.bg_image_url').val(attachment.url);

                $this.parent().find('.browse_preview .preview_sample').css('background-image', 'url('+attachment.url+')');
                $this.parent().find('.browse_preview').find('a').off('click')
                    .on('click', function(){
                        $this.parent().find('.browse_preview .preview_sample').css('background-image', '');
                        $this.parent().find('.bg_image_url').val('');
                        $this.parent().find('.bg_hidden_value').val('');
                        $this.parent().find('.browse_preview').hide();
                        $this.parent().find('.background-controlls').hide();
                        $this.parent().find('input').change();
                    });

                $this.parent().find('.bg_image_repeat').trigger('change');
                $this.parent().find('input').change();
                $this.parent().find('.browse_preview').show();
                $this.parent().find('.background-controlls').show();
            }
            wp.media.editor.open();
            
            return false;
        });
    });
    

    jQuery('.pmeta_gallery .pmeta_button_browse').each(function(){
        var $this = jQuery(this);
        var $parent = $this.parent();
        var $input = $parent.find('.gallery_images');

        $this.on('click', function(){

            blox_media( $input.val()!='' ? 'gallery-edit' : 'gallery-library', 'Add/Edit Gallery', $input.val(), function(selection){
                $counter = 0;
                $input.val('');
                $parent.find('.gallery_images_preview').html('');
                
                values = selection.map( function( attachment ){
                    element = attachment.toJSON();
                    $input.val($input.val()+($counter==0 ? '' : ',')+element.id);
                    $parent.find('.gallery_images_preview').append('<span style="background-image: url('+element.url+');"></span>');
                    $counter++;
                });
            });
            return false;
        });

        $parent.find('.pmeta_remove').on('click', function(){
            $input.val('');
            $parent.find('.gallery_images_preview').html('');
        });
    });

    


    /* Video browse button
    ==========================================*/
    jQuery('.pmeta_video .pmeta_button_browse').each(function(){
        var $this = jQuery(this);
        var $parent = $this.parent();

        $this.on('click', function(){
            blox_media('blox_insert_video', 'Videos', '', function(selection){
                values = selection.map( function( attachment ){
                            element = attachment.toJSON();
                            $parent.find('input').val(element.url);
                            $parent.find('input').change();
                        });
            });
        });
    });

    
    /* Font Options
    ==========================================*/
    jQuery('.pmeta_item_font .pmeta_button_font').each(function(){
        $this = jQuery(this);
        jQuery(this).on('click', function(){
            themeton_get_font( jQuery(this).parent().find('input') );
        });
    });


    /* thumbnails click event
    ==========================================*/
    jQuery('.page_option_field_thumbs').each(function(){
        var $this = jQuery(this);
        $this.find('label').on('click', function(){
            $this.find('label img').removeClass('active');
            jQuery(this).find('img').addClass('active');
        });
    });





    /* blox switcher event
    ==========================================*/
    jQuery('.blox_switcher').each(function(){
        var $this = jQuery(this);


        $this.find('input').on('change', function(){
            var $input = jQuery(this);
            var _id = $input.attr('id');
            var $dep = jQuery('div[data-dependency="'+_id+'"]');
            
            if( $dep.length ){
                $dep.each(function(){
                    if( jQuery(this).data('dep-value')==$input.val() ){
                        jQuery(this).show();
                    }
                    else{
                        jQuery(this).hide();
                    }
                });
            }
        });
        $this.find('input').trigger('change');


        $this.on('click', function(){
             $this.toggleClass("on");
             if( $this.hasClass('on') ){
                $this.find('input').val('1').trigger('change');
             }
             else{
                $this.find('input').val('0').trigger('change');
             }
        });
    });


    
});