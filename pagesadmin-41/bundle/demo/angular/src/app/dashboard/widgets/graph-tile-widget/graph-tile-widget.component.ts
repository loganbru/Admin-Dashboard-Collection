import { Component, OnInit, OnDestroy, ViewEncapsulation,ViewChild,ElementRef } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { GraphTileWidgetService } from './graph-tile-widget.service';
declare let d3: any;
declare var pg: any;

@Component({
  selector: 'graph-tile-widget',
  templateUrl: './graph-tile-widget.component.html',
  styleUrls: ['./graph-tile-widget.component.scss'],
  providers: [GraphTileWidgetService],
  encapsulation:ViewEncapsulation.None
})

export class GraphTileWidgetComponent implements OnInit, OnDestroy {

  
  nvd3LineData = []; 
  nvd3LineOptions;
  service;
  timeout;

  constructor(private _service: GraphTileWidgetService, private http: HttpClient) {
    
  }

  ngOnInit() {
   this.service = this._service.getChartSampleData().subscribe(d => {
      this.timeout = setTimeout(()=>{
        this.nvd3LineData = d.nvd3.productRevenue;
        this.nvd3LineOptions = {
          chart: {
            type: 'lineChart',
            color: [
              pg.getColor('success')
            ],
            x: function (d) { return d[0]; },
            y: function (d) { return d[1] / 100; },
            forceY: [0, 2],
            tooltip:{
              chartContainer : "#widget-4-container"
            },
            useInteractiveGuideline: false,
            margin: {
              top: 60,
              right: -10,
              bottom: -10,
              left: -10
            },
            showLegend: false
          }
        }
      },1000)
    })
  }

  ngOnDestroy() {
    this.service.unsubscribe()
    clearTimeout(this.timeout)
  }

}