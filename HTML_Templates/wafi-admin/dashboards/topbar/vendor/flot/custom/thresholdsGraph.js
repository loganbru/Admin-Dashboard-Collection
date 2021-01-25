'use strict'

var flotThresholdsData = [[0,-6],[1,-5],[2,6],[3,1],[4,-2],[5,7],[6,10],[7,4],[8,-6],[9,-6],[10,-1],[11,-8],[12,18],[13,7],[14,-2],[15,-2],[16,3],[17,19],[18,0],[19,10],[20,11],[21,-5],[22,-5],[23,-4],[24,17],[25,11],[26,16],[27,12],[28,-3],[29,-7],[30,-6],[31,4],[32,4],[33,7],[34,2],[35,10],[36,10],[37,-3],[38,10],[39,9],[40,0],[41,11],[42,11],[43,11],[44,-3],[45,10],[46,2],[47,14],[48,19],[49,7],[50,5],[51,-6],[52,-4],[53,0],[54,11],[55,6],[56,-4],[57,19],[58,0],[59,1],[60,14]];

$(function(){
	'use strict'

	// Thresholds
	$.plot('#flotThresholds', [{
		data: flotThresholdsData,
		color: ['#1a8e5f', '#262b31', '#434950', '#63686f', '#868a90'],
	}], {
		series: {
			threshold: {
				below: 0,
				color: '#262b31'
			},
			bars: {
				show: true,
				lineWidth: 0,
				barWidth: .8,
				fill: 1
			}
		},
		grid: {
			hoverable: true,
			borderWidth: 1,
			borderColor: '#f0f1f7'
		},
		yaxis: {
			tickColor: '#f0f1f7',
			ticks: 6,
			font: {
				color: '#666666',
				size: 10
			}
		},
		xaxis: {
			min: 0,
			max: 40,
			tickColor: '#f0f1f7',
			font: {
				color: '#666666',
				size: 10
			}
		},
		tooltip: {
			show: true,
			shifts: {
			  x: 20,
			  y: 0
			},
			defaultTheme: false
		},
	});

});

