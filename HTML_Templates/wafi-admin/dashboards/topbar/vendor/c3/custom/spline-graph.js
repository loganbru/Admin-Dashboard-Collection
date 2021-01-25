var chart2 = c3.generate({
	bindto: '#splineGraph',
	padding: {
		top: 0,
		left: 30,
		right: 0,
		bottom: 0
	},	
	data: {
		columns: [
			['data1', 24, 28, 31, 49, 57, 59, 52, 48, 55, 58, 62, 60, 62, 58, 55, 61, 70, 80, 77, 78, 82, 98, 99, 105, 102, 95, 92, 100, 103, 117, 121, 126],
			['data2', 15, 16, 19, 24, 27, 32, 38, 36, 32, 36, 40, 48, 41, 44, 46, 53, 58, 62, 65, 61, 64, 62, 59, 63, 67, 69, 72, 71, 75, 80, 65, 71],
		],
		types: {
			data1: 'spline',
			data2: 'area-spline'
		},
		names: {
			data1: 'Likes',
			data2: 'Clicks'
		},
		colors: {
			data1: '#1a8e5f',
			data2: '#262b31'
		},
	}
});