import { Injectable } from '@angular/core';
import { Http, Response, Headers, RequestOptions } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class GalleryService {

  constructor(private http: Http) { }

  // Get social feed posts
  getFeed() {
    return this.http.get('assets/data/gallery.json')
      .map(res => res.json());
  }
}
