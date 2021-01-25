import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'graph-live-widget',
  templateUrl: './graph-live-widget.component.html',
  styleUrls: ['./graph-live-widget.component.scss']
})
export class GraphLiveWidgetComponent implements OnInit {
  config;
  index = 0;
  constructor() { }

  ngOnInit() {
    this.config = {
      direction: 'vertical',
      autoplay: {
        delay: 5000,
      }
    }
  }

}
