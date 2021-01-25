(function($) {
    "use strict";


    $(document).ready(function(){
        
        $('#customize-footer-actions').append('<a href="javascript:;" id="customizer_reset_options"><i class="dashicons dashicons-backup"></i> Reset</a>');
        $('#customizer_reset_options').on('click', function(){
            var $this = $(this);
            if( $this.hasClass('loading') )
                return false;
            
            var dialog = confirm("Reset Options?");
            if( dialog ){
                $this.addClass('loading');
                jQuery.post( ajaxurl, { 'action':'wp_customizer_reset', 'reset_option': "1" }, function(data){
                    if( data == "1" ){
                        window.location.reload();
                    }
                    else{
                        $this.removeClass('loading');
                        alert('Something is wrong');
                    }
                });
            }
        });


        $('.checkbox_switcher').each(function(){
            var $this = $(this);
            $this.on('click', function(event){
                $(this).toggleClass("on");
                event.preventDefault();

                var controllerName = $(this).data('controller');
                var controller = wp.customize.control.instance(controllerName);
                if( $(this).hasClass('on') )
                    controller.setting.set("1");
                else
                    controller.setting.set("0");
            });
        });


        $('.customizer-select-box').each(function(){
            var $this = $(this);
            var $value = $this.data('value');
            if( $value!="" )
                $this.val($value).change();
        });


        $('input.customizer-control-number').numeric();


        $('.customizer-number-pixels').each(function(){
            var controllerName = $(this).find('input').data('controller');
            $(this).find('input').on('change', function(){
                var controller = wp.customize.control.instance(controllerName);
                controller.setting.set( $(this).val()+'px' );
            })
        });



        // font set control
        $('.tt-customizer-font-set').each(function(){
            var $this = $(this);
            var controllerName = $(this).data('controller');
            $this.find('select').on('change', function(){
                var $fam = $this.find('select.customizer-font-family');
                var $size = $this.find('select.customizer-font-size');
                var $weight = $this.find('select.customizer-font-weight');
                
                var $val = $fam.data('key') + ":" + $fam.val();
                $val += '|' + $size.data('key') + ":" + $size.val();
                $val += '|' + $weight.data('key') + ":" + $weight.val();

                var controller = wp.customize.control.instance(controllerName);
                controller.setting.set($val);
            })
        });


        // Font control
        $('.customizer-font-label').each(function(){
            var $this = $(this);
            var controllerName = $(this).find('select').data('controller');
            $(this).find('select').on('change', function(){
                var controller = wp.customize.control.instance(controllerName);
                controller.setting.set( $(this).val() );
            });
        });


        // Import options
        $('#customizer_options_import').on('click', function(){
            var $this = $(this);
            $this.parent().find('.customizer-option-loading').css('visibility', 'visible');
            jQuery.post( ajaxurl, { 'action':'wp_customizer_import', 'import_options': $('#customizer_import_control').val() }, function(data){
                if( data == "1" ){
                    $this.parent().find('.customizer-option-loading').css('visibility', 'hidden');
                    window.location.reload();
                }
                else{
                    $this.parent().find('.customizer-option-loading').css('visibility', 'hidden');
                    $('#customizer_import_control').val('');
                    alert('Please check import options data!');
                }
            });
        });


        // Customizer Custom Control - Media Manager
        wp.media.customizerMediaManager = {

            init: function() {
                // Create the media frame.
                this.frame = wp.media.frames.customizerMediaManager = wp.media({
                    title: 'Choose Image',
                    library: {
                        type: 'image'
                    },
                    button: {
                        text: 'Insert Image',
                    }
                });

                $('.open-media-manager').on('click', function( event ) {
                    wp.media.customizerMediaManager.$el = $(this);
                    var controllerName = $(this).data('controller');
                    event.preventDefault();

                    wp.media.customizerMediaManager.frame.open();
                });

                $('.customizer-bg-options select').each(function(){
                    var $select = $(this);
                    var $parent = $(this).parent().parent();
                    var $thumb = $(this).parent().parent().find('.media-manager-thumb');
                    $select.on('click', function(){
                        if( $thumb.data('value')!='' ){
                            var $val = $thumb.data('value');
                            $val += "|" + $select.parent().find('.customizer-bg-repeat').val();
                            $val += "|" + $select.parent().find('.customizer-bg-position').val();
                            $val += "|" + $select.parent().find('.customizer-bg-attach').val();

                            var controllerName =$thumb.data('controller');
                            var controller = wp.customize.control.instance(controllerName);
                            controller.setting.set($val);
                        }
                    });
                });

                this.frame.on( 'select', function() {
                    // Grab the selected attachment.
                    var $el = wp.media.customizerMediaManager.$el;
                    var attachment = wp.media.customizerMediaManager.frame.state().get('selection').first(),
                        controllerName = wp.media.customizerMediaManager.$el.data('controller');
                     
                    var controller = wp.customize.control.instance(controllerName);

                    $el.data('value', attachment.attributes.url);
                    $el.parent().find('span.media-manager-thumb').css('background-image', 'url('+attachment.attributes.url+')');

                    if( $el.parent().hasClass('customizer-media-bg') ){
                        var $val = $el.data('value');
                        $val += "|" + $el.parent().find('.customizer-bg-repeat').val();
                        $val += "|" + $el.parent().find('.customizer-bg-position').val();
                        $val += "|" + $el.parent().find('.customizer-bg-attach').val();
                        controller.setting.set($val);
                    }
                    else{
                        controller.setting.set(attachment.attributes.url);
                    }
                });

                $('.customizer-media-manager a.remove').on('click', function( event ) {
                    var $thumb = $(this).parent().find('.media-manager-thumb');
                    $thumb.css('background-image', '');
                    $thumb.data('value', '');

                    var controllerName =$thumb.data('controller');
                    var controller = wp.customize.control.instance(controllerName);
                    controller.setting.set("");
                });
                 
            }
        };

        wp.media.customizerMediaManager.init();
        
    });

    
 
}(jQuery));