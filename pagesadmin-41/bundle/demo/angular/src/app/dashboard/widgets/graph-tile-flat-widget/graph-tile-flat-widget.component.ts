import { Component, OnInit, OnDestroy, Input, ViewEncapsulation } from '@angular/core';
declare var pg: any;


@Component({
  selector: 'graph-tile-flat-widget',
  templateUrl: './graph-tile-flat-widget.component.html',
  styleUrls: ['./graph-tile-flat-widget.component.scss'],
  encapsulation:ViewEncapsulation.None
})
export class GraphTileFlatWidgetComponent implements OnInit, OnDestroy {

  chartOptions;
  chartData = [{
      "key": "Site visits",
      "values": [
          [100, 0],
          [150, 8],
          [200, 20],
          [250, 22],
          [300, 30],
          [350, 26],
          [400, 10]
      ]
  }]
  _bgColor:string = 'bg-success';
  _pointColor:string = 'success';
  timeout;

  constructor() { }

  ngOnInit() {

  }
  ngOnDestroy() {
    clearTimeout(this.timeout)
  }
  ngAfterViewInit() {
    this.timeout = setTimeout(()=>{
      this.chartOptions = {
        chart: {
          type: 'lineChart',
          color: [
            ['#000']
          ],
          x: function (d) { return d[0]; },
          y: function (d) { return d[1]; },
          tooltip:{
            enabled:false
          },
          useInteractiveGuideline: false,
          clipEdge:false,
          margin: {
            top: 10,
            right: -10,
            bottom: -13,
            left: -10
          },
          showLegend: false,
          showXAxis:false,
          showYAxis:false,
          showLegen:false,
          interactive:false
        }
      }
    });
  }
  @Input()
  set BgColor(value:string){
    this._bgColor = value
    this._pointColor = value.replace('bg-','')
  }
}
