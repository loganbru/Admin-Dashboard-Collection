! function($) {
	"use strict";

	var VectorMap = function() {
	};

	VectorMap.prototype.init = function() {
		//various examples
		$('#world-map-markers').vectorMap({
			map : 'world_mill_en',
			scaleColors : ['#f1f5fa', '#f1f5fa'],
			normalizeFunction : 'polynomial',
			hoverOpacity : 0.7,
			hoverColor : false,
			regionStyle : {
				initial : {
					fill : '#e0e8f5'
				}
			},
			 markerStyle: {
                initial: {
                    r: 9,
                    'fill': '#2205bf',
                    'fill-opacity': 0.7,
                    'stroke': '#fff',
                    'stroke-width' : 9,
                    'stroke-opacity': 0.5
                },

                hover: {
                    'stroke': '#fff',
                    'fill-opacity': 1,
                    'stroke-width': 1.5
                }
            },
			backgroundColor : 'transparent',
			markers : [
			{
				latLng: [35.861660, 104.195397],
				name: 'China',
				visits: 1000,
				fill:'#f00',
			},
			{
				latLng: [37.090240, -95.712891],
				name: 'USA(Neda Shine)',
				visits: 1000
			},
			{
				latLng: [52.130366, -92.346771],
				name: 'Canada',
				visits: 1000
			},
			{
				latLng: [-25.274398, 133.775136],
				name: 'Austrlia(Neda Shine)',
				visits: 1000
			},
			{
				latLng: [51.165691, 10.451526],
				name: 'Germany',
				visits: 1000
			},
			{
				latLng: [26.02, 50.55],
				name: 'Bahrain',
				visits: 1000
			},
			{
				latLng: [-3, -61.38],
				name: 'Brazil',
				visits: 1000
			}, {
				latLng : [0.33, 6.73],
				name : 'São Tomé and Príncipe'
			}]
		});

	},
	//init
	$.VectorMap = new VectorMap, $.VectorMap.Constructor =
	VectorMap;
	$.VectorMap.init();
}(window.jQuery);


