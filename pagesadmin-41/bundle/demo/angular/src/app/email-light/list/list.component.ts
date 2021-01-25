import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { pagesToggleService } from '../../@pages/services/toggler.service'
import {EmailServiceLight} from '../email.service';
import {List} from "./list";
//Switch core layout here
import { QuillEditorComponent } from 'ngx-quill/src/quill-editor.component';
import Quill from 'quill';

@Component({
  selector: 'email-list-light',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.scss']
})
export class EmailListComponentLight implements OnInit {
  emailList =[];
  selectedEmail: List;
  editingMode = false;
  editorModules = {
    //https://github.com/KillerCodeMonkey/ngx-quill
    toolbar: [
      [{ 'header': [1, 2, 3, 4, false] }],
      ['bold', 'italic', 'underline'],
      ['link', 'image']  
    ]
  };
  isEmailSelected = false;
  constructor(private _service: EmailServiceLight, private http: HttpClient,private toggler:pagesToggleService) {

  }
  ngOnInit() {
    // Retrieve posts from the API
    this._service.getEmails().subscribe(list => {
      this.emailList = list.emails;
    });
    //Async Update -
    //https://blog.angularindepth.com/everything-you-need-to-know-about-the-expressionchangedafterithasbeencheckederror-error-e3fd9ce7dbb4
    setTimeout(() => {
      this.toggler.toggleFooter(false);
    });

    //Set Layout Options
    this.toggler.setHeaderClass("light");
    this.toggler.setPageContainer("full-height");
    this.toggler.setContent("full-height");
    
  }
  onSelect(item: List): void {
    this.selectedEmail = item;
    this.isEmailSelected = true;
  }
  onBack(){
    this.isEmailSelected = false;
  }
}
