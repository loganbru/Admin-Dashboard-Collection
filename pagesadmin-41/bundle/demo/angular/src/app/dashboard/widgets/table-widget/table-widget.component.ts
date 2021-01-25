import { Component, OnInit, ViewEncapsulation } from '@angular/core';

@Component({
  selector: 'table-widget',
  templateUrl: './table-widget.component.html',
  styleUrls: ['./table-widget.component.scss'],
  encapsulation:ViewEncapsulation.None
})
export class TableWidgetComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

}
