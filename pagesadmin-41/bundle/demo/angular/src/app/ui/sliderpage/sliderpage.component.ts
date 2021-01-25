import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'slider-page',
  templateUrl: './sliderpage.component.html',
  styleUrls: ['./sliderpage.component.scss']
})
export class SliderpageComponent implements OnInit {
  value1 = 20;
  value2 = 10;
  rangeValue;
  constructor() { }

  ngOnInit() {
  }
  marks: any = {
    0  : '0°C',
    26 : '26°C',
    37 : '37°C',
    100: '100°C'
  };
}
