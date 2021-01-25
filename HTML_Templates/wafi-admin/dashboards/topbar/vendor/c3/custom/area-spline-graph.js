var chart3 = c3.generate({
	bindto: '#areaSplineGraph',
	padding: {
		top: 0,
		left: 30,
	},		
	data: {
		columns: [
			['data1', 24, 49, 52, 48, 62, 60, 62, 70, 90, 82, 125, 92, 100, 103, 117, 101, 136],
			['data2', 30, 27, 39, 32, 40, 48, 46, 57, 64, 62, 59, 71, 75, 80, 65, 51, 102],
		],
		types: {
			data1: 'area-spline',
			data2: 'area-spline'
		},
		names: {
			data1: 'Male',
			data2: 'Female'
		},
		colors: {
			data1: '#1a8e5f',
			data2: '#262b31',
		},
	},
});