// Pie Chart 1
new Chartist.Pie('.pieChartCustomers', {
	labels: ['New', 'Returned'],
	series: [900, 450]
}, {
	donut: true,
	donutWidth: 15,
	donutSolid: true,
	startAngle: 0,
	showLabel: false,
	height: "150px",
	plugins: [
		Chartist.plugins.tooltip()
	],
	low: 0
});





// Pie Chart 2
// new Chartist.Pie('.pieChartDeals', {
// 	labels: ['Claimed', 'Expired'],
// 	series: [620, 250]
// }, {
// 	donut: true,
// 	donutWidth: 15,
// 	donutSolid: true,
// 	startAngle: 250,
// 	showLabel: false,
// 	height: "150px",
// 	plugins: [
// 		Chartist.plugins.tooltip()
// 	],
// 	low: 0
// });





// Pie Chart 3
new Chartist.Pie('.pieChartEmails', {
	labels: ['Sent', 'Opened'],
	series: [800, 550]
}, {
	donut: true,
	donutWidth: 15,
	donutSolid: true,
	startAngle: 0,
	showLabel: false,
	height: "150px",
	plugins: [
		Chartist.plugins.tooltip()
	],
	low: 0
});





// Pie Chart 4
new Chartist.Pie('.pieChartOrders', {
	labels: ['Online', 'Direct'],
	series: [350, 550]
}, {
	donut: true,
	donutWidth: 15,
	donutSolid: true,
	startAngle: 0,
	showLabel: false,
	height: "150px",
	plugins: [
		Chartist.plugins.tooltip()
	],
	low: 0
});