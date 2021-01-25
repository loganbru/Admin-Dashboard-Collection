var options = {
	chart: {
		height: 320,
		type: 'radialBar',
	},
	plotOptions: {
		radialBar: {
			dataLabels: {
				name: {
					fontSize: '22px',
				},
				value: {
					fontSize: '16px',
				},
				total: {
					show: true,
					label: 'Sales',
					formatter: function (w) {
						// By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
						return '2500'
					}
				}
			}
		}
	},
	series: [90, 80, 70, 60, 50],
	labels: ['iMac', 'Macbook', 'iPad', 'iPhone', 'Others'],
	colors: ['#1a8e5f', '#262b31', '#434950', '#63686f', '#868a90'],
}

var chart = new ApexCharts(
	document.querySelector("#basic-radial-graph"),
	options
);
chart.render();