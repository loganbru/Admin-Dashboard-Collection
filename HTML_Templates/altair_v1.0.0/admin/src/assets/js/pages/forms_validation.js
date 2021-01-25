/*
*  Altair Admin
*  forms_validation.js (forms_validation.html)
*
*  require altair_forms.parsley_validation_config(); ( altair_admin_common.js )
*/

$(function() {
    // validation (parsley)
    altair_form_validation.init();
});

// validation (parsley)
altair_form_validation = {
    init: function() {
        var $formValidate = $('#form_validation');

        $formValidate.parsley({
                errorClass: 'md-input-danger',
                successClass: 'md-input-success'
            })
            .on('parsley:form:validated',function() {
                altair_md.update_input($formValidate.find('.md-input-danger'));
            })
            .on('parsley:field:validated',function(parsleyField) {
                if($(parsleyField.$element).hasClass('md-input')) {
                    altair_md.update_input( parsleyField.$element );
                }
            })
        ;
    }
};