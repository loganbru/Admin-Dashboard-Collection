/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Wallet Js
 */

  // line-3
  
  var ts2 = 1484418600000;
  var dates = [];
  var spikes = [5, -5, 3, -3, 8, -8]
  for (var i = 0; i < 120; i++) {
    ts2 = ts2 + 86400000;
    var innerArr = [ts2, dataSeries[1][i].value];
    dates.push(innerArr)
  }
  
  var options = {
    chart: {
      type: 'area',
      stacked: false,
      height: 370,
      zoom: {
        enabled: true
      },
      toolbar: {
        show: false,
      },
      dropShadow: {
        enabled: true,
        top: 10,
        left: 0,
        bottom: 0,
        right: 0,
        blur: 2,
        color: '#b6c2e4',
        opacity: 0.35
      },
    },
    plotOptions: {
      line: {
        curve: 'smooth',
  
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: [3]
    },
    series: [{
      name: 'Bitcoin',
      data: dates
    }],
    markers: {
      size: 0,
      style: 'full',
    },
    colors: ['#fa5c7c'],
   
    grid: {
      row: {
        colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.2
      },
      borderColor: '#f1f3fa'
    },
    fill: {
      gradient: {
        enabled: true,
        shadeIntensity: 1,
        inverseColors: false,
        opacityFrom: 0.5,
        opacityTo: 0.1,
        stops: [0, 70, 80, 100]
      },
    },
    yaxis: {
      min: 20000000,
      max: 250000000,
      labels: {
        formatter: function (val) {
          return '$' + (val / 1000000).toFixed(0);
        },
      },
      title: {
        text: 'Rate'
      },
    },
    xaxis: {
      type: 'datetime',
      axisBorder: {
        show: true,
        color: '#bec7e0',
      },  
      axisTicks: {
        show: true,
        color: '#bec7e0',
      },    
    },
  
    tooltip: {
      shared: false,
      y: {
        formatter: function (val) {
          return '$' + (val / 1000000).toFixed(0)
        }
      }
    },
    responsive: [{
      breakpoint: 600,
      options: {
        chart: {
          toolbar: {
            show: false
          }
        },
        legend: {
          show: false
        },
      }
    }]
  }
  
  var chart = new ApexCharts(
    document.querySelector("#wallet_map"),
    options
  );
  
  chart.render();


  // Datatable
 $('#datatable').DataTable();