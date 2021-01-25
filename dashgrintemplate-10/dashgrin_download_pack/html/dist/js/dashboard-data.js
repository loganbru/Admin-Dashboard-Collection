/*Dashboard3 Init*/
 
"use strict"; 
$(document).ready(function() {
	/*Toaster Alert*/
	$.toast({
		heading: 'Well done!',
		text: '<p>You have successfully completed level 1.</p><button class="btn btn-success btn-sm mt-10">Play again</button>',
		position: 'bottom-right',
		loaderBg:'#22AF47',
		class: 'jq-toast-success',
		hideAfter: 3500, 
		stack: 6,
		showHideTransition: 'fade'
	});
	
	/*Owl Carousel*/
	var $owl = $('#owl_demo_1').owlCarousel({
		items: 1,
		animateOut: 'fadeOut',
		loop: true,
		margin: 10,
		autoplay: true,
		mouseDrag: false,
		dots:false
	});
	$(document).on('click', '#navbar_toggle_btn', function (e) {
		setTimeout(function(){
		$owl.trigger('refresh.owl.carousel');
	},200);
	});
	if($('#m_chart_1').length > 0)
		Morris.Area({
        element: 'm_chart_1',
        data: [{
            period: '2010',
            iphone: 100,
        }, {
            period: '2011',
            iphone: 130,
         }, {
            period: '2012',
            iphone: 80,
        }, {
            period: '2013',
            iphone: 120,
        }, {
            period: '2014',
            iphone: 180,
        }, {
            period: '2015',
            iphone: 105,
        },
         {
            period: '2016',
            iphone: 250,
		 }],
        xkey: 'period',
        ykeys: ['iphone'],
        labels: ['iPhone'],
        pointSize: 5,
        fillOpacity: .03,
		lineWidth:2,
		pointStrokeColors:['#fff'],
		behaveLikeLine: true,
		hideHover: 'auto',
		gridLineColor: '#fff',
		lineColors: ['#22AF47'],
		resize: true,
		smooth:false,
		gridTextColor:'#5e7d8a',
		gridTextFamily:"Inherit"
        
    });
	
});

/*****E-Charts function start*****/
var echartsConfig = function() { 
	if( $('#e_chart_1').length > 0 ){
		var eChart_1 = echarts.init(document.getElementById('e_chart_1'));
		var option = {
			color: ['#22AF47', '#3fb95f', '#69c982'],
			series : [
				{
					name:'漏斗图',
					type:'funnel',
					x: '0%',
					y: 20,
					//x2: 80,
					y2: 60,
					width: '100%',
					height:'80%',
					// height: {totalHeight} - y - y2,
					min: 0,
					max: 100,
					minSize: '0%',
					maxSize: '100%',
					sort : 'descending', // 'ascending', 'descending'
					gap :0,
					
					data:[
						{value:60,},
						{value:40,},
						{value:80,},
						
					].sort(function (a, b) { return a.value - b.value}),
					roseType: true,
					label: {
						normal: {
							formatter: function (params) {
								return params.name + ' ' + params.value + '%';
							},
							position: 'center'
						}
					},
					itemStyle: {
						normal: {
							borderWidth: 0,
						}
					}
					
				}
				
			]
		};

		eChart_1.setOption(option);
		eChart_1.resize();
	}
	
	if( $('#e_chart_5').length > 0 ){
		var eChart_5 = echarts.init(document.getElementById('e_chart_5'));
		var option4 = {
			color: ['#22AF47', '#bce7c7', '#69c982','#90d7a3'],		
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
					fontFamily: '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"',
					fontSize: 12
				}	
			},
			toolbox: {
				show: false,
			},
			grid: {
				left: '3%',
				right: '3%',
				bottom: '3%',
				top:'3%',
				containLabel: true
			},
			xAxis : [
				{
					type : 'category',
					data : ['2011','2012','2013','2014','2015','2016','2017'],
					axisLine: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#878787'
						}
					},
				}
			],
			yAxis : [
				{
					type : 'value',
					axisLine: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#878787'
						}
					},
					splitLine: {
						show: false,
					}
				}
			],
			series : [
				{
					name:'1',
					type:'bar',
					data:[320, 332, 301, 334, 390, 330, 320]
				},
				{
					name:'2',
					type:'bar',
					data:[120, 132, 101, 134, 90, 230, 210]
				},
				{
					name:'3',
					type:'bar',
					data:[220, 182, 191, 234, 290, 330, 310]
				},
				{
					name:'4',
					type:'bar',
					data:[150, 232, 201, 154, 190, 330, 410]
				}
			]
		};

		eChart_5.setOption(option4);
		eChart_5.resize();
	}
	
	if( $('#e_chart_9').length > 0 ){
		var eChart_9 = echarts.init(document.getElementById('e_chart_9'));
		var option8 = {
			color: ['#22af47', '#d6d9da'],
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
					fontFamily: '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"',
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
			xAxis: {
				type: 'category',
				boundaryGap: false,
				data: ['1', '2', '3', '4', '5', '6', '7','8', '9', '10', '11', '12', '13', '14'],
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
			},
			yAxis: {
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
						color: '#eaecec',
					}
				}
			},
			series: [{
					name:'1',
					type:'bar',
					stack: 'st1',
					barMaxWidth: 10,
					data:[320, 332, 301, 334, 390, 330, 320,320, 332, 301, 334, 390, 330, 320],
					itemStyle: {
						normal: {
							barBorderRadius: [50, 50, 0, 0] ,
						}
					},
				},
				{
					name:'2',
					type:'bar',
					stack: 'st1',
					barMaxWidth: 10,
					data:[-120, -132, -101, -134, -90, -230, -210,-120, -132, -101, -134, -90, -230, -210],
					itemStyle: {
						normal: {
							barBorderRadius: [0, 0, 50, 50] ,
						}
					},

				}]
		};
		eChart_9.setOption(option8);
		eChart_9.resize();
	}
	
	if( $('#e_chart_10').length > 0 ){
		var eChart_10 = echarts.init(document.getElementById('e_chart_10'));
		
		var option9 = {
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
					fontFamily: '-apple-system,BlinkMacSystemFont,"Segoe UI",Nunito,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"',
					fontSize: 12
				}	
			},
			series: [
				{
					name:'',
					type:'pie',
					radius: ['40%', '70%'],
					color: ['#22AF47', '#bce7c7'],
					data:[
						{value:435, name:''},
						{value:679, name:''},
					],
					label: {
						show: false,
				  
					}
				}
			]
		};
		eChart_10.setOption(option9);
		eChart_10.resize();
	}

}
/*****E-Charts function end*****/

