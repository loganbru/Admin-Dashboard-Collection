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

	// Bar charts
    $('.peity-donut').peity('donut');

	/*-----sales overview-----*/
	var plot1 = $.plot('#flotChart', [{
		data: flotSampleData5,
		color: '#664bc4'
	}], {
		series: {
			shadowSize:0	,
			lines: {
				show: true,
				lineWidth: 2,
				fill: true,
				fillColor: {
					colors: [{
						opacity: 0.5
					}, {
						opacity: 0.9
					}]
				}
			}
		},
		grid: {
			borderWidth: 0,
			borderColor: '#0076fe',
			labelMargin: 5,
			markings: [{
				color: 'transparent'
			}]
		},
		yaxis: {
			
			show: false,
			color: '#ced4da',
			tickLength: 0,
			min: 0,
			max: 75,
			font: {
				size: 11,
				color: '#ced4da'
			},
			tickFormatter: function formatter(val, axis) {
				return val + 'k';
			}
		},
		xaxis: {
			show: false,
			position: 'bottom',
			color: 'rgba(0,0,0,0.0)',
			tickcolor: 'rgba(0,0,0,0.1)'
		}
	});
	var mqSM = window.matchMedia('(min-width: 576px)');
	var mqSMMD = window.matchMedia('(min-width: 576px) and (max-width: 991px)');
	var mqLG = window.matchMedia('(min-width: 992px)');

	function screenCheck() {
		if (mqSM.matches) {
			plot1.getAxes().yaxis.options.show = true;
			plot1.getAxes().xaxis.options.show = true;
		} else {
			plot1.getAxes().yaxis.options.show = false;
			plot1.getAxes().xaxis.options.show = false;
		}
		if (mqSMMD.matches) {
			var tick = [
				[0, '<span>Nov<\/span><span>03<\/span>'],
				[15, '<span>Nov<\/span><span>06<\/span>'],
				[30, '<span>Nov<\/span><span>09<\/span>'],
				[45, '<span>Nov<\/span><span>12<\/span>'],
				[60, '<span>Nov<\/span><span>15<\/span>'],
				[75, '<span>Nov<\/span><span>18<\/span>'],
				[90, '<span>Nov<\/span><span>21<\/span>'],
				[105, '<span>Nov<\/span><span>24<\/span>'],
				[120, '<span>Nov<\/span><span>27<\/span>'],
				[135, '<span>Nov<\/span><span>30<\/span>'],
			];
			plot1.getAxes().xaxis.options.ticks = tick;
		}
		if (mqLG.matches) {
			var tick = [
				[10, '<span>Nov<\/span><span>02<\/span>'],
				[20, '<span>Nov<\/span><span>04<\/span>'],
				[30, '<span>Nov<\/span><span>06<\/span>'],
				[40, '<span>Nov<\/span><span>08<\/span>'],
				[50, '<span>Nov<\/span><span>10<\/span>'],
				[60, '<span>Nov<\/span><span>12<\/span>'],
				[70, '<span>Nov<\/span><span>14<\/span>'],
				[80, '<span>Nov<\/span><span>16<\/span>'],
				[90, '<span>Nov<\/span><span>18<\/span>'],
				[100, '<span>Nov<\/span><span>20<\/span>'],
				[110, '<span>Nov<\/span><span>22<\/span>'],
				[120, '<span>Nov<\/span><span>24<\/span>'],
				[130, '<span>Nov<\/span><span>26<\/span>'],
				[140, '<span>Nov<\/span><span>28<\/span>'],
				[150, '<span>Nov<\/span><span>30<\/span>']
			];
			plot1.getAxes().xaxis.options.ticks = tick;
		}
	}
	screenCheck();
	mqSM.addListener(screenCheck);
	mqSMMD.addListener(screenCheck);
	mqLG.addListener(screenCheck);
	plot1.setupGrid();
	plot1.draw();

	$.plot('#flotChart2', [{
		data: dashData2,
		color: '#3db4ec'
	}], {
		series: {
			shadowSize: 0,
			bars: {
				show: true,
				lineWidth: 0,
				fill: 1,
				barWidth: .5
			}
		},
		grid: {
			borderWidth: 0,
			labelMargin: 0
		},
		yaxis: {
			show: false,
			min: 0,
			max: 35
		},
		xaxis: {
			show: false,
			max: 20
		}
	});
	/*-----/sales overview-----*/
});