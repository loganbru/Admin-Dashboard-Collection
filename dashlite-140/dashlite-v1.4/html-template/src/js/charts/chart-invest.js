!(function (NioApp, $) {
    "use strict";

    var refBarChart = {
        labels : ["01 Nov", "02 Nov", "03 Nov", "04 Nov", "05 Nov", "06 Nov", "07 Nov", "08 Nov", "09 Nov", "10 Nov", "11 Nov", "12 Nov", "13 Nov", "14 Nov", "15 Nov", "16 Nov", "17 Nov", "18 Nov", "19 Nov", "20 Nov", "21 Nov", "22 Nov", "23 Nov", "24 Nov", "25 Nov", "26 Nov", "27 Nov", "28 Nov", "29 Nov", "30 Nov"],
        dataUnit : 'People',
        datasets : [{
            label : "Join",
            color : "#9cabff",
            data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 75, 90]
        }]
    };

    //////// Referral Stats //////// 
    function referStats(selector, set_data){
        var $selector = (selector) ? $(selector) : $('.chart-refer-stats');
        $selector.each(function(){
            var $self = $(this), _self_id = $self.attr('id'), _get_data = (typeof set_data === 'undefined') ? eval(_self_id) : set_data;

            var selectCanvas = document.getElementById(_self_id).getContext("2d");
            var chart_data = [];
            for (var i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    label: _get_data.datasets[i].label,
                    data: _get_data.datasets[i].data,
                    // Styles
                    backgroundColor: _get_data.datasets[i].color,
                    borderWidth:2,
                    borderColor: 'transparent',
                    hoverBorderColor : 'transparent',
                    borderSkipped : 'bottom',
                    barPercentage : .5,
                    categoryPercentage : .7
                });
            } 
            var chart = new Chart(selectCanvas, {
                type: 'bar',
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data,
                },
                options: {
                    legend: {
                        display: false,
                    },
                    maintainAspectRatio: false,
                    tooltips: {
                        enabled: true,
                        callbacks: {
                            title: function(tooltipItem, data) {
                                return false;
                            },
                            label: function(tooltipItem, data) {
                                return data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']] + ' ' + _get_data.dataUnit;
                            }
                        },
                        backgroundColor: '#fff',
                        titleFontSize: 11,
                        titleFontColor: '#6783b8',
                        titleMarginBottom: 4,
                        bodyFontColor: '#9eaecf',
                        bodyFontSize: 10,
                        bodySpacing:3,
                        yPadding: 8,
                        xPadding: 8,
                        footerMarginTop: 0,
                        displayColors: false
                    },
                    scales: {
                        yAxes: [{
                            display: false,
                            ticks: {
                                beginAtZero: true
                            },
                        }],
                        xAxes: [{
                            display: false,
                        }]
                    }
                }
            });
        })
    }
    // init chart
    NioApp.coms.docReady.push(function(){ referStats(); });

    //////// AccountSummary //////// 
    var  profitCM = {
        labels : ["01 Nov", "02 Nov", "03 Nov", "04 Nov", "05 Nov", "06 Nov", "07 Nov", "08 Nov", "09 Nov", "10 Nov", "11 Nov", "12 Nov", "13 Nov", "14 Nov", "15 Nov", "16 Nov", "17 Nov", "18 Nov", "19 Nov", "20 Nov", "21 Nov", "22 Nov", "23 Nov", "24 Nov", "25 Nov", "26 Nov", "27 Nov", "28 Nov", "29 Nov", "30 Nov"],
        dataUnit : 'USD',
        datasets : [{
            label : "Send",
            color : "#5d7ce0",
            data: [0, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 75, 0]
        }]
    };

    function investProfit(selector, set_data){
        var $selector = (selector) ? $(selector) : $('.chart-profit');
        $selector.each(function(){
            var $self = $(this), _self_id = $self.attr('id'), _get_data = (typeof set_data === 'undefined') ? eval(_self_id) : set_data;
            var selectCanvas = document.getElementById(_self_id).getContext("2d");

            var chart_data = [];
            for (var i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    label: _get_data.datasets[i].label,
                    tension:.4,
                    backgroundColor: NioApp.hexRGB(_get_data.datasets[i].color,.3),
                    borderWidth:2,
                    borderColor: _get_data.datasets[i].color,
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: _get_data.datasets[i].color,
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 4,
                    data: _get_data.datasets[i].data,
                });
            } 
            var chart = new Chart(selectCanvas, {
                type: 'line',
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data,
                },
                options: {
                    legend: {
                        display: false,
                    },
                    maintainAspectRatio: false,
                    tooltips: {
                        enabled: true,
                        callbacks: {
                            title: function(tooltipItem, data) {
                                return false;
                            },
                            label: function(tooltipItem, data) {
                                return data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']] + ' ' + _get_data.dataUnit;
                            }
                        },
                        backgroundColor: '#fff',
                        titleFontSize: 11,
                        titleFontColor: '#6783b8',
                        titleMarginBottom: 4,
                        bodyFontColor: '#9eaecf',
                        bodyFontSize: 10,
                        bodySpacing:3,
                        yPadding: 8,
                        xPadding: 8,
                        footerMarginTop: 0,
                        displayColors: false
                    },
                    scales: {
                        yAxes: [{
                            display: false,
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                        xAxes: [{
                            display: false
                        }]
                    }
                }
            });
        })
    }
    // init investProfit
    NioApp.coms.docReady.push(function(){ investProfit(); });

})(NioApp, jQuery);