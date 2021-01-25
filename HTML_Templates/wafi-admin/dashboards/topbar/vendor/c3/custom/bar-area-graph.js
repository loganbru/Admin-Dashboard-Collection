var chart5 = c3.generate({
	bindto: '#barAreaGraph',
	data: {
		columns: [
			['data1', 24, 28, 31, 49, 57, 59, 52, 48, 55, 58, 62, 60, 62, 58, 55, 61, 70, 80, 77, 78, 82, 98, 99, 105, 102, 95, 92, 100, 103, 117, 121, 126],
			['data2', 15, 16, 19, 24, 27, 32, 38, 36, 32, 36, 40, 48, 41, 44, 46, 53, 58, 62, 65, 61, 64, 62, 59, 63, 67, 69, 72, 71, 75, 80, 65, 71],
		],
		types: {
			data1: 'bar',
			data2: 'area'
		},
		names: {
			data1: 'Twitter',
			data2: 'LinkedIn'
		},
		colors: {
			data1: '#1a8e5f',
			data2: '#262b31',
		},
		selection: {
			grouped: true,
		},
	},
});