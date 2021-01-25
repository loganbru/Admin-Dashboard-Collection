/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Project Dashboard Js
 */


 

//  Morris Area chart

$( function () {
    "use strict";

  // Performance Report

var options = {
    chart: {
      type: 'radialBar',
      height: 300,
    },
    plotOptions: {
      radialBar: {
        offsetY: -10,
        startAngle: 0,
        endAngle: 270,
        hollow: {
          margin: 5,
          size: '50%',
          background: 'transparent',
  
        },
        track: {
          show: false,
        },
        dataLabels: {
          name: {
              fontSize: '18px',
          },
          value: {
              fontSize: '16px',
              color: '#50649c',
          },
          
        }
      },
    },
    colors: ['#4d79f6', '#4ac7ec', '#f3c74d'],
    stroke: {
      lineCap: 'round'
    },
    series: [71, 63, 100],
    labels: ['Completed', 'Active', 'Assigned'],
    legend: {
      show: true,
      floating: true,
      position: 'left',
      offsetX: 60,
      offsetY: 0,
    },
    responsive: [{
        breakpoint: 480,
        options: {
            legend: {
                show: true,
                floating: true,
                position: 'left',
                offsetX: 10,
                offsetY: 0,
            }
        }
    }]
  }
  
  
  var chart = new ApexCharts(
    document.querySelector("#d2_performance"),
    options
  );
  
  chart.render();
     
// Morris bar chart

    Morris.Bar( {
        element: 'morris-bar-chart', data: [ 
            { y: 'Marketech World', a: 10000, b: 8000, c:7800}, 
            { y: 'Book My World', a: 8500, b: 7000, c:6500}, 
            { y: 'Organic Farming', a: 9000, b: 7500, c:7000}, 
            { y: 'Transfer money', a: 9500, b: 8500, c:7500},
            { y: 'Trading System', a: 7500, b: 5500, c:5000},
            { y: 'Banking', a: 7500, b: 5500, c:5000}
        ], 
        barGap:8,
        barSizeRatio:0.30,
        barShape: 'soft',
        barRadius: [5, 5, 5, 5],
        xkey: 'y', 
        ykeys: [ 'a', 'b', 'c'], 
        labels: ['Total', 'Used', 'Target'], 
        barColors: ['#4d79f6', '#9ab3fa', '#cad7fd'], 
        hideHover: 'auto',
        preUnits: "$", 
        gridLineColor: '#d2d6e6', 
        gridTextColor: '#8997bd',
        resize: true,
    }
    );

// Todo-task

    $(function() {
        var todoListItem = $('.todo-list');
        var todoListInput = $('.todo-list-input');
        $('.add-new-todo-btn').on("click", function(event) {
          event.preventDefault();
    
          var item = $(this).prevAll('.todo-list-input').val();
    
          if (item) {
            todoListItem.append("<div class='todo-box'><i class='remove far fa-trash-alt'></i><div class='todo-task'><label class='ckbox'><input type='checkbox'/><span>" + item + "</span><i class='input-helper'></i></label></div></div>");
            todoListInput.val("");
          }
    
        });
    
        todoListItem.on('change', '.ckbox', function() {
          if ($(this).attr('checked')) {
            $(this).removeAttr('checked');
          } else {
            $(this).attr('checked', 'checked');
          }
    
          $(this).closest(".todo-box").toggleClass('completed');
    
        });
    
        todoListItem.on('click', '.remove', function() {
          $(this).parent().remove();
        });
    
      });    
   
});
 
// Morris Dounut

Morris.Donut({
  element: 'work_load',
  data: [
    {label: "P1", value: 50},
    {label: "P3", value: 114},
    {label: "P2", value: 230}
  ],
  resize: true,
  colors:[ '#f1f5fa', '#ff5da0', '#2b55cc'], 
  labelColor: '#50649c',
  backgroundColor: 'transparent',
  fillOpacity: 0.1,
  formatter: function (x) { return x + "h"}
});