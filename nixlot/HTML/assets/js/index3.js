$(function() {
	'use strict'
	$(".users-scroll").mCustomScrollbar({
		theme:"minimal",
		autoHideScrollbar: true,
		scrollbarPosition: "outside"
	});


	// Bar charts
    $('.peity-donut').peity('donut');

	// Mini Bar charts
	$('.peity-bar').peity('bar');

	/*----- ChartBar6 -----*/
	var ctx6 = document.getElementById('chartBar6').getContext('2d');
	new Chart(ctx6, {
	  type: 'bar',
	  data: {
		labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
		datasets: [{
		  data: [150,110,90,115,125,160,160,140,100,110,120,120],
		  backgroundColor: '#393984'
		},{
		  data: [180,140,120,135,155,170,180,150,140,150,130,130],
		  backgroundColor: '#5b7af7'
		}]
	  },
	  options: {
		maintainAspectRatio: false,
		legend: {
		  display: false,
			labels: {
			  display: false
			}
		},
		scales: {
		  xAxes: [{
			//stacked: true,
			display: false,
			barPercentage: 0.5,
			ticks: {
			  beginAtZero:true,
			  fontSize: 11
			}
		  }],
		  yAxes: [{
			ticks: {
			  fontSize: 10,
			  color: '#77778e',
			  min: 80,
			  max: 200
			}
		  }]
		}
	  }
	});



});