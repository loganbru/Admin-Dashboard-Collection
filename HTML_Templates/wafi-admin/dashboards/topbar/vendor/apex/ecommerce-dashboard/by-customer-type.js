// By Device
var options = {
	chart: {
		width: '100%',
		height: 185,
		type: 'pie',
	},
	series: [2000, 3000],
	labels: ["Returning", "New"],
	stroke: {
		width: 0,
	},
	colors: ['#1a8e5f', '#cc2626', '#434950', '#63686f', '#868a90'],
}
var chart = new ApexCharts(
	document.querySelector("#by-customer-type"),
	options
);
chart.render();