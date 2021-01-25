/*Dashboard Init*/
/*Dashboard Init*/
 
"use strict"; 
$(document).ready(function() {
	/*Toaster Alert*/
	$.toast({
		heading: 'Well done!',
		text: '<p>You have successfully completed level 1.</p><button class="btn btn-primary btn-sm mt-10">Play again</button>',
		position: 'top-right',
		loaderBg:'#ab26aa',
		class: 'jq-toast-primary',
		hideAfter: 3500, 
		stack: 6,
		showHideTransition: 'fade'
	});
	if($('#area_chart').length > 0) {
		var data=[{
            period: 'Son',
            iphone: 10,
            ipad: 80,
        }, {
            period: 'Mon',
            iphone: 130,
            ipad: 100,
        }, {
            period: 'Tue',
            iphone: 80,
            ipad: 30,
        }, {
            period: 'Wed',
            iphone: 70,
            ipad: 200,
        }, {
            period: 'Thu',
            iphone: 180,
            ipad: 50,
        }, {
            period: 'Fri',
            iphone: 105,
            ipad: 170,
        },
         {
            period: 'Sat',
            iphone: 250,
            ipad: 150,
        }];
		
		var lineChart = Morris.Area({
        element: 'area_chart',
        data: data ,
        xkey: 'period',
        ykeys: ['iphone', 'ipad'],
        labels: ['iphone', 'ipad'],
        pointSize: 0,
        lineWidth:0,
		fillOpacity: 0.95,
		pointStrokeColors:['#97ca5a','#ab26aa'],
		behaveLikeLine: true,
		grid: false,
		hideHover: 'auto',
		lineColors: ['#97ca5a','#ab26aa'],
		resize: true,
		redraw: true,
		smooth: true,
		gridTextColor:'#878787',
		gridTextFamily:"Nunito",
        parseTime: false
    });
	}
	if( $('#m_chart_4').length > 0 ){
		// Line Chart
		var data=[{ y: '100', a: 10, b: 20, c: 40},
				  { y: '200', a: 30, b: 50, c: 70},
				  { y: '300', a: 20, b: 40, c: 50},
				  { y: '400', a: 50, b: 70, c: 90},
				  { y: '500', a: 10, b: 40, c: 100},
				  
				];
		var lineChart = Morris.Line({
				element: 'm_chart_4',
				data: data,
				xkey: 'y',
				ykeys: ['a', 'b', 'c'],
				labels: ['Total Income', 'Total Outcome', 'Total Expences'],
				gridLineColor: 'transparent',
				resize: true,
				gridTextColor:'#6f7a7f',
				gridTextFamily:"Inherit",
				hideHover: 'auto',
				behaveLikeLine: true,
				smooth:false,
				pointSize:4,
				lineWidth:2,
				pointFillColors:['#fff','#fff','#fff'],
				pointStrokeColors: ['#ab26aa','#97ca5a','#aed67e'],
				lineColors: ['#ab26aa','#97ca5a','#aed67e'],
			});	
	}

	
});

