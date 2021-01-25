//Angular Dependencies
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
//Router
import { LayoutsRoutes } from './layouts.routing';

//Core Pages Layout Components
import { SharedModule } from '../@pages/components/shared.module';

//Thirdparty components

//Sample Demo pages
import { SecondaryComponent } from './secondary/secondary.component';
import { SecondaryComponentLight } from './secondary-light/secondary.component';
import { SecondaryHorizontalComponent } from './secondary-horizontal/secondary-horizontal.component';
import { DefaultComponent } from './default/default.component';
import { BoxedComponent } from './boxed/boxed.component';
import { BoxedAltComponent } from './boxed-alt/boxed-alt.component';
import { SecondaryHorizontalCasualComponent } from './secondary-horizontal-casual/secondary-horizontal-casual.component';

@NgModule({
  imports: [
    CommonModule,
    SharedModule,
    RouterModule.forChild(LayoutsRoutes),
  ],
  declarations: [SecondaryComponent,SecondaryComponentLight, SecondaryHorizontalComponent, DefaultComponent, BoxedComponent, BoxedAltComponent, SecondaryHorizontalCasualComponent],
  providers: []
})
export class LayoutPageModule { }
