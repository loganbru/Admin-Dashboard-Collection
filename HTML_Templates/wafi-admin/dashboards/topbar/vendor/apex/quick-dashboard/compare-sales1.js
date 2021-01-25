var options = {
	chart: {
		height: 180,
		type: 'line',
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		curve: 'smooth',
		width: 3
	},
	series: [{
		name: 'Sales',
		data: [100, 400, 700, 300]
	}],
	grid: {
		row: {
			colors: ['#ffffff'], // takes an array which will be repeated on columns
			opacity: 0.5,
		},
		xaxis: {
      lines: {
        show: false
      }
    },   
    yaxis: {
      lines: {
        show: false
      }
    },
	},
	xaxis: {
		categories: ['Electronics', 'Grocery', 'Beauty', 'Toys'],
		// labels: {
	 //    show: false
	 //  }
	},
	colors: ['#262b31', '#1a8e5f', '#434950', '#63686f', '#868a90'],
	markers: {
		size: 5,
		opacity: 0.2,
		colors: ["#262b31"],
		strokeColor: "#ffffff",
		strokeWidth: 2,
		hover: {
			size: 7,
		}
	},
	tooltip: {
		y: {
			formatter: function(val) {
				return  "$" + val + 'k'
			}
		}
	},
}

var chart = new ApexCharts(
	document.querySelector("#compare-expenses"),
	options
);

chart.render();
