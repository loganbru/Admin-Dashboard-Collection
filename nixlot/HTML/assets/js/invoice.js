$(function() {
	'use strict'
	
	$('#mainInvoiceList .media').on('click', function(e) {
		$(this).addClass('selected');
		$(this).siblings().removeClass('selected');
		$('body').addClass('main-content-body-show');
	});
});