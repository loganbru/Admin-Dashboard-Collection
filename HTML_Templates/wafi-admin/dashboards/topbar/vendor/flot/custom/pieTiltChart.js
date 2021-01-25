$(function () {

	var data = [
		{ label: "Series 0", data: 1, color: '#1a8e5f'},
		{ label: "Series 1", data: 3, color: '#262b31'},
		{ label: "Series 2", data: 9, color: '#434950'},
		{ label: "Series 3", data: 20, color: '#63686f'}
	];

	var plotObj = $.plot($("#flotPieTiltChart"), data, {
		series: {
			pie: {
				show: true,
				tilt: 0.5,
				label: {
					show: true,
					radius: 3/4,
					// formatter: labelFormatter,
					background: {
						opacity: 0.8,
						color: '#ffffff'
					}
				}
			}
		},
		grid: {
			hoverable: true
		},
		tooltip: {
			show: true,
			content: "%p.0%, %s, n=%n",
			shifts: {
				x: 20,
				y: 0
			},
			defaultTheme: false
		}
	});
	
});