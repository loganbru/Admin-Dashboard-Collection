var options = {
	chart: {
		height: 190,
		type: 'bar',
		toolbar: {
			show: false,
		},
	},
	plotOptions: {
		bar: {
			horizontal: true,
		}
	},
	dataLabels: {
		enabled: false
	},
	series: [{
		data: [2000, 3000, 4000, 5000, 6000]
	}],
	xaxis: {
		categories: ["Organic", "Search", "TV Ads", "Social", "Video"],
	},
	tooltip: {
		y: {
			formatter: function(val) {
				return val + ' Visits'
			}
		}
	},
}

var chart = new ApexCharts(
	document.querySelector("#by-channel"),
	options
);

chart.render();