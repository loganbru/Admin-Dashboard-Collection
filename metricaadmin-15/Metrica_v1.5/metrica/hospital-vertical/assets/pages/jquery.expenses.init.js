/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Expenses Js
 */



 
  var spark1 = {
      chart: {
          type: 'area',
          height: 100,
          sparkline: {
              enabled: true
          },
      },
      stroke: {
          width: 2,
          curve: 'smooth'
      },
      fill: {
          opacity: 0.2,
      },
      series: [{
      name: 'Expenses',
      data: [400, 3000, 1000, 900, 290, 190, 2002, 900, 1200, 700, 1900, 500, 1300, 900, 1700, 200, 700, 500]
      }],
      xaxis: {
          crosshairs: {
              width: 1
          },
      },
      yaxis: {
          min: 0
      },
      colors: ['#f1646c'],
      
  }

  new ApexCharts(document.querySelector("#spark1"), spark1).render();
  var spark2 = {
      chart: {
          type: 'area',
          height: 100,
          sparkline: {
              enabled: true
          },
      },
      stroke: {
          width: 2,
          curve: 'smooth'
      },
      fill: {
          opacity: 0.2,
      },
      series: [{
      name: 'Expenses',
      data: [400, 3000, 1000, 900, 290, 190, 2002, 900, 1200, 700, 1900, 500, 1300, 900, 1700, 200, 700, 500]
      }],
      xaxis: {
          crosshairs: {
              width: 1
          },
      },
      yaxis: {
          min: 0
      },
      colors: ['#f3c74d'],
      
  }

  new ApexCharts(document.querySelector("#spark2"), spark2).render();

  var spark3 = {
      chart: {
          type: 'area',
          height: 100,
          sparkline: {
              enabled: true
          },
      },
      stroke: {
          width: 2,
          curve: 'smooth'
      },
      fill: {
          opacity: 0.2,
      },
      series: [{
      name: 'Expenses',
      data: [400, 3000, 1000, 900, 290, 190, 2002, 900, 1200, 700, 1900, 500, 1300, 900, 1700, 200, 700, 500]
      }],
      xaxis: {
          crosshairs: {
              width: 1
          },
      },
      yaxis: {
          min: 0
      },
      colors: ['#1ecab8'],
      
  }

  new ApexCharts(document.querySelector("#spark3"), spark3).render();


  // Datatable
  $('#datatable').DataTable();