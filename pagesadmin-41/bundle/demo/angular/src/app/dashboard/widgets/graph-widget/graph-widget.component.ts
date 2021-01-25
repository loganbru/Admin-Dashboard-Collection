import { Component, OnInit, OnDestroy, ViewChild, ElementRef, Input, ViewEncapsulation } from '@angular/core';
import { GraphWidgetService } from './graph-widget.service';
declare var pg: any;
declare let d3: any;

@Component({
  selector: 'graph-widget',
  templateUrl: './graph-widget.component.html',
  styleUrls: ['./graph-widget.component.scss'],
  encapsulation:ViewEncapsulation.None,
  providers: [GraphWidgetService]
})

export class GraphWidgetComponent implements OnInit,OnDestroy {
  nvd3LineData = []; 
  nvd3LineOptions;
  _emphasize = false; 
  _chartWrapperClass = "col-xlg-8 col-lg-12"
  _chartHighlightsClass = "col-xlg-4 visible-xlg";
  service;
  COLOR_SUCCESS = pg.getColor('success')
  COLOR_DANGER = pg.getColor('danger')
  COLOR_PRIMARY = pg.getColor('primary')
  COLOR_COMPLETE = pg.getColor('complete')
  timeout;

  constructor(private _service: GraphWidgetService) {

  }

  ngOnInit() {
    this.service = this._service.getChartSampleData().subscribe(d => {
      this.timeout = setTimeout(() => {
      this.nvd3LineData = d.nvd3.line;
        this.nvd3LineOptions = {
          chart: {
            type: 'lineChart',
            color: [
              this.COLOR_SUCCESS,
              this.COLOR_DANGER,
              this.COLOR_PRIMARY,
              this.COLOR_COMPLETE,
            ],
            x: function (d) { return d[0]; },
            y: function (d) { return d[1]; },
            // duration: 500,
            clipEdge:true,
            useInteractiveGuideline: true,
            margin: {
              left: 30,
              bottom: 35
            },
            showLegend: false,
            xAxis: {
              tickFormat: (d) => {
                return d3.time.format('%a')(new Date(d));
              }
            },
            yAxis: {
              tickFormat: (d) => {
                return Math.round(d)
              }
            }
          }
        }
      },1000)
    })
  }

  ngAfterViewInit() {
    setTimeout(()=>{
      window.dispatchEvent(new Event('resize'));
    },3000)
  }

  ngOnDestroy() {
    this.service.unsubscribe()
    clearTimeout(this.timeout)
  }

  @Input()
  set Emphasize(value:boolean){
    this._emphasize = value;
  }

  @Input()
  set ChartWrapperClass(value:string){
    this._chartWrapperClass = value;
  }

  @Input()
  set ChartHighlightsClass(value:string){
    this._chartHighlightsClass = value;
  }
  

}
