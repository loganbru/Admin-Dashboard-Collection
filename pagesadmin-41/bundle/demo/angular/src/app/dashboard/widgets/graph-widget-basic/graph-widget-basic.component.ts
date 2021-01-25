import { Component, OnInit, OnDestroy, ViewEncapsulation } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { GraphWidgetService } from './graph-widget.service';
declare var pg: any;
declare let d3: any;

@Component({
  selector: 'graph-widget-basic',
  templateUrl: './graph-widget-basic.component.html',
  styleUrls: ['./graph-widget-basic.component.scss'],
  providers: [GraphWidgetService],
  encapsulation: ViewEncapsulation.None
})
export class GraphWidgetBasicComponent implements OnInit,OnDestroy {
  nvd3LineData = []; 
  nvd3LineOptions;
  service;
  constructor(private _service: GraphWidgetService, private http: HttpClient) { }

  ngOnInit() {
    this.service = this._service.getChartSampleData().subscribe(d => {
      this.nvd3LineData = d.nvd3.line;
      setTimeout(()=>{
        this.nvd3LineOptions = {
          chart: {
            type: 'lineChart',
            color: [
              pg.getColor('success'),
              pg.getColor('danger'),
              pg.getColor('primary'),
              pg.getColor('complete'),
            ],
            x: function (d) { return d[0]; },
            y: function (d) { return d[1]; },
            duration: 500,
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
      });

    })
  }

  ngOnDestroy() {
    this.service.unsubscribe()
  }
}
