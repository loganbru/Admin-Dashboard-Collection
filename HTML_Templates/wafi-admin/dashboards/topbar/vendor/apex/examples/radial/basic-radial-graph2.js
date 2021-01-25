var options = {
	chart: {
		height: 280,
		type: 'radialBar',
	},
	plotOptions: {
		radialBar: {
			dataLabels: {
				name: {
					fontSize: '13px',
				},
				value: {
					fontSize: '16px',
				},
				total: {
					show: true,
					label: 'Tasks',
					formatter: function (w) {
						// By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
						return '45'
					}
				}
			}
		}
	},
	series: [90, 80, 70],
	labels: ['Completed', 'Ongoing', 'New'],
	colors: ['#1a8e5f', '#262b31', '#434950', '#63686f', '#868a90'],
}

var chart = new ApexCharts(
	document.querySelector("#basic-radial-graph2"),
	options
);
chart.render();