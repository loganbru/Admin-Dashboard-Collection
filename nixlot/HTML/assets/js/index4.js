$(function() {
	'use strict'
	$(".users-scroll").mCustomScrollbar({
		theme:"minimal",
		autoHideScrollbar: true,
		scrollbarPosition: "outside"
	});
	
	function labelFormatter(label, series) {
		return '<div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">' + Math.round(series.percent) + '%<\/div>';
	}
	
	/*----- Main Chart -----*/

	$.plot('#flotChart08', [{
		data: flotSampleData2,
		color: '#A34FFE'
	}], {
		series: {
			shadowSize: 0,
			lines: {
				show: true,
				lineWidth: 2,
				fill: true,
				fillColor: {
					colors: [{
						opacity: 0
					}, {
						opacity: 0.5
					}]
				}
			}
		},
		grid: {
			borderWidth: 0,
			labelMargin: 0,
			aboveData: true
		},
		yaxis: {
			show: true,
			color: 'rgba(206, 212, 218,0.06)',
			ticks: [
				[0, ''],
				[15, '$6320'],
				[30, '$6340'],
				[45, '$6360'],
				[60, '$6380'],
				[75, '$6400']
			],
			min: 0,
			max: 80,
			font: {
				size: 11,
				weight: '600',
				family: 'Archivo, sans-serif',
				color: '#ced4da'
			}
		},
		xaxis: {
			show: true,
			color: 'rgba(206, 212, 218,0.1)',
			ticks: [
				[0, '06:00'],
				[20, '09:00'],
				[40, '12:00'],
				[60, '13:00'],
				[80, '16:00'],
				[100, '19:00'],
				[120, '21:00'],
				[140, '23:00']
			],
			font: {
				size: 11,
				family: 'Arial, sans-serif',
				color: '#ced4da'
			},
			reserveSpace: false
		}
	});
	/*----- /Main Chart -----*/


 
});