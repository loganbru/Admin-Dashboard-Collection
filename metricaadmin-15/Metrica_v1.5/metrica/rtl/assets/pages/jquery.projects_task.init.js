/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Project-task Js
 */


 
var options = {
  
  chart: {
    height: 350,
    type: 'bar',
    toolbar: {
      show: false
    },
  },
  plotOptions: {
    bar: {
      columnWidth: '30%',
      endingShape: 'rounded'
    }
  },
  colors: ['#4d79f6', '#4d79f6'],
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 3,
    colors: ['#c0cdf1'],
  },
  series: [{
    name: 'Task Done',
    data: [44, 55, 41, 67, 22, 43, 21, 33, 45, 31, 87, 65, 35, 44, 55, 41, 67, 22, 43, 21, 33, 45, 31, 87, 65, 35, 51, 36, 46, 24, 25],
  }],
  grid: {
    row: {
      colors: ['#fff', '#f7f8f9']
    }
  },
  xaxis: {
    labels: {
      rotate: -45
    },
    categories: ['1Jan', '2Jan', '3Jan', '4Jan', '5Jan', '6Jan',
      '7Jan', '8Jan', '9Jan', '10Jan', '11Jan', '12Jan', '13Jan',
      '14Jan', '15Jan', '16Jan', '17Jan', '18Jan', '19Jan', '20Jan',
      '21Jan', '22Jan', '23Jan', '24Jan', '25Jan', '26Jan', '27Jan',
      '28Jan', '29Jan', '30Jan', '31Jan'
    ],
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
    labels: {
      formatter: function (value) {
        return value ;
      },
      align: 'center',
    },
    opposite: true
  },
  fill: {
    type: 'gradient',
    gradient: {
      shade: 'light',
      type: "horizontal",
      shadeIntensity: 0.25,
      gradientToColors: undefined,
      inverseColors: true,
      opacityFrom: 0.85,
      opacityTo: 0.85,
      stops: [50, 0, 100]
    },
  },

}

var chart = new ApexCharts(
  document.querySelector("#task_report"),
  options
);


chart.render();