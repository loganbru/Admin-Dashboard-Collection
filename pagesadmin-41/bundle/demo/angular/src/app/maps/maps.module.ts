import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
//Core Pages Layout Components
import { SharedModule } from '../@pages/components/shared.module';

import { GoogleMapPage } from './google/google.component';
import { NguiMapModule} from '@ngui/map';
import { MapsRoutes  } from './maps.routing';
@NgModule({
  imports: [
    CommonModule,
    RouterModule.forChild(MapsRoutes),
    SharedModule,
    NguiMapModule.forRoot({apiUrl: 'https://maps.google.com/maps/api/js?key=AIzaSyCR8KzV6CpcQpRvYDb0xp6Vw46HSN6qOes'})
  ],
  declarations: [GoogleMapPage]
})
export class MapsModule { }
