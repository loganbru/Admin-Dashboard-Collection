var chart11 = c3.generate({
	bindto: '#serverRequests',
	padding: {
		top: 10,
		left: 40,
	},
	data: {
		columns: [
			['data1', 32, 11, 67, 33, 19, 21, 28, 21, 19, 43, 23, 34, 55, 43, 33, 77, 33, 87, 46, 39, 51, 32, 66, 99, 32, 54, 33, 24, 54, 22, 37, 76, 67, 89, 34, 12, 77, 99, 59, 66, 28, 77, 39, 60,  66, 99, 32, 54, 33, 24, 54, 22, 37, 76, 67, 89, 34, 12, 77, 55, 37, 22, 12, 87, 12, 32],
		],
		types: {
			data1: 'area',
		},
		names: {
			data1: 'Requests',
		},
		colors: {
			data1: '#1a8e5f',
		},
	},
	axis: {
		y: {
			tick: {
				count: 3,
			}
		}
	}
});