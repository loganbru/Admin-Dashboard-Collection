
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
				in: '#2fa97c',
				au: '#2fa97c',
				gl: '#2fa97c',
				us: '#2fa97c',
				sa: '#2fa97c'
			},
			borderColors: {
				in: '#2fa97c',
				au: '#2fa97c',
				gl: '#2fa97c',
				us: '#2fa97c',
				sa: '#2fa97c'
			}
		});

		$('#usa').vectorMap({
			map: 'usa_en',
			enableZoom: true,
			showTooltip: true,
			selectedColor: null,
			hoverColor: '#47b38b',
			backgroundColor: 'transparent',
			color: '#2fa97c',
			borderColor: '#bcbfc7',
			colors: {
				ca: '#47b38b',
				tx: '#47b38b',
				mt: '#47b38b',
				ny: '#47b38b'
			},
			onRegionClick: function (event, code, region) {
				event.preventDefault();
			}
		});

		$('#canada').vectorMap({
            map: 'canada_en',
            backgroundColor: 'transparent',
            color: '#2fa97c',
			hoverColor: '#47b38b',
			borderColor: '#bcbfc7',
            enableZoom: true,
			showTooltip: true,
		});
		
		$('#france').vectorMap({
            map: 'france_fr',
            backgroundColor: 'transparent',
			color: '#2fa97c',
			borderColor: '#bcbfc7',
            hoverColor: '#47b38b',
            enableZoom: true,
			showTooltip: true,
		});
		
		$('#germany').vectorMap({
            map: 'germany_en',
            backgroundColor: 'transparent',
			color: '#2fa97c',
			borderColor: '#bcbfc7',
            hoverColor: '#47b38b',
            enableZoom: true,
			showTooltip: true,
		});

		$('#brazil').vectorMap({
            map: 'brazil_br',
            backgroundColor: 'transparent',
			color: '#2fa97c',
			borderColor: '#bcbfc7',
            hoverColor: '#47b38b',
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