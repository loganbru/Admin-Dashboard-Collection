import { Component, OnInit, OnDestroy, ViewChild, ElementRef, Input } from '@angular/core';
import { MapWidgetService } from './map-widget.service';
import { NgxEchartsService } from 'ngx-echarts';
declare var pg: any;
declare var echarts: any;

@Component({
  selector: 'map-widget',
  templateUrl: './map-widget.component.html',
  styleUrls: ['./map-widget.component.scss'],
  providers: [MapWidgetService]
})
export class MapWidgetComponent implements OnInit, OnDestroy {

  @ViewChild('chartContainer') _chartContainer: ElementRef;
  @ViewChild('chart') _chart: ElementRef;

  chartInitOptions;
  chartOptions;
  echartsIntance;
  mapUpdate;
  _isGrayscale = false; 
  service;

  constructor(private _service: MapWidgetService, private es: NgxEchartsService) {

  }

  @Input()
  set IsGrayscale(value:boolean) {
    this._isGrayscale = value
  }

  ngOnInit() {
    this.service = this._service.getMapData().subscribe(GEO_JSON => {
      const echarts = this.es.echarts;
      echarts.registerMap('USA', GEO_JSON, {
        Alaska: {              // Move Alaska to the bottom left of the American main continent
          left: -131,        // Starting point of placement: 13 degrees west longitude
          top: 31,           // Starting point of placement: 31 degrees north latitude
          width: 15,         // Size, width and height of the interval are no more than 15 degrees
          height: 15
        },
        Hawaii: {
          left: -112,        // Hawaii
          top: 29,
          width: 5,
          height: 5
        },
        'Puerto Rico': {       // Puerto Rico
          left: -76,
          top: 26,
          width: 2,
          height: 2
        }
      });

      this.initMap();
    })

  }
  ngOnDestroy() {
    this.service.unsubscribe()
  }
  onResize(event) {
    this.resizeChart();
  }

  onChartInit(ec) {
    this.echartsIntance = ec;
  }

  resizeChart() {
    if (this.echartsIntance) {
      const parentElement = this._chartContainer.nativeElement
      const { width, height } = parentElement.getBoundingClientRect()

      this.echartsIntance.resize({ width, height });
    }
  }
  snapToCountry(country): void {
    const coords = []
    coords['United States'] = [-100, 40];
    coords['Canada'] = [-100, 60];
    coords['Greenland'] = [-50, 65];

    var updatedOptions = {...this.chartOptions}; 
    updatedOptions.series[0].center = coords[country];
    this.mapUpdate = updatedOptions;
  }
  initMap() {

    const parentElement = this._chartContainer.nativeElement
    const { width, height } = parentElement.getBoundingClientRect()

    this.chartInitOptions = {
      renderer: 'svg',
      width,
      height
    };

    this.chartOptions = {
      backgroundColor: 'rgba(0,0,0,0)',
      tooltip: {
        trigger: 'item',
        showDelay: 0,
        transitionDuration: 0.2,
        backgroundColor: '#fff',
        borderColor: '#fff',
        position: function (point, params, dom, rect, size) {
            return [point[0] - 65 , point[1] - 70];
        },
        formatter: function(series) {
          const {name, value} = series.data;
          return `
          <div class="map-tooltip">
            <div class="text-master">${name}</div>
            <div>
              <span class="text-uppercase text-muted fs-11 font-montserrat">Views</span>
              <span class="fs-12 text-warning m-l-5">${value}</span>
            </div>
          </div>`
        },
        confine: true
      },
      toolbox: {
        show: false,
      },
      label: false,
      series: [{
        type: 'map',
        map: 'USA',
        // roam: true,
        zoom: 2,
        itemStyle: {
          normal: {
            areaColor: 'rgba(0,0,0,.15)',
            borderColor: 'rgba(0, 0, 0, 0)'
          },
          emphasis: {
            label:{show:false},
            areaColor: 'rgba(0,0,0,.3)'
          }
        },
        data:[
          {name: 'Bahamas', value: 2637},
          {name: 'Canada', value: 3738},
          {name: 'Belize', value: 1937},
          {name: 'Cuba', value: 3871},
          {name: 'Dominican Rep.', value: 8910},
          {name: 'Costa Rica', value: 6638},
          {name: 'Greenland', value: 6381},
          {name: 'Haiti', value: 8821},
          {name: 'Jamaica', value: 1181},
          {name: 'Guatemala', value: 4367},
          {name: 'Mexico', value: 5918},
          {name: 'Honduras', value: 4822},
          {name: 'Nicaragua', value: 4023},
          {name: 'Puerto Rico', value: 7729},
          {name: 'El Salvador', value: 6527},
          {name: 'Trinidad and Tobago', value: 9991},
          {name: 'United States', value: 8383}
        ]

      }]
    };

    var elem = this._chart.nativeElement
    this.echartsIntance = echarts.init(elem, '', this.chartInitOptions);
    this.echartsIntance.setOption(this.chartOptions);

  }
  ngAfterViewInit() {

  }

}
