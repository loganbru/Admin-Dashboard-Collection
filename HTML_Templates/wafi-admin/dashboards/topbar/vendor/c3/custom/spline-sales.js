var chart2 = c3.generate({
	bindto: '#splineSales',
	padding: {
		top: -20,
		left: 0,
		right: 0,
		bottom: 0
	},
	data: {
		columns: [
			['data1', 0, 350, 20, 90, 20, 80, 20, 130, 20, 50, 5],
			['data2', 0, 150, 10, 30, 10, 120, 10, 90, 10, 150, 10],
		],
		types: {
			data1: 'area-spline',
			data2: 'area-spline'
		},
		names: {
			data1: 'Tasks',
			data2: 'Leads',
		},
		colors: {
			data1: '#1a8e5f',
			data2: '#262b31',
		},
	},
	legend: {
		show: false,
	},
	axis: {
		x: {
			show: false,
		},
		y: {
			show: false,
		}
	}
});