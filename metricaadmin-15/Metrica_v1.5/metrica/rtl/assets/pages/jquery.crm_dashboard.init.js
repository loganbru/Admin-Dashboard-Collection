/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * CRM Dashboard Js
 */


var options = {
    chart: {
      height: 365,
      type: 'line',
      stacked: false,
      toolbar: {
        show: false
      },
    },
    stroke: {
      width: [0, 2, 5],
      curve: 'smooth'
    },
    plotOptions: {
      bar: {
        columnWidth: '20%',
        endingShape: 'rounded',        
      },
      
    },
    colors: ["#4d79f6", "#eef1f5", "#4ac7ec"],
    series: [{
      name: 'Leads',
      type: 'column',
      data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
    }, {
      name: 'Vendors',
      type: 'area',
      data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
    }, {
      name: 'Invoice Generate',
      type: 'line',
      data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
    }],
    fill: {
        type: 'gradient',
        gradient: {
            inverseColors: true,
            shade: 'light',
            type: "horizontal",
            shadeIntensity: 0.25,
            gradientToColors: undefined,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100, 100, 100]
        }
    },
    labels: ['01/01/2003', '02/01/2003','03/01/2003','04/01/2003','05/01/2003','06/01/2003','07/01/2003','08/01/2003','09/01/2003','10/01/2003','11/01/2003'],
    markers: {
      size: 0
    },
    xaxis: {
      type:'datetime',
      axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
      }, 
    },
    yaxis: {
      min: 0,
      labels: {        
        align: 'center',
      },
      opposite: true
    },
    tooltip: {
      shared: true,
      intersect: false,
      y: {
        formatter: function (y) {
          if(typeof y !== "undefined") {
            return  y.toFixed(0) + "%";
          }
          return y;
          
        }
      }
    },
    legend: {
      labels: {
        useSeriesColors: true
      },
      offsetX: 0,
      offsetY: -10,
      markers: {
        customHTML: [
          function() {
            return ''
          }, function() {
            return ''
          }, function() {
            return ''
          }
        ]
      }
    }
  }

  var chart = new ApexCharts(
    document.querySelector("#crm_dash_2"),
    options
  );

  chart.render();

   // Performance Report

var options = {
    chart: {
      type: 'radialBar',
      height: 300,
    },
    plotOptions: {
      radialBar: {
        offsetY: -10,
        startAngle: 0,
        endAngle: 270,
        hollow: {
          margin: 5,
          size: '50%',
          background: 'transparent',
  
        },
        track: {
          show: false,
        },
        dataLabels: {
          name: {
              fontSize: '18px',
          },
          value: {
              fontSize: '16px',
              color: '#50649c',
          },          
        }
      },
    },
    colors: ['#4d79f6', '#4ac7ec', '#f3c74d'],
    stroke: {
      lineCap: 'round'
    },
    series: [71, 63, 100],
    labels: ['Sent', 'Opened', 'Not Opened'],
    legend: {
      show: true,
      floating: true,
      position: 'left',
      offsetX: 60,
      offsetY: 0,
    },
    responsive: [{
        breakpoint: 480,
        options: {
            legend: {
                show: true,
                floating: true,
                position: 'left',
                offsetX: 10,
                offsetY: 0,
            }
        }
    }]
  }
  
  
  var chart = new ApexCharts(
    document.querySelector("#d2_performance"),
    options
  );
  
  chart.render();


      
//Dash-Map

$('#world-map-markers').vectorMap({
    map : 'world_mill_en',
    scaleColors : ['#eff0f1', '#eff0f1'],
    normalizeFunction : 'polynomial',
    hoverOpacity : 0.7,
    hoverColor : false,
    regionStyle : {
        initial : {
            fill : '#e0e7fd'
        }
    },
  
    markerStyle: {
      initial: {
        stroke: "transparent"
      },
      hover: {
        stroke: "rgba(112, 112, 112, 0.30)"
      }
    },
    backgroundColor : 'transparent',
  
    markers: [
      {
        latLng: [37.090240, -95.712891],
        name: "USA",
        style: {
          fill: "#f93b7a"
        }
      },
      {
        latLng: [71.706940, -42.604301],
        name: "Greenland",
        style: {
          fill: "#0aafff"
        }
      },
      {
        latLng: [-21.943369, 123.102198],
        name: "Australia",
        style: {
          fill: "#7551e9"
        }
      },
      {
        latLng: [-11.409874, -41.280857],
        name: "Brazil",
        style: {
          fill: "#ffc212"
        }
      }
    ],
   
  });
  