var sparklineLogin = function() { 
	if( $('#sparkline_1').length > 0 ){
		$("#sparkline_1").sparkline([2,4,4,6,8,5,6,4,8,6,6,2 ], {
			type: 'line',
			width: '100',
			height: '34',
			resize: true,
			lineWidth: '1',
			lineColor: '#22AF47',
			fillColor: '#edf9fe',
			spotColor:'22AF47',
			spotRadius:'0',
			minSpotColor: '#22AF47',
			maxSpotColor: '#22AF47',
			highlightLineColor: 'rgba(0, 0, 0, 0)',
			highlightSpotColor: '#22AF47'
		});
	}	
	if( $('#sparkline_2').length > 0 ){
		$("#sparkline_2").sparkline([2,7,7,5,8,5,4,4,3,4,6,1 ], {
			type: 'line',
			width: '100',
			height: '34',
			resize: true,
			lineWidth: '1',
			lineColor: '#22AF47',
			fillColor: '#edf9fe',
			spotColor:'22AF47',
			spotRadius:'0',
			minSpotColor: '#22AF47',
			maxSpotColor: '#22AF47',
			highlightLineColor: 'rgba(0, 0, 0, 0)',
			highlightSpotColor: '#22AF47'
		});
	}	
	if( $('#sparkline_3').length > 0 ){
		$("#sparkline_3").sparkline([9,3,3,2,8,6,4,3,3,2,6,1 ], {
			type: 'line',
			width: '100',
			height: '34',
			resize: true,
			lineWidth: '1',
			lineColor: '#22AF47',
			fillColor: '#edf9fe',
			spotColor:'22AF47',
			spotRadius:'0',
			minSpotColor: '#22AF47',
			maxSpotColor: '#22AF47',
			highlightLineColor: 'rgba(0, 0, 0, 0)',
			highlightSpotColor: '#22AF47'
		});
	}
	if( $('#sparkline_4').length > 0 ){
		$("#sparkline_4").sparkline([5,3,3,2,1,6,2,3,5,2,2,1 ], {
			type: 'line',
			width: '100',
			height: '34',
			resize: true,
			lineWidth: '1',
			lineColor: '#22AF47',
			fillColor: '#edf9fe',
			spotColor:'22AF47',
			spotRadius:'0',
			minSpotColor: '#22AF47',
			maxSpotColor: '#22AF47',
			highlightLineColor: 'rgba(0, 0, 0, 0)',
			highlightSpotColor: '#22AF47'
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