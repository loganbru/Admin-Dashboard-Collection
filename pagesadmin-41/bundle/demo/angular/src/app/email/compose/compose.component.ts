import { Component, OnInit, OnDestroy } from '@angular/core';
import { pagesToggleService } from '../../@pages/services/toggler.service'
import { QuillEditorComponent } from 'ngx-quill/src/quill-editor.component';
import Quill from 'quill';

@Component({
  selector: 'email-compose',
  templateUrl: './compose.component.html',
  styleUrls: ['./compose.component.scss']
})
export class ComposeComponent implements OnInit, OnDestroy {
  editorModules = {
    //https://github.com/KillerCodeMonkey/ngx-quill
    toolbar: [
      [{ 'header': [1, 2, 3, 4, false] }],
      ['bold', 'italic', 'underline'],
      ['link', 'image']  
    ]
  };
  timeout;

  constructor(private toggler:pagesToggleService) {
  }

  ngOnInit() {
    //Async Update -
    //https://blog.angularindepth.com/everything-you-need-to-know-about-the-expressionchangedafterithasbeencheckederror-error-e3fd9ce7dbb4
    this.timeout = setTimeout(() => {
      this.toggler.toggleFooter(false);
    });

    this.toggler.setPageContainer("full-height");
    this.toggler.setContent("full-height");
  }
  ngOnDestroy(){
    clearTimeout(this.timeout);
  }

}
