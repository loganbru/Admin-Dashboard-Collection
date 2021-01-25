import { Injectable } from '@angular/core';
import { Http, Response, Headers, RequestOptions } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class GraphWidgetService {

  constructor(private http: Http) { }

  // Get all data from the API
  getChartSampleData() {
    return this.http.get('assets/data/charts.json')
      .map(res => res.json());
  }
}
