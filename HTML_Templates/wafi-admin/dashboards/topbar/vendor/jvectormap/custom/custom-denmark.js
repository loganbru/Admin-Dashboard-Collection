// Denmark
$(function(){
	$('#mapDenmark').vectorMap({
		map: 'dk_mill',
		zoomOnScroll: false,
		regionStyle:{
			initial: {
				fill: '#1a8e5f',
			},
			hover: {
				"fill-opacity": 0.8
			},
			selected: {
				fill: '#03a082'
			},
		},
		backgroundColor: 'transparent',
	});
});