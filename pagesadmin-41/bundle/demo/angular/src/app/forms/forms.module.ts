//Angular Dependencies
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
//Router
import { FormsRoutes } from './forms.routing';

//Core Pages Layout Components
import { SharedModule } from '../@pages/components/shared.module';

//Bootstrap Components by ngx-bootstrap
import { TabsModule } from 'ngx-bootstrap';
import { ButtonsModule } from 'ngx-bootstrap/buttons';
import { TypeaheadModule } from 'ngx-bootstrap';

//Pages Components by ace
import { pgSelectModule} from '../@pages/components/select/select.module';
import { pgTagModule } from '../@pages/components/tag/tag.module';
import { pgSwitchModule } from '../@pages/components/switch/switch.module';
import { pgTimePickerModule } from '../@pages/components/time-picker/timepicker.module';
import { pgTabsModule } from '../@pages/components/tabs/tabs.module';
import { pgSelectfx } from '../@pages/components/cs-select/select.module';
import { pgDatePickerModule } from '../@pages/components/datepicker/datepicker.module';
import { pgUploadModule } from '../@pages/components/upload/upload.module';

//Thirdparty components
import { TextMaskModule } from 'angular2-text-mask';
import { QuillModule } from 'ngx-quill'

//Sample Demo pages
import { FormWizardComponent } from './form-wizard/form-wizard.component';
import { FormElementsComponent } from './form-elements/form-elements.component';
import { FormLayoutsComponent } from './form-layouts/form-layouts.component';

@NgModule({
  imports: [
    CommonModule,
    SharedModule,
    RouterModule.forChild(FormsRoutes),
    FormsModule,ReactiveFormsModule,
    TabsModule.forRoot(),
    ButtonsModule.forRoot(),
    pgSelectModule,
    pgTagModule,
    TextMaskModule,
    pgSwitchModule,
    pgTimePickerModule,
    pgTabsModule,
    pgSelectfx,
    pgUploadModule,
    TypeaheadModule.forRoot(),
    pgDatePickerModule,
    QuillModule
  ],
  declarations: [FormWizardComponent, 
    FormElementsComponent, 
    FormLayoutsComponent],
  providers: []
})
export class FormsPageModule { }
