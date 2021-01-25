import { Routes } from '@angular/router';
import { BasicComponent } from './basic/basic.component';
import { AdvanceComponent } from './advance/advance.component';

export const TableRoutes: Routes = [
  {
    path: '',
    children: [{
      path: 'basic',
      component: BasicComponent,
      data: {
        title: 'tables'
      }
    },{
      path: 'advance',
      component: AdvanceComponent,
      data: {
        title: 'datatables'
      }
    }]
  }
];