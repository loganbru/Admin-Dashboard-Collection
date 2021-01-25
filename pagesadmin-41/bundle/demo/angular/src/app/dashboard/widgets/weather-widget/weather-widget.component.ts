import { Component, OnInit,Input } from '@angular/core';
declare var Skycons: any;

@Component({
  selector: 'weather-widget',
  templateUrl: './weather-widget.component.html',
  styleUrls: ['./weather-widget.component.scss']
})
export class WeatherWidgetComponent implements OnInit {
  _type:string = '';

  @Input()
  set Type(value:string){
    this._type = value;
  }

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    var icons = new Skycons();

    icons.set("clear-day", Skycons.CLEAR_DAY);
    icons.set("partly-cloudy-day", Skycons.PARTLY_CLOUDY_DAY);
    icons.set("cloudy", Skycons.CLOUDY);
    icons.set("rain", Skycons.RAIN);
    icons.set("sleet", Skycons.SLEET);
    icons.set("snow", Skycons.SNOW);
    icons.set("wind", Skycons.WIND);

    icons.set("rain2", Skycons.RAIN);
    icons.set("sleet2", Skycons.SLEET);
    icons.set("wind2", Skycons.SNOW);

    icons.set("rain3", Skycons.RAIN);
    icons.set("sleet3", Skycons.SLEET);
    icons.set("wind3", Skycons.SNOW);

    // icons.play();
  }

}
