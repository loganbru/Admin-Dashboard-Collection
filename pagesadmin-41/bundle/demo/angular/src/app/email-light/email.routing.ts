import { Routes } from '@angular/router';

import { ComposeComponentLight } from './compose/compose.component';
import { EmailListComponentLight } from './list/list.component';

export const emailRoute: Routes = [
    {
        path: 'light',
        children: [{
          path: 'list',
          component: EmailListComponentLight,
          data: {
            layoutOption: 'email'
          }
        },{
          path: 'compose',
          component: ComposeComponentLight,
          data: {
            layoutOption: 'email'
          }
        }]
      }
];
