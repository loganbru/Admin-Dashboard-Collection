$(function() {
	'use strict';
	$('#vmap').vectorMap({
		map: 'world_en',
		backgroundColor: '#16182f',
		color: '#16182ffff',
		hoverOpacity: 0.7,
		selectedColor: '#00cccc',
		enableZoom: true,
		showTooltip: true,
		scaleColors: ['#560bd0', '#ea614c'],
		values: sample_data,
		normalizeFunction: 'polynomial'
	});
	$('#vmap2').vectorMap({
		map: 'usa_en',
		showTooltip: true,
		backgroundColor: '#16182f',
		hoverColor: '#00cccc'
	});
	$('#vmap3').vectorMap({
		map: 'canada_en',
		color: '#212229',
		borderColor: '#16182f',
		backgroundColor: '#16182f',
		hoverColor: '#00cccc',
		showLabels: true
	});
	$('#vmap4').vectorMap({
		map: 'dz_fr',
		color: '#00cccc',
		borderColor: '#16182f',
		backgroundColor: '#16182f',
		hoverColor: '#00cccc',
		showLabels: true
	});
	
	$('#vmap5').vectorMap({
		map: 'argentina_en',
		color: '#3bb001',
		borderColor: '#16182f',
		backgroundColor: '#16182f',
		hoverColor: '#212229',
		showLabels: true
	});
	
	$('#vmap6').vectorMap({
		map: 'europe_en',
		color: '#dc3545',
		borderColor: '#16182f',
		backgroundColor: '#16182f',
		hoverColor: '#dc3545',
		showLabels: true
	});
	
	$('#vmap7').vectorMap({
		map: 'germany_en',
		color: '#ea614c',
		borderColor: '#16182f',
		backgroundColor: '#16182f',
		hoverColor: '#ea614c',
		showLabels: true
	});
	
	$('#vmap8').vectorMap({
		map: 'russia_en',
		color: '#3db4ec',
		borderColor: '#16182f',
		backgroundColor: '#16182f',
		hoverColor: '#3db4ec',
		showLabels: true
	});
	
	$('#vmap9').vectorMap({
		map: 'france_fr',
		color: '#f10075',
		borderColor: '#16182f',
		backgroundColor: '#16182f',
		hoverColor: '#f10075',
		showLabels: true
	});
});