/**
 * Theme: Simulor - Responsive Bootstrap 4 Admin Dashboard
 * Author: Coderthemes
 * Module/App: Chartjs 
 */

!function($) {
    "use strict";

    var ChartJs = function() {};

    ChartJs.prototype.respChart = function(selector,type,data, options) {
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx, {type: 'line', data: data, options: options});
                    break;
                case 'Doughnut':
                    new Chart(ctx, {type: 'doughnut', data: data, options: options});
                    break;
                case 'Pie':
                    new Chart(ctx, {type: 'pie', data: data, options: options});
                    break;
                case 'Bar':
                    new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
                case 'Radar':
                    new Chart(ctx, {type: 'radar', data: data, options: options});
                    break;
                case 'PolarArea':
                    new Chart(ctx, {data: data, type: 'polarArea', options: options});
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },

    //init
    ChartJs.prototype.init = function() {
        //creating lineChart
        var lineChart = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
            datasets: [{
                label: "Conversion Rate",
                fill: false,
                backgroundColor: '#25b343',
                borderColor: '#25b343',
                data: [44,60,-33,58,-4,57,-89,60,-33,58]
            }, {
                label: "Average Sale Value",
                fill: false,
                backgroundColor: '#e3eaef',
                borderColor: "#e3eaef",
                borderDash: [5, 5],
                data: [-68,41,86,-49,2,65,-64,86,-49,2]
            }]
        };

        var lineOpts = {
            responsive: true,
            // title:{
            //     display:true,
            //     text:'Chart.js Line Chart'
            // },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    // scaleLabel: {
                    //     display: true,
                    //     labelString: 'Month'
                    // },
                    gridLines: {
                        color: "rgba(0,0,0,0.1)"
                    }
                }],
                yAxes: [{
                    gridLines: {
                        color: "rgba(255,255,255,0.05)",
                        fontColor: '#fff'
                    },
                    ticks: {
                        max: 100,
                        min: -100,
                        stepSize: 20
                    }
                }]
            }
        };

        this.respChart($("#lineChart"),'Line',lineChart, lineOpts);

        //donut chart
        var donutChart = {
            labels: [
                "Bitcoin",
                "Ethereum",
                "Cardano"
            ],
            datasets: [
                {
                    data: [80, 50, 100],
                    backgroundColor: [
                        "#02a8b5",
                        "#fd7e14",
                        "#e3eaef"
                    ],
                    hoverBackgroundColor: [
                        "#02a8b5",
                        "#fd7e14",
                        "#e3eaef"
                    ],
                    borderWidth: 3,
                    hoverBorderColor: "#fff"
                }]
        };

        var donutOpts = {
            cutoutPercentage: 80
        };

        this.respChart($("#doughnut"),'Doughnut',donutChart,donutOpts);


        //Pie chart
        var pieChart = {
            labels: [
                "Desktops",
                "Tablets",
                "Mobiles"
            ],
            datasets: [
                {
                    data: [100,121,77],
                    backgroundColor: [
                        "#d33319",
                        "#675aa9",
                        "#e3eaef"
                    ],
                    hoverBackgroundColor: [
                        "#d33319",
                        "#675aa9",
                        "#e3eaef"
                    ],
                    hoverBorderColor: "#fff"
                }]
        };
        this.respChart($("#pie"),'Pie',pieChart);


        //barchart
        var barChart = {
            labels: ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14", "15"],
            datasets: [
                {
                    label: "Sales Analytics",
                    backgroundColor: "#4b88e4",
                    borderColor: "#4b88e4",
                    borderWidth: 1,
                    hoverBackgroundColor: "#675aa9",
                    hoverBorderColor: "#675aa9",
                    data: [65, 59, 80, 81, 56, 89, 40, 32,65, 59, 80, 81, 56, 89, 40, 32,65, 59, 80, 81, 56, 89, 40, 32,65, 59, 80, 81, 56, 89, 40]
                }
            ]
        };
        var barOpts = {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        max: 100,
                        min: 20,
                        stepSize: 20
                    }
                }],
                xAxes: [{
                    barPercentage: 0.3,
                    gridLines: {
                        color: "rgba(0,0,0,0.05)"
                    }
                }]
            }
        };
        this.respChart($("#bar"),'Bar',barChart, barOpts);


        //radar chart
        var radarChart = {
            labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
            datasets: [
                {
                    label: "Desktops",
                    backgroundColor: "rgba(179,181,198,0.2)",
                    borderColor: "rgba(179,181,198,1)",
                    pointBackgroundColor: "rgba(179,181,198,1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(179,181,198,1)",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    label: "Tablets",
                    backgroundColor: "rgba(255,99,132,0.2)",
                    borderColor: "rgba(255,99,132,1)",
                    pointBackgroundColor: "rgba(255,99,132,1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(255,99,132,1)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]
        };
        this.respChart($("#radar"),'Radar',radarChart);

        //Polar area chart
        var polarChart = {
            datasets: [{
                data: [
                    11,
                    16,
                    7,
                    18
                ],
                backgroundColor: [
                    "#297ef6",
                    "#45bbe0",
                    "#ebeff2",
                    "#1ea69a"
                ],
                label: 'My dataset', // for legend
                hoverBorderColor: "#fff"
            }],
            labels: [
                "Series 1",
                "Series 2",
                "Series 3",
                "Series 4"
            ]
        };
        this.respChart($("#polarArea"),'PolarArea',polarChart);
    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.ChartJs.init()
}(window.jQuery);

    