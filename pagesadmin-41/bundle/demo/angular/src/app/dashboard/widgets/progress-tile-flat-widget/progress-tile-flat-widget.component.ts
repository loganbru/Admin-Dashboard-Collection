import { Component, OnInit, ViewChild, ElementRef, Input } from '@angular/core';
declare var pg: any;

@Component({
  selector: 'progress-tile-flat-widget',
  templateUrl: './progress-tile-flat-widget.component.html',
  styleUrls: ['./progress-tile-flat-widget.component.scss']
})
export class ProgressTileFlatWidgetComponent implements OnInit {
  
  _bgColor:string = 'bg-primary'

  constructor() { }

  ngOnInit() {
  }

  @Input()
  set BgColor(value:string) {
    this._bgColor = value
  }
}
