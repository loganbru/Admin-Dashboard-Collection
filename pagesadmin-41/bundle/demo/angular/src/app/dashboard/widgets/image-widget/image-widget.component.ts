import { Component, OnInit, ViewEncapsulation } from '@angular/core';

@Component({
  selector: 'image-widget',
  templateUrl: './image-widget.component.html',
  styleUrls: ['./image-widget.component.scss'],
  encapsulation:ViewEncapsulation.None
  
})
export class ImageWidgetComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

}
