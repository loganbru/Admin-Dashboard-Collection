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

	/* Flot (#flotChart)  */
	if ($("#flotChart1").length) {
		var d1 = [
				[0,45],
				[1,43],
				[2,47],
				[3,45],
				[4,45],
				[5,45],
				[6,42],
				[7,43],
				[8,45],
				[9,45],
				[10,47],
				[11,42],
				[12,40],
				[13,41],
				[14,38],
				[15,42],
				[16,36],
				[17,42],
				[18,38],
				[19,35],
				[20,35],
				[21,35],
				[22,33],
				[23,31],
				[24,28],
				[25,30],
				[26,26],
				[27,22],
				[28,31],
				[29,31],
				[30,33],
				[31,35],
				[32,42],
				[33,42],
				[34,35],
				[35,38],
				[36,38],
				[37,30],
				[38,31],
				[39,32],
				[40,38],
				[41,42],
				[42,37],
				[43,42],
				[44,44],
				[45,44],
				[46,42],
				[47,39],
				[48,37],
				[49,40],
				[50,42],
				[51,37],
				[52,40],
				[53,42],
				[54,37],
				[55,32],
				[56,36],
				[57,37],
				[58,38],
				[59,42],
				[60,40],
				[61,40],
				[62,43],
				[63,43],
				[64,41],
				[65,40],
				[66,43],
				[67,46],
				[68,47],
				[69,42],
				[70,39],
				[71,41],
				[72,45],
				[73,47],
				[74,51],
				[75,45],
				[76,50],
				[77,52],
				[78,50],
				[79,56],
				[80,55],
				[81,54],
				[82,57],
				[83,58],
				[84,61],
				[85,61],
				[86,64],
				[87,57],
				[88,55],
				[89,48],
				[90,44],
				[91,44],
				[92,47],
				[93,47],
				[94,51],
				[95,45],
				[96,47],
				[97,42],
				[98,44],
				[99,42],
				[100,49],
			];
		var curvedLineOptions = {
			series: {
				curvedLines: {
						active: true,
				},
				shadowSize: 0,
				lines: {
						show: true,
						lineWidth: 2,
						fill: false
				},
			},

			grid: {
				borderWidth: 0,
				labelMargin: 0
			},
			yaxis: {
				show: false,
				min: 0,
				max: 65,
				position: "left",
				ticks: [
					[0, '600'],
					[50, '610'],
					[100, '620'],
					[150, '640'],
					[200, '660'],
					[250, '680'],
				],
				tickColor: 'rgba(142, 156, 173,0.1)',
				tickLength:0,
				color: '#8500ff',
			},
			xaxis: {
				show: true,
				position: "bottom",
				ticks: [
						[0, 'Jan'],
						[20, 'Feb'],
						[40, 'Mar'],
						[60, 'Apr'],
						[80, 'May'],
						[100, 'Jun']
				],
				tickColor: 'rgba(142, 156, 173,0.1)',
				color: '#8500ff',
			},
			legend: {
				noColumns: 4,
				container: $("#legendContainer"),
			}
		}
		$.plot($("#flotChart1"), [{
		data: d1,
		curvedLines: {
			apply: true ,
			tension: 1,
		},
		points: {
			show: false,
			fillColor: '#535cfd',
		},
			color: '#535cfd',

		lines: {
			show: true,
			fill: true,
			fillColor: { colors: [{ opacity: 0.5 }, { opacity: 0.09}] }
		},
		label: 'This year',
		stack: true,
		}], curvedLineOptions);
	}
	/* Flot (#flotChart) closed */

	if ($("#flotChart2").length) {
		var d1 = [
				[0,45],
				[1,43],
				[2,47],
				[3,45],
				[4,45],
				[5,45],
				[6,42],
				[7,43],
				[8,45],
				[9,45],
				[10,47],
				[11,42],
				[12,40],
				[13,41],
				[14,38],
				[15,42],
				[16,36],
				[17,42],
				[18,38],
				[19,35],
				[20,35],
				[21,35],
				[22,33],
				[23,31],
				[24,28],
				[25,30],
				[26,26],
				[27,22],
				[28,31],
				[29,31],
				[30,33],
				[31,35],
				[32,42],
				[33,42],
				[34,35],
				[35,38],
				[36,38],
				[37,30],
				[38,31],
				[39,32],
				[40,38],
				[41,42],
				[42,37],
				[43,42],
				[44,44],
				[45,44],
				[46,42],
				[47,39],
				[48,37],
				[49,40],
				[50,42],
				[51,37],
				[52,40],
				[53,42],
				[54,37],
				[55,32],
				[56,36],
				[57,37],
				[58,38],
				[59,42],
				[60,40],
				[61,40],
				[62,43],
				[63,43],
				[64,41],
				[65,40],
				[66,43],
				[67,46],
				[68,47],
				[69,42],
				[70,39],
				[71,41],
				[72,45],
				[73,47],
				[74,51],
				[75,45],
				[76,50],
				[77,52],
				[78,50],
				[79,56],
				[80,55],
				[81,54],
				[82,57],
				[83,58],
				[84,61],
				[85,61],
				[86,64],
				[87,57],
				[88,55],
				[89,48],
				[90,44],
				[91,44],
				[92,47],
				[93,47],
				[94,51],
				[95,45],
				[96,47],
				[97,42],
				[98,44],
				[99,42],
				[100,49],
			];
		var curvedLineOptions = {
			series: {
				curvedLines: {
						active: true,
				},
				shadowSize: 0,
				lines: {
						show: true,
						lineWidth: 2,
						fill: false
				},
			},

			grid: {
				borderWidth: 0,
				labelMargin: 0
			},
			yaxis: {
				show: false,
				min: 0,
				max: 65,
				position: "left",
				ticks: [
					[0, '600'],
					[50, '610'],
					[100, '620'],
					[150, '640'],
					[200, '660'],
					[250, '680'],
				],
				tickColor: 'rgba(142, 156, 173,0.1)',
				tickLength:0,
				color: '#8500ff',
			},
			xaxis: {
				show: true,
				position: "bottom",
				ticks: [
						[0, 'Jan'],
						[20, 'Feb'],
						[40, 'Mar'],
						[60, 'Apr'],
						[80, 'May'],
						[100, 'Jun']
				],
				tickColor: 'rgba(142, 156, 173,0.1)',
				color: '#8500ff',
			},
			legend: {
				noColumns: 4,
				container: $("#legendContainer"),
			}
		}
		$.plot($("#flotChart2"), [{
		data: d1,
		curvedLines: {
			apply: true ,
			tension: 1,
		},
		points: {
			show: false,
			fillColor: '#2dc3fc',
		},
			color: '#2dc3fc',

		lines: {
			show: true,
			fill: true,
			fillColor: { colors: [{ opacity: 0.5 }, { opacity: 0.09}] }
		},
		label: 'This year',
		stack: true,
		}], curvedLineOptions);
	}
	/* Flot (#flotChart) closed */

	if ($("#flotChart3").length) {
		var d1 = [
				[0,45],
				[1,43],
				[2,47],
				[3,45],
				[4,45],
				[5,45],
				[6,42],
				[7,43],
				[8,45],
				[9,45],
				[10,47],
				[11,42],
				[12,40],
				[13,41],
				[14,38],
				[15,42],
				[16,36],
				[17,42],
				[18,38],
				[19,35],
				[20,35],
				[21,35],
				[22,33],
				[23,31],
				[24,28],
				[25,30],
				[26,26],
				[27,22],
				[28,31],
				[29,31],
				[30,33],
				[31,35],
				[32,42],
				[33,42],
				[34,35],
				[35,38],
				[36,38],
				[37,30],
				[38,31],
				[39,32],
				[40,38],
				[41,42],
				[42,37],
				[43,42],
				[44,44],
				[45,44],
				[46,42],
				[47,39],
				[48,37],
				[49,40],
				[50,42],
				[51,37],
				[52,40],
				[53,42],
				[54,37],
				[55,32],
				[56,36],
				[57,37],
				[58,38],
				[59,42],
				[60,40],
				[61,40],
				[62,43],
				[63,43],
				[64,41],
				[65,40],
				[66,43],
				[67,46],
				[68,47],
				[69,42],
				[70,39],
				[71,41],
				[72,45],
				[73,47],
				[74,51],
				[75,45],
				[76,50],
				[77,52],
				[78,50],
				[79,56],
				[80,55],
				[81,54],
				[82,57],
				[83,58],
				[84,61],
				[85,61],
				[86,64],
				[87,57],
				[88,55],
				[89,48],
				[90,44],
				[91,44],
				[92,47],
				[93,47],
				[94,51],
				[95,45],
				[96,47],
				[97,42],
				[98,44],
				[99,42],
				[100,49],
			];
		var curvedLineOptions = {
			series: {
				curvedLines: {
						active: true,
				},
				shadowSize: 0,
				lines: {
						show: true,
						lineWidth: 2,
						fill: false
				},
			},

			grid: {
				borderWidth: 0,
				labelMargin: 0
			},
			yaxis: {
				show: false,
				min: 0,
				max: 65,
				position: "left",
				ticks: [
					[0, '600'],
					[50, '610'],
					[100, '620'],
					[150, '640'],
					[200, '660'],
					[250, '680'],
				],
				tickColor: 'rgba(142, 156, 173,0.1)',
				tickLength:0,
				color: '#8500ff',
			},
			xaxis: {
				show: true,
				position: "bottom",
				ticks: [
						[0, 'Jan'],
						[20, 'Feb'],
						[40, 'Mar'],
						[60, 'Apr'],
						[80, 'May'],
						[100, 'Jun']
				],
				tickColor: 'rgba(142, 156, 173,0.1)',
				color: '#8500ff',
			},
			legend: {
				noColumns: 4,
				container: $("#legendContainer"),
			}
		}
		$.plot($("#flotChart3"), [{
		data: d1,
		curvedLines: {
			apply: true ,
			tension: 1,
		},
		points: {
			show: false,
			fillColor: '#f94167',
		},
			color: '#f94167',

		lines: {
			show: true,
			fill: true,
			fillColor: { colors: [{ opacity: 0.5 }, { opacity: 0.09}] }
		},
		label: 'This year',
		stack: true,
		}], curvedLineOptions);
	}
	/* Flot (#flotChart) closed */

	if ($("#flotChart4").length) {
		var d1 = [
				[0,45],
				[1,43],
				[2,47],
				[3,45],
				[4,45],
				[5,45],
				[6,42],
				[7,43],
				[8,45],
				[9,45],
				[10,47],
				[11,42],
				[12,40],
				[13,41],
				[14,38],
				[15,42],
				[16,36],
				[17,42],
				[18,38],
				[19,35],
				[20,35],
				[21,35],
				[22,33],
				[23,31],
				[24,28],
				[25,30],
				[26,26],
				[27,22],
				[28,31],
				[29,31],
				[30,33],
				[31,35],
				[32,42],
				[33,42],
				[34,35],
				[35,38],
				[36,38],
				[37,30],
				[38,31],
				[39,32],
				[40,38],
				[41,42],
				[42,37],
				[43,42],
				[44,44],
				[45,44],
				[46,42],
				[47,39],
				[48,37],
				[49,40],
				[50,42],
				[51,37],
				[52,40],
				[53,42],
				[54,37],
				[55,32],
				[56,36],
				[57,37],
				[58,38],
				[59,42],
				[60,40],
				[61,40],
				[62,43],
				[63,43],
				[64,41],
				[65,40],
				[66,43],
				[67,46],
				[68,47],
				[69,42],
				[70,39],
				[71,41],
				[72,45],
				[73,47],
				[74,51],
				[75,45],
				[76,50],
				[77,52],
				[78,50],
				[79,56],
				[80,55],
				[81,54],
				[82,57],
				[83,58],
				[84,61],
				[85,61],
				[86,64],
				[87,57],
				[88,55],
				[89,48],
				[90,44],
				[91,44],
				[92,47],
				[93,47],
				[94,51],
				[95,45],
				[96,47],
				[97,42],
				[98,44],
				[99,42],
				[100,49],
			];
		var curvedLineOptions = {
			series: {
				curvedLines: {
						active: true,
				},
				shadowSize: 0,
				lines: {
						show: true,
						lineWidth: 2,
						fill: false
				},
			},

			grid: {
				borderWidth: 0,
				labelMargin: 0
			},
			yaxis: {
				show: false,
				min: 0,
				max: 65,
				position: "left",
				ticks: [
					[0, '600'],
					[50, '610'],
					[100, '620'],
					[150, '640'],
					[200, '660'],
					[250, '680'],
				],
				tickColor: 'rgba(142, 156, 173,0.1)',
				tickLength:0,
				color: '#8500ff',
			},
			xaxis: {
				show: true,
				position: "bottom",
				ticks: [
						[0, 'Jan'],
						[20, 'Feb'],
						[40, 'Mar'],
						[60, 'Apr'],
						[80, 'May'],
						[100, 'Jun']
				],
				tickColor: 'rgba(142, 156, 173,0.1)',
				color: '#8500ff',
			},
			legend: {
				noColumns: 4,
				container: $("#legendContainer"),
			}
		}
		$.plot($("#flotChart4"), [{
		data: d1,
		curvedLines: {
			apply: true ,
			tension: 1,
		},
		points: {
			show: false,
			fillColor: '#00cccc',
		},
			color: '#00cccc',

		lines: {
			show: true,
			fill: true,
			fillColor: { colors: [{ opacity: 0.5 }, { opacity: 0.09}] }
		},
		label: 'This year',
		stack: true,
		}], curvedLineOptions);
	}
	/* Flot (#flotChart) closed */


	/*----- ChartBar6 -----*/
	var ctx6 = document.getElementById('chartBar6').getContext('2d');
	new Chart(ctx6, {
	  type: 'bar',
	  data: {
		labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
		datasets: [{
		  data: [120,110,90,115,125,160,160,140,100,110,120,120],
		  backgroundColor: '#535cfd'
		},{
		  data: [100,140,120,135,155,170,180,150,140,150,130,130],
		  backgroundColor: '#f94167'
		}]
	  },
	  options: {
		maintainAspectRatio: false,
		legend: {
		  display: false,
			labels: {
			  display: false
			}
		},
		scales: {
		  xAxes: [{
			//stacked: true,
			barPercentage: 0.5,
			ticks: {
			  beginAtZero:true,
			  fontSize: 11
			},
			gridLines: {
				display: false,
				drawBorder: true
			},
		  }],
		  yAxes: [{
			ticks: {
				fontSize: 10,
				color: '#97a3b9',
				min: 80,
				max: 220
			},
			gridLines: {
				display: false,
				drawBorder: true
			},
		  }]
		}
	  }
	});

	/*--- Visiting Regions ---*/
	$(".spark1").sparkline([5, 4, 5, 5, 4, 3, 5], {
		type: 'line',
		height: 20,
		width:80,
		maxSpotColor: '#535cfd',
		minSpotColor: '#535cfd',
		highlightSpotColor: '#535cfd',
		spotColor: '#535cfd',
		lineColor: '#535cfd',
		fillColor: false,
	});
	$(".spark2").sparkline([2, 4, 3, 4, 5, 4, 6], {
		type: 'line',
		height: 20,
		width:80,
		maxSpotColor: '#535cfd',
		minSpotColor: '#535cfd',
		highlightSpotColor: '#535cfd',
		spotColor: '#535cfd',
		lineColor: '#535cfd',
		fillColor: false,
	});
	$(".spark3").sparkline([4, 5, 0, 3, 5, 6, 4], {
		type: 'line',
		height: 20,
		width:80,
		maxSpotColor: '#535cfd',
		minSpotColor: '#535cfd',
		highlightSpotColor: '#535cfd',
		spotColor: '#535cfd',
		lineColor: '#535cfd',
		fillColor: false,
	});
	$(".spark4").sparkline([2, 4, 3, 4, 5, 4, 5], {
		type: 'line',
		height: 20,
		width:80,
		maxSpotColor: '#535cfd',
		minSpotColor: '#535cfd',
		highlightSpotColor: '#535cfd',
		spotColor: '#535cfd',
		lineColor: '#535cfd',
		fillColor: false,
	});
	$(".spark5").sparkline([ 4, 5, 4, 3, 4, 6, 3], {
		type: 'line',
		height: 20,
		width:80,
		maxSpotColor: '#535cfd',
		minSpotColor: '#535cfd',
		highlightSpotColor: '#535cfd',
		spotColor: '#535cfd',
		lineColor: '#535cfd',
		fillColor: false,
	});
	$(".spark6").sparkline([6, 2, 4, 3, 4, 5, 4], {
		type: 'line',
		height: 20,
		width:80,
		maxSpotColor: '#535cfd',
		minSpotColor: '#535cfd',
		highlightSpotColor: '#535cfd',
		spotColor: '#535cfd',
		lineColor: '#535cfd',
		fillColor: false,
	});
	$(".spark7").sparkline([2, 4, 3, 4, 7, 5, 4], {
		type: 'line',
		height: 20,
		width:80,
		maxSpotColor: '#535cfd',
		minSpotColor: '#535cfd',
		highlightSpotColor: '#535cfd',
		spotColor: '#535cfd',
		lineColor: '#535cfd',
		fillColor: false,
	});

});