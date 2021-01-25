import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
//Bootstrap Components by ngx-bootstrap
import { TabsModule } from 'ngx-bootstrap';

//Pages Components by ace
import { SharedModule } from '../@pages/components/shared.module';
import { pgTabsModule } from '../@pages/components/tabs/tabs.module';
import { pgCollapseModule } from '../@pages/components/collapse';

//Demo Pages
import { RootbuilderComponent } from './rootbuilder/rootbuilder.component';
import { CasualBuilderComponent } from './casual-builder/casual-builder.component';
import { CondensedBuilderComponent } from './condensed-builder/condensed-builder.component';
import { ExecutiveBuilderComponent } from './executive-builder/executive-builder.component';
import { SimplywhiteBuilderComponent } from './simplywhite-builder/simplywhite-builder.component';
import { buiderRoutes } from './builder.routing';
import { CorporateBuilderComponent } from './corporate-builder/corporate-builder.component';

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forChild(buiderRoutes),
    TabsModule.forRoot(),
    pgCollapseModule.forRoot(),
    SharedModule,
    pgTabsModule,
  ],
  declarations: [
    RootbuilderComponent,
    CasualBuilderComponent,
    CondensedBuilderComponent, 
    ExecutiveBuilderComponent, 
    SimplywhiteBuilderComponent, 
    CorporateBuilderComponent
  ]
})
export class BuilderModule { }
