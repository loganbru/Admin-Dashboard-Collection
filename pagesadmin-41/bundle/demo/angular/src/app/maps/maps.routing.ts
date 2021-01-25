import { Routes } from '@angular/router';
import { GoogleMapPage } from './google/google.component';
export const MapsRoutes: Routes = [
  {
    path: '',
    children: [{
      path: 'google',
      component: GoogleMapPage
    },
    {
      path: 'google/:type',
      component: GoogleMapPage
    }]
  }
];