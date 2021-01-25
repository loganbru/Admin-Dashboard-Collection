import { Routes } from '@angular/router';
//Layouts
import { 
  CondensedComponent,
  BlankComponent,
  CorporateLayout,
  SimplyWhiteLayout,
  ExecutiveLayout,
  CasualLayout ,
  BlankCasualComponent,
  BlankCorporateComponent,
  BlankSimplywhiteComponent
} from './@pages/layouts';


export const AppRoutes: Routes = [

  {
    path: '',
    data: {
        breadcrumb: 'Home'
    },
    component: CondensedComponent
  },
  {
    path: 'casual',
    data: {
        breadcrumb: 'Home'
    },
    component: CasualLayout
  },
  {
    path: 'executive',
    data: {
        breadcrumb: 'Home'
    },
    component: ExecutiveLayout
  },
  {
    path: 'simplywhite',
    data: {
        breadcrumb: 'Home'
    },
    component: SimplyWhiteLayout
  },
  {
    path: 'corporate',
    data: {
        breadcrumb: 'Home'
    },
    component: CorporateLayout
  },
];
