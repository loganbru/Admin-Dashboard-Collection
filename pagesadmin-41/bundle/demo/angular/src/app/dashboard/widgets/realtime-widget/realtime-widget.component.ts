import { Component, OnInit, OnDestroy, ViewChild, ElementRef, ViewEncapsulation } from '@angular/core';
import { time } from 'd3';
declare var pg: any;
declare let d3: any;

@Component({
  selector: 'realtime-widget',
  templateUrl: './realtime-widget.component.html',
  styleUrls: ['./realtime-widget.component.scss'],
  encapsulation:ViewEncapsulation.None
})
export class RealtimeWidgetComponent implements OnInit, OnDestroy{

  chartOptions;
  timeouts = [];
  chartData = [{
      "key": "Web Server",
      "values": [],
      },
      {
        "key": "DB Server",
        "values": [],
    }]

  constructor() { }

  ngOnInit() {
    
  }

  updateChart(){
    this.timeouts.push(setTimeout(()=>{
      let data = [[],[]];
      var max = 50;
      var min = 30;
      let x = [0,Math.round(Math.random() * (max - min) + min)]
      let y = [2,Math.round(Math.random() * (max - min) + min)]
      this.chartData[0]["values"].shift();
      this.chartData[1]["values"].shift();

      this.chartData[0]["values"].push(x)
      this.chartData[1]["values"].push(y)
      this.updateChart();
    },1000));
  }
 
  ngAfterViewInit() {

    let data = [[],[]];

    var max = 50;
    var min = 30;

    for(var i=0; i < 30; i++) {
      let x = [i,Math.round(Math.random() * (max - min) + min)]
      data[0].push(x);
      x = [i,Math.round(Math.random() * (max - min) + min)]
      data[1].push(x)

    }
    this.chartData[0]["values"] = data[0]
    this.chartData[1]["values"] = data[1]

    setTimeout(()=>{
      this.chartOptions = {
        chart: {
          type: 'stackedAreaChart',
          color: [
            pg.getColor('success'),
            pg.getColor('master-light')
          ],
          x: function (d) { return d[0]; },
          y: function (d) { return d[1]; },
          interpolate:"cardinal",
          yAxis: {
            ticks:2
          },
          showControls:false,
          clipEdge:false,
          useInteractiveGuideline: false,
          margin: {
            top: 0,
            right:0,
            bottom:0,
            left:0
          },
          showLegend: false,
          showXAxis:false,
          showYAxis:true,
          interactive:true
        }
      }
    },2000)

    
    this.timeouts.push(setTimeout(()=>{
      window.dispatchEvent(new Event('resize'));
      // Enable to simulate real time chart
      //this.updateChart();
    },1000));
  }

  ngOnDestroy() {
    for(const timeout of this.timeouts){
      clearTimeout(timeout);
    }
  }
}
