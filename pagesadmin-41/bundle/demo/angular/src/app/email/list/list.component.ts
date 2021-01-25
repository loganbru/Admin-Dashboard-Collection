import { Component, OnInit, OnDestroy } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { pagesToggleService } from '../../@pages/services/toggler.service'
import {EmailService} from '../email.service';
import {List} from "./list";
//Switch core layout here
import { QuillEditorComponent } from 'ngx-quill/src/quill-editor.component';
import Quill from 'quill';
import { PerfectScrollbarConfigInterface,
  PerfectScrollbarComponent, PerfectScrollbarDirective } from 'ngx-perfect-scrollbar';

declare var pg: any;

@Component({
  selector: 'email-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.scss']
})
export class EmailListComponent implements OnInit, OnDestroy {
  emailList =[];
  isMobile = pg.getUserAgent() === 'mobile';
  public config: PerfectScrollbarConfigInterface = {};
  selectedEmail: List;
  subscription;
  timeout;
  editorModules = {
    //https://github.com/KillerCodeMonkey/ngx-quill
    toolbar: [
      [{ 'header': [1, 2, 3, 4, false] }],
      ['bold', 'italic', 'underline'],
      ['link', 'image']  
    ]
  };
  isEmailSelected = false;
  constructor(private _service: EmailService, private http: HttpClient,private toggler:pagesToggleService) {

  }
  ngOnInit() {
    // Retrieve posts from the API
    this.subscription = this._service.getEmails().subscribe(list => {
      this.emailList = list.emails;
    });
    //Async Update -
    //https://blog.angularindepth.com/everything-you-need-to-know-about-the-expressionchangedafterithasbeencheckederror-error-e3fd9ce7dbb4
    this.timeout = setTimeout(() => {
      this.toggler.toggleFooter(false);
    });

    this.toggler.setPageContainer("full-height");
    this.toggler.setContent("full-height");
    
  }
  ngOnDestroy() {
    this.subscription.unsubscribe();
    clearTimeout(this.timeout);
  }
  onSelect(item: List): void {
    this.selectedEmail = item;
    this.isEmailSelected = true;
  }
  onBack(){
    this.isEmailSelected = false;
  }
}
