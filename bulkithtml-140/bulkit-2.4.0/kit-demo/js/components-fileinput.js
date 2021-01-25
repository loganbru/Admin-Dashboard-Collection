/*! components-fileinput.js | Bulkit | CSS Ninja */

/* ==========================================================================
File input component core
========================================================================== */

$(document).ready(function($){
    
    "use strict";
    
    //declare variables
    var inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input )
                                 {
        var label	 = input.nextElementSibling,
            labelVal = label.innerHTML;
        
        //listen to changes
        input.addEventListener( 'change', function( e )
                               {
            var fileName = '';
            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else
                fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
                label.querySelector( 'span' ).innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });
    });

    var inputField = document.querySelectorAll('.field-input')

    for (var i = 0, len = inputField.length; i < len; i++) {
        customInput(inputField[i])
    }
    //Create custom input
    function customInput (el) {
        const fileInput = el.querySelector('[type="file"]')
        const label = el.querySelector('[data-js-label]')

        fileInput.onchange =
            fileInput.onmouseout = function () {
            if (!fileInput.value) return

            var value = fileInput.value.replace(/^.*[\\\/]/, '')
            el.className += ' -chosen'
            label.innerText = value
        }
    }

})