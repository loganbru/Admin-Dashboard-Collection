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

//Sample Pages
import { CondensedDashboardComponent} from './dashboard/condensed/dashboard.component';
import { SimplyWhiteDashboardComponent} from './dashboard/simplywhite/dashboard.component';
import { CasualDashboardComponent } from './dashboard/casual/dashboard.component';
import { CorporateDashboardComponent } from './dashboard/corporate/dashboard.component';
import { ExecutiveDashboardComponent } from './dashboard/executive/dashboard.component';
import { CardsComponentPage} from './cards/cards.component';
import { ViewsPageComponent} from './views/views.component';
import { ChartsComponent } from './charts/charts.component';
import { SocialComponent } from './social/social.component';

export const AppRoutes: Routes = [

  {
    path: '',
    data: {
        breadcrumb: 'Home'
    },
    component: CondensedComponent
  },
  {
    path: 'condensed',
    component: CondensedComponent,
    children: [{
      path: 'dashboard',
      component: CondensedDashboardComponent
    }],
  },
  {
    path: 'condensed',
    component: CondensedComponent,
    children: [{
      path: 'extra',
      loadChildren: './extra/extra.module#ExtraModule'
    }]
  },{
    path: 'condensed',
    component: CondensedComponent,
    children: [{
      path: 'layouts',
      loadChildren: './layouts/layouts.module#LayoutPageModule'
    }]
  },{
    path: 'condensed',
    component: BlankComponent,
    children: [{
      path: 'session',
      loadChildren: './session/session.module#SessionModule'
    }]
  },
  {
    path: 'condensed',
    component: CondensedComponent,
    children: [{
      path: 'forms',
      loadChildren: './forms/forms.module#FormsPageModule'
    }]
  },
  {
    path: 'condensed',
    component: CondensedComponent,
    children: [{
      path: 'builder',
      loadChildren: './builder/builder.module#BuilderModule'
    }]
  },
  {
    path: 'condensed',
    component: CondensedComponent,
    children: [{
      path: 'ui',
      loadChildren: './ui/ui.module#UiModule'
    }]
  },{
    path: 'condensed',
    component: CondensedComponent,
    children: [{
      path: 'email',
      loadChildren: './email/email.module#EmailModule'
    }]
  },
  {
    path: 'condensed',
    component: CondensedComponent,
    children: [{
      path: 'social',
      component: SocialComponent
    }]
  },
  {
    path: 'condensed',
    component: CondensedComponent,
    children: [{
      path: 'cards',
      component: CardsComponentPage
    }]
  },
  {
    path: 'condensed',
    component: CondensedComponent,
    children: [{
      path: 'views',
      component: ViewsPageComponent
    }]
  },
  {
    path: 'condensed',
    component: CondensedComponent,
    children: [{
      path: 'maps',
      loadChildren: './maps/maps.module#MapsModule'
    }]
  },
  {
    path: 'condensed',
    component: CondensedComponent,
    children: [{
      path: 'tables',
      loadChildren: './tables/tables.module#TablesModule'
    }]
  },
  {
    path: 'condensed',
    component: CondensedComponent,
    children: [{
      path: 'charts',
      component: ChartsComponent
    }]
  },
  //Corporate Layout Styles and Routing
  {
    path: 'corporate',
    component: CorporateLayout,
    children: [{
      path: 'dashboard',
      component: CorporateDashboardComponent
    }],
  },
  {
    path: 'corporate',
    component: CorporateLayout,
    children: [{
      path: 'extra',
      loadChildren: './extra/extra.module#ExtraModule'
    }]
  },{
    path: 'corporate',
    component: BlankCorporateComponent,
    children: [{
      path: 'session',
      loadChildren: './session/session.module#SessionModule'
    }]
  },
  {
    path: 'corporate',
    component: CorporateLayout,
    children: [{
      path: 'social',
      component: SocialComponent
    }]
  },
  {
    path: 'corporate',
    component: CorporateLayout,
    children: [{
      path: 'forms',
      loadChildren: './forms/forms.module#FormsPageModule'
    }]
  },
  {
    path: 'corporate',
    component: CorporateLayout,
    children: [{
      path: 'layouts',
      loadChildren: './layouts/layouts.module#LayoutPageModule'
    }]
  },
  {
    path: 'corporate',
    component: CorporateLayout,
    children: [{
      path: 'builder',
      loadChildren: './builder/builder.module#BuilderModule'
    }]
  },
  {
    path: 'corporate',
    component: CorporateLayout,
    children: [{
      path: 'ui',
      loadChildren: './ui/ui.module#UiModule'
    }]
  },{
    path: 'corporate',
    component: CorporateLayout,
    children: [{
      path: 'email',
      loadChildren: './email/email.module#EmailModule'
    }]
  },
  {
    path: 'corporate',
    component: CorporateLayout,
    children: [{
      path: 'cards',
      component: CardsComponentPage
    }]
  },
  {
    path: 'corporate',
    component: CorporateLayout,
    children: [{
      path: 'views',
      component: ViewsPageComponent
    }]
  },
  {
    path: 'corporate',
    component: CorporateLayout,
    children: [{
      path: 'tables',
      loadChildren: './tables/tables.module#TablesModule'
    }]
  },
  {
    path: 'corporate',
    component: CorporateLayout,
    children: [{
      path: 'maps',
      loadChildren: './maps/maps.module#MapsModule'
    }]
  },
  {
    path: 'corporate',
    component: CorporateLayout,
    children: [{
      path: 'charts',
      component: ChartsComponent
    }]
  },
  //Simply White Routes
  {
    path: 'simplywhite',
    component: SimplyWhiteLayout,
    children: [{
      path: 'dashboard',
      component: SimplyWhiteDashboardComponent
    }],
  },
  {
    path: 'simplywhite',
    component: SimplyWhiteLayout,
    children: [{
      path: 'extra',
      loadChildren: './extra/extra.module#ExtraModule'
    }]
  },{
    path: 'simplywhite',
    component: BlankSimplywhiteComponent,
    children: [{
      path: 'session',
      loadChildren: './session/session.module#SessionModule'
    }]
  },
  {
    path: 'simplywhite',
    component: SimplyWhiteLayout,
    children: [{
      path: 'social',
      component: SocialComponent
    }]
  },
  {
    path: 'simplywhite',
    component: SimplyWhiteLayout,
    children: [{
      path: 'forms',
      loadChildren: './forms/forms.module#FormsPageModule'
    }]
  },
  {
    path: 'simplywhite',
    component: SimplyWhiteLayout,
    children: [{
      path: 'layouts',
      loadChildren: './layouts/layouts.module#LayoutPageModule'
    }]
  },
  {
    path: 'simplywhite',
    component: SimplyWhiteLayout,
    children: [{
      path: 'builder',
      loadChildren: './builder/builder.module#BuilderModule'
    }]
  },
  {
    path: 'simplywhite',
    component: SimplyWhiteLayout,
    children: [{
      path: 'ui',
      loadChildren: './ui/ui.module#UiModule'
    }]
  },{
    path: 'simplywhite',
    component: SimplyWhiteLayout,
    children: [{
      path: 'email',
      loadChildren: './email-light/email.module#EmailLightModule'
    }]
  },
  {
    path: 'simplywhite',
    component: SimplyWhiteLayout,
    children: [{
      path: 'cards',
      component: CardsComponentPage
    }]
  },
  {
    path: 'simplywhite',
    component: SimplyWhiteLayout,
    children: [{
      path: 'views',
      component: ViewsPageComponent
    }]
  },
  {
    path: 'simplywhite',
    component: SimplyWhiteLayout,
    children: [{
      path: 'tables',
      loadChildren: './tables/tables.module#TablesModule'
    }]
  },
  {
    path: 'simplywhite',
    component: SimplyWhiteLayout,
    children: [{
      path: 'maps',
      loadChildren: './maps/maps.module#MapsModule'
    }]
  },
  {
    path: 'simplywhite',
    component: SimplyWhiteLayout,
    children: [{
      path: 'charts',
      component: ChartsComponent
    }]
  },
  //Executive
  {
    path: 'executive',
    component: ExecutiveLayout,
    children: [{
      path: 'dashboard',
      component: ExecutiveDashboardComponent,
      data: {
        title: 'dashboard'
      }
    }],
  },
  {
    path: 'executive',
    component: ExecutiveLayout,
    children: [{
      path: 'social',
      component: SocialComponent,
      data: {
        title: 'social'
      }
    }]
  },
  {
    path: 'executive',
    component: ExecutiveLayout,
    children: [{
      path: 'extra',
      loadChildren: './extra/extra.module#ExtraModule'
    }]
  },{
    path: 'executive',
    component: ExecutiveLayout,
    children: [{
      path: 'layouts',
      loadChildren: './layouts/layouts.module#LayoutPageModule'
    }]
  },{
    path: 'executive',
    component: ExecutiveLayout,
    children: [{
      path: 'builder',
      loadChildren: './builder/builder.module#BuilderModule'
    }]
  },{
    path: 'executive',
    component: BlankComponent,
    children: [{
      path: 'session',
      loadChildren: './session/session.module#SessionModule'
    }]
  },
  {
    path: 'executive',
    component: ExecutiveLayout,
    children: [{
      path: 'forms',
      loadChildren: './forms/forms.module#FormsPageModule'
    }]
  },
  {
    path: 'executive',
    component: ExecutiveLayout,
    children: [{
      path: 'ui',
      loadChildren: './ui/ui.module#UiModule'
    }]
  },{
    path: 'executive',
    component: ExecutiveLayout,
    children: [{
      path: 'email',
      loadChildren: './email/email.module#EmailModule'
    }]
  },
  {
    path: 'executive',
    component: ExecutiveLayout,
    children: [{
      path: 'cards',
      component: CardsComponentPage,
      data: {
        title: 'cards'
      }
    }]
  },
  {
    path: 'executive',
    component: ExecutiveLayout,
    children: [{
      path: 'views',
      component: ViewsPageComponent,
      data: {
        title: 'views'
      }
    }]
  },
  {
    path: 'executive',
    component: ExecutiveLayout,
    children: [{
      path: 'tables',
      loadChildren: './tables/tables.module#TablesModule'
    }]
  },
  {
    path: 'executive',
    component: ExecutiveLayout,
    children: [{
      path: 'maps',
      loadChildren: './maps/maps.module#MapsModule',
      data: {
        title: 'maps'
      }
    }]
  },
  {
    path: 'executive',
    component: ExecutiveLayout,
    children: [{
      path: 'charts',
      component: ChartsComponent,
      data: {
        title: 'charts'
      }
    }]
  },
    //Casual
    {
      path: 'casual',
      component: CasualLayout,
      children: [{
        path: 'dashboard',
        component: CasualDashboardComponent
      }],
    },
    {
      path: 'casual',
      component: CasualLayout,
      children: [{
        path: 'social',
        component: SocialComponent
      }]
    },{
      path: 'casual',
      component: CasualLayout,
      children: [{
        path: 'builder',
        loadChildren: './builder/builder.module#BuilderModule'
      }]
    },{
      path: 'casual',
      component: CasualLayout,
      children: [{
        path: 'layouts',
        loadChildren: './layouts/layouts.module#LayoutPageModule'
      }]
    },
    {
      path: 'casual',
      component: CasualLayout,
      children: [{
        path: 'extra',
        loadChildren: './extra/extra.module#ExtraModule'
      }]
    },{
      path: 'casual',
      component: BlankCasualComponent,
      children: [{
        path: 'session',
        loadChildren: './session/session.module#SessionModule'
      }]
    },
    {
      path: 'casual',
      component: CasualLayout,
      children: [{
        path: 'forms',
        loadChildren: './forms/forms.module#FormsPageModule'
      }]
    },
    {
      path: 'casual',
      component: CasualLayout,
      children: [{
        path: 'ui',
        loadChildren: './ui/ui.module#UiModule'
      }]
    },{
      path: 'casual',
      component: CasualLayout,
      children: [{
        path: 'email',
        loadChildren: './email/email.module#EmailModule'
      }]
    },
    {
      path: 'casual',
      component: CasualLayout,
      children: [{
        path: 'cards',
        component: CardsComponentPage
      }]
    },
    {
      path: 'casual',
      component: CasualLayout,
      children: [{
        path: 'views',
        component: ViewsPageComponent
      }]
    },
    {
      path: 'casual',
      component: CasualLayout,
      children: [{
        path: 'tables',
        loadChildren: './tables/tables.module#TablesModule'
      }]
    },
    {
      path: 'casual',
      component: CasualLayout,
      children: [{
        path: 'maps',
        loadChildren: './maps/maps.module#MapsModule'
      }]
    },
    {
      path: 'casual',
      component: CasualLayout,
      children: [{
        path: 'charts',
        component: ChartsComponent
      }]
    }
];
