import { Component, OnInit, ViewEncapsulation } from '@angular/core';

@Component({
  selector: 'plain-widget',
  templateUrl: './plain-widget.component.html',
  styleUrls: ['./plain-widget.component.scss'],
  encapsulation : ViewEncapsulation.None
})
export class PlainWidgetComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

}
