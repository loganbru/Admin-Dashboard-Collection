var options = {
	chart: {
		height: 350,
		type: 'area',
		stacked: true,
		toolbar: {
			show: true,
		},
		events: {
			selection: function(chart, e) {
				console.log(new Date(e.xaxis.min) )
			}
		},
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		curve: 'straight',
		width: 3
	},
	series: [{
		name: 'Apple iPhone',
		data: generateDayWiseTimeSeries(new Date('11 Feb 2019 GMT').getTime(), 20, {
			min: 10,
			max: 60
		})
	},{
		name: 'Samsung Galaxy',
		data: generateDayWiseTimeSeries(new Date('11 Feb 2019 GMT').getTime(), 20, {
			min: 10,
			max: 20
		})
	},{
		name: 'Google Pixel',
		data: generateDayWiseTimeSeries(new Date('11 Feb 2019 GMT').getTime(), 20, {
			min: 10,
			max: 15
		})
	}],
	theme: {
		monochrome: {
			enabled: true,
			color: '#1a8e5f',
			shadeIntensity: 0.1
		},
	},
	grid: {
		row: {
			colors: ['#ffffff'], // takes an array which will be repeated on columns
			opacity: 0.5
		},
	},
	legend: {
		position: 'bottom',
		horizontalAlign: 'center'
	},
	xaxis: {
		type: 'datetime'
	},
}

var chart = new ApexCharts(
	document.querySelector("#basic-area-stack-graph"),
	options
);

chart.render();

/*
	// this function will generate output in this format
	// data = [
			[timestamp, 23],
			[timestamp, 33],
			[timestamp, 12]
			...
	]
	*/
function generateDayWiseTimeSeries(baseval, count, yrange) {
	var i = 0;
	var series = [];
	while (i < count) {
		var x = baseval;
		var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

		series.push([x, y]);
		baseval += 86400000;
		i++;
	}
	return series;
}