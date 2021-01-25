import { Component, OnInit, OnDestroy, ViewChild, ElementRef, ViewEncapsulation } from '@angular/core';
declare var pg: any;
declare var echarts: any;

@Component({
  selector: 'bar-tile-widget',
  templateUrl: './bar-tile-widget.component.html',
  styleUrls: ['./bar-tile-widget.component.scss'],
  encapsulation: ViewEncapsulation.None
})

export class BarTileWidgetComponent implements OnInit,OnDestroy {
  chartOptions;
  timeout;
  chartData = [{
      "key": "Site visits",
      "values": [
          [1, 10],
          [2, 8],
          [3, 5],
          [4, 9],
          [5, 5],
          [6, 8],
          [7, 10],
      ],
  },
  {
    "key": "Site new",
    "values": [
        [1, 0],
        [2, 2],
        [3, 5],
        [4, 1],
        [5, 5],
        [6, 2],
        [7, 0],
    ],
}]

  ngOnInit() {
    
  }
  ngOnDestroy(){
    clearTimeout(this.timeout)
  }
  ngAfterViewInit() {
    this.timeout = setTimeout(()=>{
      this.chartOptions = {
        chart: {
          type: 'multiBarChart',
          color: [
            pg.getColor('danger'),
            pg.getColor('master-light')
          ],
          x: function (d) { return d[0]; },
          y: function (d) { return d[1]; },
          multibar:{
            stacked:true
          },
          showControls:false,
          useInteractiveGuideline: false,
          tooltip:{
            enabled:false
          },
          margin: {
            top: 0,
            right:0,
            bottom:0,
            left:0
          },
          groupSpacing:0.7,
          yDomain:[0,10],
          showLegend: false,
          showXAxis:false,
          showYAxis:false,
          interactive:false
        }
      }
    },2000);
  }

}