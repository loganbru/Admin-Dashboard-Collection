/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Ecommerce Dashboard Js
 */




var options = {
  chart: {
      height: 350,
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
  colors: ["#4d79f6", "#fd3995"],
  series: [{
      name: 'Profit',
      data: [98,38,122,41,90,47,170,28,130,51,138,80]
  }, {
      name: 'Sales',
      data: [88,26,171,30,80,50,190,38,150,62,150,90]
  }],

  xaxis: {
      type: 'datetime',
      categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00", "2018-09-19T07:30:00", "2018-09-19T08:30:00", "2018-09-19T09:30:00", "2018-09-19T10:30:00", "2018-09-19T11:30:00"],  
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
      x: {
          format: 'dd/MM/yy HH:mm'
      },
  },
  legend: {
    position: 'top',
    horizontalAlign: 'right'
  },
}

var chart = new ApexCharts(
  document.querySelector("#eco-dash1"),
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




 //dash-colunm-1
  
 var options = {


    
  chart: {
      height:135,
      animations: {
          enabled: false
      },
      sparkline: {
          enabled: true
      },
      type:"bar"
  },
  plotOptions: {
      bar: {
          horizontal: false, 
          endingShape: "rounded", 
          columnWidth: "40%"
      }
  },
  dataLabels: {
      enabled: false
  },
  stroke: {
      show: true, 
      width: 2, 
      colors: ["transparent"]
  },
  colors: ["#4ac7ec"],
  series:[ {
      name: "Revenue", 
      data: [50, 60, 70, 80, 90, 100, 95, 85, 75, 65, 55, 65, 75, 85, 95, 105, 80, 70, 60, 50, 40, 30, 45, 55, 65, 75, 85, 95, 100, 80, 60]
  }
  ],
  xaxis: {
      categories: ['1-Jan','2-Jan','3-Jan','4-Jan','5-Jan','6-Jan','7-Jan','8-Jan','9-Jan','10-Jan','11-Jan','12-Jan','13-Jan','14-Jan','15-Jan','16-Jan','17-Jan','18-Jan','19-Jan','20-Jan','21-Jan','22-Jan','23-Jan','24-Jan','25-Jan','26-Jan','27-Jan','28-Jan','29-Jan','30-Jan','31-Jan'],
      crosshairs: {
          show: false,
      },
  },
  fill: {
      opacity: 0.5
  },
  
  tooltip: {
      y: {
          formatter:function(val) {
              return"$ "+val+"k"
          },
      },
  }

}
var chart = new ApexCharts(
  document.querySelector("#eco_dash_2"),
  options
);

chart.render();


// Re-Customers


var options = {
  chart: {
      height: 220,
      type: 'donut',
  }, 
  dataLabels: {
    enabled: false
  },
  series: [ 65, 35,],
  legend: {
      show: false,     
  },
  labels: [ "New Customers", "Repeated"],
  colors: [ "#4d79f6", "#d1e6fa"],
  responsive: [{
      breakpoint: 600,
      options: {
          chart: {
              height: 200
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
  document.querySelector("#re_customers"),
  options
);

chart.render();