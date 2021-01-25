
/*
Template Name: Xoric - Responsive Bootstrap 4 Admin Dashboard
Author: Themesdesign
Version: 1.0.0
Website: https://themesdesign.in/
File: Property list filter init js
*/


!function($) {
    "use strict";

    var VectorMap = function() {};

    VectorMap.prototype.init = function() {
        		//various examples
		$('#world-map-markers').vectorMap({
			map : 'world_en',
			normalizeFunction : 'polynomial',
			hoverOpacity : 0.7,
			hoverColor : false,
			backgroundColor: '#transparent',
			color: '#f2f5f7',
			borderColor: '#bcbfc7',
			colors: {
				in: '#f96565',
				au: '#f96565',
				gl: '#f96565',
				us: '#f96565',
				sa: '#f96565'
			},
			borderColors: {
				in: '#f96565',
				au: '#f96565',
				gl: '#f96565',
				us: '#f96565',
				sa: '#f96565'
			}
		});

		$('#usa').vectorMap({
			map: 'usa_en',
			enableZoom: true,
			showTooltip: true,
			selectedColor: null,
			hoverColor: '#fa7777',
			backgroundColor: 'transparent',
			color: '#f96565',
			borderColor: '#bcbfc7',
			colors: {
				ca: '#fa7777',
				tx: '#fa7777',
				mt: '#fa7777',
				ny: '#fa7777'
			},
			onRegionClick: function (event, code, region) {
				event.preventDefault();
			}
		});

		$('#canada').vectorMap({
            map: 'canada_en',
            backgroundColor: 'transparent',
            color: '#f96565',
			hoverColor: '#fa7777',
			borderColor: '#bcbfc7',
            enableZoom: true,
			showTooltip: true,
		});
		
		$('#france').vectorMap({
            map: 'france_fr',
            backgroundColor: 'transparent',
			color: '#f96565',
			borderColor: '#bcbfc7',
            hoverColor: '#fa7777',
            enableZoom: true,
			showTooltip: true,
		});
		
		$('#germany').vectorMap({
            map: 'germany_en',
            backgroundColor: 'transparent',
			color: '#f96565',
			borderColor: '#bcbfc7',
            hoverColor: '#fa7777',
            enableZoom: true,
			showTooltip: true,
		});

		$('#brazil').vectorMap({
            map: 'brazil_br',
            backgroundColor: 'transparent',
			color: '#f96565',
			borderColor: '#bcbfc7',
            hoverColor: '#fa7777',
            enableZoom: true,
			showTooltip: true,
        });

  },
    //init
    $.VectorMap = new VectorMap, $.VectorMap.Constructor = VectorMap
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.VectorMap.init()
}(window.jQuery);