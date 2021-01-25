import { Routes } from '@angular/router';

import { ComposeComponent } from './compose/compose.component';
import { EmailListComponent } from './list/list.component';

export const emailRoute: Routes = [
    {
        path: '',
        children: [{
          path: 'list',
          component: EmailListComponent,
          data: {
            layoutOption: 'email'
          }
        },{
          path: 'compose',
          component: ComposeComponent,
          data: {
            layoutOption: 'email'
          }
        },
        //Light Version
        {
          path: 'list/:type',
          component: EmailListComponent,
          data: {
            layoutOption: 'email'
          }
        },{
          path: 'compose/:type',
          component: ComposeComponent,
          data: {
            layoutOption: 'email'
          }
        }]
      }
];
