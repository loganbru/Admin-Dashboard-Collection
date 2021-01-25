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
      curve: 'smooth',
    },
    plotOptions: {
      bar: {
        columnWidth: '20%',
        endingShape: 'rounded',        
      },
      
    },
    colors: ["#1ccab8", "#6d81f5", "#d5b752"],
    series: [{
      name: 'Leads',
      type: 'column',
      data: [11, 30, 10, 35, 15, 40, 20, 50, 25, 60, 30],
    }, {
      name: 'Vendors',
      type: 'area',
      data: [ 8, 9, 20, 8, 21, 11, 44, 10, 23, 14, 6,],
    }, {
      name: 'Invoice Generate',
      type: 'line',
      data: [0,30,10,35,15,40,20,50,25,60,30],
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
        },
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
      min: 0
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
      dropShadow: {
        enabled: true,
        top: 5,
        left: 0,
        bottom: 0,
        right: 0,
        blur: 5,
        color: '#b6c2e4',
        opacity: 0.35
      },
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
            fill : '#c8d3f7'
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
  