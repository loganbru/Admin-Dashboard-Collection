new Chartist.Bar('.barChart', {
	labels: ['Q1', 'Q2', 'Q3', 'Q4'],
	series: [
		[
			{meta: 'Male', value: 2000},
			{meta: 'Male', value: 4000},
			{meta: 'Male', value: 6000},
			{meta: 'Male', value: 8000},
		],
		[
			{meta: 'Female', value: 3000},
			{meta: 'Female', value: 5000},
			{meta: 'Female', value: 7000},
			{meta: 'Female', value: 9000},
		],
	],
}, {
	reverseData: true,
	seriesBarDistance: 15,
	height: "240px",
	chartPadding: {
		right: 0,
		left: 20,
		top: 0,
		bottom: 0,
	},
	axisY: {
		offset: 30
	},
	plugins: [
		Chartist.plugins.tooltip()
	],
});