/*****E-Charts function start*****/
var echartsConfig = function() { 
	if( $('#e_chart_1').length > 0 ){
		var eChart_1 = echarts.init(document.getElementById('e_chart_1'));
		var option = {
			tooltip: {
				show: true,
				backgroundColor: '#fff',
				borderRadius:6,
				padding:6,
				axisPointer:{
					lineStyle:{
						width:0,
					}
				},
				textStyle: {
					color: '#324148',
					fontFamily: '"Poppins", sans-serif',
					fontSize: 12
				}	
			},
			series: [
				{
					type: 'pie',
					selectedMode: 'single',
					radius: ['90%', '60%'],
					labelLine: {
						normal: {
							show: false
						}
					},
					color: ['#ab26aa', '#e2e2e2'],
					data:[
						{value:435, name:''},
						{value:679, name:''},
					]
				}
			]
		};
		eChart_1.setOption(option);
		eChart_1.resize();
	}
	
	if( $('#e_chart_3').length > 0 ){
		var eChart_3 = echarts.init(document.getElementById('e_chart_3'));
		var option2 = {
			color: ['#ab26aa', '#bdbdbd','#cecece','#ab26aa','#e2e2e2'],		
			tooltip: {
				show: true,
				trigger: 'axis',
				backgroundColor: '#fff',
				borderRadius:6,
				padding:6,
				axisPointer:{
					lineStyle:{
						width:0,
					}
				},
				textStyle: {
					color: '#324148',
					fontFamily: '"Nunito", sans-serif',
					fontSize: 12
				}	
			},
			
			grid: {
				top: '3%',
				left: '3%',
				right: '3%',
				bottom: '3%',
				containLabel: true
			},
			xAxis : [
				{
					type : 'category',
					data : ['2011','2012','2013','2014','2015','2016','2017'],
					axisLine: {
						show:false
					},
					axisTick: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#5e7d8a'
						}
					}
				}
			],
			yAxis : [
				{
					type : 'value',
					axisLine: {
						show:false
					},
					axisTick: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#5e7d8a'
						}
					},
					splitLine: {
						lineStyle: {
							color: '#eee',
						}
					}
				}
			],
			series : [
				{
					name:'1',
					type:'bar',
					stack: 'st1',
					barMaxWidth: 40,
					data:[320, 332, 301, 334, 390, 330, 320],
				},
				{
					name:'2',
					type:'bar',
					stack: 'st1',
					barMaxWidth: 40,
					data:[120, 132, 101, 134, 90, 230, 210],
				},
				{
					name:'3',
					type:'bar',
					stack: 'st1',
					barMaxWidth: 40,
					data:[220, 182, 191, 234, 290, 330, 310],
				},
				{
					name:'4',
					type:'line',
					symbolSize: 8,
					lineStyle: {
						width:3,
					},
					data:[150, 232, 201, 154, 190, 330, 410],
				},
				{
					name:'5',
					type:'bar',
					data:[150, 232, 201, 154, 190, 330, 410],
				}
			]
		};

		eChart_3.setOption(option2);
		eChart_3.resize();
	}
	
	if( $('#e_chart_4').length > 0 ){
		var eChart_4 = echarts.init(document.getElementById('e_chart_4'));
		var option4 = {
			timeline: {
				data: ['91', '92', '93', '94', '95', '96', '97', '98', '99', '91'],
				axisType: 'category',
				show: false,
				playInterval: 1000,
			},
			options: [{
				tooltip: {
					show: true,
					trigger: 'axis',
					backgroundColor: '#fff',
					borderRadius:6,
					padding:6,
					axisPointer:{
						lineStyle:{
							width:0,
						}
					},
					textStyle: {
						color: '#324148',
						fontFamily: '"Nunito", sans-serif',
						fontSize: 12
					}	
				},
				calculable: true,
				grid: {
					top: '3%',
					left: '3%',
					right: '3%',
					bottom: '3%',
					containLabel: true
				},
				xAxis: [{
					'type': 'category',
					axisLabel: {
						textStyle: {
							color: '#324148',
							fontFamily: '"Nunito", sans-serif',
							fontSize: 12
						}	
					},
					axisLine: {
						show:false
					},
					splitLine:{
						show:false
					},
					'data': [
						'x1', ' x2', 'x3', 'x4', 'x5', 'x6', 'x7', 'x8'
					]
				}],
				yAxis: [{
					type: 'value',
					axisLine: {
						show:false
					},
					axisTick: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#5e7d8a'
						}
					},
					splitLine: {
						lineStyle: {
							color: '#eee',
						}
					}
				}, {
					type: 'value',
					axisLine: {
						show:false
					},
					axisTick: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#5e7d8a'
						}
					},
					splitLine: {
						lineStyle: {
							color: '#eee',
						}
					}
				}],
				series: [{
					'name': 'tq',
					'yAxisIndex': 1,
					'type': 'line',
					'data': [10, 28, 20, 28, 24, 24, 24, 10],
					symbolSize: 10,
					lineStyle: {
						width:3,
					},
					itemStyle: {
						normal: {
							color: '#ab26aa',
						}
					},
					areaStyle: {
						normal: {
							color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
								offset: 0,
								color: '#ab26aa'
							}, {
								offset: 1,
								color: '#fff'
							}])
						}
					},
					label: {
						normal: {
							show: true,
							position: 'top',
							formatter: '{c}',
							color: '#5e7d8a',
							fontStyle: 'normal',
							fontWeight: 'normal',
							fontFamily: "inherit",
							fontSize: 12
						}
					},
				}]
			}]
		};
		eChart_4.setOption(option4);
		eChart_4.resize();
	}
	
}
/*****E-Charts function end*****/

var sparklineLogin = function() { 
	if( $('#sparkline_1').length > 0 ){
		$("#sparkline_1").sparkline([2,4,4,6,8,5,6,4,8,6,6,2 ], {
			type: 'bar',
			width: '100%',
			height: '40',
			barWidth: '5',
			resize: true,
			barSpacing: '5',
			barColor: '#ab26aa',	
			highlightSpotColor: '#ab26aa'
		});
	}	
	if( $('#sparkline_2').length > 0 ){
		$("#sparkline_2").sparkline([2,7,7,5,8,5,4,4,3,4,6,1 ], {
			type: 'bar',
			width: '100%',
			height: '40',
			barWidth: '5',
			resize: true,
			barSpacing: '5',
			barColor: '#ab26aa',	
			highlightSpotColor: '#ab26aa'
		});
	}	
	if( $('#sparkline_3').length > 0 ){
		$("#sparkline_3").sparkline([9,3,3,2,8,6,4,3,3,2,6,1 ], {
			type: 'bar',
			width: '100%',
			height: '40',
			barWidth: '5',
			resize: true,
			barSpacing: '5',
			barColor: '#ab26aa',	
			highlightSpotColor: '#ab26aa'
		});
	}
	if( $('#sparkline_4').length > 0 ){
		$("#sparkline_4").sparkline([5,3,3,2,1,6,2,3,5,2,2,1 ], {
			type: 'bar',
			width: '100%',
			height: '40',
			barWidth: '5',
			resize: true,
			barSpacing: '5',
			barColor: '#ab26aa',	
			highlightSpotColor: '#ab26aa'
		});
	}
}
sparklineLogin();

/*****Resize function start*****/
var sparkResize,echartResize;
$(window).on("resize", function () {
	/*Sparkline Resize*/
	clearTimeout(sparkResize);
	sparkResize = setTimeout(sparklineLogin, 200);
	
	/*E-Chart Resize*/
	clearTimeout(echartResize);
	echartResize = setTimeout(echartsConfig, 200);
}).resize(); 
/*****Resize function end*****/

/*****Function Call start*****/
echartsConfig();
/*****Function Call end*****/