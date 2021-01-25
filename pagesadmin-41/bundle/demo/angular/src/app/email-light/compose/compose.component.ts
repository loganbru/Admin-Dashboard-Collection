import { Component, OnInit } from '@angular/core';
import { pagesToggleService } from '../../@pages/services/toggler.service'
import { QuillEditorComponent } from 'ngx-quill/src/quill-editor.component';
import Quill from 'quill';

@Component({
  selector: 'email-compose-light',
  templateUrl: './compose.component.html',
  styleUrls: ['./compose.component.scss']
})
export class ComposeComponentLight implements OnInit {
  editorModules = {
    //https://github.com/KillerCodeMonkey/ngx-quill
    toolbar: [
      [{ 'header': [1, 2, 3, 4, false] }],
      ['bold', 'italic', 'underline'],
      ['link', 'image']  
    ]
  };
  constructor(private toggler:pagesToggleService) {
  }

  ngOnInit() {
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

}
