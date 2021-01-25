new Chartist.Bar('.stacked-bar', {
	labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
	series: [
		[
			{meta: 'Online Sales', value: 55},
			{meta: 'Online Sales', value: 83},
			{meta: 'Online Sales', value: 72},
			{meta: 'Online Sales', value: 68},
			{meta: 'Online Sales', value: 57},
			{meta: 'Online Sales', value: 41},
			{meta: 'Online Sales', value: 30}
		],
		[
			{meta: 'Offline Sales', value: 35},
			{meta: 'Offline Sales', value: 52},
			{meta: 'Offline Sales', value: 37},
			{meta: 'Offline Sales', value: 45},
			{meta: 'Offline Sales', value: 35},
			{meta: 'Offline Sales', value: 27},
			{meta: 'Offline Sales', value: 19}
		],
		[
			{meta: 'Visitors', value: 12},
			{meta: 'Visitors', value: 25},
			{meta: 'Visitors', value: 22},
			{meta: 'Visitors', value: 30},
			{meta: 'Visitors', value: 43},
			{meta: 'Visitors', value: 39},
			{meta: 'Visitors', value: 24}
		],
	],
}, {
	stackBars: true,
	seriesBarDistance: 4,
	height: "176px",
	chartPadding: {
		left: 10,
		top: 0,
		bottom: 0,
	},
	axisX: {
		offset: 20,
	}, 
	axisY: {
		showLabel: true,
		showGrid: false,
		offset: 30,
	},
	plugins: [
		Chartist.plugins.tooltip()
	], 
}).on('draw', function(data) {
	if(data.type === 'bar') {
		data.element.attr({
			style: 'stroke-width: 32px'
		});
	}
});