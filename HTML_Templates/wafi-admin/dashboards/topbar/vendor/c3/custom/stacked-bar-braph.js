var chart7 = c3.generate({
	bindto: '#stackedBarGraph',
	padding: {
		top: 0,
		left: 30,
	},		
	data: {
		columns: [
			['data1', 30, 90, 200, 400, 590, 250, 330, 120],
			['data2', 130, 100, 200, 200, 450, 150, 190, 220],
			// ['data3', 230, 200, 200, 300, 250, 250, 320, 180, 410, 270, 180, 210, 270, 420, 330, 180, 410, 270, 180, 110]
		],
		type: 'bar',
		names: {
			data1: 'Visits',
			data2: 'Sales',
			// data3: 'Facebook',
		},
		colors: {
			data1: '#1a8e5f',
			data2: '#262b31',
			// data3: '#dddddd',
		},
		groups: [
			['data1', 'data2']
		]
	},
	axis: {
		y: {
			tick: {
				count: 5,
			}
		}
	},
	grid: {
		x: {
			show: true,
		},
		y: {
			show: true
		}
	},
});