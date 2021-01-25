// By Device
var options = {
	chart: {
		width: '100%',
		height: 260,
		type: 'pie',
	},
	series: [2000, 3000, 4000, 5000, 6000],
	labels: ["Web", "Forums", "Emails", "Chat", "Phone"],
	stroke: {
		width: 0,
	},
	theme: {
		monochrome: {
			enabled: true,
			color: '#1a8e5f',
		}
	},
}
var chart = new ApexCharts(
	document.querySelector("#traffic-analysis"),
	options
);
chart.render();