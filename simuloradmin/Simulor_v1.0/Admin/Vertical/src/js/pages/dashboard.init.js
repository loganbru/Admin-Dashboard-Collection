/**
 * Theme: Simulor - Responsive Bootstrap 4 Admin Dashboard
 * Author: Coderthemes
 * Module/App: Dashboard 
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
                case 'Doughnut':
                    new Chart(ctx, {type: 'doughnut', data: data, options: options});
                    break;
                case 'Bar':
                    new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },

    //init
    ChartJs.prototype.init = function() {
        //barchart
        var barChart = {
            labels: ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14", "15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],
            datasets: [
                {
                    label: "Sales Analytics",
                    backgroundColor: "#00acc1",
                    borderColor: "#00acc1",
                    borderWidth: 1,
                    hoverBackgroundColor: "#d4570f",
                    hoverBorderColor: "#d4570f",
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
                        "#f1556c",
                        "#e3eaef"
                    ],
                    hoverBackgroundColor: [
                        "#02a8b5",
                        "#f1556c",
                        "#e3eaef"
                    ],
                    borderWidth: 3,
                    hoverBorderColor: "#fff"
                }]
        };

        var donutOpts = {
            cutoutPercentage: 80,
            legend: {
                position: 'bottom',
                labels: {
                    padding: 30
                },
            }
        };

        this.respChart($("#doughnut"),'Doughnut',donutChart,donutOpts);

    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.ChartJs.init()
}(window.jQuery);

$( document ).ready(function() {
    
    var DrawSparkline = function() {
        $('#sparkline1').sparkline([25, 23, 26, 24, 25, 32, 30, 24, 19], {
            type: 'line',
            width: "100%",
            height: '80',
            chartRangeMax: 35,
            lineColor: '#f1556c',
            fillColor: 'rgba(229, 43, 76, 0.3)',
            highlightLineColor: 'rgba(0,0,0,.1)',
            highlightSpotColor: 'rgba(0,0,0,.2)',
            maxSpotColor:false,
            minSpotColor: false,
            spotColor:false,
            lineWidth: 1
        });

        $('#sparkline2').sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40], {
            type: 'line',
            width: "100%",
            height: '80',
            chartRangeMax: 50,
            lineColor: '#00acc1',
            fillColor: 'rgba(0, 172, 193, 0.2)',
            highlightLineColor: 'rgba(0,0,0,.1)',
            highlightSpotColor: 'rgba(0,0,0,.2)',
            maxSpotColor:false,
            minSpotColor: false,
            spotColor:false,
            lineWidth: 1
        });

        $('#sparkline3').sparkline([25, 23, 26, 24, 25, 32, 30, 24, 19], {
            type: 'line',
            width: "100%",
            height: '80',
            chartRangeMax: 35,
            lineColor: '#f1556c',
            fillColor: 'rgba(229, 43, 76, 0.3)',
            highlightLineColor: 'rgba(0,0,0,.1)',
            highlightSpotColor: 'rgba(0,0,0,.2)',
            maxSpotColor:false,
            minSpotColor: false,
            spotColor:false,
            lineWidth: 1
        });

        $('#sparkline4').sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40], {
            type: 'line',
            width: "100%",
            height: '80',
            chartRangeMax: 50,
            lineColor: '#00acc1',
            fillColor: 'rgba(0, 172, 193, 0.2)',
            highlightLineColor: 'rgba(0,0,0,.1)',
            highlightSpotColor: 'rgba(0,0,0,.2)',
            maxSpotColor:false,
            minSpotColor: false,
            spotColor:false,
            lineWidth: 1
        });

    };
    
    DrawSparkline();
    
    var resizeChart;

    $(window).resize(function(e) {
        clearTimeout(resizeChart);
        resizeChart = setTimeout(function() {
            DrawSparkline();
            DrawMouseSpeed();
        }, 300);
    });
});