
jQuery(function($){
	
    $('.form-table td fieldset.templates-layouts label').on('click', function(){
        $('.form-table td fieldset.templates-layouts label').removeClass('active');
        $(this).addClass('active');
    });

    $('.form-table td fieldset.templates-layouts label').eq(0).trigger('click');
    //alert( $('input[name="template"]:checked').val() );

});