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

	var plot = $.plot('#flotChart1', [{
		data: flotSampleData10,
		color: '#adc4f7',
		lines: {
			fillColor: {
				colors: [{
					opacity: 1
				}, {
					opacity: .6
				}]
			}
		}
	}, {
		data: flotSampleData5,
		color: '#4c84ff',
		lines: {
			fillColor: {
				colors: [{
					opacity: 1
				}, {
					opacity: .6
				}]
			}
		}
	}], {
		series: {
			shadowSize: 0,
			lines: {
				show: true,
				lineWidth: 3,
				fill: true
			}
		},
		grid: {
			borderWidth: 0,
			aboveData: true
		},
		yaxis: {
			show: true,
			min: 0,
			max: 100,
			color: 'rgba(255,255,255,0.2)',
			ticks: [
				[0, ''],
				[25, '5k'],
				[50, '10k'],
				[75, '15k'],
				[100, '20k']
			]
		},
		xaxis: {
			show: true,
			ticks: [
				[0, ''],
				[8, 'Jan'],
				[20, 'Feb'],
				[32, 'Mar'],
				[44, 'Apr'],
				[56, 'May'],
				[68, 'Jun'],
				[80, 'Jul'],
				[92, 'Aug'],
				[104, 'Sep'],
				[116, 'Oct'],
				[128, 'Nov'],
				[140, 'Dec']
			],
			color: 'rgba(255,255,255,0.2)'
		}
	});
	
	
});