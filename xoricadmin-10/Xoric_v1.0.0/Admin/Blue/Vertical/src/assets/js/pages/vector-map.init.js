
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
				in: '#3051d3',
				au: '#3051d3',
				gl: '#3051d3',
				us: '#3051d3',
				sa: '#3051d3'
			},
			borderColors: {
				in: '#3051d3',
				au: '#3051d3',
				gl: '#3051d3',
				us: '#3051d3',
				sa: '#3051d3'
			}
		});

		$('#usa').vectorMap({
			map: 'usa_en',
			enableZoom: true,
			showTooltip: true,
			selectedColor: null,
			hoverColor: '#4865d8',
			backgroundColor: 'transparent',
			color: '#3051d3',
			borderColor: '#bcbfc7',
			colors: {
				ca: '#4865d8',
				tx: '#4865d8',
				mt: '#4865d8',
				ny: '#4865d8'
			},
			onRegionClick: function (event, code, region) {
				event.preventDefault();
			}
		});

		$('#canada').vectorMap({
            map: 'canada_en',
            backgroundColor: 'transparent',
            color: '#3051d3',
			hoverColor: '#4865d8',
			borderColor: '#bcbfc7',
            enableZoom: true,
			showTooltip: true,
		});
		
		$('#france').vectorMap({
            map: 'france_fr',
            backgroundColor: 'transparent',
			color: '#3051d3',
			borderColor: '#bcbfc7',
            hoverColor: '#4865d8',
            enableZoom: true,
			showTooltip: true,
		});
		
		$('#germany').vectorMap({
            map: 'germany_en',
            backgroundColor: 'transparent',
			color: '#3051d3',
			borderColor: '#bcbfc7',
            hoverColor: '#4865d8',
            enableZoom: true,
			showTooltip: true,
		});

		$('#brazil').vectorMap({
            map: 'brazil_br',
            backgroundColor: 'transparent',
			color: '#3051d3',
			borderColor: '#bcbfc7',
            hoverColor: '#4865d8',
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