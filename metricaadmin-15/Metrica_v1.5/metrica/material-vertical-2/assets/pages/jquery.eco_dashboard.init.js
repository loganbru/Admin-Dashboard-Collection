/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Ecommerce Dashboard Js
 */




var options = {
  chart: {
      height: 350,
      type: 'line',
      toolbar: {
        show: false,
        autoSelected: 'zoom'
      },
      dropShadow: {
        enabled: true,
        top: 12,
        left: 0,
        bottom: 0,
        right: 0,
        blur: 2,
        color: '#b6c2e4',
        opacity: 0.35
      },
  },
  dataLabels: {
      enabled: false
  },
  stroke: {
      curve: 'smooth',
      width: [5, 5],
      dashArray: [0, 3]
  },
  colors: ["#4d79f6","#fd3995"],
  series: [{
      name: 'Profit',
      data: [0,60,20,90,45,110,55,130,44,110,75,200]
  }, {
      name: 'Sales',
      data: [0,45,10,75,35,94,40,115,30,105,65,190]
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
        fill: "#e0e7fd"
      }
    },
    {
      latLng: [71.706940, -42.604301],
      name: "Greenland",
      style: {
        fill: "#e0e7fd"
      }
    },
    {
      latLng: [-21.943369, 123.102198],
      name: "Australia",
      style: {
        fill: "#e0e7fd"
      }
    },
    {
      latLng: [-11.409874, -41.280857],
      name: "Brazil",
      style: {
        fill: "#e0e7fd"
      }
    }
  ],
  series: {
    regions: [{
        values: {
            "AU": '#96a4f8',
            "US": '#fe8ac1',
            "GL": '#85e3ee',
            "BR": '#ffd478',
        },
        attribute: 'fill'
    }]
},
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
      type:"bar",
      dropShadow: {
        enabled: true,
        top: 0,
        left: 5,
        bottom: 5,
        right: 0,
        blur: 2,
        color: '#b6c2e4',
        opacity: 0.35
    },
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
  colors: ["#1ccab8"],
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
      height: 217,
      type: 'donut',
      dropShadow: {
        enabled: true,
        top: 10,
        left: 0,
        bottom: 0,
        right: 0,
        blur: 2,
        color: '#b6c2e4',
        opacity: 0.15
    },
  }, 
  dataLabels: {
    enabled: false
  },
  series: [ 65, 35,],
  legend: {
      show: false,     
  },
  labels: [ "New Customers", "Repeated"],
  colors: [ "#fd3c97", "#0656ff"],
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