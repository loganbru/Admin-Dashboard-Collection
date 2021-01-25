$(function(){
   'use strict'
			         
	 $('.eval-js100').on('click', function ( e ) {
		 e.preventDefault();

		 if ( !$(this).hasClass('generate-toast') ) {
			 var code = $(this).siblings('pre').find('code').text();
			 code.replace("<span class='hidden'>", '');
			 code.replace("<\/span");

			 eval( code );
		 };
	 });

	 $('#icon-type').on('change', function () {
		 if ( !$(this).val() ) {
			 $('.custom-color-info').show();
			 $('.toast-icon-line').hide();
			 $('.toast-bgColor-line').show();
			 $('.toast-textColor-line').show();
		 } else {
			 $('.toast-icon-line').show();
			 $('.custom-color-info').hide();
			 $('.toast-bgColor-line').hide();
			 $('.toast-textColor-line').hide();
			 $('.toast-icon-line span.toast-icon').text( $(this).val() );
		 }
	 });

	 // You are about to see some extremely horrible code that can be MUCH MUCH improved,
	 // I've knowlingly done it that way, please don't judge me based upon this ;)
	 $(document).ready(function () {
		 
		 function generateCode () {
			 var text = $('.plugin-options #toast-text').val(); 
			 var heading = $('.plugin-options #toast-heading').val(); 
			 var transition = $('.toast-transition').val(); 
			 var allowToastClose = $('#allow-toast-close').val(); 
			 var autoHide = $('#auto-hide-toast').val(); 
			 var stackToasts = $('#stack-toasts').val(); 
			 var toastPosition = $('#toast-position').val() 
			 var toastBg = $('#toast-bg').val(); 
			 var toastTextColor = $('#toast-text-color').val();
			 var toastIcon = $('#icon-type').val();
			 var textAlign = $('#text-align').val();
			 var toastEvents = $('#add-toast-events').val();
			 var loader = $('#show-loader').val();
			 var loaderBg = $('#loader-bg').val();

			 if ( text ) {
				 $('.toast-text-line').show(); 
				 $('.toast-text-line .toast-text').text( text ); 
			 } else {
				 $('.toast-text-line').hide() 
				 $('.toast-text-line .toast-text').text(''); 
			 };

			 if ( heading ) {
				 $('.toast-heading-line').show(); 
				 $('.toast-heading-line .toast-heading').text( heading ); 
			 } else {
				 $('.toast-heading-line').hide() 
				 $('.toast-heading-line .toast-heading').text(''); 
			 }; 

			 if ( transition ) {
				 $('.toast-transition-line').show() 
				 $('.toast-transition-line .toast-transition').text( transition ); 
			 } else {
				 $('.toast-transition-line').hide(); 
				 $('.toast-transition-line .toast-transition').text('fade'); 
			 } 

			 if ( allowToastClose ) {
				 $('.toast-allowToastClose-line').show(); 
				 $('.toast-allowToastClose-line .toast-allowToastClose').text( allowToastClose ); 
			 } else {
				 $('.toast-allowToastClose-line').hide(); 
				 $('.toast-allowToastClose-line .toast-allowToastClose').text( false ); 
			 } 

			 if ( autoHide && ( autoHide == 'false' ) ) {
				 $('.toast-hideAfter-line').show(); 
				 $('.toast-hideAfter-line .toast-hideAfter').text('false'); 
				 $('.autohide-after').hide(); 
			 } else {
				 $('.toast-hideAfter-line').show(); 
				 $('.toast-hideAfter-line .toast-hideAfter').text( $('#autohide-after').val() ? $('#autohide-after').val() : 3000 ); 
				 $('.autohide-after').show(); 
			 } 

			 if ( stackToasts && stackToasts != 'true') {
				 $('.toast-stackLength-line').show(); 
				 $('.toast-stackLength-line .toast-stackLength').text( stackToasts ); 
				 $('.stack-length').hide(); 
			 } else {
				 $('.stack-length').show(); 
				 $('.toast-stackLength-line').show(); 
				 $('.toast-stackLength-line .toast-stackLength').text( $('#stack-length').val() ? $('#stack-length').val() : 5 ); 
			 } 

			 if ( toastPosition && ( toastPosition !== 'custom-position' ) ) {
				 $('.toast-position-string-line').show(); 
				 $('.custom-toast-position').hide(); 
				 $('.toast-position-string-line .toast-position').text( toastPosition ); 
			 } else {
				 $('.toast-position-string-line').hide(); 
				 $('.toast-position-string-line .toast-position').text(''); 
			 } 

			 if ( toastPosition && ( toastPosition === 'custom-position' ) ) {
				 $('.custom-toast-position').show(); 
				 $('.toast-position-string-obj').show(); 
				 var left = $('#left-position').val() ? $('#left-position').val() : 'auto'; 
				 var right = $('#right-position').val() ? $('#right-position').val() : 'auto'; 
				 var top = $('#top-position').val() ? $('#top-position').val() : 'auto'; 
				 var bottom = $('#bottom-position').val() ? $('#bottom-position').val() : 'auto'; 
				 $('.toast-position-string-obj .toast-position-left').text( ( left !== 'auto' ) ? left : "'" + left + "'" ); 
				 $('.toast-position-string-obj .toast-position-right').text( ( right !== 'auto' ) ? right : "'" + right + "'" ); 
				 $('.toast-position-string-obj .toast-position-top').text( ( top !== 'auto' ) ? top : "'" + top + "'" ); 
				 $('.toast-position-string-obj .toast-position-bottom').text(  ( bottom !== 'auto' ) ? bottom : "'" + bottom + "'"  ); 
			 } else {
				 $('.toast-position-string-obj').hide(); 
				 // $('.toast-position-string-obj toast-position').text('');
			 } 

			 if ( !toastIcon ) {
				 if ( toastBg ) {
					 $('.toast-bgColor-line').show(); 
					 $('.toast-bgColor-line .toast-bgColor').text( toastBg ); 
				 } else {
					 $('.toast-bgColor-line').hide(); 
					 $('.toast-bgColor-line .toast-bgColor').text(''); 
				 } 

				 if ( toastTextColor ) {
					 $('.toast-textColor-line').show(); 
					 $('.toast-textColor-line .toast-textColor').text( toastTextColor ); 
				 } else {
					 $('.toast-textColor-line').hide(); 
					 $('.toast-textColor-line .toast-textColor').text(''); 
				 } 
			 }

			 if ( textAlign ) {
				 $('.toast-textAlign-line').show(); 
				 $('.toast-textAlign-line .toast-textAlign').text( textAlign ); 
			 } else {
				 $('.toast-textAlign-line').hide(); 
				 $('.toast-textAlign-line .toast-textAlign').text( ''); 
			 } 

			 if (loader == 'false') {
				 $('.toast-textLoader').html('false');
			 } else {
				 $('.toast-textLoader').html('true');
			 }
			 
			 if (loaderBg) {
				 $('.toast-textLoaderBg').html(loaderBg);
			 }

			 if ( toastEvents == 'false' ) {
				 $('.toast-beforeShow-line').hide(); 
				 $('.toast-afterShown-line').hide(); 
				 $('.toast-beforeHide-line').hide(); 
				 $('.toast-afterHidden-line').hide(); 
			 } else {
				 $('.toast-beforeShow-line').show(); 
				 $('.toast-afterShown-line').show(); 
				 $('.toast-beforeHide-line').show(); 
				 $('.toast-afterHidden-line').show(); 
			 } 
		 }

		 $('#top-position').on('change', function () { $('#bottom-position').val('auto'); });
		 $('#bottom-position').on('change', function () { $('#top-position').val('auto'); });
		 $('#left-position').on('change', function () { $('#right-position').val('auto'); });
		 $('#right-position').on('change', function () {$('#left-position').val('auto'); });
		 $('.plugin-options :input').on('change', function () {
		   $.toast().reset('all');
		   generateCode();
		 });

		 $('.generate-toast').on('click', function( e ) {
		   e.preventDefault();
		   generateToast();
		 });

		 function generateToast () {
			 var options = {};

			 if ( $('.toast-text-line').is(':visible') ) {
				 options.text = $('.toast-text-line .toast-text').text();
			 } 

			 if ( $('.toast-heading-line').is(':visible') ) {
				 options.heading = $('.toast-heading').text(); 
			 }; 

			 if ( $('.toast-transition-line').is(':visible') ) {
				 options.showHideTransition = $('.toast-transition-line .toast-transition').text(); 
			 }; 

			 if ( $('.toast-allowToastClose-line').is(':visible') ) {
				 options.allowToastClose = ( $('.toast-allowToastClose-line .toast-allowToastClose').text() === 'true' ) ? true : false; 
			 }; 

			 if ( $('.toast-hideAfter-line').is(':visible') ) {
				 options.hideAfter = parseInt($('.toast-hideAfter-line .toast-hideAfter').text(), 10) || false; 
			 }; 

			 if ( $('.toast-stackLength-line').is(':visible') ) {
				 options.stack = parseInt($('.toast-stackLength-line .toast-stackLength').text(), 10) || false; 
			 }; 

			 if ( $('.toast-position-string-line').is(':visible') ) {
				 options.position = $('.toast-position-string-line .toast-position').text(); 
			 }; 

			 if ( $('.toast-position-string-obj').is(':visible') ) {
				 options.position = {}; 
				 options.position.left =  parseFloat( $('.toast-position .toast-position-left').text() ) || 'auto'; 
				 options.position.right =  parseFloat( $('.toast-position .toast-position-right').text() ) || 'auto'; 
				 options.position.top =  parseFloat( $('.toast-position .toast-position-top').text() ) || 'auto'; 
				 options.position.bottom =  parseFloat( $('.toast-position .toast-position-bottom').text() ) || 'auto'; 
			 }; 

			 if ( $('.toast-icon-line').is(':visible') ) {
				 options.icon = $('.toast-icon-line .toast-icon').text();
			 };

			 if ( $('.toast-bgColor-line').is(':visible') ) {
				 options.bgColor = $('#toast-bg').val(); 
			 }; 

			 if ( $('.toast-text-color').is(':visible') ) {
				 options.textColor = $('#toast-text-color').val(); 
			 }; 

			 if ( $("#text-align").is(':visible') ) {
				 options.textAlign = $('#text-align').val(); 
			 };

			 options.loader = $('.toast-textLoader').html() === 'false' ? false : true;
			 options.loaderBg = $('.toast-textLoaderBg').html();

			 $.toast( options ); 
		 }

		 generateCode(); 
	 });
 });