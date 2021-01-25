import { Routes } from '@angular/router';
import { BlankpageComponent } from './blankpage/blankpage.component';
import { TimelineComponent } from './timeline/timeline.component';
import { InvoiceComponent } from './invoice/invoice.component';
import { GalleryComponent } from './gallery/gallery.component';
//Routes
export const ExtraRouts: Routes = [
  {
    path: '',
    children: [{
      path: 'blank',
      component: BlankpageComponent
    },{
      path: 'timeline',
      component: TimelineComponent,
      data: {
        title: 'timeline'
      }
    },{
      path: 'invoice',
      component: InvoiceComponent,
      data: {
        title: 'invoice'
      }
    },{
      path: 'gallery',
      component: GalleryComponent,
      data: {
        title: 'gallery'
      }
    },
    {
      // Used for demo purpose
      // Only in casual and executive
      path: 'timeline/:type',
      component: TimelineComponent,
      data: {
        title: 'timeline'
      }
    }]
  }
];
