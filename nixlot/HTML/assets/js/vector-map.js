$(function() {
	'use strict';
	$('#vmap').vectorMap({
		map: 'world_en',
		backgroundColor: 'rgba(119, 119, 142, 0.2)',
		color: '#ffffff',
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
		backgroundColor: 'rgba(119, 119, 142, 0.2)',
		hoverColor: '#00cccc'
	});
	$('#vmap3').vectorMap({
		map: 'canada_en',
		color: '#212229',
		borderColor: '#fff',
		backgroundColor: 'rgba(119, 119, 142, 0.2)',
		hoverColor: '#00cccc',
		showLabels: true
	});
	$('#vmap4').vectorMap({
		map: 'dz_fr',
		color: '#00cccc',
		borderColor: '#fff',
		backgroundColor: 'rgba(119, 119, 142, 0.2)',
		hoverColor: '#00cccc',
		showLabels: true
	});
	
	$('#vmap5').vectorMap({
		map: 'argentina_en',
		color: '#3bb001',
		borderColor: '#fff',
		backgroundColor: 'rgba(119, 119, 142, 0.2)',
		hoverColor: '#212229',
		showLabels: true
	});
	
	$('#vmap6').vectorMap({
		map: 'europe_en',
		color: '#dc3545',
		borderColor: '#fff',
		backgroundColor: 'rgba(119, 119, 142, 0.2)',
		hoverColor: '#dc3545',
		showLabels: true
	});
	
	$('#vmap7').vectorMap({
		map: 'germany_en',
		color: '#ea614c',
		borderColor: '#fff',
		backgroundColor: 'rgba(119, 119, 142, 0.2)',
		hoverColor: '#ea614c',
		showLabels: true
	});
	
	$('#vmap8').vectorMap({
		map: 'russia_en',
		color: '#3db4ec',
		borderColor: '#fff',
		backgroundColor: 'rgba(119, 119, 142, 0.2)',
		hoverColor: '#3db4ec',
		showLabels: true
	});
	
	$('#vmap9').vectorMap({
		map: 'france_fr',
		color: '#f10075',
		borderColor: '#fff',
		backgroundColor: 'rgba(119, 119, 142, 0.2)',
		hoverColor: '#f10075',
		showLabels: true
	});
});