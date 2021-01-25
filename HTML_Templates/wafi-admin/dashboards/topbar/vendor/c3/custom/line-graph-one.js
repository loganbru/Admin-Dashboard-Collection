var chart1 = c3.generate({
	bindto: '#lineGraph1',
	padding: {
		top: 0,
		left: 0,
	},		
	data: {
		columns: [
			['data1', 14, 28, 31, 49, 57, 59, 52, 48, 55, 78, 82, 98, 99, 121, 136, 115, 112, 120, 103, 117, 121, 126],
			['data2', 3, 16, 19, 24, 27, 32, 38, 36, 32, 61, 64, 62, 59, 63, 87, 92, 72, 81, 75, 80, 97, 97],
		],
		names: {
			data1: 'New Visits',
			data2: 'Return'
		},
		colors: {
			data1: '#1a8e5f',
			data2: '#262b31',
		},
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