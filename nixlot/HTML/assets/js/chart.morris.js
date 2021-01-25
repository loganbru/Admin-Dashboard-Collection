$(function() {
	'use strict';
	var morrisData = [{
		y: '2006',
		a: 12,
		b: 18
	}, {
		y: '2007',
		a: 18,
		b: 22
	}, {
		y: '2008',
		a: 15,
		b: 18
	}, {
		y: '2009',
		a: 25,
		b: 28
	}, {
		y: '2010',
		a: 30,
		b: 35
	}, {
		y: '2011',
		a: 18,
		b: 28
	}, {
		y: '2012',
		a: 12,
		b: 18
	}];
	var morrisData2 = [{
		y: '2006',
		a: 12,
		b: 18,
		c: 20
	}, {
		y: '2007',
		a: 18,
		b: 22,
		c: 25
	}, {
		y: '2008',
		a: 15,
		b: 18,
		c: 24
	}, {
		y: '2009',
		a: 25,
		b: 28,
		c: 30
	}, {
		y: '2010',
		a: 30,
		b: 35,
		c: 38
	}, {
		y: '2011',
		a: 18,
		b: 28,
		c: 40
	}, {
		y: '2012',
		a: 12,
		b: 18,
		c: 28
	}];
	new Morris.Bar({
		element: 'morrisBar1',
		data: morrisData,
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Series A', 'Series B'],
		barColors: ['#ea614c','#00cccc'],
		gridTextSize: 11,
		hideHover: 'auto',
		resize: true
	});
	new Morris.Bar({
		element: 'morrisBar2',
		data: morrisData2,
		xkey: 'y',
		ykeys: ['a', 'b', 'c'],
		labels: ['Series A', 'Series B', 'Series C'],
		barColors: ['#2ed672','#ea614c','#00cccc'],
		gridTextSize: 11,
		hideHover: 'auto',
		resize: true
	});
	new Morris.Bar({
		element: 'morrisBar3',
		data: morrisData,
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Series A', 'Series B'],
		barColors: ['#ea614c','#00cccc'],
		stacked: true,
		gridTextSize: 11,
		hideHover: 'auto',
		resize: true
	});
	new Morris.Bar({
		element: 'morrisBar4',
		data: morrisData2,
		xkey: 'y',
		ykeys: ['a', 'b', 'c'],
		labels: ['Series A', 'Series B', 'Series C'],
		barColors: ['#2ed672','#ea614c','#00cccc'],
		stacked: true,
		gridTextSize: 11,
		hideHover: 'auto',
		resize: true
	});
	new Morris.Line({
		element: 'morrisLine1',
		data: [{
			y: '2006',
			a: 12,
			b: 18
		}, {
			y: '2007',
			a: 18,
			b: 22
		}, {
			y: '2008',
			a: 15,
			b: 18
		}, {
			y: '2009',
			a: 25,
			b: 28
		}, {
			y: '2010',
			a: 30,
			b: 35
		}, {
			y: '2011',
			a: 18,
			b: 28
		}, {
			y: '2012',
			a: 12,
			b: 18
		}],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Series A', 'Series B'],
		lineColors: ['#ea614c','#00cccc'],
		lineWidth: 1,
		ymax: 'auto 50',
		gridTextSize: 11,
		hideHover: 'auto',
		resize: true
	});
	new Morris.Line({
		element: 'morrisLine2',
		data: [{
			y: '2006',
			a: 12,
			b: 18,
			c: 20
		}, {
			y: '2007',
			a: 18,
			b: 22,
			c: 25
		}, {
			y: '2008',
			a: 15,
			b: 18,
			c: 24
		}, {
			y: '2009',
			a: 25,
			b: 28,
			c: 30
		}, {
			y: '2010',
			a: 30,
			b: 35,
			c: 38
		}, {
			y: '2011',
			a: 18,
			b: 28,
			c: 40
		}, {
			y: '2012',
			a: 12,
			b: 18,
			c: 28
		}],
		xkey: 'y',
		ykeys: ['a', 'b', 'c'],
		labels: ['Series A', 'Series B', 'Series C'],
		lineColors: ['#2ed672','#ea614c','#00cccc'],
		lineWidth: 1,
		ymax: 'auto 50',
		gridTextSize: 11,
		hideHover: 'auto',
		resize: true
	});
	new Morris.Area({
		element: 'morrisArea1',
		data: [{
			y: '2006',
			a: 12,
			b: 18
		}, {
			y: '2007',
			a: 18,
			b: 22
		}, {
			y: '2008',
			a: 15,
			b: 18
		}, {
			y: '2009',
			a: 25,
			b: 28
		}, {
			y: '2010',
			a: 30,
			b: 35
		}, {
			y: '2011',
			a: 18,
			b: 28
		}, {
			y: '2012',
			a: 12,
			b: 18
		}],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Series A', 'Series B'],
		lineColors: ['#ea614c','#00cccc'],
		lineWidth: 1,
		fillOpacity: 0.9,
		gridTextSize: 11,
		hideHover: 'auto',
		resize: true,
		ymax: 'auto 100',
	});
	new Morris.Area({
		element: 'morrisArea2',
		data: [{
			y: '2006',
			a: 12,
			b: 18,
			c: 20
		}, {
			y: '2007',
			a: 18,
			b: 22,
			c: 25
		}, {
			y: '2008',
			a: 15,
			b: 18,
			c: 24
		}, {
			y: '2009',
			a: 25,
			b: 28,
			c: 30
		}, {
			y: '2010',
			a: 30,
			b: 35,
			c: 38
		}, {
			y: '2011',
			a: 18,
			b: 28,
			c: 40
		}, {
			y: '2012',
			a: 12,
			b: 18,
			c: 28
		}],
		xkey: 'y',
		ykeys: ['a', 'b', 'c'],
		labels: ['Series A', 'Series B', 'Series C'],
		lineColors: ['#2ed672','#ea614c','#00cccc'],
		lineWidth: 1,
		fillOpacity: 1,
		gridTextSize: 11,
		hideHover: 'auto',
		resize: true,
		ymax: 'auto 150',
	});
	new Morris.Donut({
		element: 'morrisDonut1',
		data: [{
			label: 'Google',
			value: 42
		}, {
			label: 'Firefox',
			value: 32
		}, {
			label: 'IE',
			value: 26
		}],
		colors: ['#00cccc','#ea614c', '#3bb001'],
		resize: true,
		backgroundColor: 'rgba(119, 119, 142, 0.2)',
		labelColor: '#77778e',
	});
	new Morris.Donut({
		element: 'morrisDonut2',
		data: [{
			label: 'Google',
			value: 42
		}, {
			label: 'Firefox',
			value: 24
		}, {
			label: 'IE',
			value: 18
		}, {
			label: 'Opera',
			value: 16
		}],
		colors: ['#00cccc', '#ea614c','#3bb001', '#f10075'],
		resize: true,
		backgroundColor: 'rgba(119, 119, 142, 0.2)',
		labelColor: '#77778e',
	});
});