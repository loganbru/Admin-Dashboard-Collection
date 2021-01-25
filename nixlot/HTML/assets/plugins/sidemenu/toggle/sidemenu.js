(function () {
	"use strict";

	var slideMenu = $('.side-menu');
	$('.app').addClass('sidebar-mini');
	$('.app').addClass('sidenav-toggled');
	
	// Toggle Sidebar
	$(document).on("click", "[data-toggle='sidebar']", function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled1');
		$('.app').removeClass('sidenav-toggled4');
	});
	
	
	$(document).on("click", ".resp-tab-item", function(event) {
		event.preventDefault();
		$('.app').addClass('sidenav-toggled4');
	});
	
	if ( $(window).width() > 739) {     
		$('.app-content').hover(function(event) {
			event.preventDefault();
			$('.app').removeClass('sidenav-toggled4');
		});
	} 
	
	// Activate sidebar slide toggle
	$("[data-toggle='slide']").on('click',function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			slideMenu.find("[data-toggle='slide']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	// Set initial active toggle
	$("[data-toggle='slide.'].is-expanded").parent().toggleClass('is-expanded');
	
})();
