//Angular Dependencies
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { HttpModule} from '@angular/http';
import { HttpClientModule } from '@angular/common/http';
//Requires Forms to be imported for Checkbox buttons
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { FilterPipeModule } from 'ngx-filter-pipe';
import { uiRoute } from './ui.routing';

//Core Pages Layout Components
import { SharedModule } from '../@pages/components/shared.module';

//Bootstrap Components by ngx-bootstrap
import { AlertModule } from 'ngx-bootstrap';
import { TooltipModule } from 'ngx-bootstrap';
import { ModalModule } from 'ngx-bootstrap';
import { ButtonsModule } from 'ngx-bootstrap/buttons';
import { TabsModule } from 'ngx-bootstrap';
import { BsDropdownModule } from 'ngx-bootstrap';
//Thirdparty Treeview component
import { TreeModule } from 'angular-tree-component';

//Pages Components by ace
import { pgTabsModule } from '../@pages/components/tabs/tabs.module';
import { MessageModule } from '../@pages/components/message/message.module';
import { MessageService } from '../@pages/components/message/message.service';
import { pgCollapseModule } from '../@pages/components/collapse';
import { ProgressModule } from '../@pages/components/progress/progress.module';
import { pgSliderModule } from '../@pages/components/slider/slider.module';
import { pgSelectfx } from '../@pages/components/cs-select/select.module';

//Sample Demo pages
import { TypopageComponent } from './typopage/typopage.component';
import { IconspageComponent } from './iconspage/iconspage.component';
import { NotificationspageComponent } from './notificationspage/notificationspage.component';
import { ModalspageComponent } from './modalspage/modalspage.component';
import { ProgresspageComponent } from './progresspage/progresspage.component';
import { TabspageComponent } from './tabspage/tabspage.component';
import { ButtonspageComponent } from './buttonspage/buttonspage.component';
import { ColorspageComponent } from './colorspage/colorspage.component';
import { SliderpageComponent } from './sliderpage/sliderpage.component';
import { TreeviewpageComponent } from './treeviewpage/treeviewpage.component';

//Services
import { IconsService } from './iconspage/icons.service';


@NgModule({
  imports: [
    CommonModule,
    SharedModule,
    HttpModule,
    HttpClientModule,
    FilterPipeModule,
    RouterModule.forChild(uiRoute),
    ButtonsModule.forRoot(),
    TabsModule.forRoot(),
    pgCollapseModule.forRoot(),
    FormsModule,ReactiveFormsModule,
    BsDropdownModule.forRoot(),
    AlertModule.forRoot(),
    TooltipModule.forRoot(),
    ModalModule.forRoot(),
    ProgressModule.forRoot(),
    pgTabsModule,
    pgSelectfx,
    MessageModule,
    pgSliderModule,
    TreeModule
  ],
  declarations: [ButtonspageComponent, 
    ColorspageComponent, 
    TypopageComponent, 
    IconspageComponent, 
    NotificationspageComponent, 
    ModalspageComponent, 
    ProgresspageComponent, 
    TabspageComponent, 
    SliderpageComponent, 
    TreeviewpageComponent],
  providers: [IconsService,MessageService]
})
export class UiModule { }