/**
Core script to handle the entire theme and core functions
**/
var DZone = function(){
	/* Search Bar ============ */
	
	/* Load File ============ */
	var dzTheme = function(){
		 'use strict';
		 var loadingImage = '<img src="images/loading.gif">';
		 jQuery('.dzload').each(function(){
		 var dzsrc = $(this).attr('dzsrc');
		  //jQuery(this).html(loadingImage);
			jQuery(this).hide(function(){
			   jQuery(this).load(dzsrc, function(){
					jQuery(this).fadeIn('slow');
			   }); 
			})
		 });
		 
		
	}
	
	var dzTheme1 = function(){
		 'use strict';
		 var loadingImage = '<div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>';
		 
		 //#dzdest : Id of container where content will load
		 jQuery('.dzClickload').on('click', function(event){
			event.preventDefault();
			
			var dzsrc = $(this).attr('dzsrc');
			if (typeof dzsrc !== typeof undefined && dzsrc !== false) {
				var dzdest = $(this).attr('dzdest');
				if (typeof dzdest !== typeof undefined && dzdest !== false) {
					jQuery("#"+dzdest).html(loadingImage);
					setTimeout(function(){ 
						jQuery("#"+dzdest).load(dzsrc); 
					}, 500);
				}
				else{
					jQuery(this).html(loadingImage);
					setTimeout(function(){ 
						jQuery(this).load(dzsrc); 
					},500);
				}
			}

			
		 }); 
		 
	}
	
	/* Function ============ */
	return {
		init:function(){
			dzTheme();
			dzTheme1();
		},
	}
	
}();


/* Document.ready Start */	
jQuery(document).ready(function() {
    'use strict';
	DZone.init();
});
/* Document.ready END */

