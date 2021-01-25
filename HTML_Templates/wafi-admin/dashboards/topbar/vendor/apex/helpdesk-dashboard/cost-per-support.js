var options = {
	chart: {
		height: 260,
		type: 'line',
		zoom: {
			enabled: false
		},
		toolbar: {
			show: false,
		},
	},
	stroke: {
		curve: 'straight',
		width: 3,
	},
	series: [{
		name: 'Support',
		type: 'area',
		data: [27, 32, 33, 41, 30, 15]
	}, {
		name: 'Cost',
		type: 'line',
		data: [17, 52, 44, 25, 21, 10]
	}],
	fill: {
		type:'solid',
		opacity: [0.25, 1],
	},
	labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
	markers: {
		size: 0,
		show: false,
	},
	tooltip: {
		shared: true,
		intersect: false,
		y: {
			formatter: function (y) {
				if(typeof y !== "undefined") {
					return  y.toFixed(0);
				}
				return y;
			},
		},
	},
	colors: ['#1a8e5f', '#262b31', '#434950', '#63686f', '#868a90'],
}
var chart = new ApexCharts(
	document.querySelector("#cost-per-support"),
	options
);
chart.render();