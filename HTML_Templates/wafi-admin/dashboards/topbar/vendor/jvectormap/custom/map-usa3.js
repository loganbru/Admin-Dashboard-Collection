// USA map 1
$(function(){
	var cityAreaData = [
		230.20,
		750.90,
		440.28,
		180.15,
		69.35,
		280.90,
		510.50,
		99.60,
		135.50
	]
	$('#us-map3').vectorMap({
		map: 'us_aea_en',
		scaleColors: ['#2c9e9e'],
		normalizeFunction: 'polynomial',
		focusOn:{
			x: 2,
			y: 0,
			scale: 1
		},
		zoomOnScroll: false,
		zoomMin: 1,
		hoverColor: true,
		regionStyle:{
			initial: {
				fill: '#1a8e5f',
			},
			hover: {
				"fill-opacity": 0.8
			},
		},
		markerStyle: {
			initial: {
				fill: '#cc2626',
				stroke: '#FFFFFF',
				r: 5
			}
		},
		backgroundColor: 'transparent',
		markers :[
			{latLng: [35.22, -117.38], name: 'Johannesburg'},
			{latLng: [36.10,-115.09], name: 'Las Vegas, Nev'},
			{latLng: [37.45, -119.40], name: 'Yosemite Nat. Park'},
			{latLng: [32.90, -97.03], name: 'Dallas/FW,TX'},
			{latLng: [29.35, -95.46 ], name: 'Richmond Tex'},
			{latLng: [39.46, -86.09], name: 'Indianapolis'},
		],
		series: {
			markers: [{
				attribute: 'r',
				scale: [3, 7],
				values: cityAreaData
			}]
		},
	});
});