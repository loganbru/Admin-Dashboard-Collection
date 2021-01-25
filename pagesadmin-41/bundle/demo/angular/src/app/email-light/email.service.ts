import { Injectable } from '@angular/core';
import { Http, Response, Headers, RequestOptions } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class EmailServiceLight {

  constructor(private http: Http) { }

  // Get all emails from the API
  getEmails() {
    return this.http.get('assets/data/email.json')
      .map(res => res.json());
  }
}
