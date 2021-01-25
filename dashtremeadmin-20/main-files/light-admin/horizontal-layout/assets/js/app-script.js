
$(function() {
    "use strict";
	
	
	
  $(document).ready(function () {
		 $("#respMenu").horizontalMenu({
			 resizeWidth: '1024', // Set the same in Media query
			 animationSpeed: 'fast', //slow, medium, fast
			 accoridonExpAll: false //Expands all the accordion menu on click
		 });
	 });

	 

// === toggle-menu js
$(".toggle-menu").on("click", function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });	 
	   
// === sidebar menu activation js

$(function() {
        for (var i = window.location, o = $(".sidebar-menu a").filter(function() {
            return this.href == i;
        }).addClass("active").parent().addClass("active"); ;) {
            if (!o.is("li")) break;
            o = o.parent().addClass("in").parent().addClass("active");
        }
    }), 	   
	   
/* sticky menu */

$(document).ready(function(){ 
    $(window).on("scroll", function(){ 
        if ($(this).scrollTop() > 60) { 
            $('.horizontal-menu').addClass('sticky-menu'); 
        } else { 
            $('.horizontal-menu').removeClass('sticky-menu'); 
        } 
    });

 });


/* Back To Top */

$(document).ready(function(){ 
    $(window).on("scroll", function(){ 
        if ($(this).scrollTop() > 300) { 
            $('.back-to-top').fadeIn(); 
        } else { 
            $('.back-to-top').fadeOut(); 
        } 
    }); 

    $('.back-to-top').on("click", function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});	   
	   

  // page loader

    $(window).on('load', function(){

     $('#pageloader-overlay').fadeOut(1000);

    })  
   
   
   
	$(function () {
	  $('[data-toggle="popover"]').popover()
	})


	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})


	
	
	
	
	
	

});