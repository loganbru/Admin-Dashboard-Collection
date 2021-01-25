//[widget morris charts Javascript]

$(function(){
  'use strict';

  new Morris.Bar({
    element: 'morrisBar1',
    data: [
      { y: '2006', a: 110, b: 89 },
      { y: '2007', a: 71,  b: 63 },
      { y: '2008', a: 52,  b: 44 },
      { y: '2009', a: 71,  b: 62 },
      { y: '2010', a: 55,  b: 39 },
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    barColors: ['#5A8DEE', '#39DA8A'],
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

  new Morris.Bar({
    element: 'morrisBar2',
    data: [
      { y: '2006', a: 110, b: 89 },
      { y: '2007', a: 71,  b: 63 },
      { y: '2008', a: 52,  b: 44 },
      { y: '2009', a: 71,  b: 62 },
      { y: '2010', a: 55,  b: 39 },
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    barColors: ['#5A8DEE', '#39DA8A'],
    stacked: true,
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

  new Morris.Bar({
    element: 'morrisBar3',
    data: [
      { y: '2006', a: 110, b: 89, c: 78 },
      { y: '2007', a: 71,  b: 63, c: 71 },
      { y: '2008', a: 52,  b: 44, c: 47 },
      { y: '2009', a: 71,  b: 62, c: 78 },
    ],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Series A', 'Series B', 'Series C'],
    barColors: ['#5A8DEE', '#39DA8A','#FF5B5C'],
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

  new Morris.Bar({
    element: 'morrisBar4',
    data: [
      { y: '2006', a: 110, b: 89, c: 78 },
      { y: '2007', a: 71,  b: 63, c: 71 },
      { y: '2008', a: 52,  b: 44, c: 47 },
      { y: '2009', a: 71,  b: 62, c: 78 },
      { y: '2010', a: 65,  b: 60, c: 60 },
    ],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Series A', 'Series B', 'Series C'],
    barColors: ['#5A8DEE', '#39DA8A','#FF5B5C'],
    stacked: true,
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });


  new Morris.Line({
    element: 'morrisLine1',
    data: [
      { y: '2013', a: 10, b: 10 },
      { y: '2014', a: 20,  b: 15 },
      { y: '2015', a: 50,  b: 40 },
      { y: '2016', a: 30,  b: 25 },
      { y: '2017', a: 40,  b: 15 },
      { y: '2018', a: 55,  b: 20 },
      { y: '2019', a: 70, b: 40 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    lineColors: ['#39DA8A', '#5A8DEE'],
    lineWidth: 1,
    ymax: 'auto 100',
    gridTextSize: 11,
    hideHover: 'auto',
    smooth: false,
    resize: true
  });

  new Morris.Line({
    element: 'morrisLine2',
    data: [
      { y: '2013', a: 20, b: 10, c: 40 },
      { y: '2014', a: 30, b: 15, c: 45 },
      { y: '2015', a: 50, b: 40, c: 65 },
      { y: '2016', a: 40, b: 25, c: 55 },
      { y: '2017', a: 30, b: 15, c: 45 },
      { y: '2018', a: 45, b: 20, c: 65 },
      { y: '2019', a: 60, b: 40, c: 70 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Series A', 'Series B', 'Series C'],
    lineColors: ['#39DA8A', '#5A8DEE', '#FDAC41'],
    lineWidth: 1,
    ymax: 'auto 100',
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

  new Morris.Area({
    element: 'morrisArea1',
    data: [
      { y: '2006', a: 50, b: 40 },
      { y: '2007', a: 25,  b: 15 },
      { y: '2008', a: 20,  b: 40 },
      { y: '2009', a: 75,  b: 65 },
      { y: '2010', a: 50,  b: 40 },
      { y: '2011', a: 75,  b: 65 },
      { y: '2012', a: 100, b: 90 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    lineColors: ['#39DA8A', '#5A8DEE'],
    lineWidth: 1,
    fillOpacity: 0.5,
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

  new Morris.Area({
    element: 'morrisArea2',
    data: [
      { y: '2006', a: 20, b: 10, c: 40 },
      { y: '2007', a: 30, b: 15, c: 45 },
      { y: '2008', a: 50, b: 40, c: 65 },
      { y: '2009', a: 40, b: 25, c: 55 },
      { y: '2010', a: 30, b: 15, c: 45 },
      { y: '2011', a: 45, b: 20, c: 65 },
      { y: '2012', a: 60, b: 40, c: 70 }
    ],

    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Series A', 'Series B', 'Series C'],
    lineColors: ['#39DA8A', '#5A8DEE', '#FDAC41'],
    lineWidth: 1,
    fillOpacity: 0.5,
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

  new Morris.Donut({
    element: 'morrisDonut1',
    data: [
      {label: "Men", value: 12},
      {label: "Women", value: 30},
      {label: "Kids", value: 20}
    ],
    colors: ['#39DA8A', '#5A8DEE', '#FDAC41'],
    resize: true
  });

  new Morris.Donut({
    element: 'morrisDonut2',
    data: [
      {label: "Men", value: 12},
      {label: "Women", value: 30},
      {label: "Kids", value: 20},
      {label: "Infant", value: 25}
    ],
    colors: ['#39DA8A','#5A8DEE','#FDAC41','#FF5B5C'],
    resize: true
  });

});

