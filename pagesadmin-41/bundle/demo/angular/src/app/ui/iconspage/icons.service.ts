import { Injectable } from '@angular/core';
import { Http, Response, Headers, RequestOptions } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class IconsService {

  constructor(private http: Http) { }

  // Get all posts from the API
  getFontAwesome() {
    return this.http.get('assets/data/fontawesome.json')
      .map(res => res.json());
  }
}
