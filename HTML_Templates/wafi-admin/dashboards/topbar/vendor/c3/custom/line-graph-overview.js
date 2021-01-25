var chart1 = c3.generate({
	bindto: '#lineGraphOverview',
	padding: {
		top: 0,
		left: 0,
	},	
	data: {
		columns: [
			['data1', 14, 28, 67, 49, 72, 59, 98, 48, 66, 58, 62, 60, 62, 58, 55, 61, 80],
			['data2', 3, 16, 19, 5, 27, 32, 38, 6, 32, 36, 40, 11, 41, 44, 46, 53, 33],
		],
		types: {
			data1: 'line',
			data2: 'area-spline'
		},
		names: {
			data1: 'Visitors',
			data2: 'Expenses',
		},
		colors: {
			data1: '#1a8e5f',
			data2: '#262b31',
		},
		point: {
    	r: 26
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