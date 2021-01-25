var options = {
	chart: {
		height: 200,
		width: 250,
		type: 'heatmap',
		toolbar: {
			show: false,
		},
	},
	stroke: {
		width: 2
	},
	plotOptions: {
		heatmap: {
			radius: 0,
			enableShades: false,
			colorScale: {
				ranges: [{
						from: 0,
						to: 4,
						color: '#3f9f78'
					},
					{
						from: 5,
						to: 8,
						color: '#cc2626'
					},
				],
			},

		}
	},
	dataLabels: {
		enabled: true,
		style: {
			colors: ['#fff']
		}
	},
	series: [{
			name: 'Ahmed',
			data: [{
				x: 'Mon',
				y: 5
			}, {
				x: 'Tue',
				y: 7
			}, {
				x: 'Wed',
				y: 3
			}, {
				x: 'Thu',
				y: 4
			}, {
				x: 'Fri',
				y: 2
			}]
		},
		{
			name: 'Sayed',
			data: [{
				x: 'Mon',
				y: 5
			}, {
				x: 'Tue',
				y: 3
			}, {
				x: 'Wed',
				y: 1
			}, {
				x: 'Thu',
				y: 3
			}, {
				x: 'Fri',
				y: 2
			}]
		},
		{
			name: 'Zuairia',
			data: [{
				x: 'Mon',
				y: 4
			}, {
				x: 'Tue',
				y: 2
			}, {
				x: 'Wed',
				y: 3
			}, {
				x: 'Thu',
				y: 5
			}, {
				x: 'Fri',
				y: 1
			}]
		},
		{
			name: 'Zyan',
			data: [{
				x: 'Mon',
				y: 2
			}, {
				x: 'Tue',
				y: 4
			}, {
				x: 'Wed',
				y: 5
			}, {
				x: 'Thu',
				y: 1
			}, {
				x: 'Fri',
				y: 2
			}]
		},
		{
			name: 'Lewis',
			data: [{
				x: 'Mon',
				y: 1
			}, {
				x: 'Tue',
				y: 2
			}, {
				x: 'Wed',
				y: 4
			}, {
				x: 'Thu',
				y: 2
			}, {
				x: 'Fri',
				y: 3
			}]
		},
	],
	tooltip: {
		y: {
			formatter: function(val) {
				return val + ' Tasks'
			}
		}
	},
	xaxis: {
		type: 'category',
	},
}

var chart = new ApexCharts(
	document.querySelector("#tasks-assigned"),
	options
);

chart.render();