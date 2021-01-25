//[Dashboard Javascript]

//Project:	Materiel Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)

$(function () {

  'use strict';
	var options = {
	  chart: {
		  height: 414,
		  type: 'bar',
		  toolbar: {
			  show: false
		  }
	  },
	  plotOptions: {
		  bar: {
			  horizontal: false,
			  endingShape: 'rounded',
			  columnWidth: '35%',
		  },
	  },
	  dataLabels: {
		  enabled: false
	  },
	  stroke: {
		  show: true,
		  width: 2,
		  colors: ['transparent']
	  },
	  colors: ["#5A8DEE", "#FF5B5C"],
	  series: [{
		  name: 'New Visitors',
		  data: [70, 45, 51, 58, 59, 58, 61, 65, 60, 69]
	  }, {
		  name: 'Unique Visitors',
		  data: [55, 71, 80, 100, 89, 98, 110, 95, 116, 90]
	  },],
	  xaxis: {
		  categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
		  axisBorder: {
			show: true,
			color: '#bec7e0',
		  },  
		  axisTicks: {
			show: true,
			color: '#bec7e0',
		  },    
	  },
	  legend: {
          position: 'top',
           horizontalAlign: 'right',
        },
	  yaxis: {
		  title: {
			  text: 'Visitors'
		  }
	  },
	  fill: {
		  opacity: 1

	  },
	  // legend: {
	  //     floating: true
	  // },
	  grid: {
		  row: {
			  colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
			  opacity: 0.2
		  },
		  borderColor: '#f1f3fa'
	  },
	  tooltip: {
		  y: {
			  formatter: function (val) {
				  return "" + val + "k"
			  }
		  }
	  }
	}

	var chart = new ApexCharts(
	  document.querySelector("#yearly-comparison"),
	  options
	);

	chart.render();
		
	
	
	
	
	
	var options = {
        series: [17, 22, 19, 47],
        chart: {
          type: 'donut',
			width: '100%',
      		height: 257,
        },
		colors:['#fda44c', '#4cdaa7', '#5193ff', '#FF5B5C'],
		legend: {
		  show: false,
		},
		dataLabels: {
			enabled: false,
		  },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
          }
        }]
      };

      var chart = new ApexCharts(document.querySelector("#earning-chart"), options);
      chart.render();
	
	
	
	var options1 = {
        series: [{
          data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
        }],
        chart: {
          type: 'line',
          width: 100,
          height: 50,
          sparkline: {
            enabled: true
          }
        },
		 stroke: {
          curve: 'smooth',
			 width: 3,
        },
		 
		markers: {
			size: 0,
		},
        tooltip: {
          fixed: {
            enabled: false
          },
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function (seriesName) {
                return ''
              }
            }
          },
          marker: {
            show: false
          },
			theme: 'dark'
        }
      };

      var chart1 = new ApexCharts(document.querySelector("#visitors-chart"), options1);
      chart1.render();
	
	
	var options = {
        series: [{
          name: 'Inflation',
          data: [189, 156, 123, 118]
        }],
        chart: {
          height: 173,
          type: 'bar',
        },
          tooltip: {
            enabled: false, 
			theme: 'dark'       
          },
        plotOptions: {
          bar: {
            dataLabels: {
              position: 'top', // top, center, bottom
            },
			  columnWidth: '30%',
			  endingShape: 'rounded',
          }
        },
        dataLabels: {
          enabled: false,
        },
        colors:['#ffffff'],
        xaxis: {
          categories: ["Jan", "Feb", "Mar", "Apr"],
          position: 'bottom',
			
          labels: {
			show: true, 
			  style: {
				colors: ['#ffffff', '#ffffff', '#ffffff', '#ffffff']
			  },
          },
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
        },
		grid: {
		  yaxis: {
			lines: {
			  show: false
			}
		  }
		},
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }
        
        },
      };

      var chart = new ApexCharts(document.querySelector("#meetingschart"), options);
      chart.render();
	
	
		var options = {
        series: [{
          name: 'Inflation',
          data: [189, 156, 123, 118]
        }],
        chart: {
          height: 173,
          type: 'bar',
        },
        plotOptions: {
          bar: {
            dataLabels: {
              position: 'top', // top, center, bottom
            },
			  columnWidth: '30%',
			  endingShape: 'rounded',
          }
        },
        dataLabels: {
          enabled: false,
        },
        colors:['#5A8DEE'],
        xaxis: {
          categories: ["Jan", "Feb", "Mar", "Apr"],
          position: 'bottom',
			
          labels: {
			show: true, 
          },
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          tooltip: {
            enabled: false,  
			theme: 'dark'      
          }
        },
		grid: {
		  yaxis: {
			lines: {
			  show: false
			}
		  }
		},
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }
        
        },
      };

      var chart = new ApexCharts(document.querySelector("#meetingschart2"), options);
      chart.render();
	
	
	
	var options = {
        series: [{
          name: 'series1',
          data: [178, 223, 195, 201, 143, 189, 156, 155, 118, 167, 159]
        }],
        chart: {
          height: 170,
			width: 600,
          type: 'line',
			offsetY: 0,
			offsetX: -50,
        },
		colors:['#ffffff'],
        dataLabels: {
          enabled: false
        },
		 tooltip: {
			theme: 'dark'
		  },
        stroke: {
          curve: 'smooth',
        },
			
		markers: {
			size: 0,
		},
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
          }
        
        },
        xaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val ;
            }
          }
        
        },
		grid: {
			show: true,
			borderColor: '#5578ed',
			strokeDashArray: 0,
			position: 'back',
			xaxis: {
				lines: {
					show: false,
				}
			},   
			yaxis: {
				lines: {
					show: false
				}
			},  
			row: {
				colors: undefined,
				opacity: 0.5,
			},  
			column: {
				colors: undefined,
				opacity: 0.1
			},  
		}
      };

      var chart = new ApexCharts(document.querySelector("#statisticschart3"), options);
      chart.render();
	
	
}); // End of use strict

