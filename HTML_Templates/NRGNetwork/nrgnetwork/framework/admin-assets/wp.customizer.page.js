(function($) {
    "use strict";


    $(document).ready(function(){

        $('#save').after('<a href="javascript:;" id="save_custom_page" class="button button-primary">Save Page Style</a>');
        $('#save').hide();
        $('#save_custom_page').on('click', function(){
            if( $('body').hasClass('saving') )
                return false;
            var api = wp.customize;
            var dirtyCustomized = {};
            api.each( function ( value, key ) {
                if ( value._dirty ) {
                    dirtyCustomized[ key ] = value();
                }
            });
            $('body').addClass('saving');
            $.post(page_customizer.admin_ajax, { action: "tt_page_customizer", page_id:page_customizer.page_id, customized: JSON.stringify(dirtyCustomized) }, function(){
                $('body').removeClass('saving').addClass('saved');
                window.location.reload();
            });
        });
        
    });

    
 
}(jQuery));