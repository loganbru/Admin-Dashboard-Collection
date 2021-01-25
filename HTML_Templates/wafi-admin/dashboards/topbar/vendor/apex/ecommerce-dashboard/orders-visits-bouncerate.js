var options = {
	chart: {
		height: 250,
		type: 'line',
		stacked: false,
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false
	},
	series: [{
		name: 'Orders',
		type: 'column',
		data: [40, 25, 29, 56, 62, 87, 85, 79, 49]
	},{
		name: 'Visits',
		type: 'column',
		data: [25, 35, 11, 47, 51, 94, 56, 87, 52]
	},{
		name: 'Revenue',
		type: 'line',
		data: [20, 10, 15, 36, 44, 45, 50, 58, 47]
	}],
	stroke: {
		width: [0, 0, 3]
	},
	colors: ['#1a8e5f', '#1d9f6c', '#262b31', '#63686f', '#868a90'],
	xaxis: {
		categories: ['Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
	},
	yaxis: [{
		seriesName: 'Orders',
		axisTicks: {
			show: true,
		},
		axisBorder: {
			show: true,
			color: '#1a8e5f'
		},
		labels: {
			style: {
				color: '#1a8e5f',
			}
		},
		title: {
			text: "Orders (in thousands)",
			style: {
				color: '#1a8e5f',
			}
		},
		tooltip: {
			enabled: true
		}
	},{
			seriesName: 'Visits',
			opposite: true,
			axisTicks: {
				show: true,
			},
			axisBorder: {
				show: true,
				color: '#1d9f6c'
			},
			labels: {
				style: {
					color: '#1d9f6c',
				}
			},
			title: {
				text: "Visits (in thousand)",
				style: {
					color: '#1d9f6c',
				}
			},
		},{
			seriesName: 'Revenue',
			opposite: true,
			axisTicks: {
				show: true,
			},
			axisBorder: {
				show: true,
				color: '#262b31'
			},
			labels: {
				style: {
					color: '#262b31',
				},
			},
			title: {
				text: "Revenue (in crores)",
				style: {
					color: '#262b31',
				}
			}
		},
	],
	legend: {
		horizontalAlign: 'center',
		offsetY: 10
	}
}

var chart = new ApexCharts(
	document.querySelector("#orders-visits"),
	options
);
chart.render();