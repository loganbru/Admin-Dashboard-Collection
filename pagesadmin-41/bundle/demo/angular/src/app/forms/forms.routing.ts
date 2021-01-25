import { Routes } from '@angular/router';
import { FormWizardComponent } from './form-wizard/form-wizard.component';
import { FormElementsComponent } from './form-elements/form-elements.component';
import { FormLayoutsComponent } from './form-layouts/form-layouts.component';
export const FormsRoutes: Routes = [
  {
    path: '',
    children: [{
      path: 'elements',
      component: FormElementsComponent,
      data: {
        title: 'forms'
      }
    },{
      path: 'layouts',
      component: FormLayoutsComponent,
      data: {
        title: 'form layouts'
      }
    },{
      path: 'wizard',
      component: FormWizardComponent,
      data: {
        title: 'form wizard'
      }
    }]
  }
];