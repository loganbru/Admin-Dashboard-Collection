//Demo Used for Simply white Layout only
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { HttpModule} from '@angular/http';
import { HttpClientModule } from '@angular/common/http'
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { emailRoute } from './email.routing';
//Core Pages Layout Components
import { SharedModule } from '../@pages/components/shared.module';

import { QuillModule } from 'ngx-quill'
import { pgTagModule } from '../@pages/components/tag/tag.module';
import { BsDropdownModule } from 'ngx-bootstrap';
import { EmailListComponentLight } from './list/list.component';
import { ComposeComponentLight } from './compose/compose.component';
import {EmailServiceLight} from './email.service';
@NgModule({
  imports: [
    CommonModule,
    HttpModule,
    HttpClientModule,
    SharedModule,
    QuillModule,
    pgTagModule,
    FormsModule,ReactiveFormsModule,
    RouterModule.forChild(emailRoute),
    BsDropdownModule.forRoot(),
  ],
  declarations: [EmailListComponentLight, ComposeComponentLight],
  providers:[EmailServiceLight]
})
export class EmailLightModule { }
