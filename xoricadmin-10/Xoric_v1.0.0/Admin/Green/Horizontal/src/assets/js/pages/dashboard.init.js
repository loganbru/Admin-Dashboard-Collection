/*
Template Name: Xoric - Responsive Bootstrap 4 Admin Dashboard
Author: Themesdesign
Version: 1.0.0
Website: https://themesdesign.in/
File: dashboard Init Js File
*/


// knob chart

$(function () {
  $('[data-plugin="knob"]').knob();
});



// Analytics chart

var options = {
chart: {
    height: 350,
    type: 'area',
    toolbar: {
        show: false
    }
},
colors: ['#2fa97c', '#e4cc37'],
dataLabels: {
    enabled: false,
},
series: [{
        name: "2018",
        data: [41, 47, 32, 75, 63, 35, 42, 20, 6, 15, 27, 39]
    },
    {
        name: "2019",
        data: [35, 41, 62, 45, 14, 18, 29, 57, 28, 49, 35, 27]
    }
],
grid: {

    yaxis: {
      lines: {
        show: false,
      }
    }
},
stroke: {
  width: 3,
  curve: 'stepline',
},
markers: {
    size: 0
},
xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    title: {
        text: 'Month'
    }
},
fill: {
  type: 'gradient',
      gradient: {
        shadeIntensity: 1,
        opacityFrom: 0.7,
        opacityTo: 0.9,
        stops: [0, 90, 100]
      }
},
legend: {
    position: 'top',
    horizontalAlign: 'right',
    floating: true,
    offsetY: -25,
    offsetX: -5
}
}

var chart = new ApexCharts(
document.querySelector("#yearly-sale-chart"),
options
);

chart.render();



// Activity chart

var options = {
  chart: {
      height: 350,
      type: 'rangeBar',
      toolbar: {
          show: false
      }
  },
  plotOptions: {
      bar: {
          horizontal: true,
          barHeight: '12%'
      }
  },
  
  series: [
    {
      data: [
        {
          x: 'Jack',
          y: [
            new Date('2020-01-02').getTime(),
            new Date('2020-01-04').getTime()
          ],
          fillColor: '#2fa97c',
        },
        {
          x: 'Thomas',
          y: [
            new Date('2020-01-04').getTime(),
            new Date('2020-01-08').getTime(),
          ],
          fillColor: '#e4cc37'
        },
        {
          x: 'David',
          y: [
            new Date('2020-01-08').getTime(),
            new Date('2020-01-12').getTime()
          ],
          fillColor: '#F06543'
        },
        {
          x: 'James',
          y: [
            new Date('2020-01-12').getTime(),
            new Date('2020-01-18').getTime()
          ],
          fillColor: '#3051d3'
        }
      ]
    }
  ],
  
  xaxis: {
    type: 'datetime',
    axisBorder: {
      show: false,
    }
  },
  
}

var chart = new ApexCharts(document.querySelector('#activity-chart'), options)

chart.render();


// Radial chart

var options = {
  chart: {
      height: 270,
      type: 'radialBar',
  },
  plotOptions: {
      radialBar: {
          hollow: {
              margin: 5,
              size: '38%',
          },
          track: {
              margin: 12, // margin is in pixels
            },
          dataLabels: {
              name: {
                  fontSize: '18px',
                  offsetY: '-10',
              },
              value: {
                  fontSize: '16px',
                  offsetY: '5',
              },
              total: {
                  show: true,
                  label: 'Total',
                  formatter: function (w) {
                      // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                      return 166
                  }
              }
          }
      }
  },
  colors: ['#2fa97c', '#e4cc37', '#f06543'],
  series: [44, 55, 67],
  labels: ['Facebook', 'Twitter', 'Instagram'],
  
}

var chart = new ApexCharts(
  document.querySelector("#radial-chart"),
  options
);

chart.render();


// USA Vector map

$('#usa-map').vectorMap({
  map: 'usa_en',
  enableZoom: true,
  showTooltip: true,
  selectedColor: null,
  hoverColor: '#eaf0f1',
  backgroundColor: 'transparent',
  color: '#f4f8f9',
  borderColor: '#7c8a96',
  colors: {
      ca: '#2fa97c',
      tx: '#2fa97c',
      mt: '#2fa97c',
      ny: '#2fa97c'
  },
  onRegionClick: function (event, code, region) {
      event.preventDefault();
  }
});
