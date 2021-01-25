var chart = new Chartist.Line('.areaChartTwo', {
  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
  series: [
		[300, 400, 500, 600, 700, 800, 900, 900],
		[100, 200, 300, 400, 500, 600, 700, 300],
  ]
}, {
  low: 0,
  lineSmooth: true,
	showArea: true,
	showLine: true,
	showPoint: true,
	showLabel: true,
	fullWidth: true,
	height: "150px",
	axisX: {
		offset: 0,
		showGrid: true,
		showLabel: true,
	}, 
	axisY: {
		offset: 0,
		showGrid: true,
		showLabel: true,
	},
	plugins: [
		Chartist.plugins.tooltip()
	],
});

chart.on('draw', function(data) {
  if(data.type === 'line' || data.type === 'area') {
    data.element.animate({
      d: {
        begin: 2000 * data.index,
        dur: 2000,
        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
        to: data.path.clone().stringify(),
        easing: Chartist.Svg.Easing.easeOutQuint
      }
    });
  }
});