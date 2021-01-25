var chart4 = c3.generate({
	bindto: '#stepGraph',
	padding: {
		top: 0,
		left: 30,
	},		
	data: {
		columns: [
			['data1', 52, 59, 78, 102, 95, 92, 100, 48, 55, 58, 62, 60, 24, 28, 31, 49, 57, 103, 117, 121, 126],
			['data2', 27, 32, 38, 36, 32, 36, 40, 15, 16, 82, 81, 85, 90, 95, 71, 19, 24, 44, 59, 73, 77, 89],
		],
		types: {
			data1: 'step',
			data2: 'area-step'
		},
		names: {
			data1: 'App',
			data2: 'LinkedIn'
		},
		colors: {
			data1: '#1a8e5f',
			data2: '#262b31'
		},
	}
});