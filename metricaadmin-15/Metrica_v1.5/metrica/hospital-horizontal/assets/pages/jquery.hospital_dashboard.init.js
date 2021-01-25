/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Hospital Dashboard Js
 */



var options = {
    chart: {
        height: 315,
        type: 'area',
        toolbar: {
          show: false,
          autoSelected: 'zoom'
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
        width: [1, 1],
    },
    colors: [ "#1ecab8", "#ff5da0"],
    series: [{
        name: 'General Patients',
        data: [98,38,122,41,90,47,170,28,30,154,0,0]
    }, {
        name: 'OPD',
        data: [88,26,171,30,80,50,190,38,25,148,0,0]
    }],
  
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
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
      horizontalAlign: 'right'
    },
  }
  
  var chart = new ApexCharts(
    document.querySelector("#hospital_survey"),
    options
  );
  
  chart.render();


 //colunm-1
  
  var options = {
    chart: {
        height: 200,
        type: 'bar',
        toolbar: {
            show: false
        }
    },
    plotOptions: {
        bar: {
            horizontal: false,
            endingShape: 'rounded',
            columnWidth: '25%',
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
    colors: ["#4d79f6", "#e0e7fd"],
    series: [{
        name: 'Male',
        data: [68, 44, 55, 57, 56, 61, 58]
    }, {
        name: 'Female',
        data: [51, 76, 85, 101, 98, 87, 105]
    },],
    xaxis: {
        categories: ['Sun','Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Set'],
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
      show: false,
      position: 'top',
      horizontalAlign: 'right',
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
                return "" + val 
            }
        }
    }
  }
  
  var chart = new ApexCharts(
    document.querySelector("#patient_dash_report"),
    options
  );
  
  chart.render();


  

//Medicine-widget


var options = {
  chart: {
      height: 205,
      type: 'donut',
  }, 
  plotOptions: {
    pie: {
      donut: {
        size: '80%'
      }
    }
  },
  dataLabels: {
    enabled: false,
    },
 
  series: [10, 65, 25,],
  legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      verticalAlign: 'middle',
      floating: false,
      fontSize: '14px',
      offsetX: 0,
      offsetY: -13
  },
  labels: [ "Syrup", "Tablets", "Injections"],
  colors: ["#e0e7fd", "#4d79f6", "#4ac7ec"],
 
  responsive: [{
      breakpoint: 600,
      options: {
        plotOptions: {
            donut: {
              customScale: 0.2
            }
          },        
          chart: {
              height: 240
          },
          legend: {
              show: false
          },
      }
  }],

  tooltip: {
    y: {
        formatter: function (val) {
            return   val + " %"
        }
    }
  }
  
}

var chart = new ApexCharts(
  document.querySelector("#dash_medicine"),
  options
);

chart.render();

// Datepicker

$('.inline').datepicker({
    todayHighlight: true
});

// Datatable
$('#datatable').DataTable();