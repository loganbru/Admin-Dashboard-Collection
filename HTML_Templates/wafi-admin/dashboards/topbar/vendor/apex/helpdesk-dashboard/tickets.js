var options = {
	chart: {
		height: 280,
		type: 'line',
		zoom: {
			enabled: false
		},
		toolbar: {
			show: false,
		},
	},
	series: [{
		name: 'New Tickets',
		type: 'column',
		data: [440, 505, 414, 571, 227, 413, 201, 352, 652, 320, 257, 160]
	}, {
		name: 'Closed Tickets',
		type: 'line',
		data: [200, 300, 259, 327, 129, 222, 117, 112, 322, 222, 152, 60]
	}],
	stroke: {
		width: [0, 4]
	},
	labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
  xaxis: {
    type: 'datetime'
  },
	colors: ['#1a8e5f', '#262b31', '#434950', '#63686f', '#868a90'],
}
var chart = new ApexCharts(
  document.querySelector("#tickets"),
  options
);
chart.render();
