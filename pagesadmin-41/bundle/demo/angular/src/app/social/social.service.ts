import { Injectable } from '@angular/core';
import { Http, Response, Headers, RequestOptions } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class SocialService {

  constructor(private http: Http) { }

  // Get social feed posts
  getFeed() {
    return this.http.get('assets/data/feed.json')
      .map(res => res.json());
  }
}
