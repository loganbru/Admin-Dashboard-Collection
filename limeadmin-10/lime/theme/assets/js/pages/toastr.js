$(document).ready(function() {
    
    "use strict";
    
    $('#successToast').on('click', function(){
        toastr.success('Are you the 6 fingered man?')
    });
    
    $('#infoToast').on('click', function(){
        toastr.info('I do not think that means what you think it means.')
    });
    
    $('#warningToast').on('click', function(){
        toastr.warning('Inconceivable!')
    });
    
    $('#dangerToast').on('click', function(){
        toastr.error('Have fun storming the castle!')
    });
});