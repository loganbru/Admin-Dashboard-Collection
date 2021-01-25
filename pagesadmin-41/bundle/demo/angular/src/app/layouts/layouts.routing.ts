import { Routes } from '@angular/router';
import { SecondaryComponent } from './secondary/secondary.component';
import { SecondaryComponentLight } from './secondary-light/secondary.component';
import { SecondaryHorizontalComponent } from './secondary-horizontal/secondary-horizontal.component';
import { SecondaryHorizontalCasualComponent } from './secondary-horizontal-casual/secondary-horizontal-casual.component';
import { DefaultComponent } from './default/default.component';
import { BoxedComponent } from './boxed/boxed.component';
import { BoxedAltComponent } from './boxed-alt/boxed-alt.component';

export const LayoutsRoutes: Routes = [
  {
    path: '',
    children: [{
      path: 'default',
      component: DefaultComponent,
      data: {
        title: 'default',
        boxed:false
      }
    },{
      path: 'secondary',
      component: SecondaryComponent,
      data: {
        title: '',
        boxed:false
      }
    },{
      path: 'secondary-light',
      component: SecondaryComponentLight,
      data: {
        title: '',
        boxed:false
      }
    },{
      path: 'boxed',
      component: BoxedComponent,
      data: {
        boxed:true
      }
    },{
      path: 'boxed-alt',
      component: BoxedAltComponent,
      data: {
        boxed:true
      }
    },{
      path: 'with-sidebar',
      component: SecondaryHorizontalComponent,
      data: {
        title: 'Builder'
      }
    },{
      path: 'with-sidebar-casual',
      component: SecondaryHorizontalCasualComponent,
      data: {
        title: 'Builder'
      }
    },
    {
      path: 'horizontal-blank',
      component: DefaultComponent,
    }]
  }
];