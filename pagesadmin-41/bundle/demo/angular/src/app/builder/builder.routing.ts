import { Routes } from '@angular/router';

//Sample Demo pages
import { RootbuilderComponent } from './rootbuilder/rootbuilder.component';
import { CasualBuilderComponent } from './casual-builder/casual-builder.component';
import { CondensedBuilderComponent } from './condensed-builder/condensed-builder.component';
import { ExecutiveBuilderComponent } from './executive-builder/executive-builder.component';
import { SimplywhiteBuilderComponent } from './simplywhite-builder/simplywhite-builder.component';
import { CorporateBuilderComponent } from './corporate-builder/corporate-builder.component';

export const buiderRoutes: Routes = [
  {
    path: '',
    children: [{
      path: 'casual-builder',
      component: CasualBuilderComponent,
      data: {
        title: 'builder'
      }
    },{
        path: 'condensed-builder',
        component: CondensedBuilderComponent,
        data: {
          title: 'builder'
        }
    },{
        path: 'corporate-builder',
        component: CorporateBuilderComponent,
        data: {
          title: 'builder'
        }
    },{
        path: 'executive-builder',
        component: ExecutiveBuilderComponent,
        data: {
          title: 'builder'
        }
    },{
        path: 'simplywhite-builder',
        component: SimplywhiteBuilderComponent,
        data: {
          title: 'builder'
        }
    }]
  }
];
