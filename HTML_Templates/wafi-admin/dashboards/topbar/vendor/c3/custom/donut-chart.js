var chart10 = c3.generate({
	bindto: '#donutChart',
	data: {
		columns: [
			['Likes', 60],
			['Shares', 30],
			['Clicks', 15],
		],
		type : 'donut',
		colors: {
			Likes: '#1a8e5f',
			Shares: '#262b31',
			Clicks: '#434950',
		},
		onclick: function (d, i) { console.log("onclick", d, i); },
		onmouseover: function (d, i) { console.log("onmouseover", d, i); },
		onmouseout: function (d, i) { console.log("onmouseout", d, i); }
	},
	donut: {
		title: "Clicks"
	},
});