import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { ExtraRouts } from './extra.routing';

//NGX Bootstrap Components
import { CollapseModule } from 'ngx-bootstrap';
import { BsDropdownModule } from 'ngx-bootstrap';
//Thirdparty
import {NgsRevealModule} from 'ng-scrollreveal';
import { IsotopeModule } from 'ngx-isotope';
import { SwiperModule, SWIPER_CONFIG, SwiperConfigInterface } from 'ngx-swiper-wrapper';

// Dependant of pg-slider
import { FormsModule } from '@angular/forms'; 
import { pgSliderModule } from '../@pages/components/slider/slider.module';

const DEFAULT_SWIPER_CONFIG: SwiperConfigInterface = {
  direction: 'horizontal',
  slidesPerView: 'auto'
};

import { ModalModule } from 'ngx-bootstrap';


//Demo Page
import { BlankpageComponent } from './blankpage/blankpage.component';
import { SharedModule } from '../@pages/components/shared.module';
import { GalleryComponent } from './gallery/gallery.component';
import { TimelineComponent } from './timeline/timeline.component';
import { InvoiceComponent } from './invoice/invoice.component';

import { GalleryService } from './gallery/gallery.service';

@NgModule({
  imports: [
    CommonModule,
    SharedModule,
    RouterModule.forChild(ExtraRouts),
    CollapseModule.forRoot(),
    BsDropdownModule.forRoot(),
    NgsRevealModule.forRoot(),
    IsotopeModule,
    SwiperModule,
    FormsModule,
    pgSliderModule,
    ModalModule.forRoot()
  ],
  providers:[GalleryService, {
    provide: SWIPER_CONFIG,
    useValue: DEFAULT_SWIPER_CONFIG
  }],
  declarations: [BlankpageComponent, GalleryComponent, TimelineComponent, InvoiceComponent]
})
export class ExtraModule { }
