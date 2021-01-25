import { Routes } from '@angular/router';

//Sample Demo pages
import { ButtonspageComponent } from './buttonspage/buttonspage.component';
import { ColorspageComponent } from './colorspage/colorspage.component';
import { TypopageComponent } from './typopage/typopage.component';
import { IconspageComponent } from './iconspage/iconspage.component';
import { NotificationspageComponent } from './notificationspage/notificationspage.component';
import { ModalspageComponent } from './modalspage/modalspage.component';
import { ProgresspageComponent } from './progresspage/progresspage.component';
import { TabspageComponent } from './tabspage/tabspage.component';
import { SliderpageComponent } from './sliderpage/sliderpage.component';
import { TreeviewpageComponent} from './treeviewpage/treeviewpage.component';

export const uiRoute: Routes = [
  {
    path: '',
    children: [{
      path: 'color',
      component: ColorspageComponent,
      data: {
        title: 'color'
      }
    },{
      path: 'typography',
      component: TypopageComponent,
      data: {
        title: 'typography'
      }
    },{
      path: 'icons',
      component: IconspageComponent,
      data: {
        title: 'icons'
      }
    },{
      path: 'buttons',
      component: ButtonspageComponent,
      data: {
        title: 'buttons'
      }
    },{
      path: 'notifications',
      component: NotificationspageComponent,
      data: {
        title: 'notification'
      }
    },{
      path: 'modal',
      component: ModalspageComponent,
      data: {
        title: 'modals'
      }
    },{
      path: 'progress',
      component: ProgresspageComponent,
      data: {
        title: 'progress'
      }
    },{
      path: 'tabs',
      component: TabspageComponent,
      data: {
        title: 'tabs & accordians'
      }
    },{
      path: 'sliders',
      component: SliderpageComponent,
      data: {
        title: 'sliders'
      }
    },{
      path:'tree',
      component:TreeviewpageComponent,
      data: {
        title: 'treeview'
      }
    }]
  }
];
