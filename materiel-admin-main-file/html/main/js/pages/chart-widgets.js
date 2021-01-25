//[custom Javascript]



// Fullscreen
$(function () {
	'use strict'
	// Composite line charts, the second using values supplied via javascript
    		
		$("#linechart").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '100',
			height: '38',
			lineColor: '#39DA8A',
			fillColor: '#ffffff',
			lineWidth: 2,
			minSpotColor: '#39DA8A',
			maxSpotColor: '#39DA8A',
		});
		$("#linechart2").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '100',
			height: '38',
			lineColor: '#00CFDD',
			fillColor: '#ffffff',
			lineWidth: 2,
			minSpotColor: '#00CFDD',
			maxSpotColor: '#00CFDD',
		});
		$("#linechart3").sparkline([32,24,26,24,32,26,40,34,22,24,22,24,34,32,38,28,36,36,40,38,30,34,38], {
			type: 'line',
			width: '100%',
			height: '45',
			lineColor: '#39DA8A',
			fillColor: '#ffffff',
			lineWidth: 2,
			minSpotColor: '#39DA8A',
			maxSpotColor: '#39DA8A',
		});
		$("#linechart4").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '50%',
			height: '100',
			lineColor: '#39DA8A',
			fillColor: '#ffffff',
			lineWidth: 2,
			minSpotColor: '#39DA8A',
			maxSpotColor: '#39DA8A',
		});
	
		$("#barchart").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'bar',
			height: '38',
			width: '100%',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#FDAC41',
		});
		$("#barchart2").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'bar',
			height: '38',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#FDAC41',
		});
		$("#barchart3").sparkline([32,24,26,24,32,26,40,34,22,24,22,24,34,32,38,28,36,36,40,38,30,34,38], {
			type: 'bar',
			height: '45',
			width: '100%',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#FF5B5C',
		});
		$("#barchart4").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'bar',
			height: '100',
			width: '50%',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#FF5B5C',
		});
	
		$("#discretechart").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'discrete',
			width: '50',
			height: '38',
			lineColor: '#5A8DEE',
		});
		$("#discretechart2").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'discrete',
			width: '50',
			height: '38',
			lineColor: '#5A8DEE',
		});
		$("#discretechart3").sparkline([32,24,26,24,32,26,40,34,22,24,22,24,34,32,38,28,36,36,40,38,30,34,38], {
			type: 'discrete',
			width: '180',
			height: '45',
			lineColor: '#FDAC41',
		});
		$("#discretechart4").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'discrete',
			width: '100',
			height: '100',
			lineColor: '#FDAC41',
		});
		
		$("#linearea").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '100%',
			height: '80',
			lineColor: '#39DA8A',
			fillColor: '#39DA8A',
			lineWidth: 2,
		});
		$("#linearea2").sparkline([32,24,26,24,32,26,40,34,22,24,22,24,34,32,38,28,36,36,40,38,30,34,38], {
			type: 'line',
			width: '100%',
			height: '45',
			lineColor: '#5A8DEE',
			fillColor: '#5A8DEE',
			lineWidth: 2,
		});
		$("#linearea3").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '50%',
			height: '100',
			lineColor: '#5A8DEE',
			fillColor: '#5A8DEE',
			lineWidth: 1,
		});
		
		$("#baralc").sparkline([32,24,26,24,32,26,40,34,22,24,22,24,34,32,38,28,36,36,40,38,30,34,38], {
			type: 'bar',
			height: '80',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#FDAC41',
		});
		
		$("#lineIncrease").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '100%',
			height: '92',
			lineWidth: 2,
			lineColor: '#ffffff',
			fillColor: "#00BCD4",
			spotColor: '#ffffff',
			minSpotColor: '#ffffff',
			maxSpotColor: '#ffffff',
			spotRadius: 3,
		});
		
		$("#lineToday").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '100%',
			height: '70',
			lineColor: '#ffffff',
			fillColor: '#9C27B0',
			lineWidth: 2,
			spotRadius: 3,
		});
		
		$("#baranl").sparkline([32,24,26,24,32,26,40,34,22,24,22,24,34,32,38,28,36,36,40,38,30,34,38], {
			type: 'bar',
			height: '70',
			barColor: '#FF5B5C',
			barWidth: 7,
    		barSpacing: 5,
		});
		
		$("#lineTo").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'line',
			width: '100%',
			height: '70',
			lineColor: '#ffffff',
			fillColor: '#8d6658',
			lineWidth: 3,
			spotColor: '#ffffff',
			highlightSpotColor: '#ffffff',
			highlightLineColor: '#ffffff',
			spotRadius: 3,
		});
		
		// donut chart
		$('.donut').peity('donut');
		
		// bar chart
		$(".bar").peity("bar");	
	
		
		$('.countnm').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 1000,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});
	
}); // End of use strict
		
// easypie chart
	$(function() {
		'use strict'
		$('.easypie').easyPieChart({
			easing: 'easeOutBounce',
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
		var chart = window.chart = $('.easypie').data('easyPieChart');
		$('.js_update').on('click', function() {
			chart.update(Math.random()*200-100);
		});
	});// End of use strict