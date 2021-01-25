"use strict";

!function (NioApp, $) {
  "use strict"; // DataTable Init

  function covid_datatable() {
    var attr = {
      responsive: false,
      dom: '<"datatable-alt-wrap"t>',
      paging: false,
      autoWidth: false,
      order: [[1, 'desc']]
    };
    var dtable = $('.cov-datatable').DataTable(attr);

    function covid_order() {
      $('.cov-sortable').on('click', function () {
        var $this = $(this),
            idx = $this.index();
        $this.parent().find('.cov-sortable').not($this).removeClass('sort-down').removeClass('sort-up');

        if ($this.hasClass('sort-down')) {
          dtable.order([idx, 'asc']).draw();
          $this.addClass('sort-up').removeClass('sort-down');
        } else {
          dtable.order([idx, 'desc']).draw();
          $this.addClass('sort-down').removeClass('sort-up');
        }

        return false;
      });
    }

    covid_order();
  }

  covid_datatable(); // Vector Map

  var worldMap = {
    map: 'world_en',
    data: {
      "af": "140",
      "al": "354",
      "dz": "190",
      "ao": "145",
      "ag": "0",
      "ar": "6",
      "am": "554",
      "au": "1205",
      "at": "654",
      "az": "457",
      "bs": "564",
      "bh": "4156",
      "bd": "154",
      "bb": "354",
      "by": "54",
      "be": "987",
      "bz": "65",
      "bj": "34",
      "bt": "83",
      "bo": "72",
      "ba": "16",
      "bw": "545",
      "br": "12023",
      "bn": "154",
      "bg": "4560",
      "bf": "896",
      "bi": "356",
      "kh": "756",
      "cm": "3654",
      "ca": "15635",
      "cv": "6445",
      "cf": "4536",
      "td": "864",
      "cl": "3644",
      "cn": "145745",
      "co": "283",
      "km": "0",
      "cd": "3654",
      "cg": "342",
      "cr": "4532",
      "ci": "7852",
      "hr": "4587",
      "cy": "3544",
      "cz": "535",
      "dk": "6654",
      "dj": "745",
      "dm": "0",
      "do": "2144",
      "ec": "3674",
      "eg": "12530",
      "sv": "5452",
      "gq": "6377",
      "er": "5674",
      "ee": "3675",
      "et": "8954",
      "fj": "9674",
      "fi": "231",
      "fr": "89422",
      "ga": "5454",
      "gm": "556",
      "ge": "7653",
      "de": "102354",
      "gh": "5645",
      "gr": "12357",
      "gd": "2457",
      "gt": "525",
      "gn": "4765",
      "gw": "75",
      "gy": "55",
      "ht": "7552",
      "hn": "1254",
      "hk": "4323",
      "hu": "354",
      "is": "4527",
      "in": "1430",
      "id": "695",
      "ir": "96475",
      "iq": "5642",
      "ie": "4554",
      "il": "2214",
      "it": "145249",
      "jm": "4525",
      "jp": "5390",
      "jo": "5542",
      "kz": "129",
      "ke": "32",
      "ki": "0",
      "kr": "986",
      "undefined": "0",
      "kw": "117",
      "kg": "434",
      "la": "245",
      "lv": "6477",
      "lb": "3575",
      "ls": "4",
      "lr": "0",
      "ly": "5521",
      "lt": "213",
      "lu": "52",
      "mk": "014",
      "mg": "833",
      "mw": "504",
      "my": "2185",
      "mv": "143",
      "ml": "908",
      "mt": "78",
      "mr": "349",
      "mu": "943",
      "mx": "10004",
      "md": "536",
      "mn": "581",
      "me": "388",
      "ma": "917",
      "mz": "1021",
      "mm": "3565",
      "na": "1145",
      "np": "1511",
      "nl": "4504",
      "nz": "11138",
      "ni": "2541",
      "ne": "427",
      "ng": "4114",
      "no": "14",
      "om": "53",
      "pk": "2541",
      "pa": "4545",
      "pg": "4547",
      "py": "17",
      "pe": "153",
      "ph": "189",
      "pl": "438",
      "pt": "223",
      "qa": "4524",
      "ro": "4459",
      "ru": "12247",
      "rw": "4445",
      "ws": "0",
      "st": "0",
      "sa": "4424",
      "sn": "12",
      "rs": "3392",
      "sc": "0",
      "sl": "1564",
      "sg": "12452",
      "sk": "85",
      "si": "4521",
      "sb": "5452",
      "za": "4521",
      "es": "137831",
      "lk": "4451",
      "kn": "0",
      "lc": "1",
      "vc": "0",
      "sd": "441",
      "sr": "54",
      "sz": "124",
      "se": "444",
      "ch": "1522",
      "sy": "59",
      "tw": "426",
      "tj": "58",
      "tz": "22",
      "th": "3121",
      "tl": "62",
      "tg": "47",
      "to": "310",
      "tt": "212",
      "tn": "4386",
      "tr": "7295",
      "tm": "0",
      "ug": "1712",
      "ua": "13656",
      "ae": "2365",
      "gb": "2257",
      "us": "3562418",
      "uy": "4071",
      "uz": "3772",
      "vu": "72",
      "ve": "2821",
      "vn": "1099",
      "ye": "3002",
      "zm": "1569",
      "zw": "557"
    }
  };

  function jqvmap_init() {
    var elm = '.vector-map';

    if ($(elm).exists() && typeof $.fn.vectorMap === 'function') {
      $(elm).each(function () {
        var $self = $(this),
            _self_id = $self.attr('id'),
            map_data = eval(_self_id);

        $self.vectorMap({
          map: map_data.map,
          backgroundColor: 'transparent',
          borderColor: '#dee6ed',
          borderOpacity: 1,
          borderWidth: 1,
          color: '#ccd7e2',
          enableZoom: false,
          hoverColor: '#9cabff',
          hoverOpacity: null,
          normalizeFunction: 'polynomial',
          scaleColors: ['#ccd7e2', '#798bff'],
          selectedColor: '#6576ff',
          showTooltip: true,
          values: map_data.data,
          onLabelShow: function onLabelShow(event, label, code) {
            var mapData = JQVMap.maps,
                what = Object.keys(mapData)[0],
                name = mapData[what].paths[code]['name'];
            label.html(name + ' - ' + (map_data.data[code] || 0));
          }
        });
      });
    }
  }

  ;
  NioApp.coms.docReady.push(jqvmap_init);
  var confirmedCases = {
    labels: ["22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan", "31 Jan", "01 Feb", "02 Feb", "03 Feb", "04 Feb", "05 Feb", "06 Feb", "07 Feb", "08 Feb", "09 Feb", "10 Feb", "11 Feb", "12 Feb", "13 Feb", "14 Feb", "15 Feb", "16 Feb", "17 Feb", "18 Feb", "19 Feb", "20 Feb", "21 Feb", "22 Feb", "23 Feb", "24 Feb", "25 Feb", "26 Feb", "27 Feb", "28 Feb", "29 Feb"],
    dataUnit: 'People',
    lineTension: 0.1,
    datasets: [{
      label: "Infected",
      color: "#816bff",
      background: 'transparent',
      data: [1254, 1354, 1650, 1752, 1820, 2200, 2400, 2500, 2545, 2700, 2790, 2900, 3000, 3200, 3500, 4000, 4400, 4800, 5800, 6900, 8000, 9900, 11542, 14000, 17000, 21054, 28000, 36000, 45000, 55000, 70500, 81900, 91054, 105421, 135400, 149254, 176345, 192544, 214524]
    }, {
      label: "Deaths",
      color: "#e85347",
      background: 'transparent',
      data: [140, 186, 202, 265, 322, 365, 398, 442, 462, 491, 521, 542, 566, 586, 611, 624, 684, 701, 731, 768, 799, 826, 1145, 1454, 1645, 2117, 3545, 4541, 5451, 6454, 7645, 8754, 9875, 12545, 14545, 17541, 19465, 23005, 28545]
    }]
  };
  var confirmedCasesComparison = {
    labels: ["22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan", "31 Jan", "01 Feb", "02 Feb", "03 Feb", "04 Feb", "05 Feb", "06 Feb", "07 Feb", "08 Feb", "09 Feb", "10 Feb", "11 Feb", "12 Feb", "13 Feb", "14 Feb", "15 Feb", "16 Feb", "17 Feb", "18 Feb", "19 Feb", "20 Feb", "21 Feb", "22 Feb", "23 Feb", "24 Feb", "25 Feb", "26 Feb", "27 Feb", "28 Feb", "29 Feb"],
    dataUnit: 'People',
    lineTension: 0.1,
    datasets: [{
      label: "Infected",
      color: "#816bff",
      background: 'transparent',
      data: [1254, 1354, 1650, 1752, 1820, 2200, 2400, 2500, 2545, 2700, 2790, 2900, 3000, 3200, 3500, 4000, 4400, 4800, 5800, 6900, 8000, 9900, 11542, 14000, 17000, 21054, 28000, 36000, 45000, 55000, 70500, 81900, 91054, 105421, 135400, 149254, 176345, 192544, 214524]
    }, {
      label: "Recovered",
      color: "#1ee0ac",
      background: 'transparent',
      data: [240, 286, 302, 365, 522, 565, 598, 642, 762, 791, 821, 842, 866, 986, 1011, 1224, 1384, 1601, 1731, 1968, 2099, 2826, 3145, 3454, 4645, 5117, 6545, 9541, 11451, 15454, 20645, 24754, 32875, 38545, 42545, 47541, 54965, 60005, 72545]
    }, {
      label: "Deaths",
      color: "#e85347",
      background: 'transparent',
      data: [140, 186, 202, 265, 322, 365, 398, 442, 462, 491, 521, 542, 566, 586, 611, 624, 684, 701, 731, 768, 799, 826, 1145, 1454, 1645, 2117, 3545, 4541, 5451, 6454, 7645, 8754, 9875, 12545, 14545, 17541, 19465, 23005, 28545]
    }]
  };
  var totalCasesComparison = {
    labels: ["22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan", "31 Jan", "01 Feb", "02 Feb", "03 Feb", "04 Feb", "05 Feb", "06 Feb", "07 Feb", "08 Feb", "09 Feb", "10 Feb", "11 Feb", "12 Feb", "13 Feb", "14 Feb", "15 Feb", "16 Feb", "17 Feb", "18 Feb", "19 Feb", "20 Feb", "21 Feb", "22 Feb", "23 Feb", "24 Feb", "25 Feb", "26 Feb", "27 Feb", "28 Feb", "29 Feb"],
    dataUnit: 'People',
    lineTension: 0.1,
    datasets: [{
      label: "USA",
      color: "#816bff",
      background: 'transparent',
      data: [1254, 1354, 1650, 1752, 1820, 2200, 2400, 2500, 2545, 2700, 2790, 2900, 3000, 3200, 3500, 4000, 4400, 4800, 5800, 6900, 8000, 9900, 11542, 14000, 17000, 21054, 28000, 36000, 45000, 55000, 70500, 81900, 91054, 105421, 135400, 149254, 176345, 192544, 214524]
    }, {
      label: "Italy",
      color: "#1ee0ac",
      background: 'transparent',
      data: [240, 286, 302, 365, 522, 565, 598, 642, 762, 791, 821, 842, 866, 986, 1011, 1224, 1384, 1601, 1731, 1968, 2099, 2826, 3145, 3454, 4645, 5117, 6545, 9541, 11451, 15454, 20645, 24754, 32875, 38545, 42545, 47541, 54965, 60005, 72545]
    }, {
      label: "China",
      color: "#e85347",
      background: 'transparent',
      data: [140, 186, 202, 265, 322, 365, 398, 442, 462, 491, 521, 542, 566, 586, 611, 624, 684, 701, 731, 768, 799, 826, 1145, 1454, 1645, 2117, 3545, 4541, 5451, 6454, 7645, 8754, 9875, 12545, 14545, 17541, 19465, 23005, 28545]
    }]
  };
  var totalCaseChart = {
    labels: ["22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan", "31 Jan", "01 Feb", "02 Feb", "03 Feb", "04 Feb", "05 Feb", "06 Feb", "07 Feb", "08 Feb", "09 Feb", "10 Feb", "11 Feb", "12 Feb", "13 Feb", "14 Feb", "15 Feb", "16 Feb", "17 Feb", "18 Feb", "19 Feb", "20 Feb", "21 Feb", "22 Feb", "23 Feb", "24 Feb", "25 Feb", "26 Feb", "27 Feb", "28 Feb", "29 Feb"],
    dataUnit: 'People',
    lineTension: 0.1,
    datasets: [{
      label: "Case",
      color: "#816bff",
      background: 'transparent',
      data: [1254, 1354, 1650, 1752, 1820, 2200, 2400, 2500, 2545, 2700, 2790, 2900, 3000, 3200, 3500, 4000, 4400, 4800, 5800, 6900, 8000, 9900, 11542, 14000, 17000, 21054, 28000, 36000, 45000, 55000, 70500, 81900, 91054, 105421, 135400, 149254, 176345, 192544, 214524]
    }]
  };
  var totalDeathsChart = {
    labels: ["22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan", "31 Jan", "01 Feb", "02 Feb", "03 Feb", "04 Feb", "05 Feb", "06 Feb", "07 Feb", "08 Feb", "09 Feb", "10 Feb", "11 Feb", "12 Feb", "13 Feb", "14 Feb", "15 Feb", "16 Feb", "17 Feb", "18 Feb", "19 Feb", "20 Feb", "21 Feb", "22 Feb", "23 Feb", "24 Feb", "25 Feb", "26 Feb", "27 Feb", "28 Feb", "29 Feb"],
    dataUnit: 'People',
    lineTension: 0.1,
    datasets: [{
      label: "Deaths",
      color: "#e85347",
      background: 'transparent',
      data: [140, 186, 202, 265, 322, 365, 398, 442, 462, 491, 521, 542, 566, 586, 611, 624, 684, 701, 731, 768, 799, 826, 1145, 1454, 1645, 2117, 3545, 4541, 5451, 6454, 7645, 8754, 9875, 12545, 14545, 17541, 19465, 23005, 28545]
    }]
  };
  var totalCompareChart = {
    labels: ["22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan", "31 Jan", "01 Feb", "02 Feb", "03 Feb", "04 Feb", "05 Feb", "06 Feb", "07 Feb", "08 Feb", "09 Feb", "10 Feb", "11 Feb", "12 Feb", "13 Feb", "14 Feb", "15 Feb", "16 Feb", "17 Feb", "18 Feb", "19 Feb", "20 Feb", "21 Feb", "22 Feb", "23 Feb", "24 Feb", "25 Feb", "26 Feb", "27 Feb", "28 Feb", "29 Feb"],
    dataUnit: 'People',
    lineTension: 0.1,
    datasets: [{
      label: "Case",
      color: "#816bff",
      background: 'transparent',
      data: [1254, 1354, 1650, 1752, 1820, 2200, 2400, 2500, 2545, 2700, 2790, 2900, 3000, 3200, 3500, 4000, 4400, 4800, 5800, 6900, 8000, 9900, 11542, 14000, 17000, 21054, 28000, 36000, 45000, 55000, 70500, 81900, 91054, 105421, 135400, 149254, 176345, 192544, 214524]
    }, {
      label: "Deaths",
      color: "#e85347",
      background: 'transparent',
      data: [140, 186, 202, 265, 322, 365, 398, 442, 462, 491, 521, 542, 566, 586, 611, 624, 684, 701, 731, 768, 799, 826, 1145, 1454, 1645, 2117, 3545, 4541, 5451, 6454, 7645, 8754, 9875, 12545, 14545, 17541, 19465, 23005, 28545]
    }]
  };

  function lineCovidCase(selector, set_data) {
    var $selector = selector ? $(selector) : $('.covid-case-line-chart');
    $selector.each(function () {
      var $self = $(this),
          _self_id = $self.attr('id'),
          _get_data = typeof set_data === 'undefined' ? eval(_self_id) : set_data;

      var selectCanvas = document.getElementById(_self_id).getContext("2d");
      var chart_data = [];

      for (var i = 0; i < _get_data.datasets.length; i++) {
        chart_data.push({
          label: _get_data.datasets[i].label,
          tension: _get_data.lineTension,
          backgroundColor: _get_data.datasets[i].background,
          borderWidth: 2,
          borderColor: _get_data.datasets[i].color,
          pointBorderColor: "transparent",
          pointBackgroundColor: "transparent",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: _get_data.datasets[i].color,
          pointBorderWidth: 2,
          pointHoverRadius: 3,
          pointHoverBorderWidth: 2,
          pointRadius: 3,
          pointHitRadius: 3,
          data: _get_data.datasets[i].data
        });
      }

      var chart = new Chart(selectCanvas, {
        type: 'line',
        data: {
          labels: _get_data.labels,
          datasets: chart_data
        },
        options: {
          legend: {
            display: _get_data.legend ? _get_data.legend : false,
            labels: {
              boxWidth: 30,
              padding: 20,
              fontColor: '#6783b8'
            }
          },
          maintainAspectRatio: false,
          tooltips: {
            enabled: true,
            mode: 'index',
            position: 'nearest',
            callbacks: {
              title: function title(tooltipItem, data) {
                return data['labels'][tooltipItem[0]['index']];
              },
              label: function label(tooltipItem, data) {
                return data.datasets[tooltipItem.datasetIndex]['label'] + ' - ' + data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']];
              },
              footer: function footer(tooltipItems, data) {
                var total = 0;
                tooltipItems.forEach(function (tooltipItem) {
                  total += data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']];
                });
                return 'Total - ' + total;
              }
            },
            backgroundColor: '#fff',
            borderColor: '#eff6ff',
            borderWidth: 2,
            titleFontSize: 11,
            titleFontWeight: 'normal',
            titleFontColor: '#6783b8',
            titleMarginBottom: 6,
            bodyFontColor: '#9eaecf',
            bodyFontSize: 11,
            bodySpacing: 4,
            yPadding: 10,
            xPadding: 10,
            footerFontSize: 11,
            footerFontColor: '#6783b8',
            footerMarginTop: 6,
            displayColors: false
          },
          scales: {
            yAxes: [{
              display: true,
              ticks: {
                beginAtZero: false,
                fontSize: 12,
                fontColor: '#9eaecf',
                padding: 10,
                callback: function callback(value) {
                  return Math.abs(value) > 999 ? Math.sign(value) * (Math.abs(value) / 1000).toFixed(1) + ' k' : Math.sign(value) * Math.abs(value);
                },
                min: 100,
                stepSize: 5000
              },
              gridLines: {
                color: "#e5ecf8",
                tickMarkLength: 0,
                zeroLineColor: '#e5ecf8'
              }
            }],
            xAxes: [{
              display: false,
              ticks: {
                fontSize: 9,
                fontColor: '#9eaecf',
                source: 'auto',
                padding: 10
              },
              gridLines: {
                color: "transparent",
                tickMarkLength: 0,
                zeroLineColor: 'transparent'
              }
            }]
          }
        }
      });
    });
  } // init chart


  NioApp.coms.docReady.push(function () {
    lineCovidCase();
  });
  var dailyIncrease = {
    labels: ["22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan", "31 Jan", "01 Feb", "02 Feb", "03 Feb", "04 Feb", "05 Feb", "06 Feb", "07 Feb", "08 Feb", "09 Feb", "10 Feb", "11 Feb", "12 Feb", "13 Feb", "14 Feb", "15 Feb", "16 Feb", "17 Feb", "18 Feb", "19 Feb", "20 Feb", "21 Feb", "22 Feb", "23 Feb", "24 Feb", "25 Feb", "26 Feb", "27 Feb", "28 Feb", "29 Feb"],
    dataUnit: 'People',
    stacked: true,
    datasets: [{
      label: "Infected",
      color: "#816bff",
      background: '#816bff',
      data: [1140, 1186, 1202, 2265, 2822, 3065, 3145, 3654, 3945, 4117, 4221, 4454, 4645, 4754, 5145, 5317, 5545, 6717, 6945, 7241, 7451, 8954, 9145, 9454, 9645, 10117, 10545, 11541, 12044, 13454, 14645, 15754, 16875, 17545, 19545, 20541, 22465, 25005, 28545]
    }, {
      label: "Deaths",
      color: "#e85347",
      background: '#e85347',
      data: [340, 486, 502, 665, 822, 965, 1045, 1154, 1245, 1317, 1321, 1404, 1445, 1454, 1485, 1501, 1545, 1517, 1564, 1581, 1601, 1624, 1645, 1654, 1685, 1697, 1705, 1741, 1744, 1784, 1845, 1854, 1875, 1895, 1905, 1941, 1965, 2005, 2545]
    }]
  };
  var dailyIncreaseComparison = {
    labels: ["22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan", "31 Jan", "01 Feb", "02 Feb", "03 Feb", "04 Feb", "05 Feb", "06 Feb", "07 Feb", "08 Feb", "09 Feb", "10 Feb", "11 Feb", "12 Feb", "13 Feb", "14 Feb", "15 Feb", "16 Feb", "17 Feb", "18 Feb", "19 Feb", "20 Feb", "21 Feb", "22 Feb", "23 Feb", "24 Feb", "25 Feb", "26 Feb", "27 Feb", "28 Feb", "29 Feb"],
    dataUnit: 'People',
    stacked: true,
    datasets: [{
      label: "Infected",
      color: "#816bff",
      background: '#816bff',
      data: [1140, 1186, 1202, 2265, 2822, 3065, 3145, 3654, 3945, 4117, 4221, 4454, 4645, 4754, 5145, 5317, 5545, 6717, 6945, 7241, 7451, 8954, 9145, 9454, 9645, 10117, 10545, 11541, 12044, 13454, 14645, 15754, 16875, 17545, 19545, 20541, 22465, 25005, 28545]
    }, {
      label: "Recovered",
      color: "#1ee0ac",
      background: '#1ee0ac',
      data: [340, 486, 502, 665, 822, 965, 1045, 1154, 1245, 1317, 1321, 1404, 1445, 1454, 1485, 1501, 1545, 1517, 1564, 1581, 1601, 1624, 1645, 1654, 1685, 1697, 1705, 1741, 1744, 1784, 1845, 1854, 1875, 1895, 1905, 1941, 1965, 2005, 2545]
    }, {
      label: "Deaths",
      color: "#e85347",
      background: '#e85347',
      data: [340, 486, 502, 665, 822, 965, 1045, 1154, 1245, 1317, 1321, 1404, 1445, 1454, 1485, 1501, 1545, 1517, 1564, 1581, 1601, 1624, 1645, 1654, 1685, 1697, 1705, 1741, 1744, 1784, 1845, 1854, 1875, 1895, 1905, 1941, 1965, 2005, 2545]
    }]
  };
  var dailyIncreaseCountry = {
    labels: ["22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan", "31 Jan", "01 Feb", "02 Feb", "03 Feb", "04 Feb", "05 Feb", "06 Feb", "07 Feb", "08 Feb", "09 Feb", "10 Feb", "11 Feb", "12 Feb", "13 Feb", "14 Feb", "15 Feb", "16 Feb", "17 Feb", "18 Feb", "19 Feb", "20 Feb", "21 Feb", "22 Feb", "23 Feb", "24 Feb", "25 Feb", "26 Feb", "27 Feb", "28 Feb", "29 Feb"],
    dataUnit: 'People',
    stacked: true,
    datasets: [{
      label: "Infected",
      color: "#9cabff",
      background: "#9cabff",
      data: [1140, 1186, 1202, 2265, 2822, 3065, 3145, 3654, 3945, 4117, 4221, 4454, 4645, 4754, 5145, 5317, 5545, 6717, 6945, 7241, 7451, 8954, 9145, 9454, 9645, 10117, 10545, 11541, 12044, 13454, 14645, 15754, 16875, 17545, 19545, 20541, 22465, 25005, 28545]
    }, {
      label: "Deaths",
      color: "#e85347",
      background: "#e85347",
      data: [340, 486, 502, 665, 822, 965, 1045, 1154, 1245, 1317, 1321, 1404, 1445, 1454, 1485, 1501, 1545, 1517, 1564, 1581, 1601, 1624, 1645, 1654, 1685, 1697, 1705, 1741, 1744, 1784, 1845, 1854, 1875, 1895, 1905, 1941, 1965, 2005, 2545]
    }]
  };
  var dailyCaseDay = {
    labels: ["22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan", "31 Jan", "01 Feb", "02 Feb", "03 Feb", "04 Feb", "05 Feb", "06 Feb", "07 Feb", "08 Feb", "09 Feb", "10 Feb", "11 Feb", "12 Feb", "13 Feb", "14 Feb", "15 Feb", "16 Feb", "17 Feb", "18 Feb", "19 Feb", "20 Feb", "21 Feb", "22 Feb", "23 Feb", "24 Feb", "25 Feb", "26 Feb", "27 Feb", "28 Feb", "29 Feb"],
    dataUnit: 'People',
    datasets: [{
      label: "Case",
      color: "#9cabff",
      background: "#9cabff",
      data: [1140, 1186, 1202, 2265, 2822, 3065, 3145, 3654, 3945, 4117, 4221, 4454, 4645, 4754, 5145, 5317, 5545, 6717, 6945, 7241, 7451, 8954, 9145, 9454, 9645, 10117, 10545, 11541, 12044, 13454, 14645, 15754, 16875, 17545, 19545, 20541, 22465, 25005, 28545]
    }]
  };
  var dailyDeathsDay = {
    labels: ["22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan", "31 Jan", "01 Feb", "02 Feb", "03 Feb", "04 Feb", "05 Feb", "06 Feb", "07 Feb", "08 Feb", "09 Feb", "10 Feb", "11 Feb", "12 Feb", "13 Feb", "14 Feb", "15 Feb", "16 Feb", "17 Feb", "18 Feb", "19 Feb", "20 Feb", "21 Feb", "22 Feb", "23 Feb", "24 Feb", "25 Feb", "26 Feb", "27 Feb", "28 Feb", "29 Feb"],
    dataUnit: 'People',
    datasets: [{
      label: "Deaths",
      color: "#e85347",
      background: "#e85347",
      data: [140, 186, 202, 265, 322, 365, 398, 442, 462, 491, 521, 542, 566, 586, 611, 624, 684, 701, 731, 768, 799, 826, 1145, 1454, 1645, 2117, 3545, 4541, 5451, 6454, 7645, 8754, 9875, 12545, 14545, 17541, 19465, 23005, 28545]
    }]
  };
  var dailyCompareDay = {
    labels: ["22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan", "31 Jan", "01 Feb", "02 Feb", "03 Feb", "04 Feb", "05 Feb", "06 Feb", "07 Feb", "08 Feb", "09 Feb", "10 Feb", "11 Feb", "12 Feb", "13 Feb", "14 Feb", "15 Feb", "16 Feb", "17 Feb", "18 Feb", "19 Feb", "20 Feb", "21 Feb", "22 Feb", "23 Feb", "24 Feb", "25 Feb", "26 Feb", "27 Feb", "28 Feb", "29 Feb"],
    dataUnit: 'People',
    datasets: [{
      label: "Case",
      color: "#9cabff",
      background: "#9cabff",
      data: [1140, 1186, 1202, 2265, 2822, 3065, 3145, 3654, 3945, 4117, 4221, 4454, 4645, 4754, 5145, 5317, 5545, 6717, 6945, 7241, 7451, 8954, 9145, 9454, 9645, 10117, 10545, 11541, 12044, 13454, 14645, 15754, 16875, 17545, 19545, 20541, 22465, 25005, 28545]
    }, {
      label: "Deaths",
      color: "#e85347",
      background: "#e85347",
      data: [140, 186, 202, 265, 322, 365, 398, 442, 462, 491, 521, 542, 566, 586, 611, 624, 684, 701, 731, 768, 799, 826, 1145, 1454, 1645, 2117, 3545, 4541, 5451, 6454, 7645, 8754, 9875, 12545, 14545, 17541, 19465, 23005, 28545]
    }]
  };

  function barCovidcase(selector, set_data) {
    var $selector = selector ? $(selector) : $('.covid-case-bar-chart');
    $selector.each(function () {
      var $self = $(this),
          _self_id = $self.attr('id'),
          _get_data = typeof set_data === 'undefined' ? eval(_self_id) : set_data;

      var selectCanvas = document.getElementById(_self_id).getContext("2d");
      var chart_data = [];

      for (var i = 0; i < _get_data.datasets.length; i++) {
        chart_data.push({
          label: _get_data.datasets[i].label,
          tension: _get_data.lineTension,
          backgroundColor: _get_data.datasets[i].background,
          borderWidth: 2,
          borderColor: _get_data.datasets[i].color,
          data: _get_data.datasets[i].data,
          barPercentage: .7,
          categoryPercentage: .7
        });
      }

      var chart = new Chart(selectCanvas, {
        type: 'bar',
        data: {
          labels: _get_data.labels,
          datasets: chart_data
        },
        options: {
          legend: {
            display: _get_data.legend ? _get_data.legend : false,
            labels: {
              boxWidth: 12,
              padding: 20,
              fontColor: '#6783b8'
            }
          },
          maintainAspectRatio: false,
          tooltips: {
            enabled: true,
            mode: 'index',
            position: 'nearest',
            callbacks: {
              title: function title(tooltipItem, data) {
                return data['labels'][tooltipItem[0]['index']];
              },
              label: function label(tooltipItem, data) {
                return data.datasets[tooltipItem.datasetIndex]['label'] + ' - ' + data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']];
              },
              footer: function footer(tooltipItems, data) {
                var total = 0;
                tooltipItems.forEach(function (tooltipItem) {
                  total += data.datasets[tooltipItem.datasetIndex]['data'][tooltipItem['index']];
                });
                return 'Total - ' + total;
              }
            },
            backgroundColor: '#fff',
            borderColor: '#eff6ff',
            borderWidth: 2,
            titleFontSize: 11,
            titleFontWeight: 'normal',
            titleFontColor: '#6783b8',
            titleMarginBottom: 6,
            bodyFontColor: '#9eaecf',
            bodyFontSize: 11,
            bodySpacing: 4,
            yPadding: 10,
            xPadding: 10,
            footerFontSize: 11,
            footerFontColor: '#6783b8',
            footerMarginTop: 6,
            displayColors: false
          },
          scales: {
            yAxes: [{
              display: true,
              stacked: _get_data.stacked ? _get_data.stacked : false,
              ticks: {
                beginAtZero: true,
                fontSize: 12,
                fontColor: '#9eaecf',
                padding: 10,
                callback: function callback(value) {
                  return Math.abs(value) > 999 ? Math.sign(value) * (Math.abs(value) / 1000).toFixed(1) + ' k' : Math.sign(value) * Math.abs(value);
                },
                stepSize: 5000
              },
              gridLines: {
                color: "#e5ecf8",
                tickMarkLength: 0,
                zeroLineColor: '#e5ecf8'
              }
            }],
            xAxes: [{
              display: false,
              stacked: _get_data.stacked ? _get_data.stacked : false,
              ticks: {
                fontSize: 9,
                fontColor: '#9eaecf',
                source: 'auto',
                padding: 10
              },
              gridLines: {
                color: "transparent",
                tickMarkLength: 0,
                zeroLineColor: 'transparent'
              }
            }]
          }
        }
      });
    });
  } // init chart


  NioApp.coms.docReady.push(function () {
    barCovidcase();
  });
}(NioApp, jQuery);