$(function () {
  'use strict';
	const dataSource = {
	  chart: {
		subcaption: "[2008-2019]",
		numbersuffix: " %",
		rotatelabels: "1",
		setadaptiveymin: "1",
		theme: "fusion"
	  },
	  data: [
		{
		  label: "2008",
		  value: "89.45"
		},
		{
		  label: "2009",
		  value: "89.87"
		},
		{
		  label: "2010",
		  value: "89.64"
		},
		{
		  label: "2011",
		  value: "90.13"
		},
		{
		  label: "2012",
		  value: "90.67"
		},
		{
		  label: "2013",
		  value: "90.54"
		},
		{
		  label: "2014",
		  value: "90.75"
		},
		{
		  label: "2015",
		  value: "90.8"
		},
		{
		  label: "2016",
		  value: "91.16"
		},
		{
		  label: "2017",
		  value: "91.37"
		},
		{
		  label: "2018",
		  value: "91.66"
		},
		{
		  label: "2019",
		  value: "91.8"
		}
	  ]
	};

	FusionCharts.ready(function() {
	  var myChart = new FusionCharts({
		type: "line",
		renderAt: "earning",
		width: "100%",
		height: "400",
		dataFormat: "json",
		dataSource
	  }).render();
	});

  
}); // End of use strict

$(function () {
  'use strict';	
	
	const dataSource = {
	  chart: {
		showvalues: "1",
		showpercentintooltip: "0",
		numberprefix: "$",
		enablemultislicing: "1",
		theme: "fusion"
	  },
	  data: [
		{
		  label: "Impressions",
		  value: "300000",
			"color": "#5A8DEE",  //Custom Color
		},
		{
		  label: "Top",
		  value: "230000",
			"color": "#FF5B5C",  //Custom Color
		},
		{
		  label: "Conversions",
		  value: "180000",
			"color": "#00CFDD",  //Custom Color
		},
		{
		  label: "CPA",
		  value: "270000",
			"color": "#FDAC41",  //Custom Color
		}
	  ]
	};

	FusionCharts.ready(function() {
	  var myChart = new FusionCharts({
		type: "pie3d",
		renderAt: "campaign",
		width: "100%",
		height: "315",
		dataFormat: "json",
		dataSource
	  }).render();
	});


}); // End of use strict
